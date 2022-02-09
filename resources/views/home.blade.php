@extends('master.main')
@section('judul','Dashboard')
@section('content')
<!-- Page-Title -->
<div class="row">
    <div class="col-sm-12">
        <h4 class="page-title">Dashboard</h4>
        <p class="text-muted page-title-alt">Welcome to Nglames admin panel !</p>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <ul class="nav nav-tabs tabs">
            <li class="active tab">
                <a href="#skdu-2" data-toggle="tab" aria-expanded="false">
                    <span class="visible-xs"><i class="fa fa-home"></i></span>
                    <span class="hidden-xs">Keterangan Domisili Usaha</span>
                </a>
            </li>
            <li class="tab">
                <a href="#skck-2" data-toggle="tab" aria-expanded="false">
                    <span class="visible-xs"><i class="fa fa-user"></i></span>
                    <span class="hidden-xs">SKCK</span>
                </a>
            </li>
            <li class="tab">
                <a href="#sktm-2" data-toggle="tab" aria-expanded="true">
                    <span class="visible-xs"><i class="fa fa-envelope-o"></i></span>
                    <span class="hidden-xs">Keterangan Tidak Mampu</span>
                </a>
            </li>
            <li class="tab">
                <a href="#skp-2" data-toggle="tab" aria-expanded="false">
                    <span class="visible-xs"><i class="fa fa-cog"></i></span>
                    <span class="hidden-xs">Keterangan Pindah</span>
                </a>
            </li>
            <li class="tab">
                <a href="#lahir-2" data-toggle="tab" aria-expanded="false">
                    <span class="visible-xs"><i class="fa fa-cog"></i></span>
                    <span class="hidden-xs">Keterangan Kelahiran</span>
                </a>
            </li>
            <li class="tab">
                <a href="#mati-2" data-toggle="tab" aria-expanded="false">
                    <span class="visible-xs"><i class="fa fa-cog"></i></span>
                    <span class="hidden-xs">Keterangan Kematian</span>
                </a>
            </li>
        </ul>
            <div class="tab-content">
                <div class="tab-pane active" id="skdu-2">
                    <p>Surat Keterangan Domisili Usaha (SKDU) adalah surat keterangan resmi dari Kelurahan dan/atau Kecamatan setempat yang menjelaskan bahwa benar adanya suatu usaha berlokasi di alamat atau domisili tertentu.</p>
                    <br>
                    <p>Cara membuat Surat Keterangan Domisili Usaha
                        <ul>
                            <li>Pastikan Data Penduduk sudah dimasukkan pada Data Keluarga</li>
                            <li>Pastikan Data Pejabat yang bertanda-tangan sudah dimasukkan pada Data Perangkat Desa</li>
                            <li>Jika sudah, buka menu Surat Keterangan Domisili di awal menu</li>
                            <li>Isi Keterangan yang dibutuhkan</li>
                            <li>Isi nomor surat</li>
                            <li>Simpan kemudian cetak</li>
                        </ul>
                    </p>
                </div>
                <div class="tab-pane" id="skck-2">
                    <p>SKCK adalah surat keterangan catatan kepolisian, berisi keterangan resmi yang diterbitkan oleh Kepolisian Republik Indonesia (Polri), sebagai bukti penting bahwa orang yang bersangkutan berperilaku baik atau tidak pernah melakukan tindak kejahatan kriminal.</p>
                    <br>
                    <p>Cara membuat Surat Keterangan SKCK
                        <ul>
                            <li>Pastikan Data Penduduk sudah dimasukkan pada Data Keluarga</li>
                            <li>Pastikan Data Pejabat yang bertanda-tangan sudah dimasukkan pada Data Perangkat Desa</li>
                            <li>Jika sudah, buka menu Surat Keterangan untuk SKCK di awal menu</li>
                            <li>Isi Keterangan  yang dibutuhkan</li>
                            <li>Isi nomor surat</li>
                            <li>Simpan kemudian cetak</li>
                        </ul>
                    </p>
                </div>
                <div class="tab-pane" id="sktm-2">
                    <p>Surat Keterangan Tidak Mampu (SKTM) merupakan surat yang dikeluarkan oleh pemerintah desa atau kelurahan untuk keluarga yang kurang mampu</p>
                    <br>
                    <p>Cara membuat Surat Keterangan Tidak Mampu (SKTM)
                        <ul>
                            <li>Pastikan Data Penduduk sudah dimasukkan pada Data Keluarga</li>
                            <li>Pastikan Data Pejabat yang bertanda-tangan sudah dimasukkan pada Data Perangkat Desa</li>
                            <li>Jika sudah, buka menu Surat Keterangan untuk Surat Keterangan Tidak Mampu (SKTM) di awal menu</li>
                            <li>Isi Keterangan  yang dibutuhkan</li>
                            <li>Isi nomor surat</li>
                            <li>Simpan kemudian cetak</li>
                        </ul>
                    </p>
                 </div>
                <div class="tab-pane" id="skp-2">
                    <p>Surat Keterangan Pindah digunakan sebagai dasar perekaman dalam data base kependudukan dan proses perubahan KK bagi Kepala/Anggota Keluarga yang tidak pindah.</p>
                    <br>
                    <p>Cara membuat Surat Keterangan Tidak Mampu (SKTM)
                        <ul>
                            <li>Pastikan Data Penduduk sudah dimasukkan pada Data Keluarga</li>
                            <li>Pastikan Data Pejabat yang bertanda-tangan sudah dimasukkan pada Data Perangkat Desa</li>
                            <li>Jika sudah, buka menu Surat Keterangan untuk Surat Keterangan Pindah di awal menu kemudian pilih tambah</li>
                            <li>Isi Keterangan  yang dibutuhkan</li>
                            <li>Masukkan data penduduk yang pindah, jika kosong masukkan tanda'-'</li>
                            <li>Isi nomor surat</li>
                            <li>Simpan kemudian kembali lalu cetak</li>
                        </ul>
                    </p>
                </div>
                <div class="tab-pane" id="lahir-2">
                    <p>Surat Keterangan Kelahiran merupakan surat keterangan lahir dari desa</p>
                    <br>
                    <p>Cara membuat Surat Keterangan Kelahiran
                        <ul>
                            <li>Pastikan Data Penduduk untuk Orang Tua sudah dimasukkan pada Data Keluarga</li>
                            <li>Pastikan Data Pejabat yang bertanda-tangan sudah dimasukkan pada Data Perangkat Desa</li>
                            <li>Pastikan Data Saksi 1 & Saksi 2 sudah dimasukkan pada Data Perangkat Desa dengan detail jabatan Ketua RT/RW</li>
                            <li>Jika sudah, buka menu Surat Keterangan untuk Surat Keterangan Kelahiran di awal menu kemudian pilih tambah</li>
                            <li>Isi Keterangan  yang dibutuhkan</li>
                            <li>Isi data  untuk pelapor</li>
                            <li>Isi nomor surat</li>
                            <li>Simpan kemudian kembali lalu cetak</li>
                        </ul>
                    </p>
                </div>
                <div class="tab-pane" id="mati-2">
                    <p>Surat keterangan kematian adalah surat keterangan (pengakuan dsb) yang disaksikan atau disahkan oleh suatu badan pemerintahan tingkat kelurahan atau desa yang dikeluarkan guna untuk membuat akta kematian atau kepentingan lainnya.</p>
                    <br>
                    <p>Cara membuat Surat Keterangan Kematian
                        <ul>
                            <li>Pastikan Data Penduduk untuk Jenazah sudah dimasukkan pada Data Keluarga</li>
                            <li>Pastikan Data Pejabat yang bertanda-tangan sudah dimasukkan pada Data Perangkat Desa</li>
                            <li>Pastikan Data Saksi 1 & Saksi 2 sudah dimasukkan pada Data Perangkat Desa dengan detail jabatan Ketua RT/RW</li>
                            <li>Jika sudah, buka menu Surat Keterangan untuk Surat Keterangan Kematian di awal menu kemudian pilih tambah</li>
                            <li>Isi Keterangan  yang dibutuhkan</li>
                            <li>Isi nomor surat</li>
                            <li>Isi data  untuk pelapor</li>
                            <li>Isi data  untuk orang tua jenazah</li>
                            <li>Simpan kemudian kembali lalu cetak</li>
                        </ul>
                    </p>
                </div>
            </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-4">
        <div class="card-box">
            <div class="bar-widget">
                <div class="table-box">

                    <a href="/surat">
                         <div class="table-detail">
                        <div class="iconbox bg-info">
                            <i class="icon-layers"></i>
                        </div>
                    </div>

                    <div class="table-detail" href="/surat">
                        <h4 href="/surat" class="m-t-0 m-b-5"><b>Surat Keterangan Domisili (Usaha)</b></h4>
                        <h5 href="/surat" class="text-muted m-b-0 m-t-0">Digunakan untuk mengajukan pinjaman</h5>
                    </div>

                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="card-box">
            <div class="bar-widget">
                <div class="table-box">
                    <a href="/skck">
                        <div class="table-detail">
                        <div class="iconbox bg-purple">
                            <i class="md-perm-contact-cal"></i>
                        </div>
                    </div>

                    <div class="table-detail" href="/skck">
                        <h4 href="/skck" class="m-t-0 m-b-5"><b>Surat Keterangan untuk SKCK</b></h4>
                        <h5 href="/skck" class="text-muted m-b-0 m-t-0">Digunakan untuk mengajukan pembuatan SKCK</h5>
                    </div>

                    </a>
                </div>
            </div>
        </div>
    </div>


    <div class="col-lg-4">
        <div class="card-box">
            <div class="bar-widget">
                <div class="table-box">
                    <a href="/sktm">
                        <div class="table-detail">
                        <div class="iconbox bg-warning">
                            <i class="md-receipt"></i>
                        </div>
                    </div>

                    <div class="table-detail" href="/sktm">
                        <h4 href="/sktm" class="m-t-0 m-b-5"><b>Surat Keterangan Tidak Mampu</b></h4>
                        <h5 href="/sktm" class="text-muted m-b-0 m-t-0">Digunakan untuk mengajukan beasiswa di sekolah</h5>
                    </div>

                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-4">
        <div class="card-box">
            <div class="bar-widget">
                <div class="table-box">
                    <a href="/pindah">
                          <div class="table-detail">
                        <div class="iconbox bg-pink">
                            <i class="md-pin-drop"></i>
                        </div>
                    </div>

                    <div class="table-detail" href="/pindah">
                        <h4 href="/pindah" class="m-t-0 m-b-5"><b>Surat Keterangan Pindah</b></h4>
                        <h5 href="/pindah" class="text-muted m-b-0 m-t-0">Digunakan sebagai keterangan pindah penduduk</h5>
                    </div>

                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-4">
        <div class="card-box">
            <div class="bar-widget">
                <div class="table-box">
                    <a href="/kelahiran">
                        <div class="table-detail">
                        <div class="iconbox bg-custom">
                            <i class="md-keyboard-alt"></i>
                        </div>
                    </div>

                    <div class="table-detail" href="/kelahiran">
                        <h4 href="/kelahiran" class="m-t-0 m-b-5"><b>Surat Keterangan Kelahiran</b></h4>
                        <h5 href="/kelahiran" class="text-muted m-b-0 m-t-0">Digunakan untuk menyatakan penduduk yang telah lahir</h5>
                    </div>
                    </a>

                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-4">
        <div class="card-box">
            <div class="bar-widget">
                <div class="table-box">
                    <a href="/kematian">
                        <div class="table-detail">
                        <div class="iconbox bg-danger">
                            <i class="md-local-florist"></i>
                        </div>
                    </div>

                    <div class="table-detail" href="/kematian">
                        <h4 href="/kematian" class="m-t-0 m-b-5"><b>Surat Keterangan Kematian</b></h4>
                        <h5 href="/kematian" class="text-muted m-b-0 m-t-0">Digunakan untuk menyatakan penduduk yang meninggal</h5>
                    </div>
                    </a>

                </div>
            </div>
        </div>
    </div>

</div>

@endsection
