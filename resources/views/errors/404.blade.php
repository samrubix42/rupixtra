<!DOCTYPE html>
<html lang="en">

<head>
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
</head>

<body>



    <livewire:public.include.header />
    <!-- Offcanvas More info-->
    <div class="offcanvas offcanvas-end " tabindex="-1" id="offcanvasRight">
        <div class="offcanvas-body custom-nevbar">
            <div class="row">
                <div class="col-md-7 col-xl-8">
                    <div class="custom-nevbar__left">
                        <button type="button" class="close-icon d-md-none ms-auto" data-bs-dismiss="offcanvas" aria-label="Close"><i class="bi bi-x"></i></button>
                        <ul class="custom-nevbar__nav mb-lg-0">
                            <li class="menu_item dropdown">
                                <a class="menu_link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Home </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="index.html">Home One</a></li>
                                    <li><a class="dropdown-item" href="index-2.html">Home Two</a></li>
                                    <li><a class="dropdown-item" href="index-3.html">Home Three</a></li>
                                    <li><a class="dropdown-item" href="index-4.html">Home Four</a></li>
                                    <li><a class="dropdown-item" href="index-5.html">Home Five</a></li>
                                </ul>
                            </li>
                            <li class="menu_item dropdown">
                                <a class="menu_link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Loan Reviews </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="loan-reviews.html">Loan Reviews</a></li>
                                    <li><a class="dropdown-item" href="loan-reviews-details.html">Loan Reviews Details</a></li>
                                    <li><a class="dropdown-item" href="loan-reviews-details2.html">Loan Reviews Details 02</a></li>
                                </ul>
                            </li>
                            <li class="menu_item">
                                <a class="menu_link" href="loan-comparison.html">Loan Comparison</a>
                            </li>
                            <li class="menu_item dropdown">
                                <a class="menu_link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Pages </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="about.html">about us</a></li>
                                    <li><a class="dropdown-item" href="service.html">service</a></li>
                                    <li><a class="dropdown-item" href="service-details.html">service details</a></li>
                                    <li><a class="dropdown-item" href="blog.html">blog</a></li>
                                    <li><a class="dropdown-item" href="blog-details.html">blog Details</a></li>
                                    <li><a class="dropdown-item" href="faq.html">FAQs</a></li>
                                    <li><a class="dropdown-item" href="sign-up.html">sign up</a></li>
                                    <li><a class="dropdown-item" href="error.html">404 Error Page</a></li>
                                </ul>
                            </li>
                            <li class="menu_item">
                                <a class="menu_link" href="contact.html">contact us</a>
                            </li>
                            <li class="menu_item">
                                <a class="menu_link" href="sign-in.html">sign in</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-5 col-xl-4">
                    <div class="custom-nevbar__right">
                        <div class="custom-nevbar__top d-none d-md-block">
                            <button type="button" class="close-icon ms-auto" data-bs-dismiss="offcanvas" aria-label="Close"><i class="bi bi-x"></i></button>
                            <div class="custom-nevbar__right-thumb mb-auto">
                                <img src="assets/images/logo.png" alt="logo">
                            </div>
                        </div>
                        <ul class="custom-nevbar__right-location">
                            <li>
                                <p class="mb-2">Phone: </p>
                                <a href="tel:+123456789" class="fs-4 contact">+123 456 789</a>
                            </li>
                            <li class="location">
                                <p class="mb-2">Email: </p>
                                <a href="/cdn-cgi/l/email-protection#83caede5ecc3e4eee2eaefade0ecee" class="fs-4 contact"><span class="__cf_email__" data-cfemail="3c75525a537c5b515d5550125f5351">[email&#160;protected]</span></a>
                            </li>
                            <li class="location">
                                <p class="mb-2">Location: </p>
                                <p class="fs-4 contact">6391 Celina, Delaware 10299</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- header-section end -->

    <!-- Banner Start -->
    <section class="banner">
        <div class="container ">
            <div class="row gy-4 gy-sm-0 align-items-center">
                <div class="col-12 col-sm-6">
                    <div class="banner__content">
                        <h1 class="banner__title display-4 wow fadeInLeft" data-wow-duration="0.8s">404 Error Page</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb wow fadeInRight" data-wow-duration="0.8s">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item">pages</li>
                                <li class="breadcrumb-item active" aria-current="page">404 Error Page</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <div class="col-12 col-sm-6">
                    <div class="banner__thumb text-end">
                        <img src="assets/images/error_banner.png" alt="image">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner End -->

    <!-- error page start -->
    <section class="error-page text-center section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-9 col-xxl-8">
                    <div class="error-page__thumb wow fadeInDown" data-wow-duration="0.8s">
                        <img src="assets/images/error_page.png" alt="images">
                    </div>
                </div>
                <div class="col-12 col-md-8 col-xxl-6">
                    <div class="section__content mt-5">
                        <h2 class="section__content-title wow fadeInUp" data-wow-duration="0.8s">Oops! Page Not Found</h2>
                        <p class=" wow fadeInDown" data-wow-duration="0.8s">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        <a href="index-2.html" class="btn_theme btn_theme_active mt_40  wow fadeInUp" data-wow-duration="0.8s">Back To Home<i class="bi bi-arrow-up-right"></i><span></span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- error page end -->

    <livewire:public.include.footer />
    <!-- Footer Area End -->

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

    <!--  / js dependencies end  -->

    <!-- plugins js -->
    <script src="{{ asset('assets/js/plugins.js') }}"></script>
    <!-- main js -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>

</html>