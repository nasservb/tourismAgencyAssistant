<?php 

namespace nasservb\AgencyAssistant\Database\Migrations;
use nasservb\AgencyAssistant\Database\DB;

class Attribute
{
    
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       DB::run('
       CREATE TABLE `attributes` (
        `id` int NOT NULL,
        `name` varchar(100) NOT NULL
      ) ENGINE=InnoDB;
       ');
       DB::run('
       ALTER TABLE `attributes`
       ADD PRIMARY KEY (`id`),
       ADD UNIQUE KEY `name_unique` (`name`);
       ');
       DB::run('
       ALTER TABLE `attributes`
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
       drop table if exists attributes 
       ');
       return $this;
    }
};