<?php

namespace App\Http\Controllers;

use App\Models\Pengaduan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class laporanController extends Controller
{
    public function index()
    {
        $data = Pengaduan::with([
            'user'
        ]);
        // dd($data);
        return view('Frontend.user.home', compact('data'));
    }
    public function store(Request $request)
    {
        $validasi = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,jpg,png|max:5048'
        ]);
        

        // dd($validasi);
        if ($request->file('image')) {
            $validasi['image'] = $request->file('image')->store('laporan');
        }
        Pengaduan::create($validasi);
        return redirect()->route('Frontend.user.home')->with('success', "berhasil buat laporan");
    }
}
