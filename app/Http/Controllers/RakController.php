<?php

namespace App\Http\Controllers;

use App\Models\Rak;
use Illuminate\Http\Request;

class RakController extends Controller
{
         /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rakData = Rak::all();
        return response()->json([
            "message" => "Berhasil Mendapatkan Rak",
            "data" => $rakData
        ],200);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $data =$request->all();
        Rak::create([
            "nama_rak" => $request-> nama_rak,
            "lokasi_rak" => $request-> lokasi_rak,
            "buku_id" => $request-> buku_id
        ]);
        
        if(!$data) return response()->json([
            "Message" => "Gagal membuat Rak"
        ],400);
        return response()->json([
            "Message" => "Berhasil Membuat Rak",
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
        $data = Rak::find($id);

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
        $data = Rak::find($id);
        $updateData = $data->update([
            "nama_rak" => $request-> nama_rak,
            "lokasi_rak" => $request-> lokasi_rak,
            "buku_id" => $request-> buku_id
        ]);

        if(!$updateData) return response()->json([
            "Message" => "Gagal Mengupdate Rak",
        ],500);

        return response()->json([
            "Message" => "Berhasil Mengupdate Rak",
            "data" => $updateData
        ],200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $dataToDelete = Rak::find($id);
        $delete = $dataToDelete->delete();
        if(!$delete) return response()->json([
            "Message" => "Gagal Hapus Rak"
        ], 400);

        return response()->json([
            "Message" => "Berhasil Hapus Rak",
        ], 200);
    }
}
