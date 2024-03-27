<?php
/**
 * Abstract class
 */

namespace OOP\Abstracts;

use OOP\Traits\DispatchTrait;

abstract class Dispatch 
{
    use DispatchTrait;

    public function __construct()
    {
        
    }

    public function __destruct()
    {
        //
    }

    abstract public function search(array $params);
}
