<!DOCTYPE html>
<html>
	<head>
		<title> Experiment - 4,5 </title>
	</head>
	<body>
		<form action="" method="post">
			<textarea rows="4" cols="50" name="text">
			</textarea><br><br>
			<input type="submit" value="Submit">
		</form>
	</body>
</html>
<?php 
    if($_POST)
    {
        $str = $_POST["text"];
        $arr = explode(",",$str);
        $j=1;
        echo "<ul>";
        for($i=-1;$i<count($arr);)
        {
            echo "Person : ".$j." <br>";
            echo "Name : ".$arr[++$i]."<br>";
            echo "E-Mail : ".$arr[++$i]."<br>";
            echo "Contact No : ".$arr[++$i]."<br>";
            $j++;
        }
        echo "</ul>";
    }
?>
