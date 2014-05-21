<?php
/**
 * Created by PhpStorm.
 * User: cpeterson
 * Date: 5/21/14
 * Time: 3:24 PM
 */

use Artistan\Nexmo\Service\Account;

class AccountTest extends Orchestra\Testbench\TestCase {

    /**
     * @test
     */
    public function testWorks()
    {
        $provider = new Account();
        $this->assertTrue(true);
    }
}
 