<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penyedia;
use App\Models\Peraturan;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use RealRashid\SweetAlert\Facades\Alert;

class HomePenyediaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $penyedia = Penyedia::all();
        $penyedia = Penyedia::with('users')->where('id_user', Auth::user()->id)->get();
        $id_penyedia = Penyedia::with('users')->where('id_user', Auth::user()->id)->value('id_penyedia');
        $peraturan = Peraturan::with('penyedia')->where('id_penyedia', $id_penyedia)->get();
        $isi_peraturan = Peraturan::with('penyedia')->where('id_penyedia', $id_penyedia)->value('peraturan');
        $arr_isi=explode("\r\n",$isi_peraturan);
        $jum_baris=count($arr_isi);
        return view('PenyediaKost.home', compact('penyedia','peraturan','jum_baris'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_penyedia)
    {
        $penyedia = Penyedia::with('users')->find($id_penyedia);
        return view('PenyediaKost.home', compact('penyedia'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_penyedia)
    {
        $penyedia = Penyedia::with('users')->find($id_penyedia);
        return view('PenyediaKost.InfoKost.edit', compact('penyedia'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user_id = Auth::user()->id;
        $user = User::find($user_id);
        $user->nama = $request->input('nama');
        $user->no_hp = $request->input('no_hp');
        $user->save();

        //validasi
        $request->validate([
            // 'foto_kost' => 'required',
            'nama_kost' => 'required',
            'alamat_kost' => 'required',
        ]);

        $penyedia = Penyedia::with('users')->find($id);

        if ($request->file('foto_kost') == '') {
            $penyedia->nama_kost = $request->get('nama_kost');
            $penyedia->alamat_kost = $request->get('alamat_kost');
            $penyedia->save();

        } else {
            if ($penyedia->foto_kost && file_exists(storage_path('app/public/' .$penyedia->foto_kost)))
            {
                \Storage::delete(['public/' . $penyedia->foto_kost]);
            }
            $image_name = $request->file('foto_kost')->store('images', 'public');

            $penyedia->foto_kost = $image_name;
            $penyedia->nama_kost = $request->get('nama_kost');
            $penyedia->alamat_kost = $request->get('alamat_kost');
            $penyedia->save();
        }

            //jika data berhasil ditambahkan, akan kembali ke halaman utama
            Alert::success('Success', 'Data Penyedia Berhasil Diupdate');
            return Redirect::to('/home/penyedia');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
