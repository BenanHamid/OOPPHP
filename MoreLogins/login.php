<?php session_start();
if(isset($_SESSION['isLogged']) && $_SESSION['isLogged'] == true){
	header('Location: index.php');
	die();
}else{
	$username = $pass = '';
	$usernamePattern = '/^[a-zA-Z ]*$/';
	$passPattern = '/^[_a-z0-9A-Z]+$/';
	$validator = 0;
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
					$validator++;
				}else{
					$toIndex = true;
					throw new Exception('Invalid Username');
				}
			}else{
				$toIndex = true;
				throw new Exception('Username can\'t be empty or shorter than 4 symbols');
			}
			if(!empty($_POST['password']) && strlen($_POST['password']) > 4){
				$pass = clearData($_POST['password']);
				if(preg_match($passPattern, $pass)){
					$validator++;
				}else{
					$toIndex = true;
					throw new Exception('Invalid Password');
				}
			}else{
				$toIndex = true;
				throw new Exception('Password can\'t be empty or shorter than 4 symbols');
			}
			if($validator == 2){
					$_SESSION['isLogged'] = true;
					$_SESSION['username'] = $username;
					//echo 'love is real lol';
					header('Location: index.php');
			}else{
				$toIndex = true;
			}
			if($toIndex){
				header('Location:index.php?err=QQ');
			}
		}
	}catch(Exception $e){
		//echo 'Caught exception ',  $e->getMessage(), "\n";
		header('Location:index.php?err=QQ');
		
	}
}