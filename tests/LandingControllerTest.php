<?php

use App\Landing;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\WithoutMiddleware;

class LandingControllerTest extends TestCase
{
    /** @test */
    public function it_shows_a_landing_page_when_a_user_requests_one()
    {
    	$landing = factory(Landing::class)->create(["name" => "test-landing"]);

    	$this->visit('landing/' . $landing->name)
    		->see('welcome to test landing page');
    }

	
    // /** @test */
    // public function it_($value='')
    // {
    // 	# code...
    // }

}
