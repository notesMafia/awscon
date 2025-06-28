<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'content',
        'image',
        'logo',
        'position',
        'status',
    ];

    public function getSlug(): HasOne
    {
        return $this->hasOne(SlugManager::class,'model_id','id')->where('model',self::class);
    }

    public function metaData(): HasOne
    {
        return $this->hasOne(MetaData::class,'model_id','id')->where('model',self::class);
    }

    public function getSlugAttribute():?string
    {
        return $this->getSlug?->slug ??"#";
    }

    public function slugUrl():string
    {
        return route('frontend::services:detail',['slug'=>$this->getSlugAttribute()]);
    }

    public function thumbnailUrl():string
    {
        return checkData($this->image)?asset($this->image):asset('/assets/frontend/images/about-us/1.png');
    }

    public function logoUrl()
    {

    }
}
