<?php
/**
 * User: Charles Peterson
 */
namespace Artistan\Nexmo\Facades;
use Illuminate\Support\Facades\Facade;

class Receipt extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'nexmoreceipt';
    }
}
