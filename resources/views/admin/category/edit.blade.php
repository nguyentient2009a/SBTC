@extends('admin.layout.master')

@section('content')
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h2 class="mt-4">Thêm Danh Mục</h2>
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-angle-right"></i>
                        Vui lòng nhập đầy đủ thông tin
                    </div>

                    <div class="card-body">
                        <form action="/admin/category/{{$item->id}}" method="POST">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="">Sửa danh mục</label>
                                    <div class="row">
                                        <input type="text" name="name" class="form-control"
                                               value="{{$item->category_name}}">
                                        @error('name')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Xác nhận</button>
                            </div>
                            @csrf
                        </form>
                    </div>
                </div>
            </div>
        </main>
        <footer class="py-4 bg-light mt-auto">
            <div class="container-fluid px-4">
                <div class="d-flex align-items-center justify-content-between small">
                    <div class="text-muted">Copyright &copy; SBTCv2 2021</div>
                </div>
            </div>
        </footer>
    </div>
@endsection
