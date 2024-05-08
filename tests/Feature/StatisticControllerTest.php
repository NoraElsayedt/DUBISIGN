<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Statistic;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class StatisticControllerTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_index_method()
    {
     
        $response = $this->get('/Statistic');

        $response->assertStatus(200);
        $response->assertViewIs('Statistic.index');

    }
    
}
