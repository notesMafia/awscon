<?php

namespace App\Livewire\Admin\Themes;

use App\Helpers\Traits\WithMaryTable;
use App\Models\ThemePage;
use Livewire\Component;
use Livewire\WithPagination;
use Mary\Traits\Toast;

class ThemePagesList extends Component
{
    use WithPagination,
        WithMaryTable,
        Toast;

    public function mount()
    {
        $this->headers = [
            ['key' => 'id', 'label' => '#', 'class' => 'w-1','sortable' => true],
            ['key' => 'name', 'label' => 'Name','sortable' => false],
            ['key' => 'status', 'label' => 'Status','sortable' => true],
        ];
    }
    public function render()
    {
        $data = ThemePage::query();

        if (checkData($this->search))
        {
            $data->where(function ($q) {
                $q->orWhere('id', 'like', $this->search)
                    ->orWhere('name', 'like', "{$this->search}%")
                    ->orWhere('name', 'like', "%{$this->search}%");
            });
        }

        $data = $data->orderBy(...array_values($this->sortBy))
            ->paginate($this->perPage);

        return view('livewire.admin.themes.theme-pages-list',compact('data'));
    }

    public function destroy($id = null):void
    {
        $check = ThemePage::find($id);

        if ($check)
        {
            $check->delete();
            $this->success('Theme Page','Deleted successfully');
        }
    }
}
