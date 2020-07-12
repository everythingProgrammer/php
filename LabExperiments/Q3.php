<!DOCTYPE html>
<html>
    <head>
        <title> Question - 3 </title>
    </head>
    <body>
        <form action="" method="post">
            Enter Number : <input type="number" name="num"><br><br>
            <input type="submit" value="Submit">
        </form>
    </body>
</html>
<?php
    if($_POST)
    {
        $n = $_POST["num"];
        for($i=0;$i<$n;$i++)
        {
            $arr[$i] = $i*5;
        }
        for($i=0;$i<$n;$i++)
        {
            echo $arr[$i]."<br>";
        }
    }
?>

