<?php
include 'iDecorator.php';

class Article implements iDecorator{
	public function getData(){
		return 'i\'ve got the data';
	}
}