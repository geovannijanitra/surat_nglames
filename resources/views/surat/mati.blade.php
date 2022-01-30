<!DOCTYPE html>
<html>
<head>
	<title>Surat Keterangan Kematian No.{{ $noSurat }}</title>
	<style type="text/css">
		body {
			border-style: double;
			border-width: 3px;
			border-color: white;
  			margin-left: auto;
  			margin-right: auto;
        }
        .atas{
  			margin-top: -6%;
            margin-left: -5%;
            margin-right: -5%;
            margin-bottom: 0%;
        }
        .border{
            border-top: 1px solid black;
            border-left: 1px solid black;
            border-right: 1px solid black;
        }
        .left-side{
            border-left: 1px solid black;
        }
        .right-side{
            border-right: 1px solid black;
        }
        .right-side-end{
            border-right: 1px solid black;
            border-bottom: 1px solid black;
        }
        /* .left-side-end{
            border-left: 1px solid black;
            border-bottom: 1px solid black;
        } */
        .bottom{
            border-bottom: 1px solid black
        }
        .center{
            border-style: double;
			border-width: 3px;
			border-color: black;
        }
        td.text2 {
            color: white;
            border-left: 1px solid black;
		}
        td.text2-end{
            border-left: 1px solid black;
            border-bottom: 1px solid black;
        }

        td.white{
            color: white;
        }
        .ttd{
        	text-align: center;
        }
	</style>
</head>
<body>

		<div class="atas">
            <table>
                <br>
                <tr>
                    <td  colspan="2" ><font size="12px"> Desa/Kelurahan</font></td>
                    <td><font size="12px">: NGLAMES</font></td>
                    <td class="white"><font size="12px">%%%%%%%%%%%%%%%%%%%%%%%%%%%%</font></td>
                    <td><font size="12px">Ket : </font></td>
                    <td><font size="12px">Lembar 1 Untuk Yang Bersangkutan</font></td>
                </tr>
                <tr>
                    <td 1 colspan="2"  ><font size="12px"> Kecamatan</font></td>
                    <td><font size="12px">: MADIUN</font></td>
                    <td class="white"><font size="12px">-</font></td>
                    <td class="white"><font size="12px" >Ket : </font></td>
                    <td><font size="12px">Lembar 2 Untuk UPTD/Instansi Pelaksana</font></td>
                </tr>
                <tr>
                    <td  colspan="2" ><font size="12px"> Kabupaten/Kota</font></td>
                    <td><font size="12px">: MADIUN</font></td>
                    <td class="white"><font size="12px">-</font></td>
                    <td class="white"><font size="12px" >Ket : </font></td>
                    <td><font size="12px">Lembar 3 Untuk Desa/Kelurahan</font></td>
                </tr>
                <tr>
                    <td colspan="2" ><font size="12px" > Kode Wilayah</font></td>
                    <td><font size="12px" >: -</font></td>
                    <td class="white"><font size="12px" >-</font></td>
                    <td class="white"><font size="12px" >Ket : </font></td>
                    <td><font size="12px">Lembar 4 Untuk Kecamatan</font></td>
                </tr>
                {{-- <tr>
                    <td  colspan="2" ><font size="12px"> Kode Wilayah</font></td>
                    <td colspan="4"><font size="12px">: 357700000</font></td>
                </tr> --}}
                <tr>
                    <td colspan="6" align="center"><font size="12px">
                        <b>SURAT KETERANGAN KEMATIAN</b><br>
                        No. : {{ $noSurat }} </font>
                    </td>
                </tr>
                <tr>
                    <td  colspan="2"><font size="12px"> Nama Kepala Keluarga</font></td>
                    <td colspan="4"><font size="12px">: {{ $kepala }}</font></td>
                </tr>
                <tr>
                    <td  colspan="2"><font size="12px"> Nomer Kepala Keluarga</font></td>
                    <td colspan="4"><font size="12px">: {{ $noKk }}</font></td>
                </tr>
                <tr>
                    <td class="border" colspan="6"><font size="12px"><b>JENAZAH</b></font></td>
                </tr>
                <tr>

                    <td class="left-side" colspan="2" width="100"><font size="12px">1.  NIK</font></td>
                    <td class="right-side" colspan="4"><font size="12px">: {{ $nik }}</font></td>
                </tr>
                <tr>

                    <td class="left-side" colspan="2" width="100"><font size="12px">2.  Nama Lengkap</font></td>
                    <td class="right-side"  colspan="4"><font size="12px">: {{ $nama }}</font></td>
                </tr>
                <tr>

                    <td class="left-side" colspan="2" width="100"><font size="12px">3.  Jenis Kelamin</font></td>
                    <td class="right-side"  colspan="4"><font size="12px">: {{ $kelamin }}</font></td>
                </tr>
                <tr>
                    <td class="left-side" colspan="2" width="100"><font size="12px">4.  Tanggal Lahir / Umur</font></td>
                    <td  colspan="2"><font size="12px">: {{ $tanggalLahir }}</font></td>
                    <td><font size="12px"> Umur :</font></td>
                    <td class="right-side"><font size="12px"> {{ $umurJenazah }}</font></td>
                </tr>
                <tr>

                    <td class="left-side" colspan="2" width="100"><font size="12px">5.  Tempat Lahir</font></td>
                    <td class="right-side" colspan="4"><font size="12px">: {{ $tempatLahir }}</font></td>
                    {{-- <td><font size="12px">Kode Prov </font></td>
                    <td><font size="12px">: 61</font></td>
                    <td><font size="12px">Kode Kab </font></td>
                    <td><font size="12px">: 71</font></td> --}}

                </tr>
                <tr>

                    <td class="left-side" colspan="2" width="100"><font size="12px">6.  Agama</font></td>
                    <td class="right-side"  colspan="4"><font size="12px">: {{ $agama }}</font></td>
                </tr>
                <tr>

                    <td class="left-side" colspan="2" width="100"><font size="12px">7.  Pekerjaan</font></td>
                    <td class="right-side"  colspan="4"><font size="12px">:  {{ $pekerjaan }}</font></td>
                </tr>
                <tr>

                    <td class="left-side" colspan="2" width="100"><font size="12px">8.  Alamat</font></td>
                    <td class="right-side"  colspan="4"><font size="12px">: {{ $alamat }}</font></td>
                </tr>
                {{-- <tr>
                    <td colspan="2" width="100" class="text2"><font size="12px">8.  Alamat</font></td>
                    <td ><font size="12px">a.Desa/Kelurahan</font></td>
                    <td ><font size="12px">: NGLAMES</font></td>
                    <td ><font size="12px">c. Kab/Kota</font></td>
                    <td class="right-side" ><font size="12px">: MADIUN</font></td>
                </tr>
                <tr>

                    <td colspan="2" width="100" class="text2"><font size="12px">8.  Alamat</font></td>
                    <td ><font size="12px">b.KECAMATAN</font></td>
                    <td ><font size="12px">: MADIUN</font></td>
                    <td ><font size="12px">d. Provinsi</font></td>
                    <td class="right-side" ><font size="12px">: JAWA TIMUR</font></td>
                </tr> --}}
                <tr>

                    <td class="left-side" colspan="2" width="100"><font size="12px">9. Anak ke-</font></td>
                    <td class="right-side"  colspan="4"><font size="12px">: {{ $anakKe }}</font></td>
                </tr>
                <tr>

                    <td class="left-side" colspan="2" width="100"><font size="12px">10. Tanggal Kematian</font></td>
                    <td class="right-side"  colspan="4"><font size="12px">: {{ $tanggalKematian }}</font></td>
                </tr>
                <tr>

                    <td class="left-side" colspan="2" width="100"><font size="12px">11. Pukul Kematian </font></td>
                    <td class="right-side"  colspan="4"><font size="12px">: {{ $pukulKematian }}</font></td>
                </tr>
                <tr>

                    <td class="left-side" colspan="2" width="100"><font size="12px">12. Sebab Kematian</font></td>
                    <td class="right-side"  colspan="4"><font size="12px">: {{ $sebabKematian }}</font></td>
                </tr>
                <tr>

                    <td class="left-side" colspan="2" width="100"><font size="12px">13. Tempat Kematian</font></td>
                    <td class="right-side"  colspan="4"><font size="12px">: {{ $tempatKematian }}</font></td>
                </tr>
                <tr>

                    <td class="left-side" colspan="2" width="100"><font size="12px">14. Yang Menerangkan </font></td>
                    <td class="right-side"  colspan="4"><font size="12px">: {{ $yangMenerangkan }}</font></td>
                </tr>
                <tr>
                    <td class="border" colspan="6"><font size="12px"><b>AYAH</b></font></td>
                </tr>
                <tr>

                    <td class="left-side" colspan="2" width="100"><font size="12px">1.  NIK</font></td>
                    <td class="right-side" colspan="4"><font size="12px">: {{ $nikAyah  ?? ''}}</font></td>
                </tr>
                <tr>

                    <td class="left-side" colspan="2" width="100"><font size="12px">2.  Nama Lengkap</font></td>
                    <td class="right-side"  colspan="4"><font size="12px">: {{ $namaAyah  ?? ''}}</font></td>
                </tr>
                <tr>
                    <td class="left-side" colspan="2" width="100"><font size="12px">3.  Tanggal Lahir / Umur</font></td>
                    <td  colspan="2"><font size="12px">: {{ $tanggalLahirAyah  ?? ''}}</font></td>
                    <td><font size="12px"> Umur : </font></td>
                    <td class="right-side"><font size="12px"> {{ $umurAyah  ?? ''}}</font></td>
                </tr>
                <tr>

                    <td class="left-side" colspan="2" width="100"><font size="12px">4.  Pekerjaan</font></td>
                    <td class="right-side"  colspan="4"><font size="12px">: {{ $pekerjaanAyah  ?? ''}}</font></td>
                </tr>
                <tr>
                    <td class="left-side" colspan="2" width="100"><font size="12px">5.  Alamat</font></td>
                    <td class="right-side"  colspan="4"><font size="12px">: {{ $alamatAyah  ?? ''}}</font></td>
                </tr>
                {{-- <tr>
                    <td colspan="2" width="100" class="text2"><font size="12px">8.  Alamat</font></td>
                    <td ><font size="12px">a.Desa/Kelurahan</font></td>
                    <td ><font size="12px">: NGLAMES</font></td>
                    <td ><font size="12px">c. Kab/Kota</font></td>
                    <td class="right-side" ><font size="12px">: MADIUN</font></td>
                </tr>
                <tr>
                    <td colspan="2" width="100" class="text2"><font size="12px">8.  Alamat</font></td>
                    <td ><font size="12px">b.KECAMATAN</font></td>
                    <td ><font size="12px">: MADIUN</font></td>
                    <td ><font size="12px">d. Provinsi</font></td>
                    <td class="right-side" ><font size="12px">: JAWA TIMUR</font></td>
                </tr> --}}
                <tr>
                    <td class="border" colspan="6"><font size="12px"><b>IBU</b></font></td>
                </tr>
                <tr>

                    <td class="left-side" colspan="2" width="100"><font size="12px">1.  NIK</font></td>
                    <td class="right-side" colspan="4"><font size="12px">: {{ $nikIbu  ?? ''}}</font></td>
                </tr>
                <tr>

                    <td class="left-side" colspan="2" width="100"><font size="12px">2.  Nama Lengkap</font></td>
                    <td class="right-side"  colspan="4"><font size="12px">: {{ $namaIbu  ?? ''}}</font></td>
                </tr>
                <tr>
                    <td class="left-side" colspan="2" width="100"><font size="12px">3.  Tanggal Lahir / Umur</font></td>
                    <td  colspan="2"><font size="12px">: {{ $tanggalLahirIbu  ?? ''}}</font></td>
                    <td><font size="12px"> Umur :</font></td>
                    <td class="right-side"><font size="12px"> {{ $umurIbu }}</font></td>
                </tr>
                <tr>
                    <td class="left-side" colspan="2" width="100"><font size="12px">4.  Pekerjaan</font></td>
                    <td class="right-side"  colspan="4"><font size="12px">: {{ $pekerjaanIbu  ?? ''}}</font></td>
                </tr>
                <tr>
                    <td class="left-side" colspan="2" width="100"><font size="12px">5.  Alamat</font></td>
                    <td class="right-side"  colspan="4"><font size="12px">: {{ $alamatIbu  ?? ''}}</font></td>
                </tr>
                {{-- <tr>
                    <td colspan="2" width="100" class="text2"><font size="12px">8.  Alamat</font></td>
                    <td ><font size="12px">a.Desa/Kelurahan</font></td>
                    <td ><font size="12px">: NGLAMES</font></td>
                    <td ><font size="12px">c. Kab/Kota</font></td>
                    <td class="right-side" ><font size="12px">: MADIUN</font></td>
                </tr>
                <tr>
                    <td colspan="2" width="100" class="text2"><font size="12px">8.  Alamat</font></td>
                    <td ><font size="12px">b.KECAMATAN</font></td>
                    <td ><font size="12px">: MADIUN</font></td>
                    <td ><font size="12px">d. Provinsi</font></td>
                    <td class="right-side" ><font size="12px">: JAWA TIMUR</font></td>
                </tr> --}}
                <tr>
                    <td class="border" colspan="6"><font size="12px"><b>PELAPOR</b></font></td>
                </tr>
                <tr>

                    <td class="left-side" colspan="2" width="100"><font size="12px">1.  NIK</font></td>
                    <td class="right-side" colspan="4"><font size="12px">: {{ $nikPelapor  ?? ''}}</font></td>
                </tr>
                <tr>

                    <td class="left-side" colspan="2" width="100"><font size="12px">2.  Nama Lengkap</font></td>
                    <td class="right-side"  colspan="4"><font size="12px">: {{ $namaPelapor  ?? ''}}</font></td>
                </tr>
                <tr>
                    <td class="left-side" colspan="2" width="100"><font size="12px">3.  Tanggal Lahir / Umur</font></td>
                    <td  colspan="2"><font size="12px">: {{ $tanggalLahirPelapor  ?? ''}}</font></td>
                    <td><font size="12px"> Umur :</font></td>
                    <td class="right-side"><font size="12px"> {{ $umurPelapor  ?? ''}}</font></td>
                </tr>
                <tr>
                    <td class="left-side" colspan="2" width="100"><font size="12px">4.  Pekerjaan</font></td>
                    <td class="right-side"  colspan="4"><font size="12px">: {{ $pekerjaanPelapor  ?? ''}}</font></td>
                </tr>
                <tr>
                    <td class="left-side" colspan="2" width="100"><font size="12px">5.  Alamat</font></td>
                    <td class="right-side"  colspan="4"><font size="12px">: {{ $alamatPelapor  ?? ''}}</font></td>
                </tr>
                <tr>
                    <td class="border" colspan="6"><font size="12px"><b>SAKSI 1</b></font></td>
                </tr>
                <tr>

                    <td class="left-side" colspan="2" width="100"><font size="12px">1.  NIK</font></td>
                    <td class="right-side" colspan="4"><font size="12px">: {{ $nikSaksi1 ?? ''  }}</font></td>
                </tr>
                <tr>

                    <td class="left-side" colspan="2" width="100"><font size="12px">2.  Nama Lengkap</font></td>
                    <td class="right-side"  colspan="4"><font size="12px">: {{ $namaSaksi1 }}</font></td>
                </tr>
                <tr>
                    <td class="left-side" colspan="2" width="100"><font size="12px">3.  Tanggal Lahir / Umur</font></td>
                    <td  colspan="2"><font size="12px">: {{ $tanggalLahirSaksi1 ?? ''}}</font></td>
                    <td><font size="12px"> Umur :</font></td>
                    <td class="right-side"><font size="12px"> {{ $umurSaksi1 ?? ''}}</font></td>
                </tr>
                <tr>
                    <td class="left-side" colspan="2" width="100"><font size="12px">4.  Pekerjaan</font></td>
                    <td class="right-side"  colspan="4"><font size="12px">: {{ $pekerjaanSaksi1 ?? ''}}</font></td>
                </tr>
                <tr>

                    <td class="left-side" colspan="2" width="100"><font size="12px">4.  Alamat</font></td>
                    <td class="right-side"  colspan="4"><font size="12px">: {{ $pekerjaanPelapor ?? ''}}</font></td>
                </tr>

                <tr>
                    <td class="border" colspan="6"><font size="12px"><b>SAKSI 2</b></font></td>
                </tr>
                <tr>

                    <td class="left-side" colspan="2" width="100"><font size="12px">1.  NIK</font></td>
                    <td class="right-side" colspan="4"><font size="12px">: {{ $nikSaksi2 ?? '' }}</font></td>
                </tr>
                <tr>

                    <td class="left-side" colspan="2" width="100"><font size="12px">2.  Nama Lengkap</font></td>
                    <td class="right-side"  colspan="4"><font size="12px">: {{ $namaSaksi2 ?? '' }}</font></td>
                </tr>
                <tr>
                    <td class="left-side" colspan="2" width="100"><font size="12px">3.  Tanggal Lahir / Umur</font></td>
                    <td  colspan="2"><font size="12px">: {{ $tanggalLahirSaksi2 ?? '' }} </font></td>
                    <td><font size="12px"> Umur :</font></td>
                    <td class="right-side"><font size="12px"> {{ $umurSaksi2 ?? '' }}</font></td>
                </tr>
                <tr>
                    <td class="left-side" colspan="2" width="100"><font size="12px">4.  Pekerjaan</font></td>
                    <td class="right-side"  colspan="4"><font size="12px">: {{ $pekerjaanSaksi2 ?? '' }}</font></td>
                </tr>
                <tr>
                    <td class="text2-end" colspan="2" width="100"><font size="12px">5.  Alamat</font></td>
                    <td class="right-side-end" colspan="4"><font size="12px">: {{ $alamatSaksi2 ?? '' }}</font></td>
                </tr>
                {{-- <tr>
                    <td colspan="2" width="100" class="text2"><font size="12px">8.  Alamat</font></td>
                    <td ><font size="12px">a.Desa/Kelurahan</font></td>
                    <td ><font size="12px">: NGLAMES</font></td>
                    <td ><font size="12px">c. Kab/Kota</font></td>
                    <td class="right-side" ><font size="12px">: MADIUN</font></td>
                </tr>
                <tr>
                    <td colspan="2" width="100" class="text2-end"><font size="12px">8.  Alamat</font></td>
                    <td class="bottom" ><font size="12px">b.KECAMATAN</font></td>
                    <td class="bottom" ><font size="12px">: MADIUN</font></td>
                    <td class="bottom" ><font size="12px">d. Provinsi</font></td>
                    <td class="right-side-end" ><font size="12px">: JAWA TIMUR</font></td>
                </tr> --}}

		    </table>
        </div>
		<br>
		<table class="ttd" width="500">
			<tr>
				<td class="white"><font size="12px"> - </font></td>
				<td><font size="12px">{{ $tanggalSurat }}</font></td>
			</tr>
        	<tr>
    			<th><font size="12px">Yang Berhak Tanda Tangan</font></th>
    			<th><font size="12px">{{ $jabatanPerangkat }}</font></th>
  			</tr>
            <tr> <td  colspan="3" height="10"><img src="transp.gif" alt="" width="1" height="75"></td> </tr>
            <tr>
    			<td><font size="12px">{{ $nama }}</font></td>
    			<td><font size="12px">{{ $namaPerangkat }}</font></td>
  			</tr>

	    </table>

</body>
</html>
