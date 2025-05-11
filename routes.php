<?php


$router->get('controllers/about.php','/mvc/about');
$router->get('controllers/dad.php','/mvc/dad');
$router->get('controllers/price.php','/mvc/price');
$router->get('controllers/index.php','/mvc/public/');
$router->get('controllers/Registeration/register.php','/mvc/register')->only('Guest');
$router->post('controllers/Registeration/store.php','/mvc/register')->only('Guest');
$router->get('controllers/sign_in/sign_in.php','/mvc/sign_in')->only('Guest');
$router->post('controllers/sign_in/enter.php','/mvc/sign_in')->only('Guest');
$router->get('controllers/sign_in/out.php','/mvc/out')->only('auth');


$router->get('controllers/profail/profail.php','/mvc/profail')->only('auth');

