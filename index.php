<?php

include 'Singleton.php';

$a = Singleton::getInstance();
$a->setTest("aaaa");
echo $a->getTest();
$b = Singleton::getInstance();
echo $b->getTest();
