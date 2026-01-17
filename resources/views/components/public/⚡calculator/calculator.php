<?php

use Livewire\Component;

new class extends Component
{
    public $amount, $year, $interest;
    public $amount2, $year2, $interest2;

    public $emi1, $totalInterest1, $totalPayment1;
    public $emi2, $totalInterest2, $totalPayment2;

    protected $rules = [
        'amount' => 'required|numeric|min:1000',
        'year' => 'required|numeric|min:1',
        'interest' => 'required|numeric|min:1',

        'amount2' => 'required|numeric|min:1000',
        'year2' => 'required|numeric|min:1',
        'interest2' => 'required|numeric|min:1',
    ];

    public function calculate()
    {
        $this->validate();

        // Loan 01
        $this->calculateLoan(
            $this->amount,
            $this->year,
            $this->interest,
            'emi1',
            'totalInterest1',
            'totalPayment1'
        );

        // Loan 02
        $this->calculateLoan(
            $this->amount2,
            $this->year2,
            $this->interest2,
            'emi2',
            'totalInterest2',
            'totalPayment2'
        );
    }

    private function calculateLoan($amount, $years, $rate, $emiKey, $interestKey, $totalKey)
    {
        $monthlyRate = $rate / 12 / 100;
        $months = $years * 12;

        $emi = ($amount * $monthlyRate * pow(1 + $monthlyRate, $months)) /
               (pow(1 + $monthlyRate, $months) - 1);

        $totalPayment = $emi * $months;
        $totalInterest = $totalPayment - $amount;

        $this->$emiKey = round($emi, 2);
        $this->$totalKey = round($totalPayment, 2);
        $this->$interestKey = round($totalInterest, 2);
    }

};