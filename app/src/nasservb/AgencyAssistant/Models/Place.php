<?php


namespace nasservb\AgencyAssistant\Models;

abstract class Place extends BaseEntity
{

    /**
     * @var City
     */
    protected $city_name;

    /**
     * @var Town
     */
    protected $town_name;

    /**
     * @var float location latitude
     */
    protected $latitude = 0;

    /**
     * @var float location longitude
     */
    protected $longitude = 0;

    /**
     * @var array of Attribute
     */
    protected $attributes = [];


    /**
     * @param string $name
     * @param int $cityName
     * @param int $townName
     * @param float $latitude
     * @param float $longitude
     */
    public function __construct( $name, $city_name='', $town_name='', $latitude=0, $longitude=0)
    {
        $this->name = $name;
        $this->city_name = $city_name;
        $this->town_name = $town_name;
        $this->latitude = $latitude;
        $this->longitude = $longitude;
    }

    /**
     * @return string
     */
    public function getCity()
    {
        return $this->city_name;
    }

    /**
     * @return string
     */
    public function getTown()
    {
        return $this->town_name;
    }

    /**
     * @return string
     */
    public function getLocation()
    {
        return ['latitude'=>$this->latitude , 'longitude' =>$this->longitude] ;
    }

    /**
     * @param Attribute $attribute
     */
    public function addAttribute($attribute)
    {
        $this->attributes[] = $attribute;
    }

    /**
     * @return array of Attribute
     */
    public function getAttribute()
    {
        return $this->attributes;
    }


}
