<?php
/**
 *  OOP the right way!
 *
 */

include __DIR__ . '/autoload.php';

use OOP\Exceptions\DispatchException;
use OOP\Helpers\Dispatch;

try {
    $autocab = Dispatch::autocab();
    $response = $autocab->search(['hello' => 'world']);
} catch (DispatchException $e) {
    
} catch (Exception $e) {
    
}

