<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable=[
        'name','category_id','subcategory_id','image','slug','price','desc',
    ];

    protected $table='products';

    public function category()
    {
        return $this->belongsTo(category::class,'category_id');
    }

    public function subcategory()
    {
        return $this->belongsTo(subcategory::class,'subcategory_id');
    }
}
