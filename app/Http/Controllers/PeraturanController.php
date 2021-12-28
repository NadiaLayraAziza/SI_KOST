<?php

namespace App\Http\Controllers;

use App\Models\Penyedia;
use App\Models\Peraturan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use RealRashid\SweetAlert\Facades\Alert;

class PeraturanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('PenyediaKost.peraturan.create');
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
            'peraturan' => 'required',
        ]);

        $penyedia = Penyedia::where('id_user', Auth::user()->id)->value('id_penyedia');

        //TODO : Implementasikan Proses Simpan Ke Database
        $peraturan = new Peraturan();
        $peraturan->peraturan = $request->get('peraturan');
        $peraturan->id_penyedia = $penyedia;
        $peraturan->save();

        //jika data berhasil ditambahkan, akan kembali ke halaman utama
        Alert::success('Success', 'Data Peraturan berhasil ditambahkan');
        // return redirect()->route('/home/penyedia');
        return Redirect::to('/home/penyedia');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_peraturan)
    {
        $peraturan = Peraturan::with('penyedia')->find($id_peraturan);
        return view('PenyediaKost.peraturan.edit', compact('peraturan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_peraturan)
    {
        $request->validate([
            'peraturan' => 'required',
        ]);

        $peraturan = Peraturan::with('penyedia')->find($id_peraturan);

        //TODO : Implementasikan Proses Simpan Ke Database
        $peraturan->peraturan = $request->get('peraturan');
        $peraturan->save();

        //jika data berhasil ditambahkan, akan kembali ke halaman utama
        Alert::success('Success', 'Data Peraturan berhasil diupdate');
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
