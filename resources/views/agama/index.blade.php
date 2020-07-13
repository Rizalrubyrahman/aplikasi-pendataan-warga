@extends('layouts.app')
@section('title','Agama')
@section('content')
 <!-- DataTales Example -->
 <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Agama</h6>
    </div>
    <div class="card-body">
        <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#exampleModal">
            <i class="fa fa-plus"></i> Tambah Agama
          </button>
      <div class="table-responsive mt-4">
        <table class="table table-hover" id="dataTable">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Agama</th>
                    <th class="text-center">Jumlah</th>
                    <th class="text-center">status</th>
                    <th class="text-center">Opsi</th>
                </tr>
            </thead>
                @php
                 $no = 1;   
                @endphp
                <tbody> 
                    @foreach ($data_agama as $agama)
                    <tr>
                        <td>{{$no++}}</td>
                        <td>{{$agama->nama_agama}}</td>
                        <td class="text-center"><span class="badge badge-warning">{{$agama->penduduk->where('agama_id',$agama->id)->count()}} Orang</span></td>
                        @if ($agama->status == 1)
                            <td class="text-center"><span class="badge badge-info" style="margin-left: -20px;">Aktif</span></td>
                        @endif
                        <td class="text-center">
                            <a href="{{route('agama.edit', $agama->id)}}" class="btn btn-sm btn-warning" title="Ubah"><i class="fa fa-pen" ></i></a>
                            <form action="{{route('agama.destroy',$agama->id)}}" method="post" style="display: inline;">
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
  <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tambah Agama</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form action="{{route('agama.store')}}" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label>Nama Agama</label>
                    <input type="text" name="nama_agama" placeholder="Masukan Agama" class="form-control {{$errors->has('nama_agama') ? 'is-invalid' : ''}}" value="{{old('nama_agama')}}">
                    {!!$errors->first('nama_agama','<span class="invalid-feedback">:message</span>')!!}
                </div>
            
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
        </div>
      </div>
    </div>
  </div>
  {{-- end modal --}}
@endsection