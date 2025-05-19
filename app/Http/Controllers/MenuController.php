<?php

namespace App\Http\Controllers;

use App\Models\Menu;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $menu = Menu::all();
        return view('menu.index', compact('menu'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view ('menu.create');
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
            'nilai' => 'required',
        ]);
        Menu::create([
            'nama_mapel' => $request->nama_mapel,
            'nama_tugas' => $request->nama_tugas,
            'nilai' => $request->nilai,
        ]);
        return redirect('menu')->with('success','Tugas Berhasil Di Input');
    }

    /**
     * Display the specified resource.
     */
    public function show(Menu $menu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($kodemapel)
    {
        //
        $data = Menu::where('kodemapel',$kodemapel)->first();
        return view('menu.edit')->with('data',$data);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $kodemapel)
    {
        //
        $request->validate([
            'nama_mapel' => 'required',
            'nama_tugas' => 'required',
            'nilai' => 'required',
        ]);
       $data = ([
            'nama_mapel' => $request->nama_mapel,
            'nama_tugas' => $request->nama_tugas,
            'nilai' => $request->nilai,
        ]);
        
        Menu::where('kodemapel',$kodemapel)->update($data);
        return redirect('menu')->with('success','Tugas Berhasil Di Ubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($kodemapel)
    {
        //
        Menu::where('kodemapel',$kodemapel)->delete();
        return redirect('menu')->with('success', 'Data Berhasil Di hapus');
    }
}
