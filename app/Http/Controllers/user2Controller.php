<?php

namespace App\Http\Controllers;

use App\Models\Riwayat;
use App\Models\Menu;
use App\Models\Tugas;
use Illuminate\Http\Request;

class user2Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $user2 = Menu::all();
        $riwayat2 = Riwayat::all();
        $tugas2 = Tugas::all();
        return view('user.index', compact('user2','riwayat2', 'tugas2'));

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
    }

    /**
     * Display the specified resource.
     */
    public function show(user2 $user2)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(user2 $user2)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, user2 $user2)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(user2 $user2)
    {
        //
    }
}
