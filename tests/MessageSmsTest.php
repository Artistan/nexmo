<?php
/**
 * Created by PhpStorm.
 * User: cpeterson
 * Date: 5/21/14
 * Time: 3:26 PM
 */

use Artistan\Nexmo\Service\Message\Sms;

class MessageSmsTest extends Orchestra\Testbench\TestCase {

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
        return array('Nexmo\NexmoServiceProvider');
    }
}
 