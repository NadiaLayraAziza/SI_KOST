<?php

namespace App\Http\Controllers;

use App\Models\Penyedia;
use App\Models\User;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class PenyediaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function edit($id_penyedia)
    {
        $penyedia = Penyedia::with('users','penyedia','kamar')->find($id_penyedia);
        $users = User::all();
        return view('SuperAdmin.penyedia.edit', compact('penyedia', 'users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_penyedia)
    {
        //melakukan validasi data
        $request->validate([
            'id_user' => 'required',
            'nama_kost' => 'required',
            'alamat_kost' => 'required',
            ]);

            $penyedia = Penyedia::with('user')->where('id_penyedia', $id_penyedia)->first();

            if ($request->file('foto_kost') == ''){
                $penyedia->nama_kost = $request->get('nama_kost');
                $penyedia->alamat_kost = $request->get('alamat_kost');

                $user = User::find($request->get('id_user'));
                //fungsi eloquent untuk menambah data dengan relasi belongsTo
                $penyedia->user()->associate($user);
                $penyedia->save();
            } else{
                if ($penyedia->foto_kost && file_exists(storage_path('app/public/' .$penyedia->foto_kost)))
                {
                    \Storage::delete(['public/' . $penyedia->foto_kost]);
                }
                $image_name = $request->file('foto_kost')->store('images', 'public');
                $penyedia->foto_kost = $image_name;

                $penyedia->nama_kost = $request->get('nama_kost');
                $penyedia->alamat_kost = $request->get('alamat_kost');

                $user = User::find($request->get('id_user'));
                //fungsi eloquent untuk menambah data dengan relasi belongsTo
                $penyedia->user()->associate($user);
                $penyedia->save();
            }

            //jika data berhasil ditambahkan, akan kembali ke halaman utama
            Alert::success('Success', 'Data Penyedia Kost Berhasil Diedit');
            return redirect()->route('penyedia.index');
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
