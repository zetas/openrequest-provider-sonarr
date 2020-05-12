<?php

namespace Zetas\OpenrequestProviderSonarr;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Zetas\OpenrequestProviderSonarr\Skeleton\SkeletonClass
 */
class OpenrequestProviderSonarrFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'openrequest-provider-sonarr';
    }
}
