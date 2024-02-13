<?php

namespace Tests\Feature;

use App\Data\Foo;
use App\Data\Person;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ServiceContainerTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function testDependencyInjection(): void
    {
        $foo1 = $this->app->make(Foo::class);
        $foo2 = $this->app->make(Foo::class);

        self::assertEquals('Foo', $foo1->foo());
        self::assertEquals('Foo', $foo2->foo());
        self::assertNotSame($foo1, $foo2);
    }

    public function testBind()
    {
        $this->app->bind(Person::class, function ($app) {
            return new Person("pramudya", "putra");
        });

        // $person = $this->app->make(Person::class); // this will return new person()
        // self::assertNotNull($person);

        $person1 = $this->app->make(Person::class);
        $person2 = $this->app->make(Person::class);

        self::assertEquals("pramudya", $person1->firstName);
        self::assertEquals("putra", $person2->lastName);
        self::assertNotSame($person1, $person2);
    }
    
    public function testSingleton()
    {
        $this->app->singleton(Person::class, function ($app) {
            return new Person("pramudya", "putra");
        });
    
        // $person = $this->app->make(Person::class); // this will return new person()
        // self::assertNotNull($person);
    
        $person1 = $this->app->make(Person::class);
        $person2 = $this->app->make(Person::class);
    
        self::assertEquals("pramudya", $person1->firstName);
        self::assertEquals("putra", $person2->lastName);
        self::assertSame($person1, $person2);
        
    }
    
    public function testInstance() 
    {
        $person = new Person("pramudya", "putra");
        $this->app->instance(Person::class, $person);
    
        // $person = $this->app->make(Person::class); // this will return new person()
        // self::assertNotNull($person);
    
        $person1 = $this->app->make(Person::class);
        $person2 = $this->app->make(Person::class);
    
        self::assertEquals("pramudya", $person1->firstName);
        self::assertEquals("putra", $person2->lastName);
        self::assertSame($person1, $person2);
        
    }
}
