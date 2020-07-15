@extends('layouts.app')
@section('title','Detail Kartu Keluarga')
@section('content')
 <!-- DataTales Example -->
 <div class="row">
     <div class="col-md-6">
         <div class="card shadow mb-4">
            <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Detail {{$penduduk->nama}} </h6>
            </div>
            <div class="card-body">
            <div class="table-responsive mt-4">
                <table class="table table-striped table-bordered" id="dataTable"> 
                    <tr>
                        <td>No kk</td>     
                        <td>{{$penduduk->kk['no_kk']}} </td>
                    </tr>
                    <tr>
                        <td>NIK</td>
                        <td>{{$penduduk->nik}}</td>
                    </tr>
                    <tr>
                        <td>Nama</td>
                        <td>{{$penduduk->nama}}</td>
                    </tr>
                    <tr>
                        <td>Tempat,Tanggal Lahir</td>
                        <td>{{$penduduk->tempat_lahir}},{{$penduduk->tanggal_lahir}}</td>
                    </tr>
                    <tr>
                        <td>Pekerjaan</td>
                        <td>{{$penduduk->pekerjaan}}</td>
                    </tr>
                    <tr>
                        <td>Agama</td>
                        <td>{{$penduduk->agama['nama_agama']}}</td>
                    </tr>
                    <tr>
                        <td>Jenis Kelamin</td>
                        <td>{{$penduduk->jenis_kelamin}}</td>
                    </tr>
                    <tr>
                        <td>Klasifikasi</td>
                        <td>{{$penduduk->klasifikasi['klasifikasi']}}</td>
                    </tr>
                    <tr>
                        <td>Status Perkawinan</td>
                        <td>{{$penduduk->status_perkawinan}}</td>
                    </tr>
                    <tr>
                        <td>Kewarganegaraan</td>
                        <td>{{$penduduk->kewarganegaraan}}</td>
                    </tr>
                    <tr>
                        <td>Golongan Darah</td>
                        <td>{{$penduduk->gol_darah}}</td>
                    </tr>
                    <tr>
                        <td>Pendidikan</td>
                        <td>{{$penduduk->pendidikan}}</td>
                    </tr>
                </table>
                </div>
            </div>
            </div>
        </div>
     </div>
     <div class="col-md-6">
         
     </div>
 </div>
 
@endsection