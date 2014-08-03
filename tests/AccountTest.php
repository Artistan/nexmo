<?php
/**
 * Created by PhpStorm.
 * User: cpeterson
 * Date: 5/21/14
 * Time: 3:24 PM
 */

class AccountTest extends Orchestra\Testbench\TestCase
{
    /**
     * @test
     */
    public function testWorks()
    {
        $AccountTest = \App::make('nexmoaccount');
        $this->assertTrue(true);
    }

    protected function getPackageProviders()
    {
        return array('Artistan\Nexmo\NexmoServiceProvider');
    }
}
