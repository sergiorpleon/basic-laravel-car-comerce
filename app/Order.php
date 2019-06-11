<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table= 'orders';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'subtotal',
        'shipping',
        'user_id'
    ];

    /**
     * Get the category that owns the product.
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
