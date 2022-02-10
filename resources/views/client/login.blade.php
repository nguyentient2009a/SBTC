@extends('client.layout.master')
@section('content')
    <main>
        <div class="box-main">
            <div class="container-login">
                <header>Đăng nhập</header>
                <form action="/login" method="post">
                    @csrf
                    <div class="field email">
                        <div class="input-area">
                            <input type="text" placeholder="Username" name="username">
                        </div>
                        @error('username')
                        <div class="alert alert-danger">* {{ $message }}</div>
                        @enderror
                    </div>
                    <div class="field password">
                        <div class="input-area">
                                <input type="password" placeholder="Password" name="password">
                        </div>
                        @error('password')
                        <div class="alert alert-danger">* {{ $message }}</div>
                        @enderror
                    </div>
                    <div class="pass-txt"><a href="#">Quên mật khẩu?</a></div>
                    <input type="submit" value="Đăng nhập">
                </form>
                <div class="sign-txt">Chưa là thành viên? <a href="/register">Đăng ký ngay!</a></div>
            </div>
        </div>
    </main>
@endsection

