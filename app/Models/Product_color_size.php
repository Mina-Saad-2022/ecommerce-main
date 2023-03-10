<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product_color_size extends Model
{
    use HasFactory;

    protected $table = 'products_color_size';
    protected $fillable = ['image', 'quantity', 'price', 'status', 'products_color_id', 'products_size_id'];

    public function products_size(): BelongsTo
    {
        return $this->belongsTo(Product_size::class, 'products_size_id');
    }

    public function products_color(): BelongsTo
    {
        return $this->belongsTo(Product_color::class, 'products_color_id');
    }

    public function order_details(): HasMany
    {
        return $this->hasMany(Order_details::class, 'products_color_size_id');
    }
}
