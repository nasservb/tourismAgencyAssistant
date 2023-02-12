<?php

namespace nasservb\AgencyAssistant\Models;

class Attribute extends BaseEntity
{
    /**
     * @var string table nem on database 
     */
    protected $_table = 'attributes' ;

     /**
     * @param string $name
     */
    public function __construct($name)
    {
        parent::__construct($name);
    }

}
