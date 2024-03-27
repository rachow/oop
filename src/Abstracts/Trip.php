<?php
/**
 *  @author: Rahel Chowdhury ($rachow)
 */

class Trip
{
    protected ?string $fromAdressStreet = null;
    protected ?string $fromAddressPostcode = null;
    protected ?string $fromAddressLatitude = null;
    protected ?string $fromAddressLongitude = null;

    protected ?string $viaAddressStreet = null;
    protected ?string $viaAddressPostcode = null;
    protected ?string $viaAddressLatitude = null;
    protected ?string $viaAddressLongitude = null;


    protected ?string $toAddressStreet = null;
    protected ?string $toAddressPostcode = null;
    protected ?string $toAddressLatitude = null;
    protected ?string $toAddressLongitude = null;

    public function __construct()
    {

    }
}
