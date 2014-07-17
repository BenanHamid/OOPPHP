<?php
spl_autoload_extensions(".php");
spl_autoload_register();

/*$a = new Validator();
$b = new Decorator($a);
$b->getFormattedData();*/
//echo '<pre>'.print_r($a, true).'</pre>';
/*$a[] = array(0=>'kolio');

*/

$a = new Validator();
$a->setData(array('name'=>'ben', 'pass'=>'12345'));
$a->setRules('username', 'max_length', 8)
	->setRules('username', 'min_length', 4)
	->setRules('pass', 'min_length', 4);

//$a->validate();

$b = new Decorator($a);
$c = $b->getFormattedData();
//var_dump($c);
foreach($c as $k=>$v){
	echo $v;
}





