<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\controller;
use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function index(){
        return view('sesi.index');
    }
    public function login (Request $request){
        Session::flash('email',$request->email);


        $request->validate ([
            'email' => 'required',
            'password' => 'required',
        ]);
        [
            'email'=>'Email tidak boleh kosong',
            'password'=>'Password tidak boleh kosong',
        ];

        $infologin = [
            'email'=>$request->email,
            'password'=>$request->password
        ];
        if (Auth::attempt($infologin)) {
            $user = Auth::user();
            if ($user->role == 'admin') {
                return redirect()->route('menu.index')->with('success', 'Berhasil login sebagai admin');
            } else {
                return redirect()->route('user.index')->with('success', 'Berhasil login sebagai user');
            }
        } else {
            return redirect('sesi')->with('success', 'Gagal login');
        }
        
    }

    public function logout(){
        Auth::logout();
        return redirect('sesi')->with('success', 'Berhasil logout');
    } 
}