<?php 
namespace nasservb\AgencyAssistant\Database\Migrations;
use nasservb\AgencyAssistant\Database\DB;

class Hotel
{
    
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       DB::run('
       CREATE TABLE `hotels` ( 
        `id` int NOT NULL,
         `name` varchar(100) NOT NULL, 
         `city_name` varchar(100) NOT NULL, 
         `town_name` varchar(100) NOT NULL, 
         `latitude` float DEFAULT NULL, 
         `longitude` float DEFAULT NULL, 
         `star` int NOT NULL ) ENGINE=InnoDB ;
       ');
       
       DB::run('       
        ALTER TABLE `hotels`
        ADD PRIMARY KEY (`id`); 
       ');
       DB::run('
       ALTER TABLE `hotels`
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
       drop table if exists hotels
       ');
       return $this;
    }
};