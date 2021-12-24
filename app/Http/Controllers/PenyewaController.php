<?php

namespace App\Http\Controllers;

use App\Models\Kamar;
use App\Models\Penyedia;
use App\Models\Penyewa;
use App\Models\User;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class PenyewaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $penyewa = Penyewa::with('user');
        return view('SuperAdmin.penyewa.index', compact('penyewa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('SuperAdmin.penyewa.create');
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
    public function show($id_penyewa)
    {
        $penyewa = Penyewa::with('users','penyewa','kamar')->find($id_penyewa);
        return view('SuperAdmin.penyewa.show', compact('penyewa'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_penyewa)
    {
        $penyewa = Penyewa::with('users','penyedia','kamar')->find($id_penyewa);
        $users = User::all();
        $penyedia = Penyedia::all();
        $kamar = Kamar::all();
        return view('SuperAdmin.penyewa.edit', compact('penyewa', 'users', 'penyedia', 'kamar'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_penyewa)
    {
        //melakukan validasi data
        $request->validate([
            'id_user' => 'required',
            'telp_ortu' => 'required',
            'kost' => 'required',
            'id_kmr' => 'required',
            'jangka_waktu' => 'required',
            'jumlah_waktu' => 'required',
            'tgl_mulai' => 'required',
            ]);

        //fungsi eloquent untuk mengupdate data inputan kita
            Penyewa::find($id_penyewa)->update($request->all());

        //jika data berhasil diupdate, akan kembali ke halaman utama
            Alert::success('Success', 'Data Penyewa Barang Berhasil Diupdate');
            return redirect()->route('penyewa.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_penyewa)
    {
        Penyewa::find($id_penyewa)->delete();
        Alert::success('Success', 'Data Penyewa berhasil dihapus');
        return redirect()->route('penyewa.index');
    }

    public function MenuPenyewa()
    {
        $penyewa = Penyewa::with('user');
        return view('PenyediaKost.penyewa.index', compact('penyewa'));
    }
}
