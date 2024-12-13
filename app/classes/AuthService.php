<?php

namespace app\classes;

use app\models\UserModel;

class AuthService
{
    
    public static function authenticate(string $email, string $password)
    {
        $user = UserModel::findByEmail($email);

        if($user && $password === $user->password)
        {
            return $user;
        }else{
            return false;
        }
    }

    public static function checkAuth(string $type)
    {
        switch ($type) {
            case 'auth':
                if(!Session::has('login')){
                    redirect('/');
                }
                break;
            
            default:
                break;
        }
    }

    public static function sanitizeString(string $input)
    {
        return htmlspecialchars(trim($input), ENT_QUOTES, 'UTF-8');
    }
}