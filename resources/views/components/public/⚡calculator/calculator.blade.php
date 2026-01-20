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

<div class="emi-wrapper">
    <div class="container py-5">

        <!-- TABS -->
        <div class="d-flex justify-content-center gap-3 mb-5">
            <button class="emi-tab {{ $type=='personal' ? 'active' : '' }}"
                wire:click="setType('personal')">
                PERSONAL LOAN EMI CALCULATOR
            </button>

            <button class="emi-tab {{ $type=='home' ? 'active' : '' }}"
                wire:click="setType('home')">
                HOME LOAN EMI CALCULATOR
            </button>

            <button class="emi-tab {{ $type=='car' ? 'active' : '' }}"
                wire:click="setType('car')">
                CAR LOAN EMI CALCULATOR
            </button>
        </div>

        <div class="row g-4 align-items-center">

            <!-- LEFT -->
            <div class="col-lg-7">
                <div class="emi-card">

                    <!-- Amount -->
                    <div class="mb-4">
                        <label>Loan Amount</label>
                        <div class="input-box">
                            ₹ <input type="number" wire:model.live="amount">
                        </div>
                        <input type="range" class="form-range"
                            min="50000" max="50000000"
                            wire:model.live="amount">
                    </div>

                    <!-- Interest -->
                    <div class="mb-4">
                        <label>Interest Rate (p.a)</label>
                        <div class="input-box">
                            <input type="number" step="0.01" wire:model.live="interest"> %
                        </div>
                        <input type="range" class="form-range"
                            min="5" max="22" step="0.01"
                            wire:model.live="interest">
                    </div>

                    <!-- Tenure -->
                    <div class="mb-4">
                        <label>Tenure ({{ $type === 'personal' ? 'Months' : 'Years' }})</label>
                        <div class="input-box">
                            <input type="number" wire:model.live="tenure">
                            {{ $type === 'personal' ? 'M' : 'Y' }}
                        </div>
                        <input type="range" class="form-range"
                            min="1" max="{{ $type==='personal' ? 84 : 30 }}"
                            wire:model.live="tenure">
                    </div>

                    <!-- EMI -->
                    <div class="emi-footer">
                        <h5>Your EMI* <span>₹ {{ number_format($this->emi) }}</span></h5>
                        <button>Apply Now</button>
                    </div>

                    <small>*Equated Monthly Installment</small>
                </div>
            </div>

            <!-- RIGHT -->
            <div class="col-lg-5">
                <div class="emi-result">
                    <div class="circle">
                        <div>
                            <small>Total Amount Payable</small>
                            <h4>₹ {{ number_format($this->totalPayable) }}</h4>
                        </div>
                    </div>

                    <div class="legend">
                        <div>
                            <span class="dot principal"></span>
                            Principal <br>
                            <strong>₹ {{ number_format($amount) }}</strong>
                        </div>
                        <div>
                            <span class="dot interest"></span>
                            Interest <br>
                            <strong>₹ {{ number_format($this->interestAmount) }}</strong>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<style>
    .emi-wrapper {
    background: #f3f6f9;
}

.emi-tab {
    border: 1px solid #ddd;
    padding: 10px 18px;
    font-size: 12px;
    background: #fff;
    color: #11274E;
    border-radius: 6px;
    cursor: pointer;
}

.emi-tab.active {
    background: #11274E;
    color: #fff;
}

.emi-card {
    background: #f8fafc;
    padding: 30px;
    border-radius: 16px;
}

.emi-card label {
    font-weight: 600;
    color: #11274E;
}

.input-box {
    background: #fff;
    padding: 8px 12px;
    border-radius: 8px;
    width: 180px;
    margin: 10px 0;
}

.input-box input {
    border: none;
    width: 90px;
    outline: none;
}

.form-range::-webkit-slider-thumb {
    background: #11274E;
}

.emi-footer {
    background: #fff;
    padding: 20px;
    border-radius: 12px;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.emi-footer span {
    color: #11274E;
    font-weight: 700;
}

.emi-footer button {
    background: #11274E;
    color: #fff;
    border: none;
    padding: 10px 24px;
    border-radius: 8px;
}

.emi-result {
    background: #fff;
    padding: 30px;
    border-radius: 20px;
    text-align: center;
}

.circle {
    width: 240px;
    height: 240px;
    border-radius: 50%;
    border: 14px solid #d85bd8;
    margin: auto;
    display: flex;
    align-items: center;
    justify-content: center;
}

.legend {
    display: flex;
    justify-content: space-around;
    margin-top: 30px;
}

.dot {
    width: 12px;
    height: 12px;
    display: inline-block;
    border-radius: 50%;
}

.principal { background: #d85bd8; }
.interest { background: #00d2b5; }

</style>


</div>