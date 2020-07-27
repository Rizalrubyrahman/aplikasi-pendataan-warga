<?php

namespace App\Http\Controllers;
use PDF;
use App\KK;
use App\Agama;
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
    public function penduduk()
    {
        return view('laporan.agama');
    }
    public function agamaPdf()
    {
        $data_agama = Agama::all();
        $pdf = PDF::loadView('laporan.agama-pdf',compact('data_agama'));
         return $pdf->download('laporan_agama'.date('d-m-yy_H-i-s').'.pdf');
    }

}
