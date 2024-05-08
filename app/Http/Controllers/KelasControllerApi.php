<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kelas;

class KelasControllerApi extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Kelas::all();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'tahun_ajaran' => 'required',
            'id_jurusan' => 'required',
            'wali_kelas' => 'required'
        ]);

        // Simpan data ke database
        return Kelas::create($validatedData);
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $kelas = Kelas::findOrFail($id);
        $kelas->update($request->all());

        return $kelas;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Kelas::destroy ($id);

        return("Dihapus");
    }
}
