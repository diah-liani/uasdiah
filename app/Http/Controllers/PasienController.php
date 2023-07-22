<?php

namespace App\Http\Controllers;

use App\Models\Golongan;
use App\Models\Pasien;
use Illuminate\Http\Request;

class PasienController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rows = Pasien::all();
        return view('pasien.index', compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     */
     public function create()
    {
        return view('pasien.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Pasien::create(
            [
                'pasien_id_gol' => $request->pasien_id_gol,
                'pasien_id_user' => $request->pasien_id_user,
                'pasien_no' => $request->pasien_no,
                'pasien_nama' => $request->pasien_nama,
                'pasien_alamat' => $request->pasien_alamat,
                'pasien_hp' => $request->pasien_hp
            ]
        );

        return redirect('pasien')->with('success','Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $row = Pasien::findOrFail($id);
        return view('pasien.edit', compact('row'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $row = Pasien::findOrFail($id);
        $row->update(
            [
                'pasien_id_gol' => $request->pasien_id_gol,
                'pasien_id_user' => $request->pasien_id_user,
                'pasien_no' => $request->pasien_no,
                'pasien_nama' => $request->pasien_nama,
                'pasien_alamat' => $request->pasien_alamat,
                'pasien_hp' => $request->pasien_hp
              
            ]
        );
        return redirect('pasien')->with('success','Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $row = Pasien::findOrFail($id);
        $row->delete();

        return redirect('pasien')->with('success', 'Data berhasil dihapus');
    }
}
