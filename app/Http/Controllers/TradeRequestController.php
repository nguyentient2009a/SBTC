<?php

namespace App\Http\Controllers;

use App\Models\Trade;
use App\Models\TradeRequest;
use Illuminate\Http\Request;

class TradeRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index($id)
    {
        $item = Trade::find($id);
        if (session()->has('userId')) {
            $userId = session()->get('userId');
            $listUserTrade = Trade::where('account_id', $userId)->get();
            return view('client.trade-request',['item' =>$item,'listUserTrade'=>$listUserTrade, 'userId' =>$userId]);
        } else{
            alert()->warning('Thông báo','Vui lòng đăng nhập');
            return redirect('/login');
        }
//        return view('client.trade-request',['item' =>$item]);
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $trade = new TradeRequest();
        $trade->trade_id = $request->get('trade_id');    // id bài viết
        $trade->trade_request_id = $request->get('trade_request_id'); ; //  id của bài viết của người gửi
        $trade->account_id = $request->get('account_id');; // cái này thì lôi từ bài viết ra, id người đăng
        $trade->account_request_id = $request->get('account_request_id');; // cái này lôi từ session ra, id người gửi yêu cầu
        $trade->messenger_request = $request->get('messenger_request');
        $trade->status_request = 1; // trạng thaí mặc định là 1
        // đoạn này phải join tới bảng của cả 2 người để lấy ra email gửi về
        $trade->save();
        alert()->success('Success','Đã gửi yêu cầu thành công, hãy chờ được đồng ý');
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
