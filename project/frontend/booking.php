<?php

include "cnn.php";
$flight=$_POST["flight"]; 
$from=$_POST["from"]; 
$des=$_POST["des"]; 
$ddate=$_POST["ddate"]; 
$rdate=$_POST["rdate"]; 
$adult=$_POST["adult"]; 
$child=$_POST["child"]; 
$nation=$_POST["nation"];
$insertdata = "INSERT INTO reserving(flight,entry,des,ddate,rdate,adult,child,nation) VALUES('$flight','$from','$des','$ddate','$rdate','$adult','$child','$nation')";
mysqli_query($cnn,$insertdata);
?>

<script>
      

// function validate(){
// var flight=document.getElementById.flight.value;
// var from=document.getElementById.from.value;
// var des=document.getElementById.des.value;
// var ddate=document.getElementById.ddate.value;
// var rdate=document.getElementById.rdate.value;
// var child=document.getElementById.child.value;
// var adult=document.getElementById.adult.value;
// var nation=document.getElementById.nation.value;
// if((flightErr || fromErr || desErr|| ddateErr || rdateErr || childErr || adultErr || nationErr)==true){
//       return false;
// }
// else{
// var dataPreview="You've entered the following details: \n"+
// "Flight:" + flight +"\n" +
// "from:" + from +"\n" +
// "des:" + des +"\n" +
// "ddate:" + ddate + "\n" +
// "rdate:" + rdate + "\n" +
// "child:" + child + "\n" +
// "adult:" + adult + "\n" +
// "nation:"+ nation + "\n" +
// alert(dataPreview);
// }
alert(" Your Flight  has been sucessfully booked");
window.location="index.php";
      
</script>