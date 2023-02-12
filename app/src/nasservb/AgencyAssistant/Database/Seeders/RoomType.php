<?php
namespace nasservb\AgencyAssistant\Database\Seeders;
use nasservb\AgencyAssistant\Database\DB; 
class RoomType
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function run()
    {
       DB::run("
       INSERT INTO `room_types` (`id`, `name`) 
       VALUES 
        (NULL, 'single occupancy room'), 
        (NULL, 'double occupancy room'),
        (NULL, 'double occupancy room with a view');

       ");
    }


};