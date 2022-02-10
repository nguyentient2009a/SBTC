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
                                    <h2 class="title-name">Danh sách danh mục</h2>
                                </div>
                                <div class="card-header">

                                    <i class="fas fa-table me-1"></i>
                                    Danh mục
                                </div>
                                <div class="card-body table-responsive">
                                    <table  class="table table-striped table-bordered" id="">
                                        <thead style="text-align: center">
                                        <tr>
                                            <th style="width: 3.85195%;"><input type="checkbox" value=""/></th>
                                            <th style="width: 16.5801%;">Mã số danh mục</th>
                                            <th style="width: 16.5801%;">Tổng số bài viết</th>
                                            <th style="width: 10.551%;">Tên danh mục</th>
                                            <th style="width: 15.86166%;">Xác nhận</th>

                                        </tr>
                                        </thead>
                                        @foreach($list as $item)
                                            <tbody style="text-align: center">
                                            <tr style="align-content: center">
                                                <td ><input type="checkbox" value=""/></td>
                                                <td>{{ $item->id }}</td>
                                                <td>{{ $item->productCount->count()  }}</td>
                                                <td>{{ $item->category_name }}</td>
                                                <td>
                                                    <a href="/admin/category/{{ $item->id }}/edit" class="btn btn-success">Sửa</a>
                                                    <form style="display: inline" action="/admin/category/{{ $item->id }}" method="post">
                                                        @method('delete')
                                                        @csrf
                                                        <button class="btn btn-danger">Xóa</button>
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
