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
		echo '<pre>'.print_r($this->rules, true).'</pre>';
        //var_dump($this->rules[$field]);
        //VIMP vikam pak samiq obekt !!! i moga da pravq posle posledovatelno vikane 
        //$a->setrules(...)->setrules(...)->... !
        return $this;
	}
	public function validate(){
        $a = null;
		foreach($this->rules as $k=>$v){
            //echo $k.'<br>';
			foreach($v as $vv){
                //VIMP overwrite-vat se ako ne e 2meren masiv !
                //echo $k;
                //$b = 'min_length';
                //VIMP $this->$vv['type'] VIKA METOD SUS SUOTVETNOTO IME !
                //->$ IMA DOLAR SLED STRELKATA !!!!!!!!!!!!!!!!!
                //(PRED IMETO NA MASIVA) ZA TOVA SE PRIEMA 4E VIKAM NQKAKVO IME !
				$a[$k][] = array($this->$vv['type']($k, $vv['param']));
                //echo $this->$vv['type']($k, $vv['param']);
				//echo '<pre>'.print_r($a, true).'</pre>';
                /*if($vv['type'] == 'min_length'){
                   echo $this->min_length($k, $vv['param']);
                }else{
                    echo $this->max_length($k, $vv['param']);
                }*/
			}
		}
        
		//echo '<pre>'.print_r($a, true).'</pre>';
        //echo $this->data['name'].'<br>';
		return $a;
	}
	private function min_length($field, $param){
        //var_dump($this->data);
        //echo $field.'<br>';
        //echo $this->data['name'].'<br>';
        //echo $this->data[$field].'<br>';
		if(mb_strlen($this->data[$field]) > $param){
			$a =  $field.' min_length ok<br>';
		}else{
			$a =  $field.' min_length NOT ok<br>';
		}
		return $a;
	}
	private function max_length($field, $param){
		if(mb_strlen($this->data[$field]) < $param){
			$a =  $field.' mAX_length ok<br>';
		}else{
			$a =  $field.' max_length NOT ok<br>';
		}
		return $a;
	}
}