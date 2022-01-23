<?php

namespace App\Http\Controllers;
use App\Models\Surat;
use App\Models\KK;
use App\Models\Penduduk;
use DateTime;
use App\Models\Perangkat;
use App\Models\SKCK;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;

class SKCKController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $surat = Surat::where('jenisSurat', 'SKCK')->get();

        $penduduk = Penduduk::all();
        $perangkat = Perangkat::all();
        return view('skck.view', compact('surat', 'penduduk', 'perangkat'))->with('success', 'Data berhasil ditambahkan');
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
        return view('skck.view', compact('surat', 'penduduk'));
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
        $tglSurat = $tgl . ' ' . $bln . ' ' . $tahun;


        // echo $jam;
        // dd($request);

        Surat::create([
            'nik' => $detailWarga->nik,
            'noSurat' => '331/' . $request->noSurat . '/402.409.01/' . $tahun,
            'jenisSurat' => 'SKCK',
            'umurPenduduk' => $umur,
            'usaha' => $request->usaha,
            'tanggalSurat' => $tglSurat,
            'keperluan' => $request->keperluan,
            'tandatangan' => $request->tandatangan,

        ]);

        return redirect('/skck')->with(['success' => 'Data Surat Berhasil Ditambahkan!']);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SKCK  $sKCK
     * @return \Illuminate\Http\Response
     */

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SKCK  $sKCK
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

    public function printSKCK($id)
    {
        $surat = Surat::find($id);
        $perangkat = Perangkat::where('idPerangkat', $surat->tandatangan)->first();
        $penduduk = Penduduk::where('nik', $surat->nik)->first();
        $kk = KK::where('noKk', $penduduk->no_kk)->first();
        $tanggalLahir = date("d-m-Y", strtotime($penduduk->tanggalLahir));

        $pdf = PDF::loadView('surat.skck', [
            'noSurat' => $surat->noSurat,
            'tanggalSurat' => $surat->tanggalSurat,
            'keperluan' => $surat->keperluan,
            'umurPenduduk' => $surat->umurPenduduk,
            'namaPerangkat' => $perangkat->nama,
            'jabatanPerangkat' => $perangkat->detail,
            'alamat' => $kk->alamat,
            'RT' => $kk->RT,
            'RW' => $kk->RW,
            'usaha' => $surat->usaha,

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
     * @param  \App\Models\SKCK  $sKCK
     * @return \Illuminate\Http\Response
     */

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SKCK  $sKCK
     * @return \Illuminate\Http\Response
     */
    public function destroy(Surat $surat)
    {
        Surat::destroy($surat->idSurat);
        return redirect()->back()->with('error', 'Data berhasil dihapus');
    }
}
