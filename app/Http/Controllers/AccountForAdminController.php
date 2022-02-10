<?php

namespace App\Http\Controllers;

use App\Models\AccountClient;
use App\Models\Trade;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AccountForAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        $list = AccountClient::where('status',  1)->orderBy('created_at', 'desc')->paginate(10);
        return view('admin.account.pending',['list' => $list]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function list(Request $request)
    {
        $status = $request->get('status');
        $list = AccountClient::where('id', '!=', 0)->orderBy('updated_at', 'desc');
        if ($status != 0 ){
            $list = $list->where('status', $status);
        };
        $list = $list->paginate(10);
        return view('admin.account.list',['list' =>$list, 'checkedStatus' => $status]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function listDelete()
    {
        $list = AccountClient::where('status',  3)->paginate(10);
        return view('admin.account.cancel',['list' =>$list]);
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
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function update(Request $request,$id)
    {
        $obj = AccountClient::find($id);
        $obj->status = 2;
        $obj->updated_at = Carbon::now();
        $obj->save();
        return redirect('admin/account-list');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function destroy(Request $request,$id)
    {
        $obj = AccountClient::find($id);
        $obj->status = 3;
        $obj->updated_at = Carbon::now();
        $obj->save();
        return redirect('admin/account-list');
    }
}
