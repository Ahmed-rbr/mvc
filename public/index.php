<?php
session_start();

use Core\Router;

const BASE_Path=__DIR__.'/../';
require BASE_Path.'func.php';

require basePath('config.php');


spl_autoload_register(function($class){
$class=str_replace('\\',DIRECTORY_SEPARATOR,$class);
require basePath("$class.php");
});

require basePath('bootstrap.php');

$router=new \Core\Router();
$routes=  require basePath('routes.php');

$uri=parse_url($_SERVER['REQUEST_URI'])['path'];
$method=$_POST['__method']??$_SERVER['REQUEST_METHOD'];

$router->route($method,$uri);

