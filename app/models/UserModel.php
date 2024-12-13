<?php

namespace app\models;

use app\classes\Connection;

class UserModel
{

    public static function findByEmail(string $email)
    {
        $conn = Connection::getConn();
        
        $sql = "SELECT * FROM users WHERE email = ?";

        $stmt = $conn->prepare($sql);
        $stmt->execute([$email]);

        return $stmt->fetchObject();
    }

    public static function findById(int $id)
    {
        $conn = Connection::getConn();
        
        $sql = "SELECT * FROM users WHERE id = ?";

        $stmt = $conn->prepare($sql);
        $stmt->execute([$id]);

        return $stmt->fetchObject();
    }
    
}