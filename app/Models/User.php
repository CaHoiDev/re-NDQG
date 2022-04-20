<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

use Exception;

class User extends Model
{
    use HasFactory;

    public static function createUser()
    {
        $query = "insert into usersession() values ()";
        DB::insert($query);
        return DB::select("select last_insert_id() as newUser")[0]->newUser;
    }

    public static function getUserDB($id)
    {
        $query = "select * from usersession where userSessionId = $id";
        return DB::select($query)[0];
    }

    public static function getUserSession()
    {
        session_start();
        if (empty($_SESSION['userSessionId'])){
            $_SESSION['userSessionId'] = User::createUser();
        }
        return User::getUserDB($_SESSION['userSessionId']);
    }

    public static function checkLove($artId)
    {
        try{
            $userId = self::getUserSession()->userSessionId;
            $query = "select exists(
                            select * from love
                            where artId = $artId and userSessionId = $userId
                            ) as isLoved";
            return boolval(DB::select($query)[0]->isLoved);
        }
        catch(Exception $exception){
            return false;
        }
    }
}

