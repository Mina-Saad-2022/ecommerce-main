<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo ;

class Order_details extends Model
{
    use HasFactory;

    protected $table = 'orders_details';

    protected $fillable = [
        'quantity',
        'price',
        'discount',
        'order_id',
        'products_color_size_id',
    ];

    public function order(): BelongsTo
    {
        return $this->belongsTo(Order::class ,'order_id');
    }

    public function products_color_size(): BelongsTo
    {
        return $this->belongsTo(Product_color_size::class ,'products_color_size_id');
    }


}
