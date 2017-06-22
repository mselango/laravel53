<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Mail\UserBanned;

Use Mail;

Use App\Models\User;

use App\Jobs\SendReminderEmail;

class EmailController extends Controller
{
    public function SendEmail(){
        
       $customer = User::find(3);
       dispatch(new SendReminderEmail($customer));
        //Mail::to($customer->email)
           // ->queue(new UserBanned($customer));
    }
}
