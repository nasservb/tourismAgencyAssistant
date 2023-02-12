<?php 
namespace nasservb\AgencyAssistant\Database\Seeders;
use nasservb\AgencyAssistant\Database\DB;
class HotelRoomType
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function run()
    {
       DB::run("
       INSERT INTO `hotel_room_types` 
         (`id`, `room_type_id`, `hotel_id`) 
       VALUES 
        (NULL, 3, 1), 
        (NULL, 2, 2),
        (NULL, 1, 3);
       ");
    }


};