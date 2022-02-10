@extends('client.layout.master')
@section('content')
    <main class="main">
        <div class="container">
            <nav class="breadcrumb-area" aria-label="breadcrumb">
                <ol id="breadcrumb" class="breadcrumb-inner">
                    <li class="breadcrumb-item"><a href="/">Trang chủ</a></li>
                    <li class="breadcrumb-item active">Danh mục sản phẩm</li>
                </ol>
            </nav>
        </div>

        <div class="form-filter-area">
            <div class="container">
                <div id="postsFilter" class="form-filter col-md-12" >
{{--                    <form action="">--}}
{{--                        <select name="city" id="chooseCity">--}}
{{--                            <option value="">Tỉnh / Thành phố</option>--}}
{{--                        </select>--}}
{{--                    </form>--}}
                    <form action="/category" method="get" name="filter-form">
                    <select name="category_id">
                        <option value="0" >Tất cả danh mục</option>
                        @foreach($category as $listCate)
                            <option {{$selectCate == $listCate->id ? 'selected': ''}} value="{{$listCate->id}}">{{$listCate->category_name}}</option>
                        @endforeach
                    </select>
                    </form>
                </div>
                <div id="expandsFilter"></div>
            </div>
        </div>
        <section class="home_content_area">
            <div class="container">

                <div class="area_inner d-flex align-items-center">
                    <div class="area_content">
                        <div class="column-left">
                            <div class="column-left-inner">
                                <div class="wrap-list-item-fluid">
                                    <div class="box-sort">
                                        <select name="sort" class="niceSelect">
                                            <option value="published_at:desc" selected>
                                                Tin mới nhất
                                            </option>
                                            <option value="published_at:asc">Tin cũ nhất</option>
                                            <option value="price:asc">Giá thấp nhất</option>
                                            <option value="price:desc">Giá cao nhất</option>
                                        </select>
                                    </div>
                                    <div id="newPosts">
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
                                                            {{ $item->address }}, {{ $item->wardName->name }},{{ $item->districtName->name }},{{ $item->cityName->name }}
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
                                        @include('.client.pagination.default', ['paginator' => $list])
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="column-right">
                            <div id="adsPosts" class="column-right-inner">
                                <div class="wrap-list-item-vertical">
                                    <div class="box-title">
                                        <h2 class="title">Tin rao nổi bật</h2>
                                    </div>

                                    @for($i = 0; $i <3 ; $i ++ )
                                        <div class="item-post">
                                            <a href="/detail/{{$total[$i]->id}}" class="item-image">
                                                <img src="{{ $total[$i]->firstImg }}" style="max-width: 30%" alt="">
                                            </a>
                                            <div class="item-info">
                                                <h3>
                                                    <a href="/detail/{{$total[$i]->id}}"> {{ $total[$i]->title }} </a>
                                                </h3>
                                                <div class="price">
                                                    <p>
                                                        {{ $total[$i]->description }}
                                                    </p>
                                                </div>
                                                <p class="location">
                                                    {{ $total[$i]->address }}
                                                </p>
                                                <div class="box-price clearfix">
                                                    <p class="price-current" id="statusName">Trạng thái:
                                                        <span class="{{$total[$i]->statusColor}}">{{$total[$i]->statusName}}</span>
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
        </section>
    </main>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // load thanh pho
            loadCity();
            function loadCity() {
                const xhr = new XMLHttpRequest();
                xhr.onreadystatechange = function () {
                    if (xhr.readyState == 4 && xhr.status == 200) {
                        console.log(xhr.responseText);
                        const listCity = JSON.parse(xhr.responseText);
                        let cityContent = '';
                        for (let i = 0; i < listCity.length; i++) {
                            const city = listCity[i];
                            cityContent += `<option value="${city.matp}">${city.name}</option>`;
                        }
                        document.getElementById('chooseCity').innerHTML = cityContent;
                        loadDistrict(document.getElementById('chooseCity').value);
                    }
                }
                xhr.open('GET', '/post/city', false);
                xhr.send();
            }
        })
    </script>
    <script>
        var selectCate =document.forms['filter-form']['category_id'];
        selectCate.onchange = function (){
            document.forms['filter-form'].submit()    ;
        }
    </script>
@endsection
