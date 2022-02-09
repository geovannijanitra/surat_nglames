<!DOCTYPE html>
<html>
<head>
	<title>Surat Keterangan Kelahiran No.{{ $noSurat }}</title>
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
                    <td class="white"><font size="12px">%%%%%%%%%%%%%%%%%</font></td>
                    <td class="white"><font size="12px">%%%%%%%%%%%%%%%%%</font></td>
                    <td><font size="12px">Ket : </font></td>
                    <td><font size="12px">Lembar 1 Dispendukcapil</font></td>
                </tr>
                <tr>
                    <td 1 colspan="2"  ><font size="12px"> Kecamatan</font></td>
                    <td><font size="12px">: MADIUN</font></td>
                    <td class="white"><font size="12px">-</font></td>
                    <td class="white"><font size="12px">-</font></td>
                    <td  class="white"><font size="12px">Ket : </font></td>
                    <td><font size="12px">Lembar 2 Untuk yang bersangkutan</font></td>
                </tr>
                <tr>
                    <td  colspan="2" ><font size="12px"> Kabupaten/Kota</font></td>
                    <td><font size="12px">: MADIUN</font></td>
                    <td class="white"><font size="12px">-</font></td>
                    <td class="white"><font size="12px">-</font></td>
                    <td  class="white"><font size="12px">Ket : </font></td>
                    <td><font size="12px">Lembar 3 Untuk Desa/Kelurahan</font></td>
                </tr>
                <tr>
                    <td  colspan="2" ><font size="12px"> Kode Wilayah</font></td>
                    <td><font size="12px">: -</font></td>
                    <td class="white"><font size="12px">-</font></td>
                    <td  class="white" ><font size="12px">-</font></td>
                    <td  class="white"><font size="12px">Ket : </font></td>
                    <td><font size="12px">Lembar 4 Untuk Kecamatan</font></td>
                </tr>
                <tr>
                    <td colspan="7" align="center"><font size="12px">
                        <b>SURAT KETERANGAN KELAHIRAN</b><br>
                        No. : {{ $noSurat }}</font>
                    </td>
                </tr>
                <tr>
                    <td colspan="2"><font size="12px"> Nama Kepala Keluarga</font></td>
                    <td colspan="5"><font size="12px">: {{ $kepala }}</font></td>
                </tr>
                <tr>
                    <td  colspan="2"><font size="12px"> Nomer Kepala Keluarga</font></td>
                    <td colspan="5"><font size="12px">: {{ $noKk }}</font></td>
                </tr>
                <tr>
                    <td class="border" colspan="7"><font size="12px"><b>BAYI / ANAK</b></font></td>
                </tr>
                <tr>

                    <td class="left-side" class="side" colspan="2" width="100"><font size="12px">1.  Nama</font></td>
                    <td class="right-side" colspan="5"><font size="12px">: {{ $namaAnak }}</font></td>
                </tr>
                <tr>

                    <td class="left-side" colspan="2" width="100"><font size="12px">2.  Jenis Kelamin</font></td>
                    <td class="right-side"  colspan="5"><font size="12px">: {{ $kelaminAnak }}</font></td>
                </tr>
                <tr>

                    <td class="left-side" colspan="2" width="100"><font size="12px">3.  Tempat Dilahirkan</font></td>
                    <td class="right-side"  colspan="5"><font size="12px">: {{ $tempatDilahirkan }}</font></td>
                </tr>
                <tr>
                    <td class="left-side" colspan="2" width="100"><font size="12px">4.  Tempat Kelahiran</font></td>
                    <td class="right-side"  colspan="5"><font size="12px">: {{ $tempatKelahiran }}</font></td>
                </tr>
                <tr>
                    <td class="left-side" colspan="2" width="100"><font size="12px">5.  Hari dan Tanggal Lahir</font></td>
                    <td class="right-side"  colspan="5"><font size="12px">: {{ $hariLahirAnak }} {{ $tanggalLahirAnak }}</font></td>
                </tr>
                <tr>

                    <td class="left-side" colspan="2" width="100"><font size="12px">6.  Pukul</font></td>
                    <td class="right-side" colspan="5"><font size="12px">: {{ $pukulKelahiran }}</font></td>
                    {{-- <td><font size="12px">Kode Prov </font></td>
                    <td><font size="12px">: 61</font></td>
                    <td><font size="12px">Kode Kab </font></td>
                    <td><font size="12px">: 71</font></td> --}}

                </tr>
                <tr>

                    <td class="left-side" colspan="2" width="100"><font size="12px">7.  Jenis Kelahiran</font></td>
                    <td class="right-side"  colspan="5"><font size="12px">: {{ $jenisKelahiran }}</font></td>
                </tr>
                <tr>

                    <td class="left-side" colspan="2" width="100"><font size="12px">8.  Kelahiran ke</font></td>
                    <td class="right-side"  colspan="5"><font size="12px">: {{ $kelahiranKe }}</font></td>
                </tr>
                {{-- <tr>

                    <td colspan="2" width="100"><font size="12px">8.  Alamat</font></td>
                    <td  colspan="4"><font size="12px">: Desa Konohagakure</font></td>
                </tr>
                <tr>
                    <td colspan="2" width="100" class="white"><font size="12px">8.  Alamat</font></td>
                    <td ><font size="12px">a.Desa/Kelurahan</font></td>
                    <td ><font size="12px">: NGLAMES</font></td>
                    <td ><font size="12px">c. Kab/Kota</font></td>
                    <td ><font size="12px">: MADIUN</font></td>
                </tr>
                <tr>

                    <td colspan="2" width="100" class="white"><font size="12px">8.  Alamat</font></td>
                    <td ><font size="12px">b.KECAMATAN</font></td>
                    <td ><font size="12px">: MADIUN</font></td>
                    <td ><font size="12px">d. Provinsi</font></td>
                    <td ><font size="12px">: JAWA TIMUR</font></td>
                </tr> --}}
                <tr>

                    <td class="left-side" colspan="2" width="100"><font size="12px">9. Penolong Kelahiran</font></td>
                    <td class="right-side"  colspan="5"><font size="12px">: {{ $penolongKelahiran }}</font></td>
                </tr>
                <tr>

                    <td class="left-side" colspan="2" width="100"><font size="12px">10. Berat Bayi </font></td>
                    <td class="right-side"  colspan="5"><font size="12px">: {{ $beratBayi }} kg</font></td>
                </tr>
                <tr>

                    <td class="left-side" colspan="2" width="100"><font size="12px">11. Panjang Bayi</font></td>
                    <td class="right-side"  colspan="5"><font size="12px">: {{ $panjangBayi }} cm</font></td>
                </tr>

                <tr>
                    <td class="border" colspan="7"><font size="12px"><b>IBU</b></font></td>
                </tr>
                <tr>

                    <td class="left-side" colspan="2" width="100"><font size="12px">1.  NIK</font></td>
                    <td class="right-side" colspan="5"><font size="12px">: {{ $nikIbu }}</font></td>
                </tr>
                <tr>

                    <td class="left-side" colspan="2" width="100"><font size="12px">2.  Nama Lengkap</font></td>
                    <td class="right-side"  colspan="5"><font size="12px">: {{ $namaIbu }}</font></td>
                </tr>
                <tr>
                    <td class="left-side" colspan="2" width="100"><font size="12px">3.  Tanggal Lahir / Umur</font></td>
                    <td  colspan="2"><font size="12px">: {{ $tanggalLahirIbu }}</font></td>
                    <td><font size="12px"> Umur :</font></td>
                    <td class="right-side" colspan="2"><font size="12px"> {{ $umurIbu }}</font></td>
                </tr>
                <tr>
                    <td class="left-side" colspan="2" width="100"><font size="12px">4.  Pekerjaan</font></td>
                    <td class="right-side"  colspan="5"><font size="12px">: {{ $pekerjaanIbu }}</font></td>
                </tr>
                <tr>
                    <td class="left-side" colspan="2" width="100"><font size="12px">5.  Alamat</font></td>
                    <td class="right-side"  colspan="5"><font size="12px">: {{ $alamatIbu }}</font></td>
                </tr>
                <tr>
                    <td class="left-side" colspan="2" width="100"><font size="12px">6.  Kewarganegaraan</font></td>
                    <td class="right-side"  colspan="5"><font size="12px">: {{ $kewarganegaraanIbu }}</font></td>
                </tr>
                <tr>
                    <td class="left-side" colspan="2" width="100"><font size="12px">7.  Tgl Pencatatan Perkawinan</font></td>
                    <td class="right-side"  colspan="5"><font size="12px">: {{ $tanggalPerkawinan }}</font></td>
                </tr>
                <tr>
                    <td class="border" colspan="7"><font size="12px"><b>AYAH</b></font></td>
                </tr>

                <tr>

                    <td class="left-side" colspan="2" width="100"><font size="12px">1.  NIK</font></td>
                    <td class="right-side" colspan="5"><font size="12px">: {{ $nikAyah }}</font></td>
                </tr>
                <tr>

                    <td class="left-side" colspan="2" width="100"><font size="12px">2.  Nama Lengkap</font></td>
                    <td class="right-side"  colspan="5"><font size="12px">: {{ $namaAyah }}</font></td>
                </tr>
                <tr>
                    <td class="left-side" colspan="2" width="100"><font size="12px">3.  Tanggal Lahir / Umur</font></td>
                    <td  colspan="2"><font size="12px">: {{ $tanggalLahirAyah }}</font></td>
                    <td><font size="12px"> Umur :</font></td>
                    <td class="right-side" colspan="2" ><font size="12px"> {{ $umurAyah }}</font></td>
                </tr>
                <tr>
                    <td class="left-side" colspan="2" width="100"><font size="12px">4.  Pekerjaan</font></td>
                    <td class="right-side"  colspan="5"><font size="12px">: {{ $pekerjaanAyah }}</font></td>
                </tr>
                <tr>
                    <td class="left-side" colspan="2" width="100"><font size="12px">5.  Alamat</font></td>
                    <td class="right-side"  colspan="5"><font size="12px">: {{ $alamatAyah }}</font></td>
                </tr>
                <tr>
                    <td class="left-side" colspan="2" width="100"><font size="12px">6.  Kewarganegaraan</font></td>
                    <td class="right-side"  colspan="5"><font size="12px">: {{ $kewarganegaraanAyah }}</font></td>
                </tr>
                <tr>
                    <td class="border" colspan="7"><font size="12px"><b>PELAPOR</b></font></td>
                </tr>
                <tr>
                    <td class="left-side" colspan="2" width="100"><font size="12px">1.  NIK</font></td>
                    <td class="right-side" colspan="5"><font size="12px">: {{ $nikPelapor }}</font></td>
                </tr>
                <tr>

                    <td class="left-side" colspan="2" width="100"><font size="12px">2.  Nama Lengkap</font></td>
                    <td class="right-side"  colspan="5"><font size="12px">: {{ $namaPelapor }}</font></td>
                </tr>
                <tr>
                    <td class="left-side" colspan="2" width="100"><font size="12px">3. Umur</font></td>
                    <td class="right-side" colspan="5"><font size="12px">: {{ $umurPelapor }}</font></td>
                </tr>
                <tr>
                    <td class="left-side" colspan="2" width="100"><font size="12px">4.  Jenis Kelamin</font></td>
                    <td class="right-side"  colspan="5"><font size="12px">: Universal</font></td>
                </tr>
                <tr>
                    <td class="left-side" colspan="2" width="100"><font size="12px">5.  Pekerjaan</font></td>
                    <td class="right-side"  colspan="5"><font size="12px">: {{ $pekerjaanPelapor }}</font></td>
                </tr>
                <tr>
                    <td class="left-side" colspan="2" width="100"><font size="12px">6.  Alamat</font></td>
                    <td class="right-side"  colspan="5"><font size="12px">: {{ $alamatPelapor }}</font></td>
                </tr>
                <tr>
                    <td class="border" colspan="4"><font size="12px"><b>SAKSI 1</b></font></td>
                    <td class="border" colspan="3"><font size="12px"><b>SAKSI 2</b></font></td>
                </tr>
                <tr>
                    <td class="left-side" colspan="2" width="100"><font size="12px">1.  NIK</font></td>
                    <td class="right-side" colspan="2"><font size="12px">: {{ $nikSaksi1 }}</font></td>
                    <td class="left-side" ><font size="12px">1.  NIK</font></td>
                    <td class="right-side" colspan="2"><font size="12px">: {{ $nikSaksi2 }}</font></td>
                </tr>
                <tr>
                    <td class="left-side" colspan="2" width="100"><font size="12px">2.  Nama Lengkap</font></td>
                    <td class="right-side" colspan="2"><font size="12px">: {{ $namaSaksi1 }}</font></td>
                    <td class="left-side"><font size="12px">2.  Nama Lengkap</font></td>
                    <td class="right-side" colspan="2"><font size="12px">: {{ $namaSaksi2 }}</font></td>
                </tr>
                <tr>
                    <td class="left-side" colspan="2" width="100"><font size="12px">3. Umur</font></td>
                    <td class="right-side" colspan="2"><font size="12px">: {{ $umurSaksi1 }}</font></td>
                    <td class="left-side"><font size="12px">3. Umur</font></td>
                    <td class="right-side" colspan="2"><font size="12px">: {{ $umurSaksi2 }}</font></td>
                </tr>
                <tr>
                    <td class="left-side" colspan="2" width="100"><font size="12px">4.  Pekerjaan</font></td>
                    <td class="right-side"  colspan="2"><font size="12px">: {{ $pekerjaanSaksi1 }}</font></td>
                    <td class="left-side"><font size="12px">4.  Pekerjaan</font></td>
                    <td class="right-side" colspan="2"><font size="12px">: {{ $pekerjaanSaksi2 }}</font></td>
                </tr>
                <tr>
                    <td class="text2-end" colspan="2" width="100"><font size="12px">5.  Alamat</font></td>
                    <td class="right-side-end"  colspan="2"><font size="12px">: {{ $alamatSaksi1 }}</font></td>
                    <td class="text2-end" ><font size="12px">5.  Alamat</font></td>
                    <td class="right-side-end" colspan="2"><font size="12px">: {{ $alamatSaksi2 }}</font></td>
                </tr>
                {{-- <tr>
                    <td class="border" colspan="6"><font size="12px"><b>SAKSI 2</b></font></td>
                </tr>
                <tr>
                    <td class="left-side" colspan="2" width="100"><font size="12px">1.  NIK</font></td>
                    <td class="right-side" colspan="4"><font size="12px">: {{ $nikSaksi2 }}</font></td>
                </tr>
                <tr>

                    <td class="left-side" colspan="2" width="100"><font size="12px">2.  Nama Lengkap</font></td>
                    <td class="right-side"  colspan="4"><font size="12px">: {{ $namaSaksi2 }}</font></td>
                </tr>
                <tr>
                    <td class="left-side" colspan="2" width="100"><font size="12px">3. Umur</font></td>
                    <td class="right-side" colspan="4"><font size="12px">: {{ $umurSaksi2 }}</font></td>
                </tr>
                <tr>
                    <td class="left-side" colspan="2" width="100"><font size="12px">4.  Pekerjaan</font></td>
                    <td class="right-side"  colspan="4"><font size="12px">: {{ $pekerjaanSaksi2 }}</font></td>
                </tr>
                <tr>
                    <td class="text2-end" colspan="2" width="100"><font size="12px">5.  Alamat</font></td>
                    <td class="right-side-end"  colspan="4"><font size="12px">: {{ $alamatSaksi2 }}</font></td>
                </tr> --}}

		    </table>
        </div>

		<table class="ttd" width="500">
			<tr>
				<td><font size="12px"> Mengetahui </font></td>
				<td><font size="12px"> Madiun, {{ $tanggalSurat }} </font></td>
			</tr>
        	<tr>
    			<th><font size="12px">{{ $jabatanPerangkat }}</font></th>
    			<th><font size="12px">Pelapor</font></th>
  			</tr>
            <tr> <td  colspan="3" height="10"><img src="transp.gif" alt="" width="1" height="75"></td> </tr>
            <tr>
    			<td><font size="12px">{{ $namaPerangkat }}</font></td>
    			<td><font size="12px">{{ $namaPelapor }}</font></td>
  			</tr>

	    </table>

</body>
</html>
