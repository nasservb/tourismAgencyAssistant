<?php

namespace nasservb\AgencyAssistant\Models;

class HotelRoomType extends BaseEntity
{ 
    /**
     * @var string table nem on database 
     */
    protected $_table = 'hotel_room_types' ;

    protected $hotel_id; 

    protected $room_type_id; 

    /**
     * @param string $name
     */
    public function __construct($hotelId, $roomTypeId)
    {
        $this->hotel_id = $hotelId; 
        $this->room_type_id = $roomTypeId; 
    }

}
