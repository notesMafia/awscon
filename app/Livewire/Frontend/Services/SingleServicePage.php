<?php

namespace App\Livewire\Frontend\Services;

use App\Models\Service;
use Livewire\Component;

class SingleServicePage extends Component
{
    public $slug;

    public $service;

    public $metaData = [];

    public function mount()
    {
//        if (!checkData($this->slug))
//        {
//            return abort(404);
//        }
//
//        $this->service = Service::where('status',1)
//            ->whereHas('getSlug',function ($q){
//                $q->where('slug',$this->slug);
//            })->first();
//
//        if (!$this->service)
//        {
//            return abort(404);
//        }
//
//        $this->metaData = $this->getMetaData();
    }

    public function render()
    {
        return view('livewire.frontend.services.single-service-page');
    }

    private function getMetaData(): array
    {
        if ($this->service->metaData()->exists())
        {
            return [
                'title'=>$this->service->metaData->title ??$this->service->name,
                'description'=>$this->service->metaData->description ??$this->service->description,
                'os_image'=>$this->service->metaData->getOsImage() ??$this->service->thumbnailUrl(),
                'keywords'=>$this->service->metaData->keywords ??'',
            ];
        }
        return [
            'title'=>$this->service->name ??'',
            'description'=>$this->service->description ??'',
            'os_image'=>$this->service->thumbnailUrl(),
            'keywords'=>'',
        ];
    }

}
