<?php

namespace App\Http\Controllers;
use App\Dokumen;
use Illuminate\Http\Request;

class DokumenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data_dokumen = Dokumen::all();
        return view('dokumen.index',compact('data_dokumen'));
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
    public function store(Request $request)
    {
        Dokumen::create([
            'nama_dokumen' => $request->nama_dokumen,
            'status' => 1,
        ]);
        alert()->success('Berhasil','Data Telah Ditambahkan');
        return redirect('/dokumen');
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
        $dokumen = Dokumen::find($id);
        return view('dokumen.ubah',compact('dokumen'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $dokumen = Dokumen::find($id);
        $dokumen->update([
            'nama_dokumen' => $request->nama_dokumen,
            'status' => 1,
        ]);
        alert()->success('Berhasil','Data Telah Diubah');
        return redirect('/dokumen');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dokumen = Dokumen::find($id);
        $dokumen->delete();
        alert()->success('Berhasil','Data Telah Dihapus');
        return redirect('/dokumen');
    }
}
