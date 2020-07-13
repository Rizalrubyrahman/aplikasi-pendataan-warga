<?php

namespace App\Http\Controllers;
use App\Agama;
use Illuminate\Http\Request;

class AgamaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data_agama = Agama::all();
        return view('agama.index',compact('data_agama'));
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
        $agama = Agama::create([
            'nama_agama' => $request->nama_agama,
            'status' => 1,
        ]);
        alert()->success('Berhasil','Data Telah Ditambahkan');
        return redirect('/agama');
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
        $agama = Agama::find($id);
        return view('agama.ubah',compact('agama'));
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
        $agama = Agama::find($id);
        $agama->update([
            'nama_agama' => $request->nama_agama,
            'status' => 1,
        ]);
        alert()->success('Berhasil','Data Telah Diubah');
        return redirect('/agama');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $agama = Agama::find($id);
        $agama->delete();
        alert()->success('Berhasil','Data Telah Dihapus');
        return redirect('/agama');
    }
}
