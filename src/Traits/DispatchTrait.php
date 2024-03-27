<?php
/**
 * Trait to add additional routines to objects
 */

namespace OOP\Traits;

trait DispatchTrait
{
    public const POB = 1;
    public const NOSHOW = 3;
    public const ENROUTE = 4;
    public const DROPPINGOFF = 4;
    public const ARRIVED = 5;
    public const ALLOCATE = 2;
    public const DONE = 6;
    public const CANCELLED = 7;

    public const DISPATCH_CANCELLED = 7;
    public const CUSTOMER_CANCELLED = 7;

    public function getStorableFields(): array
    {
        return [
            'miles' => 0,
            'amount' => 0,
            'amount_net' => 0,
            'base_amount' => 0,
            'first_trip_amount' => 0,
            'first_trip_amount_net' => 0,
            'first_trip_amount_vat' => 0,
            'return_trip_amount' => 0,
            'return_trip_amount_net' => 0,
            'return_trip_amount_vat' => 0,
            'return_trip_miles' => 0,
            'vat_rate' => $this->getVatRate()
        ];
    }

    public function getVatRate()
    {
        return  20;
    }

    public function validateDateFormat($date, $format = 'Y-m-d\TH:i:s')
    {
        $dateStr = DateTime::createFromFormat($format, $date);
        return $dateStr && $dateStr->format($format) == $date;
    }

    public function convertTimeMinutes($str)
    {
        $parts = explode(':', $str);
        $mins = ($parts[0] * 60) + $parts[0] + ($parts[0] / 60);
        return number_format($mins, 1, '.', '');
    }

    public function getVehicleMapping()
    {
        return [
            'Saloon',
            'Estate',
            'MPV',
            'Minibus',
            'Coach',
        ];
    }
}
