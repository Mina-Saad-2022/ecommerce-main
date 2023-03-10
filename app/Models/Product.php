<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo ;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';

    protected $fillable = [
        'title',
        'description',
        'main_price',
        'main_discount',
        'category_id',
    ];

    /** relationship  products => category " one to many " */
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    /** relationship for products => color " one to many  */
    public function color(): HasMany
    {
        return $this->hasMany(Product_color::class ,'products_id');
    }

    /** relationship for products => size " one to many  */
    public function size():HasMany
    {
        return $this->hasMany(Product_size::class ,'products_id');
    }



}
