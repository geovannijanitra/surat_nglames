<?php

namespace App\Http\Controllers;

use App\Models\Kelahiran;
use App\Models\Penduduk;
use App\Models\KK;
use App\Models\Perangkat;
use App\Models\Surat;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Support\Facades\DB;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;

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
        $ayah = Penduduk::where('kelamin', 'Laki-laki')->get();
        $ibu = Penduduk::where('kelamin', 'Perempuan')->get();



        $kelahiran = Kelahiran::all();
        $penduduk = Penduduk::all();
        return view('kelahiran.create', compact('rt2','rt','kelahiran', 'penduduk', 'perangkat', 'ayah', 'ibu'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $detailAyah = Penduduk::where('nik', $request->ayah)->first();
        $detailIbu = Penduduk::where('nik', $request->ibu)->first();
        $detailSaksi1 = Perangkat::where('idPerangkat', $request->saksi1)->first();
        $detailSaksi2 = Perangkat::where('idPerangkat', $request->saksi2)->first();

        $keluarga = KK::where('noKk', $detailAyah->no_kk)->get();

        $lahirAyah = new DateTime($detailAyah['tanggalLahir']);
        $lahirIbu = new DateTime($detailIbu['tanggalLahir']);
        $lahirPelapor = new DateTime($request->tanggalLahirPelapor);
        $lahirSaksi2 = new DateTime($detailSaksi2['tanggalLahir']);
        $lahirSaksi1 = new DateTime($detailSaksi1['tanggalLahir']);
        $now = \Carbon\Carbon::now('Asia/Jakarta');

        $intervalAyah = $lahirAyah->diff($now);
        $intervalIbu = $lahirIbu->diff($now);
        $intervalSaksi1 = $lahirSaksi1->diff($now);
        $intervalSaksi2 = $lahirSaksi2->diff($now);
        $intervalPelapor = $lahirPelapor->diff($now);

        $umurAyah = $intervalAyah->format('%y');
        $umurIbu = $intervalIbu->format('%y');
        $umurSaksi2 = $intervalSaksi2->format('%y');
        $umurSaksi1 = $intervalSaksi1->format('%y');
        $umurPelapor = $intervalPelapor->format('%y');

        $bulan = $now->format('F');
        $tgl = $now->format('d');

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


        Kelahiran::create([
            'noSurat' => '075/' . $request->noSurat . '/' . $tahun,
            'jenisSurat' => 'Kelahiran',
            'tanggalSurat' => $tglSurat,
            'namaAnak' => $request->namaAnak,
            'kelaminAnak' => $request->kelaminAnak,
            'tempatKelahiran' => $request->tempatKelahiran,
            'tempatDilahirkan' => $request->tempatDilahirkan,
            'hariLahirAnak' => $request->hariLahirAnak,
            'tanggalLahirAnak' => $request->tanggalLahirAnak,
            'pukulKelahiran' => $request->pukulKelahiran,
            'jenisKelahiran' => $request->jenisKelahiran,
            'kelahiranKe'=> $request->kelahiranKe,
            'penolongKelahiran' => $request->penolongKelahiran,
            'beratBayi'=> $request->beratBayi,
            'panjangBayi' => $request->panjangBayi,

            'ayah'=>$request->ayah,
            'ibu' => $request->ibu,
            'tanggalPerkawinan' => $request->tanggalPerkawinan,

            'nikPelapor' => $request->nikPelapor,
            'namaPelapor' => $request->namaPelapor,
            'tanggalLahirPelapor' => $request->tanggalLahirPelapor,
            'umurPelapor' => $umurPelapor,
            'pekerjaanPelapor' => $request->pekerjaanPelapor,
            'alamatPelapor' => $request->alamatPelapor,

            'umurAyah' => $umurAyah,
            'umurIbu' => $umurIbu,
            'tandatangan' => $request->tandatangan,
            'saksi1' => $request->saksi1,
            'saksi2' => $request->saksi2,
            'umurSaksi1' => $umurSaksi1,
            'umurSaksi2' => $umurSaksi2,
        ]);

        return redirect('/kelahiran')->with(['success' => 'Data Surat Berhasil Ditambahkan!']);
    }

    public function printKelahiran($id)
    {
        $surat = Kelahiran::find($id);
        $perangkat = Perangkat::where('idPerangkat', $surat->tandatangan)->first();
        $ayah = Penduduk::where('nik', $surat->ayah)->first();
        $ibu = Penduduk::where('nik', $surat->ibu)->first();
        $saksi1 = Perangkat::where('idPerangkat', $surat->saksi1)->first();
        $saksi2 = Perangkat::where('idPerangkat', $surat->saksi2)->first();
        $kk = KK::where('noKk', $ayah->no_kk)->first();
        $kepala = DB::table('penduduk')
        ->where('no_kk', $kk->noKk)
            ->where('statushubungan', 'Kepala Keluarga')
            ->value('nama');

        $tanggalLahir = date("d-m-Y", strtotime($surat->tanggalLahirAnak));
        $tanggalLahirAyah = date("d-m-Y", strtotime($ayah->tanggalLahir));
        $tanggalLahirIbu = date("d-m-Y", strtotime($ibu->tanggalLahir));

        $pdf = PDF::loadView('surat.lahir', [
            'noKk' => $kk->noKk,
            'kepala' => $kepala,
            'noSurat' => $surat->noSurat,
            'tanggalSurat' => $surat->tanggalSurat,

            'namaPerangkat' => $perangkat->nama,
            'jabatanPerangkat' => $perangkat->detail,

            'namaAnak' => $surat->namaAnak,
            'kelaminAnak' => $surat->kelaminAnak,
            'tempatDilahirkan' => $surat->tempatDilahirkan,
            'tempatKelahiran' => $surat->tempatKelahiran,
            'hariLahirAnak' => $surat->hariLahirAnak,
            'tanggalLahirAnak' => $tanggalLahir,
            'pukulKelahiran' => $surat->pukulKelahiran,
            'jenisKelahiran' => $surat->jenisKelahiran,
            'kelahiranKe' => $surat->kelahiranKe,
            'penolongKelahiran' => $surat->penolongKelahiran,
            'beratBayi' => $surat->beratBayi,
            'panjangBayi' => $surat->panjangBayi,

            'nikPelapor' => $surat->nikPelapor,
            'namaPelapor' => $surat->namaPelapor,
            'tanggalLahirPelapor' => $surat->tanggalLahirPelapor,
            'umurPelapor' => $surat->umurPelapor,
            'pekerjaanPelapor' => $surat->pekerjaanPelapor,
            'alamatPelapor' => $surat->alamatPelapor,

            'nikAyah' => $ayah->nik,
            'namaAyah' => $ayah->nama,
            'tanggalLahirAyah' =>$tanggalLahirAyah,
            'umurAyah' => $surat->umurAyah,
            'pekerjaanAyah' => $ayah->pekerjaan,
            'alamatAyah' => $kk->alamat,
            'kewarganegaraanAyah' => $ayah->kewarganegaraan,


            'nikIbu' => $ibu->nik,
            'namaIbu' => $ibu->nama,
            'tanggalLahirIbu' =>$tanggalLahirIbu,
            'umurIbu' => $surat->umurIbu,
            'pekerjaanIbu' => $ibu->pekerjaan,
            'alamatIbu' => $kk->alamat,
            'kewarganegaraanIbu' => $ibu->kewarganegaraan,
            'tanggalPerkawinan'=> $surat->tanggalPerkawinan,

            'nikSaksi1' => $saksi1->nikPerangkat,
            'namaSaksi1' => $saksi1->nama,
            'tanggalLahirSaksi1' => $saksi1->tanggalLahir,
            'umurSaksi1' => $surat->umurSaksi1,
            'pekerjaanSaksi1' => $saksi1->detail,
            'alamatSaksi1' => $saksi1->alamat,

            'nikSaksi2' => $saksi2->nikPerangkat,
            'namaSaksi2' => $saksi2->nama,
            'tanggalLahirSaksi2' => $saksi2->tanggalLahir,
            'umurSaksi2' => $surat->umurSaksi2,
            'pekerjaanSaksi2' => $saksi2->detail,
            'alamatSaksi2' => $saksi2->alamat,
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
        return redirect('/kelahiran')->with('error', 'Data berhasil dihapus');
    }
}
