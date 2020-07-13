<?php
/**
 * Description of Autoloader
 *
 * @author alassane
 */
namespace app;
class Autoloader {
   
    static  function  autoload($class_name)
    {
       $class_name= str_replace(__NAMESPACE__,'',$class_name); 
       $class_name= str_replace('\\','/',$class_name); 

        require __DIR__. '/'.$class_name.'.php'; 
  
    }
    static public  function register()
    {
        spl_autoload_register(array(__CLASS__,'autoload'));   
        
    }  
    
}
