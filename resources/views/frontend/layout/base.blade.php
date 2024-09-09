<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Basic -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="icon_16x16.svg" type="image/x-icon">

    @stack('title')

    <meta name="keywords" content="WebSite Template" />
    <title>MTQ Nasional Tahun 2024</title>
    <meta name="description" content="MTQ Nasional XXX Kalimantan Timur Tahun 2024">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

    <!-- Web Fonts  -->
    <link id="googleFonts" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800%7CShadows+Into+Light&display=swap" rel="stylesheet" type="text/css">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="/frontend/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/frontend/vendor/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="/frontend/vendor/animate/animate.compat.css">
    <link rel="stylesheet" href="/frontend/vendor/simple-line-icons/css/simple-line-icons.min.css">
    <link rel="stylesheet" href="/frontend/vendor/owl.carousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="/frontend/vendor/owl.carousel/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="/frontend/vendor/magnific-popup/magnific-popup.min.css">

    <!-- Theme CSS -->
    <link rel="stylesheet" href="/frontend/css/theme.css">
    <link rel="stylesheet" href="/frontend/css/theme-elements.css">
    <link rel="stylesheet" href="/frontend/css/theme-blog.css">
    <link rel="stylesheet" href="/frontend/css/theme-shop.css">

    <!-- Demo CSS -->
    <link rel="stylesheet" href="/frontend/css/demos/demo-business-consulting-4.css">

    <!-- Skin CSS -->
    <link id="skinCSS" rel="stylesheet" href="/frontend/css/skins/skin-business-consulting-4.css">

    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="/frontend/css/custom.css">

    <style>
        #header .header-nav.header-nav-links nav>ul:not(:hover)>li>a.active,
        .text-color-hover-primary:hover,
        .text-hover-primary:hover,
        #header .header-nav.header-nav-links nav>ul li:hover>a {
            color: #64B6AC !important;
        }

        .btn-outline.btn-primary,
        .btn-outline.btn-primary:active,
        .btn-outline.btn-primary.active {
            border-color: #64B6AC !important;
        }

        .btn-outline.btn-primary:active,
        .btn-outline.btn-primary.active,
        .btn-outline.btn-primary:hover,
        .btn-outline.btn-primary.hover,
        .bg-color-primary,
        .bg-primary,
        .btn-primary,
        .overlay-color-primary:not(.no-skin):before {
            background-color: #64B6AC !important;
        }

        .custom-element-wrapper.custom-element-2 .custom-element,
        .custom-element-wrapper.custom-element-11:before,
        #header .header-btn-collapse-nav {
            background: #64B6AC !important;
        }

        .text-color-hover-primary:hover,
        .text-hover-primary:hover {
            background: #64B6AC !important;
            color: white !important;
        }

        .btn-outline.btn-primary:hover,
        .btn-outline.btn-primary.hover {
            color: white !important;
        }

        @media (max-width: 991px) {
            #header .header-nav-main:not(.header-nav-main-mobile-dark) nav>ul>li>a {
                color: #64B6AC !important;
            }

            #header .header-nav-main:not(.header-nav-main-mobile-dark) nav>ul>li>a.active,
            #header .header-nav.header-nav-links nav>ul:not(:hover)>li>a.active,
            #header .header-nav.header-nav-links nav>ul li:hover>a {
                background: #64B6AC !important;
                color: white !important;
            }
        }

        .btn-primary,
        .btn-primary:hover,
        .btn-primary.hover {
            border-color: #64B6AC !important;
            color: white !important;
        }

        .list.list-icons li>[class*="fa-"]:first-child,
        .list.list-icons li>.icons:first-child,
        .list.list-icons li a:first-child>[class*="fa-"]:first-child,
        .list.list-icons li a:first-child>.icons:first-child {
            border-color: #64B6AC !important;
            color: #64B6AC !important;
        }

        .toggle-primary .toggle label,
        .toggle-primary .toggle .toggle-title {
            color: #64B6AC !important;
            border-left-color: #64B6AC !important;
            border-right-color: #64B6AC !important;
        }

        .toggle-primary .toggle.active>label,
        .toggle-primary .toggle.active>.toggle-title {
            color: white !important;
            border-left-color: #64B6AC !important;
            border-right-color: #64B6AC !important;
            background-color: #64B6AC !important;
            border-color: #64B6AC !important;
        }
    </style>
    @stack('additional_css')
</head>

<body>

    @yield('content')

    <!-- Vendor -->
    <script src="/frontend/vendor/plugins/js/plugins.min.js"></script>
    <script src="/frontend/vendor/particles/particles.min.js"></script>

    <!-- Theme Base, Components and Settings -->
    <script src="/frontend/js/theme.js"></script>

    <!-- Demo -->
    <script src="/frontend/js/demos/demo-business-consulting-4.js"></script>

    <!-- Theme Custom -->
    <script src="/frontend/js/custom.js"></script>

    <!-- Theme Initialization Files -->
    <script src="/frontend/js/theme.init.js"></script>

    <!-- Theme Custom -->
    <script src="/frontend/vendor/bootpag/jquery.bootpag.min.js"></script>
    <script src="/frontend/js/examples/examples.portfolio.js"></script>

    @stack('additional_js')

</body>

</html>