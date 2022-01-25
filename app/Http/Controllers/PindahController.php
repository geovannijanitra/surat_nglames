<?php

namespace App\Http\Controllers;

use App\Models\Penduduk;
use App\Models\KK;
use App\Models\Perangkat;
use App\Models\Surat;
use App\Models\Pengikut;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Support\Facades\DB;
use DateTime;
use Illuminate\Http\Request;

class PindahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $surat = Surat::where('jenisSurat', 'pindah')->get();

        $penduduk = Penduduk::all();
        $perangkat = Perangkat::all();
        return view('pindah.view', compact('surat', 'penduduk', 'perangkat'))->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $perangkat = Perangkat::all();
        $surat = Surat::all();
        $penduduk = Penduduk::all();
        return view('pindah.create', compact('surat', 'penduduk', 'perangkat'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        $detailWarga = Penduduk::where('nik', $request->nik)->first();
        $keluarga = KK::where('noKk', $detailWarga->no_kk)->get();
        $lahir = new DateTime($detailWarga['tanggalLahir']);
        $now = \Carbon\Carbon::now('Asia/Jakarta');
        $interval = $lahir->diff($now);
        $umur = $interval->format('%y');
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



        $surat = new Surat([
            'nik' => $detailWarga->nik,
            'pindah1'=>$request->pindah1,
            'noSurat' => '475/' . $request->noSurat . '/402.409.01/' . $tahun,
            'jenisSurat' => 'Pindah',
            'umurPenduduk' => $umur,
            'usaha' => $request->usaha,
            'tanggalSurat' => $tglSurat,
            'keperluan' => $request->keperluan,
            'tandatangan' => $request->tandatangan,
            'desaKe' => $request->desaKe,
            'kecamatanKe' => $request->kecamatanKe,
            'kotaKe' => $request->kotaKe,
            'alasan' => $request->alasan,
            'tanggalPindah' => $request->tanggalPindah,
            'propinsiKe' => $request->propinsiKe,
        ]);

        $surat->save();

        $nomer = $request->nomer;
        $nama = $request->nama;
        $kelamin = $request->kelamin;
        $umurpengikut = $request->umurpengikut;
        $status = $request->status;
        $pendidikan = $request->pendidikan;
        $nikpengikut = $request->nikpengikut;
        $ket = $request->ket;

        for ($i = 0; $i < count($nomer); $i++) {
            $datasave = [
                'surat_id'      => $surat->idSurat,
                'nomer'            => $nomer[$i],
                'nama'          => $nama[$i],
                'kelamin'       => $kelamin[$i],
                'umurpengikut'  => $umurpengikut[$i],
                'status'        => $status[$i],
                'pendidikan'    => $pendidikan[$i],
                'nikpengikut'   => $nikpengikut[$i],
                'ket'           => $ket[$i],
            ];
            DB::table('pengikut')->insert($datasave);
        }

        return redirect('/pindah')->with(['success' => 'Data Surat Berhasil Ditambahkan!']);
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
    public function printPindah($id)
    {
        $surat = Surat::find($id);
        $perangkat = Perangkat::where('idPerangkat', $surat->tandatangan)->first();
        $penduduk = Penduduk::where('nik', $surat->nik)->first();
        $kk = KK::where('noKk', $penduduk->no_kk)->first();
        $tanggalLahir = date("d-m-Y", strtotime($penduduk->tanggalLahir));
        $tanggalPindah = date("d-m-Y", strtotime($surat->tanggalPindah));
        $pengikut = Pengikut::where('surat_id', $surat->idSurat)->get();

        $pdf = PDF::loadView('surat.pindah', [
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
            'alasan' => $surat->alasan,
            'desaKe' => $surat->desaKe,
            'kecamatanKe' => $surat->kecamatanKe,
            'kotaKe' => $surat->kotaKe,
            'propinsiKe' => $surat->propinsiKe,
            'tanggalPindah' => $tanggalPindah,
            'status'=> $penduduk->status,
            'pendidikan'=> $penduduk->pendidikan,
            'pengikut' => $pengikut,


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
