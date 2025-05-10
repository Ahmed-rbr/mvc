<?php
namespace Core;

class Router{
  protected $routes=[];

public function add($method,$controller,$path){

  $this->routes[]=compact('method','controller','path');

  return $this;
}

public function get($controller,$path){
 return  $this->add('GET',$controller,$path);
}

public function post($controller,$path){
 return  $this->add('POST',$controller,$path);
}

public function delete($controller,$path){
 return  $this->add('DELETE',$controller,$path);
}

public function put($controller,$path){
 return  $this->add('PUT',$controller,$path);
}

public function patch($controller,$path){
 return  $this->add('PATCH',$controller,$path);
}

public function route($method,$path){
foreach($this->routes as $route){
if($route['method']===strtoupper($method) && $route['path']===strtolower($path)){

  return require basePath($route['controller']);

}

}
$this->abort();

}

public function abort($code=404){

  http_response_code($code);
  require basePath("controllers/$code.php");
  die;
}


}

