@extends('layouts.base-app')
   
@section('title', 'Tanggapi Pengaduan')

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
                <h3>Tanggapi Pengaduan</h3>
                <p class="text-subtitle text-muted">Berikut Data Pengaduan Masyarakat.</p>
            </div>
        </div>
        <div class="card shadow-sm">
            <div class="card-header text-center text-uppercase bg-primary text-white">
                <h4 class="card-title">{{$complaint->title}}</h4>
            </div>
            <div class="card-content">
                <div class="card-body">
                    <form class="form" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                                <div class="col-md-6 col-12 mb-3">
                                    <div class="form-group">
                                        <label for="name">Nama Lengkap</label>
                                        <input type="text" id="name" class="form-control cursor-not-allowed" placeholder="Nama Lengkap" 
                                            value="{{ $complaint->guest_name }}" disabled readonly>
                                    </div>
                                </div>                                    
                                <div class="col-md-6 col-12 mb-3">
                                    <div class="form-group">
                                        <label for="email">Alamat Email</label>
                                        <input type="email" id="email" class="form-control cursor-not-allowed" placeholder="Alamat Email" 
                                            value="{{ $complaint->guest_email }}" disabled>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12 mb-3">
                                    <div class="form-group">
                                        <label for="telp">Nomor Telepon</label>
                                        <input type="text" id="telp" class="form-control cursor-not-allowed" placeholder="Nomor Telepon"
                                            value="{{ $complaint->guest_telp }}" disabled>
                                    </div>
                                </div>

                            <div class="col-md-6 col-12 mb-3">
                                <div class="form-group">
                                    <label for="title">Judul Pengaduan</label>
                                    <input type="text" id="title" class="form-control" name="title" placeholder="Judul Pengaduan"
                                        value="{{ $complaint->title }}" disabled>
                                </div>
                            </div>
                            <div class="col-md-6 col-12 mb-3">
                                <div class="form-group">
                                    <label for="image">Gambar</label><br>
                                    <img src="{{$complaint->image}}" class="img-fuild w-75" alt="{{$complaint->title}}">
                                </div>
                            </div>
                            <div class="col-md-6 col-12 mb-3">
                                <div class="form-group">
                                    <label for="description">Deskripsi</label>
                                    <textarea class="form-control" name="description" id="description" rows="3" 
                                        value="{{ $complaint->title }}" disabled></textarea>
                                </div>
                            </div>
                        </div>
                    </form>  
                </div>
            </div>
        </div>

        <div class="card shadow-sm">
            <div class="card-header text-center text-uppercase bg-primary text-white">
                <h4 class="card-title">Tanggapan</h4>
            </div>
            <div class="card-content">
                <div class="card-body">
                    <form class="form" action="{{route('admin.store.pengaduan')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">

                            <input value="{{$complaint->complaint_id}}" hidden>

                            <div class="col-md-6 col-12 mb-3">
                                <div class="form-group">
                                    <label for="image">Gambar</label>
                                    <input type="file" class="form-control" id="image" name="image">
                                </div>
                            </div>
                            <div class="col-md-6 col-12 mb-3">
                                <div class="form-group">
                                    <label for="description">Deskripsi</label>
                                    <input type="text" class="form-control" name="description" id="description" rows="3">
                                </div>
                            </div>
                        </div>
                    </form>  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection