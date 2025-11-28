<?php

namespace App\Service\User;

use App\Models\User;

class UserService
{

    public function getAllUser()
    {
       return  $users = User::all();
    }
}
