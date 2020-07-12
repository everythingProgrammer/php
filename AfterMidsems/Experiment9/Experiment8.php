<!DOCTYPE html>
<html>
	<head>
		<title> Question - 4 </title>
	</head>
	<body>
		<form action="" method="post">
			<h3> Employee Information </h3>
			Enter Employee ID : <input type="text" name="id"><br><br>
			Enter Name : <input type="text" name="string"><br><br>
			Enter Age : <input type="number" name="num"><br><br>
			Enter Gender : <input type="radio" name="gender" value="Male">Male  <input type="radio" name="gender" value="gender">Female<br><br>
			Enter Designation : <select name="designation">
									<option value="Programmer"> Programmer </option>
									<option value="Project Lead"> Project Lead </option>
									<option value="Team Member"> Team Member</option>
									<option value="Other"> Other </option>
								</select><br><br>
			Enter Salary : <input type="number" name="sal"><br><br>
			<input type="submit" value="Submit">
		</form>
	</body>
</html>

<?php
    if($_POST)
    {
        $str = $_POST["id"];
        $str1 = $_POST["string"];
        $str2 = $_POST["num"];
        $str3 = $_POST["gender"];
        $str4 = $_POST["designation"];
        $str5 = $_POST["sal"];
        class Employee
        {
            function displayEmployeeDetails($str,$str1,$str2,$str3,$str4,$str5)
            {
                if($str4 != "Programmer" && $str4 != "Project Lead" && $str4 != "Team Member")
                {
                    throw new Exception("Designation Not Appropriate");
                }
                else 
                {
                    echo "Employee Name : ".$str."<br>";
                    echo "Employee Name : ".$str1."<br>";
                    echo "Employee Age : ".$str2."<br>";
                    echo "Employee Gender : ".$str3."<br>";
                    echo "Employee Designation : ".$str4."<br>";
                    echo "Employee Salary : ".$str5."<br>";
                }
            }
            function viewEmployeeDetails()
            {
                
            }
        }
        $emp = new Employee();
        try
        {
            $emp->displayEmployeeDetails($str,$str1,$str2,$str3,$str4,$str5);
        }
        catch (Exception $e)
        {
            echo $e->getMessage();
        }
    }
?>