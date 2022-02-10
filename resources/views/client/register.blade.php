@extends('client.layout.master')
@section('content')
    <main>
        <div class="box-main">
            <div class="container-register">
                <div class="title">Đăng ký tài khoản</div>
                <div class="content">
                    <form action="/register" method="post">
                        @csrf
                        <div class="user-details">
                            <div class="input-box">
                                <span class="details">Họ và tên</span>
                                <input type="text" name="fullName" placeholder="Nhập tên của bạn">
                                @error('fullName')
                                <div class="alert alert-danger">* {{ $message }}</div>
                                @enderror
                            </div>
                            <div class="input-box">
                                <span class="details">Tên tài khoản</span>
                                    <input type="text" name="username" placeholder="Nhập tên tài khoản">
                                @error('username')
                                <div class="alert alert-danger">* {{ $message }}</div>
                                @enderror
                            </div>
                            <div class="input-box">
                                <span class="details">Email</span>
                                <input type="text" name="email" placeholder="Nhập email của bạn">
                                @error('email')
                                <div class="alert alert-danger">* {{ $message }}</div>
                                @enderror
                            </div>
                            <div class="input-box">
                                <span class="details">Số điện thoại</span>
                                <input type="text" name="phone" placeholder="Nhập số điện thoại">
                                @error('phone')
                                <div class="alert alert-danger">* {{ $message }}</div>
                                @enderror
                            </div>
                            <div class="input-box">
                                <span class="details">Mật khẩu</span>
                                <input type="password" name="password" placeholder="Nhập mật khẩu">
                                @error('password')
                                <div class="alert alert-danger">* {{ $message }}</div>
                                @enderror
                            </div>
                            <div class="input-box">
                                <span class="details">Xác nhận mật khẩu</span>
                                <input type="password" name="password_confirmation"  placeholder="Xác nhận mật khẩu">
                                @error('password_confirmation')
                                <div class="alert alert-danger">* {{ $message }}</div>
                                @enderror
                            </div>
                            <div class="input-box">
                                <span class="details">Số cccd</span>
                                <input type="text" name="id_number" placeholder="Nhập số cccd">
                                @error('id_number')
                                <div class="alert alert-danger">* {{ $message }}</div>
                                @enderror
                            </div>
                            <div class="input-box">
                                <span class="details">Ảnh CMND/CCCD</span>
                                <input type="hidden" name="imgUpload" id="imgUpload">
                                <div name="previewDiv" id="previewDiv">

                                </div>
                                <button type="button" id="upload_widget" class="btn btn-sm btn-primary">Tải ảnh lên</button>
                                @error('imgUpload')
                                <div class="alert alert-danger">* {{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="rules">
                            <input type="checkbox" class="checkbox" required="">
                            <span>Tôi đồng ý với điều khoản và dịch vụ</span>
                        </div>
                        <div class="button">
                            <input type="submit" value="Đăng ký">
                        </div>
                        <p class="link-login" >Đã có tài khoản? <a href="/login"> Đăng nhập ngay!</a></p>
                    </form>
                </div>
            </div>
        </div>
    </main>

@endsection
