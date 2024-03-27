<?php
/**
 *  Autocab DMS
 */

namespace OOP\Services\Dispatch;

use OOP\Http\Http;
use OOP\Helpers\Common;
use OOP\Traits\Macroable;
use OOP\Abstracts\Dispatch;
use OOP\Contracts\DispatchInterface;
use OOP\Exceptions\DispatchException;
use OOP\Exceptions\DispatchHttpException;

class Autocab extends Dispatch implements DispatchInterface
{
    use Macroable;

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
        $response = $this->client->get('v2/partners/dispatch/quote', $params);

        if (! $response->success()) {
            throw new DispatchException('No trip found.');
        }

        return $response->json();
    }
}
