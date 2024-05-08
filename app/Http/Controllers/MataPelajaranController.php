<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MataPelajaran;
use App\Models\Guru;

class MataPelajaranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('matapelajarans.index', ['mapels'=>MataPelajaran::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('matapelajarans.create', ['gurus'=>Guru::all()]);
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
        // dd($validatedData);
        MataPelajaran::create($validatedData);
        return redirect('/matapelajarans')->with('pesan','Data mata pelajaran ditambahkan');
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
        return view('matapelajarans.edit',
            ['matapelajarans'=>MataPelajaran::find($id)],
            ['gurus'=>Guru::all()]
        );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData=$request->validate([
            'judul' => 'required',
            'id_guru' => 'required'
        ]);

        MataPelajaran::where('mata_pelajaran_id',$id)->update($validatedData);
        return redirect('/matapelajarans')->with('pesan','Data mata pelajaran diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        MataPelajaran::destroy ($id);
        return redirect('/matapelajarans')->with('pesan', 'Data mata pelajaran dihapus');
    }
}
