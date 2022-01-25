<!DOCTYPE html>
<html>
<head>
	<title>SKTM</title>
	<style type="text/css">
		table {
			border-style: double;
			border-width: 3px;
			border-color: white;

  			margin-left: auto;
  			margin-right: auto;
        }


        table td .text2 {
            color: white;
		}

		table tr td {
			font-size: 13px;
		}
        .ttd{
        	text-align: center;
        }
	</style>
</head>
<body>
	<center>
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
		</table><br><br>
		<table width="300">
			<tr>
				<td>
                    <center>
                        <font size="16px"><b><u>SURAT KETERANGAN</u></b></font></td>
                    </center>
			</tr>
			<tr>
				<td>
                    <center>
                        <font size="16px">Nomor : {{ $noSurat }}</font>
                    </center>
                </td>
			</tr>
		</table><br><br>
		<table width="400">
			<tr>
				<td width="16px"><font size="16px">1. </font></td>
				<td><font size="16px">Yang bertanda tangan di bawah ini, </font></td>
			</tr>
		</table>
		<table width="350">
			<tr>
				<td width="150"><font size="16px">a. &emsp; Nama</font></td>
				<td><font size="16px">: &emsp;{{ $namaPerangkat }}</font></td>
			</tr>
            <tr>
				<td width="150"><font size="16px">b. &emsp; Jabatan</font></td>
				<td><font size="16px">: &emsp;{{ $jabatanPerangkat }}</font></td>
			</tr>
		</table>
		<br>
        <table width="350">
			<tr>
		       <td>
			       <font size="16px">Dengan ini menerangkan bahwa</font>
		       </td>
		    </tr>
		</table>
		<table width="350">
			<tr>
				<td width="150"><font size="16px">a. &emsp; Nama</font></td>
				<td><font size="16px">: &emsp;{{ $nama }}</font></td>
			</tr>
            <tr>
				<td width="150"><font size="16px">b. &emsp; NIK</font></td>
				<td><font size="16px">: &emsp;{{ $nik }}</font></td>
			</tr>
            <tr>
				<td width="150"><font size="16px">c. &emsp; Tempat, Tanggal Lahir</font></td>
				<td><font size="16px">: &emsp;{{ $tempatLahir }}, {{ $tanggalLahir }}</font></td>
            <tr>
				<td width="150"><font size="16px">d. &emsp; Agama</font></td>
				<td><font size="16px">: &emsp;{{ $agama }}</font></td>
			</tr>
            <tr>
				<td width="150"><font size="16px">e. &emsp; Pekerjaan</font></td>
				<td><font size="16px">: &emsp;{{ $pekerjaan }}</font></td>
			</tr>
            <tr>
				<td width="150"><font size="16px">f. &emsp; Alamat</font></td>
				<td><font size="16px">: &emsp;{{ $alamat }}</font></td>
			</tr>
		</table><br>
		<table width="400">
            <tr>
				<td width="15px"><font size="16px">2. </font></td>
				<td><font size="16px">Berdasarkan surat pernyataan yang bersangkutan tanggal {{ $tanggalSurat }}</font></td>
			</tr>
            <tr>
				<td width="15px"><font size="16px" class="text2">2. </font></td>
				<td><font size="16px">bahwa orang tersebut benar-benar penduduk Kelurahan Nglames Kecamatan</font></td>
			</tr>
            <tr>
				<td width="15px"><font size="16px" class="text2">2. </font></td>
				<td><font size="16px">Madiun Kabupaten Madiun dan perekonomiannya kurang mampu.</font></td>
			</tr>
            <tr>
				<td width="15px"><font size="16px">3. </font></td>
				<td><font size="16px">Surat Keterangan ini dipergunakan untuk permohonan keringanan biaya</font></td>
			</tr>
            <tr>
				<td width="15px"><font size="16px" class="text2">3. </font></td>
				<td><font size="16px">sekolah anaknya.</font></td>
			</tr>
		</table>
        <table width="300">
			<tr>
				<td width="150"><font size="16px">a. &emsp; Nama</font></td>
				<td><font size="16px">: &emsp;{{ $namaAnak }}</font></td>
			</tr>
            <tr>
				<td width="150"><font size="16px">b. &emsp; Sekolah</font></td>
				<td><font size="16px">: &emsp;{{ $sekolah }}</font></td>
			</tr>
		</table>
		<br>
        <table width="400">
            <tr>
                <td>
                    <font size="16px">Demikian surat keterangan ini dibuat dengan sesungguhnya,untuk digunakan seperlunya</font>
                </td>
            </tr>
		</table>
		<br><br>
		<table class="ttd" width="400">
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
	</center>
</body>
</html>
