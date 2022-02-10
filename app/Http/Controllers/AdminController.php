<?php

namespace App\Http\Controllers;

use App\Models\AccountClient;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        if (session()->has('usernameAdmin')) {
            return view('admin.index');
        }
        else{
            return redirect('/admin/login');
        }
    }

    public function login()
    {
        return view('admin.login');
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
        $username = $request->get('username');
        $password = $request->get('password');
        $login = Admin::where('username', $username)->first();
        if (Hash::check($password, $login->password)) {
            $request->session()->put('usernameAdmin', $login->username);
            alert()->success('Success', 'Đăng nhập thành công');
            return redirect('/admin/index',);

        } else {
            alert()->error('Error', 'Tài khoản hoặc mật khẩu không đúng');
            return redirect('/admin/login',);
        }
    }
    public function logout()
    {
        if (session()->has('usernameAdmin')) {
            session()->forget('usernameAdmin');
            return redirect('/admin/login');
        }
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
