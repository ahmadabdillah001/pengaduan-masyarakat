@extends('layouts.base-app')
   
@section('title', 'Riwayat Pengaduan')

@section('css')
<link rel="stylesheet" href="{{asset('mazer/assets/extensions/simple-datatables/style.css')}}">
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
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>City</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        @forelse ($complaints as $complaint)

                            <tr>
                                <td>{{$i++}}</td>
                                <td>{{$complaint->guest_name}}</td>
                                <td>{{$complaint->guest_email}}</td>
                                <td>{{$complaint->guest_telp}}</td>
                                <td>{{$complaint->title}}</td>
                                <td>
                                    @if ($complaint->status == 'pending')
                                        <span class="badge bg-danger">Pending</span>
                                    @elseif ($complaint->status == 'proses')
                                        <span class="badge bg-warning">Proses</span>
                                    @else
                                        <span class="badge bg-success">Selesai</span>
                                    @endif
                                </td>
                                <td>Edit</td>
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