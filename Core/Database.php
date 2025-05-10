<?php

namespace Core;
use PDO;

class Database{

public $conne;
public $stmt;
public function __construct($config)
{
  $dsn='mysql:'.http_build_query($config,'',';');

   $this->conne= new PDO($dsn,'toto','',[
  PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOC
   ]);

}

public function query($query,$params=[]){

$this->stmt=$this->conne->prepare($query);
      $this->stmt->execute($params);
return $this;
}


public function fetch(){
return $this->stmt->fetch();

}
public function findOrFail(){
$resultat=$this->fetch();    
// if(!$resultat){abort();}

return $resultat;
}

public function fetchAll(){
return $this->stmt->fetchAll();

}


}