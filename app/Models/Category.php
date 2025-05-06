<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    protected $fillable = [

        'name',
        'slug',
        'icon',
    ];
    public function phones() : HasMany
    {
        return $this->hasMany(Phone::class);
    }

    public function phonePhotos() : HasMany
    {
        return $this->hasMany(PhonePhoto::class);
    }

    public function brands() : HasMany
    {
        return $this->hasMany(Brand::class);
    }

    public function setNameAttribute($value) 
    {
        $this->attributes['name'] = strtolower($value);
        $this->attributes['slug'] = str_replace(' ', '-', strtolower($value));
    }
}
