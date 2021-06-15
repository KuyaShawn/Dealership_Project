<?php

class dealerValidation
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

    static function validName($name): bool
    {
        if(!empty($name) && (preg_match('/^[A-Za-z]+$/' ,$name) == 1 )){
            return true;
        }
        return false;
    }

    static function validMake($make): bool
    {
        $makeCheck = dealerDataLayer::getMake();

        foreach ($make as $choice) {
            if (!empty($make) && !in_array($choice, $makeCheck)) {
                return false;
            }
        }
        return true;
    }

    static function validModel($model): bool
    {
        if (!empty($model)){
            return true;
        }
        return false;
    }

    static function validCategory($cat): bool
    {
        $catCheck = dealerDatalayer::getCategory();

        foreach ($cat as $choice) {
            if (!empty($cat) && !in_array($choice, $catCheck)) {
                return false;
            }
        }
        return true;
    }

    static function validYear($year): bool
    {
        $yearCheck = dealerDatalayer::getYear();

        foreach ($year as $choice) {
            if (!empty($year) && !in_array($choice, $yearCheck)) {
                return false;
            }
        }
        return true;
    }

    static function validMiles($miles): bool
    {
        if (!empty($miles) && ($miles < 0)){
            return true;
        }
        return false;

    }

    static function validInterior($interior): bool
    {
        $interiorCheck = dealerDatalayer::getInterior();

        foreach ($interior as $choice) {
            if (!empty($interior) && !in_array($choice, $interiorCheck)) {
                return false;
            }
        }
        return true;
    }

    static function validExterior($exterior): bool
    {
        $exteriorCheck = dealerDatalayer::getInterior();

        foreach ($exterior as $choice) {
            if (!empty($choice) && !in_array($choice, $exteriorCheck)) {
                return false;
            }
        }
        return true;
    }

    static function validWarranty($miles): bool
    {
        if (!empty($miles) && ($miles <+ 50000)){
            return true;
        }
        return false;
    }
}

