@extends('client.layout.master')
@section('content')
    <main>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-12 col-left pr-0">
                    <div class="main-left">
                        <div class="wrap-items">
                            <div class="box-title">
                                <h2 class="title">Tin mới nhất</h2>
                            </div>
                            <div class="list-item-post">
                                @foreach($list as $item)
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
                                @include('.client.pagination.default', ['paginator' => $list])

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 d-none d-md-block">
                    <div class="main-right">
                        <div class="sidebar">
                            <div class="box-title">
                                <h2 class="title">Tin nổi bật</h2>
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
            </div>
        </div>
    </main>
@endsection
