<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\DB;

class Art extends Model
{
    use HasFactory;

    public static function getAllArts()
    {
        return self::all();
    }

    public static function searchForArtByName(string $keyword)
    {
        $query = "select * from art where artName like '%$keyword%'";
        return DB::select($query);
    }

    public static function getArtDetail($id)
    {
        $artInfo = self::getArt($id);
        $comments = self::getComments($id);
        return [
            'artInfo' => $artInfo,
            'comments' => $comments,
            'commentAmount' => count($comments),
            'loveAmount' => self::getLovesAmount($id),
            'downloadAmount' => $artInfo->downloadAmount,
            'artName' => $artInfo->artName,
            'artImage' => $artInfo->artImage,
            'publicationDate' => $artInfo->publicationDate
        ];
    }

    public static function getArt($id)
    {
        $query = "select * from art where artId = $id";
        return DB::select($query)[0];
    }

    public static function getLoves($id)
    {
        $query = "select * from love where artId = $id";
        return DB::select($query);
    }

    public static function getLovesAmount($id)
    {
        return count(self::getLoves($id));
    }

    public static function addLove(array $data, $id)
    {
        $query = "insert into love(artId, userSessionId) values ($id, ${data['userSessionId']})";
        return DB::insert($query);
    }

    public static function delLove(array $data, $id)
    {
        $query = "delete from love where ${data['userSessionId']} = userSessionId and $id = artId";
        return DB::delete($query);
    }

    public static function getComments($id)
    {
        $query = "select cmt.*, u.userName from comment as cmt
                  join usersession u on cmt.userSessionId = u.userSessionId
                  where cmt.artId = $id";
        return DB::select($query);
    }

    public static function sendComment(array $data, $artId, $userId)
    {
        $queryInsert = "insert into
                comment(artId, userSessionId, commentContent)
                values ($artId, $userId, '${data['comment']}')";
        $queryUpdate = "update usersession set userName = '${data['userName']}' where userSessionId = $userId";
        DB::insert($queryInsert);
        DB::update($queryUpdate);
        return true;
    }


}
