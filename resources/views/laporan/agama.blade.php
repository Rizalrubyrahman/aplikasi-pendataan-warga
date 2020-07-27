@extends('layouts.app')
@section('title','Laporan Data Agama')
@section('content')
 <!-- DataTales Example -->
 <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Export PDF Data Agama</h6>
    </div>
    <div class="card-body">
       <a href="/laporan/agama/pdf" class="btn btn-danger">Export Pdf</a> 
    </div>
  </div>

@endsection
