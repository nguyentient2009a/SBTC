<!DOCTYPE html>
<html lang="vi" xmlns="http://www.w3.org/1999/xhtml">

<head>
    @include('client.layout.style-post')
</head>

<body class="raovat-body" id="raovat_body" itemscope itemtype="http://schema.org/WebPage">
<style>
    img {
        max-width: 20%;
    }
</style>
<main class="main">

    <section class="post-information-area">
        <div class="area-inner">
            <h1 class="title-page"><a href="/">Trang chủ</a></h1>
            <div class="form-posting-area">
                <form action="/trade-request/{{$item->id}}" method="post" class="form-posting form-horizontal">
                    @csrf
                    <div class="form-posting-inner">
                        <!-- Multiple Radios -->
                        <div class="form-group row">
                            <label class="col-md-12 control-label text-center" for="parent_id" style="color: #0a6aa1; font-size: 30px">Tạo yêu cầu trao đổi </label>
                        </div>
                        <!-- Expand Value-->
                        <div class="form-group row" id="expand-value">
                        </div>
                        <!-- Text input-->
                        <div class="form-group row">
                            <label class="col-md-12 control-label" for="title">Lời nhắn(<span
                                    style="color: red">*</span>):</label>
                            <div class="col-md-12">
                                <input maxlength="70" required id="title" name="messenger_request" type="text" placeholder=""
                                       class="form-control input-md" value="">
                            </div>
                        </div>

{{--                        đoạn này để lấy ra id bài viết và tài khoản của người đăng--}}
                        <input maxlength="70" required id="title" name="trade_id" type="hidden" placeholder=""
                               class="form-control input-md" value="{{$item->id}}">
                        <input maxlength="70" required id="title" name="account_id" type="hidden" placeholder=""
                               class="form-control input-md" value="{{$item->account_id}}">
{{--                        đoạn này lấy ra id account của người gửi --}}
                        <input maxlength="70" required id="title" name="account_request_id" type="hidden" placeholder=""
                               class="form-control input-md" value="{{$userId}}">
                        <!-- Select Basic -->
                        <div class="form-group row">
                            <label class="col-md-12 control-label">Lựa chọn bài viết của bạn (<span
                                    style="color: red">*</span>):</label>
                            <div class="col-md-12">
                                    <select name="trade_request_id">
                                        <option value="">Bài viết của bạn</option>
                                        @foreach($listUserTrade as $trade)
                                            <option value="{{$trade->id}}">{{$trade->title}}</option>
                                        @endforeach
                                    </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-7 text-center">
                                <a href="/post/upload"><input type="button" value="ĐĂNG TIN MỚI" class="btn-post-information"></a>
                            </div>
                            <div class=" text-center">
                                <input type="submit" value="GỬI YÊU CẦU" class="btn-post-information">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
</main>
</div>
@include('client.layout.script')
@include('client.layout.script-post')
</body>
