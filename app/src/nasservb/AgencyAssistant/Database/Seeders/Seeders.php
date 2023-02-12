<?php 

namespace nasservb\AgencyAssistant\Database\Seeders;
class Seeders
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function run()
    {
        (new Apartment)->run(); 
        (new Hotel)->run(); 
        (new Attribute)->run(); 
        (new HotelRoomType)->run(); 
        (new PlaceAttribute)->run(); 
        (new RoomType)->run(); 
    }


};