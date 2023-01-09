<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class plans extends Model
{
    protected $table='plans';
	public $timestamps = true;
	
    protected $fillable=[
        'name',
        'price',
        'image',
        'description',
        'discount',
        'file',
        'status',
        
    ];
}
