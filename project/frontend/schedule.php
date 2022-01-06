<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    body{
        background-image: linear-gradient(135deg,#cf7dbe,#93bcdf,#dfcddc);
         height: 100vh;
         }
.schel{
    display:flex;
    justify-content:center;
    text-align:center;
    margin:20px;
    }
    td{
        padding:20px;
    }
    </style>
</head>
<body> 
    
    <?php include 'nav.php'?>
    <table  class="schel" border=2px cellpadding=3 cellspacing=0>
    <tr>
    <td>Flight No</td>
    <td>Destination</td>
    <td>Departure Date</td>
    <td>Departure Time</td>
    <td>Time taken</td>
    <td>Book</td>
    </tr>
    <?php 
    include_once("cnn.php");
    $sql = "select * from schedule";
    $r = mysqli_query($cnn, $sql);
    while ($rs = mysqli_fetch_array($r))
    {
        print("<tr>");
            
            print("<td>" . $rs["flight"] ."</td>");
            print("<td>" . $rs["location"] ."</td>");
            print("<td>" . $rs["date"] ."</td>");
            print("<td>" . $rs["time"] ."</td>");
            print("<td>" . $rs["reach"] ."</td>");
            print("<td><a href='userlogin.php?id=" . $rs[0] ."'>Book</a></td>");
        print("</tr>");

    }
?>
    </table> <br><br><br><br><br><br><br><br><br>
    <?php include'footer.php'?>
</body>
</html>