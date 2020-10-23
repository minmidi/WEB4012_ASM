<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';

    protected $fillable = [
        'name',
        'images',
        'description',
        'price',
        'sale_percent',
        'stocks',
        'is_active',
    ];

    // Function categories
    public function categories() {
        return $this->belongsToMany(Category::class, 'category_products', 'product_id', 'category_id');
    }

    // SEARCH FUNCTIONS
    public function scopeSearch($query, ...$colums)
    {
        $keyWord = request()->search;
        foreach ($colums as $colum) {
            $query->orWhere($colum, 'like', "%$keyWord%");
        }
    }
}
