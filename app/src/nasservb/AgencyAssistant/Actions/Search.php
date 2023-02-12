<?php

namespace nasservb\AgencyAssistant\Actions;

use nasservb\AgencyAssistant\Services\PlaceService;
use nasservb\AgencyAssistant\Helpers\Input;
use nasservb\AgencyAssistant\Menu;

class Search
{
    use Input;
    /**
     * handle search city to city menu
     */
    public static function processSearch()
    {
        $number =0;
        $exit = false;
        while (!$exit) {
            $query = readline('query=?');
            if (strlen($query)>= 3)
            {
                try{
                    $items = PlaceService::search($query);
                    echo "result is :\n ";
                    foreach($items as $item) {
                        echo $item . " \n";
                    }
                }catch(Exception $e)
                {
                    echo $e->getMessage();
                }            
                
                echo Menu::getAfterSearchMenu();
                $number = static::readNumber(); 
            }else {
                echo Menu::getInvalidMenu();
            }
            $exit = $number == 2;
        }
    }

}