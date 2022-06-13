<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'slug', 'price', 'sale_price', 'category_id', 'status', 'sku', 'product_attributes', 'related_products',
        'up_sell_products', 'on_sale', 'short_description', 'description', 'rating_count', 'average_rating'
    ];

    public const STATUS = [
        'draft' => 'پیش نویس',
        'pending' => 'در انتظار',
        'private' => 'شخصی',
        'publish' => 'عمومی',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function productAttribute()
    {
        return $this->belongsToMany(ProductAttribute::class);
    }

    public function images()
    {
        return $this->morphMany(Image::class, 'imageable');
    }

    public function featuredImage()
    {
        return $this->morphOne(Image::class, 'imageable')->where('featured_image', 1);
    }
}
