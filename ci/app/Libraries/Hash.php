<?php

namespace App\Libraries;

class Hash
{
    public static function make($password)
    {
        return password_hash($password, PASSWORD_DEFAULT);
    }

    public static function process($password, $hashedPassword)
    {
        return password_verify($password, $hashedPassword);
    }
}
