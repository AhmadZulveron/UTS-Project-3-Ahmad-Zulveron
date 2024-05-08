<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guru;

class GuruController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('gurus.index',['gurus'=>Guru::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('gurus.create');
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
        Guru::create($validatedData);
        return redirect('/gurus')->with('pesan','Data guru ditambahkan');
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
        return view('gurus.edit',[
            'gurus'=>Guru::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $foto = Guru::find($id);

        $validatedData=$request->validate([
            'nip' => 'required',
            'nama' => 'required',
            'jenis_kelamin' => 'required',
            'alamat' => 'required',
            'agama' => 'required',
            'status_pegawai' => 'required',
            'pendidikan_terakhir' => 'required',
            'photo' => 'nullable'
        ]);

        if ($request->hasFile('photo')) {
            $foto = $request->file('photo');
            $namaFile = 'img' . time() . '_' . $foto->getClientOriginalName();
            $foto->move('foto/guru', $namaFile);

            $validatedData['photo'] = $namaFile;
        } else {
            $validatedData['photo'] = $foto->photo;
        }

        // dd($validatedData);

        Guru::where('nip',$id)->update($validatedData);
        return redirect('/gurus')->with('pesan','Data guru diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Guru::destroy ($id);
        return redirect('/gurus')->with('pesan', 'Data dihapus');
    }
}
