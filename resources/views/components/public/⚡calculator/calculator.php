<?php

use Livewire\Component;

new class extends Component
{
    public $type = 'personal';
    public $amount;
    public $interest;
    public $tenure;

    // Validation rules for safety
    protected $rules = [
        'amount' => 'required|numeric|min:1|max:100000000',
        'interest' => 'required|numeric|min:0|max:100',
        'tenure' => 'required|numeric|min:1',
    ];

    public function mount()
    {
        $this->setDefaults();
    }

    public function setType($type)
    {
        // Validate type to prevent invalid values
        if (!in_array($type, ['personal', 'home', 'car'])) {
            $type = 'personal';
        }
        
        $this->type = $type;
        $this->setDefaults();
    }

    private function setDefaults()
    {
        if ($this->type === 'personal') {
            $this->amount = 500000;
            $this->interest = 10.50;
            $this->tenure = 24; // months
        }

        if ($this->type === 'home') {
            $this->amount = 2500000;
            $this->interest = 8.50;
            $this->tenure = 15; // years
        }

        if ($this->type === 'car') {
            $this->amount = 800000;
            $this->interest = 9.00;
            $this->tenure = 5; // years
        }
    }

    // Updated method with validation
    public function updatedAmount($value)
    {
        // Allow any positive amount up to 100 crore
        $this->amount = max(1, min(100000000, (float) $value));
    }

    public function updatedInterest($value)
    {
        // Allow interest rate from 0% to 100%
        $this->interest = max(0, min(100, (float) $value));
    }

    public function updatedTenure($value)
    {
        // Dynamic max tenure based on loan type
        $maxTenure = $this->type === 'personal' ? 360 : 50;
        $this->tenure = max(1, min($maxTenure, (int) $value));
    }

    public function getMonthsProperty()
    {
        $months = $this->type === 'personal'
            ? $this->tenure
            : $this->tenure * 12;
        
        // Safety check to prevent division by zero
        return max(1, $months);
    }

    public function getEmiProperty()
    {
        try {
            $p = (float) $this->amount;
            $r = (float) $this->interest / 12 / 100;
            $n = (int) $this->months;

            // Safety checks
            if ($p <= 0 || $n <= 0) {
                return 0;
            }

            // Handle zero interest rate
            if ($r == 0 || $r < 0.0001) {
                return round($p / $n);
            }

            // Standard EMI calculation
            $emi = ($p * $r * pow(1 + $r, $n)) / (pow(1 + $r, $n) - 1);
            
            // Validate result
            if (!is_finite($emi) || $emi < 0) {
                return round($p / $n);
            }

            return round($emi);
        } catch (\Exception $e) {
            // Fallback to simple calculation
            return round($this->amount / $this->months);
        }
    }

    public function getTotalPayableProperty()
    {
        $total = $this->emi * $this->months;
        return max(0, $total);
    }

    public function getInterestAmountProperty()
    {
        $interest = $this->totalPayable - $this->amount;
        return max(0, $interest);
    }
};