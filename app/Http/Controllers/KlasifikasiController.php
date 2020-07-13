<?php

namespace App\Http\Controllers;
use App\Klasifikasi;
use Illuminate\Http\Request;
use App\Http\Requests\FormKlasifikasiRequest;
class KlasifikasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data_klasifikasi = Klasifikasi::all();
        return view('klasifikasi.index',compact('data_klasifikasi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FormKlasifikasiRequest $request)
    {
        $klasifikasi = Klasifikasi::create([
            'klasifikasi' => $request->klasifikasi,
            'status' => 1,
        ]);
        alert()->success('Berhasil','Data Telah Ditambahkan');
        return redirect('/klasifikasi');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $klasifikasi = Klasifikasi::find($id);    
        return view('klasifikasi.ubah',compact('klasifikasi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(FormKlasifikasiRequest $request, $id)
    {
        $klasifikasi = Klasifikasi::find($id);
        $klasifikasi->update([
            'klasifikasi' => $request->klasifikasi,
            'status' => 1,
        ]);
        alert()->success('Berhasil','Data Telah Diubah');
        return redirect('/klasifikasi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $klasifikasi = Klasifikasi::find($id);
        $klasifikasi->delete();
        alert()->success('Berhasil','Data Telah Dihapus');
        return redirect('/klasifikasi');
    }
}
