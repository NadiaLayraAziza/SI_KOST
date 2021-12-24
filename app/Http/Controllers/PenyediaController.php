<?php

namespace App\Http\Controllers;

use App\Models\Penyedia;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
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
        $penyedia = Penyedia::with('user');
        return view('SuperAdmin.penyedia.home', compact('penyedia'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('SuperAdmin.penyedia.create');
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
            'nama_kost' => 'required',
            'alamat_kost' => 'required',
            'foto_kost'=> 'required|file|image|mimes:jpeg,png,jpg',
            'alamat' => 'required',
            'password' => 'required', 'string', 'min:8',
            'nama' => 'required',
            'no_hp' => 'required',
            'email' => 'required|email',
        ]);

        if ($request->file('foto_kost')) {
            $image_name = $request->file('foto_kost')->store('images', 'public');
        }

        $user = new User();
        $user->password = Hash::make($request->get('password'));
        $user->nama = $request->get('nama');
        $user->email = $request->get('email');
        $user->no_hp = $request->get('no_hp');
        $user->alamat = $request->get('alamat');
        $user->role = 'penyedia';
        $user->save();

        $penyedia = new Penyedia;
        $penyedia->nama_kost = $request->get('nama_kost');
        $penyedia->alamat_kost = $request->get('alamat_kost');
        $penyedia->foto_kost = $image_name;
        $penyedia->users()->associate($user);
        $penyedia->save();

        return redirect()->to('/penyedia')
                ->with('success', 'penyedia Berhasil ditambahkan');

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
        $penyedia = Penyedia::with('users')->find($id_penyedia);
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
            'nama_kost' => 'required',
            'alamat_kost' => 'required',
            'alamat' => 'required',
            'nama' => 'required',
            'no_hp' => 'required',
            'email' => 'required|email',
            ]);

            $penyedia = Penyedia::with('users')->where('id_penyedia', $id_penyedia)->first();

            if ($request->file('foto_kost') == ''){
                $penyedia->nama_kost = $request->get('nama_kost');
                $penyedia->alamat_kost = $request->get('alamat_kost');
                $penyedia->save();
            } else{
                if ($penyedia->foto_kost && file_exists(storage_path('app/public/' .$penyedia->foto_kost)))
                {
                    Storage::delete(['public/' . $penyedia->foto_kost]);
                }
                $image_name = $request->file('foto_kost')->store('images', 'public');
                $penyedia->foto_kost = $image_name;

                $penyedia->nama_kost = $request->get('nama_kost');
                $penyedia->alamat_kost = $request->get('alamat_kost');
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

    public function simpan(Request $request)
    {
        $request->validate([
            // 'id_user' => Auth::user()->id,
            'nama_kost' => 'required',
            'alamat_kost' => 'required',
            'foto_kost'=> 'required|file|image|mimes:jpeg,png,jpg',
        ]);

        if ($request->file('foto_kost')) {
            $image_name = $request->file('foto_kost')->store('images', 'public');
        }

        $user = User::find(Auth::user()->id);

        $penyedia = new Penyedia;
        $penyedia->id_user = Auth::user()->id;
        $penyedia->nama_kost = $request->get('nama_kost');
        $penyedia->alamat_kost = $request->get('alamat_kost');
        $penyedia->foto_kost = $image_name;
        $penyedia->users()->associate($user);
        $penyedia->save();

        $user = User::where('id',$penyedia->id_user)
        ->update([
            'role' => "Penyedia"
        ]);

        return redirect()->to('/penyedia/home')
                ->with('success', 'Kost telah berhasil didaftarkan');

    }

}
