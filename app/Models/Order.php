<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo ;

class Order extends Model
{
    use HasFactory;

    protected $table = 'orders';

    protected $fillable = [
        'status',
        'payment_method',
        'payment_status',
        'payment_id',
        'total_price',
        'user_id',
    ];


    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class , 'user_id');
    }

    public function oder_details(): HasMany
    {
        return $this->hasMany(Order_details::class , 'order_id');
    }
}
