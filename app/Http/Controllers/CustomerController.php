<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Transformers\CustomerTransformer;
use App\Http\Controllers\BaseController;

class CustomerController extends BaseController
{

    public function getCustomer()
    {
        $customer = Customer::all();
        $data     = $this->fetch($customer, new CustomerTransformer());
        dd($data);
    }
}