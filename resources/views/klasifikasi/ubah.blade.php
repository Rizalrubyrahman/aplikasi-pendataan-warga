@extends('layouts.app')
@section('title','Ubah Klasifikasi')
@section('content')
 <!-- DataTales Example -->
 <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Ubah Klasifikasi</h6>
    </div>
    <div class="card-body">
        <form action="{{route('klasifikasi.update', $klasifikasi->id)}}" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="_method" value="put">
            <div class="form-group">
                <label>Nama Klasifikasi</label>
                <input type="text" name="klasifikasi" class="form-control" value="{{$klasifikasi->klasifikasi}}">
            </div>
            <button type="submit" class="btn btn-warning"><i class="fa fa-close"></i>Ubah</button>
        </form>
    </div>
  </div>
@endsection