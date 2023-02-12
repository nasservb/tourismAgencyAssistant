<?php


namespace nasservb\AgencyAssistant\Services;

use nasservb\AgencyAssistant\Models\Attribute;
use nasservb\AgencyAssistant\Models\PlaceAttribute;
use nasservb\AgencyAssistant\Database\DB;

class PlaceService
{
    /**
     * @return array of Attribute |null
     */
    public static function getAttributes()
    {
        return (new Attribute('fake name'))->getAll();
    }
    
    /**
     * 
     * @return Hotel |null
     */
    public static function storeAttributeForPlace($attributeId,$placeId,$isApartment)
    {
        //validate RoomType
        if (intval((new Attribute('fake name'))->findByID($attributeId)->getId())==0)
        {
            throw new Exception('Attribute id not found!');
        }
        return (new PlaceAttribute($attributeId,$placeId,($isApartment ? 'apartment': 'hotel')))->save();
    }

    /**
     * 
     * @return Attribute |null
     */
    public static function storeAttribute($name)
    {
        return (new Attribute($name))->save();
    }

    /**
     * 
     * @return array of item |null
    */
    public static function search($name)
    {
        $query= "(
            select 
              ht.name as name, 
              ht.star as star, 
              rt.name as room,
              ht.city_name as city, 
              ht.town_name as town, 
              'hotel' as type 
            from  hotels ht 
                left join hotel_room_types htr on ht.id = htr.hotel_id 
                left join room_types rt on htr.room_type_id = rt.id 
            where 
              ht.name like '%$name%' 
              or ht.city_name like '%$name%' 
              or ht.town_name like '%$name%'
          ) 
          union 
            (
              select 
                ap.name as name, 
                ap.flat_count as flat_count, 
                ap.adult_capacity as capacity, 
                ap.city_name as city, 
                ap.town_name as town, 
                'apartment' as type 
              from 
                apartments ap 
              where 
                ap.name like '%$name%' 
                or ap.city_name like '%$name%' 
                or ap.town_name like '%$name%'
            )          
        ";
        $items=  DB::run($query);
        echo $query;
        var_dump( $items);
        $result = [];
        foreach($items as $item)
        {
            if ($item['type'] == 'apartment') 
            {
                $result[] = $item['name'] ."\t".  $item['flat_count'].' flats' ."\t". 
                    $item['capacity'].' adults'."\t".$item['city']."\t".$item['town'];
            }else {
                $result[] = $item['name'] ."\t".  $item['star'].' star' ."\t". 
                $item['room']."\t".$item['city']."\t".$item['town'];
            }                        
        }
        return $result;
    }

}