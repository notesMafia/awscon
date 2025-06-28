<?php

namespace App\Livewire\Admin\Post;

use App\Helpers\Traits\WithMaryTable;
use App\Models\BlogCategory;
use Livewire\Component;
use Livewire\WithPagination;
use Mary\Traits\Toast;

class PostCategoryPage extends Component
{
    use WithPagination,
        WithMaryTable,
        Toast;


    public function mount()
    {
        $this->headers = [
            ['key' => 'id', 'label' => '#', 'class' => 'w-1','sortable' => true],
            ['key' => 'name', 'label' => 'Name','sortable' => true],
            ['key' => 'description', 'label' => 'Description','sortable' => false],
            ['key' => 'status', 'label' => 'Status','sortable' => true],
        ];
    }

    public function render()
    {
        $data = BlogCategory::query();

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

        return view('livewire.admin.post.post-category-page',compact('data'));
    }

    public function destroy($id = null): void
    {
        $check = BlogCategory::find($id);

        if ($check)
        {
            $check->forceDelete();
            $this->success('Delete Post','Deleted successfully');
        }
    }
}
