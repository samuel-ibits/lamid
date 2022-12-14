<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class plansTransactions extends Model
{
    protected $table='plans_transactions';
	public $timestamps = true;
	
    protected $fillable=[
        
        'name',
        'email',
        'planid',
        'amount',
    ];

}
