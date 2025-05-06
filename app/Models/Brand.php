<?php

namespace App\Models;

use App\Models\Phone;
use App\Models\PhonePhoto;
use App\Models\Category;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'logo',

    ];

    public function phones() : hasMany
    {
        return $this->hasMany(Phone::class);
    }

    public function phonePhotos(): hasMany
    {
        return $this->hasMany(PhonePhoto::class);
    }

    public function categories()
    {
        return $this->hasMany(Category::class);
    }

    public function setNameAttribute($value)
    {
        $this->attributes['name'] = strtolower($value);
        $this->attributes['slug'] = str_replace(' ', '-', strtolower($value));
    }
}
