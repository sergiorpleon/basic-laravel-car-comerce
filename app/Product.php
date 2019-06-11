<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $table = 'products';
    protected $fillable = ['name','slug','description','extract', 'price', 'image', 'visible', 'category_id'];
    public $timestamps = false;
    
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
    ];

    /**
     * Get the category that owns the product.
     */
    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    /**
     * Get the category that owns the category.
     */
    public function tags()
    {
        return $this->belongsToMany('App\Tag');
    }
}
