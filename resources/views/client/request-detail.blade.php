@extends('client.layout.master')
@section('content')
    <style>
        img {
            max-width: 100%;
        }
    </style>
    <main>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="beadcrumb">
                        <ol class="breadcrumb-inner">
                            <li class="breadcrumb-item">
                                <a href="/">Trang chủ</a>
                            </li>
                            <li class="breadcrumb-item active">Yêu cầu trao đổi</li>
                        </ol>
                    </div>
                </div>
            </div>

            <div class="row bg-white m-0" id="details">
                <div class="col-lg-8 col-md-12 col-12 col-left pr-0">
                    <div class="main-left">
                        <div class="line-break"></div>
                        {{--                        detail--}}
                        <div class="details-post">
                            <h1><a href="/detail/{{$requestDetail->myTrade->id}}"> {{$requestDetail->myTrade->title}}</a></h1>
                            <div class="image-post clearfix">

                                <div class="image-post-left">
                                    @foreach($requestDetail->myTrade->listPhoto as $url )
                                        <div class="items-image-details">
                                            <a href="#">
                                                <img src="{{$url}}" alt="">
                                            </a>
                                        </div>
                                    @endforeach
                                </div>
                                <div class="image-post-right">
                                    @foreach($requestDetail->myTrade->listPhoto as $url )
                                        <div class="">
                                            <a href="#">
                                                <img src="{{$url}}" alt="">
                                            </a>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <p class="info-posting-time">Ngày tạo : {{$requestDetail->created_at}}</p>
                            <p><a href="/detail/{{$requestDetail->trade_request_id}}">Xem bài viết của bạn</a></p>
                            <p><a href="/detail/{{$requestDetail->trade_id}}">Xem bài bạn muốn trao đổi</a></p>
                            <div class="info-post">
                                <div class="box-title">
                                    <h2 class="title">Trạng thái:</h2>
                                </div>
                                <div class="box-information {{$requestDetail->myTrade->statusColor}}">
                                    {{$requestDetail->myTrade->statusName}}
                                </div>
                                <div class="line-break"></div>
                            </div>
                            <div class="line-break"></div>
                            <div class="info-post">
                                <div class="box-title">
                                    <h2 class="title">Lời nhắn:</h2>
                                </div>
                                <div class="box-information">
                                    {{$requestDetail->messenger_request}}
                                </div>
                                <div class="line-break"></div>
                            </div>
                        </div>
                    </div>
                </div>

                {{--                right--}}
                <div class="col-lg-4 col-md-4 d-none d-lg-block">
                    <div class="main-right">
                        <div class="sidebar">
                            <div class="box-title">
                                <h2 class="title">Tin rao nổi bật</h2>
                            </div>
                            <div class="list-item-sidebar">
                                @for($i = 0; $i <3 ; $i ++ )
                                    <div class="item-post">
                                        <a href="/detail/{{$leftItem[$i]->id}}" class="item-image">
                                            <img src="{{ $leftItem[$i]->firstImg }}" style="max-width: 30%" alt="">
                                        </a>
                                        <div class="item-info">
                                            <h3>
                                                <a href="/detail/{{$leftItem[$i]->id}}"> {{ $leftItem[$i]->title }} </a>
                                            </h3>
                                            <div class="price">
                                                <p>
                                                    {{ $leftItem[$i]->description }}
                                                </p>
                                            </div>
                                            <p class="location">
                                                {{ $leftItem[$i]->address }}
                                            </p>
                                            <div class="box-price clearfix">
                                                <p class="price-current" id="statusName">Trạng thái:
                                                    <span class="{{$leftItem[$i]->statusColor}}">{{$leftItem[$i]->statusName}}</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                @endfor
                            </div>
                        </div>
                    </div>
                </div>

                {{--                right--}}

            </div>
        </div>
    </main>
@endsection
