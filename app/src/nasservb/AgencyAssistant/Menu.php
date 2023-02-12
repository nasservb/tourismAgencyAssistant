<?php

namespace nasservb\AgencyAssistant;

class Menu
{
    public static function getMainMenu()
    {
        return "Main Menu - Select an action:\n" .
            "1. Help\n" .
            "2. Add Hotel\n" .
            "3. Add Apartment\n" .
            "4. Add Attribute\n" .
            "5. Add Hotel Room Type\n" .
            "6. Search\n" .
            "7. Init DB(essential at first time running )\n" .
            "8. Exit\n";
    }

    public static function getInvalidMenu()
    {
        return "Invalid input. Please enter another value.\n";
    }

    public static function getUniqueMenu()
    {
        return "Invalid input. Please enter unique value.\n";
    }

    public static function getHelpMenu()
    {
        return "Select a number from shown menu and enter. For example 1 is for help.\n";
    }
    
    public static function getAfterSearchMenu()
    {
        return "Select your next action\n" .
            "1. Search again \n" .
            "2. Main Menu\n";
    }

    public static function getAfterRoomTypeForHotelMenu($hotel)
    {
        return "Select your next action\n" .
            '1. Add another Room Type for '. $hotel->getName() ."\n" .
            "2. Main Menu\n";
    }

    public static function getAfterAttributeForPlaceMenu($place)
    {
        return "Select your next action\n" .
            '1. Add another Attribute for '. $place->getName() ."\n" .
            "2. Main Menu\n";
    }

    public static function getAfterAttributeMenu()
    {
        return "Select your next action\n" .
            "1. Add another Attribute\n" .
            "2. Main Menu\n";
    }

    public static function getAfterHotelRoomTypeMenu()
    {
        return "Select your next action\n" .
            "1. Add another Hotel Room Type\n" .
            "2. Main Menu\n";
    }

    public static function getAfterHotelMenu()
    {
        return "Select your next action\n" .
            "1. Add another Hotel\n" .
            "2. Add Room Type for this Hotel\n" .
            "3. Add Attribute for this Hotel\n" .
            "4. Main Menu\n";
    }

    public static function getAfterApartmentMenu()
    {
        return "Select your next action\n" .
            "1. Add another Apartment\n" .
            "2. Add Attribute for this Apartment\n" .
            "3. Main Menu\n";
    }


    public static function getCompleteMigration()
    {
        return ". drop tables\n" .
            ". create tables \n" .
            ". seed database with default data \n" .
            "process completed \n";
    }
}