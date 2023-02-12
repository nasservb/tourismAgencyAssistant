<?php 
namespace nasservb\AgencyAssistant\Database\Migrations;
use nasservb\AgencyAssistant\Database\DB;

class Apartment
{    
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       DB::run('
       CREATE TABLE `apartments` (
        `id` int NOT NULL,
        `name` varchar(100) NOT NULL,
        `city_name` varchar(100) NOT NULL,
        `town_name` varchar(100) NOT NULL,
        `latitude` float DEFAULT NULL,
        `longitude` float DEFAULT NULL,
        `adult_capacity` int NOT NULL,
        `flat_count` int NOT NULL
      ) ENGINE=InnoDB;      
       ');


       DB::run('       
        ALTER TABLE `apartments`
        ADD PRIMARY KEY (`id`); 
       ');
       DB::run('
       ALTER TABLE `apartments`
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
       drop table if exists apartments
       ');
       return $this;
    }
};