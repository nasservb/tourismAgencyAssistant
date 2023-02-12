<?php

namespace nasservb\AgencyAssistant\Models;

class PlaceAttribute extends BaseEntity
{

    /**
     * @var string table nem on database 
     */
    protected $_table = 'place_attributes' ;

    /**
     * @var string key using for relinquishing between attributes
     * can 'hotel' or 'apartment'
     */
    protected $place_type;

    /**
     * @var hotel|apartment id
     */ 
    protected $place_id;

    /**
     * @var int attribute id 
     */ 
    protected $attribute_id;

    public function __construct($attributeId, $placeId, $placeType)
    {
        $this->attribute_id = $attributeId; 
        $this->place_id = $placeId; 
        $this->place_type = $placeType;
    }

    /**
     * @return string placeType 
     */
    public function getPlaceType() 
    {
        return $this->place_type;
    }

    /**
     * @return string placeId
     */
    public function getPlaceId() 
    {
        return $this->place_id;
    }

}
