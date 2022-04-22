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






///////////////
///
///

    private static function delLoveB($artId)
    {
        $query = "delete from love where $artId = artId";
        DB::delete($query);
    }
    public static function getLove($artId)
    {
        $query = "select * from love where $artId = artId";
        return DB::select($query);
    }

    private static function delCmts($artId)
    {
        $query = "delete from comment where $artId = artId";
        DB::delete($query);
    }

    public static function delArt($artId): bool
    {
        $query = "delete from art where $artId = art.artId";
        self::delCmts($artId);
        self::delLoveB($artId);
        return DB::delete($query);
    }

    public static function updateArt(array $data, $artId)
    {
        $artName = $data['artName'] ?? DB::select("select art.artName from art where $artId = artId")[0]->artName;
        $artImage = $data['artImage'] ?? DB::select("select art.artImage from art where $artId = artId")[0]->artImage;
        $publicationDate = $data['publicationDate'] ?? DB::select("select art.publicationDate from art where $artId = artId")[0]->publicationDate;
        $downloadAmount = $data['downloadAmount'] ?? DB::select("select art.downloadAmount from art where $artId = artId")[0]->downloadAmount;

        $query = "update art
                  set artName = \" $artName \",
                      artImage = \" $artImage \",
                      publicationDate = \" $publicationDate \",
                      downloadAmount = $downloadAmount
                  where artId = $artId";

        DB::update($query);

        return self::findArt($artId);
    }

    public static function findArt($artId)
    {
        $query = "select * from art where $artId = artId";
        return DB::select($query)[0];
    }

    public static function getArts()
    {
        $query = "select * from art";
        return DB::select($query);
    }


    public static function addComment(array $data, $artId): bool
    {
        $query = "insert into comment(artId, userSessionId, commentContent)
                  value ($artId, ${data['userSessionId']}, \"${data['commentContent']}\");";
        return DB::insert($query);
    }

    public static function addArt(array $data): array
    {
        $query = "insert into art(artName, artImage, publicationDate)
                  values (\"${data['artName']}\", \"${data['artImage']}\", \"${data['publicationDate']}\")";

        DB::insert($query);

        return $data;
    }


}
