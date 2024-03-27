<?php
/**
 *  @author: Rahel Chowdhury ($rachow)
 */

class Trip
{
    protected string $fromAdressStreet;
    protected string $fromAddressPostcode;
    protected string $fromAddressLatitude;
    protected string $fromAddressLongitude;

    protected string $viaAddressStreet;
    protected string $viaAddressPostcode;
    protected string $viaAddressLatitude;
    protected string $viaAddressLongitude;


    protected string $toAddressStreet;
    protected string $toAddressPostcode;
    protected string $toAddressLatitude;
    protected string $toAddressLongitude;

    public function __construct()
    {

    }
}
