<?php

namespace nasservb\AgencyAssistant\Models;

class RoomType extends BaseEntity
{ 
    /**
     * @var string table nem on database 
     */
    protected $_table = 'room_types' ;

    /**
     * @param string $name
     */
    public function __construct($name)
    {
        parent::__construct($name);
    }
}
