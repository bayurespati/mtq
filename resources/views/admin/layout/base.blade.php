<!doctype html>
<html class="fixed">

<head>

    <!-- Basic -->
    <meta charset="UTF-8">

    @stack('title')

    <meta name="keywords" content="HTML5 Admin Template" />
    <meta name="description" content="Porto Admin - Responsive HTML5 Template">
    <meta name="author" content="okler.net">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

    <!-- Web Fonts  -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="/admin/vendor/bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" href="/admin/vendor/animate/animate.compat.css">
    <link rel="stylesheet" href="/admin/vendor/font-awesome/css/all.min.css" />
    <link rel="stylesheet" href="/admin/vendor/boxicons/css/boxicons.min.css" />
    <link rel="stylesheet" href="/admin/vendor/magnific-popup/magnific-popup.css" />
    <link rel="stylesheet" href="/admin/vendor/bootstrap-datepicker/css/bootstrap-datepicker3.css" />
    <link rel="stylesheet" href="/admin/vendor/jquery-ui/jquery-ui.css" />
    <link rel="stylesheet" href="/admin/vendor/jquery-ui/jquery-ui.theme.css" />
    <link rel="stylesheet" href="/admin/vendor/bootstrap-multiselect/css/bootstrap-multiselect.css" />
    <link rel="stylesheet" href="/admin/vendor/morris/morris.css" />
    <link rel="stylesheet" href="/admin/vendor/select2/css/select2.css" />
    <link rel="stylesheet" href="/admin/vendor/select2-bootstrap-theme/select2-bootstrap.min.css" />
    <link rel="stylesheet" href="/admin/vendor/datatables/media/css/dataTables.bootstrap5.css" />

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="/admin/vendor/bootstrap-tagsinput/bootstrap-tagsinput.css" />
    <link rel="stylesheet" href="/admin/vendor/bootstrap-timepicker/css/bootstrap-timepicker.css" />
    <link rel="stylesheet" href="/admin/vendor/dropzone/basic.css" />
    <link rel="stylesheet" href="/admin/vendor/dropzone/dropzone.css" />
    <link rel="stylesheet" href="/admin/vendor/bootstrap-markdown/css/bootstrap-markdown.min.css" />
    <link rel="stylesheet" href="/admin/vendor/summernote/summernote-bs4.css" />


    <!-- Theme CSS -->
    <link rel="stylesheet" href="/admin/css/theme.css" />

    <!-- Skin CSS -->
    <link rel="stylesheet" href="/admin/css/skins/default.css" />

    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="/admin/css/custom.css">

    <style>
        .inner-wrapper {
            padding-top: 60px !important;
        }

        .sidebar-left {
            top: 0 !important;
            z-index: 999999;
        }

        .nav-link:hover,
        .nav-link:focus {
            color: #64B6AC !important;
        }

        .userbox .dropdown-menu a:hover {
            background: #64B6AC !important;
        }
    </style>

    @stack('additional_css')

    <!-- Head Libs -->
    <script src="/admin/vendor/modernizr/modernizr.js"></script>

</head>

<body>
    @yield('content')

    <!-- Vendor -->
    <script src="/admin/vendor/jquery/jquery.js"></script>
    <script src="/admin/vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script>
    <script src="/admin/vendor/popper/umd/popper.min.js"></script>
    <script src="/admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/admin/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
    <script src="/admin/vendor/common/common.js"></script>
    <script src="/admin/vendor/nanoscroller/nanoscroller.js"></script>
    <script src="/admin/vendor/magnific-popup/jquery.magnific-popup.js"></script>
    <script src="/admin/vendor/jquery-placeholder/jquery.placeholder.js"></script>

    <!-- Specific Page Vendor -->
    <script src="/admin/vendor/jquery-ui/jquery-ui.js"></script>
    <script src="/admin/vendor/jqueryui-touch-punch/jquery.ui.touch-punch.js"></script>
    <script src="/admin/vendor/jquery-appear/jquery.appear.js"></script>
    <script src="/admin/vendor/bootstrap-multiselect/js/bootstrap-multiselect.js"></script>
    <script src="/admin/vendor/jquery.easy-pie-chart/jquery.easypiechart.js"></script>
    <script src="/admin/vendor/flot/jquery.flot.js"></script>
    <script src="/admin/vendor/flot.tooltip/jquery.flot.tooltip.js"></script>
    <script src="/admin/vendor/flot/jquery.flot.pie.js"></script>
    <script src="/admin/vendor/flot/jquery.flot.categories.js"></script>
    <script src="/admin/vendor/flot/jquery.flot.resize.js"></script>
    <script src="/admin/vendor/jquery-sparkline/jquery.sparkline.js"></script>
    <script src="/admin/vendor/raphael/raphael.js"></script>
    <script src="/admin/vendor/morris/morris.js"></script>
    <script src="/admin/vendor/gauge/gauge.js"></script>
    <script src="/admin/vendor/snap.svg/snap.svg.js"></script>
    <script src="/admin/vendor/liquid-meter/liquid.meter.js"></script>
    <script src="/admin/vendor/jqvmap/jquery.vmap.js"></script>
    <script src="/admin/vendor/jqvmap/data/jquery.vmap.sampledata.js"></script>
    <script src="/admin/vendor/jqvmap/maps/jquery.vmap.world.js"></script>
    <script src="/admin/vendor/jqvmap/maps/continents/jquery.vmap.africa.js"></script>
    <script src="/admin/vendor/jqvmap/maps/continents/jquery.vmap.asia.js"></script>
    <script src="/admin/vendor/jqvmap/maps/continents/jquery.vmap.australia.js"></script>
    <script src="/admin/vendor/jqvmap/maps/continents/jquery.vmap.europe.js"></script>
    <script src="/admin/vendor/jqvmap/maps/continents/jquery.vmap.north-america.js"></script>
    <script src="/admin/vendor/jqvmap/maps/continents/jquery.vmap.south-america.js"></script>

    <!-- Specific Page Vendor -->
    <script src="/admin/vendor/select2/js/select2.js"></script>
    <script src="/admin/vendor/datatables/media/js/jquery.dataTables.min.js"></script>
    <script src="/admin/vendor/datatables/media/js/dataTables.bootstrap5.min.js"></script>
    <script src="/admin/vendor/datatables/extras/TableTools/Buttons-1.4.2/js/dataTables.buttons.min.js"></script>
    <script src="/admin/vendor/datatables/extras/TableTools/Buttons-1.4.2/js/buttons.bootstrap4.min.js"></script>
    <script src="/admin/vendor/datatables/extras/TableTools/Buttons-1.4.2/js/buttons.html5.min.js"></script>
    <script src="/admin/vendor/datatables/extras/TableTools/Buttons-1.4.2/js/buttons.print.min.js"></script>
    <script src="/admin/vendor/datatables/extras/TableTools/JSZip-2.5.0/jszip.min.js"></script>
    <script src="/admin/vendor/datatables/extras/TableTools/pdfmake-0.1.32/pdfmake.min.js"></script>
    <script src="/admin/vendor/datatables/extras/TableTools/pdfmake-0.1.32/vfs_fonts.js"></script>

    <!-- Specific Page Vendor -->
    <script src="/admin/vendor/jquery-maskedinput/jquery.maskedinput.js"></script>
    <script src="/admin/vendor/bootstrap-tagsinput/bootstrap-tagsinput.js"></script>
    <script src="/admin/vendor/bootstrap-timepicker/js/bootstrap-timepicker.js"></script>
    <script src="/admin/vendor/fuelux/js/spinner.js"></script>
    <script src="/admin/vendor/dropzone/dropzone.js"></script>
    <script src="/admin/vendor/bootstrap-markdown/js/markdown.js"></script>
    <script src="/admin/vendor/bootstrap-markdown/js/to-markdown.js"></script>
    <script src="/admin/vendor/bootstrap-markdown/js/bootstrap-markdown.js"></script>
    <script src="/admin/vendor/summernote/summernote-bs4.js"></script>
    <script src="/admin/vendor/bootstrap-maxlength/bootstrap-maxlength.js"></script>
    <script src="/admin/vendor/ios7-switch/ios7-switch.js"></script>

    <!-- Specific Page Vendor -->
    <script src="/admin/vendor/isotope/isotope.js"></script>

    <!-- Theme Base, Components and Settings -->
    <script src="/admin/js/theme.js"></script>

    <!-- Theme Custom -->
    <script src="/admin/js/custom.js"></script>

    <!-- Theme Initialization Files -->
    <script src="/admin/js/theme.init.js"></script>

    <!-- Examples -->
    <script src="/admin/js/examples/examples.datatables.default.js"></script>
    <script src="/admin/js/examples/examples.datatables.row.with.details.js"></script>
    <script src="/admin/js/examples/examples.datatables.tabletools.js"></script>
    <script src="/admin/js/examples/examples.dashboard.js"></script>
    <script src="/admin/js/examples/examples.mediagallery.js"></script>

    @stack('additional_js')
</body>

</html>