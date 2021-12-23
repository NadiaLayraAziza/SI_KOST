<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Report;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $report = Report::paginate(15);
        // $report = Report::join('users', 'penyewa.user_id', '=', 'users.id') ->join('users', 'penyedia.user_id', '=', 'users.id')
        //             ->get(['users.name']);
        // return view('report.index', ['report' => $report]);

        $report = Report::all();
        return view('User.report.index', compact('report'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('User.report.create');
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
        // $report = new Report();
        // $report->users_id = $request->get('users');
        // $report->tanggal_report = now();
        // $report->keluhan = $request->get('keluhan');

        // $request->validate([
        //     'report' => 'required',
        // ]);

        // $report->save();
        $request->validate([
            'keluhan' => 'required',
        ]);

        $user = User::find(Auth::user()->id);

        $report = new Report;
        $report->users_id = Auth::user()->id;
        $report->tanggal_report = now();
        $report->keluhan = $request->get('keluhan');
        $report->users()->associate($user);
        $report->save();

        // return redirect()->to('/report/user')
        //         ->with('success', 'report telah dikirim');
        Alert::success('Success', 'Report telah terkirim');
        return redirect()->route('ReportUser.index');
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
    public function destroy($id)
    {
        //
    }
    // public function simpanUser(Request $request)
    // {
    //     $request->validate([
    //         'users_id' => 'required',
    //         'tanggal_report' => 'required',
    //         'keluhan' => 'required',
    //     ]);

    //     $user = User::find(Auth::user()->id);

    //     $report = new Report;
    //     $report->users_id = Auth::user()->id;
    //     $report->tanggal_report = now();
    //     $report->keluhan = $request->get('keluhan');
    //     $report->users()->associate($user);
    //     $report->save();

    //     return redirect()->to('/report/user')
    //             ->with('success', 'report telah dikirim');

    // }
    public function Admin()
    {
        $report = Report::all();
        return view('SuperAdmin.report.index', compact('report'));
    }
}
