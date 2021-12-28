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
        $kamar = Kamar::with('penyewa')->find($user);
        //return view('User.payment', compact('penyewa','penyedia','user','transaksi'));

        return view('User.payment', compact('user','kamar'));

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
        if (Auth::user()->role == 'penyewa'){
            $transaksi = Transaksi::all();
            return view('SuperAdmin.transaksi.create', compact('transaksi'));
        } else
        if(Auth::user()->role == 'penyedia'){
            $transaksi = Transaksi::all();
            return view('SuperAdmin.transaksi.create', compact('transaksi'));
        }
        //TODO : Implementasikan Proses Simpan Ke Database
        $transaksi = new Transaksi();

        $penyewa_id = Auth::user();
        $penyewa_harga = Penyewa::with('Users')->harga_sewa;
        $transaksi->pengirim = $penyewa_id;
        $transaksi->penerima = '1';
        $transaksi->tanggal_transaksi = $request->get('tanggal_transaksi');
        $transaksi->jumlah_transaki = $penyewa_harga;
        $transaksi->bukti_transaksi = $request->get('bukti_transaksi');
        $transaksi->jenis_transaksi = $request->get('jenis_transaksi');

        $penyedia = $request->get('nama_kost');
        // $transaksi->id_penyewa = $penyewa;
        $jumlah = $request->get('harga_sewa');
        $transaksi->jumlah = $jumlah;
        $transaksi->tanggal_transaksi = $request->get('tanggal_transaksi');

        $status = $request->get('status_transaksi');
        $transaksi->status = $status;

        // $updatePenyewa = Penyewa::find($penyewa);

        $request->validate([
            'users_id' => 'required',
            'nama_kost' => 'required',
            'bukti_transaksi' => 'required',
            // 'harga_sewa' => 'required|integer|max:'. $updatePenyewa->jumlah,
            'tanggal_transaksi' => 'required|date',
            'jenis_transaksi' => 'required',
            'status_transaksi' => 'required',
        ]);

        if($status == 'lunas'){
            // $updatePenyewa->jumlah -= $transaksi->jumlah;
        }
        $transaksi->save();
        // $updatePenyewa->save();
        //jika data berhasil ditambahkan, akan kembali ke halaman utama
        return redirect()->route('transaksi.index')->with('success', 'Transaksi Berhasil Dilakukan');
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
