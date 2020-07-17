<?php

namespace App\Http\Controllers;
use App\Penduduk;
use Illuminate\Http\Request;
use App\Http\Requests\FormPendudukRequest;
use App\Agama;
use App\Klasifikasi;
use App\KK;

class PendudukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data_penduduk = Penduduk::all();
        return view('penduduk.index',compact('data_penduduk'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kk = KK::all();
        $klasifikasi = Klasifikasi::all();
        $agama = Agama::all();
        return view('penduduk.tambah',compact('kk','klasifikasi','agama'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FormPendudukRequest $request)
    {
        Penduduk::create($request->all());
        alert()->success('Berhasil','Data Telah Ditambahkan');
        return redirect('/penduduk');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Penduduk $penduduk)
    {
        return view('penduduk.detail',compact('penduduk'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Penduduk $penduduk)
    {
        $agama = Agama::all();
        $klasifikasi = Klasifikasi::all();
        $kk = KK::all();
        return view('penduduk.ubah',compact('penduduk','agama','klasifikasi','kk'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(FormPendudukRequest $request, Penduduk $penduduk)
    {
        $penduduk->update($request->all());
        alert()->success('Berhasil','Data Telah Diubah');
        return redirect('/penduduk');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Penduduk $penduduk)
    {
        $penduduk->delete();
        alert()->success('Berhasil','Data Telah Di hapus');
        return redirect('/penduduk');
    }
}
