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
                <a href="#home-2" data-toggle="tab" aria-expanded="false">
                    <span class="visible-xs"><i class="fa fa-home"></i></span>
                    <span class="hidden-xs">Home</span>
                </a>
            </li>
            <li class="tab">
                <a href="#profile-2" data-toggle="tab" aria-expanded="false">
                    <span class="visible-xs"><i class="fa fa-user"></i></span>
                    <span class="hidden-xs">Profile</span>
                </a>
            </li>
            <li class="tab">
                <a href="#messages-2" data-toggle="tab" aria-expanded="true">
                    <span class="visible-xs"><i class="fa fa-envelope-o"></i></span>
                    <span class="hidden-xs">Messages</span>
                </a>
            </li>
            <li class="tab">
                <a href="#settings-2" data-toggle="tab" aria-expanded="false">
                    <span class="visible-xs"><i class="fa fa-cog"></i></span>
                    <span class="hidden-xs">Settings</span>
                </a>
            </li>
        </ul>
            <div class="tab-content">
                <div class="tab-pane active" id="home-2">
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p>
                    <p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.</p>
                </div>
                <div class="tab-pane" id="profile-2">
                    <p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.</p>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p>
                </div>
                <div class="tab-pane" id="messages-2">
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p>
                    <p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.</p>
                </div>
                <div class="tab-pane" id="settings-2">
                    <p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.</p>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p>
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
