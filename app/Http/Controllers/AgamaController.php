<?php

namespace App\Http\Controllers;
use App\Agama;
use Illuminate\Http\Request;
use App\Http\Requests\FormAgamarequest;

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
    public function store(FormAgamarequest $request)
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
    public function edit(Agama $agama)
    {
        return view('agama.ubah',compact('agama'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(FormAgamarequest $request, Agama $agama)
    {
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
    public function delete(Agama $agama)
    {;
        $agama->delete($agama);
        alert()->success('Berhasil','Data Telah Dihapus');
        return redirect('/agama');
    }
}
