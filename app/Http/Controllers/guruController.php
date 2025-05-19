<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use Illuminate\Http\Request;

class guruController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $guru = Guru::all();
        return view('guru.index', ['guru'=>$guru]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view ('guru.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'nip' => 'required',
            'nama_guru' => 'required',
            'mata_pelajaran' => 'required',
            'email' => 'required',
            'no_hp' => 'required',
        ]);
        Guru::create([
            'nip' => $request->nip,
            'nama_guru' => $request->nama_guru,
            'mata_pelajaran' => $request->mata_pelajaran,
            'email' => $request->email,
            'no_hp' => $request->no_hp,
        ]);
        return redirect('guru')->with('success','Guru Berhasil Di Input');
    }

    /**
     * Display the specified resource.
     */
    public function show(Guru $guru)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($nip)
    {
        //
        $data = Guru::where('nip',$nip)->first();
        return view('guru.edit')->with('data',$data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $nip)
    {
        //
        $request->validate([
            'nip' => 'required',
            'nama_guru' => 'required',
            'mata_pelajaran' => 'required',
            'email' => 'required',
            'no_hp' => 'required',
        ]);
        $data = ([
            'nip' => $request->nip,
            'nama_guru' => $request->nama_guru,
            'mata_pelajaran' => $request->mata_pelajaran,
            'email' => $request->email,
            'no_hp' => $request->no_hp,
        ]);

        Guru::where('nip',$nip)->update($data);
        return redirect('guru')->with('success','Guru Berhasil Di Ubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($nip)
    {
        //
        Guru::where('nip',$nip)->delete();
        return redirect('guru')->with('success', 'Guru Berhasil Di hapus');
    }
}
