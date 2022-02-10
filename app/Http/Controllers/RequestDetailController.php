<?php

namespace App\Http\Controllers;

use App\Models\AccountClient;
use App\Models\Trade;
use App\Models\TradeRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class RequestDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index($id)
    {
        if (session()->has('userId')) {
            $requestDetail = TradeRequest::find($id);
            $leftItem = Trade::where('status',  2)->orderBy('updated_at', 'desc')->paginate(10);
            return view('client.request-detail',['requestDetail'=>$requestDetail,'leftItem'=>$leftItem]);
        } else {
            alert()->warning('Thông báo', 'Vui lòng đăng nhập');
            return redirect('/login');
        }
    }

    public function pendingDetail($id)
    {
        if (session()->has('userId')) {
            $requestDetail = TradeRequest::find($id);
            $leftItem = Trade::where('status',  2)->orderBy('updated_at', 'desc')->paginate(10);
            return view('client.pending-detail',['requestDetail'=>$requestDetail,'leftItem'=>$leftItem]);
        } else {
            alert()->warning('Thông báo', 'Vui lòng đăng nhập');
            return redirect('/login');
        }
    }
    public function acceptPending($id){
        $item = TradeRequest::find($id);
        $item->status_request = 2;
        $item->save();
        $trade = Trade::find($item->trade_id);
        $trade->status_trade = 3;
        $trade->save();
        $trade_request = Trade::find($item->trade_request_id);
        $trade_request->status_trade = 3;
        $trade_request->save();
        $account_request = AccountClient::find($trade_request->account_id);
        $account = AccountClient::find($trade->account_id);
        alert()->success('Success', 'Bạn đã đồng ý trao đổi, người yêu cầu trao đổi sẽ nhận được thông tin liên hệ');
        $data = array('phone'=>$account->phone,'title'=>$trade->title, 'full_name'=>$account_request->full_name);
        Mail::send('emails.accept', $data, function($message) use ($account_request) {
            $message->to($account_request->gmail, 'Tutorials Point')->subject
            ('Thông báo về yêu cầu trao đổi');
            $message->from('sbtctraodoi@gmail.com','TraoDoi Sbtc');
        });
        return redirect('/');
    }
    public function cancelPending($id){
        $item = TradeRequest::find($id);
        $item->status_request = 3;
        $item->save();
        $account_request = AccountClient::find($item->account_request_id);
        alert()->success('Success', 'Bạn đã từ chối trao đổi, chúng tôi sẽ gửi mail cho người yêu cầu trao đổi');
        $data = array('full_name'=>$account_request->full_name);
        Mail::send('emails.cancel', $data, function($message) use ($account_request) {
            $message->to($account_request->gmail, 'Tutorials Point')->subject
            ('Thông báo về yêu cầu trao đổi');
            $message->from('sbtctraodoi@gmail.com','TraoDoi Sbtc');
        });
        return redirect('/');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
