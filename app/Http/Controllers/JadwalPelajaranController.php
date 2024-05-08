<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JadwalPelajaran;
use App\Models\MataPelajaran;
use App\Models\Kelas;

class JadwalPelajaranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('jadwals.index', ['jadwalpelajarans'=>JadwalPelajaran::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view(
            'jadwals.create',
            ['mapels'=>MataPelajaran::all()],
            ['kelas'=>Kelas::all()]
        );
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
        JadwalPelajaran::create($validatedData);
        return redirect('/jadwalpelajarans')->with('pesan','Data jadwal pelajaran ditambahkan');
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
        return view('jadwals.edit',
            [
                'jadwalpelajarans'=>JadwalPelajaran::find($id),
                'mapels'=>MataPelajaran::all(),
                'kelass'=>Kelas::all()
            ]
        );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData=$request->validate([
            'id_mata_pelajaran' => 'required',
            'id_kelas' => 'required',
            'waktu_mengajar' => 'required'
        ]);

        // dd($validatedData);

        JadwalPelajaran::where('jadwal_pelajaran_id',$id)->update($validatedData);
        return redirect('/jadwalpelajarans')->with('pesan','Data jadwal pelajaran diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        JadwalPelajaran::destroy ($id);
        return redirect('/jadwalpelajarans')->with('pesan', 'Data jadwal pelajaran dihapus');
    }
}
