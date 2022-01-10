<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
    <meta name="author" content="Coderthemes">
    <!-- App Favicon icon -->
    <link rel="shortcut icon" href="/logo-kab.png">
    <!-- App Title -->
    <title>@yield('judul')</title>

    <!-- Plugin Css-->
    <link rel="stylesheet" href="{{ asset('menu_2') }}/assets/plugins/magnific-popup/css/magnific-popup.css" />

    <!-- Sweet Alert -->
    <link href="{{ asset('menu_2') }}/assets/plugins/bootstrap-sweetalert/sweet-alert.css" rel="stylesheet" type="text/css">


    <link href="{{ asset('menu_2') }}/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('menu_2') }}/assets/css/core.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('menu_2') }}/assets/css/components.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('menu_2') }}/assets/css/icons.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('menu_2') }}/assets/css/pages.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('menu_2') }}/assets/css/menu.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('menu_2') }}/assets/css/responsive.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('menu_2') }}/assets/css/responsive.css" rel="stylesheet" type="text/css" />

    <!-- DataTables -->
    <link href="{{ asset('menu_2') }}/assets/plugins/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('menu_2') }}/assets/plugins/datatables/buttons.bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('menu_2') }}/assets/plugins/datatables/fixedHeader.bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('menu_2') }}/assets/plugins/datatables/responsive.bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('menu_2') }}/assets/plugins/datatables/scroller.bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('menu_2') }}/assets/plugins/datatables/dataTables.colVis.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('menu_2') }}/assets/plugins/datatables/dataTables.bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('menu_2') }}/assets/plugins/datatables/fixedColumns.dataTables.min.css" rel="stylesheet" type="text/css" />

    <link href="{{ asset('menu_2') }}/assets/plugins/bootstrap-tagsinput/css/bootstrap-tagsinput.css" rel="stylesheet" />
    <link href="{{ asset('menu_2') }}/assets/plugins/switchery/css/switchery.min.css" rel="stylesheet" />
    <link href="{{ asset('menu_2') }}/assets/plugins/multiselect/css/multi-select.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('menu_2') }}/assets/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('menu_2') }}/assets/plugins/bootstrap-select/css/bootstrap-select.min.css" rel="stylesheet" />
    <link href="{{ asset('menu_2') }}/assets/plugins/bootstrap-touchspin/css/jquery.bootstrap-touchspin.min.css" rel="stylesheet" />

    <link href="{{ asset('menu_2') }}/assets/plugins/timepicker/bootstrap-timepicker.min.css" rel="stylesheet">
    <link href="{{ asset('menu_2') }}/assets/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css" rel="stylesheet">
    <link href="{{ asset('menu_2') }}/assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">
    <link href="{{ asset('menu_2') }}/assets/plugins/clockpicker/css/bootstrap-clockpicker.min.css" rel="stylesheet">
    <link href="{{ asset('menu_2') }}/assets/plugins/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <link href="{{ asset('menu_2') }}/assets/plugins/bootstrap-sweetalert/sweet-alert.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

    <script src="{{ asset('menu_2') }}/assets/js/modernizr.min.js"></script>
</head>


<body>


    @include('master.header')


    <div class="wrapper">
        <div class="container">

            @yield('content')
            @include('master.footer')

        </div> <!-- end container -->
    </div>
    <!-- end wrapper -->


    <!-- jQuery  -->
    <script src="{{ asset('menu_2') }}/assets/js/jquery.min.js"></script>

    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script> --}}
    <script src="{{ asset('menu_2') }}/assets/js/bootstrap.min.js"></script>
    <script src="{{ asset('menu_2') }}/assets/js/detect.js"></script>
    <script src="{{ asset('menu_2') }}/assets/js/fastclick.js"></script>

    <script src="{{ asset('menu_2') }}/assets/js/jquery.slimscroll.js"></script>
    <script src="{{ asset('menu_2') }}/assets/js/jquery.blockUI.js"></script>
    <script src="{{ asset('menu_2') }}/assets/js/waves.js"></script>
    <script src="{{ asset('menu_2') }}/assets/js/wow.min.js"></script>
    <script src="{{ asset('menu_2') }}/assets/js/jquery.nicescroll.js"></script>
    <script src="{{ asset('menu_2') }}/assets/js/jquery.scrollTo.min.js"></script>

    <script src="{{ asset('menu_2') }}/assets/plugins/peity/jquery.peity.min.js"></script>

    <!-- jQuery  -->
    <script src="{{ asset('menu_2') }}/assets/plugins/waypoints/lib/jquery.waypoints.js"></script>
    <script src="{{ asset('menu_2') }}/assets/plugins/counterup/jquery.counterup.min.js"></script>

    <script src="{{ asset('menu_2') }}/assets/plugins/jquery-knob/jquery.knob.js"></script>

    <script src="{{ asset('menu_2') }}/assets/plugins/bootstrap-sweetalert/sweet-alert.min.js"></script>
    <script src="{{ asset('menu_2') }}/assets/pages/jquery.sweet-alert.init.js"></script>

    {{-- @stack() --}}
    <script>
        $('.swall-confirm').click(function(e) {
            id = e.target.dataset.id;
            swal({
                title: "Apakah anda yakin?",
                text: "Data yang terhapus tidak dapat dikembalikan",
                type: "warning",
                showCancelButton: true,
                confirmButtonClass: 'btn-warning',
                confirmButtonText: "Ya, Hapus!",
                closeOnConfirm: false
            }, function() {
                swal("Terhapus!", "Data anda telah terhapus", "success");
                $(`#delete${id}`).submit();
            });

        });
    </script>

    <script src="{{ asset('menu_2') }}/assets/js/jquery.core.js"></script>
    <script src="{{ asset('menu_2') }}/assets/js/jquery.app.js"></script>

    <script src="{{ asset('menu_2') }}/assets/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="{{ asset('menu_2') }}/assets/plugins/datatables/dataTables.bootstrap.js"></script>

    <script src="{{ asset('menu_2') }}/assets/plugins/datatables/dataTables.buttons.min.js"></script>
    <script src="{{ asset('menu_2') }}/assets/plugins/datatables/buttons.bootstrap.min.js"></script>
    <script src="{{ asset('menu_2') }}/assets/plugins/datatables/jszip.min.js"></script>
    <script src="{{ asset('menu_2') }}/assets/plugins/datatables/pdfmake.min.js"></script>
    <script src="{{ asset('menu_2') }}/assets/plugins/datatables/vfs_fonts.js"></script>
    <script src="{{ asset('menu_2') }}/assets/plugins/datatables/buttons.html5.min.js"></script>
    <script src="{{ asset('menu_2') }}/assets/plugins/datatables/buttons.print.min.js"></script>
    <script src="{{ asset('menu_2') }}/assets/plugins/datatables/dataTables.fixedHeader.min.js"></script>
    <script src="{{ asset('menu_2') }}/assets/plugins/datatables/dataTables.keyTable.min.js"></script>
    <script src="{{ asset('menu_2') }}/assets/plugins/datatables/dataTables.responsive.min.js"></script>
    <script src="{{ asset('menu_2') }}/assets/plugins/datatables/responsive.bootstrap.min.js"></script>
    <script src="{{ asset('menu_2') }}/assets/plugins/datatables/dataTables.scroller.min.js"></script>
    <script src="{{ asset('menu_2') }}/assets/plugins/datatables/dataTables.colVis.js"></script>
    <script src="{{ asset('menu_2') }}/assets/plugins/datatables/dataTables.fixedColumns.min.js"></script>

    <script src="{{ asset('menu_2') }}/assets/pages/datatables.init.js"></script>

    <script src="{{ asset('menu_2') }}/assets/plugins/bootstrap-tagsinput/js/bootstrap-tagsinput.min.js"></script>
    <script src="{{ asset('menu_2') }}/assets/plugins/switchery/js/switchery.min.js"></script>
    <script type="text/javascript" src="{{ asset('menu_2') }}/assets/plugins/multiselect/js/jquery.multi-select.js">
    </script>
    <script type="text/javascript" src="{{ asset('menu_2') }}/assets/plugins/jquery-quicksearch/jquery.quicksearch.js"></script>
    <script src="{{ asset('menu_2') }}/assets/plugins/select2/js/select2.min.js" type="text/javascript"></script>
    <script src="{{ asset('menu_2') }}/assets/plugins/bootstrap-select/js/bootstrap-select.min.js" type="text/javascript"></script>
    <script src="{{ asset('menu_2') }}/assets/plugins/bootstrap-filestyle/js/bootstrap-filestyle.min.js" type="text/javascript"></script>
    <script src="{{ asset('menu_2') }}/assets/plugins/bootstrap-touchspin/js/jquery.bootstrap-touchspin.min.js" type="text/javascript"></script>
    <script src="{{ asset('menu_2') }}/assets/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js" type="text/javascript"></script>

    <script type="text/javascript" src="{{ asset('menu_2') }}/assets/plugins/autocomplete/jquery.mockjax.js">
    </script>
    <script type="text/javascript" src="{{ asset('menu_2') }}/assets/plugins/autocomplete/jquery.autocomplete.min.js"></script>
    <script type="text/javascript" src="{{ asset('menu_2') }}/assets/plugins/autocomplete/countries.js"></script>
    <script type="text/javascript" src="{{ asset('menu_2') }}/assets/pages/autocomplete.js"></script>

    <script type="text/javascript" src="{{ asset('menu_2') }}/assets/pages/jquery.form-advanced.init.js"></script>

    <script src="{{ asset('menu_2') }}/assets/plugins/moment/moment.js"></script>
    <script src="{{ asset('menu_2') }}/assets/plugins/timepicker/bootstrap-timepicker.js"></script>
    <script src="{{ asset('menu_2') }}/assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js">
    </script>
    <script src="{{ asset('menu_2') }}/assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
    <script src="{{ asset('menu_2') }}/assets/plugins/clockpicker/js/bootstrap-clockpicker.min.js"></script>
    <script src="{{ asset('menu_2') }}/assets/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>
    <script src="{{ asset('menu_2') }}/assets/pages/jquery.form-pickers.init.js"></script>

    <script src="{{ asset('menu_2') }}/assets/plugins/magnific-popup/js/jquery.magnific-popup.min.js"></script>
    <script src="{{ asset('menu_2') }}/assets/plugins/jquery-datatables-editable/jquery.dataTables.js"></script>
    <script src="{{ asset('menu_2') }}/assets/plugins/datatables/dataTables.bootstrap.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#datatable').dataTable();
            $('#datatable-keytable').DataTable({
                keys: true
            });
            $('#datatable-responsive').DataTable();
            $('#datatable-colvid').DataTable({
                "dom": 'C<"clear">lfrtip',
                "colVis": {
                    "buttonText": "Change columns"
                }
            });
            $('#datatable-scroller').DataTable({
                ajax: "{{ asset('menu_2') }}/assets/plugins/datatables/json/scroller-demo.json",
                deferRender: true,
                scrollY: 380,
                scrollCollapse: true,
                scroller: true
            });
            var table = $('#datatable-fixed-header').DataTable({
                fixedHeader: true
            });
            var table = $('#datatable-fixed-col').DataTable({
                scrollY: "300px",
                scrollX: true,
                scrollCollapse: true,
                paging: false,
                fixedColumns: {
                    leftColumns: 1,
                    rightColumns: 1
                }
            });
        });
        TableManageButtons.init();
    </script>




</body>

</html>
