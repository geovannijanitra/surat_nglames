<?php

namespace App\Http\Controllers;

use App\Models\KK;
use Illuminate\Http\Request;

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
        return view('kk.view', compact('kk'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kk = KK::all();
        return view('kk.create', compact('kk'));
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
        return redirect('/kk');

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
        $kk = KK::find($id);
        return view('kk.update', compact('kk'));
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
        return redirect('kk');
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
        return redirect('/kk');
    }
}
