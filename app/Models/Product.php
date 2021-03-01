<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    /**
     * The categories that belong to the Product
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function categories()
    {
        return $this->belongsToMany(Category::class, 'product_category',  'product_id', 'category_id');
    }

    /**
    * The tags that belong to the Product
    *
    * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
    */
    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'product_tags', 'product_id', 'tag_id');
    }

    /**
     * Get the image that owns the Product
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function image()
    {
        return $this->belongsTo(Image::class);
    }

     /**
    * The images that belong to the Product
    *
    * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
    */
    public function gallery()
    {
        return $this->belongsToMany(Image::class, 'product_images', 'product_id', 'image_id');
    }
}
