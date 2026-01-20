<?php

use Livewire\Component;

new class extends Component
{ public $type = 'personal';

    public $amount;
    public $interest;
    public $tenure;

    public function mount()
    {
        $this->setDefaults();
    }

    public function setType($type)
    {
        $this->type = $type;
        $this->setDefaults();
    }

    private function setDefaults()
    {
        if ($this->type === 'personal') {
            $this->amount = 50000;
            $this->interest = 9.99;
            $this->tenure = 12; // months
        }

        if ($this->type === 'home') {
            $this->amount = 300000;
            $this->interest = 7.75;
            $this->tenure = 1; // years
        }

        if ($this->type === 'car') {
            $this->amount = 100000;
            $this->interest = 7;
            $this->tenure = 1; // years
        }
    }

    public function getMonthsProperty()
    {
        return $this->type === 'personal'
            ? $this->tenure
            : $this->tenure * 12;
    }

    public function getEmiProperty()
    {
        $p = $this->amount;
        $r = $this->interest / 12 / 100;
        $n = $this->months;

        if ($r == 0) return round($p / $n);

        return round(($p * $r * pow(1 + $r, $n)) / (pow(1 + $r, $n) - 1));
    }

    public function getTotalPayableProperty()
    {
        return $this->emi * $this->months;
    }

    public function getInterestAmountProperty()
    {
        return $this->totalPayable - $this->amount;
    }



};