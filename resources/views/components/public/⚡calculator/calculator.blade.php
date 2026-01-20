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

<section class="emi-wrapper py-5">
    <div class="container">

        <!-- TABS -->
        <div class="emi-tabs mb-5">
            <button class="emi-tab {{ $type=='personal' ? 'active' : '' }}"
                wire:click="setType('personal')">
                Personal Loan
            </button>
            <button class="emi-tab {{ $type=='home' ? 'active' : '' }}"
                wire:click="setType('home')">
                Home Loan
            </button>
            <button class="emi-tab {{ $type=='car' ? 'active' : '' }}"
                wire:click="setType('car')">
                Car Loan
            </button>
        </div>

        <div class="row g-4 align-items-stretch">

            <!-- LEFT -->
            <div class="col-lg-7">
                <div class="emi-card h-100">

                    <!-- Loan Amount -->
                    <div class="emi-field">
                        <div class="field-head">
                            <label>Loan Amount</label>
                            <span class="value">₹ {{ number_format($amount) }}</span>
                        </div>
                        <input type="range"
                            min="50000"
                            max="50000000"
                            step="1000"
                            wire:model.live="amount"
                            class="emi-range">
                    </div>

                    <!-- Interest -->
                    <div class="emi-field">
                        <div class="field-head">
                            <label>Interest Rate</label>
                            <span class="value">{{ $interest }}%</span>
                        </div>
                        <input type="range"
                            min="5"
                            max="22"
                            step="0.01"
                            wire:model.live="interest"
                            class="emi-range">
                    </div>

                    <!-- Tenure -->
                    <div class="emi-field">
                        <div class="field-head">
                            <label>
                                Tenure ({{ $type === 'personal' ? 'Months' : 'Years' }})
                            </label>
                            <span class="value">
                                {{ $tenure }} {{ $type === 'personal' ? 'M' : 'Y' }}
                            </span>
                        </div>
                        <input type="range"
                            min="1"
                            max="{{ $type === 'personal' ? 84 : 30 }}"
                            wire:model.live="tenure"
                            class="emi-range">
                    </div>

                </div>
            </div>

            <!-- RIGHT -->
            <div class="col-lg-5">
                <div class="emi-result-card h-100">

                    <small class="text-muted">Your Monthly EMI</small>
                    <h1 class="emi-main">
                        ₹ {{ number_format($this->emi) }}
                    </h1>

                    <div class="result-grid">
                        <div>
                            <small>Total Payable</small>
                            <strong>₹ {{ number_format($this->totalPayable) }}</strong>
                        </div>
                        <div>
                            <small>Tenure</small>
                            <strong>{{ $this->months }} Months</strong>
                        </div>
                    </div>

                    <hr>

                    <div class="breakdown">
                        <div>
                            <span class="dot principal"></span>
                            Principal
                            <strong>₹ {{ number_format($amount) }}</strong>
                        </div>
                        <div>
                            <span class="dot interest"></span>
                            Interest
                            <strong>₹ {{ number_format($this->interestAmount) }}</strong>
                        </div>
                    </div>

                    <button class="apply-btn w-100 mt-4">
                        Apply for Loan
                    </button>

                </div>
            </div>

        </div>
    </div>
</section>




    <style>
        /* ===== EMI BASE ===== */
        .emi-wrapper {
            background: #f4f7fb;
        }

        .text-primary {
            color: #11274E !important;
        }

        /* ===== TABS ===== */
        .emi-tabs {
            display: flex;
            justify-content: center;
            gap: 12px;
            flex-wrap: wrap;
        }

        .emi-tab {
            background: #fff;
            border: 1px solid #ddd;
            padding: 10px 18px;
            font-size: 13px;
            border-radius: 6px;
            color: #11274E;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .emi-tab.active,
        .emi-tab:hover {
            background: #11274E;
            color: #fff;
        }

        /* ===== CARD ===== */
        .emi-card {
            background: #ffffff;
            padding: 30px;
            border-radius: 16px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
        }

        .emi-field {
            margin-bottom: 25px;
        }

        .emi-field label {
            font-weight: 600;
            color: #11274E;
        }

        /* ===== VALUE BOX ===== */
        .value-box {
            background: #f1f4f8;
            padding: 6px 10px;
            border-radius: 6px;
        }

        .value-box input {
            width: 90px;
            border: none;
            background: transparent;
            outline: none;
            font-weight: 600;
        }

        /* ===== RANGE ===== */
        .emi-range {
            width: 100%;
            height: 6px;
            border-radius: 10px;
            background: #dbe2ea;
            outline: none;
            appearance: none;
        }

        .emi-range::-webkit-slider-thumb {
            appearance: none;
            width: 18px;
            height: 18px;
            background: #11274E;
            border-radius: 50%;
            cursor: pointer;
        }

        /* ===== EMI FOOTER ===== */
        .emi-footer {
            margin-top: 30px;
            background: #f8fafc;
            padding: 20px;
            border-radius: 12px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .apply-btn {
            background: #11274E;
            color: #fff;
            border: none;
            padding: 10px 24px;
            border-radius: 8px;
            font-weight: 600;
        }

        /* ===== RESULT CARD ===== */
        .emi-result-card {
            background: #ffffff;
            padding: 35px;
            border-radius: 20px;
            height: 100%;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
        }

        /* ===== BREAKDOWN ===== */
        .breakdown {
            display: flex;
            gap: 15px;
            margin-bottom: 20px;
        }

        .break-card {
            flex: 1;
            display: flex;
            gap: 10px;
            background: #f8fafc;
            padding: 12px;
            border-radius: 10px;
        }

        /* ===== DOTS ===== */
        .dot {
            width: 12px;
            height: 12px;
            border-radius: 50%;
            margin-top: 6px;
        }

        .principal {
            background: #d85bd8;
        }

        .interest {
            background: #00c9a7;
        }

        /* ===== SUMMARY ===== */
        .summary {
            display: flex;
            justify-content: space-between;
            font-size: 14px;
        }
    </style>



</div>