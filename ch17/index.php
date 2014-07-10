<?php
include 'singleton.php';

$a = Singleton::getInstance();
$b = Singleton::getInstance();

/*$a->setPlayerStats(100, 6);
$b->setPlayerStats(252, 611);*/
echo '<pre>'.print_r(Singleton::getPlayerStats(),true).'<pre>';