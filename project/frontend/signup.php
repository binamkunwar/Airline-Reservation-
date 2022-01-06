<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="signup.css">
</head>
<body>
 <?php include'nav.php'?>  
 <p><marquee> Please Enter your information.</marquee></p>

     <div class="container">
    
        <h1>Create an account</h1><br><br>
        <div class="contain">

            <form action="createaccount.php" method="Post" onsubmit="return validate();">
            Name: <input type="text" name="username" required><br><br>
            Address: <input type="text" name="address"required><br><br>
            E-mail:<input type="text" name="email" required><br><br>
            Gender: <br><br>
               Male: <input type="radio" name="gender" value="m" >
               Female: <input type="radio" name="gender" value="f"><br><br>
               Password:<input type="password" name="password" id="password" required><br><br>
            Confirm Password: <input type="password" name="confirmpassword" id="confirmpassword" required><br><br>
            <input type="submit"value="submit" ><br><br>
            <button class="button"></button>
            </form> 
         </div><br><br><br><br><br><br><br><br><br><br>
        
    </div>
    <?php include'footer.php'?>
</body>
<script>
function validate()
{
if (document.getElementById("password").value != document.getElementById("confirmpassword").value)
{
    alert("Password verification mismatch");
    return false;
}
else
return true;
}



</script>
</html>