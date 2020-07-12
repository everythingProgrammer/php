<!DOCTYPE html>
<html>
	<head>
		<title> Question - 1(c) </title>
	</head>
	<body>
		<?php 
            //$file = fopen("studentdetails.txt","r") or die("Unable to open file");
            $array = file("studentdetails.txt");
            $city="bangalore";
            for($i=0;$i<count($array);$i++)
            {
                if(stripos($array[$i],$city))
                {
                    $str = explode(":",$array[$i]);
                    echo "$str[1] <br>";
                }
            }
		?>
	</body>
</html>