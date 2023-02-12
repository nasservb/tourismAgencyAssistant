<?php 
namespace nasservb\AgencyAssistant\Database;

use nasservb\AgencyAssistant\Database\Migrations\Apartment;
use nasservb\AgencyAssistant\Database\Migrations\Hotel;
use nasservb\AgencyAssistant\Database\Migrations\Attribute;
use nasservb\AgencyAssistant\Database\Migrations\HotelRoom;
use nasservb\AgencyAssistant\Database\Migrations\HotelRoomType;
use nasservb\AgencyAssistant\Database\Migrations\PlaceAttribute;
use nasservb\AgencyAssistant\Database\Migrations\RoomType;
use nasservb\AgencyAssistant\Database\Seeders\Seeders;

use nasservb\AgencyAssistant\Database\Drivers\Mysql;

class DB{

    private static $driver = null; 

    private function __construct(){}  

    /**
     * @var DatabaseInterface $driver
     */
    public static function connect($driver = null ) 
    {
        if (!$driver ){
            static::$driver = new Mysql(); 
            static::$driver->connect('db','agency','root','12345678'); 
        }
    }

    /**
     * @param string $query
     * @param array by reference $rows
     * @param int by reference rows count 
     */
    public static function run($query,&$row='',&$count=0)
    {
        if (!static::$driver)
        {
            static::connect(); 
        }
        
        return static::$driver->run($query,$row,$count); 
    } 
    
    /**
     * @return int Last Inserted Id 
     */
    public static function getLastInsertedId()
    {
        if (!static::$driver)
        {
            static::connect(); 
        }

        return static::$driver->getLastInsertedId(); 
    } 

    public static function init(){
        if (!static::$driver)
        {
            static::connect(); 
        }

        /**
         * migrate database
         */
        (new Apartment)->down()->up();
        (new Hotel)->down()->up();
        (new Attribute)->down()->up();
        (new HotelRoomType)->down()->up();
        (new PlaceAttribute)->down()->up();
        (new RoomType)->down()->up();        

        /**
         * seeds
         */
        (new Seeders)->run();  


         
    } 
} 