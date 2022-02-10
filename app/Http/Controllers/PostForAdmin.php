<?php

namespace App\Http\Controllers;

use App\Models\Trade;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostForAdmin extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        $list = Trade::where('status',  1)->orderBy('created_at', 'asc')->paginate(10);
        return view('admin.post.pending',['list' =>$list]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function list(Request $request)
    {
        $checkedStatus = $request->get('status');
        // 1 : đang chờ duyệt, 2 là đòng
        // ý, 3 là từ chối
        $list = Trade::where('id', '!=', 0)->orderBy('updated_at', 'desc');
        if ($checkedStatus != 0 ){
            $list = $list->where('status', $checkedStatus);
        };
        $list = $list->paginate(10);
        return view('admin.post.list',['list' =>$list, 'checkedStatus' => $checkedStatus]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function listDelete()
    {
        $list = Trade::where('status',  3)->paginate(10);
        return view('admin.post.cancel',['list' =>$list]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
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
    public function update(Request $request, $id)
    {
        $obj = Trade::find($id);
        $obj->status = 2;
        $obj->updated_at = Carbon::now();
        $obj->save();
        return redirect('admin/post-list');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        $obj = Trade::find($id);
        $obj->status = 3;
        $obj->updated_at =  Carbon::now();
        $obj->save();
        return redirect('admin/post-list');
    }
}
