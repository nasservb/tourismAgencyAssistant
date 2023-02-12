<?php

namespace Tests\Unit;

use nasservb\AgencyAssistant\Services\HotelService;
use nasservb\AgencyAssistant\Services\PlaceService;
use nasservb\AgencyAssistant\Database\DB;
use PHPUnit\Framework\TestCase;

class AddEntity extends TestCase
{
    /**
     * @test
     */
    public function testAddAttribute()
    {
        $placeService = new PlaceService();
        $city1 = $placeService->storeAttribute('Tehran');
        $city2 = $placeService->storeAttribute('Qazvin');
        $city3 = $placeService->storeAttribute('Hamedan');
        $city4 = $placeService->storeAttribute('Kerman');     

        $this->assertEquals(count($placeService->getAttributes()), 4);
    }

}