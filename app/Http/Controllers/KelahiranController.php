<?php

namespace App\Http\Controllers;

use App\Models\Kelahiran;
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

class KelahiranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kelahiran = Kelahiran::all();

        $penduduk = Penduduk::all();
        $perangkat = Perangkat::all();
        return view('kelahiran.view', compact('kelahiran', 'penduduk', 'perangkat'))->with('success', 'Data berhasil ditambahkan');
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


        $kelahiran = Kelahiran::all();
        $penduduk = Penduduk::all();
        return view('kelahiran.create', compact('rt2','rt','kelahiran', 'penduduk', 'perangkat'));
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
        // $lahir = new DateTime($detailWarga['tanggalLahir']);
        $lahirAyah = new DateTime($detailWarga['tanggalLahir']);
        $lahirIbu = new DateTime($detailWarga['tanggalLahir']);
        $lahirPelapor = new DateTime($request->tanggalLahirPelapor);
        $now = \Carbon\Carbon::now('Asia/Jakarta');

        // $interval = $lahir->diff($now);
        $intervalAyah = $lahirAyah->diff($now);
        $intervalIbu = $lahirIbu->diff($now);
        $intervalPelapor = $lahirPelapor->diff($now);

        // $umurJenazah = $interval->format('%y');
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

        Kelahiran::create([
            'nik' => $detailWarga->nik,
            'noSurat' => '075/' . $request->noSurat . '/' . $tahun,
            'jenisSurat' => 'Kelahiran',
            // 'umurJenazah' => $umurJenazah,
            'tanggalSurat' => $tglSurat,
            'namaAnak' => $request->namaAnak,
            'kelaminAnak' => $request->kelaminAnak,
            'tempatKelahiran' => $request->tempatKelahiran,
            'tempatDilahirkan' => $request->tempatDilahirkan,
            'hariLahir' => $request->hariLahir,
            'tanggalLahir' => $request->tanggalLahir,
            'pukulKelahiran' => $request->pukulKelahiran,
            'jenisKelahiran' => $request->jenisKelahiran,
            'kelahiranKe'=> $request->kelahiranKe,
            'penolongKelahiran' => $request->penolongKelahiran,
            'beratBayi'=> $request->beratBayi,
            'panjangBayi' => $request->panjangBayi,

            'ayah'=>$request->ayah,
            'ibu' => $request->ibu,
            'nikPelapor' => $request->nikPelapor,
            'namaPelapor' => $request->namaPelapor,
            'tanggalLahirPelapor' => $request->tanggalLahirPelapor,
            'umurAyah' => $umurAyah,
            'umurIbu' => $umurIbu,
            'umurPelapor' => $umurPelapor,
            'alamatIbu' => $request->alamatIbu,
            'pekerjaanPelapor' => $request->pekerjaanPelapor,
            'tandatangan' => $request->tandatangan,
            'saksi1' => $request->saksi1,
            'saksi2' => $request->saksi2,
        ]);

        return redirect('/kelahiran')->with(['success' => 'Data Surat Berhasil Ditambahkan!']);
    }

    public function Kelahiran($id)
    {
        $surat = Kelahiran::find($id);
        $perangkat = Perangkat::where('idPerangkat', $surat->tandatangan)->first();
        $penduduk = Penduduk::where('nik', $surat->nik)->first();
        $saksi1 = Perangkat::where('idPerangkat', $surat->saksi1)->first();
        $saksi2 = Perangkat::where('idPerangkat', $surat->saksi2)->first();
        $kk = KK::where('noKk', $penduduk->no_kk)->first();
        $kepala = DB::table('penduduk')
        ->where('no_kk', $kk->noKk)
            ->where('statushubungan', 'Kepala Keluarga')
            ->value('nama');

        $tanggalLahir = date("d-m-Y", strtotime($penduduk->tanggalLahir));

        $pdf = PDF::loadView('surat.lahir', [
            'noKk' => $kk->noKk,
            'kepala' => $kepala,
            'noSurat' => $surat->noSurat,
            'tanggalSurat' => $surat->tanggalSurat,
            // 'umurPenduduk' => $surat->umurPenduduk,
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

            'ayah' => $surat->ayah,
            // 'namaAyah' => $surat->namaAyah,
            // 'tanggalLahirAyah' => $surat->tanggalLahirAyah,
            // 'umurAyah' => $surat->umurAyah,
            // 'pekerjaanAyah' => $surat->pekerjaanAyah,
            // 'alamatAyah' => $surat->alamatAyah,

            'ibu' => $surat->ibu,
            // 'namaIbu' => $surat->namaIbu,
            // 'tanggalLahirIbu' => $surat->tanggalLahirIbu,
            // 'umurIbu' => $surat->umurIbu,
            // 'pekerjaanIbu' => $surat->pekerjaanIbu,
            // 'alamatIbu' => $surat->alamatIbu,

            'nikSaksi1' => $saksi1->nikPerangkat,
            'namaSaksi1' => $saksi1->nama,
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
    public function destroy(Kelahiran $kelahiran)
    {
        Kelahiran::destroy($kelahiran->idKelahiran);
        return redirect('/kematian')->with('error', 'Data berhasil dihapus');
    }
}
