<?php

namespace App\Http\Controllers;

use App\Models\AccountClient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AccountTable extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.account-client');
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
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {

        $account = AccountClient::find($id);
        $password = $request->get('old_password');
        if ($password) {
            $validate = $request->validate(
                [
                    'newPassword' => 'min:6',
                ],
                [
                    'newPassword.min' => 'Mật khẩu tối thiểu 6 ký tự',
                ]);
            if (Hash::check($password, $account->password_hash)) {
                $newPwd = $request->get('newPassword');
                $account->password_hash = Hash::make($newPwd);
                $account->full_name = $request->get('full_name');
                $account->image_avatar = $request->get('imgUpload');
                $account->save();
                session()->forget('username');
                session()->forget('userId');
                alert()->success('Success', 'Thay đổi thông tin thành công, vui lòng đăng nhập lại');
            } else {
                alert()->warning('Lỗi', 'Mật khẩu cũ không đúng');
                return back();
            }
        } else {
            $account->full_name = $request->get('full_name');
            $account->image_avatar = $request->get('imgUpload');
            $account->save();
            alert()->success('Success', 'Thay đoỏi thông tin thành công');
        }
        return redirect('/');

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
