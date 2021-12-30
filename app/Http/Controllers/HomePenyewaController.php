<?php

namespace App\Http\Controllers;

use App\Models\Kamar;
use App\Models\Penyedia;
use App\Models\Peraturan;
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
        $penyedia = Penyedia::with('users')->where('id_penyedia',$id_penyedia)->first();
        $peraturan = Peraturan::with('penyedia')->where('id_penyedia',$id_penyedia)->first();
        $isi_peraturan = Peraturan::with('penyedia')->where('id_penyedia', $id_penyedia)->value('peraturan');
        $arr_isi=explode("\r\n",$isi_peraturan);
        $jum_baris=count($arr_isi);
        return view('User.detail', compact('penyedia','peraturan','jum_baris'));
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
    public function DetailKamar($id_kamar)
    {
        //$penyedia = Penyedia::with('users')->where('id_penyedia', $id_penyedia)->first();
        //$kamar = Kamar::all();
        //$penyedia = Penyedia::where('id_user', Auth::user()->id)->value('id_penyedia');
        //$kamar = Kamar::with('penyedia')->find('id_kamar', $id_kamar)->get();
        $kamar = Kamar::with('penyedia')->findOrFail($id_kamar);
        //$penyedia = Penyedia::with('users')->find($id);
        $isi_fasilitas = Kamar::with('penyedia')->value('fasilitas');
        $arr_isi=explode("\r\n",$isi_fasilitas);
        $jum_baris=count($arr_isi);
        return view('User.detailkamar', compact('kamar','jum_baris'));
    }
}
