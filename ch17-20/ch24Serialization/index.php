<?php
spl_autoload_extensions(".php");
spl_autoload_register();

//VIMP Serialization grubo kazano vzema 1 obekt i go pravi na string !
//polzva se 6toto tezi obekti se uni6tojavat kato se izpolzvat
//i posle trqbva pak nanovo da se napravi obekt ot klasa !!!
//a s tova ne6to moga da durja obekta s vsi4kite mu parametri
//nqkude v baza danni etc i posle da go deserializam i izpolzvam pak !
$a = new \User();
$a->setAge(15);
$a->setName('Kataka');
/*echo $a->getAge().'<br>';
echo $a->getName();*/
$b = serialize($a);
$c = unserialize($b);