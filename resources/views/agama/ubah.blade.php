@extends('layouts.app')
@section('title','Ubah Agama')
@section('content')
 <!-- DataTales Example -->
 <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Ubah Agama</h6>
    </div>
    <div class="card-body">
        <form action="{{route('agama.update', $agama->id)}}" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="_method" value="put">
            <div class="form-group">
                <label>Nama Agama</label>
                <input type="text" name="nama_agama" class="form-control {{$errors->has('nama_agama') ? 'is-invalid' : ''}}" value="{{$agama->nama_agama}}">
                {!!$errors->first('nama_agama','<span class="invalid-feedback">:message</span>')!!}
            </div>
            <button type="submit" class="btn btn-warning"><i class="fa fa-close"></i>Ubah</button>
        </form>
    </div>
  </div>
@endsection