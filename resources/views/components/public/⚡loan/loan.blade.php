
<div>
 <!-- Banner Start -->
    <section class="banner">
        <div class="container ">
            <div class="row gy-4 gy-sm-0 align-items-center">
                <div class="col-12 col-sm-6">
                    <div class="banner__content">
                        <h1 class="banner__title display-4 wow fadeInLeft" data-wow-duration="0.8s">Loan Reviews</h1> 
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb wow fadeInRight" data-wow-duration="0.8s">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Loan Reviews</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <div class="col-12 col-sm-6">
                    <div class="banner__thumb text-end">
                        <img src="assets/images/reviews_banner.png" alt="image">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner End -->
    
    <!-- loan-reviews page start -->
    <section class="loan-reviews loan-reviews--tertiary section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-11 col-xl-9 col-xxl-4 btn_sticky">
                    <div class="d-inline-block d-xxl-none mb-4">
                        <button class="sidebar_btn"> <i class="bi bi-layout-text-sidebar"></i> <span>Sidebar Filter</span></button>    
                    </div>
                    <div class="sidebar-filter cus_scrollbar sidebar-xxl-fixed">
                        <div class="sidebar-filter__part">
                            <h4 class="sidebar-filter__title">Filter</h4>
                        </div>
                        <div class="sidebar-filter__part">
                            <form method="POST" id="filter_search" class="filter__search">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search" required="">
                                    <button type="submit" class="search_icon"><i class="bi bi-search"></i></button>
                                </div>
                            </form>
                        </div>
                        <div class="sidebar-filter__part">
                            <h5 class="sidebar-filter__part-title">Types of Loan Categories</h5>
                            <ul class="query">
                                <li class="query__list">
                                    <div class="query__label">
                                        <input type="checkbox" name="query_personal" id="queryPersonal" checked="">
                                        <label for="queryPersonal">Personal Loan</label>
                                    </div>
                                    <div class="query_value">586</div>
                                </li>
                                <li class="query__list">
                                    <div class="query__label">
                                        <input type="checkbox" name="mortgage_loan" id="querypersonal" checked="">
                                        <label for="querypersonal">Mortgage Loan</label>
                                    </div>
                                    <div class="query_value">145</div>
                                </li>
                                <li class="query__list">
                                    <div class="query__label">
                                        <input type="checkbox" name="query_student" id="queryStudent" checked="">
                                        <label for="queryStudent">Student Loan</label>
                                    </div>
                                    <div class="query_value">546</div>
                                </li>
                                <li class="query__list">
                                    <div class="query__label">
                                        <input type="checkbox" name="query_business" id="queryBusiness" checked="">
                                        <label for="queryBusiness">Business Loan</label>
                                    </div>
                                    <div class="query_value">625</div>
                                </li>
                                <li class="query__list">
                                    <div class="query__label">
                                        <input type="checkbox" name="query_home" id="queryHome" checked="" checked="">
                                        <label for="queryHome">Home Equity Loan</label>
                                    </div>
                                    <div class="query_value">415</div>
                                </li>
                                <li class="query__list">
                                    <div class="query__label">
                                        <input type="checkbox" name="query_debt" id="queryDebt" checked="">
                                        <label for="queryDebt">Debt Consolidation Loan</label>
                                    </div>
                                    <div class="query_value">642</div>
                                </li>
                                <li class="query__list">
                                    <div class="query__label">
                                        <input type="checkbox" name="query_construction" id="queryConstruction" checked="">
                                        <label for="queryConstruction">Construction Loan</label>
                                    </div>
                                    <div class="query_value">255</div>
                                </li>
                                <li class="query__list">
                                    <div class="query__label">
                                        <input type="checkbox" name="query_equipment" id="queryEquipment" checked="">
                                        <label for="queryEquipment">Equipment Loan</label>
                                    </div>
                                    <div class="query_value">142</div>
                                </li>
                                <li class="query__list">
                                    <div class="query__label">
                                        <input type="checkbox" name="query_medical" id="queryMedical" checked="">
                                        <label for="queryMedical">Medical Loan</label>
                                    </div>
                                    <div class="query_value">325</div>
                                </li>
                                <li class="query__list">
                                    <div class="query__label">
                                        <input type="checkbox" name="query_wedding" id="queryWedding" checked="">
                                        <label for="queryWedding">Wedding Loan</label>
                                    </div>
                                    <div class="query_value">652</div>
                                </li>
                                <li class="query__list">
                                    <div class="query__label">
                                        <input type="checkbox" name="query_vacation" id="queryVacation" checked="">
                                        <label for="queryVacation">Vacation Loan</label>
                                    </div>
                                    <div class="query_value">415</div>
                                </li>
                                <li class="query__list">
                                    <div class="query__label">
                                        <input type="checkbox" name="query_renovation" id="queryRenovation" checked="">
                                        <label for="queryRenovation">Renovation Loan</label>
                                    </div>
                                    <div class="query_value">745</div>
                                </li>
                            </ul>
                        </div>
           
      
                           
                        <button type="submit" class="btn_theme">Reset Filters<i class="bi bi-arrow-up-right"></i><span></span></button>
                    </div>
                </div>
                <div class="col-12 col-lg-11 col-xl-9 col-xxl-8">
                    <div class="d-flex flex-column gap-4">
                        <div class="loan-reviews_card card wow fadeInUp" data-wow-duration="0.8s">
                            <div class="loan-reviews__part-one">
                                <div class="loan-reviews__thumb">
                                    <img src="assets/images/loan_reviews_logo.png" alt="image">
                                </div>
                                <div class="loan-reviews__review">
                                    <p class="rating"> 4.9</p>
                                    <div class="d-flex gap-2 flex-column">
                                        <div class="star_review">
                                            <i class="bi bi-star-fill star-active"></i>
                                            <i class="bi bi-star-fill star-active"></i>
                                            <i class="bi bi-star-fill star-active"></i>
                                            <i class="bi bi-star-fill star-active"></i>
                                            <i class="bi bi-star-half star-active"></i>
                                        </div>
                                        <p class="fs-small">Average Review</p>
                                    </div>
                                </div>
                            </div>
                            <div class="loan-reviews__part-two">
                                <div class="reviews-heading">
                                    <h4 class="reviews-heading__title">Home Loans Mortgages</h4>
                                    <p class="reviews-heading__content">America’s Largest online mortgage lender</p>
                                </div>
                                <div class="reviews-inner">
                                    <ul>
                                        <li><i class="bi bi-check2-circle"></i> Certified pre-approval Process</li>
                                        <li><i class="bi bi-check2-circle"></i> Online Application Available 24/7</li>
                                        <li><i class="bi bi-check2-circle"></i>Find a Quote Easily</li>
                                        <li><i class="bi bi-check2-circle"></i>100% Online Refinance</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="loan-reviews__part-three">
                                <div class="btn-group">
                                    <a href="#" class="btn_theme btn_theme_active">Visit Site<i class="bi bi-arrow-up-right"></i><span></span></a>
                                    <a href="loan-reviews-details.html" class="btn_theme">Read More<i class="bi bi-arrow-up-right"></i><span></span></a>
                                    <a href="faq.html" class="conditions_apply"> Terms & Conditions Apply</a>
                                </div>
                            </div>
                        </div>
                        <div class="loan-reviews_card card wow fadeInUp" data-wow-duration="0.8s">
                            <div class="loan-reviews__part-one">
                                <div class="loan-reviews__thumb">
                                    <img src="assets/images/loan_reviews_logo2.png" alt="image">
                                </div>
                                <div class="loan-reviews__review">
                                    <p class="rating"> 4.9</p>
                                    <div class="d-flex gap-2 flex-column">
                                        <div class="star_review">
                                            <i class="bi bi-star-fill star-active"></i>
                                            <i class="bi bi-star-fill star-active"></i>
                                            <i class="bi bi-star-fill star-active"></i>
                                            <i class="bi bi-star-fill star-active"></i>
                                            <i class="bi bi-star-half star-active"></i>
                                        </div>
                                        <p class="fs-small">Average Review</p>
                                    </div>
                                </div>
                            </div>
                            <div class="loan-reviews__part-two">
                                <div class="reviews-heading">
                                    <h4 class="reviews-heading__title">Student Loans</h4>
                                    <p class="reviews-heading__content">Canada Largest online mortgage lender</p>
                                </div>
                                <div class="reviews-inner">
                                    <ul>
                                        <li><i class="bi bi-check2-circle"></i> Certified pre-approval Process</li>
                                        <li><i class="bi bi-check2-circle"></i> Online Application Available 24/7</li>
                                        <li><i class="bi bi-check2-circle"></i>Find a Quote Easily</li>
                                        <li><i class="bi bi-check2-circle"></i>100% Online Refinance</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="loan-reviews__part-three">
                                <div class="btn-group">
                                     <a href="#" class="btn_theme btn_theme_active">Visit Site<i class="bi bi-arrow-up-right"></i><span></span></a>
                                    <a href="loan-reviews-details.html" class="btn_theme">Read More<i class="bi bi-arrow-up-right"></i><span></span></a>
                                    <a href="faq.html" class="conditions_apply"> Terms & Conditions Apply</a>
                                </div>
                            </div>
                        </div>
                        <div class="loan-reviews_card card wow fadeInUp" data-wow-duration="0.8s">
                            <div class="loan-reviews__part-one">
                                <div class="loan-reviews__thumb">
                                    <img src="assets/images/loan_reviews_logo3.png" alt="image">
                                </div>
                                <div class="loan-reviews__review">
                                    <p class="rating"> 4.9</p>
                                    <div class="d-flex gap-2 flex-column">
                                        <div class="star_review">
                                            <i class="bi bi-star-fill star-active"></i>
                                            <i class="bi bi-star-fill star-active"></i>
                                            <i class="bi bi-star-fill star-active"></i>
                                            <i class="bi bi-star-fill star-active"></i>
                                            <i class="bi bi-star-half star-active"></i>
                                        </div>
                                        <p class="fs-small">Average Review</p>
                                    </div>
                                </div>
                            </div>
                            <div class="loan-reviews__part-two">
                                <div class="reviews-heading">
                                    <h4 class="reviews-heading__title">Business Loans</h4>
                                    <p class="reviews-heading__content">Japanes Largest online mortgage lender</p>
                                </div>
                                <div class="reviews-inner">
                                    <ul>
                                        <li><i class="bi bi-check2-circle"></i> Certified pre-approval Process</li>
                                        <li><i class="bi bi-check2-circle"></i> Online Application Available 24/7</li>
                                        <li><i class="bi bi-check2-circle"></i>Find a Quote Easily</li>
                                        <li><i class="bi bi-check2-circle"></i>100% Online Refinance</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="loan-reviews__part-three">
                                <div class="btn-group">
                                     <a href="#" class="btn_theme btn_theme_active">Visit Site<i class="bi bi-arrow-up-right"></i><span></span></a>
                                    <a href="loan-reviews-details.html" class="btn_theme">Read More<i class="bi bi-arrow-up-right"></i><span></span></a>
                                    <a href="faq.html" class="conditions_apply"> Terms & Conditions Apply</a>
                                </div>
                            </div>
                        </div>
                        <div class="loan-reviews_card card wow fadeInUp" data-wow-duration="0.8s">
                            <div class="loan-reviews__part-one">
                                <div class="loan-reviews__thumb">
                                    <img src="assets/images/loan_reviews_logo4.png" alt="image">
                                </div>
                                <div class="loan-reviews__review">
                                    <p class="rating"> 4.9</p>
                                    <div class="d-flex gap-2 flex-column">
                                        <div class="star_review">
                                            <i class="bi bi-star-fill star-active"></i>
                                            <i class="bi bi-star-fill star-active"></i>
                                            <i class="bi bi-star-fill star-active"></i>
                                            <i class="bi bi-star-fill star-active"></i>
                                            <i class="bi bi-star-half star-active"></i>
                                        </div>
                                        <p class="fs-small">Average Review</p>
                                    </div>
                                </div>
                            </div>
                            <div class="loan-reviews__part-two">
                                <div class="reviews-heading">
                                    <h4 class="reviews-heading__title">Construction Loans</h4>
                                    <p class="reviews-heading__content">America’s Largest online mortgage lender</p>
                                </div>
                                <div class="reviews-inner">
                                    <ul>
                                        <li><i class="bi bi-check2-circle"></i> Certified pre-approval Process</li>
                                        <li><i class="bi bi-check2-circle"></i> Online Application Available 24/7</li>
                                        <li><i class="bi bi-check2-circle"></i>Find a Quote Easily</li>
                                        <li><i class="bi bi-check2-circle"></i>100% Online Refinance</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="loan-reviews__part-three">
                                <div class="btn-group">
                                     <a href="#" class="btn_theme btn_theme_active">Visit Site<i class="bi bi-arrow-up-right"></i><span></span></a>
                                    <a href="loan-reviews-details.html" class="btn_theme">Read More<i class="bi bi-arrow-up-right"></i><span></span></a>
                                    <a href="faq.html" class="conditions_apply"> Terms & Conditions Apply</a>
                                </div>
                            </div>
                        </div>
                        <div class="loan-reviews_card card wow fadeInUp" data-wow-duration="0.8s">
                            <div class="loan-reviews__part-one">
                                <div class="loan-reviews__thumb">
                                    <img src="assets/images/loan_reviews_logo5.png" alt="image">
                                </div>
                                <div class="loan-reviews__review">
                                    <p class="rating"> 4.9</p>
                                    <div class="d-flex gap-2 flex-column">
                                        <div class="star_review">
                                            <i class="bi bi-star-fill star-active"></i>
                                            <i class="bi bi-star-fill star-active"></i>
                                            <i class="bi bi-star-fill star-active"></i>
                                            <i class="bi bi-star-fill star-active"></i>
                                            <i class="bi bi-star-half star-active"></i>
                                        </div>
                                        <p class="fs-small">Average Review</p>
                                    </div>
                                </div>
                            </div>
                            <div class="loan-reviews__part-two">
                                <div class="reviews-heading">
                                    <h4 class="reviews-heading__title">Equipment Loan</h4>
                                    <p class="reviews-heading__content">America’s Largest online mortgage lender</p>
                                </div>
                                <div class="reviews-inner">
                                    <ul>
                                        <li><i class="bi bi-check2-circle"></i> Certified pre-approval Process</li>
                                        <li><i class="bi bi-check2-circle"></i> Online Application Available 24/7</li>
                                        <li><i class="bi bi-check2-circle"></i>Find a Quote Easily</li>
                                        <li><i class="bi bi-check2-circle"></i>100% Online Refinance</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="loan-reviews__part-three">
                                <div class="btn-group">
                                     <a href="#" class="btn_theme btn_theme_active">Visit Site<i class="bi bi-arrow-up-right"></i><span></span></a>
                                    <a href="loan-reviews-details.html" class="btn_theme">Read More<i class="bi bi-arrow-up-right"></i><span></span></a>
                                    <a href="faq.html" class="conditions_apply"> Terms & Conditions Apply</a>
                                </div>
                            </div>
                        </div>
                        <div class="loan-reviews_card card wow fadeInUp" data-wow-duration="0.8s">
                            <div class="loan-reviews__part-one">
                                <div class="loan-reviews__thumb">
                                    <img src="assets/images/loan_reviews_logo6.png" alt="image">
                                </div>
                                <div class="loan-reviews__review">
                                    <p class="rating"> 4.9</p>
                                    <div class="d-flex gap-2 flex-column">
                                        <div class="star_review">
                                            <i class="bi bi-star-fill star-active"></i>
                                            <i class="bi bi-star-fill star-active"></i>
                                            <i class="bi bi-star-fill star-active"></i>
                                            <i class="bi bi-star-fill star-active"></i>
                                            <i class="bi bi-star-half star-active"></i>
                                        </div>
                                        <p class="fs-small">Average Review</p>
                                    </div>
                                </div>
                            </div>
                            <div class="loan-reviews__part-two">
                                <div class="reviews-heading">
                                    <h4 class="reviews-heading__title">Medical Loan</h4>
                                    <p class="reviews-heading__content">America’s Largest online mortgage lender</p>
                                </div>
                                <div class="reviews-inner">
                                    <ul>
                                        <li><i class="bi bi-check2-circle"></i> Certified pre-approval Process</li>
                                        <li><i class="bi bi-check2-circle"></i> Online Application Available 24/7</li>
                                        <li><i class="bi bi-check2-circle"></i>Find a Quote Easily</li>
                                        <li><i class="bi bi-check2-circle"></i>100% Online Refinance</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="loan-reviews__part-three">
                                <div class="btn-group">
                                     <a href="#" class="btn_theme btn_theme_active">Visit Site<i class="bi bi-arrow-up-right"></i><span></span></a>
                                    <a href="loan-reviews-details.html" class="btn_theme">Read More<i class="bi bi-arrow-up-right"></i><span></span></a>
                                    <a href="faq.html" class="conditions_apply"> Terms & Conditions Apply</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <nav aria-label="Page navigation" class="nav_pagination wow fadeInUp" data-wow-duration="0.8s">
                                <ul class="pagination">
                                    <li class="page-item"><a class="page-link" href="#">
                                        <span class="prev-icon"></span>
                                    </a></li>
                                    <li class="page-item"><a class="page-link active" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link three_dots_box" href="#">
                                        <span class="three-dots"> </span></a></li>
                                    <li class="page-item"><a class="page-link" href="#">5</a></li>
                                    <li class="page-item"><a class="page-link" href="#">
                                        <span class="next-icon"></span>
                                    </a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- loan-reviews end -->
    </div>