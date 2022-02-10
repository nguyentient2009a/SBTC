<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Trade;
use App\Models\AccountClient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $search_text = $request->get('search_text');
        $list = Trade::where('status',  2)->orderBy('updated_at', 'desc');
        $leftItem = Trade::where('status',  2)->orderBy('updated_at', 'desc')->paginate(10);
        if ($search_text){
            $list = $list->where('title', 'LIKE' , '%'.$search_text.'%')->paginate(10);
        } else {
            $list = $list->paginate(10);
        }
        return view('client.index',['list' => $list, 'leftItem'=>$leftItem]);
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
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function show($id)
    {
        $trade = Trade::where('status',  2)->orderBy('updated_at', 'desc')->paginate(10);
        $item = Trade::find($id);
        return view('client.detail',['item' =>$item, 'trade' => $trade]);
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
