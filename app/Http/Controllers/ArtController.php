<?php

namespace App\Http\Controllers;

use App\Models\Art;
use Illuminate\Http\Request;

use App\Models\User;

class ArtController extends Controller
{
    public function artDetail($id)
    {
        $userLove = User::checkLove(1);

        return view('portfolio.art', [
            'artDetail' => Art::getArtDetail($id),
            'userLove' => $userLove
        ]);
    }

    public function postLove($id)
    {
        $user = User::getUserSession();
        $data = [
            "userSessionId" => $user->userSessionId,
            "userName" => $user->userName
        ];

        return Art::addLove($data, $id);
    }

    public function delLove()
    {

    }
}
