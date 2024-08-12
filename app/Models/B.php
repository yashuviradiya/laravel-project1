<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class B extends Model
{
    use HasFactory;

    protected $fillable=[
        'date','subcategory_id','shortdesc','desc','image','slug'
    ];

    protected $table="b_s";

    public function subcategory()
    {
        return $this->belongsTo(Subcategory::class,'subcategory_id');
    }
}
