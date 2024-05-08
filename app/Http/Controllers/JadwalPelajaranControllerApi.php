<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JadwalPelajaran;

class JadwalPelajaranControllerApi extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return JadwalPelajaran::all();
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
            'id_mata_pelajaran' => 'required',
            'id_kelas' => 'required',
            'waktu_mengajar' => 'required'
        ]);

        // Simpan data ke database
        return JadwalPelajaran::create($validatedData);
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
        $jadwal = JadwalPelajaran::findOrFail($id);
        $jadwal->update($request->all());

        return $jadwal;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        JadwalPelajaran::destroy ($id);

        return("Dihapus");
    }
}
