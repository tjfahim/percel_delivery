<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UltraDelivery extends Model
{
    use HasFactory;

    protected $fillable = [
        'from_name',
        'from_address',
        'to_name',
        'to_address',
        'from_contact_no',
        'to_contact_no',
        'delivery_type',
        'payment_category',
        'payment_id',
        'message',
    ];
}
