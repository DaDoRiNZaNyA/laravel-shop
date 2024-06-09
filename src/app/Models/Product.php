<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $guarded = false;

    public function getCategoryTitleAttribute()
    {
        return Category::find($this->category_id)->title;
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'product_tags');
    }

    public function colors()
    {
        return $this->belongsToMany(Color::class, 'color_products');
    }
}
