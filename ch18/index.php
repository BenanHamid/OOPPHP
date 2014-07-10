<?php
include 'registry.php';

Registry::setData('name', 'benan');
$a = Registry::getData('name');
echo $a.'<br>';

Registry::setData('sss', 'asdasdas');
$b = Registry::getData('sss');
echo $b.'<br>';
echo $a.'<br>';