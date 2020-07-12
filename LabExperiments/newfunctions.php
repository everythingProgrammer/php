<!DOCTYPE html>
<html>
    <head>
        <title> Call by Value  and Call by Reference </title>
    </head>
    <body>
        <form action="" method="post">
            <h1> Swapping by Call by Value and Call by reference </h1><br>
            Enter First String : <input type="text" name="str1"><br>
            Enter Second String : <input type="text" name="str2"><br>
            <input type="submit" value="Submit">
        </form>
    </body>
</html>
<?php
    if($_POST)
    {
        $string1 = $_POST["str1"];
        $string2 = $_POST["str2"];
        function swap($_string1,$_string2)
        {
            $temp = $_string1;
            $_string1 = $_string2;
            $_string2 = $temp;
            echo "After Swapping <br>";
            echo "First String : $_string1 <br>";
            echo "Second String : $_string2 <br>";
        }
        echo "Before Swapping <br>";
        echo "First String : $string1 <br>";
        echo "Second String : $string2 <br>";
        swap($string1,$string2);
        function callusingreference(&$a , &$b)
        { 
            $temp = $a;
            $a= $b;
            $b = $temp;
            echo " Value of a $a <br>";
            echo "value of b $b <br>";
        }
        echo" value of original $string1 and $string2 <br>"; 
        callusingreference($string1 , $string2);
    }
?>

