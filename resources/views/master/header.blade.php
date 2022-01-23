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
                        <a href="" class="dropdown-toggle waves-effect waves-light profile" data-toggle="dropdown" aria-expanded="true"><img src="{{asset('menu_2')}}/assets/images/users/avatar-10.jpg" alt="user-img" class="img-circle"> </a>
                        <ul class="dropdown-menu">
                            <li><a href="javascript:void(0)"><i class="ti-user text-custom m-r-10"></i> Profile</a></li>
                            <li><a href="javascript:void(0)"><i class="ti-power-off text-danger m-r-10"></i> Logout</a></li>
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
