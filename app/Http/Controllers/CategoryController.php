<?php

namespace App\Http\Controllers;

use App\Models\Category;

use App\Models\City;
use App\Models\Trade;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.category.listCategory',['list' => Category::paginate(10)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.category.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $validated = $request->validate(
            [
                'name' => 'required|min:4|max:255',
            ],
            [
                'name.required' => 'Vui lòng nhập tên danh mục',
                'name.min' => 'Tên danh mục phải lớn hơn 4 ký tự.',
                'name.max' => 'Tên danh mục phải nhỏ hơn 255 ký tự.',
            ]

        );
        $obj = new Category();
        $obj->category_name = $request->get('name');
        $obj->save();
        return redirect('/admin/list-category');
    }


    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
     public function show()
    {


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
 * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Category::find($id);
        return view('admin.category.edit',['item'=> $item]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
 * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        $obj = Category::find($id);
        $obj->category_name = $request->get('name');
        $obj->updated_at = Carbon::now();
        $obj->save();
        return redirect('/admin/list-category');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
 * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        $obj = Category::find($id);
        $obj->delete();
        return redirect('/admin/list-category');
    }
}
