<?php
namespace App\Services;

use App\Services\HelloService;

class HelloServiceIndonesia implements HelloService
{
    public function  hello(String $name): string {
        return "Halo $name";
    }
}

?>