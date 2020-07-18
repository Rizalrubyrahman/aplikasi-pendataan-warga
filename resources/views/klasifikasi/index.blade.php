@extends('layouts.app')
@section('title','Klasifikasi Penduduk')
@section('content')
 <!-- DataTales Example -->
 <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Klasifikasi Penduduk</h6>
    </div>
    <div class="card-body">
        <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#exampleModal">
            <i class="fa fa-plus"></i> Tambah Klasifikasi
          </button>
      <div class="table-responsive mt-4">
        <table class="table table-hover" id="dataTable">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Klasifikasi</th>
                    <th class="text-center">Jumlah</th>
                    <th class="text-center">Status</th>
                    <th class="text-center">Opsi</th>
                </tr>
            </thead>
                @php
                 $no = 1;   
                @endphp
                <tbody> 
                    @foreach ($data_klasifikasi as $klasifikasi)
                    <tr>
                        <td>{{$no++}}</td>
                        <td>{{$klasifikasi->klasifikasi}}</td>
                        <td class="text-center"><span class="badge badge-warning">{{$klasifikasi->penduduk->where('klasifikasi_id',$klasifikasi->id)->count()}} Orang</span></td>
                        @if ($klasifikasi->status == 1)
                            <td class="text-center"><span class="badge badge-info">Aktif</span></td>
                        @endif
                        <td class="text-center">
                            <a href="{{route('klasifikasi.edit', $klasifikasi->id)}}" class="btn btn-sm btn-warning" title="Ubah"><i class="fa fa-pen" ></i></a>
                            <a href="#" class="btn btn-sm btn-danger delete" klasifikasi-id="{{ $klasifikasi->id }}" title="Hapus"><i class="fa fa-trash"></i></a>
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
          <h5 class="modal-title" id="exampleModalLabel">Tambah klasifikasi</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form action="{{route('klasifikasi.store')}}" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label>Nama klasifikasi</label>
                    <input type="text" name="klasifikasi" placeholder="Masukan klasifikasi" class="form-control {{$errors->has('klasifikasi') ? 'is-invalid' : ''}}" value="{{old('klasifikasi')}}">
                    {!!$errors->first('klasifikasi','<span class="invalid-feedback">:message</span>')!!}
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
@section('javascript')
    <script>
      $('.delete').click(function(){
        var klasifikasi_id = $(this).attr('klasifikasi-id');
        swal({
        title: "Apa kamu yakin?",
        text: "Data akan dihapus",
        icon: "warning",
        buttons: true,
        dangerMode: true,
      })
      .then((willDelete) => {
        if (willDelete) {
          window.location = "/klasifikasi/"+klasifikasi_id+"/hapus";
        }
      });
      });
    </script>
@endsection