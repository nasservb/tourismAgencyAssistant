<?php 
namespace nasservb\AgencyAssistant\Database\Migrations;
use nasservb\AgencyAssistant\Database\DB;

class HotelRoomType
{
    
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       DB::run('
       CREATE TABLE `hotel_room_types` (
        `id` int NOT NULL,
        `room_type_id` int NOT NULL,
        `hotel_id` int NOT NULL
      ) ENGINE=InnoDB;
       ');
       DB::run('
       ALTER TABLE `hotel_room_types`
       ADD PRIMARY KEY (`id`);
       ');
       DB::run('
       ALTER TABLE `hotel_room_types`
        MODIFY `id` int NOT NULL AUTO_INCREMENT;    
       ');
       return $this;
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::run('
       drop table if exists hotel_room_types;
       ');
       return $this;
    }
};