@extends('layouts.app')
@section('title','Ubah Data Penduduk')
@section('content')
 <!-- DataTales Example -->
 <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Ubah Data Penduduk</h6>
    </div>
    <div class="card-body">
        <form action="{{route('penduduk.update',$penduduk->id)}}" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="_method" value="put">
            <div class="form-group">
                <label style="float: left;" for="kk">Kartu Keluarga</label>
                <select class="form-control" id="kk" name="k_k_id" disabled>
                    <option>--Pilih--</option>
                    @foreach ($kk as $data)
                        <option value="{{$data->id}}" {{($data->id == $penduduk->k_k_id) ? 'selected' : ''}} >{{$data->no_kk}} </option>
                    @endforeach
                  </select>
            </div>
            <div class="form-group">
                <label>NIK</label>
                <input type="text" name="nik" class="form-control {{$errors->has('nik') ? 'is-invalid' : ''}}" value="{{$penduduk->nik}}">
                {!!$errors->first('nik','<span class="invalid-feedback">:message</span>')!!}
            </div>
            <div class="form-group">
                <label>Nama Penduduk</label>
                <input type="text" name="nama" class="form-control {{$errors->has('nama') ? 'is-invalid' : ''}}" value="{{$penduduk->nama}}">
                {!!$errors->first('nama','<span class="invalid-feedback">:message</span>')!!}
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Tempat Lahir</label>
                        <input type="text" name="tempat_lahir" class="form-control {{$errors->has('tempat_lahir') ? 'is-invalid' : ''}}" value="{{$penduduk->tempat_lahir}}">
                        {!!$errors->first('tempat_lahir','<span class="invalid-feedback">:message</span>')!!}
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Tanggal Lahir</label>
                        <input type="date" name="tanggal_lahir" class="form-control {{$errors->has('tanggal_lahir') ? 'is-invalid' : ''}}" value="{{$penduduk->tanggal_lahir}}">
                        {!!$errors->first('tanggal_lahir','<span class="invalid-feedback">:message</span>')!!}
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label>Pekerjaan</label>
                <input type="text" name="pekerjaan" class="form-control {{$errors->has('pekerjaan') ? 'is-invalid' : ''}}" value="{{$penduduk->pekerjaan}}">
                {!!$errors->first('pekerjaan','<span class="invalid-feedback">:message</span>')!!}
            </div>
            <div class="form-group">
                <label style="float: left;" for="agama">Agama</label>
                <select class="form-control {{$errors->has('agama_id') ? 'is-invalid' : ''}}" id="agama" name="agama_id">
                    <option selected disabled>--Pilih--</option>
                    @foreach ($agama as $data)
                        <option value="{{$data->id}}" {{($data->id == $penduduk->agama_id) ? 'selected' : ''}}>{{$data->nama_agama}}</option>
                    @endforeach
                  </select>
                  {!!$errors->first('agama_id','<span class="invalid-feedback">:message</span>')!!}
            </div>
            <div class="row">
                <div class="col-md-6">
                    <label style="float: left;">Jenis Kelamin</label><br><br>
                    <div class="form-check"  style="float: left;">
                        <input class="form-check-input" type="radio" name="jenis_kelamin" id="exampleRadios1" value="Laki-Laki" {{($penduduk->jenis_kelamin == 'Laki-Laki') ? 'checked' : ''}} >
                        <label class="form-check-label" for="exampleRadios1">
                          Laki-Laki
                        </label>
                        <input class="form-check-input ml-2" type="radio" name="jenis_kelamin" id="exampleRadios1" value="Perempuan" {{($penduduk->jenis_kelamin == 'Perempuan') ? 'checked' : ''}} >
                        <label class="form-check-label ml-4" for="exampleRadios1">
                          Perempuan
                        </label>
                      </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label style="float: left;" for="klasifikasi_id">Klasifikasi</label>
                        <select class="form-control" id="klasifikasi_id" name="klasifikasi_id">
                            <option selected disabled>--Pilih--</option>
                            @foreach ($klasifikasi as $data)
                                <option value="{{$data->id}}" {{($data->id == $penduduk->klasifikasi_id) ? 'selected' : ''}}>{{$data->klasifikasi}}</option>
                            @endforeach
                          </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label style="float: left;" for="status">Status Perkawinan</label>
                        <select class="form-control" id="status" name="status_perkawinan">
                            <option selected disabled>--Pilih--</option>
                            <option value="BELUM MENIKAH" {{($penduduk->status_perkawinan == 'BELUM MENIKAH') ? 'selected' : ''}}>BELUM MENIKAH</option>
                            <option value="MENIKAH" {{($penduduk->status_perkawinan == 'MENIKAH') ? 'selected' : ''}}>MENIKAH</option>
                          </select>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label style="float: left;" for="warga">Kewarganegaraan</label>
                        <select class="form-control" id="warga" name="kewarganegaraan">
                            <option selected disabled>--Pilih--</option>
                            <option value="WNI" {{($penduduk->kewarganegaraan == 'WNI') ? 'selected' : ''}}>WNI</option>
                            <option value="WNA" {{($penduduk->kewarganegaraan == 'WNA') ? 'selected' : ''}}>WNA</option>
                          </select>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Gololongan Darah</label>
                        <input type="text" name="gol_darah" class="form-control {{$errors->has('gol_darah') ? 'is-invalid' : ''}}" value="{{$penduduk->gol_darah}}">
                        {!!$errors->first('gol_darah','<span class="invalid-feedback">:message</span>')!!}
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label>Pendidikan</label>
                <input type="text" name="pendidikan" class="form-control {{$errors->has('pendidikan') ? 'is-invalid' : ''}}" value="{{$penduduk->pendidikan}}">
                {!!$errors->first('pendidikan','<span class="invalid-feedback">:message</span>')!!}
            </div>
            <button type="submit" class="btn btn-warning">Ubah</button>
        </form>
    </div>
  </div>
@endsection