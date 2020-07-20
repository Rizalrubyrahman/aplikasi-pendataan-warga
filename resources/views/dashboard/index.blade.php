@extends('layouts.app')
@section('title'.'Dashboard')
@section('content')
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header text-center" style="background-color: rgb(107, 107, 226); color:white;">
                    <h3>Jumlah warga </h3>
                    <h3>berdasarkan klasifikasi</h3>
                </div>
                <div class="card-body">
                    <div class="jumlah" style="background-color: rgb(231, 220, 220); color: black; width:150px; padding:5px; margin:auto;">
                        <h6 class="mt-2">Jumlah Total {{ $penduduk->count() }} Jiwa</h6>
                    </div>
                    <div class="container" style="margin-top: 60px;">
                        <div class="row text-center">
                            <div class="col-md-3">
                                <i class="fa fa-child" style="font-size: 50px;"></i>
                                <h6 class="mt-2">Anak-Anak</h6>
                                <h6>{{ $penduduk->where('klasifikasi_id',1)->count() }}</h6>
                            </div>
                            <div class="col-md-3">
                                <i class="fa fa-street-view" style="font-size: 50px;"></i>
                                <h6 class="mt-2">Remaja</h6>
                                <h6>{{ $penduduk->where('klasifikasi_id',2)->count() }}</h6>
                            </div>
                            <div class="col-md-3">
                                <i class="fa fa-user" style="font-size: 50px;"></i>
                                <h6 class="mt-2">Dewasa</h6>
                                <h6>{{ $penduduk->where('klasifikasi_id',3)->count() }}</h6>
                            </div>
                            <div class="col-md-3">
                                <i class="fa fa-user-plus" style="font-size: 50px;"></i>
                                <h6 class="mt-2">Lansia</h6>
                                <h6>{{ $penduduk->where('klasifikasi_id',5)->count() }}</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header text-center" style="background-color: rgb(226, 107, 107); color:white;">
                    <h3>Jumlah warga </h3>
                    <h3>berdasarkan jenis kelamin</h3>
                </div>
                <div class="card-body">
                    <div class="jumlah" style="background-color: rgb(231, 220, 220); color: black; width:150px; padding:5px; margin:auto;">
                        <h6 class="mt-2">Jumlah Total {{ $penduduk->count() }} Jiwa</h6>
                    </div>
                    <div class="container" style="margin-top: 60px;">
                        <div class="row text-center">
                            <div class="col-md-6">
                                <i class="fa fa-male" style="font-size: 50px;"></i>
                                <h6 class="mt-2">Laki-Lakik</h6>
                                <h6>{{ $penduduk->where('jenis_kelamin','Laki-Laki')->count() }}</h6>
                            </div>
                            <div class="col-md-6">
                                <i class="fa fa-female" style="font-size: 50px;"></i>
                                <h6 class="mt-2">Perempuan</h6>
                                <h6>{{ $penduduk->where('jenis_kelamin','Perempuan')->count() }}</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection