<!DOCTYPE html>
<html>
<head></head>
<body>
<h2 style ="color:Red text-align: center" >Ticket Booking Counter </h2> 
<form action=""  method= "post">

To Book seats instructions are as follows enter seat number with these starting digits  </br>
<p>1 for upper</br>
2 for lower </br>
3 for middle </br>
4 for side lower  </br>
5 for side upper</br></p>
Entered value must be four digit. 
5201 Signifies 1 side upper seat in bogey number 2 <br>
<input type = "text"  name = "Seat" >
<input type ="submit" value="Submit" style="Background-color: blue">
</form>
</body>
</html>
<?php 
if($_POST)
{
    $seat = $_POST["Seat"];
    //$side = $seat/1000;
    /* noseats will carry number of seats*/
    /* berth will carry the bogey number */
    /* num1 carries the what type of seat is this*/
    $num1 = floor($seat/1000);
    $noseats = $seat%100;
    $berth = floor($seat/100);
    $berth = $berth%10;
    if($num1 == 1)
        echo "$noseats upper seats in bogey number $berth  booked ";
    else if($num1 ==2)
        echo "$noseats lower seats in bogey number $berth  booked ";
    else if($num1==3)
        echo "$noseats middle seats in bogey number $berth  booked ";
    else if($num1 ==4)
        echo "$noseats side lower  seats in bogey number $berth  booked ";
     else if($num1 ==5)
        echo "$noseats side upper seats in bogey number $berth  booked ";
     else 
         echo " Wrong Choice ";
}
?>