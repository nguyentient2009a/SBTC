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
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="/post/upload" method="post" class="form-posting form-horizontal">
                    @csrf
                    <div class="form-posting-inner">
                        <!-- Multiple Radios -->
                        <div class="form-group row">
                            <label class="col-md-12 control-label" for="parent_id">Chọn thông tin (<span
                                    style="color: red">*</span>):</label>
                            <div class="col-md-4" id="div_parent_id">
                                <select required id="parent_id" name="category_id" class="form-control">
                                    <option selected>Chọn danh mục</option>
                                    @foreach($category as $item)
                                        <option value="{{$item->id}}">{{$item->category_name}}</option>
                                    @endforeach
                                </select>
                            </div>

                        </div>
                        <!-- Expand Value-->
                        <div class="form-group row" id="expand-value">
                        </div>
                        <!-- Text input-->
                        <div class="form-group row">
                            <label class="col-md-12 control-label" for="title">Tiêu đề (<span
                                    style="color: red">*</span>):</label>
                            <div class="col-md-12">
                                <input maxlength="70" required id="title" name="title" type="text" placeholder=""
                                       class="form-control input-md" value="">
                            </div>
                        </div>

                        <!-- Select Basic -->
                        <div class="form-group row">
                            <label class="col-md-12 control-label">Địa chỉ (<span
                                    style="color: red">*</span>):</label>
                            <div class="col-md-12">
                                <form action="">
                                    <select name="city" id="chooseCity">
                                        <option value="">Tỉnh / Thành phố</option>
                                    </select>
                                    <select name="district" id="chooseDistrict">
                                        <option value="">Quận / Huyện</option>
                                    </select>
                                    <select name="ward" id="chooseWard">
                                        <option value="">Phường / Xã</option>
                                    </select>
                                </form>
                            </div>
                        </div>
                        <!-- Text input-->
                        <div class="form-group row">
                            <div class="col-md-7">
                                <input id="frm_posting_so_nha" name="address" type="text" placeholder="Số nhà"
                                       class="form-control input-md" value="">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-10">
                                <input required id="description" name="description" type="text"
                                       placeholder="Mong muốn trao đổi" class="form-control input-md"
                                       value="">
                                <span class="help-block"></span>
                            </div>
                        </div>

                        <!-- Textarea -->
{{--                        <div class="form-group row">--}}
{{--                            <label for="">Thông tin chi tiết</label>--}}
{{--                            <div class="row">--}}
{{--                                <div class="col-md-9">--}}
{{--                                    <textarea name="content" id="ckeditorContent" cols="100" rows="8"></textarea>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                        <div class="form-group">
                            <label for="">Chi tiết sản phẩm</label>
                            <div class="row">
                                <div class="col-md-10">
                                    <textarea name="content" id="ckeditorContent" cols="100" rows="8"></textarea>
                                </div>
                            </div>
                        </div>
                        <!-- File Button Upload Images -->
                        <div class="form-group">
                            <input type="hidden" name="imgUpload" id="imgUpload">
                            <div name="previewDiv" id="previewDiv">

                            </div>
                            <button type="button" id="upload_widget" class="btn btn-sm btn-primary">Upload files
                            </button>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12 text-center">
                                <input type="submit" value="ĐĂNG TIN" class="btn-post-information">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
</main>
</div>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        document.getElementById('chooseCity').onchange = function () {
            loadDistrict(this.value);
        }
        document.getElementById('chooseDistrict').onchange = function () {
            loadWard(this.value);
        }
        // load thanh pho
        loadCity();
        function loadWard(districtId) {
            const xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function () {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    console.log(xhr.responseText);
                    const listWard = JSON.parse(xhr.responseText);
                    let wardContent = '';
                    for (let i = 0; i < listWard.length; i++) {
                        const district = listWard[i];
                        wardContent += `<option value="${district.xaid}">${district.name}</option>`;
                    }
                    document.getElementById('chooseWard').innerHTML = wardContent;

                }
            }
            xhr.open('GET', `/post/ward?districtId=${districtId}`, false);
            xhr.send();
        }

        function loadDistrict(cityId) {
            const xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function () {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    console.log(xhr.responseText);
                    const listDistrict = JSON.parse(xhr.responseText);
                    let districtContent = '';
                    for (let i = 0; i < listDistrict.length; i++) {
                        const district = listDistrict[i];
                        districtContent += `<option value="${district.maqh}">${district.name}</option>`;
                    }
                    document.getElementById('chooseDistrict').innerHTML = districtContent;
                    loadWard(document.getElementById('chooseDistrict').value);
                }
            }
            xhr.open('GET', `/post/district?cityId=${cityId}`, false);
            xhr.send();
        }

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
@include('client.layout.script')
@include('client.layout.script-post')
</body>
