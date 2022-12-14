<?php

namespace App\Http\Controllers;
use App\Models\contacts;

use Illuminate\Http\Request;

class contact extends Controller
{
    //
    public function reachout(Request $request)
    {
        $data = $request->input();
        try{
           
            $plans = new contacts;
            $plans->name = $data['name'];
            $plans->email = $data['email'];
            $plans->subject = $data['subject'];
            $plans->message = $data['message'];
            $plans->save();
            return redirect('insert')->with('status',"Insert successfully");
        }
        catch(Exception $e){
            return redirect('insert')->with('failed',"operation failed");
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $request
     * @return \Illuminate\Http\Response
     */

}
