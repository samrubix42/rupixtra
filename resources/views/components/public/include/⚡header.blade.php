<?php

use Livewire\Component;

new class extends Component
{
    //
};
?>

<div>
    <header class="header-section header-version3">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <style>
                        .logo {
                            height: 60px;
                            /* Desktop default */
                            transition: height 0.3s ease;
                        }

                        @media (max-width: 768px) {
                            .logo {
                                height: 40px !important;
                                /* Tablet & Mobile */
                            }
                        }

                        @media (max-width: 480px) {
                            .logo {
                                height: 32px !important;
                                /* Small phones */
                            }
                        }
                    </style>
                    <nav class="navbar navbar-expand-xl nav-shadow" id="#navbar">
                        <a class="navbar-brand" href="{{ route('home') }}"><img src="{{asset('images/logo-dark.png')}}" class="logo" alt="logo"></a>
                        <a class="navbar-toggler" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                            <i class="bi bi-list"></i>
                        </a>


                        <div class="collapse navbar-collapse ms-auto " id="navbar-content">
                            <div class="main-menu d-flex align-items-center justify-content-between w-100">
                                <ul class="navbar-nav">
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('home') }}"> Home </a>
                                    </li>
                                    <li class="nav-item dropdown">
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('about') }}">Our Story</a>
                                    </li>

                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="{{ route('loan.reviews') }}" data-bs-toggle="dropdown" aria-expanded="false">Loans</a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="{{ route('loan.details') }}">Personal loan</a></li>
                                            <li><a class="dropdown-item" href="{{ route('loan.details') }}">Home Loan</a></li>
                                            <li><a class="dropdown-item" href="{{ route('loan.details') }}">Bussiness Loan</a></li>
                                            <li><a class="dropdown-item" href="{{ route('loan.details') }}">Lap</a></li>
                                            <li><a class="dropdown-item" href="{{ route('loan.details') }}">Self-Employed Pro Loan</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('calculator') }}">Calulator</a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Our Offerings </a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="{{ route('credit.cards') }}">Credit Cards</a></li>
                                            <li><a class="dropdown-item" href="{{ route('mutual.funds') }}">Mutual Funds</a></li>
                                            <li><a class="dropdown-item" href="{{ route('life.insurance') }}">Life Insurance</a></li>

                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('blog') }}">Blog</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('contact') }}">Reach Us</a>
                                    </li>
                                </ul>
                                <div class="nav-right d-none d-xl-block">
                                    <div class="nav-right__search">
                                        <a href="{{ route('contact') }}" class="btn_theme btn_theme_active">Quick Enquiry <i class="bi bi-arrow-up-right"></i><span></span></a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <div class="offcanvas offcanvas-end " tabindex="-1" id="offcanvasRight">
        <div class="offcanvas-body custom-nevbar">
            <div class="row">
                <div class="col-md-7 col-xl-8">
                    <div class="custom-nevbar__left">
                        <button type="button" class="close-icon d-md-none ms-auto" data-bs-dismiss="offcanvas" aria-label="Close"><i class="bi bi-x"></i></button>
                        <ul class="custom-nevbar__nav mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('about') }}"> Our story </a>
                            </li>
                            <li class="menu_item">
                                <a class="menu_link" href="{{ route('home') }}">Home</a>
                            </li>
                            <li class="menu_item dropdown">
                                <a class="menu_link dropdown-toggle" href="{{ route('loan.reviews') }}" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Loans </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="{{ route('loan.details') }}">Personal Loan</a></li>
                                    <li><a class="dropdown-item" href="{{ route('loan.details') }}">Home Loan</a></li>
                                    <li><a class="dropdown-item" href="{{ route('loan.details') }}">Business Loan</a></li>
                                    <li><a class="dropdown-item" href="{{ route('loan.details') }}">LAP</a></li>
                                    <li><a class="dropdown-item" href="{{ route('loan.details') }}">Self-Employed Pro Loan</a></li>
                                </ul>
                            </li>
                            <li class="menu_item">
                                <a class="menu_link" href="{{ route('calculator') }}">calculator</a>
                            </li>
                            <li class="menu_item dropdown">
                                <a class="menu_link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Our Offerings </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="{{ route('credit.cards') }}">Credit Cards</a></li>
                                    <li><a class="dropdown-item" href="{{ route('mutual.funds') }}">Mutual Funds</a></li>
                                    <li><a class="dropdown-item" href="{{ route('life.insurance') }}">Life Insurance</a></li>
                                </ul>
                            </li>
                            <li class="menu_item">
                                <a class="menu_link" href="{{ route('blog') }}">Blog</a>
                            </li>
                            <li class="menu_item">
                                <a class="menu_link" href="{{ route('contact') }}">Reach Us</a>
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
                                <a href="/cdn-cgi/l/email-protection#8cc5e2eae3ccebe1ede5e0a2efe3e1" class="fs-4 contact"><span class="__cf_email__" data-cfemail="440d2a222b042329252d286a272b29">[email&#160;protected]</span></a>
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
</div>