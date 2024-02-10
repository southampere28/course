<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ConfigurationTest extends TestCase
{
    function testConfigAuthor() : void 
    {
        $firstName = config("contoh.author.first");
        $lastName = config("contoh.author.last");
        $email = config("contoh.email");
        $web = config("contoh.web");
        $addr = config("contoh.addr", "kediri");      // second parameter is default value of $addr if params one not available

        self::assertEquals("Pramudya", $firstName);
        self::assertEquals("Putra", $lastName);
        self::assertEquals("pramudya@gmail.com", $email);
        self::assertEquals("www.mudyshop.com", $web);
        self::assertEquals("kediri", $addr);
    }
}
