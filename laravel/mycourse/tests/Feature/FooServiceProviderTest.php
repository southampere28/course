<?php

namespace Tests\Feature;

use App\Data\Bar;
use App\Data\Foo;
use Tests\TestCase;
use App\Services\HelloService;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class FooServiceProviderTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function testFooServiceProvider(): void
    {
        $foo = $this->app->make(Foo::class);
        $bar = $this->app->make(Bar::class);
        
        self::assertEquals($foo, $bar->foo);
        
        $foo1 = $this->app->make(Foo::class);
        $foo2 = $this->app->make(Foo::class);
        
        self::assertSame($foo1, $foo2);
        
        $bar1 = $this->app->make(Bar::class);
        $bar2 = $this->app->make(Bar::class);
        self::assertSame($bar1, $bar2);

        self::assertEquals($foo1, $bar1->foo);
        self::assertEquals($foo2, $bar2->foo);

    }

    public function testSingletonProperty()
    {
        $HelloService1 = $this->app->make(HelloService::class);
        $HelloService2 = $this->app->make(HelloService::class);

        self::assertSame($HelloService1, $HelloService2);

        self::assertEquals('Halo Pramudya', $HelloService1->hello('Pramudya'));
    }
}
