@extends('master.main')
@section('judul','Dashboard')
@section('content')
<!-- Page-Title -->
<div class="row">
    <div class="col-sm-12">
        <h4 class="page-title">Dashboard</h4>
        <p class="text-muted page-title-alt">Welcome to Ubold admin panel !</p>
    </div>
</div>

<div class="row">
    <div class="col-lg-4">
        <div class="card-box">
            <div class="bar-widget">
                <div class="table-box">
                    <div class="table-detail">
                        <div class="iconbox bg-info">
                            <i class="icon-layers"></i>
                        </div>
                    </div>

                    <div class="table-detail">
                        <h4 class="m-t-0 m-b-5"><b>Surat Keterangan</b></h4>
                        <h5 class="text-muted m-b-0 m-t-0">Terdapat count surat</h5>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-4">
        <div class="card-box">
            <div class="bar-widget">
                <div class="table-box">
                    <div class="table-detail">
                        <div class="iconbox bg-custom">
                            <i class="md-keyboard-alt"></i>
                        </div>
                    </div>

                    <div class="table-detail">
                        <h4 class="m-t-0 m-b-5"><b>Surat Kelahiran</b></h4>
                        <h5 class="text-muted m-b-0 m-t-0">Terdapat count surat</h5>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-4">
        <div class="card-box">
            <div class="bar-widget">
                <div class="table-box">
                    <div class="table-detail">
                        <div class="iconbox bg-danger">
                            <i class="md-local-florist"></i>
                        </div>
                    </div>

                    <div class="table-detail">
                        <h4 class="m-t-0 m-b-5"><b>Surat Kematian</b></h4>
                        <h5 class="text-muted m-b-0 m-t-0">Terdapat count surat</h5>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="card-box">
            <div class="bar-widget">
                <div class="table-box">
                    <div class="table-detail">
                        <div class="iconbox bg-warning">
                            <i class="md-receipt"></i>
                        </div>
                    </div>

                    <div class="table-detail">
                        <h4 class="m-t-0 m-b-5"><b>SKTM</b></h4>
                        <h5 class="text-muted m-b-0 m-t-0">Terdapat count surat</h5>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-4">
        <div class="card-box">
            <div class="bar-widget">
                <div class="table-box">
                    <div class="table-detail">
                        <div class="iconbox bg-pink">
                            <i class="md-pin-drop"></i>
                        </div>
                    </div>

                    <div class="table-detail">
                        <h4 class="m-t-0 m-b-5"><b>Surat Pindah</b></h4>
                        <h5 class="text-muted m-b-0 m-t-0">Terdapat count surat</h5>
                    </div>

                </div>
            </div>
        </div>
    </div>

</div>

@endsection
