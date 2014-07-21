<?php

$a = new Test();
go($a);

function go(Test $a){
	var_dump($a);
}

class Test{


}