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




}