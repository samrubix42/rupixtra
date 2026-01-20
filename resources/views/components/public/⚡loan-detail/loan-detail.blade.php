<div>
    <!-- Banner Start -->
    <section class="banner">
        <div class="container ">
            <div class="row gy-4 gy-sm-0 align-items-center">
                <div class="col-12 col-sm-6">
                    <div class="banner__content">
                        <h1 class="banner__title display-4 wow fadeInLeft" data-wow-duration="0.8s">Loan Reviews - details</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb wow fadeInRight" data-wow-duration="0.8s">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item">Loan Reviews</li>
                                <li class="breadcrumb-item active" aria-current="page">details</li>
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

    <!-- loan-reviews-details start -->
    <section class="reviews-details section">
        <div class="container ">
            <div class="row">
                <div class="col-12 col-xl-8 order-1 order-xl-0">
                    <div class="reviews-details__area">
                        <div class="reviews-details__part wow fadeInUp" data-wow-duration="0.8s">

                            <!-- INTRO CONTENT -->
                            <div class="section__content wow fadeInUp" data-wow-duration="0.8s">
                                <h2 class="section__content-title">
                                    Turn Your Dream Home into Reality with Rupixtra Home Loans
                                </h2>

                                <p class="section__content-text">
                                    Buy, build, or upgrade your home with Rupixtra’s easy and affordable home loan solutions.
                                    We help you access the best home loan offers from leading banks and NBFCs with competitive
                                    interest rates and expert guidance at every step.
                                </p>

                                <p class="section__content-text">
                                    A home loan is a secured loan offered to purchase, construct, renovate, or transfer an
                                    existing home loan. Since the property acts as collateral, home loans come with lower
                                    interest rates and longer repayment tenures, making them ideal for long-term financial
                                    planning.
                                </p>
                            </div>

                            <!-- HOME LOAN FEATURES -->
                            <div class="repayment section__content wow fadeInUp" data-wow-duration="0.8s">
                                <h3 class="section__content-title">Home Loan Features</h3>

                                <div class="section__content-inner-list">
                                    <ul class="bullet">
                                        <li><strong>Loan Amount:</strong> Up to ₹5 Crores*</li>
                                        <li><strong>Interest Rates:</strong> Starting from attractive market rates*</li>
                                        <li><strong>Tenure:</strong> Up to 30 years</li>
                                        <li><strong>Margin:</strong> As per lender guidelines</li>
                                        <li><strong>Prepayment:</strong> Allowed as per RBI norms</li>
                                    </ul>

                                    <p class="mt-3">
                                        <small>*Terms and conditions vary based on lender policies and applicant profile.</small>
                                    </p>
                                </div>
                            </div>

                            <!-- HOW TO APPLY -->
                            <div class="repayment section__content wow fadeInUp" data-wow-duration="0.8s">
                                <h3 class="section__content-title">
                                    How to Apply for a Home Loan with Rupixtra
                                </h3>

                                <div class="section__content-inner-list">
                                    <ol class="number">
                                        <li>
                                            Check Eligibility
                                            <ol class="bullet">
                                                <li>Share basic personal, employment, and income details.</li>
                                            </ol>
                                        </li>

                                        <li>
                                            Compare Lenders
                                            <ol class="bullet">
                                                <li>Choose the best interest rate, EMI, and tenure from top banks and NBFCs.</li>
                                            </ol>
                                        </li>

                                        <li>
                                            Document Submission
                                            <ol class="bullet">
                                                <li>Submit required documents through a simple and guided process.</li>
                                            </ol>
                                        </li>

                                        <li>
                                            Loan Approval
                                            <ol class="bullet">
                                                <li>Credit assessment and property verification by the lender.</li>
                                            </ol>
                                        </li>

                                        <li>
                                            Disbursal
                                            <ol class="bullet">
                                                <li>Loan amount is released as per construction or property purchase stage.</li>
                                            </ol>
                                        </li>
                                    </ol>
                                </div>
                            </div>

                            <!-- FOOT NOTE -->
                            <p class="wow fadeInUp" data-wow-duration="0.8s">
                                With Rupixtra, the home loan process is transparent, fast, and hassle-free.
                                Our experts guide you at every step — from eligibility check to final disbursal —
                                ensuring you make the right financial decision for your dream home.
                            </p>

                        </div>

                        <!-- Expandable Loan Comparison Cards -->
                        <div class="reviews-details__part mt-5">
                            <h3 class="mb-4 wow fadeInUp" data-wow-duration="0.8s">Compare Top Lenders</h3>
                            
                            @php
                                $lenders = [
                                    ['name' => 'Sarah Finance', 'image' => 'sarah.png', 'price' => 745, 'cosigner' => 'No'],
                                    ['name' => 'Varun Bank', 'image' => 'varun.png', 'price' => 314, 'cosigner' => 'Yes'],
                                    ['name' => 'Joseph Loans', 'image' => 'joseph.png', 'price' => 520, 'cosigner' => 'No'],
                                    ['name' => 'Power Finance', 'image' => 'power.png', 'price' => 680, 'cosigner' => 'Yes'],
                                    ['name' => 'Varun Pro', 'image' => 'varun2.png', 'price' => 430, 'cosigner' => 'No']
                                ];
                            @endphp

                            @foreach($lenders as $index => $lender)
                            <div class="card border-0 shadow-sm mb-4 wow fadeInUp" data-wow-duration="0.8s">
                                <div class="card-body p-4">
                                    <!-- Header Section -->
                                    <div class="row align-items-center mb-3 pb-3 border-bottom">
                                        <div class="col-md-8">
                                            <div class="d-flex align-items-center gap-3">
                                                <div class="lender-logo bg-light rounded p-2">
                                                    <img src="assets/images/{{ $lender['image'] }}" alt="{{ $lender['name'] }}" style="height: 50px; object-fit: contain;">
                                                </div>
                                                <div>
                                                    <h5 class="mb-0 fw-bold">{{ $lender['name'] }}</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 text-md-end mt-3 mt-md-0">
                                            <a href="{{ route('loan.details') }}" class="btn btn-primary px-4 py-2 mb-2 w-100 w-md-auto" style="background: #11274D; border: none;">
                                           Enquire now <i class="bi bi-arrow-up-right ms-1"></i>
                                            </a>
                                            @if($index === 0)
                                            <span class="badge bg-success d-block d-md-inline-block mt-2">Best Interest Rate</span>
                                            @endif
                                        </div>
                                    </div>

                                    <!-- Quick Info Grid -->
                                    <div class="row g-3 mb-3">
                                        <div class="col-md-4">
                                            <div class="p-3 bg-light rounded">
                                                <p class="text-muted small mb-1">Effective Interest</p>
                                                <h6 class="fw-bold mb-0">9.70 - 39.90%</h6>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="p-3 bg-light rounded">
                                                <p class="text-muted small mb-1">Age Limit</p>
                                                <h6 class="fw-bold mb-0">20 years</h6>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="p-3 bg-light rounded">
                                                <p class="text-muted small mb-1">Repayment Period</p>
                                                <h6 class="fw-bold mb-0">1 - 09 years</h6>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Expandable Details Button -->
                                    <div class="text-center pt-2 border-top">
                                        <button type="button" class="btn btn-link text-decoration-none fw-semibold" style="color: #11274D;" onclick="toggleLenderDetails(this, {{ $index }})">
                                            View Detailed Information <i class="bi bi-chevron-down ms-1"></i>
                                        </button>
                                    </div>

                                    <!-- Expandable Content -->
                                    <div class="view-content-wrap view-content-wrap-{{ $index }}" style="max-height: 0; overflow: hidden; transition: max-height 0.4s ease-in-out;">
                                        <div class="pt-4 mt-3 border-top">
                                            <h5 class="mb-3 fw-bold">About {{ $lender['name'] }}</h5>
                                            <p class="text-muted mb-0">{{ $lender['name'] }} is one of the trusted partner lenders offering loan amounts up to $100,000, making it ideal for financing large expenses like home improvements or weddings. Funds are available as soon as the same day you apply, with flexible repayment terms up to 12 years for certain loan types.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        
                        <script>
                            function toggleLenderDetails(button, index) {
                                const card = button.closest('.card');
                                const contentWrap = card.querySelector('.view-content-wrap-' + index);
                                const icon = button.querySelector('i');
                                
                                if (contentWrap.style.maxHeight && contentWrap.style.maxHeight !== '0px') {
                                    contentWrap.style.maxHeight = '0px';
                                    icon.classList.remove('bi-chevron-up');
                                    icon.classList.add('bi-chevron-down');
                                    button.innerHTML = 'View Detailed Information <i class="bi bi-chevron-down ms-1"></i>';
                                } else {
                                    contentWrap.style.maxHeight = contentWrap.scrollHeight + 'px';
                                    icon.classList.remove('bi-chevron-down');
                                    icon.classList.add('bi-chevron-up');
                                    button.innerHTML = 'Hide Detailed Information <i class="bi bi-chevron-up ms-1"></i>';
                                }
                            }
                        </script>

                        <style>
                            .lender-logo {
                                min-width: 80px;
                                display: flex;
                                align-items: center;
                                justify-content: center;
                            }
                            
                            .card {
                                transition: transform 0.2s ease, box-shadow 0.2s ease;
                            }
                            
                            .card:hover {
                                transform: translateY(-2px);
                                box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.1) !important;
                            }

                            /* Sidebar Responsive Styles */
                            @media (max-width: 1199.98px) {
                                .btn_sticky {
                                    position: static !important;
                                    display: block !important;
                                    visibility: visible !important;
                                    opacity: 1 !important;
                                    height: auto !important;
                                    overflow: visible !important;
                                }

                                .sidebar {
                                    position: static !important;
                                    top: auto !important;
                                    right: auto !important;
                                    left: auto !important;
                                    bottom: auto !important;
                                    width: 100% !important;
                                    max-width: 100% !important;
                                    margin-top: 30px !important;
                                    transform: none !important;
                                    display: block !important;
                                    visibility: visible !important;
                                    opacity: 1 !important;
                                    z-index: auto !important;
                                    height: auto !important;
                                    overflow: visible !important;
                                }

                                .sidebar_fixed,
                                .sidebar-xl-fixed {
                                    position: static !important;
                                    transform: none !important;
                                }

                                .col-12.col-xl-4.btn_sticky {
                                    order: 2 !important;
                                    display: block !important;
                                }

                                .col-12.col-xl-8 {
                                    order: 1 !important;
                                }

                                .sidebar__part {
                                    display: block !important;
                                    visibility: visible !important;
                                    opacity: 1 !important;
                                }
                            }
                        </style>
                    </div>
                </div>
                <div class="col-12 col-xl-4 btn_sticky">
                    <div class="sidebar sidebar_fixed sidebar-xl-fixed cus_scrollbar">
                        <div class="sidebar__part">
                            <h4 class="sidebar__part-title">Apply for a Loan</h4>

                            <form wire:submit.prevent="submitEnquiry" class="loan-form">

                                <!-- Name -->
                                <div class="mb-3">
                                    <label class="form-label">Full Name</label>
                                    <input type="text"
                                        class="form-control"
                                        placeholder="Enter your name"
                                        wire:model.defer="name">
                                </div>

                                <!-- Email -->
                                <div class="mb-3">
                                    <label class="form-label">Email Address</label>
                                    <input type="email"
                                        class="form-control"
                                        placeholder="Enter your email"
                                        wire:model.defer="email">
                                </div>

                                <!-- Phone -->
                                <div class="mb-3">
                                    <label class="form-label">Phone Number</label>
                                    <input type="text"
                                        class="form-control"
                                        placeholder="Enter your phone"
                                        wire:model.defer="phone">
                                </div>

                                <!-- Loan Category -->
                                <div class="mb-3">
                                    <label class="form-label">Loan Category</label>
                                    <select class="form-select"
                                        wire:model.defer="category">
                                        <option value="">Select Loan Type</option>
                                        <option value="personal">Personal Loan</option>
                                        <option value="home">Home Loan</option>
                                        <option value="car">Car Loan</option>
                                        <option value="business">Business Loan</option>
                                    </select>
                                </div>
                                <style>
                                    .loan-form .form-control,
                                    .loan-form .form-select {
                                        border-radius: 8px;
                                        padding: 10px 12px;
                                        font-size: 14px;
                                    }

                                    .loan-form label {
                                        font-weight: 500;
                                        font-size: 14px;
                                    }

                                    .loan-form textarea {
                                        resize: none;
                                    }
                                </style>

                                <!-- Message -->
                                <div class="mb-4">
                                    <label class="form-label">Message</label>
                                    <textarea class="form-control"
                                        rows="3"
                                        placeholder="Your requirement"
                                        wire:model.defer="message"></textarea>
                                </div>

                                <!-- Button -->
                                <button type="submit"
                                    class="btn_theme btn_theme_active w-100">
                                    Submit Enquiry
                                    <span></span>
                                </button>

                                <p class="d-flex align-items-center justify-content-center mt_12">
                                    <i class="bi bi-dot"></i>We will contact you within 24 hours
                                </p>

                            </form>
                        </div>

                       
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>