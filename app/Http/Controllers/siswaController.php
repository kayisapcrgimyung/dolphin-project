<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class siswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $siswa = Siswa::all();
        return view('siswa.index', ['siswa'=>$siswa]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view ('siswa.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'nisn' => 'required',
            'nama_siswa' => 'required',
            'kelas' => 'required',
            'email' => 'required',
            'no_hp' => 'required',
        ]);
        
        Siswa::create([
            'nisn' => $request->nisn,
            'nama_siswa' => $request->nama_siswa,
            'kelas' => $request->kelas,
            'email' => $request->email,
            'no_hp' => $request->no_hp,
        ]);
        return redirect('siswa')->with('success','Siswa Berhasil Di Input');
    }

    /**
     * Display the specified resource.
     */
    public function show(Siswa $siswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($nisn)
    {
        //
        $data = Siswa::where('nisn',$nisn)->first();
        return view('siswa.edit')->with('data',$data);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $nisn)
    {
        //
        $request->validate([
            'nisn' => 'required',
            'nama_siswa'=> 'required',
            'kelas' => 'required',
            'email' => 'required',
            'no_hp' => 'required',
        ]);
       $data = ([
            'nisn' => $request->nisn,
            'nama_siswa'=>$request->nama_siswa,
            'kelas' => $request->kelas,
            'email' => $request->email,
            'no_hp' => $request->no_hp,
        ]);
        
        Siswa::where('nisn',$nisn)->update($data);
        return redirect('siswa')->with('success','Siswa Berhasil Di Ubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($nisn)
    {
        //
        Siswa::where('nisn',$nisn)->delete();
        return redirect('siswa')->with('success', 'Siswa Berhasil Di hapus');
    }
}
