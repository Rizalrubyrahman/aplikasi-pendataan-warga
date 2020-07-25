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
                    <table class="table table-striped">
                        <tr>
                            <th class="text-center">E-Ktp</th>
                        </tr>
                        <tr>
                            @if ($penduduk->ktp)
                                <th>
                                    <img style="height: 200px; width:455px;" src="{{$penduduk->getKtp()}}">
                                    <form action="/image/{{$penduduk->id}}/ktp" method="post" enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                        <input type="hidden" name="_method" value="put">
                                        <button type="submit" class="btn btn-sm btn-danger mt-2">Hapus</button>
                                    </form> 
                                </th>
                            @else
                                <th class="text-center"><h6>E-Ktp Belum Di Upload</h6></th>
                            @endif  
                                      
                        </tr>
                        <tr>
                            <th class="text-center">Ijazah</th>
                        </tr>
                        <tr>
                            @if ($penduduk->ijazah)
                                <th>
                                    <img style="height: 200px; width:455px;" src="{{$penduduk->getIjazah()}}">
                                    <form action="/image/{{$penduduk->id}}/hapus-ijazah" method="post">
                                        {{ csrf_field() }}
                                        <input type="hidden" name="_method" value="put">
                                        <button type="submit" class="btn btn-sm btn-danger mt-2">Hapus</button>
                                    </form> 
                                </th>
                            @else
                                <th class="text-center"><h6>Ijazah Belum Di Upload</h6></th>
                            @endif             
                        </tr>
                    </table>
                </div>
                
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
                        <td>{{$penduduk->tempat_lahir}},{{date('d-m-Y',strtotime($penduduk->tanggal_lahir))}}</td>
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
     <div class="col-md-6">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Dokumen {{$penduduk->nama}} </h6>
            </div>
            <div class="card-body">
            <div class="table-responsive mt-4">
                <table class="table table-striped table-bordered" id="dataTable"> 
                    <tr>
                        <td><span class="mt-4" style="margin-top:50px; position: absolute;">E-Ktp</span></td>     
                        <td>
                            <form action="/image/{{$penduduk->id}}/tambah-ktp" method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <input type="hidden" name="_method" value="put">
                                <input type="file" name="ktp" class="form-control">
                                <button type="submit" class="btn btn-sm btn-primary mt-4"><i class="fa fa-plus"></i> Tambah E-Ktp</button>
                            </form>
                        </td>
                    </tr>
                    <tr>
                        <td style="width:100px;"><span class="mt-4" style="margin-top:50px; position: absolute;">Ijazah</span></td>     
                        <td>
                            <form action="/image/{{ $penduduk->id }}/tambah-ijazah" method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <input type="hidden" name="_method" value="put">
                                <input type="file" name="ijazah" class="form-control">
                                <button type="submit" class="btn btn-sm btn-primary mt-4"><i class="fa fa-plus"></i> Tambah E-Ktp</button>
                            </form>
                        </td>
                    </tr>
                </table>
                </div>
            </div>
            </div>
        </div>
     </div>
 </div>
 
@endsection