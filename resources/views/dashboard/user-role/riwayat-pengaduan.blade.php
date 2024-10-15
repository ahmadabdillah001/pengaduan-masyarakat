@extends('layouts.base-app')
   
@section('title', 'Riwayat Pengaduan')

@section('css')
<link rel="stylesheet" href="{{asset('mazer/assets/extensions/simple-datatables/style.css')}}">
<link rel="stylesheet" href="{{asset('mazer/assets/compiled/css/table-datatable.css')}}">
@endsection

@section('js')
<script src="{{asset('mazer/assets/extensions/simple-datatables/umd/simple-datatables.js')}}"></script>
<script src="{{asset('mazer/assets/static/js/pages/simple-datatables.js')}}"></script>
@endsection

@section('content')
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Riwayat Pengaduan</h3>
                <p class="text-subtitle text-muted">Riwayat pengaduan anda akan ditampilkan disini.</p>
            </div>
        </div>
    </div>
    <section class="section">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">
                    Riwayat Pengaduan
                </h5>
            </div>
            <div class="card-body">
            <table class="table table-striped" id="table1">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Gambar</th>
                            <th>Nama Pengadu</th>
                            <th>Judul Pengaduan</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        @forelse($complaints as $row)
                        <tr>
                            <td>{{$i++}}</td>
                            <td>Graiden</td>
                            <td>vehicula.aliquet@semconsequat.co.uk</td>
                            <td>076 4820 8838</td>
                            <td>
                                <span class="badge bg-success">{{$row->status}}</span>
                            </td>
                            <td>
                                <a href="#">Edit</a>
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
        </div>

    </section>
</div>
@endsection