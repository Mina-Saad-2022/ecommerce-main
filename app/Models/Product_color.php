<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo ;

class Product_color extends Model
{
    use HasFactory;

    protected $table = 'products_color';

    protected $fillable = ['color', 'products_id'];

    /** relationship for products => color " one to many  */
    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class ,'products_id');
    }

    public function product_color_size(): HasMany
    {
        return $this->hasMany(Product_color_size::class ,'products_color_id');
    }
}
