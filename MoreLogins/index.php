<?php session_start();
//session_destroy();
error_reporting(E_ALL ^ E_NOTICE);
include 'includes/header.php';

$nameErr = $passErr = '';

if(isset($_SESSION['isLogged']) && $_SESSION['isLogged'] == true){
	echo '<p>Welcome '.$_SESSION['username'].'</p>';
	echo '<p>You have unlocked level 1 of Beni\'s Dungeon ! Grats !</p>';
}else{
	if($_GET['err'] == 'QQ'){
		$nameErr = $passErr = 'Invalid Input';
	}
?>
	<form action="<?php echo htmlspecialchars('login.php') ?>" method="post">
		<p class="formField">Username: <input type="text" name="username" placeholder="Your Name">
			<span class="err">* <?php echo $nameErr; ?></span>
		</p>
		<p class="formField">Pass: <input type="password" name="password" placeholder="Your super pass">
			<span class="err">* <?php echo $passErr; ?></span>
		</p>
		<!--<p class="formField"><textarea name="comment" rows="6" cols="30" placeholder="Your sizes"></textarea>
			<!--<span class="err">* <?php// echo $passErr; ?></span>-->
		</p>
		<input class="button" type="submit" name="submit" value="Login">
	</form>
<?php }
include 'includes/footer.php';
?>
