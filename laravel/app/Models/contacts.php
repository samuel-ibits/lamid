<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contacts extends Model
{  protected $table='contacts';
	public $timestamps = true;
	
    protected $fillable=[
        
        'name',
        'email',
        'subject',
        'message',
    ];
}
