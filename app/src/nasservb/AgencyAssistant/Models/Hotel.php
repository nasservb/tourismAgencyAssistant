<?php

namespace nasservb\AgencyAssistant\Models;

class Hotel extends Place
{
    /**
     * @var string table nem on database 
     */
    protected $_table = 'hotels' ;

    /**
     * @var int
     */
    protected $star;

    /**
     * @var array of Attribute
     */
    protected $standardRoomTypes = [];


    /**
     * @param string $name
     * @param int $cityName
     * @param int $townName
     * @param float $latitude
     * @param float $longitude
     * @param int $star
     */
    public function __construct( $name, $star, $cityName='', $townName='', $latitude=0, $longitude=0)
    {
        $this->star = $star;
        parent::__construct( $name, $cityName, $townName, $latitude, $longitude);
    }

    /**
     * @return int
     */
    public function getStar()
    {
        return $this->star;
    }

    /**
     * @param int $star
     * @return void
     */
    public function setStar($star)
    {
        $this->star= $star;
    }

    /**
     * @return array of Attribute
     */
    public function getStandardRoomTypes()
    {
        return $this->standardRoomTypes;
    }

    /**
     * @param Attribute $roomType
     * @return void
     */
    public function addStandardRoomTypes($roomType)
    {
        $this->standardRoomTypes[] = $roomType;
    }

}
