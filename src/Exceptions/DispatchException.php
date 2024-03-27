<?php
/**
 *  Dispatch Exception
 */

namespace OOP\Exceptions;

use Throwable;
use Exception;
use OOP\Exceptions\ExceptionHandler;

class DispatchException extends ExceptionHandler
{
    /**
     * To report by either logging or sending to service.
     * 
     * @param Throwable $exception
     */
    public function report(Throwable $exception)
    {
        parent::report($exception);
    }

    /**
     * To render the error to user.
     *
     * @param Throwable $exception  
     */
    public function render(Throwable $exception)
    {
        parent::render($exception);
    }
}