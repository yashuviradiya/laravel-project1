<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    protected $fillable=[
        'address','phone','email','opentime','facebook','twitter','linkedin'
    ];

    protected $table='settings';
}
