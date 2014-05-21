<?php
/**
 * User: Charles Peterson
 */
namespace Artistan\Nexmo\Facades;
use Illuminate\Support\Facades\Facade;

class Account extends Facade {

    protected static function getFacadeAccessor()
    {
        return 'nexmoaccount';
    }
}