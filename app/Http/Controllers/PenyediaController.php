<?php

namespace App\Http\Controllers;

use App\Models\Kamar;
use App\Models\Oracle;
use App\Models\Penyedia;
use App\Models\User;
use Carbon\Carbon;
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
        $penyedia = Penyedia::with('users')->get();
        return view('SuperAdmin.penyedia.index', compact('penyedia'));
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
        $penyedia = Penyedia::all()->find($id);
        $kamar = Kamar::with('penyedia')->where('id_penyedia', $id)->get();
        $isi_fasilitas = Kamar::with('penyedia')->where('id_penyedia', $id)->value('fasilitas');
        $arr_isi=explode("\r\n",$isi_fasilitas);
        $jum_baris=count($arr_isi);
        return view('SuperAdmin.penyedia.show', compact('penyedia','kamar','jum_baris'));
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
        $user_id = Penyedia::with('users')->where('id_penyedia', $id_penyedia)->value('id_user');
        $user = User::find($user_id);
        $user->nama = $request->input('nama');
        $user->alamat = $request->input('alamat');
        $user->email = $request->input('email');
        $user->no_hp = $request->input('no_hp');
        $user->save();

        //melakukan validasi data
        $request->validate([
            'nama_kost' => 'required',
            'alamat_kost' => 'required',
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
    public function destroy($id_penyedia)
    {
        Kamar::with('penyedia')->where('id_penyedia',$id_penyedia)->delete();
        Penyedia::find($id_penyedia)->delete();
        Alert::success('Success', 'Data Penyedia berhasil dihapus');
        return redirect()->route('penyedia.index');
    }

    public function simpan(Request $request)
    {
        $request->validate([
            //'id_user' => Auth::user()->id,
            'nama_kost' => 'required',
            'alamat_kost' => 'required',
            'foto_kost'=> 'required|file|image|mimes:jpeg,png,jpg',
        ]);

        // if ($request->file('foto_kost')) {
        //     $image_name = $request->file('foto_kost')->store('images', 'public');
        // }
        $payload = $request->except(['foto_kost']);
            if ($request->hasFile('foto_kost')) {
                $file = $request->file('foto_kost');
                $oracle = new Oracle();
                $response = $oracle->uploadObject($file, 'gambar');
                $payload['foto_kost']= $response;
            }

        $user = User::find(Auth::user()->id);

        $penyedia = new Penyedia;
        $penyedia->id_user = Auth::user()->id;
        $penyedia->nama_kost = $request->get('nama_kost');
        $penyedia->alamat_kost = $request->get('alamat_kost');
        // $penyedia->foto_kost = $image_name;
        $penyedia->foto_kost = $response;
        $penyedia->users()->associate($user);
        $penyedia->save();

        $user = User::where('id',$penyedia->id_user)
        ->update([
            'role' => "Penyedia"
        ]);

        Alert::success('Success', 'Kost telah berhasil didaftarkan');
        return redirect()->to('home/penyedia');

    }

}
