<?php

namespace App\Livewire\Frontend\Pages;

use App\Models\ThemePage;
use Livewire\Component;

class OtherPage extends Component
{
    public $slug = "";

    public $themePage;
    public $metaData = [];
    public function mount()
    {
        if (!checkData($this->slug))
        {
            abort(404);
        }

        $this->slug = trim($this->slug);

        $this->themePage = ThemePage::where('status',1)
            ->whereHas('getSlug',function ($q){
                $q->where('slug',$this->slug);
            })->first();

        if (!$this->themePage)
        {
            abort(404);
        }

        $this->metaData = $this->getMetaData();

    }

    public function render()
    {
        return view('livewire.frontend.pages.other-page');
    }

    private function getMetaData(): array
    {
        if ($this->themePage->metaData()->exists())
        {
            return [
                'title'=>$this->themePage->metaData->title ??$this->themePage->name,
                'description'=>$this->themePage->metaData->description ??'',
                'os_image'=>$this->themePage->metaData->getOsImage() ??'',
                'keywords'=>$this->themePage->metaData->keywords ??'',
            ];
        }
        return [
            'title'=>$this->themePage->name ??'',
            'description'=>'',
            'os_image'=>'',
            'keywords'=>'',
        ];
    }
}
