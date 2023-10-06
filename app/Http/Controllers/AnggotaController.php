<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Anggota;

class AnggotaController extends Controller
{
     /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $anggotaData = Anggota::all();
        return response()->json([
            "message" => "Berhasil Mendapatkan Anggota",
            "data" => $anggotaData
        ],200);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $data =$request->all();
        Anggota::create([
            "kode_anggota" => $request->kode_anggota,
            "nama_anggota" => $request->nama_anggota,
            "jk_anggota" => $request->jk_anggota,
            "jurusan_anggota" => $request->jurusan_anggota,
            "no_telp_anggota" => $request->no_telp_anggota,
            "alamat_anggota" => $request->alamat_anggota
        ]);
        
        if(!$data) return response()->json([
            "Message" => "Gagal membuat Anggota"
        ],400);
        return response()->json([
            "Message" => "Berhasil Membuat Anggota",
            "Data" => $data
        ],200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = Anggota::find($id);

        if(!$data) return response()->json([
            "Message" => "Gagal menampilkan Rak ID"
        ],400);
        return response()->json([
            "Message" => "Berhasil Menampilkan Rak ID",
            "Data" => $data
        ],200);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = Anggota::find($id);
        $updateData = $data->update([
            "kode_anggota" => $request->kode_anggota,
            "nama_anggota" => $request->nama_anggota,
            "jk_anggota" => $request->jk_anggota,
            "jurusan_anggota" => $request->jurusan_anggota,
            "no_telp_anggota" => $request->no_telp_anggota,
            "alamat_anggota" => $request->alamat_anggota,
        ]);

        if(!$updateData) return response()->json([
            "Message" => "Gagal Mengupdate Data",
        ],500);

        return response()->json([
            "Message" => "Berhasil Mengupdate Data",
            "data" => $updateData
        ],200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $dataToDelete = Anggota::find($id);
        $delete = $dataToDelete->delete();
        if(!$delete) return response()->json([
            "Message" => "Gagal Hapus Anggota"
        ], 400);

        return response()->json([
            "Message" => "Berhasil Hapus",
        ], 200);
    }
}