<?php

namespace App\Livewire\Admin\Post;

use App\Helpers\Traits\WithMaryTable;
use App\Models\BlogTag;
use Illuminate\Support\Arr;
use Livewire\Component;
use Livewire\WithPagination;
use Mary\Traits\Toast;

class PostTagPage extends Component
{
    use WithPagination,
        WithMaryTable,
        Toast;

    public $request = [];
    public $editModal = false;

    protected array $validationAttributes = [
        'request.name'=>'name',
        'request.status'=>'status',
    ];

    public function mount()
    {
        $this->NewRequest();
        $this->headers = [
            ['key' => 'id', 'label' => '#', 'class' => 'w-1','sortable' => true],
            ['key' => 'name', 'label' => 'Name','sortable' => true],
            ['key' => 'status', 'label' => 'Status','sortable' => true],
        ];
    }
    public function render()
    {
        $data = BlogTag::query();

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
        return view('livewire.admin.post.post-tag-page',compact('data'));
    }

    public function save()
    {
        $this->validate([
            'request.name'=>'required|max:255',
            'request.status'=>'required',
        ]);

        if (Arr::has($this->request,'id'))
        {
            $this->validate([
                'request.name'=>'unique:blog_tags,name,'.$this->request['id']
            ]);
        }
        $this->createOrUpdate($this->request);
    }

    public function createOrUpdate($data):void
    {
        if (Arr::has($data,'id'))
        {
            BlogTag::where('id',$data['id'])
                ->update(Arr::only($data,['name','status']));
            $this->dispatch('SetMessage',
                type:'success',
                message:'Updated successfully',
            );
        }
        else {
            BlogTag::create($data);
            $this->dispatch('SetMessage',
                type:'success',
                message:'Created successfully',
            );
            $this->NewRequest();
        }
        $this->editModal = false;
    }
    public function OpenAddEditModal($id = null):void
    {
        if (isset($id) && $id!=="")
        {
            $blogTag = BlogTag::find($id);
            $blogTag?$this->EditRequest($blogTag):$this->NewRequest();
        }
        else{ $this->NewRequest(); }
        $this->editModal = true;
    }

    protected function NewRequest():void
    {
        $this->request = [
            'name'=>null,
            'status'=>1,
        ];
    }

    protected function EditRequest($blogTag):void
    {
        $this->request = $blogTag->only([
            'id',
            'name',
            'status',
        ]);
    }

    public function destroy($id = null): void
    {
        $check = BlogTag::find($id);

        if ($check)
        {
            $check->delete();
            $this->success('Delete Post','Deleted successfully');
        }
    }

}
