<?php

namespace App\Http\Controllers;

use App\Models\Perangkat;
use Illuminate\Http\Request;

class PerangkatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $perangkat = Perangkat::all();
        return view('perangkat.view', compact('perangkat'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $perangkat = Perangkat::all();
        return view('perangkat.create', compact('perangkat'))->with('success', 'Data berhasil ditambahkan');
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
        Perangkat::create($data);
        return back()->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Perangkat  $perangkat
     * @return \Illuminate\Http\Response
     */
    public function show(Perangkat $perangkat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Perangkat  $perangkat
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $perangkat = Perangkat::find($id);
        return view('perangkat.update', compact('perangkat'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Perangkat  $perangkat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Perangkat::where('idPerangkat', $id)->update([
            'nama'=> $request->nama,
            'tanggalLahir'=> $request->tanggalLahir,
            // 'pekerjaan'=> $request->pekerjaan,
            'jabatan'=> $request->jabatan,
            'detail'=> $request->detail,
            'alamat'=> $request->alamat,
            // 'kelurahan'=> $request->kelurahan,
            // 'kecamatan'=> $request->kecamatan,
            // 'kota'=> $request->kota,
            // 'provinsi'=> $request->provinsi
        ]);

        return redirect()->back()->with('warning', 'Data berhasil diperbarui');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Perangkat  $perangkat
     * @return \Illuminate\Http\Response
     */
    public function destroy(Perangkat $perangkat)
    {
        Perangkat::destroy($perangkat->idPerangkat);
        return redirect()->back()->with('error', 'Data berhasil dihapus');
    }
}
