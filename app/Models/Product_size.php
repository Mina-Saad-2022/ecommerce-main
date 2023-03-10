<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo ;
class Product_size extends Model
{
    use HasFactory;

    protected $table = 'products_size';

    protected $fillable = ['size','products_id'];

    /** relationship for products => size " one to many  */
    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class, 'products_id');
    }

    public function product_size_id(): HasMany
    {
        return $this->hasMany(Product_color_size::class ,'products_size_id');
    }
}
