<?php 

namespace nasservb\AgencyAssistant\Database\Migrations;
use nasservb\AgencyAssistant\Database\DB;

class PlaceAttribute
{
    
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       DB::run("
       CREATE TABLE `place_attributes` (
        `id` int NOT NULL,
        `attribute_id` int NOT NULL,
        `place_id` int NOT NULL,
        `place_type` enum('hotel','apartment') NOT NULL
      ) ENGINE=InnoDB;
       ");

       DB::run('       
        ALTER TABLE `place_attributes`
        ADD PRIMARY KEY (`id`); 
       ');
       DB::run('
       ALTER TABLE `place_attributes`
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
       drop table if exists place_attributes 
       ');
       return $this;
    }
};