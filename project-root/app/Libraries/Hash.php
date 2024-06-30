<?php

namespace APP\Libraries;

class Hash
{
    public static function make($password)
    {
        return password_hash($password, PASSWORD_BCRYPT);
    }

    public static function process($entered_password, $db_password)
    {
        if (password_verify($entered_password, $db_password)) {
            return true;
        } else {
            return false;
        }
    }
}
