<?php 
namespace nasservb\AgencyAssistant\Database\Seeders;
use nasservb\AgencyAssistant\Database\DB;
class Hotel
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function run()
    {
       DB::run("
       INSERT INTO `hotels` 
         (`id`, `name`, `city_name`, `town_name`, `latitude`, `longitude`, `star`) 
       VALUES 
        (NULL, 'Blue Hotel', 'Valencia', 'Valencia', NULL, NULL, '3'), 
        (NULL, 'White Hotel', 'Mojacar', 'Almeria', NULL, NULL, '4'),
        (NULL, 'Red Hotel', 'Sanlucar', 'Cádiz', NULL, NULL, '3');
       ");
    }


};