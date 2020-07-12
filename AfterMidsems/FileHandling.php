<!DOCTYPE html>
<html>
	<head>
		<title> Question - 1(b)</title>
	</head>
	<body>
		<?php 
		  $str;
		  $i=0;
            $file = fopen("OpenDoc.txt","r") or die("Unable to open file");
//             while(!feof($file))
//             {
                
//                     $str[$i] = fgets($file);    
//                     $i++;
//              }
//             print_r($str);
//             fclose($file);
//             echo " ".filesize("OpenDoc.txt")."<br>";
//             echo " ".fread($file,50);
            $data= file_get_contents("OpenDoc.txt");
            //$data1 = file("OpenDoc");
            print_r($data);
		?>
	</body>
</html>