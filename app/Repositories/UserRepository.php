<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Repositories;

use App\User;

class UserRepository{
    protected $user;
    public function __construct(User $user) {
        $this->user=$user;
    }
    
    public function findAll(){
        $this->user->all();
    }
    
    public function getUserPosts(){
        
        return $posts = $this->user->find(1)->posts;
    }
    
    public function getUsers(){
        
        return  $this->user->all();
    }
}