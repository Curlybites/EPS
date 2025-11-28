<?php

namespace App\Http\Controllers;

use App\Service\User\UserService;
use Illuminate\Http\Request;

class UserController extends Controller
{
    protected $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    public function index(Request $request)
    {
        $users =  $this->userService->getAllUser();
        return view('user.userIndex', compact('users'));
    }
}
