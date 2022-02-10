@extends('client.layout.master')
@section('content')
    <main>
        <div class="container">
            <nav class="breadcrumb-area" aria-label="breadcrumb">
                <ol class="breadcrumb-inner">
                    <li class="breadcrumb-item"><a href="/" title="Trang chủ">Trang chủ</a></li>
                    <li class="breadcrumb-item"><a href="#" title="Tài khoản">Tài khoản</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{$account->full_name}}</li>
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
                                    <img src="{{$account->image_avatar}}"
                                         title="" alt="" itemprop="image"
                                         onerror="this.onerror=null;this.src='{{$account->image_avatar}}'">
                                </div>
                                <div class="info-txt">
                                    <h1 class="seller-name">{{$account->full_name}}</h1>
                                    <p class="seller-created-time">Ngày tham gia: {{$account->created_at}}</p>
                                    <p class="seller-location"></p>
                                    <p class="seller-phone">Email: *********</p>
                                    <p class="seller-email">Phone: *********</p>
                                </div>
                            </div>
                        </div>
                        <div class="wrap-list-item-fluid">
                            <div class="title-page">
                                <h2 class="title">Tin đã đăng: <span class="total-post">{{$trade->count()}} tin</span>
                                </h2>
                            </div>
                            <div class="list-item-post">
                                @foreach($trade as $item)
                                    <div class="item-post">
                                        <a href="/detail/{{$item->id}}" class="item-image">
                                            <img src="{{ $item->firstImg }}" style="max-width: 100%" alt="">
                                        </a>
                                        <div class="item-info">
                                            <h3>
                                                <a href="/detail/{{$item->id}}">{{ $item->title }}</a>
                                            </h3>
                                            <div class="price">
                                                <p>
                                                    {{ $item->description }}
                                                </p>
                                            </div>
                                            <p style="font-size: 15px">Đăng bởi : {{ $item->account->full_name }}  </p>

                                            <p class="location">
                                                {{ $item->address }}, {{ $item->wardName->name }}
                                                ,{{ $item->districtName->name }},{{ $item->cityName->name }}
                                            </p>
                                            <div class="box-price clearfix">
                                                <p class="price-current" id="statusName">Trạng thái:
                                                    <span class="{{$item->statusColor}}">{{$item->statusName}}</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
