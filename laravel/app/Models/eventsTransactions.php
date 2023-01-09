<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class eventsTransactions extends Model
{
    protected $table='events_transactions';
	public $timestamps = true;
	
    protected $fillable=[
        'eventId',
        'eventName',
        'amount',
        'status',
        'seatNumber',
        'name',
        'email',
    ];

}
