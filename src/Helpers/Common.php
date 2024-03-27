<?php
/**
 *  These are common helper routines.
 */

namespace OOP\Helpers;

use OOP\Http\Http;
use OOP\Http\Request;
use OOP\Http\Response;
use OOP\Traits\Macroable;

class Common
{
    use Macroable;

    public static function client(): Http
    {
        return new Http();
    } 

    public static function request(): Request
    {
        return new Request();        
    }

    public static function response(): Response
    {
        return new Response();
    }
}
