<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Repositories\UserRepository;
class UserController extends Controller
{
    //
    public function __construct(UserRepository $user) {
        $this->user=$user;
    }
    public function index(){
        $user = $this->user->findAll();
        return view("admin.user.index",["users"=>$users]);
    }
}
