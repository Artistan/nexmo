<?php
/**
 * Created by PhpStorm.
 * User: cpeterson
 * Date: 5/21/14
 * Time: 3:25 PM
 */

class ReceiptTest extends Orchestra\Testbench\TestCase
{
    /**
     * @test
     */
    public function testWorks()
    {
        $ReceiptTest = \App::make('nexmoreceipt');
        $this->assertTrue(true);
    }
    protected function getPackageProviders()
    {
        return array('Artistan\Nexmo\NexmoServiceProvider');
    }
}
