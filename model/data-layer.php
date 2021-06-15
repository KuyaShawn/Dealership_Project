<?php

/**
 * Class DataLayer
 */
class DataLayer
{
    static function getMake(): array
    {
        return array("Acura", "Alfa Romeo", "Aston Martin", "Audi", "BMW", "Bentley", "Buick", "Cadilac", "Chevrolet", "Chrysler",
            "Daewoo", "Daihatsu", "Dodge", "Eagle", "Ferrari", "Fiat", "Fisker", "Ford", "Freighliner", "GMC", "Genesis",
            "Geo", "Honda", "Hummer", "Hyundai", "Infinity", "Isuzu", "Jaguar", "Jeep", "Kla", "Lamborghini",
            "Land Rover", "Lexus", "Lincoln", "Lotus", "Mazda", "Maserati", "Maybach", "McLaren", "Mercedes Benz", "Mercury", "Mini",
            "Mitsubishi", "Nissan", "Oldsmobile", "Panoz", "Plymouth", "Polestar", "Pontiac", "Porsche",
            "Ram", "Rivian", "Rolls Royce", "Saab", "Saturn", "Smart", "Subaru", "Susuki", "Tesla",
            "Toyota", "Volkswagen", "Volvo");
    }

    static function getCategory(): array
    {
        return array("SUV", "Sedan", "Coupe", "Convertible", "Hatchback", "Pickup", "Van", "Minivan", "Wagon");
    }

    static function getYear(): array
    {
        return array("1969", "1970", "1971", "1972", "1973", "1974", "1975", "1976", "1977", "1978", "1979",
            "1980", "1981", "1982", "1983", "1984", "1985", "1986", "1987", "1988", "1989",
            "1990", "1991", "1992", "1993", "1994", "1995", "1996", "1997", "1998", "1999",
            "2000", "2001", "20002", "2003", "2004", "2005", "2006", "2007", "2008", "2009", "2010",
            "2011", "2012", "2013", "2014", "2015", "2016", "2017", "2018", "2019", "2020",
            "2021", "2022", "2023");
    }

    static function getInterior(): array
    {
        return array("Vacuum", "Air Freshener", "Seat Restoration", "Cabin Filter", "Hatchback", "Pickup", "Van", "Minivan", "Wagon");
    }

    static function getExterior(): array
    {
        return array("SUV", "Sedan", "Coupe", "Convertible", "Hatchback", "Pickup", "Van", "Minivan", "Wagon");
    }

}
