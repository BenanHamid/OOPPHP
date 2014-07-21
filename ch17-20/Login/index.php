<?php session_start();
session_destroy();
include 'header.php';
?>
<?php
$name = $pass = $age = $comment = "";
$errName = $errPass = $errAge = $errComment = "";
$namePattern = "/^[a-zA-Z ]*$/";

if($_SESSION['isLogged']==true){
	echo 'Welcome '.$_POST['username'].'<br>';
}
else{
	function formatData($data){
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		
		return $data;
	}
	if($_SERVER['REQUEST_METHOD']=='POST')
	{
		if(empty($_POST['username'])){
			$errName = 'cant be empty';
		}else {
			$name = formatData($_POST['username']);
			if(preg_match($namePattern, $name)){
				$_SESSION['isLogged'] = true;
				//var_dump($errName);
			}else{
				$errName = 'invalid name';
				//header('Location: index.php?username=$name');
			}
		}
	}
	?>
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
	<p>Username: <input type="text" name="username">
	<span class="err">* <?php echo $errName; ?></span></p>
	<p>Pass: <input type="password" name="pass"></p>
	<p>Age: <select name="age2">
		<option name="age">18</option>
		<option name="age">15</option>
		<option name="age">12</option>
	</select></p>
	<p><textarea name="comment" cols="20" rows="10"></textarea></p>
	<input type="submit" value="SendMe">
	</form>
	<?php } ?>
<?php include 'footer.php'; ?>