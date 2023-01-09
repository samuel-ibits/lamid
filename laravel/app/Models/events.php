<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class events extends Model
{
    protected $table='events';
	public $timestamps = true;
	
    protected $fillable=[
        'name',
        'time',
        'venue',
        'price',
        'status',
        'image',
        'description',
        'discount',
        'file',
        'bookedSeats',
        'totalSeats',
        
    ];
}
