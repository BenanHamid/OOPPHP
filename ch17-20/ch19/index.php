<?php
/*include 'decorator.php';
include 'article.php';*/
spl_autoload_extensions(".php"); // comma-separated list
spl_autoload_register();

$a = new Article();
//VIMP to 4aka tuka da imam obekt oba4e ako go zadam direktno taka
//6te vikne stoinostta v toq metod getData i 6te vurne string !
//$b = new Decorator($a->getData);
$b = new HtmlDecorator($a);
$c = $b->getFormattedOutput();
echo $c;
