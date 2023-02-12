<?php

namespace nasservb\AgencyAssistant;
require  'vendor/autoload.php';

use nasservb\AgencyAssistant\Actions\Add;
use nasservb\AgencyAssistant\Actions\Search;
use nasservb\AgencyAssistant\Helpers\Input;
use nasservb\AgencyAssistant\Database\DB;

class Main
{
    use Input;
    /**
     * start of the application is here !
     */
    public static function Start()
    {
        while (true) {
            echo Menu::getMainMenu();
            $number = static::readNumber();
            static::processMainMenu($number);
        }
    }

    /**
     * process main menu
     * @param $number
     */
    public static function processMainMenu($number)
    {
        switch ($number) {
            case 1: //help
                echo Menu::getHelpMenu();
                break;
            case 2 : //add Hotel
                Add::addHotel();                
                break;
            case 3 : // Add Apartment
                Add::addApartment(); 
                break;
            case 4 : //Add Attribute
                Add::addAttribute();
                break;
            case 5 : //Add Hotel Room Type
                Add::addHotelRoomType();
                break;
            case 6 : //search
                Search::processSearch();
                break;
            case 7 : //search
                DB::init();
                echo Menu::getCompleteMigration();
                break;
            case 8:
                exit(0);
                break;
        }
    }

}
Main::start();
