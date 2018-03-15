<?php

class Psr4Autoloader
{

   

    // add your code here...
    public function register()
    {
        spl_autoload_register(array($this, 'add'));
    }
    
    
    public function add($class) {
       
       $prefix = 'Nfq\\Academy\\Homework\\'; //works with class A and B
       //$prefix = 'Acme\\Package\\'; //ClassC
       
       $length = strlen($prefix);

       $base_directory = __DIR__ . '/src/';
       
       //$base_directory = __DIR__ . '/vendor/'; //Works for vendor 
       $class_end = substr($class, $length);  

       $file = $base_directory . str_replace('\\', '/', $class_end) . '.php';
       
       //bellow two lines added just to test
      //require_once __DIR__.'/src/ClassA.php';
      //require_once __DIR__.'/src/Subpackage/ClassB.php';

      
      if(file_exists($file)) {
       require $file;
     }


    }

    

}

$autoloader = new Psr4Autoloader();
//$autoloader->add('Nfq\\Academy\\Homework\\', __DIR__.'/src/'); //does nothing, because i cnt figure out how to load it
$autoloader->register();

 //  ->add('Nfq\\Academy\\Homework\\', __DIR__.'/vendor/acme/');

    
