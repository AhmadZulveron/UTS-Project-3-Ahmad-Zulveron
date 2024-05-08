<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MataPelajaran;

class MataPelajaranControllerApi extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return MataPelajaran::all();
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
            'judul' => 'required',
            'id_guru' => 'required'
        ]);

        // Simpan data ke database
        return MataPelajaran::create($validatedData);
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
        $mapel = MataPelajaran::findOrFail($id);
        $mapel->update($request->all());

        return $mapel;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        MataPelajaran::destroy ($id);

        return("Dihapus");
    }
}
