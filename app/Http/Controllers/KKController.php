<?php

namespace App\Http\Controllers;
use App\KK;
use App\Penduduk;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Requests\FormKKRequest;

class KKController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data_kk = KK::all();
        return view('kk.index',compact('data_kk'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kk.tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FormKKRequest $request)
    {
        KK::create($request->all());
        alert()->success('Berhasil','Data Telah Ditambahkan');
        return redirect('/kartu-keluarga');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(KK $kartuKeluarga)
    {
        $data_penduduk = Penduduk::where('k_k_id',$kartuKeluarga->id)->get();
        return view('kk.detail',compact('kartuKeluarga','data_penduduk'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(KK $kartuKeluarga)
    {
        return view('kk.ubah',compact('kartuKeluarga'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(FormKKRequest $request, KK $kartuKeluarga)
    {
        $kartuKeluarga->update($request->all());
        alert()->success('Berhasil','Data telah Diubah');
        return redirect('/kartu-keluarga');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete(KK $kartuKeluarga)
    {
        $kartuKeluarga->delete($kartuKeluarga);
        alert()->success('Berhasil','Data Telah Dihapus');
        return redirect('/kartu-keluarga');
    }
}
