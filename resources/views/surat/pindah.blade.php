<!DOCTYPE html>
<html>
<head>
	<title>contoh surat pengunguman</title>
	<style type="text/css">
		table {
			border-style: double;
			border-width: 3px;
			border-color: white;
  			margin-left: auto;
  			margin-right: auto;
        }

        .kolom {
            border-style: solid;
            border-collapse: collapse;
            border-width: 1px
        }
        table td .text2 {
            color: white;
		}

        .kolom td{
            border-style: solid;
            border-collapse: collapse;
            border-width: 1px
        }
        .kolom th{
            border-style: solid;
            border-collapse: collapse;
            border-width: 1px
        }

        .ttd{
        	text-align: center;
        }
	</style>
</head>
<body>

		<div>
            <table>
                <td style="width: 35%;">
                    <img align="center" src="logo-kab.png" width="100" height="100">
                </td>
                <td align="center" style="width: 60%;">

                        <font size="18px">PEMERINTAH KABUPATEN MADIUN </font><br>
                        <font size="18px"><b>KECAMATAN MADIUN</b></font><br>
                        <font size="26px"><b>KELURANGAN NGLAMES</b></font><br>
                        <font size="16px">JL. Lapangan No. 17 Telepon (0351) 468010</font><br>
                        <font size="18px"><b>NGLAMES   63161</b></font><br><br>
                </td>
            </table>
        </div>
		{{-- <table width="450">
			<tr>
				<td width="25px" class="kab"><img alignt="center" src="logo-kab.png" width="100" height="100"></td>
				<td>
				<center>
					<font size="18px">PEMERINTAH KABUPATEN MADIUN</font><br>
					<font size="18px"><b>KECAMATAN MADIUN</b></font><br>
					<font size="26px"><b>KELURANGAN NGLAMES</b></font><br>
					<font size="16px">JL. Lapangan No. 17 Telepon (0351) 468010</font><br>
					<font size="18px"><b>NGLAMES    63151</b></font>
				</center>
				</td>
			</tr>
		</table> --}}
		</table><br><br>
		<table width="500">
			<tr>
				<td>
                    <center>
                        <font size="16px"><b><u>SURAT KETERANGAN PINDAH TEMPAT TINGGAL</u></b></font></td>
                    </center>
			</tr>
			<tr>
				<td>
                    <center>
                        <font size="16px">Nomor : {{ $noSurat }}</font>
                    </center>
                </td>
			</tr>
		</table><br>
		<table width="500">
			<tr>
				<td width="15"><font size="16px"> 1.</font></td>
				<td width="150"><font size="16px"> Nama Lengkap</font></td>
				<td width="250"><font size="16px">: &emsp;{{ $nama }}</font></td>
			</tr>
            <tr>
				<td><font size="16px"> 2.</font></td>
				<td><font size="16px"> Jenis Kelamin</font></td>
				<td><font size="16px">: &emsp;{{ $kelamin }}</font></td>
			</tr>
            <tr>
				<td><font size="16px"> 3.</font></td>
				<td><font size="16px"> Tempat / Tanggal Lahir</font></td>
				<td><font size="16px">: &emsp;{{ $tempatLahir }} / {{ $tanggalLahir }}</font></td>
			</tr>
            <tr>
				<td><font size="16px"> 4.</font></td>
				<td><font size="16px"> Kewarganeraan</font></td>
				<td><font size="16px">: &emsp;{{ $kewarganegaraan }}</font></td>
			</tr>
            <tr>
				<td><font size="16px"> 5.</font></td>
				<td><font size="16px"> Agama</font></td>
				<td><font size="16px">: &emsp;{{ $agama }}</font></td>
			</tr>
            <tr>
				<td><font size="16px"> 6.</font></td>
				<td><font size="16px"> Status Perkawinan</font></td>
				<td><font size="16px">: &emsp;{{ $status }}</font></td>
			</tr>
            <tr>
				<td><font size="16px"> 7.</font></td>
				<td><font size="16px"> Pekerjaan</font></td>
				<td><font size="16px">: &emsp;{{ $pekerjaan }}</font></td>
			</tr>
            <tr>
				<td><font size="16px"> 8.</font></td>
				<td><font size="16px"> Pendidikan</font></td>
				<td><font size="16px">: &emsp;{{ $pendidikan }}</font></td>
			</tr>
            <tr>
				<td><font size="16px"> 9.</font></td>
				<td><font size="16px"> Alamat Asal</font></td>
				<td><font size="16px">: {{ $alamat }}</font></td>
			</tr>
            <tr>
				<td><font size="16px"> 10.</font></td>
				<td><font size="16px"> No. KTP</font></td>
				<td><font size="16px">: {{ $nik }}</font></td>
			</tr>
            <tr>
				<td><font size="16px"> 11.</font></td>
				<td class="text2"><font size="16px"> Pindah ke</font></td>
			</tr>
            <tr>
				<td><font class="text2" size="16px"> 11.</font></td>
				<td><font size="16px">&#160;&#160;&#160;&#160; Desa/Kelurahan</font></td>
				<td><font size="16px">: {{ $desaKe }}</font></td>
			</tr>
            <tr>
				<td><font class="text2" size="16px"> 11.</font></td>
				<td><font size="16px">&#160;&#160;&#160;&#160; Kecamatan</font></td>
				<td><font size="16px">: {{ $kecamatanKe }}</font></td>
			</tr>
            <tr>
				<td><font class="text2" size="16px"> 11.</font></td>
				<td><font size="16px">&#160;&#160;&#160;&#160; Kabupaten/Kota</font></td>
				<td><font size="16px">: {{ $kotaKe }}</font></td>
			</tr>
            <tr>
				<td><font class="text2" size="16px"> 11.</font></td>
				<td><font size="16px">&#160;&#160;&#160;&#160; Propinsi</font></td>
				<td><font size="16px">: {{ $propinsiKe }}</font></td>
			</tr>
            <tr>
				<td><font class="text2" size="16px"> 11.</font></td>
				<td><font size="16px">&#160;&#160;&#160;&#160; Pada Tanggal</font></td>
				<td><font size="16px">: {{ $tanggalPindah }}</font></td>
			</tr>
            <tr>
				<td><font size="16px"> 12.</font></td>
				<td ><font size="16px">Alasan Pindah</font></td>
				<td><font size="16px">: {{ $alasan }}</font></td>
			</tr>
            <tr>
				<td><font size="16px"> 13.</font></td>
				<td ><font size="16px">Pengikut</font></td>
				<td><font size="16px">: </font></td>
			</tr>
		</table><br>
        <table class="kolom" width="500">
            <tr>
                <th><font size="16px">No</th>
                <th><font size="16px">Nama</th>
                <th><font size="16px">Jenis Kelamin</th>
                <th><font size="16px">Umur</th>
                <th><font size="16px">Status Perkawinan</th>
                <th><font size="16px">Pendidikan</th>
                <th><font size="16px">NIK/NIKS</th>
                <th><font size="16px">Ket</th>
            </tr>
            @foreach ($pengikut as $pengikut)
                <tr align="center">
                    <td>{{ $pengikut->nomer }}</td>
                    <td>{{ $pengikut->nama }}</td>
                    <td>{{ $pengikut->kelamin }}</td>
                    <td>{{ $pengikut->umurpengikut }}</td>
                    <td>{{ $pengikut->status }}</td>
                    <td>{{ $pengikut->pendidikan }}</td>
                    <td>{{ $pengikut->nikpengikut }}</td>
                    <td>{{ $pengikut->ket }}</td>
                </tr>

            @endforeach

        </table>
		{{-- <table width="350">
			<tr>
				<td width="150"><font size="16px">a. &emsp; Nama</font></td>
				<td><font size="16px">: &emsp;Geovanni Azam Janitra</font></td>
			</tr>
            <tr>
				<td width="150"><font size="16px">b. &emsp; NIK</font></td>
				<td><font size="16px">: &emsp;3577032711990002</font></td>
			</tr>
            <tr>
				<td width="150"><font size="16px">c. &emsp; Tempat, Tanggal Lahir</font></td>
				<td><font size="16px">: &emsp;Madiun, 27 November 1999</font></td>
            <tr>
				<td width="150"><font size="16px">d. &emsp; Umur</font></td>
				<td><font size="16px">: &emsp;22</font></td>
			</tr>
            <tr>
				<td width="150"><font size="16px">e. &emsp; Jenis Kelamin</font></td>
				<td><font size="16px">: &emsp;Laki-laki</font></td>
			</tr>
            <tr>
				<td width="150"><font size="16px">f. &emsp; Agama</font></td>
				<td><font size="16px">: &emsp;Islam</font></td>
			</tr>
            <tr>
				<td width="150"><font size="16px">g. &emsp; Kebangsaan</font></td>
				<td><font size="16px">: &emsp;Indonesia</font></td>
			</tr>
            <tr>
				<td width="150"><font size="16px">h. &emsp; Pekerjaan</font></td>
				<td><font size="16px">: &emsp;Creative Director</font></td>
			</tr>
            <tr>
				<td width="150"><font size="16px">i. &emsp; Alamat</font></td>
				<td><font size="16px">: &emsp;Manisrejo, Madiun</font></td>
			</tr>
		</table><br>
		<table width="400">
            <tr>
				<td width="15px"><font size="16px">2. </font></td>
				<td><font size="16px">Menerangkan bahwa orang tersebut benar-benar penduduk Kel. Nglames</font></td>
			</tr>
            <tr>
				<td width="15px"><font size="16px" class="text2">2. </font></td>
				<td><font size="16px">Kec/Kab. Madiun Madiun.</font></td>
			</tr>
            <tr>
				<td width="15px"><font size="16px">3. </font></td>
				<td><font size="16px">Surat Keterangan ini dipergunakan untuk permohonan  SKCK guna melamar</font></td>
			</tr>
            <tr>
				<td width="15px"><font size="16px" class="text2">3. </font></td>
				<td><font size="16px">pekerjaan.</font></td>
			</tr>
		</table>
		<br>
        <table width="400">
            <tr>
                <td>
                    <font size="16px">Demikian surat keterangan ini dibuat dengan sesungguhnya,untuk digunakan seperlunya</font>
                </td>
            </tr>
		</table> --}}
		<br>
		<table class="ttd" width="500">
			<tr>
				<td><font size="16px" class="text2"> - </font></td>
				<td><font size="16px">Madiun, {{ $tanggalSurat }}</font></td>
			</tr>
        	<tr>
    			<th><font size="16px">Yang Berhak Tanda Tangan</font></th>
    			<th><font size="16px">{{ $jabatanPerangkat }}</font></th>
  			</tr>
            <tr> <td colspan="2" height="10"><img src="transp.gif" alt="" width="1" height="75"></td> </tr>
            <tr>
    			<td><font size="16px">{{ $nama }}</font></td>
    			<td><font size="16px">{{ $namaPerangkat }}</font></td>
  			</tr>

	    </table>

</body>
</html>
