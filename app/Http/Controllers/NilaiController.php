<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nilai;
use App\Models\Siswa;
use App\Models\MataPelajaran;

class NilaiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('nilais.index', ['nilais'=>Nilai::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view(
            'nilais.create',
            [
                'siswas'=>Siswa::all(),
                'mapels'=>MataPelajaran::all()
            ]
        );
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
        // dd($validatedData);
        Nilai::create($validatedData);
        return redirect('/nilais')->with('pesan','Data nilai ditambahkan');
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
        return view(
            'nilais.edit',
            [
                'nilais'=>Nilai::find($id),
                'siswas'=>Siswa::all(),
                'mapels'=>MataPelajaran::all()
            ]
        );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData=$request->validate([
            'id_siswa' => 'required',
            'id_mata_pelajaran' => 'required',
            'nilai' => 'required'
        ]);

        Nilai::where('nilai_id',$id)->update($validatedData);
        return redirect('/nilais')->with('pesan','Data nilai diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Nilai::destroy ($id);
        return redirect('/nilais')->with('pesan', 'Data nilai dihapus');
    }
}
