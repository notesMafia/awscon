<?php

namespace App\Helpers\Traits;

trait WithMaryTable
{

    public ?string $search = "";

    public array $headers = [];

    public array $sortBy = [];
    public int $perPage = 10;

    public function __construct()
    {
        $this->resetFilter();
    }

    private function resetFilter(): void
    {
        $this->sortBy = [
            'column'=>'id',
            'direction'=>'desc',
        ];
    }

    public function updatedSearch(): void
    {
        $this->resetPage();
    }

}
