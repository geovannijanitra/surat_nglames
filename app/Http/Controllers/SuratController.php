<?php

namespace App\Http\Controllers;

use App\Models\Penduduk;
use App\Models\KK;
use App\Models\Perangkat;
use App\Models\Surat;
use Barryvdh\DomPDF\Facade as PDF;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;

class SuratController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $surat = Surat::where('jenisSurat','Domisili')->get();
        $penduduk = Penduduk::all();
        $perangkat = Perangkat::all();
        return view('surat.view', compact ('surat', 'penduduk', 'perangkat'))->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $surat = Surat::all();
        $penduduk = Penduduk::all();
        return view('surat.view', compact('surat', 'penduduk'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $detailWarga = Penduduk::where('nik', $request->nik)->first();
        $keluarga = KK::where('noKk', $detailWarga->no_kk)->get();
        // $lahir = date_create($detailWarga->tanggal_lahir);
        // $now = date_create();
        // $diff = date_diff($lahir, $now);
        // echo $detailWarga->tanggalLahir;
        $lahir = new DateTime($detailWarga['tanggalLahir']);
        $now = \Carbon\Carbon::now('Asia/Jakarta');
        $interval = $lahir->diff($now);
        $umur = $interval->format('%y');
        $bulan = $now->format('F');
        $tgl = $now->format('d');
        // $jam = $now->format('H:i:s');

        switch ($bulan) {
            case "January":
                $bln = "Januari";
                break;
            case "February":
                $bln = "Februari";
                break;
            case "March":
                $bln = "Maret";
                break;
            case "April":
                $bln = "April";
                break;
            case "May":
                $bln = "Mei";
                break;
            case "June":
                $bln = "Juni";
                break;
            case "July":
                $bln = "Juli";
                break;
            case "August":
                $bln = "Agustus";
                break;
            case "September":
                $bln = "September";
                break;
            case "October":
                $bln = "Oktober";
                break;
            case "November":
                $bln = "November";
                break;
            case "December":
                $bln = "Desember";
                break;
            default:
                echo "Translate to Indonesia secara manual";
        }
        $tahun = $now->format('Y');
        $tglSurat = $tgl.' '. $bln.' '. $tahun;


        // echo $jam;
        // dd($request);

        Surat::create([
            'nik' => $detailWarga->nik,
            'noSurat' => '470/'.$request->noSurat.'/402.409.01/'.$tahun ,
            'jenisSurat' => 'Domisili',
            'umurPenduduk' => $umur,
            'usaha' => $request->usaha,
            'tanggalSurat' => $tglSurat,
            'keperluan' => $request->keperluan,
            'tandatangan' => $request->tandatangan,

        ]);

        return redirect('/surat')->with(['success' => 'Data Surat Berhasil Ditambahkan!']);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Surat  $surat
     * @return \Illuminate\Http\Response
     */
    public function show(Surat $surat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Surat  $surat
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $surat = Surat::find($id);
        $penduduk = Penduduk::all();
        $perangkat = Perangkat::all();
        $kk = KK::all();
        return view('surat.update', compact('surat', 'penduduk', 'perangkat', 'kk'));
    }

    public function printsurat($id)
    {
        $surat = Surat::find($id);
        $perangkat = Perangkat::where('idPerangkat', $surat->tandatangan)->first();
        $penduduk = Penduduk::where('nik', $surat->nik)->first();
        $kk = KK::where('noKk', $penduduk->no_kk)->first();
        $tanggalLahir = date("d-m-Y", strtotime($penduduk->tanggalLahir));

        $pdf = PDF::loadView('surat.template', [
            'noSurat' => $surat->noSurat,
            'tanggalSurat' => $surat->tanggalSurat,
            'keperluan' => $surat->keperluan,
            'umurPenduduk' => $surat->umurPenduduk,
            'namaPerangkat' => $perangkat->nama,
            'jabatanPerangkat' => $perangkat->detail,
            'alamat' => $kk->alamat,
            'RT' => $kk->RT,
            'RW'=> $kk->RW,
            'usaha'=> $surat->usaha,

            'nama' => $penduduk->nama,
            'nik' => $penduduk->nik,
            'kelamin' => $penduduk->kelamin,
            'agama' => $penduduk->agama,
            'pekerjaan' => $penduduk->pekerjaan,

            'tempatLahir' => $penduduk->tempatLahir,
            'tanggalLahir' => $tanggalLahir,
            'kewarganegaraan' => $penduduk->kewarganegaraan,
        ]);
        return $pdf->stream();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Surat  $surat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Surat  $surat
     * @return \Illuminate\Http\Response
     */
    public function destroy(Surat $surat)
    {
        Surat::destroy($surat->idSurat);
        return redirect()->back()->with('error', 'Data berhasil dihapus');
    }

}
