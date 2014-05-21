<?php
/**
 * Created by PhpStorm.
 * User: cpeterson
 * Date: 5/21/14
 * Time: 3:25 PM
 */

use Artistan\Nexmo\Service\Receipt;

class ReceiptTest extends Orchestra\Testbench\TestCase {

    /**
     * @test
     */
    public function testWorks()
    {
        $provider = new Receipt();
        $this->assertTrue(true);
    }
}
 