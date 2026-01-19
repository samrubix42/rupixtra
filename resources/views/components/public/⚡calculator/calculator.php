<?php

use Livewire\Component;

new class extends Component
{
    public $amount;
    public $year;
    public $interest;

    public $emi;
    public $totalInterest;
    public $totalPayment;

    protected $rules = [
        'amount'   => 'required|numeric|min:1',
        'year'     => 'required|numeric|min:0.1',
        'interest' => 'required|numeric|min:0.1',
    ];

    public function calculate()
    {
        $this->validate();

        $monthlyRate = $this->interest / 12 / 100;
        $months = $this->year * 12;

        $emi = ($this->amount * $monthlyRate * pow(1 + $monthlyRate, $months)) /
               (pow(1 + $monthlyRate, $months) - 1);

        $this->emi = round($emi, 2);
        $this->totalPayment = round($emi * $months, 2);
        $this->totalInterest = round($this->totalPayment - $this->amount, 2);
    }

};