<?php
namespace Core;

class Validation{
public static function string($value,$min=1,$max=INF)
{

   $value=trim($value);
return strlen($value)>=$min 
&& strlen($value)<$max;
}

public static function hasEmptyFields($input1,$input2){

return empty(trim($input1)) || empty(trim($input2));

}

public static function email($email){
  
return filter_var($email,FILTER_VALIDATE_EMAIL);

}

public static function pwd($pwd) {
   $pattern = '/^(?=.*[A-Za-z])(?=.*\d).{6,}$/';

   return preg_match($pattern, $pwd) === 1;
}
public static function username($username) {
   $pattern = '/^[A-Za-z][A-Za-z0-9_]*$/';

   return preg_match($pattern, $username) === 1;
}


}

