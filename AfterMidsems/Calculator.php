<!Doctype html>
<html>
<head>
</head>
<body>
<h2 > This is a simple Calculator </h2>
<form action="" method ="post">
Input:    <input type= "text" maxlength = "5" name = "Num1" placeholder = " Enter Number1">
Input: <select name = "option">
		<option> + </option>
		<option> - </option>
		<option> * </option>
		<option> / </option>
		<option> % </option>
		</select>
Input:    <input type ="text"  maxlength = "5" name = "Num2" placeholder =" Enter Number2"><br>
<input type ="submit" value="Submit" style="Background-color: blue">
</form>
</body>
</html>
</body>
</html>
<?php 
class Calc
{
    function add($a, $b)
    {
        return $a+$b;
    }
    function substract($a , $b)
    {
        return $a-$b;
    }
    
    function multiply($a, $b)
    {
        return $a*$b;
    }
    function divide($a, $b)
    {
        if($b != 0)
            return $a/$b;
        else 
            echo " Divide by Zero Exception"; 
        return -1;
    }
}
if($_POST)
{
    $work = new Calc();
    $num1 = $_POST["Num1"];
    $num2 = $_POST["Num2"];
    $submit = $_POST["option"];
    if($submit =='+')
        echo "Addition is ".$work->add($num1, $num2);
    else if($submit == '-')
        echo "Substraction is ".$work->substract($num1, $num2);
    else if($submit == '*')
        echo "Product is ".$work->multiply($num1, $num2);
    else if ($submit == '/')
        echo "Dividend is ".$work->divide($num1, $num2);
}


?>