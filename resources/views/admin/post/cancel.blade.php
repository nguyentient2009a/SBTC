@extends('admin.layout.master')

@section('content')
    <div id="layoutSidenav_content">
        <main class="main container">
            <div class="page-seller-management-area">
                <div class="col-primary">
                    <div class="col-primary-inner">
                        <section class="management-history-area clearfix">
                            <div class="management-history-area-inner">
                                <div class="box-title-area">
                                    <h2 class="title-name">Bài đăng đã từ chối</h2>
                                </div>
                                <div class="card-header">
                                    <i class="fas fa-table me-1"></i>
                                    DataTable Example
                                </div>
                                <div class="card-body table-responsive">
                                    <table  class="table table-striped table-bordered" id="">
                                        <thead style="text-align: center">
                                        <tr>
                                            <th style="width: 3.85195%;"><input type="checkbox" value=""/></th>
                                            <th style="width: 16.5801%;">Tiêu đề bài viết</th>
                                            <th style="width: 10.551%;">Nguời đăng</th>
                                            <th style="width: 25.4309%;">Ảnh sản phẩm</th>
                                            <th style="width: 17.9199%;">Giới thiệu sản phẩm</th>
                                            <th style="width: 7.87138%;">Category</th>
                                            <th style="width: 15.86166%;">Xác nhận</th>

                                        </tr>
                                        </thead>
                                        @foreach($list as $item)
                                            <tbody style="text-align: center">
                                            <tr style="align-content: center">
                                                <td ><input type="checkbox" value=""/></td>
                                                <td>{{ $item->title }}</td>
                                                <td>{{ $item->account->full_name }}</td>
                                                <td><img class="img-responsive" src="{{ $item->firstImg }}"
                                                         style="width: 120px; height: 120px" alt=""></td>
                                                <td>{{ $item->content }}</td>
                                                <td>{{ $item->category->category_name }}</td>
                                                <td>
                                                    <form action="/admin/delete-post/{{$item->id}}" method="post">
                                                        @csrf
                                                        <button type="submit" class="btn btn-success">Đồng ý</button>
                                                    </form>
                                                </td>
                                            </tr>
                                            @endforeach
                                            </tbody>
                                    </table>
                                    @include('.admin.pagination.default', ['paginator' => $list])
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </main>
        <footer class="py-4 bg-light mt-auto">
            <div class="container-fluid px-4">
                <div class="d-flex align-items-center justify-content-between small">
                    <div class="text-muted">Copyright &copy; SBTCv2 2021</div>
                    <div>
                        <a href="#">Privacy Policy</a>
                        &middot;
                        <a href="#">Terms &amp; Conditions</a>
                    </div>
                </div>
            </div>
        </footer>
    </div>
@endsection
