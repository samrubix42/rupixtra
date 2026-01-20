<div x-data="emiCalculator()" x-init="init()">
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
            <button class="emi-tab" 
                :class="{ 'active': type === 'personal' }"
                @click="setType('personal')">
                Personal Loan
            </button>
            <button class="emi-tab" 
                :class="{ 'active': type === 'home' }"
                @click="setType('home')">
                Home Loan
            </button>
            <button class="emi-tab" 
                :class="{ 'active': type === 'car' }"
                @click="setType('car')">
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
                            <div class="value-input-wrapper">
                                <span class="currency-symbol">₹</span>
                                <input type="number" 
                                    class="value-input" 
                                    x-model.number="amount"
                                    @input="calculate()"
                                    min="1"
                                    max="100000000"
                                    step="1">
                            </div>
                        </div>
                        <input type="range"
                            min="1"
                            max="100000000"
                            step="1000"
                            x-model.number="amount"
                            @input="calculate()"
                            class="emi-range">
                    </div>

                    <!-- Interest -->
                    <div class="emi-field">
                        <div class="field-head">
                            <label>Interest Rate</label>
                            <div class="value-input-wrapper">
                                <input type="number" 
                                    class="value-input" 
                                    x-model.number="interest"
                                    @input="calculate()"
                                    min="0"
                                    max="100"
                                    step="0.01">
                                <span class="percent-symbol">%</span>
                            </div>
                        </div>
                        <input type="range"
                            min="0"
                            max="100"
                            step="0.01"
                            x-model.number="interest"
                            @input="calculate()"
                            class="emi-range">
                    </div>

                    <!-- Tenure -->
                    <div class="emi-field">
                        <div class="field-head">
                            <label>
                                <span x-text="type === 'personal' ? 'Tenure (Months)' : 'Tenure (Years)'"></span>
                            </label>
                            <div class="value-input-wrapper">
                                <input type="number" 
                                    class="value-input" 
                                    x-model.number="tenure"
                                    @input="calculate()"
                                    min="1"
                                    :max="type === 'personal' ? 360 : 50"
                                    step="1">
                                <span class="unit-symbol" x-text="type === 'personal' ? 'M' : 'Y'"></span>
                            </div>
                        </div>
                        <input type="range"
                            min="1"
                            :max="type === 'personal' ? 360 : 50"
                            x-model.number="tenure"
                            @input="calculate()"
                            class="emi-range">
                    </div>

                </div>
            </div>

            <!-- RIGHT -->
            <div class="col-lg-5">
                <div class="emi-result-card h-100">

                    <small class="text-muted">Your Monthly EMI</small>
                    <h1 class="emi-main">
                        ₹ <span x-text="formatNumber(emi)"></span>
                    </h1>

                    <div class="result-grid">
                        <div>
                            <small>Total Payable</small>
                            <strong style="margin-top: 20px;">₹ <span x-text="formatNumber(totalPayable)"></span></strong>
                        </div>
                        <div>
                            <small>Tenure</small>
                            <strong style="margin-top: 20px;"><span x-text="months"></span> Months</strong>
                        </div>
                    </div>

                    <hr>

                    <div class="breakdown">
                        <div>
                            <span class="dot principal"></span>
                            Principal
                            <strong>₹ <span x-text="formatNumber(amount)"></span></strong>
                        </div>
                        <div>
                            <span class="dot interest"></span>
                            Interest
                            <strong>₹ <span x-text="formatNumber(interestAmount)"></span></strong>
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

<script>
    function emiCalculator() {
        return {
            type: 'personal',
            amount: 500000,
            interest: 10.50,
            tenure: 24,
            emi: 0,
            totalPayable: 0,
            interestAmount: 0,
            months: 0,

            init() {
                this.setType('personal');
            },

            setType(type) {
                this.type = type;
                
                // Set defaults based on type
                if (type === 'personal') {
                    this.amount = 500000;
                    this.interest = 10.50;
                    this.tenure = 24;
                } else if (type === 'home') {
                    this.amount = 2500000;
                    this.interest = 8.50;
                    this.tenure = 15;
                } else if (type === 'car') {
                    this.amount = 800000;
                    this.interest = 9.00;
                    this.tenure = 5;
                }
                
                this.calculate();
            },

            calculate() {
                // Validate and constrain values
                this.amount = Math.max(1, Math.min(100000000, parseFloat(this.amount) || 0));
                this.interest = Math.max(0, Math.min(100, parseFloat(this.interest) || 0));
                
                const maxTenure = this.type === 'personal' ? 360 : 50;
                this.tenure = Math.max(1, Math.min(maxTenure, parseInt(this.tenure) || 1));

                // Calculate months
                this.months = this.type === 'personal' ? this.tenure : this.tenure * 12;
                this.months = Math.max(1, this.months);

                // EMI Calculation
                try {
                    const p = parseFloat(this.amount);
                    const r = parseFloat(this.interest) / 12 / 100;
                    const n = parseInt(this.months);

                    // Safety checks
                    if (p <= 0 || n <= 0) {
                        this.emi = 0;
                        this.totalPayable = 0;
                        this.interestAmount = 0;
                        return;
                    }

                    // Handle zero or very low interest rate
                    if (r === 0 || r < 0.0001) {
                        this.emi = Math.round(p / n);
                    } else {
                        // Standard EMI formula
                        const emiValue = (p * r * Math.pow(1 + r, n)) / (Math.pow(1 + r, n) - 1);
                        
                        // Validate result
                        if (isFinite(emiValue) && emiValue > 0) {
                            this.emi = Math.round(emiValue);
                        } else {
                            this.emi = Math.round(p / n);
                        }
                    }

                    // Calculate totals
                    this.totalPayable = Math.max(0, this.emi * this.months);
                    this.interestAmount = Math.max(0, this.totalPayable - this.amount);

                } catch (e) {
                    // Fallback calculation
                    this.emi = Math.round(this.amount / this.months);
                    this.totalPayable = this.emi * this.months;
                    this.interestAmount = this.totalPayable - this.amount;
                }
            },

            formatNumber(num) {
                return new Intl.NumberFormat('en-IN').format(Math.round(num || 0));
            }
        }
    }
</script>




    <style>
        /* ===== EMI BASE ===== */
        .emi-wrapper {
            background: linear-gradient(135deg, #f5f7fa 0%, #e8eef5 100%);
            position: relative;
            overflow: hidden;
        }

        .emi-wrapper::before {
            content: '';
            position: absolute;
            top: -50%;
            right: -10%;
            width: 500px;
            height: 500px;
            background: radial-gradient(circle, rgba(17, 39, 78, 0.05) 0%, transparent 70%);
            border-radius: 50%;
        }

        /* ===== TABS ===== */
        .emi-tabs {
            display: flex;
            justify-content: center;
            gap: 16px;
            flex-wrap: wrap;
            position: relative;
            z-index: 1;
        }

        .emi-tab {
            background: #ffffff;
            border: 2px solid transparent;
            padding: 14px 32px;
            font-size: 15px;
            font-weight: 600;
            border-radius: 12px;
            color: #11274E;
            cursor: pointer;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08);
            position: relative;
            overflow: hidden;
        }

        .emi-tab::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            width: 0;
            height: 0;
            border-radius: 50%;
            background: rgba(17, 39, 78, 0.1);
            transition: width 0.6s, height 0.6s, top 0.6s, left 0.6s;
            transform: translate(-50%, -50%);
        }

        .emi-tab:hover::before {
            width: 300px;
            height: 300px;
        }

        .emi-tab.active {
            background: linear-gradient(135deg, #11274E 0%, #1a3a6b 100%);
            color: #fff;
            border-color: #11274E;
            box-shadow: 0 8px 24px rgba(17, 39, 78, 0.3);
            transform: translateY(-2px);
        }

        .emi-tab:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(17, 39, 78, 0.2);
        }

        /* ===== CARD ===== */
        .emi-card {
            background: #ffffff;
            padding: 40px;
            border-radius: 24px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.08);
            border: 1px solid rgba(17, 39, 78, 0.06);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            position: relative;
            z-index: 1;
        }

        .emi-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 24px 70px rgba(0, 0, 0, 0.12);
        }

        .emi-field {
            margin-bottom: 35px;
        }

        .field-head {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 16px;
        }

        .emi-field label {
            font-weight: 600;
            color: #11274E;
            font-size: 16px;
            letter-spacing: -0.2px;
        }

        /* ===== EDITABLE VALUE INPUT ===== */
        .value-input-wrapper {
            display: flex;
            align-items: center;
            gap: 8px;
            background: linear-gradient(135deg, #f0f4f8 0%, #e3ebf5 100%);
            padding: 8px 16px;
            border-radius: 10px;
            border: 2px solid rgba(17, 39, 78, 0.1);
            transition: all 0.3s ease;
            min-width: 140px;
        }

        .value-input-wrapper:focus-within {
            border-color: #11274E;
            box-shadow: 0 0 0 3px rgba(17, 39, 78, 0.1);
            background: #ffffff;
        }

        .value-input {
            background: transparent;
            border: none;
            outline: none;
            font-weight: 700;
            color: #11274E;
            font-size: 18px;
            width: 100%;
            text-align: right;
            padding: 0;
        }

        .value-input::-webkit-outer-spin-button,
        .value-input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        .value-input[type=number] {
            -moz-appearance: textfield;
        }

        .currency-symbol,
        .percent-symbol,
        .unit-symbol {
            font-weight: 700;
            color: #11274E;
            font-size: 18px;
            flex-shrink: 0;
        }

        .emi-field .value {
            font-weight: 700;
            color: #11274E;
            font-size: 20px;
            background: linear-gradient(135deg, #f0f4f8 0%, #e3ebf5 100%);
            padding: 8px 20px;
            border-radius: 10px;
            border: 2px solid rgba(17, 39, 78, 0.1);
        }

        /* ===== RANGE ===== */
        .emi-range {
            width: 100%;
            height: 8px;
            border-radius: 10px;
            background: linear-gradient(90deg, #e8eef5 0%, #d4dfe9 100%);
            outline: none;
            appearance: none;
            position: relative;
            cursor: pointer;
        }

        .emi-range::-webkit-slider-thumb {
            appearance: none;
            width: 24px;
            height: 24px;
            background: linear-gradient(135deg, #11274E 0%, #1a3a6b 100%);
            border-radius: 50%;
            cursor: pointer;
            box-shadow: 0 4px 12px rgba(17, 39, 78, 0.3);
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }

        .emi-range::-webkit-slider-thumb:hover {
            transform: scale(1.2);
            box-shadow: 0 6px 16px rgba(17, 39, 78, 0.4);
        }

        .emi-range::-webkit-slider-thumb:active {
            transform: scale(1.1);
        }

        .emi-range::-moz-range-thumb {
            width: 24px;
            height: 24px;
            background: linear-gradient(135deg, #11274E 0%, #1a3a6b 100%);
            border-radius: 50%;
            cursor: pointer;
            border: none;
            box-shadow: 0 4px 12px rgba(17, 39, 78, 0.3);
        }

        /* ===== RESULT CARD ===== */
        .emi-result-card {
            background: linear-gradient(135deg, #ffffff 0%, #f8fafc 100%);
            padding: 40px;
            border-radius: 24px;
            height: 100%;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.08);
            border: 1px solid rgba(17, 39, 78, 0.06);
            position: relative;
            z-index: 1;
            transition: transform 0.3s ease;
        }

        .emi-result-card:hover {
            transform: translateY(-4px);
        }

        .emi-result-card small {
            font-size: 14px;
            text-transform: uppercase;
            letter-spacing: 1px;
            color: #6b7280;
            font-weight: 600;
        }

        .emi-main {
            font-size: 48px;
            font-weight: 800;
            color: #11274E;
            margin: 16px 0 24px;
            line-height: 1.2;
        }

        .result-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 16px;
            margin-bottom: 24px;
        }

        .result-grid > div {
            background: linear-gradient(135deg, #f0f4f8 0%, #e3ebf5 100%);
            padding: 16px;
            border-radius: 12px;
            border: 1px solid rgba(17, 39, 78, 0.08);
        }

        .result-grid small {
            display: block;
            color: #6b7280;
            font-size: 12px;
            margin-bottom: 8px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .result-grid strong {
            display: block;
            color: #11274E;
            font-size: 18px;
            font-weight: 700;
        }

        .emi-result-card hr {
            border: none;
            height: 1px;
            background: linear-gradient(90deg, transparent, rgba(17, 39, 78, 0.15), transparent);
            margin: 24px 0;
        }

        /* ===== BREAKDOWN ===== */
        .breakdown {
            display: flex;
            flex-direction: column;
            gap: 16px;
        }

        .breakdown > div {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 14px;
            background: #f8fafc;
            border-radius: 10px;
            border: 1px solid rgba(17, 39, 78, 0.06);
            transition: all 0.2s ease;
        }

        .breakdown > div:hover {
            background: #f0f4f8;
            border-color: rgba(17, 39, 78, 0.12);
        }

        /* ===== DOTS ===== */
        .dot {
            width: 14px;
            height: 14px;
            border-radius: 50%;
            flex-shrink: 0;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.15);
        }

        .principal {
            background: linear-gradient(135deg, #8b5cf6 0%, #a78bfa 100%);
        }

        .interest {
            background: linear-gradient(135deg, #10b981 0%, #34d399 100%);
        }

        .breakdown strong {
            margin-left: auto;
            color: #11274E;
            font-weight: 700;
            font-size: 16px;
        }

        .breakdown > div span:not(.dot) {
            color: #6b7280;
            font-size: 14px;
            font-weight: 500;
        }

        /* ===== BUTTON ===== */
        .apply-btn {
            background: linear-gradient(135deg, #11274E 0%, #1a3a6b 100%);
            color: #fff;
            border: none;
            padding: 16px 32px;
            border-radius: 12px;
            font-weight: 700;
            font-size: 16px;
            cursor: pointer;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            box-shadow: 0 8px 24px rgba(17, 39, 78, 0.3);
            position: relative;
            overflow: hidden;
        }

        .apply-btn::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            width: 0;
            height: 0;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.2);
            transition: width 0.6s, height 0.6s, top 0.6s, left 0.6s;
            transform: translate(-50%, -50%);
        }

        .apply-btn:hover::before {
            width: 400px;
            height: 400px;
        }

        .apply-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 12px 32px rgba(17, 39, 78, 0.4);
                        color: #fff;

        }

        .apply-btn:active {
            transform: translateY(0);
        }

        /* ===== RESPONSIVE ===== */
        @media (max-width: 991.98px) {
            .emi-card,
            .emi-result-card {
                padding: 30px;
            }

            .emi-main {
                font-size: 36px;
            }

            .emi-field {
                margin-bottom: 28px;
            }
        }

        @media (max-width: 575.98px) {
            .emi-tab {
                padding: 12px 24px;
                font-size: 14px;
            }

            .emi-card,
            .emi-result-card {
                padding: 24px;
            }

            .emi-main {
                font-size: 32px;
            }

            .result-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>



</div>