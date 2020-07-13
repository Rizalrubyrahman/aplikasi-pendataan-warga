@extends('layouts.app')
@section('title','Ubah Dokumen')
@section('content')
 <!-- DataTales Example -->
 <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Ubah Dokumen</h6>
    </div>
    <div class="card-body">
        <form action="{{route('dokumen.update', $dokumen->id)}}" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="_method" value="put">
            <div class="form-group">
                <label>Nama Dokumen</label>
                <input type="text" name="nama_dokumen" class="form-control {{$errors->has('nama_dokumen') ? 'is-invalid' : ''}}" value="{{$dokumen->nama_dokumen}}">
                {!!$errors->first('nama_dokumen','<span class="invalid-feedback">:message</span>')!!}
            </div>
            <button type="submit" class="btn btn-warning"><i class="fa fa-close"></i>Ubah</button>
        </form>
    </div>
  </div>
@endsection