<?php
error_reporting(E_ALL ^ E_NOTICE);
class Validator{
	
	private $data = array();
	private $rules = array();
	
	public function setData($param){
		$this->data = $param;
	}
	public function setRules($field, $type, $param){
		//VIMP 2meren masiv qvno kato e s 1 i su6ti kliu4 tozi 2 meren masiv ne se prezapisvat stoinostite !
		//ako e 1meren masiv se overwrite-vat stoinostite !!!!!!!!!!!!!!
		//Tui kato [] e prazno vseki put kato sloja stoinost vutre 6te se uveli4ava s 1 
		//0, 1, 2 i tnt !~!!!!!!!!~! AVTO SE UVELI4AVA S !!!
		$this->rules[$field][] = array('type'=>$type, 'param'=>$param);
		//VIMP chain chaining the method !!! vru6ta samiq obekt !!!
		return $this;
		//echo '<pre>'.print_r($vv, true).'</pre>';
	}
	public function validate(){
		foreach($this->rules as $k=>$v){
			foreach($v as $vv){
				$a[$k] = ($this->$vv['type']($k, $vv['param']));
				//echo '<pre>'.print_r($a, true).'</pre>';
				//sdsadasd
				
			}
		}
		//cho '<pre>'.print_r($a, true).'</pre>';
		return $a;
	}
	private function min_length($field, $param){
		if(mb_strlen($this->data[$field]) > $param){
			$a =  $field.' min_length ok<BR>';
		}else{
			$b =  $field.' min_length NOT ok<BR>';
		}
		return $a.' '.$b;
	}
	private function max_length($field, $param){
		if(mb_strlen($this->data[$field]) < $param){
			$a =  $field.' mAX_length ok<BR>';
		}else{
			$b =  $field.' max_length NOT ok<BR>';
		}
		return $a.' '.$b;
	}
}