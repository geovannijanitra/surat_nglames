<?php

namespace App\Http\Controllers;

use App\Models\KK;
use App\Models\Penduduk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kk = KK::all();
        $penduduk = Penduduk::all();
        $kepalakeluarga = DB::table('penduduk')
        ->where('status', '=', 'a')
        ->first();
        return view('kk.view', compact('kk','penduduk', 'kepalakeluarga'));
    }

    public function keluarga($id)
    {
        $kk = KK::find($id);

        $penduduk = DB::table('penduduk')
        ->where ('no_kk','=', $kk->noKk)
        ->get();

        return view('penduduk.view', compact('kk', 'penduduk'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kk = KK::all();
        $penduduk = Penduduk::all();
        return view('kk.create', compact('kk','penduduk'))->with('success', 'Data berhasil ditambahkan');
    }
    public function penduduk($id)
    {
        $kk = KK::find($id);

        $penduduk = DB::table('penduduk')
        ->where('no_kk', '=', $kk->noKk)
            ->get();

        return view('penduduk.create', compact('kk', 'penduduk'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        KK::create($data);
        return redirect('/kk')->with('success', 'Data berhasil ditambahkan');

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

    public function add($id)
    {
        $penduduk = Penduduk::all();
        $kk = KK::find($id);

        return view('penduduk.create', compact('penduduk','kk'))->with('success', 'Data berhasil ditambahkan');
    }

    public function read($id)
    {
        $penduduk = Penduduk::all();
        $kk = KK::find($id);

        return view('kk.create', compact('penduduk', 'kk'));
    }

    public function edit($id)
    {
        $kk = KK::find($id);
        return view('kk.update', compact('kk'))->with('warning', 'Data berhasil diperbarui');;
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
        KK::where('noKk', $id)->update([

            'noKk' => $request->noKk,
            'alamat' => $request->alamat,
            'RT' => $request->RT,
            'RW' => $request->RW,

        ]);
        return redirect('kk')->with('warning', 'Data berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(KK $kk)
    {
        KK::destroy($kk->noKk);
        return redirect('/kk')->with('error', 'Data berhasil dihapus');
    }
}
