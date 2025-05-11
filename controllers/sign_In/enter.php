<?php

use Core\App;
use Core\Database;
use Core\Validation;

$email=$_POST['email'];
$pwd=$_POST['pwd'];
$errs=[];
if(Validation::hasEmptyFields($email,$pwd)){
  $errs['empty']='please fill all feildes';
}
if(count($errs)){
return view('sign_in/sign_in.view.php',[
  'errs'=>$errs
]);

exit;

}
$db=App::resolve(Database::class);

$userEmail=$db->query('SELECT * from usr where email =:email',[
  'email'=>$email,
])->fetch();

if(!$userEmail){
      $errs['email'] = 'Please sign in or use another exists Email.';

return view('sign_in/sign_in.view.php',[
  'errs'=>$errs,
]);
exit;

}

$user=$db->query('SELECT * from usr where email =:email and pwd=:pwd',[
  'email'=>$email,
  'pwd'=>$pwd
])->fetch();

if(!$user){
      $errs['pwd'] = 'Cheack your password.';

return view('sign_in/sign_in.view.php',[
  'errs'=>$errs,
]);
exit;
}

$_SESSION['user']=$user;

header('location:/mvc/profail');
exit;


