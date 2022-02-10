<?php

namespace App\Http\Controllers;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\AccountClient;
use App\Models\Trade;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Keygen\Keygen;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        return view('client.register');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return array
     */
    public function create(Request $request)
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $validated = $request->validate(
            [
                'username' => 'required|min:4|unique:account_clients,username',
                'email' => 'required|email|unique:account_clients,gmail',
                'password' => 'required|confirmed|min:6',
                'password_confirmation' => 'required',
                'fullName' => 'required|min:5',
                'phone' => 'required|min:10|max:11',
                'id_number' => 'required',
                'imgUpload' => 'required'
            ],
            [
                'username.required' => 'Tên đăng nhập không được để trống',
                'username.min' => 'Tên đăng nhập tối thiểu 4 ký tự',
                'username.unique' => 'Tên đăng nhập đã tồn tại',
                'email.required' => 'Email không được để trống',
                'email.email' => 'Email không đúng định dạng',
                'email.unique' => 'Email đã được đăng ký',
                'password.required' => 'Mật khẩu không được để trống',
                'password.confirmed' => 'Mật khẩu không trùng khớp',
                'password_confirmation.required' => 'Xác nhận không được để trống',
                'password.min' => 'Mật khẩu tối thiểu 6 ký tự',
                'confirmPassword.min' => 'Mật khẩu tối thiểu 6 ký tự',
                'phone.required' => 'Số điện thoại không được để trống',
                'phone.min' => 'Số điện thoại tối thiểu 10 ký tự',
                'fullName.required' => 'Tên không được để trống',
                'fullName.min' => 'Tên tối thiểu 5 ký tự',
                'id_number.required' => 'Số thẻ không được để trống',
                'imgUpload.required' => 'Vui lòng thêm ảnh giấy tờ tùy thân'
            ]
        );
//        db
        $salt = Keygen::token(64)->generate();
        $password = $request->get('password');
        $obj = new AccountClient();
        $obj->username = $request->get('username');
        $obj->gmail = $request->get('email');
        $obj->password_salt = $salt;
        $obj->password_hash = Hash::make($password);
        $obj->phone = $request->get('phone');
        $obj->full_name = $request->get('fullName');
        $obj->id_number = $request->get('id_number');
        $obj->image_id = $request->get('imgUpload');
        $obj->save();
        $data = array('title'=>'Xin chao vietnam', 'content'=>'Day la noi dung', 'full_name'=>$obj->full_name);
        Mail::send('emails.send', $data, function($message) use ($obj) {
            $message->to($obj->gmail, 'Tutorials Point')->subject
            ('Thông báo đăng kí tài khoản');
            $message->from('sbtctraodoi@gmail.com','TraoDoi Sbtc');
        });
        alert()->success('Success','Đã đăng ký thành công tài khoản hãy kiểm tra gmail');
        return redirect('/',);
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
