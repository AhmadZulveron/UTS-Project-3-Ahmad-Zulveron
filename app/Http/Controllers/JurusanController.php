<?php

namespace App\Http\Controllers;

use App\Models\Jurusan;
use Illuminate\Http\Request;

class JurusanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('jurusans.index', ['jurusans'=>Jurusan::latest()->paginate(20)]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('jurusans.create');
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
        Jurusan::create($validatedData);
        return redirect('/jurusans')->with('pesan','Data jurusan Berhasil di Simpan');
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
        return view('jurusans.edit',[
            'jurusans'=>Jurusan::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData=$request->validate([
            'nama'=>'required'
        ]);

        // dd($validatedData);

        Jurusan::where('jurusan_id',$id)->update($validatedData);
        return redirect('/jurusans')->with('pesan','Data Berhasil di Simpan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Jurusan::destroy ($id);
        return redirect('/jurusans')->with('pesan', 'Data jurusan berhasil dihapus');
    }
}
