<?php

namespace nasservb\AgencyAssistant\Services;

use nasservb\AgencyAssistant\Models\Apartment;

class ApartmentService
{
   
    /**
     * @return array of Apartment |null
     */
    public static function getApartments()
    {
        return (new Apartment('fake name',5,7))->getAll();
    }
    
    /**
     * @param string $name
     * @param int $cityName
     * @param int $townName
     * @param float $latitude
     * @param float $longitude
     * @param int $adultCapacity
     * @param int $flatCount
     * 
     * @return Apartment |null
     */
    public static function store($name, $cityName,$townName,$latitude,$longitude,$adultCapacity,$flatCount)
    {
        return (new Apartment($name,$adultCapacity,$flatCount,$cityName,$townName,$latitude,$longitude))->save();
    }

}