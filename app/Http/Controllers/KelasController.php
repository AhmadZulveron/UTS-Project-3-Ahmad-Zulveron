<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kelas;
use App\Models\Jurusan;
use App\Models\Guru;

class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('kelas.index', ['kelas'=>Kelas::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view(
            'kelas.create',
            [
                'jurusans'=>Jurusan::all(),
                'gurus'=>Guru::all()
            ]
        );
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
        // dd($validatedData);
        Kelas::create($validatedData);
        return redirect('/kelas')->with('pesan','Data kelas ditambahkan');
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
            'kelas.edit',
            [
                'kelas'=>Kelas::find($id),
                'jurusans'=>Jurusan::all(),
                'guurus'=>Guru::all()
            ]
        );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData=$request->validate([
            'tahun_ajaran'=>'required',
            'id_jurusan' => 'required',
            'wali_kelas' => 'required'
        ]);

        Kelas::where('kelas_id',$id)->update($validatedData);
        return redirect('/kelas')->with('pesan','Data Berhasil di Simpan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Kelas::destroy ($id);
        return redirect('/kelas')->with('pesan', 'Data berhasil dihapus');
    }
}
