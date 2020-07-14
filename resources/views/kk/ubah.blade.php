@extends('layouts.app')
@section('title','Ubah Kartu Keluarga')
@section('content')
 <!-- DataTales Example -->
 <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Ubah Kartu Keluarga</h6>
    </div>
    <div class="card-body">
        <form action="{{route('kartu-keluarga.update',$kartuKeluarga->id)}}" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="_method" value="put">
            <div class="form-group">
                <label>No KK</label>
                <input type="text" name="no_kk" class="form-control {{$errors->has('no_kk') ? 'is-invalid' : ''}}" value="{{$kartuKeluarga->no_kk}}">
                {!!$errors->first('no_kk','<span class="invalid-feedback">:message</span>')!!}
            </div>
            <div class="form-group">
                <label>Kepala Keluarga</label>
                <input type="text" name="kepala_keluarga" class="form-control {{$errors->has('kepala_keluarga') ? 'is-invalid' : ''}}" value="{{$kartuKeluarga->kepala_keluarga}}">
                {!!$errors->first('kepala_keluarga','<span class="invalid-feedback">:message</span>')!!}
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>RT</label>
                        <input type="text" name="rt" class="form-control {{$errors->has('rt') ? 'is-invalid' : ''}}" value="{{$kartuKeluarga->rt}}">
                        {!!$errors->first('rt','<span class="invalid-feedback">:message</span>')!!}
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>RW</label>
                        <input type="text" name="rw" class="form-control {{$errors->has('rw') ? 'is-invalid' : ''}}" value="{{$kartuKeluarga->rw}}">
                        {!!$errors->first('rw','<span class="invalid-feedback">:message</span>')!!}
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label>Desa</label>
                <input type="text" name="desa" class="form-control {{$errors->has('desa') ? 'is-invalid' : ''}}" value="{{$kartuKeluarga->desa}}">
                {!!$errors->first('desa','<span class="invalid-feedback">:message</span>')!!}
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Kecamatan</label>
                        <input type="text" name="kecamatan" class="form-control {{$errors->has('kecamatan') ? 'is-invalid' : ''}}" value="{{$kartuKeluarga->kecamatan}}">
                        {!!$errors->first('kecamatan','<span class="invalid-feedback">:message</span>')!!}
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Kabupaten</label>
                        <input type="text" name="kabupaten" class="form-control {{$errors->has('kabupaten') ? 'is-invalid' : ''}}" value="{{$kartuKeluarga->kabupaten}}">
                        {!!$errors->first('kabupaten','<span class="invalid-feedback">:message</span>')!!}
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-warning">Ubah</button>
        </form>
    </div>
  </div>
@endsection