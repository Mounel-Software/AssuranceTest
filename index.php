<?php
 /**
 * This is controller 
 */
 
require 'app/Autoloader.php';
app\Autoloader::register();


@$param = $_GET['p'];

ob_start();

if(@$param=='home'|| @$param=='')
{  
    
  require'pages/home.php'; 	  
	  
}
elseif(@$param=='login')
{
	require'pages/login.php'; 	
}
elseif(@$param=='myprofile')
{
	require'pages/myprofile.php'; 	
}

$content=  ob_get_clean();

//Inclure  le template du site

require_once (__DIR__.'/pages/templates/template.php');



  



