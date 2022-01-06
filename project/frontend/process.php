<?php

session_start();
include_once("cnn.php");
$id=0;
$update=false;
$flight='';
$location='';
$time='';
$reach='';
//var_dump($_POST);
 
if(isset($_POST['save'])){
   
    $flight=$_POST["flight"];
    $location=$_POST["location"];
    $date=$_POST["date"];
    $time=$_POST["ttime"];
    $reach=$_POST["rtime"];
   
    
    
    ///////////insert value query//////////////
  $sql = "INSERT INTO schedule(flight,location,date,time,reach)VALUES('$flight','$location','$date','$time','$reach')";
    mysqli_query($cnn,$sql);
    
    ?>
    <script>
      alert("Flight Added Successfully");
      window.location="schel.php";
  </script>
    <?php
    
}




/////////////////delete schedule query///////////////////////////
if(isset($_GET['delete'])){
  $id=$_GET['delete'];
  $deletequery="delete from schedule where id=$id";
  $query=mysqli_query($cnn,$deletequery);

  ?>
    <script>
      alert("Flight Deleted Successfully");
      window.location="schel.php";
  </script>
    <?php
}




////////////////Edit Schedule query////////////////////////
if(isset($_GET['edit'])){
$id=$_GET['edit'];
$update=true;
  $sql="SELECT * FROM schedule WHERE id=$id";
 $result=mysqli_query($cnn,$sql);
 $rs = mysqli_fetch_array($result);
 
  if(mysqli_num_rows($result)==1)
  {
    $row=$result->fetch_array();
    $flight=$rs["flight"];
    $location=$rs["location"];
    $date=$rs["date"];
    $time=$rs["time"];
    $reach=$rs["reach"];
  }

}
if (isset($_POST['update'])){
  $id=$_POST['id'];
  $flight=$_POST['flight'];
    $location=$_POST['location'];
    $date=$_POST['date'];
    $time=$_POST['ttime'];
    $reach=$_POST['rtime'];

    $sql="UPDATE `schedule` SET `flight` = '$flight', `location` = '$location', `date` = '$date', `time` = '$time', `reach` = '$reach' WHERE `schedule`.`id` = $id;";
   mysqli_query($cnn,$sql);
 
?>
<script>
alert("Flight update Successfully");
      window.location="schel.php";
</script>
<?php
}
?>