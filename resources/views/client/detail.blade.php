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
                            <li class="breadcrumb-item active">{{$item->category->category_name}}</li>
                        </ol>
                    </div>
                </div>
            </div>

            <div class="row bg-white m-0" id="details">
                <div class="col-lg-8 col-md-12 col-12 col-left pr-0">
                    <div class="main-left">

                        {{--                        img--}}
                        <div class="image-post clearfix">

                            <div class="image-post-left">
                                {{--                                @foreach($item->firstPhoto as $url )--}}
                                {{--                                <div class="items-image-details">--}}
                                {{--                                    <a href="#">--}}
                                {{--                                        <img src="{{$url}}" alt="">--}}
                                {{--                                    </a>--}}
                                {{--                                </div>--}}
                                {{--                                @endforeach--}}
                                @foreach($item->listPhoto as $url )
                                    <div class="items-image-details">
                                        <a href="#">
                                            <img src="{{$url}}" alt="">
                                        </a>
                                    </div>
                                @endforeach
                            </div>
                            <div class="image-post-right">

                                @foreach($item->listPhoto as $url )
                                    <div class="">
                                        <a href="#">
                                            <img src="{{$url}}" alt="">
                                        </a>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        {{--                        img--}}

                        <div class="line-break"></div>

                        {{--                         linh tinh--}}
                        <div class="row align-items-center">
                            <div class="col-lg-10 col-8">
                                <div class="list-item-socail">
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <i class="fab fa-facebook-f"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fab fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-link"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-2 text-right col-4">
                                <div class="btn-favorite">
                                    <span class="favorite-btn__like"><i class="fas fa-bookmark"></i></span>
                                </div>
                            </div>
                        </div>
                        {{--                         linh tinh--}}

                        <div class="line-break"></div>

                        {{--                        detail--}}
                        <div class="details-post">
                            <h1>{{$item->title}}</h1>
                            <p class="info-posting-time">{{$item->created_at}}</p>
                            <div class="box-price clearfix">
                                <p class="price-current" id="statusName">Trạng thái:
                                    <span class="{{$item->statusColor}}">{{$item->statusName}}</span>
                                </p>
                            </div>
                            <p class="info-location">
                                <span>Địa chỉ: </span>
                                {{ $item->address }}, {{ $item->wardName->name }},{{ $item->districtName->name }}
                                ,{{ $item->cityName->name }}
                            </p>
                            <div class="line-break"></div>
                            <div class="info-post">
                                <div class="box-title">
                                    <h2 class="title">Yêu cầu:</h2>
                                </div>
                                <div class="box-information">
                                    {{$item->description}}
                                </div>
                                <div class="line-break"></div>
                                <div class="box-title">
                                    <h2 class="title">Thông tin chi tiết:</h2>
                                </div>
                                <div class="content-post">
                                    {{$item->content}}
                                </div>
                            </div>
                            <div class="line-break"></div>
                            <div class="wrap-tags clearfix">
                                <div class="list-tags">
                                    <span class="tag-label">Tags: </span>
                                    <a class="item-tag" href=""> {{$item->category->category_name}}</a>
                                </div>
                            </div>
                            <div class="line-break"></div>
                            <div class="box-module box-supplier-fluid-2">
                                <div class="box-body">
                                    <div class="box-img">
                                        <a href="" title="" class="box">
                                            <img src="{{$item->account->image_avatar}}">
                                        </a>
                                    </div>
                                    <div class="info-supplier">
                                        <p class="info-item">
                                            <span class="info-label">Người đăng: </span>
                                            <a href="/personal/{{$item->account->id}}">{{$item->account->full_name}}</a>
                                        </p>
                                        <div class="border-line"></div>
                                        <p class="info-item">
                                            <span class="info-label">Yêu cầu trao đổi: </span>
                                            <span>
                                                <a href="/trade-request/{{$item->id}}" class="btn btn-success"><i class="fas fa-plus-square"></i> Tạo yêu cầu</a>
                                            </span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{--                        detail--}}

                        {{--                        lien quan--}}
                        <div class="related-post">
                            <div class="box-title">
                                <h2 class="title">Gợi ý cho bạn:</h2>
                            </div>
                            <div class="row">
                                @for($i = 0; $i < 6; $i ++ )
                                    <div class="col-lg-4 col-6">
                                        <div class="item-post-related">
                                            <a href="/detail/{{$trade[$i]->id}}" class="item-image">
                                                <img src="{{ $trade[$i]->firstImg }}" alt="">
                                            </a>
                                            <div class="item-info">
                                                <h3>
                                                    <a href="/detail/{{$trade[$i]->id}}">{{ $trade[$i]->title }}</a>
                                                </h3>
                                                <div class="price">
                                                    <p>
                                                        {{ $trade[$i]->trade_status }}
                                                    </p>
                                                </div>
                                                <p class="location">
                                                    {{ $trade[$i]->address }}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                @endfor
                            </div>
                        </div>
                        {{--                        lien quan--}}
                    </div>
                </div>

                {{--                right--}}
                <div class="col-lg-4 col-md-4 d-none d-lg-block">
                    <div class="main-right">
                        <div class="sidebar">
                            <div class="box-title">
                                <h2 class="title">Tin rao nổi bật</h2>
                            </div>
                            @for($i = 0; $i <3 ; $i ++ )
                                <div class="item-post">
                                    <a href="/detail/{{$trade[$i]->id}}" class="item-image">
                                        <img src="{{ $trade[$i]->firstImg }}" style="max-width: 30%" alt="">
                                    </a>
                                    <div class="item-info">
                                        <h3>
                                            <a href="/detail/{{$trade[$i]->id}}"> {{ $trade[$i]->title }} </a>
                                        </h3>
                                        <div class="price">
                                            <p>
                                                {{ $trade[$i]->description }}
                                            </p>
                                        </div>
                                        <p class="location">
                                            {{ $trade[$i]->address }}
                                        </p>
                                        <div class="box-price clearfix">
                                            <p class="price-current" id="statusName">Trạng thái:
                                                <span class="{{$trade[$i]->statusColor}}">{{$trade[$i]->statusName}}</span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            @endfor
{{--                            @for($i = 0; $i <3 ; $i ++ )--}}
{{--                                <div class="item-post">--}}
{{--                                    <a href="/detail/{{$list[$i]->id}}" class="item-image">--}}
{{--                                        <img src="{{ $list[$i]->firstImg }}" style="max-width: 30%" alt="">--}}
{{--                                    </a>--}}
{{--                                    <div class="item-info">--}}
{{--                                        <h3>--}}
{{--                                            <a href="/detail/{{$list[$i]->id}}"> {{ $list[$i]->title }} </a>--}}
{{--                                        </h3>--}}
{{--                                        <div class="price">--}}
{{--                                            <p>--}}
{{--                                                {{ $list[$i]->description }}--}}
{{--                                            </p>--}}
{{--                                        </div>--}}
{{--                                        <p class="location">--}}
{{--                                            {{ $list[$i]->address }}--}}
{{--                                        </p>--}}
{{--                                        <div class="box-price clearfix">--}}
{{--                                            <p class="price-current" id="statusName">Trạng thái:--}}
{{--                                                <span class="{{$list[$i]->statusColor}}">{{$list[$i]->statusName}}</span>--}}
{{--                                            </p>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            @endfor--}}
                        </div>
                    </div>
                </div>

                {{--                right--}}

            </div>
        </div>
    </main>
@endsection
