<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class payment extends Controller
{
    //
    public function paystack(Request $request)
    {
        $data = $request->input();
        try{
            $amount=$data['amount'];
            $email=$data['email'];
            if (empty($email)) {$email="costumer@gmail.com";}
            $tranid=$_GET['tranid'] ;
            
              $url = "https://api.paystack.co/transaction/initialize";
              $fields = [
                'email' => "$email",
                'amount' => "$amount",
                'reference' => "$tranid",
              ];
              $fields_string = http_build_query($fields);
              //open connection
              $ch = curl_init();
              
              //set the url, number of POST vars, POST data
              curl_setopt($ch,CURLOPT_URL, $url);
              curl_setopt($ch, CURLOPT_POST, 0);
              curl_setopt($ch,CURLOPT_POSTFIELDS, $fields_string);
              curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                "Authorization: Bearer sk_live_b8a3a9f1440cb389f82404d99594f13e86ba17d2",
                "Cache-Control: no-cache",
              ));
              
              //So that curl_exec returns the contents of the cURL; rather than echoing it
              curl_setopt($ch,CURLOPT_RETURNTRANSFER, true); 
              
              //execute post
               $result =json_decode( curl_exec($ch));
            echo'please wait...';
              $link=$result->data->authorization_url;
              if($result->status=="true"){
                 echo"<script> window.location.replace('".$link."');</script>";
            header("Location: $link");}  }
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

    public function callback(Request $request)
    {

    }

}
