<?php
include 'decorator.php';
include 'Article.php';

$a = new Article();
$b = new Decorator($a);
echo $b->getFormattedOutput();
