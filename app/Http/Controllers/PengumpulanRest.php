<?php

namespace App\Http\Controllers;

use App\Models\Pengumpulan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PengumpulanRest extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pengumpulan = Pengumpulan::all();
        return response()->json([
            'message' => 'Data Pengumpulan',
            'data' => $pengumpulan
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'mapel' => 'required',
            'nama_tugas' => 'required',
            'file_tugas' => 'required|file|mimes:pdf,doc,docx,ppt,pptx|max:2048'
        ], [
            'nama.required' => 'Nama tidak boleh kosong',
            'mapel.required' => 'Mapel tidak boleh kosong',
            'nama_tugas.required' => 'Nama Tugas tidak boleh kosong',
            'file_tugas.required' => 'File Tugas tidak boleh kosong',
            'file_tugas.file' => 'File Tugas harus berupa file',
            'file_tugas.mimes' => 'File Tugas harus berupa pdf, doc, docx, ppt, pptx',
            'file_tugas.max' => 'File Tugas tidak boleh lebih dari 2MB'
        ]);

        $file_tugas = $request->file('file_tugas')->store('tugas', 'public');

        $pengumpulan = Pengumpulan::create([
            'nama' => $request->input('nama'),
            'mapel' => $request->input('mapel'),
            'nama_tugas' => $request->input('nama_tugas'),
            'file_tugas' => $file_tugas,
        ]);

        return response()->json([
            'message' => 'Data Pengumpulan Berhasil Ditambahkan',
            'data' => $pengumpulan
        ], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $pengumpulan = Pengumpulan::find($id);

        if ($pengumpulan) {
            return response()->json($pengumpulan);
        } else {
            return response()->json([
                'message' => 'Data Pengumpulan tidak ditemukan'
            ], 404);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $pengumpulan = Pengumpulan::find($id);

        if (!$pengumpulan) {
            return response()->json([
                'message' => 'Data Pengumpulan tidak ditemukan'
            ], 404);
        }

        $request->validate([
            'nama' => 'required',
            'mapel' => 'required',
            'nama_tugas' => 'required',
            'file_tugas' => 'nullable|file|mimes:pdf,doc,docx,ppt,pptx|max:2048'
        ], [
            'nama.required' => 'Nama tidak boleh kosong',
            'mapel.required' => 'Mapel tidak boleh kosong',
            'nama_tugas.required' => 'Nama Tugas tidak boleh kosong',
            'file_tugas.file' => 'File Tugas harus berupa file',
            'file_tugas.mimes' => 'File Tugas harus berupa pdf, doc, docx, ppt, pptx',
            'file_tugas.max' => 'File Tugas tidak boleh lebih dari 2MB'
        ]);

        $data = [
            'nama' => $request->nama,
            'mapel' => $request->mapel,
            'nama_tugas' => $request->nama_tugas,
        ];

        if ($request->hasFile('file_tugas')) {
            // Hapus file lama
            if ($pengumpulan->file_tugas) {
                Storage::disk('public')->delete($pengumpulan->file_tugas);
            }

            $data['file_tugas'] = $request->file('file_tugas')->store('tugas', 'public');
        }

        $pengumpulan->update($data);

        return response()->json([
            'message' => 'Data Pengumpulan Berhasil Diupdate',
            'data' => $pengumpulan
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $pengumpulan = Pengumpulan::find($id);

        if (!$pengumpulan) {
            return response()->json([
                'message' => 'Data Pengumpulan tidak ditemukan'
            ], 404);
        }

        if ($pengumpulan->file_tugas) {
            Storage::disk('public')->delete($pengumpulan->file_tugas);
        }

        $pengumpulan->delete();

        return response()->json([
            'message' => 'Data Pengumpulan Berhasil Dihapus'
        ], 200);
    }
}
