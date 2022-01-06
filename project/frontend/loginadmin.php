<?php include 'nav.php' ?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<style>
  .container{
    background-image: linear-gradient(135deg,#cf7dbe,#93bcdf,#dfcddc);
  }
.cancelbtn{
    margin-left:52%;
  text-align: center;
  border: .1px solid black;
  background:red;
  padding:10px
}
.all{
  border: .1px solid black;
  margin:20px;
 margin-left:50%;
 padding:10px;
}
.imp{
  
  margin:20px;
    margin-left:50%;
}
.submit{
  margin:10px;
    margin-left:53%;
    padding:9px;
}
h1{
  padding:10px;
  
  margin-left:50%;
}


  </style>
<body>

<!-- <p><marquee>Welcome to Login Pannel. Please Enter the Id and Password.</marquee></p> -->

<?php
if ($_SERVER["REQUEST_METHOD"]=="POST")
{
  include_once("cnn.php");
	$username = $_POST["username"];
	$password = $_POST["password"];
  $sql="SELECT * from admin WHERE username='$username' and password='$password'";
	$r = mysqli_query($cnn,$sql);
	if(mysqli_num_rows($r)==1){
		session_start();
		$_SESSION["username"]=$username;
		?>
			<script >
				window.location="schel.php";
			</script>
		<?php
	}
	else
		
        ?>
			<script language="javascript">
        alert("Invalid Username and Password  Try again !!!");
				window.location="loginadmin.php";
			</script>
		<?php
	
}
else
{?>
 
<form method="POST" class="final">
  <h1>AdminLogin</h1>
   <div class="container">

    <br><br><label for="uname"><b class="imp">Username</b></label><br>
    <input type="text" placeholder="Enter Username" name="username" class="all" required><br>

    <label for="psw"><b class="imp">Password</b></label><br>
    <input type="password" placeholder="Enter Password" name="password" class="all" required><br>
    <input class="submit" type="submit" value="Log In" name="submit"><br><br>            
  <br><br><br><br><br>
  
</form>

</body>
</html>
<?php	
}
?>
<?php include('footer.php'); ?>
