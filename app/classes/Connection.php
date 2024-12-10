<?php

namespace app\classes;

use PDO;
use PDOException;

class Connection
{
    private static ?PDO $connection = null;

    public static function getConn()
    {
        try
        {
            if(empty(self::$connection))
            {
                self::$connection = new PDO(
                    "mysql:host={$_ENV['DATABASE_HOST']};dbname={$_ENV['DATABASE_NAME']}",
                    "{$_ENV['DATABASE_USER']}",
                    "{$_ENV['DATABASE_PASS']}",
                    [
                        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ
                    ]
                );

                return self::$connection;
            }

        }
        catch(PDOException $th)
        {
            var_dump($th->getMessage());
        }
    }
}