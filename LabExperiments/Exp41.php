<!-- Experimen t 4-5 1st part -->
<!DOCTYPE html>
<HTML><head></head>
<body>
<form action =""  method = post>
Simple Program to find greatest number in an array 
Enter Array <input type = "text" name = "array" >
<input type= "submit" value= "Click to Run "> 
</form>
</body>
</HTML>

<?php 
if($_POST)
{
$str = $_POST["array"];
$num = explode(",",$str);

$arrlen = count($num);

$temp = 0;

for($x = 0 ; $x< $arrlen; $x++)
{
    if($num[$x]> $temp )
    {
        $temp = $num[$x]; 
    }
}
echo"Largest number is $temp <br>";

for($x = 0; $x< $arrlen ; $x++)
{
    if($num[$x] < $temp)
        $temp = $num[$x];
}
echo "Smallest Number $temp";

}
?>