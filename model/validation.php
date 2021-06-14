<?php

class Validation
{
    // login validation - start
    static function loginUser($userName): bool
    {
        if ($userName == "dealerAdmin") {
            return true;
        }
        return false;
    }

    static function loginPass($userPass): bool
    {
        if ($userPass == "dealer@dmin") {
            return true;
        }
        return false;
    }

    // login validation - End

    static function validPhone($phone): bool
    {
        $pattern = '/^\s*(?:\+?(\d{1,3}))?([-. (]*(\d{3})[-. )]*)?((\d{3})[-. ]*(\d{2,4})(?:[-.x ]*(\d+))?)\s*$/';
        return preg_match($pattern, $phone) == 1;
    }

    static function validEmail($email): bool
    {
        if (filter_var($email, FILTER_VALIDATE_EMAIL) && !empty($email)) {
            return true;
        }
        return false;
    }
}