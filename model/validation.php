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

        if (!empty($make) && !in_array($make, $makeCheck)) {
            return false;
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

        if (!empty($cat) && !in_array($cat, $catCheck)) {
            return false;
        }

        return true;
    }

    static function validYear($year): bool
    {
        $yearCheck = dealerDatalayer::getYear();
        if (!empty($year) && !in_array($year, $yearCheck)) {
            return false;
        }

        return true;
    }

    static function validMiles($miles): bool
    {
        if (!empty($miles) && ($miles > 0)){
            return true;
        }
        return false;

    }

    static function validInterior($interior): bool
    {
        $interiorCheck = dealerDataLayer::getInterior();

        if (!empty($interior)){
            foreach ($interior as $choice) {
                if (!in_array($choice, $interiorCheck)) {
                    return false;
                }
            }
        }
        return true;
    }

    static function validExterior($exterior): bool
    {
        $exteriorCheck = dealerDataLayer::getExterior();

        if (!empty($exterior)){
            foreach ($exterior as $choice) {
                if (!in_array($choice, $exteriorCheck)) {
                    return false;
                }
            }
        }
        return true;
    }

    static function validWarranty($miles): bool
    {
        if (!empty((int)$miles) && ((int)$miles <= 50000) && ((int)$miles > 0)){
            return true;
        }
        return false;
    }
}

