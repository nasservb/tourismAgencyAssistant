<?php

namespace nasservb\AgencyAssistant\Actions;

use nasservb\AgencyAssistant\Services\HotelService;
use nasservb\AgencyAssistant\Services\ApartmentService;
use nasservb\AgencyAssistant\Services\PlaceService;
use nasservb\AgencyAssistant\Helpers\Input;
use nasservb\AgencyAssistant\Menu;

class Add
{
    use Input;

    /**
     * handle add hotel menu
     */
    public static function addHotel()
    {
        
        $exit = false;
        while (!$exit) {
            $hotels = HotelService::getHotels();
            echo "id | name | city | town \n"; 
            foreach($hotels as $item) {               
                echo $item['id'] .' | '. $item['name'] .' | '.$item['city_name'].' | '.$item['town_name']." \n";
            }
            $name = readline('name=?');
            $cityName = readline('city name=?');
            $townName = readline('town name=?');
            $latitude = static::readNumber('latitude=0');
            $longitude = static::readNumber('longitude=0');
            $star = static::readNumber('star=?');
            
            try {
                $hotel = HotelService::store($name, $cityName,$townName,$latitude,$longitude,$star);
                                    
                echo 'Hotel with id=' . $hotel->getId() .  " added!\n";
                echo Menu::getAfterHotelMenu();
                $number = static::readNumber();
                if ($number == 2 )
                {
                    static::addRoomTypeForHotel($hotel);
                }else if ($number == 3 )
                {
                   static::addAttributeForPlace($hotel);
                }          
                
            }
            catch(Exception $e){
                echo $e->getMessage();
            }
          
            $exit = $number == 4;
        }
    }
    
    /**
     * handle add RoomType for hotel menu
     */
    public static function addRoomTypeForHotel($hotel)
    {
        $exit = false;
        while (!$exit) {
            $roomTypes = HotelService::getRoomTypes();
            echo "id | name \n";
            foreach($roomTypes as $item) {
                echo $item['id'] . ' | '. $item['name']. " \n";
            }
            $id = readline('id=?');
            
            $added = HotelService::storeRoomTypeForHotel( $id,$hotel->getId());
            echo 'RoomType added to hotel ' . $hotel->getName() .  " successfully!\n";

            echo Menu::getAfterRoomTypeForHotelMenu($hotel);
            $number = static::readNumber();
            $exit = $number == 2;
        }
    }

    /**
     * handle add apartment menu
     */
    public static function addApartment()
    {
        $exit = false;
        while (!$exit) {
            $apartments = ApartmentService::getApartments();
            echo "id | name | city | town \n"; 
            foreach($apartments as $item) {
                echo $item['id'] .' | '. $item['name'] .' | '.$item['city_name'].' | '.$item['town_name']." \n";
            }
            $name = readline('name=?');
            $cityName = readline('city name=?');
            $townName = readline('town name=?');
            $latitude = static::readNumber('latitude=0');
            $longitude = static::readNumber('longitude=0');
            $adultCapacity = static::readNumber('adult capacity=?');
            $flatCount = static::readNumber('flat count=?');
            $added = false;
            try {
                $apartment = ApartmentService::store($name, $cityName,$townName,$latitude,$longitude,$adultCapacity,$flatCount);
    
                $added = true;
            }
            catch(Exception $e){
                echo $e->getMessage();
            }
            if ($added)
            {            
                echo 'Apartment with id=' . $apartment->getId() .  " added!\n";
                echo Menu::getAfterApartmentMenu();
                $number = static::readNumber();
                if ($number == 2 )
                {
                    static::addAttributeForPlace($apartment);
                }
                
                $exit = $number == 3;
            }
        }
    }

    
    /**
     * handle add attribute for apartment|hotel menu
     */
    public static function addAttributeForPlace($place,$isApartment = false)
    {
        $exit = false;
        while (!$exit) {
            $attrs = PlaceService::getAttributes();
            echo "id | name \n";
            foreach($attrs as $item) {
                echo $item['id'] . ' | '. $item['name']. " \n";
            }
            $id = readline('id=?');
            
            try{
                $added = PlaceService::storeAttributeForPlace($id,$place->getId(), $isApartment);
                echo 'Attribute with id=' . $id. ' added to '. $place->getName() .  " successfully!\n";

                echo Menu::getAfterAttributeForPlaceMenu($place);
                $number = static::readNumber();
            }
            catch(Exception $e)
            {
                echo $e->getMessage();
            }
            
            $exit = $number == 2;
        }
    }

    /**
     * handle add attribute menu
     */
    public static function addAttribute()
    {
        $exit = false;
        while (!$exit) {
            $attrs = PlaceService::getAttributes();
            echo "id | name \n";
            foreach($attrs as $item) {
                echo $item['id'] . ' | '. $item['name']. " \n";
            }
            $name = readline('name=?');
            $added = false;
            try {
                $attribute = PlaceService::storeAttribute( $name);
                
                echo 'Attribute wit id=' . $attribute->getId() .  " added!\n";

                echo Menu::getAfterAttributeMenu();
                $number = static::readNumber();
                $exit = $number == 2;
            }
            catch(Exception $e){
                echo Menu::getUniqueMenu();
            }
                
        }
    }

    /**
     * handle add Hotel Room Type menu
     */
    public static function addHotelRoomType()
    {
        $exit = false;
        while (!$exit) {
            $roomTypes = HotelService::getRoomTypes();
            echo "id | name \n";
            foreach($roomTypes as $item) {
                echo $item['id'] . ' | '. $item['name']. " \n";
            }
            $name = readline('name=?');
            $hotelRoomType = HotelService::storeRoomType( $name);
            echo 'Hotel Room Type with id=' . $hotelRoomType->getId() .  " added!\n";

            echo Menu::getAfterHotelRoomTypeMenu();
            $number = static::readNumber();
            $exit = $number == 2;
        }
    }
}