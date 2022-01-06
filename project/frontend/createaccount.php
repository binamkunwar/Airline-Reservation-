<PRE>
<?php

include_once("cnn.php");
//print_r($_POST);

$username=$_POST["username"]; 
$gender=$_POST["gender"];
$address=$_POST["address"];
$email=$_POST["email"]; 
$password=$_POST["password"];

$sql = "insert into signup (username, gender, address, email, password) 
values ('$username', '$gender', '$address', '$email', '$password')";
//echo $sql;
mysqli_query($cnn, $sql);
?>
<script>
alert("User created sucessfully");
      window.location="userlogin.php";
</script>