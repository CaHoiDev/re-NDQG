<?php

namespace App\Http\Controllers;

use App\Models\Art;
use Illuminate\Http\Request;

use App\Models\User;

class ArtController extends Controller
{
    public function artDetail($id)
    {
        $userLove = User::checkLove($id);

        return view('portfolio.art', [
            'artDetail' => Art::getArtDetail($id),
            'userLove' => $userLove
        ]);
    }

    public function sendComment(Request $request, $id)
    {
        return Art::sendComment($request->all(), $id, User::getUserSession()->userSessionId);
    }

    public function postLove($id)
    {
        $user = User::getUserSession();
        $data = [
            "userSessionId" => $user->userSessionId,
            "userName" => $user->userName
        ];

        Art::addLove($data, $id);
        return Art::getLovesAmount($id);
    }

    public function delLove($id)
    {
        $user = User::getUserSession();
        $data = [
            "userSessionId" => $user->userSessionId,
            "userName" => $user->userName
        ];

        Art::delLove($data, $id);
        return Art::getLovesAmount($id);
    }
}
