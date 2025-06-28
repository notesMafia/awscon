<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ThemeSetting extends Model
{
    use HasFactory;

    protected $fillable = ['key','value'];

    public static function findByKeys($keys = []):array
    {
        return self::whereIn('key',$keys)
            ->pluck('value','key')
            ->toArray();
    }

    public static function findByKey($key = null,$array = true)
    {
        return self::where('key',$key)->first();
    }

}
