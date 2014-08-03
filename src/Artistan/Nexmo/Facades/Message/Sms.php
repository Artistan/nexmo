<?php
/**
 * User: Charles Peterson
 */
namespace Artistan\Nexmo\Facades\Message;
use Illuminate\Support\Facades\Facade;

class Sms extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'nexmosmsmessage';
    }
}
