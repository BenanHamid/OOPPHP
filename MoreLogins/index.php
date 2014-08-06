<?php session_start();
error_reporting(E_ALL ^ E_NOTICE);
include 'header.php';

if(isset($_SESSION['isLogged']) && $_SESSION['isLogged'] == true){
	echo 'Welcome '.$_POST['username'];
}else{?>
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
include 'footer.php';
?>
