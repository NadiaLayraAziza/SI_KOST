<?php

namespace App\Http\Controllers;

use App\Models\Penyedia;
use App\Models\Penyewa;
use App\Models\Report;
use App\Models\Transaksi;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class SuperAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admin = User::where('role', 'admin')->get();
        return view('SuperAdmin.index', compact('admin'));
    }

    public function home()
    {
        $SuperAdmin    = User::get();
        $penyedia      = Penyedia::get();
        $penyewa       = Penyewa::get();
        $transaksi     = Transaksi::get();
        $report        = Report::get();

        return view('SuperAdmin.home', compact('SuperAdmin', 'penyedia', 'penyewa', 'transaksi', 'report'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('SuperAdmin.create');
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
            'alamat' => 'required',
            'password' => 'required', 'string', 'min:8',
            'nama' => 'required',
            'no_hp' => 'required',
            'email' => 'required|email',
        ]);
        //TODO : Implementasikan Proses Simpan Ke Database
        $admin = new User();
        $admin->no_hp = $request->get('no_hp');
        $admin->alamat = $request->get('alamat');

        $admin->password = Hash::make($request->get('password'));
        $admin->nama = $request->get('nama');
        $admin->email = $request->get('email');
        $admin->role = 'admin';
        $admin->created_at = now();
        $admin->updated_at = now();
        $admin->save();

        //jika data berhasil ditambahkan, akan kembali ke halaman utama
        return redirect()->route('admin.index')->with('success', 'Super Admin Berhasil Ditambahkan');
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
        $admin = User::where('id', $id)->first();
        return view('SuperAdmin.edit', compact('admin'));
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
        $request->validate([
            'alamat' => 'required',
            'nama' => 'required',
            'no_hp' => 'required',
            'email' => 'required|email',
        ]);
        //TODO : Implementasikan Proses Simpan Ke Database
        $admin = User::find($id);
        $admin->no_hp = $request->get('no_hp');
        $admin->alamat = $request->get('alamat');
        $admin->nama = $request->get('nama');
        $admin->email = $request->get('email');
        $admin->role = 'admin';
        $admin->save();

        //jika data berhasil ditambahkan, akan kembali ke halaman utama
        Alert::success('success', 'Super Admin Berhasil Diedit');
        return redirect()->route('admin.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::find($id)->delete();
        Alert::success('Success', 'Data Super Admin berhasil dihapus');
        return redirect()->route('admin.index');
    }
}
