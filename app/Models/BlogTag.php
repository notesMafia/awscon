<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

class BlogTag extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'status',
    ];

    public static function findByName($name = ""): ?self
    {
        return self::where('name',$name)->first();
    }

    public function posts():HasManyThrough
    {
       return $this->hasManyThrough(
           BlogPost::class,
           BlogPostAttribute::class,
           'post_id',
           'id',
           'id',
           'model_id',

       )->where('model',BlogTag::class);
    }
    public function slugUrl()
    {
        return "#";
    }

}
