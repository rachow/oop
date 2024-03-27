<?php
/**
 * Some dispatch helpers
 */

namespace OOP\Helpers;

use OOP\Helpers\Common;
use OOP\Traits\Macroable;
use OOP\Services\Dispatch\Autocab;
use OOP\Services\Dispatch\ICabbi;
use OOP\Services\Dispatch\Cordic;

class Dispatch
{
    use Macroable;

    public static function autocab(): Autocab
    {
        $client = Common::client();
        $client->url('https://api.autocab.com/')
               ->header([
                    'Accept: application/json',
                    'Content-Type: application/json'
               ])->token('xxx');
        $instance = new Autocab($client);
        $instance->macro('tripDistance', function ($trip) {
            return $trip->distance;
        });

        return $instance;
    }
    
    public static function icabbi(): ICabbi
    {
        $client = Common::client();
        $client->url('https:://api.icabbi.com/api/')
               ->header([
                    'Accept: application/json',
                    'Content-Type: application/json'
               ])->basic('demo@icabbi.com', '123456');

        return new ICabbi($client);
    }

    public static function cordic(): Cordic
    {
        $client = Common::client();
        $client->url('https://www.cordic.com/api/v1/')
               ->header([
                    'Accept: application/json',
                    'Content-Type: application/json'
               ])->token('1234bcad.');

        return new Cordic($client);
    }
}
