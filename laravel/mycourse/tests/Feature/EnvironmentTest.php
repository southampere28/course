<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Env;
use Tests\TestCase;

class EnvironmentTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function testGetEnvironment()
    {
        $youtube = env('YOUTUBE');  // env tidak akan terbaca apabila menggunakan cache config

        self::assertEquals('Programmer Muda', $youtube);
    }

    public function testDefaultEnv()
    {
        $author = Env::get('AUTHOR', 'John');

        self::assertEquals('Pramudya', $author);
    }

}
