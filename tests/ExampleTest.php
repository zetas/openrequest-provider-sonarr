<?php

namespace Zetas\OpenrequestProviderSonarr\Tests;

use Orchestra\Testbench\TestCase;
use Zetas\OpenrequestProviderSonarr\OpenrequestProviderSonarrServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [OpenrequestProviderSonarrServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
