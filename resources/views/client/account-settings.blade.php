@extends('client.layout.master')
@section('content')
    <main>
        <div class="box-main">
            <div class="wrapper bg-white mt-sm-5">
                <form action="/account-settings/{{$account->id}}" method="post">
                    @csrf
                    <h1 class="pb-4 border-bottom">Cài đặt tài khoản</h1>
                    <div class="d-flex align-items-start py-3 border-bottom">
                        <div id="previewAvt"><img src="{{$account->image_avatar}}" class="img" alt="" id="avatarImg"></div>
                        <div class="form-group pl-sm-4 pl-2">
                            <input type="hidden" name="imgUpload" id="imgUpload" value="{{$account->image_avatar}}">
                            <div name="previewDiv" id="previewDiv">

                            </div>
                            <b>Ảnh đại diện</b>
                            <p>Cập nhật ảnh đại diện của bạn</p>
                            <button type="button" id="upload_widget" class="btn btn-sm btn-primary">Tải lên
                            </button>
                        </div>
                    </div>
                    <div class="py-2">
                        <div class="d-sm-flex align-items-center pt-3" id="deactivate">
                            <div>
                                <b>Thông tin cơ bản</b>
                                <p>Một số thông tin sẽ được hiển thị công khai.</p>
                            </div>
                        </div>
                        <div class="row py-2">

                            <div class="col-md-6">
                                <label>Họ và tên</label>
                                <input name="full_name" type="text" class="bg-light form-control" value="{{$account->full_name}}">
                            </div>
                            <div class="col-md-6 pt-md-0 pt-3">
                                <label>Tên tài khoản</label>
                                <input disabled type="text" class="bg-light form-control" value="{{$account->username}}">
                            </div>
                        </div>
                        <div class="row py-2">
                            <div class="col-md-6">
                                <label>Email</label>
                                <input type="text" class="bg-light form-control" value="{{$account->gmail}}" disabled>
                            </div>
                            <div class="col-md-6 pt-md-0 pt-3">
                                <label>Số điện thoại</label>
                                <input type="text" class="bg-light form-control" value="{{$account->phone}}" disabled>
                            </div>
                        </div>
                        <div class="row py-2">
                            <div class="col-md-6">
                                <label>Số căn cước công dân</label>
                                <input type="text" class="bg-light form-control" value="{{$account->id_number}}" disabled>
                            </div>
                        </div>

                        <div class="py-3 pb-4 border-bottom">
                        </div>
                        <div class="d-sm-flex align-items-center pt-3" id="change-password">
                            <div>
                                <b>Thay đổi mật khẩu</b>
                                <p>Giữ an toàn cho tài khoản bằng cách thay đổi mật khẩu thường xuyên.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row py-2">
                        <div class="col-md-6">
                            <label>Mật khẩu hiện tại</label>
                            <input type="password" class="bg-light form-control" name="old_password">
                        </div>
                        <div class="col-md-6 pt-md-0 pt-3">
                            <label>Mật khẩu mới</label>
                            <input type="password" class="bg-light form-control" name="newPassword">
                            @error('newPassword')
                            <div class="alert alert-danger">* {{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="row py-2">
                        <div class="col-md-6">
                            <label>Nhập lại mật khẩu</label>
                            <input type="password" class="bg-light form-control" name="confirm_newPassword">
                            @error('confirm_newPassword')
                            <div class="alert alert-danger">* {{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="py-3 pb-4 border-bottom">
                        <input class="btn btn-primary mr-3" type="submit" value="Lưu thay đổi">
                    </div>
                </form>
            </div>
        </div>
    </main>
@endsection
