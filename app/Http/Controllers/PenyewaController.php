<?php

namespace App\Http\Controllers;

use App\Models\Kamar;
use App\Models\Penyedia;
use App\Models\Penyewa;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Exists;
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
        if(Auth::user()->role == 'admin'){
            $penyewa = Penyewa::with('users')->paginate(10);
            $kamar = Kamar::all();

            return view('SuperAdmin.penyewa.index', compact('penyewa',$kamar));
        } else{
            if(Auth::user()->role == 'Penyedia'){
            $penyewa = Penyewa::with('user');
            return view('PenyediaKost.penyewa.index', compact('penyewa'));
            }
            Alert::info('Oopss..', 'Anda dilarang masuk ke area ini.');
            return redirect()->to('/login');
        }

    }

    /**
     * Show the form for creating a new resource.
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //$penyedia = User::where('id_user', Auth::user()->id)->value('id_penyedia');
        $user = Auth::id();
        //$id = auth()->user()->id;
        //echo $user;
        $penyewa = new Penyewa();
        //$kamar = Kamar::all()->where('id_kamar','');
        //$penyewa -> id_penyewa = $request->get($user);
        $penyewa -> id_user = $user;
        $penyewa -> telp_ortu = $request->get('telp_ortu');
        $penyewa -> jangka_waktu = $request->get('jangka_waktu');
        $penyewa -> jumlah_waktu = $request->get('jumlah_waktu');
        $penyewa -> tgl_mulai = $request->get('tgl_mulai');
        $penyewa -> kost = $request -> get ('id_penyedia');
        $penyewa -> id_kmr = $request -> get ('id_kamar');
        $penyewa -> harga_sewa = $request -> get ('harga_sewa');

        $penyewa->save();
        Alert::success('Success', 'Kamar Berhasil Dibooking');
        return redirect()->route('transaksi.create');

        // $request->validate([
        //     'id_penyewa' => 'required',
        //     'id_user' => 'required',

        // ]);

        // $penyedia = new Penyedia;
        // $penyedia->nama_kost = $request->get('nama_kost');
        // $penyedia->alamat_kost = $request->get('alamat_kost');
        // $penyedia->users()->associate($user);
        // $penyedia->save();

        //

        // echo $kamar, $user, $penyewa, $request;
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

    public function booking($id)
    {
        $user = Auth::user()->id;
        // if(Penyewa::where('user_id',$user)){
        //     $user = Auth::user();
        //     $penyedia = Kamar::with('penyedia')->find($id);
        //     $kamar = Kamar::with('penyedia')->where('id_penyedia',$id);
        //     $penyewa = Penyewa::with('users')->where('id_user',$user)->paginate(5);

        //     return view('User.bookinghistory', compact('user','kamar','penyewa','penyedia'));
        //     //return view('User.booking', compact('user','kamar'));

        // } else{
            // $user = Auth::user();
            // $penyedia = Penyedia::with('users')->where('id_user',$user);
            // $kamar = Kamar::with('penyedia')->where('id_penyedia',$penyedia);
            //$penyewa = Penyewa::with('users')->find($user);
            $user = Auth::user();
            $kamar = Kamar::with('penyedia')->find($id);
            return view('User.booking', compact('user','kamar'));
            //return view('User.booking', compact('user','kamar','penyedia'));

    }
}
