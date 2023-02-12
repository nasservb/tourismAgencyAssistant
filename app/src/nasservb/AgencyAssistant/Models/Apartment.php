<?php

namespace nasservb\AgencyAssistant\Models;

class Apartment extends Place
{
    /**
     * @var string table nem on database 
     */
    protected $_table = 'apartments' ;

    /**
     * @var int
     */
    protected $adult_capacity;

    /**
     * @var int how many flats are available for each apartment
     */
    protected $flat_count;

    /**
     * @param string $name
     * @param int $cityName
     * @param int $townName
     * @param float $latitude
     * @param float $longitude
     * @param int $adultCapacity
     * @param int $flatCount
     */
    public function __construct($name, $adultCapacity,$flatCount, $cityName='', $townName='', $latitude=0, $longitude=0)
    {
        $this->adult_capacity = $adultCapacity;
        $this->flat_count = $flatCount;
        parent::__construct( $name, $cityName, $townName, $latitude, $longitude);
    }

    /**
     * @return int
     */
    public function getAdultCapacity()
    {
        return $this->adult_capacity;
    }

    /**
     * @param int $adultCapacity
     * @return void
     */
    public function setAdultCapacity($adultCapacity)
    {
        $this->adult_capacity= $adultCapacity;
    }

    /**
     * @return int
     */
    public function getFlatCount()
    {
        return $this->flat_count;
    }

    /**
     * @param int $flatCount
     * @return void
     */
    public function setFlatCount($flatCount)
    {
        $this->flat_count = $flatCount;
    }

}
