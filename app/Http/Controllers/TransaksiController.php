<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use App\Models\Penyedia;
use App\Models\Penyewa;
use Illuminate\Http\Request;
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
        $transaksi = Transaksi::join('penyewa', 'transaksi.id_penyewa', '=', 'penyewa.id_penyewa')->join('penyedia', 'transaksi.id_penyedia', '=', 'penyedia.id_penyedia')
            ->join('users', 'penyewa.user_id', '=', 'users.id') ->join('users', 'penyedia.user_id', '=', 'users.id')
            ->get(['transaksi.*', 'penyewa.*', 'users.name', 'penyedia.nama_kost']);
        return view('transakasi.index', compact('transaksi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $penyewa = Penyewa::with('user')->get();
        $penyedia = Penyedia::where('nama_kost')->get();
        return view('transaksi.create', ['transaksi' => $penyewa, 'penyedia' => $penyedia]);
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
        $transaksi = new Transaksi();
        $transaksi->penyewa_id = $request->get('penyewa');
        $penyedia = $request->get('nama_kost');
        $transaksi->id_penyewa = $penyewa;
        $jumlah = $request->get('harga_sewa');
        $transaksi->jumlah = $jumlah;
        $transaksi->tanggal_transaksi = $request->get('tanggal_transaksi');
        $transaksi->bukti_transaksi = $request->get('bukti_transaksi');
        $transaksi->jenis_transaksi = $request->get('jenis_transaksi');
        $status = $request->get('status_transaksi');
        $transaksi->status = $status;
        
        $updatePenyewa = Penyewa::find($penyewa);
        
        $request->validate([
            'users_id' => 'required', 
            'nama_kost' => 'required',
            'bukti_transaksi' => 'required',
            'harga_sewa' => 'required|integer|max:'. $updatePenyewa->jumlah,
            'tanggal_transaksi' => 'required|date',
            'jenis_transaksi' => 'required',
            'status_transaksi' => 'required',
        ]);

        if($status == 'lunas'){
            $updatePenyewa->jumlah -= $transaksi->jumlah;
        }
        $transaksi->save();
        $updatePenyewa->save();
        //jika data berhasil ditambahkan, akan kembali ke halaman utama
        return redirect()->route('SuperAdmin.transaksi.index')->with('success', 'Transaksi Berhasil Dilakukan');
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
