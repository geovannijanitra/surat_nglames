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
