<?php

namespace App\Http\Controllers;

use App\Models\Login;
use Illuminate\Support\Facades\Hash;
use MongoDB\Driver\Session;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\AccountClient;
use Illuminate\Http\Request;


class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        return view('client.login');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $username = $request->get('username');
        $password = $request->get('password');
        $login = AccountClient::where('username', $username)->first();
        if ($login && $login->status == 2){
            if (Hash::check($password, $login->password_hash)) {
//            \Illuminate\Support\Facades\Session::put('login', $login->username);
                $request->session()->put('username', $login->username);
                $request->session()->put('userId', $login->id);
                alert()->success('Success', 'Đăng nhập thành công');
                return redirect('/',);

            } else {
                alert()->error('Error', 'Tài khoản hoặc mật khẩu không đúng');
                return redirect('/login',);
            }
        } else {
            alert()->error('Error', 'Tài khoản không tồn tại hoặc chưa được duyệt');
            return redirect('/login',);
        }
    }

    public function logout()
    {
        if (session()->has('username')) {
            session()->forget('username');
            session()->forget('userId');
            return redirect('/');
        }
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
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
