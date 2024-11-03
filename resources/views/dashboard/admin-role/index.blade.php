@extends('layouts.base-app')

@section('css')
<style>
    .table th, .table td {
        vertical-align: middle;
        text-align: center;
        padding: 15px;
        border-bottom: 1px solid #e0e0e0;
    }
    .table th {
        background-color: #306c90 !important;
        color: white !important;
        font-size: 1.1em !important;
        font-weight: bold !important;
        text-transform: uppercase;
        text-align: center !important; 
    }
    .table img {
        border-radius: 8px;
        width: 50px;
        height: 50px;
        object-fit: cover;
    }
</style>
@endsection

@section('content')
<div class="page-heading">
    <div class="page-title">
        <div class="row">
        <div class="col-12 col-lg-12">
            <div class="row">
                <div class="col-6 col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body px-4 py-4-5">
                            <div class="row">
                                <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                    <div class="stats-icon purple mb-2">
                                        <i class="bi-chat"></i>
                                    </div>
                                </div>
                                <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                    <h6 class="text-muted font-semibold">Total Pengaduan</h6>
                                    <h6 class="font-extrabold mb-0">{{$all}}</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body px-4 py-4-5">
                            <div class="row">
                                <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                    <div class="stats-icon red mb-2">
                                        <i class="bi-hourglass" style="animation: spin 3s linear infinite;"></i>
                                    </div>
                                </div>
                                <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                    <h6 class="text-muted font-semibold">Pending</h6>
                                    <h6 class="font-extrabold mb-0">{{$pending}}</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body px-4 py-4-5">
                            <div class="row">
                                <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                    <div class="stats-icon blue mb-2">
                                        <i class="bi-arrow-repeat" style="animation: spin 3s linear infinite;"></i>
                                    </div>
                                </div>
                                <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                    <h6 class="text-muted font-semibold">Diproses</h6>
                                    <h6 class="font-extrabold mb-0">{{$proses}}</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body px-4 py-4-5">
                            <div class="row">
                                <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                    <div class="stats-icon green mb-2">
                                        <i class="bi-check-circle"></i>
                                    </div>
                                </div>
                                <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                    <h6 class="text-muted font-semibold">Selesai</h6>
                                    <h6 class="font-extrabold mb-0">{{$selesai}}</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="main-content">
            <div class="page-heading">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last">
                            <h3>Pengaduan Hari Ini</h3>
                            <p class="text-subtitle text-muted">Semua pengaduan anda akan ditampilkan disini.</p>
                        </div>
                    </div>
                </div>
                <section class="section">
                    <div class="card">
                        <div class="card-body">
                        <div class="dataTable-wrapper dataTable-loading no-footer sortable searchable fixed-columns">
                            <div class="dataTable-top"><div class="dataTable-dropdown">
                                <select class="dataTable-selector form-select">
                                    <option value="5">5</option>
                                    <option value="10" selected="">10</option>
                                    <option value="15">15</option><option value="20">20</option>
                                    <option value="25">25</option></select><label> entries per page</label>
                                </div>
                                <div class="dataTable-search">
                                    <input class="dataTable-input" placeholder="Search..." type="text">
                                </div>
                            </div>
                                <div class="dataTable-container">
                                    <table class="table table-striped dataTable-table" id="table1">
                                    <thead>
                                        <tr><th data-sortable="" style="width: 6.40732%;"><a href="#" class="dataTable-sorter">No</a></th><th data-sortable="" style="width: 14.1876%;"><a href="#" class="dataTable-sorter">Gambar</a></th><th data-sortable="" style="width: 24.3707%;"><a href="#" class="dataTable-sorter">Nama Pengadu</a></th><th data-sortable="" style="width: 28.3753%;"><a href="#" class="dataTable-sorter">Judul Pengaduan</a></th><th data-sortable="" style="width: 14.1876%;"><a href="#" class="dataTable-sorter">Status</a></th><th data-sortable="" style="width: 12.4714%;"><a href="#" class="dataTable-sorter">Action</a></th></tr>
                                    </thead>
                                    <tbody>
                                        <?php $i = 1; ?>
                                        @forelse($pengaduanHariIni as $row)
                                        <tr>
                                            <td>{{$i++}}</td>
                                            <td><img src="{{$row->image}}" alt="{{$row->title}}"></td>
                                            <td>{{$row->guest_name}}</td>
                                            <td>{{$row->title}}</td>
                                            <td>{!! $row->status_badge !!}</td>
                                            <td class="text-center">
                                                <a href="{{route('admin.tanggapi.pengaduan', $row->id)}}">Tanggapi</a>
                                            </td>
                                        </tr>
                                        @empty
                                        <tr>
                                            <td colspan="6">Anda belum mengadukan apapun</td>
                                        </tr>
                                        @endforelse 
                                    </tbody>
                                </table>
                            </div>
                            <div class="dataTable-bottom">
                                <div class="dataTable-info">Showing 1 to 7 of 7 entries</div>
                                <nav class="dataTable-pagination">
                                    <ul class="dataTable-pagination-list pagination pagination-primary"></ul>
                                </nav>
                            </div>
                        </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        </div>
    </div>    
</div>
@endsection

           