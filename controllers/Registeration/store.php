<?php

use Core\App;
use Core\Database;
use Core\Validation;


$username=$_POST['username'];
$pwd=$_POST['pwd'];
$email=$_POST['email'];
$errs=[];

if(!Validation::string($username,8,24)||!Validation::string($email,16,50)||!Validation::string($pwd,8,50)){

$errs['short']='please make sure u entred correct info';

}


if(!Validation::email($email)){
  $errs['email']='please enter valid email';
}



if(!Validation::username($username)){
  $errs['username']='please enter valid username only characters numbers and _';
}
if(!Validation::pwd($pwd)){
  $errs['pwd']='please enter valid password atleast 1leter 1 number and atleast 8 char';
}
if(count($errs)){

 return view('Registretion/register.view.php',[
  'errs'=>$errs,
]);
}

$db=App::resolve(Database::class);


$result=$db->query('SELECT * from usr where email =:email',[
  'email'=>$email,
])->fetch();

if($result!== false){
      $errs['email'] = 'Email already exists. Please sign in or use another.';

  return view('Registretion/register.view.php',[
  'errs'=>$errs,
]);
exit;

}




$db->query('INSERT INTO usr (username, email, pwd) VALUES (:username, :email,:pwd)',[
      'username'=>$username,
      'email'=>$email,
      'pwd'=>$pwd,
      ]);
header('location:/mvc/sign_in');
exit;
    