<?php


namespace App\Http\Controllers;

use App\User;
use Illuminate\Support\Facades\Hash;

class UserController
{
    public function addUser()
    {
        $this->store();
    }

    private function store()
    {

        $new_user = new User;

        $new_user->username = rand(10,100) . ' Dummy Name';
        $new_user->email = rand(10,100) . 'dummyname@domain.hu';
        $new_user->first_name = rand(10,100) . ' First_name';
        $new_user->last_name = rand(10,100) . ' Last_name';
        $new_user->mobile = rand(10,100) . ' 20 123456';
        $new_user->password = Hash::make('password');

        $new_user->save();
    }
}
