<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="log.css">
</head>
<body>
  <?php
if ($_SERVER["REQUEST_METHOD"]=="POST"){
include_once("cnn.php");
  $username=$_POST['username'];
 $password= $_POST['password'];
 $sql="SELECT * from signup WHERE username='$username' and password='$password'";
 $r = mysqli_query($cnn, $sql);
if(mysqli_num_rows($r)==1){
  session_start();
  $_SESSION["username"]=$username;{
  ?>
     <script>window.location.href = "book.php";</script>
        <?php
   }
  }
  else{
    ?>
 <script>alert("Invalid username!! Enter correct username or  Create your account !!!");</script>
    <?php
  }
}
 ?> 
 <?php include'nav.php'?>
    <div class="container">
        <h1> UserLogin</h1><br><br>
        <div class="form">
            <form action="" method="POST">
                Username:<input type="text" name="username"  required><br><br><br>
                Password: <input type="password" name="password"  required><br><br>
                <input class="butt" type="submit" value="Log In" name="submit"><br>
                
                <br>
                
                <a href="signup.php">Sign up</a><br>
                
            </form>
            
        </div><br><br></b>
        <?php include'footer.php'?>
    </div>
    
</body>
</html>