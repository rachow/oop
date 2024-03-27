<?php
/**
 * Cordic DMS
 */

namespace OOP\Services\Dispatch;

use OOP\Http\Http;
use OOP\Helpers\Common;
use OOP\Abstracts\Dispatch;
use OOP\Contracts\DispatchInterface;
use OOP\Exceptions\DispatchException;
use OOP\Exceptions\DispatchHttpException;

class Cordic extends Dispatch implements DispatchInterface
{
    /**
     * Creates an instance.
     *
     * @param  \OOP\Http\Http $client
     * @return void
     */
    public function __construct(protected Http $client)
    {
        parent::__construct();
    }

    /**
     * Search for a trip.
     *
     * @param array $params
     */
    public function search(array $params)
    {

    }
}
