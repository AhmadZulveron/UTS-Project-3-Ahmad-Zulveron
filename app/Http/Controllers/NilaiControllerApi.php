<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nilai;

class NilaiControllerApi extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Nilai::all();
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
            'id_siswa' => 'required',
            'id_mata_pelajaran' => 'required',
            'nilai' => 'required'
        ]);

        // Simpan data ke database
        return Nilai::create($validatedData);
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
        $nilai = Nilai::findOrFail($id);
        $nilai->update($request->all());

        return $nilai;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Nilai::destroy ($id);

        return("Dihapus");
    }
}
