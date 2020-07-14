@extends('layouts.app')
@section('title','Kartu Keluarga')
@section('content')
 <!-- DataTales Example -->
 <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Kartu Keluarga</h6>
    </div>
    <div class="card-body">
        <a href="{{route('kartu-keluarga.create')}}" class="btn btn-sm btn-primary"><i class="fa fa-plus"></i> Tambah Kartu Keluarga</a>
      <div class="table-responsive mt-4">
        <table class="table table-hover" id="dataTable">
            <thead>
                <tr>
                    <th>Nomer KK</th>
                    <th>Nama Kepala Keluarga</th>
                    <th>RT/RW</th>
                    <th>Desa</th>
                    <th>Kec.</th>
                    <th>Kab.</th>
                    <th class="text-center">Jumlah Keluarga</th>
                    <th class="text-center">Opsi</th>
                </tr>
            </thead>
                @php
                 $no = 1;   
                @endphp
                <tbody> 
                    @foreach ($data_kk as $kk)
                    <tr>
                        <td><a href="{{route('kartu-keluarga.show',$kk->id)}}">{{$kk->no_kk}}</a></td>
                        <td>{{$kk->kepala_keluarga}}</td>
                        <td>{{$kk->rt}}/{{$kk->rw}}</td>
                        <td>{{$kk->desa}}</td>
                        <td>{{$kk->kecamatan}}</td>
                        <td>{{$kk->kabupaten}}</td>
                        <td class="text-center"><span class="badge badge-warning">{{$kk->penduduk->where('k_k_id',$kk->id)->count()}} Orang</span></td>
                        <td class="text-center">
                            <a href="{{route('kartu-keluarga.edit', $kk->id)}}" class="btn btn-sm btn-warning" title="Ubah"><i class="fa fa-pen" ></i></a>
                            <form action="{{route('kartu-keluarga.destroy',$kk->id)}}" method="post" style="display: inline;">
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