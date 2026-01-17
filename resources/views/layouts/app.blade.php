<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- required meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- #favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}" type="image/x-icon">

    <!-- #title -->
    <title>{{ $title ?? config('app.name') }}</title>

    <!-- #keywords -->
    <meta name="keywords" content="FINVIEW, Financial Loan, Financial Loan Review and Comparison">

    <!-- #description -->
    <meta name="description" content="FINVIEW HTML5 Template">

    <!--  css dependencies start  -->

    <!-- bootstrap five css -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}">
    <!-- bootstrap-icons css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <!-- nice select css -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/nice-select/css/nice-select.css') }}">
    <!-- magnific popup css -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/magnific-popup/css/magnific-popup.css') }}">
    <!-- slick css -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/slick/css/slick.css') }}">
    <!-- odometer css -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/odometer/css/odometer.css') }}">
    <!-- animate css -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/animate/animate.css') }}">
    <!--  / css dependencies end  -->

    <!-- main css -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    @livewireStyles
</head>

<body>

    <livewire:public.include.header />
    {{ $slot }}
    <livewire:public.include.footer />

    <!-- scroll to top -->
    <a href="#" class="scrollToTop"><i class="bi bi-chevron-double-up"></i></a>

    <!--  js dependencies start  -->

    <!-- jquery -->
    <script src="{{ asset('assets/vendor/jquery/jquery-3.6.3.min.js') }}"></script>
    <!-- bootstrap five js -->
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- nice select js -->
    <script src="{{ asset('assets/vendor/nice-select/js/jquery.nice-select.min.js') }}"></script>
    <!-- magnific popup js -->
    <script src="{{ asset('assets/vendor/magnific-popup/js/jquery.magnific-popup.min.js') }}"></script>
    <!-- circular-progress-bar -->
    <script src="https://cdn.jsdelivr.net/gh/tomik23/circular-progress-bar@latest/docs/circularProgressBar.min.js"></script>
    <!-- slick js -->
    <script src="{{ asset('assets/vendor/slick/js/slick.min.js') }}"></script>
    <!-- odometer js -->
    <script src="{{ asset('assets/vendor/odometer/js/odometer.min.js') }}"></script>
    <!-- viewport js -->
    <script src="{{ asset('assets/vendor/viewport/viewport.jquery.js') }}"></script>
    <!-- jquery ui js -->
    <script src="{{ asset('assets/vendor/jquery-ui/jquery-ui.min.js') }}"></script>
    <!-- wow js -->
    <script src="{{ asset('assets/vendor/wow/wow.min.js') }}"></script>
    <!-- apexcharts -->
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <!-- jquery validate -->
    <script src="{{ asset('assets/vendor/jquery-validate/jquery.validate.min.js') }}"></script>

    <!-- alpine js -->

    <!--  / js dependencies end  -->

    <!-- plugins js -->
    <script src="{{ asset('assets/js/plugins.js') }}"></script>
    <!-- main js -->
    <script src="{{ asset('assets/js/main.js') }}"></script>

    @livewireScripts
</body>

</html>