<?php

namespace App\Http\Controllers;

use App\Models\Pengumpulan;
use Illuminate\Http\Request;

class pengumpulanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $pengumpulan = Pengumpulan::all();
        return view('pengumpulan.index', ['pengumpulan'=>$pengumpulan]);
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
        //
        $request->validate([
            'nama' => 'required|string|max:255',
            'mapel' => 'required|string|max:255',
            'nama_tugas' => 'required|string|max:255',
            'file_tugas' => 'nullable|file|mimes:jpg,jpeg,png,pdf,docx|max:2048',
        ]);
    
        $filePath = null;
        if ($request->hasFile('file_tugas')) {
            $filePath = $request->file('file_tugas')->store('tugas', 'public');
        }
    
        Pengumpulan::create([
            'nama' => $request->nama,
            'mapel' => $request->mapel,
            'nama_tugas' => $request->nama_tugas,
            'file_tugas' => $filePath,
           
        ]);
    
        return back()->with('success', 'Tugas berhasil dikirim!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pengumpulan $pengumpulan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pengumpulan $pengumpulan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pengumpulan $pengumpulan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pengumpulan $pengumpulan)
    {
        //
    }

public function kirim(Request $request)
{
    $request->validate([
        'nama' => 'required|string',
        'mapel' => 'required|string',
        'nama_tugas' => 'required|string',
        'file_tugas' => 'required|file|max:2048',
    ]);

    // Simpan file
    $filePath = $request->file('file_tugas')->store('tugas', 'public');

    // Simpan ke database
    Pengumpulan::create([
        'nama' => $request->nama,
        'mapel' => $request->mapel,
        'nama_tugas' => $request->nama_tugas,
        'file_tugas' => $filePath,
        'waktu_kumpul' => now(),
        'status' => 'Dikirim',
    ]);

    return redirect()->back()->with('success', 'Tugas berhasil dikirim!');
}


}
