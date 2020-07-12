To Copy a File's contents to another file.

<!DOCTYPE html>
<html>
	<head>
		<title> Question - 2 </title>
	</head>
	<body>
		<?php 
            $file = fopen("studentdetails.txt","r");
            $newfile = fopen("target.txt","w");
            while(($line = fgets($file)) !== false) 
            {
                fputs($newfile,$line);
            }
            fclose($newfile);
            fclose($file);
		?>
	</body>
</html>