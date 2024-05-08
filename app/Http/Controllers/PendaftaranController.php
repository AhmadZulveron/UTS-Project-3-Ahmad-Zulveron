<?php

namespace App\Http\Controllers;

use App\Models\Pendaftaran;
use Illuminate\Http\Request;

class PendaftaranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('siswas.pendaftaran');
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
            'nama_siswa' => 'required',
            'jenis_kelamin' => 'required',
            'tempat_lahir' => 'required',
            'tgl_lahir' => 'required',
            'agama' => 'required',
            'alamat_siswa' => 'required',
            'no_telp' => 'required',
            'sekolah_asal' => 'required',
            'photo' => 'required',
        ]);

        if ($request->hasFile('photo')) {
            if ($request->photo_old) {
                $image_url=public_path('photo').$request->photo_old;
                unlink(($image_url));
            }
            $namaFile='user-profile_'.time().'_'.$request->photo->getClientOriginalName();
            $request->cover_image->move('photo',$namaFile);
        }
        else{
            $namaFile='';
        }
        $validatedData['photo']=$namaFile;

        // Simpan data ke database
        Pendaftaran::create($validatedData);
        return redirect('/pendaftarans')->with('pesan','Data Siswa disimpan');
        // return redirect()->back()->with('pesan','Data Siswa disimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pendaftaran $pendaftaran)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pendaftaran $pendaftaran)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pendaftaran $pendaftaran)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pendaftaran $pendaftaran)
    {
        //
    }
}
