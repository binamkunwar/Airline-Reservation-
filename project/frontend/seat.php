<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="">
        <table>
            <tr>
                <td>Window</td>
                <td>Middle</td>
                <td>Corner</td>
            </tr>
            
            <? php
            $sql="Select *from seat";
            $r=mysqli_query($cnn,$sql);
            while($rs=mysqli_fetch_array($r))
            {
                print("<tr>");
                

            }
            ?>
        </table>
    </form>
</body>
</html>