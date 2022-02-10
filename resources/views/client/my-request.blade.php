@extends('client.layout.master')
@section('content')
    <main class="main">

        <div class="container">
            <nav class="breadcrumb-area" aria-label="breadcrumb">
                <ol class="breadcrumb-inner">
                    <li class="breadcrumb-item"><a href="/" title="Trang chủ">Trang chủ</a></li>
                    <li class="breadcrumb-item"><a href="#" title="Tài khoản">Tài khoản</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{Session::get('username')}}</li>
                </ol>
            </nav>
        </div>

        <section class="seller_content_area">
            <div class="container">
                <div class="area_inner d-flex align-items-center">
                    <div class="area_content flex-column bg-white">

                        <div class="profile-area">
                            <div class="profile-info">
                                <div class="info-image">
                                    <img src="{{$accountUser->image_avatar}}"
                                         title="tranhgachmenviet" alt="{{$accountUser->username}}" itemprop="image"
                                         onerror="this.onerror=null;this.src='{{$accountUser->image_avatar}}'">
                                </div>
                                <div class="info-txt">
                                    <p><h1 class="seller-name">{{$accountUser->username}}</h1></p>
                                    <p class="seller-created-time">Ngày tham gia: {{$accountUser->created_at}}</p>
                                    <p class="seller-location"></p>
                                    <p class="seller-phone">Phone: *********</p>
                                    <p class="seller-email">Email: *********</p>
                                </div>
                            </div>
                        </div>
                        <div class="wrap-list-item-fluid">
                            <div class="title-page">
                                <h2 class="title">Bài viết đã yêu cầu trao đổi : <span class="total-post"></span></h2>
                            </div>
                            <div class="list-item-post">
                                @foreach($listRequest as $item)
                                    <div class="item-post">
                                        <a href="/detail/{{$item->myRequest->id}}" class="item-image">
                                            <img src="{{ $item->myRequest->firstImg }}" style="max-width: 100%" alt="">
                                        </a>
                                        <div class="item-info">
                                            <h3>
                                                <a href="/request-detail/{{$item->id}}">Lời nhắn: {{ $item->messenger_request }}</a>
                                            </h3>
                                            <div class="price">
                                                <p>
                                                   {{ $item->myRequest->title }}
                                                </p>
                                            </div>
                                            <p style="font-size: 15px">Đăng bởi : {{ $item->myRequest->account->full_name }}  </p>

                                            <p class="location">
                                                {{ $item->myRequest->address }}, {{ $item->myRequest->wardName->name }}
                                                ,{{ $item->myRequest->districtName->name }},{{ $item->myRequest->cityName->name }}
                                            </p>
                                            <div class="box-price clearfix">
                                                <p class="price-current" id="statusName">Trạng thái:
                                                    <span class="{{$item->myRequest->statusColor}}">{{$item->myRequest->statusName}}</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
{{--                                @include('.client.pagination.default', ['paginator' => $item])--}}
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
