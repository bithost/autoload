<?php

class Psr4Autoloader
{
    // add your code here...
    static public function add($class) {
        require_once __DIR__.'/src/ClassA.php';
        require_once __DIR__.'/src/Subpackage/ClassB.php';
    }
    
   // spl_autoload_register('Autoloader::add');
}

spl_autoload_register('Psr4Autoloader::add');

$autoloader = new Psr4Autoloader();
// $autoloader
//      ->add('Nfq\\Academy\\Homework\\', __DIR__.'/src/')
//      ->register();
