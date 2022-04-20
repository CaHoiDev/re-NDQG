<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function getUserSession()
    {
        session_start();
        if (isset($_SESSION['userSessionId']) && !empty($_SESSION['userSessionId'])){
            $_SESSION['userSessionId'] = User::createUser();
        }
        return User::getUserDB($_SESSION['userSessionId']);
    }
}
