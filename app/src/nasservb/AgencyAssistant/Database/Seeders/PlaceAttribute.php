<?php 
namespace nasservb\AgencyAssistant\Database\Seeders;
use nasservb\AgencyAssistant\Database\DB;
class PlaceAttribute
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function run()
    {
       DB::run("
       INSERT INTO `place_attributes` 
         (`id`, `attribute_id`, `place_id`,`place_type`) 
       VALUES 
        (NULL, 3, 1,'apartment'), 
        (NULL, 2, 2,'apartment'),
        (NULL, 1, 2,'apartment'),
        (NULL, 3, 2,'apartment'),
        (NULL, 1, 1,'hotel'), 
        (NULL, 2, 1,'hotel'), 
        (NULL, 3, 1,'hotel'), 
        (NULL, 1, 2,'hotel'), 
        (NULL, 3, 2,'hotel'), 
        (NULL, 3, 3,'hotel') 
        ;
       ");
    }


};