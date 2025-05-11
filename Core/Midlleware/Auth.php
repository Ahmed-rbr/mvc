<?php
namespace Core\Midlleware;

class Auth{

  public function handle(){
if(!$_SESSION['user']??false){

 header('location:/mvc/public/');
      exit;

}

  }
}