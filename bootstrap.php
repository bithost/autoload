<?php

class Psr4Autoloader
{
    // add your code here...
    public function register()
    {
        spl_autoload_register(array($this, 'add'));
    }
    
     public function add($class) {
        $prefix = 'Nfq\\Academy\\Homework\\';
	
	   $length = strlen($prefix);

        $base_directory = __DIR__ . '/src/';

       

        //if(strncmp($prefix, $class, $length) !== 0) {
       //     return;
       //   }
       $class_end = substr($class, $length);  

        $file = $base_directory . str_replace('\\', '/', $class_end) . '.php';
        
       //require_once __DIR__.'/src/ClassA.php';
       //  require_once __DIR__.'/src/Subpackage/ClassB.php';
       if(file_exists($file)) {
        require $file;
      }
       }
    

    

}



$autoloader = new Psr4Autoloader();
$autoloader
   ->add('Nfq\\Academy\\Homework\\', __DIR__.'/src/')
 //  ->add('Nfq\\Academy\\Homework\\', __DIR__.'/vendor/acme/');
   ->register();
    
