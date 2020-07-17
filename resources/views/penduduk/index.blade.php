@extends('layouts.app')
@section('title','Penduduk')
@section('content')
 <!-- DataTales Example -->
 <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Penduduk</h6>
    </div>
    <div class="card-body">
        <a href="{{route('penduduk.create')}}" class="btn btn-sm btn-primary"><i class="fa fa-plus"></i> Tambah Penduduk</a>
      <div class="table-responsive mt-4">
        <table class="table table-hover" id="dataTable">
            <thead>
                <tr>
                    <th>No</th>
                    <th>NIK</th>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>Tempat,Tanggal Lahir</th>
                    <th class="text-center">Opsi</th>
                </tr>
            </thead>
                @php
                 $no = 1;   
                @endphp
                <tbody> 
                    @foreach ($data_penduduk as $penduduk)
                    <tr>
                        <td>{{$no++}}</td>
                        <td>{{$penduduk->nik}}</td>
                        <td>{{$penduduk->nama}}</td>
                        <td>{{$penduduk->jenis_kelamin}}</td>
                        <td>{{$penduduk->tempat_lahir}},{{$penduduk->tanggal_lahir}}</td>
                        <td class="text-center">
                            <a href="{{route('penduduk.show',$penduduk->id)}}" class="btn btn-sm btn-success"><i class="fa fa-search"></i></a>
                            <a href="{{route('penduduk.edit', $penduduk->id)}}" class="btn btn-sm btn-warning" title="Ubah"><i class="fa fa-pen" ></i></a>
                            <form action="{{route('penduduk.destroy',$penduduk->id)}}" method="post" style="display: inline;">
                                {{ csrf_field() }}
                                <input type="hidden" name="_method" value="delete">
                                <button type="submit" class="btn btn-sm btn-danger" title="Hapus"><i class="fa fa-trash"></i></button>
                            </form>
                        </td>
                    </tr> 
                    @endforeach
                </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection