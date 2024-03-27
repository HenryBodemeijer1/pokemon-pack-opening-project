<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Api\UserController;
use Illuminate\View\View;

class AdminUserController
{
    private UserController $userController;

    public function __construct(UserController $userController)
    {
        $this->userController = $userController;
    }

    public function index()
    {
        $user = $this->userController->index();
        return View('admin/user/index', compact('user'));
    }
}
