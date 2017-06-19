<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\User;

use App\Repositories\UserRepository;

use App\Http\Controllers\Controller;

use Dingo\Api\Routing\Helpers;



class ApiController extends Controller
{
    use Helpers;
    public function __construct(UserRepository $user ) {
        
        $this->user = $user;
    }
    
    public function showUsers(){
        
        $users = $this->user->getUsers();
        return $this->response->array($users->toArray());
    }
    
    public function registerUser(Request $request){
        $input = $request->all();
        print_r($input);
    }
}