<?php

namespace Tec\Optimize\Facades;

use Tec\Optimize\Supports\Optimizer;
use Illuminate\Support\Facades\Facade;

/**
 * @method static bool isEnabled()
 * @method static \Tec\Optimize\Supports\Optimizer enable()
 * @method static \Tec\Optimize\Supports\Optimizer disable()
 *
 * @see \Tec\Optimize\Supports\Optimizer
 */
class OptimizerHelper extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return Optimizer::class;
    }
}
