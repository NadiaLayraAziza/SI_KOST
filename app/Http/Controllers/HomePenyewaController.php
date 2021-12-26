<?php

namespace App\Http\Controllers;

use App\Models\Kamar;
use App\Models\Penyedia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomePenyewaController extends Controller
{
    public function index()
    {
        // $penyedia = Penyedia::with('users');
        $penyedia = Penyedia::all();
        return view('User.home', compact('penyedia'));
    }

    public function ShowKost($id_penyedia)
    {
        $penyedia = Penyedia::with('users')->find($id_penyedia);
        return view('User.detail', compact('penyedia'));
    }
    public function PilihKamar($id_penyedia)
    {
        //$penyedia = Penyedia::with('users')->where('id_penyedia', $id_penyedia)->first();
        //$kamar = Kamar::all();
        //$penyedia = Penyedia::where('id_user', Auth::user()->id)->value('id_penyedia');
        $kamar = Kamar::with('penyedia')->where('id_penyedia', $id_penyedia)->get();
        //$penyedia = Penyedia::with('users')->find($id);
        return view('User.kamar', compact('kamar'));
    }
}
