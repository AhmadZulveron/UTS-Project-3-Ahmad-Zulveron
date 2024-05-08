<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('user.index', ['users'=>User::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user.create', ['users'=>User::all()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'username' => 'required',
            'email' => 'required',
            'password' => 'required',
            'role' => 'required',
        ]);

        // Simpan data ke database
        // dd($validatedData);
        User::create($validatedData);
        return redirect('/users')->with('pesan','Data user ditambahkan');
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
            'user.edit',
            ['users'=>User::find($id)]
        );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'username' => 'required',
            'email' => 'required',
            'password' => 'required',
            'role' => 'required',
        ]);

        // Simpan data ke database
        // dd($validatedData);
        User::where('user_id', $id)->update($validatedData);
        return redirect('/users')->with('pesan','Data user diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
