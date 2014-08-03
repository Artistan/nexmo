<?php
/**
 * Created by PhpStorm.
 * User: cpeterson
 * Date: 5/21/14
 * Time: 3:26 PM
 */

class MessageSmsTest extends Orchestra\Testbench\TestCase
{
    /**
     * @test
     */
    public function testWorks()
    {
        $MessageSmsTest = \App::make('nexmosmsmessage');
        $this->assertTrue(true);
    }
    protected function getPackageProviders()
    {
        return array('Artistan\Nexmo\NexmoServiceProvider');
    }
}
