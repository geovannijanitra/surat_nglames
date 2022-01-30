<!-- Navigation Bar-->
<header id="topnav">
    <div class="topbar-main">
        <div class="container">

            <!-- Logo container-->
            <div class="logo">
                <a href="index.html" class="logo">
                    <img src="/logo-kab.png" width="25px"> Kelurahan Nglames
                </a>
            </div>
            <!-- End Logo container-->


            <div class="menu-extras">

                <ul class="nav navbar-nav navbar-right pull-right">


                    <li class="dropdown navbar-c-items">
                        <a href="" class="dropdown-toggle waves-effect waves-light profile" data-toggle="dropdown" aria-expanded="true"><img src="/logo-kab.png" alt="user-img" class="img-circle"> </a>
                        <ul class="dropdown-menu">
                            <li><a data-toggle="modal" data-target="#password" href="javascript:void(0)"><i class="ti-key text-custom m-r-10"></i>Ubah Password</a></li>
                            <li>
                                <a href="{{ route('logout') }}"
                                onclick="
                                event.preventDefault();
                                document.getElementById('formLogout').submit();"
                                >
                                <form id="formLogout" action="{{ route('logout') }}" method="POST">@csrf</form>
                                    <i class="ti-power-off text-danger m-r-10"></i>
                                Logout
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <div class="menu-item">
                    <!-- Mobile menu toggle-->
                    <a class="navbar-toggle">
                        <div class="lines">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </a>
                    <!-- End mobile menu toggle-->
                </div>
            </div>

        </div>
    </div>

    <div class="navbar-custom">
        <div class="container">
            <div id="navigation">
                <!-- Navigation Menu-->
                <ul class="navigation-menu">
                    <li class="has-submenu">
                        <a href="/"><i class="md md-dashboard"></i>Dashboard</a>

                    </li>

                    <li class="has-submenu">
                        <a href="/perangkat"><i class="md md-group"></i>Perangkat Desa</a>

                    </li>


                    <li class="has-submenu">
                        <a href="/kk"><i class="md md-location-city"></i>Data Keluarga</a>

                    </li>

                    <li class="has-submenu">
                        <a href="#"><i class="md md-content-copy"></i>Kebutuhan</a>
                        <ul class="submenu megamenu">
                            <li>
                                <ul>
                                    <li>
                                        <span>Surat Keterangan</span>
                                    </li>
                                    <li><a href="/surat">Domisili (Usaha)</a></li>
                                    <li><a href="/skck">SKCK</a></li>
                                    <li><a href="/sktm">SKTM</a></li>
                                    <li><a href="/pindah">Pindah</a></li>
                                </ul>
                            </li>
                            <li>
                                <ul>
                                    <li>
                                        <span>Surat Akta</span>
                                    </li>
                                    <li><a href="/kelahiran">Kelahiran</a></li>
                                    <li><a href="/kematian">Kematian</a></li>
                                </ul>
                            </li>


                        </ul>
                    </li>

                    <li class="has-submenu">
                        <a href="#"><i class="md md-assessment"></i>Rekapitulasi</a>
                        <ul class="submenu megamenu">
                            <li>
                                <ul>
                                    <li><a href="/rekappenduduk">Data Penduduk</a></li>
                                    <li><a href="/rekapsurat">Data Surat</a></li>
                                </ul>
                            </li>

                        </ul>
                    </li>
                </ul>
                <!-- End navigation menu        -->
            </div>
        </div> <!-- end container -->
    </div> <!-- end navbar-custom -->
</header>
<div id="password" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">Ubah Password</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card-box">

                            <form data-parsley-validate method="POST" action="/home/{{ Auth::user()->id }}" enctype="multipart/form-data">
                                @csrf
                                @method('PATCH')
                                <div class="form-group">
                                    <label for="password">Password baru</label>
                                    <i class="fa fa-eye" onmouseover="mouseoverPass();" onmouseout="mouseoutPass();"> </i>
                                    <input id="myPassword" name="password" type="password" placeholder="Isikan password baru" required class="form-control">
                                </div>


                                <div class="form-group text-right m-b-0">
                                    <button class="btn btn-primary btn-custom btn-rounded waves-effect waves-lightt" type="submit">
                                        Simpan
                                    </button>
                                    <a href="/home" type="button" class="btn btn-danger btn-custom btn-rounded waves-effect waves-light" data-dismiss>
                                        Batal
                                    </a>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!-- /.modal -->
<script>
    function mouseoverPass(obj) {
  var obj = document.getElementById('myPassword');
  obj.type = "text";
}
function mouseoutPass(obj) {
  var obj = document.getElementById('myPassword');
  obj.type = "password";
}
</script>
