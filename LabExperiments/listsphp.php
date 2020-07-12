<?php

$superarray = array(  array("Abhinav ", "Singh ", "Rana"),
                        array("Abhinav 1 ", "Singh 1", "Rana1"),
                        array("Abhinav 2 ","Singh 2", "Rana2")
    
    
    );

for( $i = 0 ; $i < 3 ; $i++)
{
    echo "   Row Number $i</br>";
    echo "<ul>";
    for($col = 0 ; $col<3 ; $col++ )
    {
        echo"<li> ".$superarray[$i][$col]." </li> ";
    }
    echo "</ul>";
    
}


?>