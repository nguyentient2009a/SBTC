<?php

namespace App\Http\Controllers;

use App\Models\AccountClient;
use App\Models\Trade;
use App\Models\TradeRequest;
use Illuminate\Http\Request;

class PersonalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index($id)
    {
        $account = AccountClient::find($id);
        $trade = Trade::where('account_id' , $account->id)->paginate(10);
        return view('client.personal',['account'=>$account, 'trade'=>$trade]);
    }
    public function tradeRequest()
    {
        $userId = session()->get('userId');
        $accountUser = AccountClient::find($userId);
        $listRequest = TradeRequest::where('account_request_id',$userId)->get();
        return view('client.my-request',['accountUser'=>$accountUser,'listRequest'=>$listRequest]);
    }
    public function requestPending()
    {
        $userId = session()->get('userId');
        $accountUser = AccountClient::find($userId);
        $listRequest = TradeRequest::where('account_id',$userId)->get();
        return view('client.pending-request',['accountUser'=>$accountUser,'listRequest'=>$listRequest]);
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
