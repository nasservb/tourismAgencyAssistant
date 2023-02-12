<?php


namespace nasservb\AgencyAssistant\Services;

use nasservb\AgencyAssistant\Models\Hotel;
use nasservb\AgencyAssistant\Models\RoomType;
use nasservb\AgencyAssistant\Models\HotelRoomType;

class HotelService
{
    /**
     * @return array of Hotel |null
     */
    public static function getHotels()
    {
        return (new Hotel('fake name',7))->getAll();
    }
    
    /**
     * 
     * @param string $name
     * @param int $cityName
     * @param int $townName
     * @param float $latitude
     * @param float $longitude
     * @param int $star
     * 
     * @return Hotel |null
     */
    public static function store($name, $cityName,$townName,$latitude,$longitude,$star)
    {
        return (new Hotel($name,$star,$cityName,$townName,$latitude,$longitude))->save();
    }

    /**
     * @return array of RoomTypes |null
     */
    public static function getRoomTypes()
    {
        return (new RoomType('fake name'))->getAll();
    }
    
    /**
     * @param string $name
     * @return RoomType |null
     */
    public static function storeRoomType($name)
    {
        return (new RoomType($name))->save();
    }

    /**
     * @param int $roomType
     * @param int $hotel
     * @return array of Hotel |null
     */
    public static function storeRoomTypeForHotel($roomTypeId, $hotelId)
    {
        //validate RoomType
        if (intval((new RoomType('fake name'))->findByID($roomTypeId)->getId())==0 )
        {
            throw new Exception('RoomType id not found!');
        }
        return (new HotelRoomType($roomTypeId,$hotelId))->save();
    }
}