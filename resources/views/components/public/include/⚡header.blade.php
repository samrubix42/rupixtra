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
                    <nav class="navbar navbar-expand-xl nav-shadow" id="#navbar">
                        <a class="navbar-brand" href="index.html"><img src="assets/images/logo.png" class="logo" alt="logo"></a>
                        <a class="navbar-toggler" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                            <i class="bi bi-list"></i>
                        </a>

                        <div class="collapse navbar-collapse ms-auto " id="navbar-content">
                            <div class="main-menu d-flex align-items-center">
                                <ul class="navbar-nav">
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Home </a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="index.html">Home One</a></li>
                                            <li><a class="dropdown-item" href="index-2.html">Home Two</a></li>
                                            <li><a class="dropdown-item" href="index-3.html">Home Three</a></li>
                                            <li><a class="dropdown-item" href="index-4.html">Home Four</a></li>
                                            <li><a class="dropdown-item" href="index-5.html">Home Five</a></li>
                                        </ul>
                                    </li> 
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Loan Reviews </a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="loan-reviews.html">Loan Reviews</a></li>
                                            <li><a class="dropdown-item" href="loan-reviews-details.html">Loan Reviews Details</a></li>
                                            <li><a class="dropdown-item" href="loan-reviews-details2.html">Loan Reviews Details 02</a></li>
                                        </ul>
                                    </li> 
                                    <li class="nav-item">
                                        <a class="nav-link" href="loan-comparison.html">Loan Comparison</a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Pages </a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="about.html">about Us</a></li>
                                            <li><a class="dropdown-item" href="service.html">service</a></li>
                                            <li><a class="dropdown-item" href="service-details.html">service details</a></li>
                                            <li><a class="dropdown-item" href="blog.html">Blog</a></li>
                                            <li><a class="dropdown-item" href="blog-details.html">Blog Details</a></li>
                                            <li><a class="dropdown-item" href="faq.html">FAQs</a></li>
                                            <li><a class="dropdown-item" href="sign-up.html">Sign Up</a></li>
                                            <li><a class="dropdown-item" href="error.html">404 Error Page</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="contact.html">Contact us</a>
                                    </li>
                                </ul>
                                <div class="nav-right d-none d-xl-block">
                                    <div class="nav-right__search">
                                        <form action="#" class="header-fiffrent-form d-xxl-flex d-none">
                                            <input type="text" placeholder="Search" required="">
                                            <button type="submit" class="search_icon"><i class="bi bi-search"></i></button>
                                        </form>
                                        <a href="javascript:void(0)" class="nav-right__search-icon btn_theme icon_box btn_bg_white d-xxl-none"> <i class="bi bi-search"></i> <span></span> </a>    
                                        <div class="language-box d-flex align-items-center justify-content-center position-relative">
                                            <select name="language">
                                                <option value="1">En</option>
                                                <option value="2">Es</option>
                                                <option value="3">Hy</option>
                                                <option value="3">De</option>
                                            </select>
                                            <i class="bi bi-globe icon"></i>
                                        </div>
                                        <a href="sign-in.html" class="btn_theme btn_theme_active">Sign In <i class="bi bi-arrow-up-right"></i><span></span></a>
                                    </div>
                                    <div class="nav-right__search-inner">
                                        <div class="nav-search-inner__form">
                                            <form method="POST" id="search" class="inner__form">
                                                <div class="input-group">
                                                    <input type="text" class="form-control" placeholder="Search" required="">
                                                    <button type="submit" class="search_icon"><i class="bi bi-search"></i></button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
</div>