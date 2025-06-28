<?php

namespace App\Livewire\Admin\Themes;

use App\Helpers\Admin\BackendHelper;
use App\Helpers\Admin\SlugHelper;
use App\Models\ThemePage;
use App\Rules\SlugValidate;
use Illuminate\Support\Str;
use Livewire\Component;
use Mary\Traits\Toast;

class ThemePagesAddEditPage extends Component
{
    use Toast;

    public $page_id;
    public array $request = [], $metaRequest = [], $postCategoryRequest = [];
    public mixed $postTagRequest;

    public bool $editSlug;
    public mixed $slug = "";

    protected array $validationAttributes = [
        'request.name'=>'name',
        'request.slug'=>'slug',
        'request.status'=>'status',

        'metaRequest.title'=>'title',
        'metaRequest.description'=>'description',
    ];

    protected function rules():array
    {
        return [
            'request.name'=>'required|max:255',
            'request.slug'=>['required','max:255',new SlugValidate(['model_id'=>$this->page_id ??null,'model_class'=>ThemePage::class])],

            'metaRequest.title'=>'max:110',
            'metaRequest.description'=>'max:160',

            'request.status'=>'required',
        ];
    }

    public function mount()
    {
        if (checkData($this->page_id))
        {
            $check = ThemePage::find($this->page_id);
            if ($check)
            {
                $this->EditRequest($check);
            }
            else{ redirect()->route('admin::themes:pages.list')->with('error','Invalid Page'); }
        }
        else{ $this->NewRequest(); }
    }
    public function render()
    {
        return view('livewire.admin.themes.theme-pages-add-edit-page');
    }

    public function Save():void
    {
        $this->validate($this->rules());
        $this->update($this->request);
    }

    protected function update($data = []):void
    {
        try
        {
            $check = ThemePage::find($this->page_id);
            $check->fill($data);
            $check->save();

            $this->metaRequest['model_id'] = $check->id;

            SlugHelper::createOrUpdate(
                $data['slug'],
                $data['name'],
                $check->id,
                ThemePage::class
            );
            BackendHelper::createOrUpdateMetaData($this->metaRequest);

            $this->dispatch('SweetMessage',
                type:'success',
                title:'Edit Page',
                message:'Updated successfully',
                url:route('admin::themes:pages.list')
            );
        }
        catch (\Exception $exception)
        {
            $this->error('Error!',$exception->getMessage());
        }
    }

    public function Submit():void
    {
        $this->validate($this->rules());
        $this->create($this->request);
    }

    protected function create($data = []):void
    {
        try
        {
            $check = ThemePage::create($data);

            $this->page_id = $this->metaRequest['model_id'] = $check->id;

            SlugHelper::createOrUpdate(
                $data['slug'],
                $data['name'],
                $check->id,
                ThemePage::class
            );

            BackendHelper::createOrUpdateMetaData($this->metaRequest);

            $this->dispatch('SweetMessage',
                type:'success',
                title:'New Page',
                message:'Created successfully',
                url:route('admin::themes:pages.list')
            );
        }
        catch (\Exception $exception)
        {
            $this->error('Error!',$exception->getMessage());
        }
    }

    protected function NewRequest():void
    {
        $this->metaRequest = BackendHelper::getMetaData(null,ThemePage::class);
        $this->request = [
            'name'=>null,
            'slug'=>null,
            'content'=>null,
            'authenticate'=>0,
            'status'=>0,
        ];
    }

    protected function EditRequest($check):void
    {
        $this->metaRequest = BackendHelper::getMetaData($check,ThemePage::class);
        $this->request = $check->only([
            'name',
            'content',
            'authenticate',
            'status',
        ]);
        $this->request['slug'] = $check->getSlugAttribute();
    }

    public function generateSlug():void
    {
        try
        {
            $this->slug = $this->request['slug'] = Str::slug($this->request['name']);
        }
        catch (\Exception $exception)
        {
            $this->slug = $this->request['slug'] = "";
            $this->error('Error!',$exception->getMessage());
        }
    }

    public function EditSlug($edit = true):void
    {
        $this->editSlug = $edit;
        if ($edit)
        {
            $this->slug = $this->request['slug'];
        }
    }

    public function SaveSlug():void
    {
        $this->validate([
            'slug'=>'required',
        ]);
        $this->request['slug'] = $this->slug;
        $this->editSlug = false;
    }
}
