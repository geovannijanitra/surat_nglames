<?php

namespace App\Http\Controllers;

use App\Models\Kematian;
use App\Models\Penduduk;
use App\Models\KK;
use App\Models\Perangkat;
use App\Models\Surat;
use App\Models\Pengikut;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Support\Facades\DB;
use DateTime;
use Illuminate\Http\Request;

class KematianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kematian = Kematian::all();

        $penduduk = Penduduk::all();
        $perangkat = Perangkat::all();
        return view('kematian.view', compact('kematian', 'penduduk', 'perangkat'))->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $perangkat = Perangkat::where('jabatan','Pejabat Kelurahan')->get();
        $rt = Perangkat::where('jabatan', 'Ketua RT atau RW')->get();
        $rt2 = Perangkat::where('jabatan', 'Ketua RT atau RW')->get();


        $kematian = Kematian::all();
        $penduduk = Penduduk::all();
        return view('kematian.create', compact('rt2','rt','kematian', 'penduduk', 'perangkat'));
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
        $tglSurat = $tgl . ' ' . $bln . ' ' . $tahun;


        // echo $jam;
        // dd($request);

        Surat::create([
            'nik' => $detailWarga->nik,
            'noSurat' => '472.12/' . $request->noSurat . '/402.409.01/' . $tahun,
            'jenisSurat' => 'Kematian',
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
}
