<?php

namespace Tests\Unit;

use nasservb\AgencyAssistant\Services\PlaceService;
use nasservb\AgencyAssistant\Database\DB;
use PHPUnit\Framework\TestCase;

class SearchTest extends TestCase
{
    /**
     * @test
     */
    public function testSearch()
    {
        $items = PlaceService::search('Hotel');
 
        $this->assertEquals(count($items), 3);

    }

   
}