



<?php

$superheroes = array( "FirstSuperHero " => array("Name"=> " SuperMan ", "city" => "Manhatton ", "weakness" =>" Kryptonyte"),
                        " SecondHero " => array("Name"=>" UltraManTiga ","city"=> "Japan" ,"weakness"=> "Battery Down"),
                        "ThirdHero " => array("Name" =>"Batman", "city"=>"gotham","weakness"=> "TechnologicalAdvacements"));
/*$keys = array_keys($superheroes);
$num = count($keys);
echo " $num </br>";
$num = count($superheroes);
echo " $num";
*/


foreach($superheroes as $Number => $value)
{
    echo " $Number </br>";
    foreach($value as $key => $keyval)
        
    {
        echo $key." -".$keyval."</br>";
    }
    echo "</br>";
}


?>




