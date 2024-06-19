<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Presensi;
use App\Http\Resources\PresensiResource;

class PresensiController extends Controller
{
    
    public function index(Request $request)
    {
        $query = Presensi::orderBy('created_at', 'asc')->get();

        return PresensiResource::collection($query);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'alamat' => 'nullable',
            'is_hadir' => 'required|in:1,0',
        ]);

        $presensi = Presensi::create([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'is_hadir' => $request->is_hadir,
        ]);

        return new PresensiResource($presensi);
    }
}
