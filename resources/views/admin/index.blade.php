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
                                    <h2 class="title-name">Bảng điều khiển</h2>
                                    <div class="row">
                                        <div class="col-xl-6 col-md-6">
                                            <div class="card bg-primary text-white mb-4">
                                                <div class="card-body">
                                                    <div class="row align-items-center">

                                                        <div class="col-xl-8 col-md-8">
                                                            <h2>100000</h2>
                                                            <h5>Thành viên</h5>
                                                        </div>
                                                        <div class="col-xl-4 col-md-4">
                                                            <i class="fas fa-users"></i>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div
                                                    class="card-footer d-flex align-items-center justify-content-between">
                                                    <a class="small text-white stretched-link"
                                                       href="account-list">Xem chi tiết</a>
                                                    <div class="small text-white"><i class="fas fa-angle-right"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-md-6">
                                            <div class="card bg-warning text-white mb-4">
                                                <div class="card-body">
                                                    <div class="row align-items-center">

                                                        <div class="col-xl-8 col-md-8">
                                                            <h2>100000</h2>
                                                            <h5>Bài đăng</h5>
                                                        </div>
                                                        <div class="col-xl-4 col-md-4">
                                                            <i class="fas fa-copy"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="card-footer d-flex align-items-center justify-content-between">
                                                    <a class="small text-white stretched-link" href="post-list">Xem chi
                                                        tiết</a>
                                                    <div class="small text-white"><i class="fas fa-angle-right"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-md-6">
                                            <div class="card bg-success text-white mb-4">
                                                <div class="card-body">
                                                    <div class="row align-items-center">

                                                        <div class="col-xl-8 col-md-8">
                                                            <h2>100000</h2>
                                                            <h5>Trao đổi thành công</h5>
                                                        </div>
                                                        <div class="col-xl-4 col-md-4">
                                                            <i class="fas fa-sync-alt"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="card-footer d-flex align-items-center justify-content-between">
                                                    <a class="small text-white stretched-link" href="#">Xem chi tiết</a>
                                                    <div class="small text-white"><i class="fas fa-angle-right"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-md-6">
                                            <div class="card bg-danger text-white mb-4">
                                                <div class="card-body">
                                                    <div class="row align-items-center">

                                                        <div class="col-xl-8 col-md-8">
                                                            <h2>100000</h2>
                                                            <h5>Người truy cập</h5>
                                                        </div>
                                                        <div class="col-xl-4 col-md-4">
                                                            <i class="fas fa-eye"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="card-footer d-flex align-items-center justify-content-between">
                                                    <a class="small text-white stretched-link" href="#">Xem chi tiết</a>
                                                    <div class="small text-white"><i class="fas fa-angle-right"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <div class="card mb-4">
                                                <div class="card-header">
                                                    <i class="fas fa-chart-area me-1"></i>
                                                    Area Chart Example
                                                </div>
                                                <div class="card-body"><canvas id="myAreaChart" width="100%" height="40"></canvas></div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="card mb-4">
                                                <div class="card-header">
                                                    <i class="fas fa-chart-bar me-1"></i>
                                                    Bar Chart Example
                                                </div>
                                                <div class="card-body"><canvas id="myBarChart" width="100%" height="40"></canvas></div>
                                            </div>
                                        </div>
                                    </div>
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
