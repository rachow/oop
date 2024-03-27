<?php
/**
 *  Allowing use of adding closures that can be invoked
 */

namespace OOP\Traits;

use Closure;

trait Macroable
{
    protected ?array $macros = null;

    public function macro(string $name, Closure $closure)
    {
        $this->macros[$name] = $closure;
    }
}
