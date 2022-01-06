<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="book.css">
</head>
<body>
<?php include 'nav.php'?>
<div class="main">
    
    <div class="con">
       <img src="img/7.jpg" alt="">
    </div>
    <div class="location">

    
       <form action="booking.php" method="POST" onsubmit="return validate()">
           
            <p required>
                <input type="radio" name="flight" value="one" id="one">oneway
                <input type="radio" name="flight" value="round" id="round">round trip
            </p>
           <p>from <br> 
               
               <select name="from" id="from" required>
                   <option value="Dhang" >Dang</option>
                   <option value="Kathmandu" >Kathmandu</option>
                   <option value="Pokhara" >Pokhara</option>
                   <option value="" selected disabled hidden >--From--</option>
                   <option value="Simara">Simara</option>
               </select>
           </p>
           <p>To <br>           
               <select name="des" id="to" enctype = "multipart/form-data" required>
                   <option value="Pokhara" >Pokhara</option>
                   <option value="Kathmandu" >Kathmandu</option>
                   <option value="Dhang" >Dang</option>
                   <option value=""selected disabled hidden >--To--</option>
                   <option value="Simara">Simara</option>
               </select>
           </p>
           <p>Departure Date <br>
               <input type="Date" name="ddate" id="ddate" required>
           </p>
           <p>Returning<br>
            <input type="Date" name="rdate" id="rdate">
        </p>
        <p>Adult <br>
            <input type="number" name="adult" style="text-align:center" min="1" equired>
        </p>
        <p>child <br>
            <input type="number"  style=" text-align:center"name="child" min="0">
        </p>
        <p>Naionality <br>
            <select name="nation" id="" required>
            <option value="Neplease" >Neplease</option>
            <option value="Indian" >Indian</option>
           
            <option value=""selected disabled hidden >Select Nationality</option>
            
        </select>
        </p>
        <p>
        <input type="submit" value="Submit" name='save'><br><br>
        <span id="err" style="color:red;"></span>
<div class="log"> 
    <a href="userlogin.php" >LogOut</a> </div>
        </p>
        </form>
    </div>
    <div class="image">
        <img src="img/4.jpg" alt="">
        
    </div>
   
</div>
<?php include'footer.php'?>

<script>

function validate(){
var from = document.getElementById('from').value;
var to = document.getElementById('to').value;
 if(from==to){
    document.getElementById('err').innerText="From and Destination is same ";
    return false;
 }
 else{
    document.getElementById('err').innerText="";
 }

 var ddate=document.getElementById('ddate').value;
    var rdate=document.getElementById('rdate').value;
    if(rdate<ddate){
        document.getElementById('err').innerText=" check departure date and returning date";
        return false;
    }
    else{
        document.getElementById('err').innerText="";
    }

var ddate=document.getElementById('ddate').value;
var date=document.getElementById('date').value;
if(ddate<date)
{
    document.getElementById('err').innerText="check the departre date";
    return false;
}
else{
    document.getElementById('err').innerText="";
}





</script>

</body>

</html>