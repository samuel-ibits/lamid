<?php

namespace App\Http\Controllers;
use App\Models\eventsTransactions;
use App\Models\events;

use Illuminate\Http\Request;

class event extends Controller
{
    //
    public function book(Request $request)
    {
      
    $data = $request->input();
    try{
       
        $events = new eventsTransactions;
       
        $events->name = $data['name'];
        $events->eventId = $data['eventId'];
        $events->eventName = $data['eventName'];
        $events->amount = $data['amount'];
        $events->status ="processing";
        $events->seatNumber = $data['seatNumber'];
        $events->email = $data['email'];
        $events->save();
        return redirect('paynow?email='.$plans->email.'&tranid='.$plans->tranid.'&amount='.$plans->amount)->with('status',"Insert successfully");
    }
    catch(Exception $e){
        return back()->withInput('failed',"operation failed");
    }
}

/**
 * Remove the specified resource from storage.
 *
 * @param  int  $request
 * @return \Illuminate\Http\Response
 */
public function create(Request $request)
{
  
$data = $request->input();
try{
   
    $events = new events;
 
    $events->name = $data['name'];
    $events->time = $data['time'];
    $events->venue = $data['venue'];
    $events->price = $data['price'];
    $events->status = $data['status'];
    $events->image = $data['image'];
    $events->description = $data['description'];
    $events->discount = $data['discount'];
    $events->file = $data['file'];
    $events->bookedSeats = $data['bookedSeats'];
    $events->totalSeats = $data['totalSeats'];  
    $events->save();
    return redirect('paynow?email='.$plans->email.'&tranid='.$plans->tranid.'&amount='.$plans->amount)->with('status',"Insert successfully");
}
catch(Exception $e){
    return back()->withInput('failed',"operation failed");
}
}

/**
* Remove the specified resource from storage.
*
* @param  int  $request
* @return \Illuminate\Http\Response
*/

}
