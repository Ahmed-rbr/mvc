<?php
namespace Core\Midlleware;
use Exception;
class Middleware{

public const MAP=[

  'Guest'=>Guest::class,
  'auth'=>Auth::class,
];

public static function resolve($key){

if(!$key){
  return;
}

$middleware=static::MAP[$key]??false;
 if(!$middleware){
throw new \Exception("You don't have middleware for this key: $key");

    }

    (new $middleware)->handle();

}


}