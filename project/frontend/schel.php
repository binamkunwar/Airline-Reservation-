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
            height:100vh;
        }
        .schel{
            display:flex;
            justify-content:center;
            text-align:center;
             
        }
        td{
            padding:20px;
        }
        .whole{
            display:flex;
            justify-content:center;
            text-align:center;
             margin-top:50px;
             border:2px solid blue;
             padding:20px;
        }
        .btn-delete{
            background:green;
            padding:5px;
            text-decoration:none;
            color:black;
        }
        .btn-edit{
            background:red;
            padding:7px;
            text-decoration:none;
            color:black;
        }
        .msg_type[alert]{
            backgrou
        }
       .user{
        display:flex;
        justify-content:center;
        text-align:center;
        padding:5px;
        background:green;
        color:black;
        text-decoration:none;
        margin:20px;
       }
       .save{
           color:red;
           
       }
       .login{
        display:flex;
        justify-content:center;
        text-align:center;
        text-decoration:none;
        padding:5px;
        margin:20px;
       }
       .log{
        padding:10px;
        display:flex;
        justify-content:center;
        text-align:center;
        background-color:red;
        margin:10px;
        text-decoration:none;
        color:black;
       }
    </style>
    </head>
<body>
<div>
<a  class="user"href="index.php">USER INTERFACE</a>

</div>

<?php require_once'process.php';?>

    <?php
        if(isset($_SESSION['message'])):?>

<div class="alert" alert-<?php=$_SESSION['msg_type']?>>
    <?php
        echo ($_SESSION['message']);
        unset($_SESSION['message']);
    ?>
</div>
<?php endif ?>
<?php
$mysqli=new  mysqli('localhost','root','','airlines') or die (mysqli_error($mysqli));
$result= $mysqli->query("SELECT * FROM schedule")or die ($mysqli->error);
// pre_r($result);
// pre_r($result->fetch_assoc());

function pre_r($array){
    // echo'<pre>';
    print_r($array);
    echo'</pre>';
}
?>
<div>
<table class="schel" border=2px cellpadding=3 cellspacing=0>
<tr>
    <th>Flight</th>
    <th>Location</th>
    <th>Date</th>
    <th>Time</th>
    <th>Reach</th>
</tr>
<?php
while($row=$result->fetch_assoc()):?>
<tr>
    
    <td><?php echo $row['flight']?></td>
    <td><?php echo $row['location']?></td>
    <td><?php echo $row['date']?></td>
    <td><?php echo $row['time']?></td>
    <td><?php echo $row['reach']?></td>
    <td>
        <a href="schel.php?edit=<?php echo $row['id'];?>" class="btn-edit">Edit</a>
        <a href="process.php?delete=<?php echo $row['id'];?>" class="btn-delete">Delete</a>
    </td>
</tr>
<?php endwhile;?>
</table>

</div>


<div class="whole">
    <form action="process.php" method="POST">
    <input type="hidden" name="id" value="<?php echo $id; ?>">
    <div class="part">
    <label for="">Flight=</label>
    <input class="block" type="text" name="flight" value="<?php echo $flight; ?>" placeholder="flight" required><br><br>

    <label for="">Location=</label>
    <input type="text" name="location" value="<?php echo $location; ?>"placeholder="location" required> <br><br>

    <label for="">Depatrure Date=</label>
    <input type="date"  name="date" value="<?php echo $date; ?>" placeholder="date" requird> <br><br>

    <label for="">Time</label>
    <input type="time"  name="ttime"value="<?php echo $time; ?>" placeholder="time" required> <br><br>

    <label for="">Reach</label>
    <input type="time"  name="rtime" value="<?php echo $reach; ?>" placeholder="time"> <br><br>

   <div class="save">
   <?php 
   if($update==true):
   ?>
   <button type="submit" name="update" value="update" required>Update</button>
  
    <?php else: ?>
     <button class="save" type="submit" name="save" value="Save" required>Save</button>
   <?php endif; ?>
   </div>
   
    </div>
    
    </form>
    
    </div>
    <a  class="log" href="loginadmin.php">LogOut</a>
</body>
</html>