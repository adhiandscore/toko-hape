<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductTransaction extends Model
{
    protected $fillable = [
        'name',
        'user_phone',
        'user_email',
        'user_address',
        'city',
        'post_code',
        'promo_code',
        'quantity',
        'sub_total_amount',
        'discount_amount',
        'promo_code_id',
        'total_amount',
        'booking_trx_id',
        'proof',
        'is_paid',

        
    ];

    public function setNameAttribute($value)
    {
        $this->attributes['name'] = strtolower($value);
        $this->attributes['slug'] = str_replace(' ', '-', strtolower($value));
    }
}
