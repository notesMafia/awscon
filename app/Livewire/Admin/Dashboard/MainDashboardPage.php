<?php

namespace App\Livewire\Admin\Dashboard;

use Livewire\Component;

class MainDashboardPage extends Component
{

    public array $chartOne = [
        'type' => 'pie',
        'data' => [
            'labels' => ['Mary', 'Joe', 'Ana'],
            'datasets' => [
                [
                    'label' => '# of Votes',
                    'data' => [12, 19, 3],
                ]
            ]
        ]
    ];

    public array $chartTwo = [
        'type' => 'bar',
        'data' => [
            'labels' => ['Mary', 'Joe', 'Ana'],
            'datasets' => [
                [
                    'label' => '# of Votes',
                    'data' => [12, 19, 3],
                ]
            ]
        ]
    ];

    public function mount()
    {

    }

    public function render()
    {
        return view('livewire.admin.dashboard.main-dashboard-page');
    }


    public function randomize()
    {
        \Arr::set($this->myChart, 'data.datasets.0.data', [fake()->randomNumber(2), fake()->randomNumber(2), fake()->randomNumber(2)]);
    }

    public function switch()
    {
        $type = $this->myChart['type'] == 'bar' ? 'pie' : 'bar';
        \Arr::set($this->myChart, 'type', $type);
    }
}
