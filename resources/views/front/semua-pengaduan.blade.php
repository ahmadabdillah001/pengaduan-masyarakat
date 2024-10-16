@extends('layouts.base-front2')

@section('title', 'Semua Pengaduan')

@section('css')
    <link rel="stylesheet" href="{{ asset('mazer/assets/extensions/simple-datatables/style.css') }}">
    <link rel="stylesheet" href="{{ asset('mazer/assets/compiled/css/table-datatable.css') }}">
    <style>
    .card {
        margin-top: 20px;
    }
    .table {
        border-radius: 0px !important;
        overflow: hidden;
        /* box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1); */
        width: 100%;
        margin-top: 14px !important;
        margin: auto;
        border-collapse: collapse;
    }
    .table th, .table td {
        vertical-align: middle;
        text-align: center;
        padding: 15px;
        border-bottom: 1px solid #e0e0e0;
    }
    .table th {
        background-color: #306c90 !important; /* Solid color for the header */
        color: white !important;
        font-size: 1.1em !important;
        font-weight: bold !important;
        text-transform: uppercase;
        text-align: center !important; /* Center text in header */
    }
    .table tr:nth-child(even) {
        background-color: #f9f9f9; /* Light gray for even rows */
    }
    .table tr:hover {
        background-color: #e7f3ff; /* Light blue on hover */
        transition: background-color 0.3s ease; /* Smooth transition */
    }
    .table img {
        border-radius: 8px; /* Adjusted for square shape */
        width: 50px;
        height: 50px;
        object-fit: cover;
    }
    .badge {
        font-size: 0.9em;
        padding: 5px 10px;
    }
    .badge.bg-success {
        background-color: #28a745;
    }
    .badge.bg-warning {
        background-color: #ffc107;
    }
    .badge.bg-danger {
        background-color: #dc3545;
    }

    /* Responsive table */
    @media (max-width: 768px) {
        .table {
            font-size: 0.9em;
        }
        .table th, .table td {
            padding: 10px; /* Adjust padding for smaller screens */
        }
    }
    </style>
@endsection

@section('content')
<div class="page-heading">
    <h3>Semua Pengaduan</h3>
</div>
<section id="multiple-column-form" style="margin-top: -16px;">
    <div class="row match-height">
        <div class="col-12">
            <div class="card shadow-sm">
                <div class="card-header text-center text-uppercase bg-primary text-white">
                    <h4 class="card-title">Daftar Pengaduan Masyarakat</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <table class="table table-striped" id="pengaduan">
                            <thead class="table-light">
                                <tr>
                                    <th>Gambar</th>
                                    <th>Nama Pengadu</th>
                                    <th>Judul Pengaduan</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($complaints as $complaint)
                                    <tr>
                                        <td><img src="{{$complaint->image}}" alt="{{$complaint->title}}"></td>
                                        <td>{{$complaint->guest_name}}</td>
                                        <td>{{$complaint->title}}</td>
                                        <td>{!! $complaint->status_badge !!}</td>
                                    </tr>  
                                @empty
                                    <tr>
                                        <td colspan="4">Belum ada pengaduan</td>
                                    </tr> 
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('js')
<script src="{{ asset('mazer/assets/extensions/simple-datatables/umd/simple-datatables.js') }}"></script>
<script src="{{ asset('mazer/assets/static/js/pages/simple-datatables.js') }}"></script>
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const dataTable = new simpleDatatables.DataTable("#pengaduan");
    });
</script>
@endsection
