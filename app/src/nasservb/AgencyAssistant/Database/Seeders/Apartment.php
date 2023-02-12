<?php 
namespace nasservb\AgencyAssistant\Database\Seeders;
use nasservb\AgencyAssistant\Database\DB;
class Apartment
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function run()
    {
       DB::run("
        INSERT INTO `apartments` 
            (`name`, `city_name`, `town_name`, `latitude`, `longitude`, `adult_capacity`, `flat_count`)
         VALUES 
         ( 'Beach Apartments', 'Almeria', 'Almeria', NULL, NULL, '4', '10'), 
         ( 'Sun and Beach Apartments', 'Málaga', 'Málaga', NULL, NULL, '6', '50')
       ");
    }


};