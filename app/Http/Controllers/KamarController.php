<?php

namespace App\Http\Controllers;

use App\Models\Kamar;
use App\Models\Penyedia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class KamarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return view('PenyediaKost.kamar.index');

        $kamar = Kamar::all();
        return view('PenyediaKost.Kamar.index', compact('kamar'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('PenyediaKost.Kamar.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'tipe_kamar' => 'required',
            'fasilitas' => 'required',
            'Harga_Tahunan' => 'required',
            'Harga_bulanan' => 'required',
            'Harga_mingguan' => 'required',
            'Harga_harian' => 'required',
            'Foto_Kamar' => 'required',
            'jumlah' => 'required',
        ]);

        if ($request->file('Foto_Kamar')) {
            $image_name = $request->file('Foto_Kamar')->store('images', 'public');
        }

        $penyedia = Penyedia::where('id_user', Auth::user()->id)->value('id_penyedia');

        //TODO : Implementasikan Proses Simpan Ke Database
        $kamar = new Kamar();
        $kamar->tipe_kamar = $request->get('tipe_kamar');
        $kamar->fasilitas = $request->get('fasilitas');
        $kamar->Harga_Tahunan = $request->get('Harga_Tahunan');
        $kamar->Harga_bulanan = $request->get('Harga_bulanan');
        $kamar->Harga_mingguan = $request->get('Harga_mingguan');
        $kamar->Harga_harian = $request->get('Harga_harian');
        $kamar->Foto_Kamar = $image_name;
        $kamar->jumlah = $request->get('jumlah');
        $kamar->id_penyedia = $penyedia;
        $kamar->save();

        //jika data berhasil ditambahkan, akan kembali ke halaman utama
        Alert::success('Success', 'Data Tipe Kamar berhasil ditambahkan');
        return redirect()->route('kamar.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //$penyedia = Penyedia::where('id_user', Auth::user()->id)->value('id_penyedia');
        $kamar = Kamar::with('penyedia')->find($id);
        //$admin = User::where('id', $id)->first();

        return view('PenyediaKost.Kamar.show', compact('kamar'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //$penyedia = Penyedia::where('id_user', Auth::user()->id)->value('id_penyedia');
        //$penyewa = Penyewa::with('users','penyewa','kamar')->find($id_penyewa);
        $kamar = Kamar::with('penyedia')->find($id);
        //$admin = User::where('id', $id)->first();

        return view('PenyediaKost.Kamar.edit', compact('kamar'));
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Kamar::find($id)->delete();
        Alert::success('Success', 'Data Penyewa berhasil dihapus');
        return redirect()->route('kamar.index');
    }
}
