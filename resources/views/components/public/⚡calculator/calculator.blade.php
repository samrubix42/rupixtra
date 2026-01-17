<div>
    <!-- Banner Start -->
    <section class="banner">
        <div class="container ">
            <div class="row gy-4 gy-sm-0 align-items-center">
                <div class="col-12 col-sm-6">
                    <div class="banner__content">
                        <h1 class="banner__title display-4 wow fadeInLeft" data-wow-duration="0.8s">calculator</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb wow fadeInRight" data-wow-duration="0.8s">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item">pages</li>
                                <li class="breadcrumb-item active" aria-current="page">calculator</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <div class="col-12 col-sm-6">
                    <div class="banner__thumb text-end">
                        <img src="assets/images/about_banner.png" alt="image">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner End -->

    <!-- Calculator start -->
    <section class="calculator section" id="calculator">
        <div class="container">
            <div class="row gy-5 gy-xl-0 justify-content-between align-items-center">
                <div class="col-12 col-lg-6 col-xxl-5 mx-auto mx-lg-0">
                    <div class="calculator-input">
                        <div class="card card--custom calc">
                            <h3 class="text-start wow fadeInLeft" data-wow-duration="0.8s">Calculator</h3>
                            <div class="card--custom__loan">
                                <div class="card--custom__form">
                                    <div class="loan-wrapper">
                                        <form wire:submit.prevent="calculate" class="calculate__form">

                                            <div class="row gy-5">
                                                <!-- Loan 01 -->
                                                <div class="col-md-6">
                                                    <h5 class="calculator__title">Loan 01</h5>

                                                    <label>Loan Amount</label>
                                                    <input type="number" wire:model.defer="amount" placeholder="e.g. 500000">
                                                    @error('amount') <span class="error">{{ $message }}</span> @enderror

                                                    <label>Loan Term (Years)</label>
                                                    <input type="number" wire:model.defer="year" placeholder="e.g. 20">
                                                    @error('year') <span class="error">{{ $message }}</span> @enderror

                                                    <label>Interest Rate (%)</label>
                                                    <input type="number" wire:model.defer="interest" placeholder="e.g. 8.5">
                                                    @error('interest') <span class="error">{{ $message }}</span> @enderror

                                                    @if($emi1)
                                                    <div class="result">
                                                        <p><strong>EMI:</strong> ₹{{ number_format($emi1, 2) }}</p>
                                                        <p><strong>Total Interest:</strong> ₹{{ number_format($totalInterest1, 2) }}</p>
                                                        <p><strong>Total Payment:</strong> ₹{{ number_format($totalPayment1, 2) }}</p>
                                                    </div>
                                                    @endif
                                                </div>

                                                <!-- Loan 02 -->
                                                <div class="col-md-6">
                                                    <h5 class="calculator__title">Loan 02</h5>

                                                    <label>Loan Amount</label>
                                                    <input type="number" wire:model.defer="amount2" placeholder="e.g. 500000">
                                                    @error('amount2') <span class="error">{{ $message }}</span> @enderror

                                                    <label>Loan Term (Years)</label>
                                                    <input type="number" wire:model.defer="year2" placeholder="e.g. 20">
                                                    @error('year2') <span class="error">{{ $message }}</span> @enderror

                                                    <label>Interest Rate (%)</label>
                                                    <input type="number" wire:model.defer="interest2" placeholder="e.g. 8.5">
                                                    @error('interest2') <span class="error">{{ $message }}</span> @enderror

                                                    @if($emi2)
                                                    <div class="result">
                                                        <p><strong>EMI:</strong> ₹{{ number_format($emi2, 2) }}</p>
                                                        <p><strong>Total Interest:</strong> ₹{{ number_format($totalInterest2, 2) }}</p>
                                                        <p><strong>Total Payment:</strong> ₹{{ number_format($totalPayment2, 2) }}</p>
                                                    </div>
                                                    @endif
                                                </div>
                                            </div>

                                            <button class="btn_theme mt_40">Calculate Loan</button>

                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="card card--custom calculator-result">
                            <h3>Result</h3>
                            <div class="card--custom__loan">
                                <div class="card--custom__form">
                                    <div class="calculate__form">
                                        <div class="row gy-5 gy-md-0">
                                            <div class="col-12 col-md-6">
                                                <h5 class="calculator__title">Loan 01</h5>
                                                <div class="calculate__form-part">
                                                    <div class="input-single">
                                                        <label class="label">Monthly cost </label>
                                                        <p class="headingFour" id="monthly_cost"></p>
                                                    </div>
                                                    <div class="input-single">
                                                        <label class="label">Total cost</label>
                                                        <p class="headingFour" id="total_value"></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <h5 class="calculator__title">Loan 02</h5>
                                                <div class="calculate__form-part">
                                                    <div class="input-single">
                                                        <label class="label">Monthly cost </label>
                                                        <p class="headingFour" id="monthly_cost2"></p>
                                                    </div>
                                                    <div class="input-single">
                                                        <label class="label">Total cost</label>
                                                        <p class="headingFour" id="total_value2"></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 mt_32">
                                                <p class="note"><span class="">MORE:</span> Learn about the pros and cons of a shorter-term mortgage or how to get preapproved for a mortgage.</p>
                                                <a href="{{ route('home') }}" class="btn_theme btn_theme_active mt_40">Back <i class="bi bi-arrow-up-right"></i><span></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="section__content ms-lg-4 ms-xxl-0">
                        <span class="section__content-sub-title headingFour wow fadeInDown" data-wow-duration="0.8s"><img src="assets/images/title_vector.png" alt="vector"> Loan Calculators</span>
                        <h2 class="section__content-title wow fadeInUp" data-wow-duration="0.8s">Empower Yourself with Accurate Loan Estimates</h2>
                        <p class="section__content-text wow fadeInDown" data-wow-duration="0.8s">Our loan calculators are powerful tools designed to assist you in making informed financial decisions. Whether you're planning a major purchase, estimating monthly payments</p>
                        <ul class="section__content-list wow fadeInUp" data-wow-duration="0.8s">
                            <li class="headingFive">Loan Payment Calculator</li>
                            <li class="headingFive">Amortization Calculator</li>
                            <li class="headingFive">Affordability Calculator</li>
                            <li class="headingFive">Interest Calculator</li>
                        </ul>
                        <a href="loan-reviews.html" class="btn_theme btn_theme_active mt_40 wow fadeInDown" data-wow-duration="0.8s">Browse Loan Review <i class="bi bi-arrow-up-right"></i><span></span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <style>
        .loan-wrapper {
            max-width: 900px;
            margin: auto;
        }

        input {
            width: 100%;
            padding: 10px;
            border-radius: 6px;
            border: 1px solid #ddd;
            margin-bottom: 10px;
        }

        input:focus {
            border-color: #112f54;
            outline: none;
        }

        .error {
            color: #dc2626;
            font-size: 13px;
        }

        .result {
            background: #f8fafc;
            padding: 12px;
            border-radius: 8px;
            margin-top: 12px;
        }

        .btn_theme {
            background: #112f54;
            color: #fff;
            padding: 12px 28px;
            border-radius: 8px;
            border: none;
        }
    </style>
    <!-- Calculator end -->
</div>