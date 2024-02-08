<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\App;  // App:environment import
use Tests\TestCase;

class AppEnvironmentTest extends TestCase
{
    function testAppEnv()
    {
        // if (App::environment('testing')):
        //     self::assertTrue(true);
        // endif;
        if (App::environment(['testing', 'prod', 'dev'])):
            self::assertTrue(true);
        endif;
    }
}
