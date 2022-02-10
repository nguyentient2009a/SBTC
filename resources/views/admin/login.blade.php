<!DOCTYPE html>
<html lang="en">
<head>
    <title>LOGIN</title>

    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/nice-select.css')}}">
    <link rel="stylesheet" href="{{asset('css/slick.css')}}">
    <link rel="stylesheet" href="{{asset('css/slick-theme.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/reponsive.css')}}">
    <link rel="stylesheet" href="{{asset('css/css.min.css')}}">
</head>
<body>
    <main>
        <div class="box-main">
            <div class="container-login">
                <header>Quản trị viên</header>
                <form action="/admin/login" method="post">
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
                    <input type="submit" value="Đăng nhập">
                </form>
                <div class="sign-txt"> <a href="/">Quay về trang chủ</a></div>
            </div>
        </div>
    </main>
    @include('sweetalert::alert')
</body>
</html>

