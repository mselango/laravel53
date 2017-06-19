<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\User;

use App\Repositories\UserRepository;

class UserController extends Controller
{
    public function __construct(UserRepository $user ) {
        
        $this->user = $user;
    }
    
    public function showPosts(){
        
        $posts = $this->user->getUserPosts();
        print_r($posts);
    }
}
