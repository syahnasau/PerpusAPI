<?php

namespace App\Http\Controllers;

use App\Models\Peminjaman;
use Illuminate\Http\Request;

class PeminjamanController extends Controller
{
          /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pinjamData = Peminjaman::all();
        return response()->json([
            "message" => "Berhasil Mendapatkan Peminjaman",
            "data" => $pinjamData
        ],200);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $data =$request->all();
        Peminjaman::create([
            "tanggal_pinjam" => $request->tanggal_pinjam,
            "tanggal_kembali" => $request->tanggal_kembali,
            "buku_id" => $request->buku_id,
            "anggota_id" => $request->anggota_id,
            "petugas_id" => $request->petugas_id    
        ]);
        
        if(!$data) return response()->json([
            "Message" => "Gagal membuat Peminjaman"
        ],400);
        return response()->json([
            "Message" => "Berhasil Membuat Peminjaman",
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
        $data = Peminjaman::find($id);

        if(!$data) return response()->json([
            "Message" => "Gagal menampilkan Peminjaman ID"
        ],400);
        return response()->json([
            "Message" => "Berhasil Menampilkan Peminjaman ID",
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
        $data = Peminjaman::find($id);
        $updateData = $data->update([
            "tanggal_pinjam" => $request->tanggal_pinjam,
            "tanggal_kembali" => $request->tanggal_kembali,
            "buku_id" => $request->buku_id,
            "anggota_id" => $request->anggota_id,
            "petugas_id" => $request->petugas_id    
        ]);

        if(!$updateData) return response()->json([
            "Message" => "Gagal Mengupdate Peminjaman",
        ],500);

        return response()->json([
            "Message" => "Berhasil Mengupdate Peminjaman",
            "data" => $updateData
        ],200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $dataToDelete = Peminjaman::find($id);
        $delete = $dataToDelete->delete();
        if(!$delete) return response()->json([
            "Message" => "Gagal Hapus Peminjaman"
        ], 400);

        return response()->json([
            "Message" => "Berhasil Hapus Peminjaman",
        ], 200);
    }

}
