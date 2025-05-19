<?php

namespace App\Http\Controllers;

use App\Models\Tugas;
use Illuminate\Http\Request;


class tugasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $tugas = Tugas::all();
        return view('tugas.index', ['tugas'=>$tugas]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view ('tugas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'nama_mapel' => 'required',
            'nama_tugas' => 'required',
            'tempo' => 'required',
            'pengerjaan' => 'required|in:Belum Selesai,Dalam Pengerjaan,Selesai',
        ]);
        
        Tugas::create([
            'nama_mapel' => trim($request->nama_mapel),
            'nama_tugas' => trim($request->nama_tugas),
            'tempo' => $request->tempo,
            'pengerjaan' => trim($request->pengerjaan), 
        ]);
        
        
        return redirect('tugas')->with('success','Tugas Berhasil Di Input');
    }

    /**
     * Display the specified resource.
     */
    public function show(Tugas $tugas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($kodemapel)
    {
        //
        $data = Tugas::where('kodemapel',$kodemapel)->first();
        return view('tugas.edit')->with(['data'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $kodemapel)
{
    $request->validate([
        'nama_mapel' => 'required',
        'nama_tugas' => 'required',
        'tempo' => 'required',
        'pengerjaan' => 'required',
    ]);

    $data = [
        'nama_mapel' => $request->nama_mapel,
        'nama_tugas' => $request->nama_tugas,
        'tempo' => $request->tempo,
        'pengerjaan' => $request->pengerjaan,
    ];

        Tugas::where('kodemapel',$kodemapel)->update($data);
        return redirect('tugas')->with('success','Tugas Berhasil Di Ubah');
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($kodemapel)
    {
        //
        Tugas::where('kodemapel',$kodemapel)->delete();
        return redirect('tugas')->with('success', 'Data Berhasil Di hapus');
    }
}
