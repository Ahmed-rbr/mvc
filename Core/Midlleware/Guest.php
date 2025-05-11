<?php
namespace Core\Midlleware;

class Guest{
  public function handle(){
    if($_SESSION['user'] ?? false){
      header('location:/mvc/public/');
      exit;
    }
  }
}