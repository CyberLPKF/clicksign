<?php

namespace Cyberlpkf\Clicksign;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Cyberlpkf\Clicksign\Skeleton\SkeletonClass
 */
class ClicksignFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'clicksign';
    }
}
