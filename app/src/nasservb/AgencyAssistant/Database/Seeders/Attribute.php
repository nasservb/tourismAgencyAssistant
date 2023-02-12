<?php
namespace nasservb\AgencyAssistant\Database\Seeders;
use nasservb\AgencyAssistant\Database\DB; 
class Attribute
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function run()
    {
       DB::run("
       INSERT INTO `attributes` (`id`, `name`) 
       VALUES 
        (NULL, 'pool'), 
        (NULL, 'sea view'),
        (NULL, 'parking');

       ");
    }


};