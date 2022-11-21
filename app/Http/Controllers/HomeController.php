<?php

namespace App\Http\Controllers;

use App\Models\Pengaduan;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use PDF;

class HomeController extends Controller
{
    public function index()
    {
        return view('Backend.dashboard.index');
    }
    public function pdf($id)
    {
        $pengaduan = Pengaduan::first();
        // dd($pengaduan);
        $pdf = PDF::loadview('Backend.pengaduan.cetak', compact('pengaduan'))->setPaper('a4');
        return $pdf->download('laporan-pengaduan.pdf');
    }
}
