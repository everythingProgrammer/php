<!DOCTYPE html>
<html>
	<head>
		<title> Experiment lab  </title>
	</head>
	<body>
		<form action="" method="post">
			<textarea rows="4" cols="20" name="text">
			</textarea><br><br>
			<input type="submit" value="Submit">
		</form>
	</body>
</html>
<?php 
    if($_POST)
    {
        $str = $_POST["text"];
        
        echo " $str <br>";
        $count = 0;
        $new_str = str_replace(str_split('\\/:*?,;()&^$#@!%<>|`~+-.{][}-_=!1234567890"'), ' ', $str,$count);

        echo "after removing digits string =  $new_str <br> no of replacements = $count<br>";
        
        $new_str = strtolower($new_str);
        
        echo " $new_str <br>";
        
        $arr = explode(" ", $new_str);
        
        sort($arr);
        
        print_r($arr);
        
    }
?>