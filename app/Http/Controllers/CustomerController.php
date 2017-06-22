<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Transformers\CustomerTransformer;
use App\Http\Controllers\BaseController;
use Illuminate\Support\Facades\Cache;
use Carbon\Carbon;

class CustomerController extends BaseController
{

    public function getCustomer()
    {
        $customer = Customer::all();
        $data     = $this->fetch($customer, new CustomerTransformer());
        dd($data);
    }

    public function cacheCustomer()
    {
       /* $customer  = Customer::find(1)->toArray();
        $expiresAt = Carbon::now()->addMinutes(10);
        //Cache::put('user', $customer, $expiresAt);
        $value = Cache::get('user');
        print_r($value);
        Cache::flush();
        print_r(Cache::get('user'));
        *
        */

        $value = Cache::remember('users', 2, function () {
            return Customer::all();
        });
        dd($value);

    }
}