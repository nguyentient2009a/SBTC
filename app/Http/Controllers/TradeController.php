<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\Category;
use App\Models\City;
use App\Models\DiaGioiHanhChinh;
use App\Models\District;
use App\Models\PhuongXa;
use App\Models\QuanHuyen;
use App\Models\ThanhPho;
use App\Models\Trade;
use App\Models\Ward;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TradeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
//        $address = DB::table('tinhthanhpho')->get();
//        $quanhuyen = QuanHuyen::all()->where('matp','01');
        $thanhpho = City::all();
//        $phuongxa = PhuongXa::all();
        $category = Category::all();
        if (session()->has('username')) {
            return view('client.postTrade', ['thanhpho' => $thanhpho, 'category' => $category]);
        } else{
            alert()->info('Thông báo','Vui lòng đăng nhập');
            return redirect('/login');
        }
//        return view('client.postTrade', ['thanhpho' => $thanhpho, 'category' => $category]);
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
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $validated = $request->validate(
            [
                'title' => 'required|min:5',
                'category_id' => 'required',
                'address' => 'required',
                'city' => 'required',
                'district' => 'required',
                'ward' => 'required',
                'description' => 'required',
                'content' => 'required',

            ],
            [
                'title.required' => 'Tiêu đề không được để trống',
                'title.min' => 'Tiêu đề tối thiểu 4 ký tự',
                'category_id.required' => 'Vui lòng chọn danh mục bài viết',
                'address.required' => 'Vui lòng nhập địa chỉ',
                'city.required' => 'Vui lòng chọn thành phố',
                'district.required' => 'Vui lòng chọn quận, huyện',
                'ward.required' => 'Vui lòng chọn phường',
//                'address.required' => 'Địa chỉ không được để trống',
                'description.required' => 'Vui lòng giới thiệu về sản phẩm',
                'content.required' => 'Nhập chi tiết về sản phẩm',
            ]
        );
        //db
        $obj = new Trade();
        $userId = session()->get('userId');
        $obj->title = $request->get('title');
        $obj->category_id = $request->get('category_id');
        $obj->address = $request->get('address');
        $obj->city = $request->get('city');
        $obj->district = $request->get('district');
        $obj->ward = $request->get('ward');
        $obj->description = $request->get('description');
        $obj->account_id = $userId;
        $obj->content = $request->get('content');
        $obj->image = $request->get('imgUpload');
        $obj->save();
        alert()->warning('Thông báo','Đăng bài thành công, bạn sẽ nhận được email khi bài viết được duyệt');
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

    public function getCity (){
        return City::all();
    }

    public function getDistrict (Request  $request){
        $cityId = $request->cityId;
        return District::where('matp', $cityId)->get();
    }

    public function getWard (Request  $request){
        $districtId = $request->districtId;
        return Ward::where('maqh', $districtId)->get();
    }
}
