<?php 

// $filename = fopen("TestDoc1.txt","r");
// while(!feof($filename))
// {
//     $text = fgets($filename);
//     echo $text."<br>";
// }
$tf = fopen("TestDoc1.txt","w");
if(filesize("TestDoc1")!=0)
{
$text = file_get_contents("TestDoc1.txt","r");
$rating = explode(" ",$text);
$rating[0] = ($rating[0]+4)/2;
$rating[1]= ($rating[1]+4)/2;
$rating[2]= ($rating[2]+4)/2;
$rating[3]= ($rating[3]+4)/2;
$finalString = $rating[0]." ".$rating[1]." ".$rating[2]." ".$rating[3];
//print_r($rating);
echo $finalString."<br>";
$newfile = fopen("TestDoc1.txt","w");
fwrite($newfile,$finalString);
fclose($newfile);
$text = file_get_contents("TestDoc1.txt","r");
print_r($text);
}
else {
    echo "Inside else condition" ;
}
?>