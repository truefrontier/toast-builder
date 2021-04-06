<?php

namespace Truefrontier\ToastBuilder;

use Illuminate\Support\Facades\Facade;

/**
 * Class ToastBuilderFacade
 * @package Truefrontier\ToastBuilder
 */
class ToastBuilderFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'toastBuilder';
    }
}
