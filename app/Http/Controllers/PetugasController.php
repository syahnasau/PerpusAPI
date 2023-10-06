<?php

namespace App\Http\Controllers;

use App\Models\Petugas;
use Illuminate\Http\Request;

class PetugasController extends Controller
{
          /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $petugasData = Petugas::all();
        return response()->json([
            "message" => "Berhasil Mendapatkan Petugas",
            "data" => $petugasData
        ],200);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $data =$request->all();
        Petugas::create([
            "nama_petugas" => $request->nama_petugas,
            "jabatan_petugas" => $request->jabatan_petugas,
            "no_telp_petugas" => $request->no_telp_petugas,
            "alamat_petugas" => $request->alamat_petugas,
        ]);
        
        if(!$data) return response()->json([
            "Message" => "Gagal membuat Petugas"
        ],400);
        return response()->json([
            "Message" => "Berhasil Membuat Petugas",
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
        $data = Petugas::find($id);

        if(!$data) return response()->json([
            "Message" => "Gagal menampilkan Petugas ID"
        ],400);
        return response()->json([
            "Message" => "Berhasil Menampilkan Petugas ID",
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
        $data = Petugas::find($id);
        $updateData = $data->update([
            "nama_petugas" => $request->nama_petugas,
              "jabatan_petugas" => $request->jabatan_petugas,
              "no_telp_petugas" => $request->no_telp_petugas,
              "alamat_petugas" => $request->alamat_petugas,  
        ]);

        if(!$updateData) return response()->json([
            "Message" => "Gagal Mengupdate Petugas",
        ],500);

        return response()->json([
            "Message" => "Berhasil Mengupdate Petugas",
            "data" => $updateData
        ],200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $dataToDelete = Petugas::find($id);
        $delete = $dataToDelete->delete();
        if(!$delete) return response()->json([
            "Message" => "Gagal Hapus Petugas"
        ], 400);

        return response()->json([
            "Message" => "Berhasil Hapus Petugas",
        ], 200);
    }
}
