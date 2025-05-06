<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class PhonePhoto extends Model
{
    protected $fillable = [
        'phone_id',
        'category_id',
        'image',
    ];
    public function phone(): BelongsTo
    {
        return $this->belongsTo(Phone::class , 'phone_id');
    }
}
