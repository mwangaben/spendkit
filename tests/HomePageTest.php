<?php

// use Illuminate\Foundation\Testing\WithoutMiddleware;
// use Illuminate\Foundation\Testing\DatabaseMigrations;
// use Illuminate\Foundation\Testing\DatabaseTransactions;
use Modelizer\Selenium\SeleniumTestCase;

class HomePageTest extends SeleniumTestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->visit('/')
            ->see('Laracasts')
            ->hold(2);
    }
}
