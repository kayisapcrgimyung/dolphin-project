<?php

namespace App\Http\Controllers;

use App\Models\Riwayat;

use Illuminate\Http\Request;

class riwayatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $riwayat = Riwayat::all();
        return view('riwayat.index', compact('riwayat'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view ('riwayat.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'nama_tugas' => 'required',
            'nama_mapel' => 'required',
            'tgl_selesai' => 'required',
        ]);
        Riwayat::create([
            'nama_tugas' => $request->nama_tugas,
            'nama_mapel'=>$request->nama_mapel,
            'tgl_selesai' => $request->tgl_selesai,
        ]);
        return redirect('riwayat')->with('success','Riwayat Berhasil Di Input');
    }

    /**
     * Display the specified resource.
     */
    public function show(riwayat $riwayat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($kodemapel)
    {
        //
        $data = Riwayat::where('kodemapel',$kodemapel)->first();
        return view('riwayat.edit')->with('data',$data);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $kodemapel)
    {
        //
        $request->validate([
            'nama_tugas' => 'required',
            'nama_mapel' => 'required',
            'tgl_selesai' => 'required',
        ]);
       $data = ([
            'nama_tugas' => $request->nama_tugas,
            'nama_mapel' => $request->nama_mapel,
            'tgl_selesai' => $request->tgl_selesai,
        ]);
        
        Riwayat::where('kodemapel',$kodemapel)->update($data);
        return redirect('riwayat')->with('success','Tugas Berhasil Di Ubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($kodemapel)
    {
        //
        Riwayat::where('kodemapel',$kodemapel)->delete();
        return redirect('riwayat')->with('success', 'Data Berhasil Di hapus');
    }
}
