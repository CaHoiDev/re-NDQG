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



/////////////////////////


    public function getArtsJson()
    {
        return Art::getArts();
    }

    public function addArt(Request $request)
    {
        return Art::addArt($request->all());
    }

    public function getArtJson($id)
    {
        return Art::findArt($id);
    }

    public function updateArt(Request $request, $id)
    {
        return  Art::updateArt($request->all(), $id);
    }

    public function delArt($id): int
    {
        return Art::delArt($id);
    }

    public function getCommentsJson($id)
    {
        return Art::getComments($id);
    }

    public function getLove($id)
    {
        return Art::getLove($id);
    }

    public function addLove(Request $request, $id): bool
    {
        return Art::addLove($request->all(), $id);
    }

    public function addComment(Request $request, $id): bool
    {
        return Art::addComment($request->all(), $id);
    }
}
