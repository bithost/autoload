<?php

use Nfq\Academy\Homework\ClassA;
use Nfq\Academy\Homework\Subpackage\ClassB;

require_once __DIR__.'/bootstrap.php';

require_once __DIR__.'/src/Subpackage/ClassB.php';

$a = new ClassA();
$a->doSomething();

$b = new ClassB();
$b->doSomething();
