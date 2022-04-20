<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Art;

class MuseumController extends Controller
{
    public function index()
    {
        $arts = Art::getAllArts();
        return view('portfolio.museum',[
            'arts' => $arts
        ]);
    }

    public function search($keyword)
    {
        if ($keyword === 'default'){
            return Art::getAllArts();
        }
        return Art::searchForArtByName($keyword);
    }
}
