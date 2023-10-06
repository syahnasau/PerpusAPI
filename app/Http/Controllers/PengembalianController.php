<?php

namespace App\Http\Controllers;

use App\Models\Pengembalian;
use Illuminate\Http\Request;

class PengembalianController extends Controller
{
          /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pinjamData = Pengembalian::all();
        return response()->json([
            "message" => "Berhasil Mendapatkan Pengembalian",
            "data" => $pinjamData
        ],200);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $data =$request->all();
        Pengembalian::create([
            "tanggal_pengembalian" => $request->tanggal_pengembalian,
            "denda" => $request->denda,
            "buku_id" => $request->buku_id,
            "petugas_id" => $request->petugas_id,    
        ]);
        
        if(!$data) return response()->json([
            "Message" => "Gagal membuat Pengembalian"
        ],400);
        return response()->json([
            "Message" => "Berhasil Membuat Pengembalian",
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
        $data = Pengembalian::find($id);

        if(!$data) return response()->json([
            "Message" => "Gagal menampilkan Pengembalian ID"
        ],400);
        return response()->json([
            "Message" => "Berhasil Menampilkan Pengembalian ID",
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
        $data = Pengembalian::find($id);
        $updateData = $data->update([
            "tanggal_pengembalian" => $request->tanggal_pengembalian,
            "denda" => $request->denda,
            "buku_id" => $request->buku_id,
            "petugas_id" => $request->petugas_id,    
        ]);

        if(!$updateData) return response()->json([
            "Message" => "Gagal Mengupdate Pengembalian",
        ],500);

        return response()->json([
            "Message" => "Berhasil Mengupdate Pengembalian",
            "data" => $updateData
        ],200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $dataToDelete = Pengembalian::find($id);
        $delete = $dataToDelete->delete();
        if(!$delete) return response()->json([
            "Message" => "Gagal Hapus Pengembalian"
        ], 400);

        return response()->json([
            "Message" => "Berhasil Hapus Pengembalian",
        ], 200);
    }
}
