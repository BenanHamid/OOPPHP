<?php session_start();
include 'header.php';

if(isset($_SESSION['isLogged']) && $_SESSION['isLogged'] == true){
	echo 'Welcome '.$_POST['username'];
}else{?>
	<form action="<?php echo htmlspecialchars('login.php') ?>" method="post">
		<p>Username: <input type="text" name="username">
			<span class="err">* <?php echo $nameErr; ?></span>
		</p>
		<p>Pass: <input type="password" name="password">
			<span class="err">* <?php echo $passErr; ?></span>
		</p>
		<p><textarea name="comment" rows="6" cols="30"></textarea>
			<!--<span class="err">* <?php// echo $passErr; ?></span>-->
		</p>
	</form>
	
<?php } 
include 'footer.php';
?>
