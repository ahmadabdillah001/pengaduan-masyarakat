@extends('layouts.base-app')
   
@section('title', 'Semua Pengaduan')

@section('css')
<link rel="stylesheet" href="{{asset('mazer/assets/extensions/simple-datatables/style.css')}}">
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

@section('js')
<script src="{{asset('mazer/assets/extensions/simple-datatables/umd/simple-datatables.js')}}"></script>
<script src="{{asset('mazer/assets/static/js/pages/simple-datatables.js')}}"></script>
@endsection

@section('content')
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>DataTable</h3>
                <p class="text-subtitle text-muted">A sortable, searchable, paginated table without dependencies thanks to simple-datatables.</p>
            </div>
        </div>
    </div>
    <section class="section">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">
                    Simple Datatable
                </h5>
            </div>
            <div class="card-body">
                <table class="table table-striped" id="table1">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Title</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        @forelse ($complaints as $complaint)

                            <tr>
                                <td>{{$i++}}</td>
                                <td><img src="{{$complaint->image}}" alt="{{$complaint->title}}"></td>
                                <td>{{$complaint->guest_name}}</td>
                                <td>{{$complaint->title}}</td>
                                <td>{!!$complaint->status_badge !!}</td>
                                <td><a href="{{route('admin.tanggapi.pengaduan', $complaint->id)}}">Tanggapi</a></td>
                            </tr>

                        @empty

                            <tr>
                                <td colspan="6">data kosong</td>
                            </tr>

                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>

    </section>
</div>
@endsection