<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guru;

class GuruControllerApi extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Guru::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nip' => 'required',
            'nama' => 'required',
            'jenis_kelamin' => 'required',
            'alamat' => 'required',
            'agama' => 'required',
            'status_pegawai' => 'required',
            'pendidikan_terakhir' => 'required',
            'photo' => 'required',
        ]);

        if ($request->hasFile('photo')) {
            $foto = $request->file('photo');
            $namaFile = 'img' . time() . '_' . $foto->getClientOriginalName();
            $foto->move('foto/guru', $namaFile);
        } else {
            $namaFile = 'img_default.png';
        }

        $validatedData['photo']=$namaFile;

        // Simpan data ke database
        return Guru::create($validatedData);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $guru = Guru::findOrFail($id);
        $guru->update($request->all());

        return $guru;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Guru::destroy ($id);

        return("Dihapus");
    }
}
