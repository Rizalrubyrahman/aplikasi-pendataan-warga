<?php

namespace App\Http\Controllers;
use PDF;
use App\KK;
use App\Penduduk;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
    public function kartuKeluarga()
    {
        return view('laporan.kk');
    }
    public function kartuKeluargaPdf()
    {
        $data_kk = KK::all();
        $pdf = PDF::loadView('laporan.kk-pdf',compact('data_kk'));
        return $pdf->download('Laporan-Kartu-Keluarga'.date('d-m-yy_H-i-s').'.pdf');
    }
}
