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
        $provider = new Sms();
        $this->assertTrue(true);
    }
}
 