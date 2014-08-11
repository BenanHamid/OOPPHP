<?php session_start();
if($_SERVER['REQUEST_METHOD'] != 'POST'){
	header('Location: index.php');
	die();
}
if(isset($_SESSION['isLogged']) && $_SESSION['isLogged'] == true){
	header('Location: index.php');
	die();
}else{
	$username = $pass = '';
	$usernamePattern = '/^[a-zA-Z ]*$/';
	$passPattern = '/^[_a-z0-9A-Z]+$/';
	//$validator = 0;
	$toIndex = false;
	
	function clearData($data){
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
	try{
		if($_SERVER['REQUEST_METHOD'] == 'POST'){
			//echo 'ba4ka';
			if(!empty($_POST['username']) && strlen($_POST['username']) > 4){
				$username = clearData($_POST['username']);
				if(preg_match($usernamePattern, $username)){
					
				}else{
					$toIndex = true;
					throw new Exception('Invalid Username', 112);
				}
			}else{
				$toIndex = true;
				throw new Exception('Username can\'t be empty or shorter than 4 symbols', 113);
			}
			if(!empty($_POST['password']) && strlen($_POST['password']) > 4){
				$pass = clearData($_POST['password']);
				if(preg_match($passPattern, $pass)){
					
				}else{
					$toIndex = true;
					throw new Exception('Invalid Password', 114);
				}
			}else{
				$toIndex = true;
				throw new Exception('Password can\'t be empty or shorter than 4 symbols', 115);
			}
			
			if($toIndex){
				header('Location:index.php?err=QQ');
				die();
			}else if(!$toIndex){
				$_SESSION['isLogged'] = true;
				$_SESSION['username'] = $username;
				header('Location:index.php');
				die();
			}
		}
	}catch(Exception $e){
		//echo 'Caught exception ',  $e->getMessage(), "\n";
		$_SESSION['errorNumber'] = $e->getCode();
		$_SESSION['errorMessage'] = $e->getMessage();
		header('Location:index.php?err=QQ');
		die();
		
	}
}