<?php

namespace Laltu\LaravelOtp;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Laltu\LaravelOtp\Skeleton\SkeletonClass
 */
class LaravelOtpFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'laravel-otp';
    }
}
