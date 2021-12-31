<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use App\Models\Kamar;
use App\Models\Penyedia;
use App\Models\Penyewa;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::user()->role == 'admin'){
            $transaksi = Transaksi::all();
            return view('SuperAdmin.transaksi.index', compact('transaksi'));
        } else
        if(Auth::user()->role == 'penyedia'){
            $transaksi = Transaksi::all();
            return view('SuperAdmin.transaksi.index', compact('transaksi'));
        }
        $user= Auth::user()->id;
        $transaksi = Transaksi::where('id_user',$user);
        return view('User.payment', compact('user','transaksi'));
        // $transaksi = Transaksi::join('penyewa', 'transaksi.id_penyewa', '=', 'penyewa.id_penyewa')->join('penyedia', 'transaksi.id_penyedia', '=', 'penyedia.id_penyedia')
        //     ->join('users', 'penyewa.user_id', '=', 'users.id') ->join('users', 'penyedia.user_id', '=', 'users.id')
        //     ->get(['transaksi.*', 'penyewa.*', 'users.name', 'penyedia.nama_kost']);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (Auth::user()->role == 'admin'){
            $transaksi = Transaksi::all();
            return view('SuperAdmin.transaksi.create', compact('transaksi'));
        } else
        if(Auth::user()->role == 'penyedia'){
            $transaksi = Transaksi::all();
            return view('SuperAdmin.transaksi.create', compact('transaksi'));
        }

        // $penyewa = Penyewa::with('users')->get();
        // $penyedia = Penyedia::where('nama_kost')->get();
        $user= Auth::user();

        $kamar = Kamar::with('penyewa')->where('id_user',$user);
        $penyewa = Penyewa::with('users')->where('id_user',Auth::user()->id)->first();

        return view('User.payment', compact('user','kamar','penyewa'));

        // $penyewa = Penyewa::with('user')->get();
        // $penyedia = Penyedia::where('nama_kost')->get();
        // return view('transaksi.create', ['transaksi' => $penyewa, 'penyedia' => $penyedia]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //TODO : Implementasikan Proses Simpan Ke Database
        $request->validate([
            'harga_sewa' => 'required',
            'tanggal_transaksi' => 'required',
        ]);

        if ($request->file('bukti_transaksi')) {
            $image_name = $request->file('bukti_transaksi')->store('images', 'public');
        }

        $transaksi = new Transaksi();

        $penyewa_id = Auth::user()->id;
        $penyewa =Auth::user();
        // $penyewa_harga = Penyewa::with('Users')->harga_sewa;
        $transaksi->pengirim = $penyewa_id;
        $transaksi->penerima = '1';
        //$transaksi->tanggal_transaksi = $request->get('tanggal_transaksi');
        $transaksi->bukti_transaksi = $image_name;
        $transaksi->jumlah_transaksi = $request->get('harga_sewa');
        $transaksi->jenis_transaksi = 'masuk';
        $transaksi->status_transaksi ='done';

        $transaksi->save();

        // dd($transaksi);
        //jika data berhasil ditambahkan, akan kembali ke halaman utama
        //return redirect()->route('/')->with('success', 'Transaksi Berhasil Dilakukan');
        return view('User.home', compact('user','kamar','penyewa'));
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
    public function edit($id)
    {
        //
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
    public function destroy($id_transaksi)
    {
        Transaksi::find($id_transaksi)->delete();
        Alert::success('Success', 'Data Transaksi berhasil dihapus');
        return redirect()->route('transaksi.index');
    }
}
