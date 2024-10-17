@extends('layouts.base-app')
   
@section('title', "Tanggapi Pengaduan - $complaint->title")

@section('css')

@endsection

@section('js')

@endsection

@section('content')
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Detail Pengaduan</h3>
                <p class="text-subtitle text-muted">Detail pengaduan masyarakat ditampilkan disini.</p>
            </div>
        </div>
    </div>

    <section id="multiple-column-form">
        <div class="row match-height">
            <div class="col-12">
                <div class="card shadow-sm">
                    <div class="card-header text-center text-uppercase bg-primary text-white">
                        <h4 class="card-title">{{$complaint->title}}</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                                <div class="row">
                                        <div class="col-md-6 col-12 mb-3">
                                            <div class="form-group">
                                                <label for="name">Nama Pengadu</label>
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
                                            <input type="text" id="title" value="{{$complaint->title}}" disabled class="form-control" name="title" placeholder="Judul Pengaduan" >
                                            
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12 mb-3">
                                        <div class="form-group">
                                            <label for="image">Gambar</label><br>
                                            <img src="{{$complaint->image}}" class="img-fluid w-75" alt="$complaint->title">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12 mb-3">
                                        <div class="form-group">
                                            <label for="description">Deskripsi</label>
                                            <textarea class="form-control" name="description" id="description" disabled rows="3" >{{$complaint->description}}</textarea>                                        
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="multiple-column-form">
        <div class="row match-height">
            <div class="col-12">
                <div class="card shadow-sm">
                    <div class="card-header text-center text-uppercase bg-primary text-white">
                        <h4 class="card-title">Tanggapi Pengaduan</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                        <form class="form" action="" method="POST" enctype="multipart/form-data">
                            @csrf
                                <div class="row">
                                    <div class="col-md-6 col-12 mb-3">
                                        <div class="form-group">
                                            <label for="title">Gambar</label>
                                            <input type="file" id="title" class="form-control" name="image" >
                                            
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12 mb-3">
                                        <div class="form-group">
                                            <label for="response">Tanggapan</label>
                                            <textarea class="form-control" name="response" id="response" rows="3" ></textarea>                                        
                                        </div>
                                    </div>
                                    <div class="col-12 d-flex justify-content-end">
                                    <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                                    <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button>
                                </div>
                                </div>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
</div>
@endsection