<?php
include 'singleton.php';
$a = Singleton::getInstance();
//$b = Singleton::getInstance();
/*$a = */Singleton::setPlayerStats(100, 6);
//$b->setPlayerStats(2, 6);

$dead = false;
if($dead){
	$a->setPlayerStats(0, 6-1);
}
//$a->getPlayerStats();
//echo $a->

echo '<pre>'.print_r(Singleton::getPlayerStats(),true).'<pre>';
