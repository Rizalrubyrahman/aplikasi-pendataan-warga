<?php

namespace App\Http\Controllers;
use App\Penduduk;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $penduduk = Penduduk::all();
        return view('dashboard.index',compact('penduduk'));
    }
}
