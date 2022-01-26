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
        $lahirAyah = new DateTime($request->tanggalLahirAyah);
        $lahirIbu = new DateTime($request->tanggalLahirIbu);
        $lahirPelapor = new DateTime($request->tanggalLahirPelapor);
        $now = \Carbon\Carbon::now('Asia/Jakarta');

        $interval = $lahir->diff($now);
        $intervalAyah = $lahirAyah->diff($now);
        $intervalIbu = $lahirIbu->diff($now);
        $intervalPelapor = $lahirPelapor->diff($now);

        $umurJenazah = $interval->format('%y');
        $umurAyah = $intervalAyah->format('%y');
        $umurIbu = $intervalIbu->format('%y');
        $umurPelapor = $intervalPelapor->format('%y');

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

        Kematian::create([
            'nik' => $detailWarga->nik,
            'noSurat' => '472.12/' . $request->noSurat . '/402.409.01/' . $tahun,
            'jenisSurat' => 'Kematian',
            'umurJenazah' => $umurJenazah,
            'tanggalSurat' => $tglSurat,
            'sebabKematian' => $request -> sebabKematian,
            'yangMenerangkan' => $request -> yangMenerangkan,
            'tanggalKematian' => $request->tanggalKematian,
            'pukulKematian' => $request->pukulKematian,
            'tempatKematian' => $request->tempatKematian,
            'nikAyah' => $request->nikAyah,
            'nikIbu' => $request->nikIbu,
            'nikPelapor' => $request->nikPelapor,
            'namaAyah' => $request->namaAyah,
            'namaIbu' => $request->namaIbu,
            'namaPelapor' => $request->namaPelapor,
            'tanggalLahirAyah' => $request->tanggalLahirAyah,
            'tanggalLahirIbu' => $request->tanggalLahirIbu,
            'tanggalLahirPelapor' => $request->tanggalLahirPelapor,
            'umurAyah' => $umurAyah,
            'umurIbu' => $umurIbu,
            'umurPelapor' => $umurPelapor,
            'alamatPelapor' => $request->alamatPelapor,
            'alamatAyah' => $request->alamatAyah,
            'alamatIbu' => $request->alamatIbu,
            'pekerjaanAyah' => $request->pekerjaanAyah,
            'pekerjaanIbu' => $request->pekerjaanIbu,
            'pekerjaanPelapor' => $request->pekerjaanPelapor,
            'tandatangan' => $request->tandatangan,
            'saksi1' => $request->saksi1,
            'saksi2' => $request->saksi2,
        ]);

        return redirect('/kematian')->with(['success' => 'Data Surat Berhasil Ditambahkan!']);
    }

    public function printKematian($id)
    {
        $surat = Kematian::find($id);
        $perangkat = Perangkat::where('idPerangkat', $surat->tandatangan)->first();
        $penduduk = Penduduk::where('nik', $surat->nik)->first();
        $saksi1 = Perangkat::where('idPerangkat', $surat->saksi1)->first();
        $saksi2 = Perangkat::where('idPerangkat', $surat->saksi2)->first();
        $kk = KK::where('noKk', $penduduk->no_kk)->first();
        $kepala = DB::table('penduduk')
        ->where('no_kk', $kk->noKk)
        ->where ('statushubungan', 'Kepala Keluarga')
        ->value('nama');

        $tanggalLahir = date("d-m-Y", strtotime($penduduk->tanggalLahir));

        $pdf = PDF::loadView('surat.mati', [
            'noKk' => $kk->noKk,
            'kepala' => $kepala,
            'noSurat' => $surat->noSurat,
            'tanggalSurat' => $surat->tanggalSurat,
            'umurPenduduk' => $surat->umurPenduduk,
            'namaPerangkat' => $perangkat->nama,
            'jabatanPerangkat' => $perangkat->detail,
            'RT' => $kk->RT,
            'RW' => $kk->RW,


            'nik' => $penduduk->nik,
            'nama' => $penduduk->nama,
            'kelamin' => $penduduk->kelamin,
            'tanggalLahir' => $tanggalLahir,
            'umurJenazah' => $surat->umurJenazah,
            'tempatLahir' => $penduduk->tempatLahir,
            'agama' => $penduduk->agama,
            'pekerjaan' => $penduduk->pekerjaan,
            'alamat' => $kk->alamat,
            'anakKe' => $penduduk->anakKe,
            'tanggalKematian' => $surat->tanggalKematian,
            'pukulKematian' => $surat->pukulKematian,
            'sebabKematian' => $surat->sebabKematian,
            'tempatKematian' => $surat->tempatKematian,
            'yangMenerangkan' => $surat->yangMenerangkan,

            'nikPelapor' => $surat->nikPelapor,
            'namaPelapor' => $surat->namaPelapor,
            'tanggalLahirPelapor' => $surat->tanggalLahirPelapor,
            'umurPelapor' => $surat->umurPelapor,
            'pekerjaanPelapor' => $surat->pekerjaanPelapor,
            'alamatPelapor' => $surat->alamatPelapor,

            'nikAyah' =>$surat->nikAyah,
            'namaAyah' =>$surat->namaAyah,
            'tanggalLahirAyah' =>$surat->tanggalLahirAyah,
            'umurAyah' => $surat->umurAyah,
            'pekerjaanAyah' => $surat ->pekerjaanAyah,
            'alamatAyah' => $surat ->alamatAyah,

            'nikIbu' => $surat->nikIbu,
            'namaIbu' => $surat->namaIbu,
            'tanggalLahirIbu' => $surat->tanggalLahirIbu,
            'umurIbu' => $surat->umurIbu,
            'pekerjaanIbu' => $surat->pekerjaanIbu,
            'alamatIbu' => $surat->alamatIbu,

            'nikSaksi1'=> $saksi1 ->nikPerangkat,
            'namaSaksi1' => $saksi1 ->nama,
            'tanggalLahirSaksi1' => $saksi1->tanggalLahir,
            'umurSaksi1' => $surat->umurSaksi1,
            'pekerjaanSaksi1' => $saksi1->pekerjaan,
            'alamatSaksi1' => $saksi1->alamat,

            'nikSaksi2' => $saksi2->nikPerangkat,
            'namaSaksi2' => $saksi2->nama,
            'tanggalLahirSaksi2' => $saksi2->tanggalLahir,
            'umurSaksi2' => $surat->umurSaksi2,
            'pekerjaanSaksi2' => $saksi2->pekerjaan,
            'alamatSaksi2' => $saksi2->alamat,
            'kewarganegaraan' => $penduduk->kewarganegaraan,
        ]);
        return $pdf->stream();
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
    public function destroy(Kematian $kematian)
    {
        Kematian::destroy($kematian->idKematian);
        return redirect('/kematian')->with('error', 'Data berhasil dihapus');
    }
}
