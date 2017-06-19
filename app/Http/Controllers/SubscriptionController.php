<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\Mail\Mailer;
Use Mail;
use App\User;
use App\Jobs\SendWelcomeEmail;
class SubscriptionController extends Controller
{
    public function index()
    {        
        return view('subscribe.index');
    }
    public function process(Request $request)
    {
            $user = User::find(1);
            $input = $request->all();
            $creditCardToken = $input['stripeToken'];
            //$user->newSubscription('main', 'monthly')->create($creditCardToken);
            $user->newSubscription('main', 'monthly')
                 ->create($creditCardToken);
            return "success";
    }
    
    public function cancel(){
        $user = User::find(1);
        $user->subscription('main')->cancel();
    }
    public function send(){
        $this->dispatch(new SendWelcomeEmail());
    }
}
