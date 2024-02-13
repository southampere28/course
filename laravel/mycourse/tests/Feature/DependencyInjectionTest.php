<?php

namespace Tests\Feature;

use App\Data\Bar;
use App\Data\Foo;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class DependencyInjectionTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function testDependencyInjection(): void
    {
        $foo = new Foo();
        $bar = new Bar($foo);

        self::assertEquals('Foo and Bar', $bar->bar());
    }

    public function testDependencyInjection2()
    {
        // $foo = $this->app->make(Foo::class);
        $this->app->singleton(Foo::class, function($app){
            return new Foo();
        });
        // $this->app->instance(Foo::class, $foo);
        
        $foo = $this->app->make(Foo::class);
        $bar = $this->app->make(Bar::class);

        self::assertEquals("Foo and Bar", $bar->bar());
        self::assertSame($foo, $bar->foo);

    }

    public function testDependencyInjection3()
    {
        $this->app->singleton(Foo::class, function($app){
            return new Foo();
        });

        $this->app->singleton(Bar::class,function($app) {
            return new Bar($app->make(Foo::class));
        });
        
        $bar1 = $this->app->make(Bar::class);
        $bar2 = $this->app->make(Bar::class);

        self::assertSame($bar1, $bar2);

    }

    public function testDependencyInjection4()
    {
        $helloService = $this->app->make(HelloService::class);
        
    }
}
