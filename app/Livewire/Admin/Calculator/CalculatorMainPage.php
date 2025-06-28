<?php

namespace App\Livewire\Admin\Calculator;

use App\Helpers\Admin\BackendHelper;
use App\Helpers\Calculator\CalculatorHelper;
use Livewire\Component;

class CalculatorMainPage extends Component
{

    public function mount()
    {
        $this->getData();
    }

    public function render()
    {
        return view('livewire.admin.calculator.calculator-main-page');
    }

    public function getData()
    {
        $calculator = new CalculatorHelper();
        $result = $calculator->getData('base_overdraft_data');
        $result = BackendHelper::JsonDecode($result);
        dd($result);
    }
}
