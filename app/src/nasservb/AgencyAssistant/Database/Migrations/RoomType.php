<?php 
namespace nasservb\AgencyAssistant\Database\Migrations;
use nasservb\AgencyAssistant\Database\DB;

class RoomType
{
    
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       DB::run('
       CREATE TABLE `room_types` (
        `id` int NOT NULL,
        `name` varchar(100) NOT NULL
      ) ENGINE=InnoDB;
       ');
       
       DB::run('
       ALTER TABLE `room_types`
        ADD UNIQUE KEY `name` (`name`);
       ');

       DB::run('       
        ALTER TABLE `room_types`
        ADD PRIMARY KEY (`id`); 
       ');
       DB::run('
       ALTER TABLE `room_types`
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
       drop table if exists room_types 
       ');
       return $this;
    }
};