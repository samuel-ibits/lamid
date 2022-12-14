<?php

namespace App\Http\Controllers;
use App\Models\plansTransactions;
use App\Models\plans;



use Illuminate\Http\Request;

class plan extends Controller
{
    //
    public function buy(Request $request)
    {
        $data = $request->input();
        try{
           
            $plans = new plansTransactions;
            $plans->name = $data['name'];
            $plans->email = $data['email'];
            $plans->planid = $data['planid'];
            $plans->amount = $data['amount'];
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

    public function createPlan(Request $request)
    {
        //
        DB::table('users')->insert([
            'name' => 'John Doe',
            'email' => 'johndoe@example.com',
            'password' => Hash::make('password')
        ]);
    }

    /**
     * Remo the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
}

