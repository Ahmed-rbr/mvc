<?php

function basePath($path){

 return BASE_Path.$path;
}

function view($path,$attributs=[]){
extract($attributs);

 require basePath("views/".$path);

}

function show($var){
echo '<pre>';

var_dump($var);
echo '</pre>';
die;
}

function urli($uri){

  return parse_url($_SERVER['REQUEST_URI'])['path']===$uri;
}