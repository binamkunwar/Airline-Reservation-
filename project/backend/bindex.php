<?php

include_once("cnn.php");
?>

<?php
if ($_SERVER["REQUEST_METHOD"]=="POST")
{
	$user = $_POST["tuser"];
	$pass = $_POST["tpass"];
	$sql = "select * from tbluser where username='" . $user . "' and password='" . md5($pass) . "'";
	$r = mysqli_query($cnn,$sql);
	if(mysqli_num_rows($r)==1){
		session_start();
		$_SESSION["user"]=$user;
		?>
			<script language="javascript">
				window.location="welcome.php";
			</script>
		<?php
	}
	else
		echo "Invalid username or password.";
	
}
else
{?>
<form method="post">
<h3>User Login</h3>
<pre>
Username:	<input type="text" name="tuser">
Password:	<input type="password" name="tpass">
<input type="Submit" value="login">
</pre>
</form>
	
<?php	
}
?>

