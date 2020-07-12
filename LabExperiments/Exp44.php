<!DOCTYPE HTML>
<html>
    <head>
        <title>    Innovative Learning Centre </title>
    </head>
    <body>
        <center><img src="abc.png" width=250px height="auto"></center>
        <center><h2 style="color: DarkBlue"> Welcome to Innovative Learning Centre Fees Calculator </h2></center><br>
        <form action ="" method ="post">
            <fieldset>
                <legend><b> Fees Details : </b></legend>
                <h3> Name of Student : <input type ="text" name="name" style="margin-left :124px;" required></h3>
                <h3> Sap ID of Student : <input type="number" name="sap" style="margin-left: 116px" required></h3>
                   Select Course <select name = "course" style = "margin-left : 175px">
  						<option value="Btech">BTech</option>
  						<option value="Law">Law</option>
						<option value="BBA">BBA</option>
						<option value="Design">Design</option>
					</select> 
 				   </br>
 				   </br>																								
 				   Travelling Expenses <select name = "Travelling_Expenses" style = "margin-left : 130px">
 				   <option value = "Yes"> Yes </option>
 				   <option value = "No"> No</option>
 				   </select>
 				   </br>
 				   </br>
 				   Hostel Fees<select name = "Hostel_Fees" style = "margin-left : 190px">
 				   <option value = "Yes"> Yes </option>
 				   <option value = "No"> No</option>
 				   </select>
 				   </br></br>
 				   Mess Fees<select name = "Mess_Fees" style = "margin-left : 200px">
 				   <option value = "Yes"> Yes </option>
 				   <option value = "No"> No</option>
 				   </select>
 				   </br></br>
 				   Others <select name = "Others" style = "margin-left : 220px">
 				   <option value = "Yes"> Yes </option>
 				   <option value = "No"> No</option>
 				   </select>
 				   </br></br>
 			
                <input type="submit" value="Submit">
            </fieldset>
        </form>
    </body>
</html>
<?php
    if($_POST)
    {
        $str = $_POST["name"];
        $str1 = $_POST["sap"];
        $str2 =70000;
        $travelling = $_POST["Travelling_Expenses"];
        $hostel = $_POST["Hostel_Fees"];
        $mess = $_POST["Mess_Fees"];
        $str6 = 5000;
        $str7 = 500;
        $str8 = 9000;
        $others = $_POST["Others"];
        $course = $_POST["course"];
        $str3 = 0;
        $str4 = 0;
        $str5 = 0;
        $str9 = 0;
        
        if($travelling == "Yes")
            $str3 = 1000;
        if($hostel == "Yes")
            $str4 = 5000;
        if( $mess == "Yes")
            $str5 = 1050;
        if($others == "Yes ")
            $str9 = 7890;
        $sum = $str2 + $str3 + $str4 + $str5 + $str6 + $str7 + $str8 + $str9;
        echo "Name is : $str <br>";
        echo "Course  : $course<br>";
        echo "Sap ID is : $str1 <br>";
        echo "Total Fee : $sum";
    }
?>