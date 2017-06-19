<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class UserTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    
    
    public function testUserRegister(){
      $users = factory(App\User::class,2)
                ->create()
                ->each(function ($u) {
                     $u->posts()->save(factory(App\Posts::class)->make());
                 }); 
    }
}
