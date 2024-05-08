<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jurusan;

class JurusanControllerApi extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Jurusan::all();
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
            'nama' => 'required'
        ]);

        // Simpan data ke database
        return Jurusan::create($validatedData);
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
        $jurusan = Jurusan::findOrFail($id);
        $jurusan->update($request->all());

        return $jurusan;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Jurusan::destroy ($id);

        return("Dihapus");
    }
}
