<!DOCTYPE html>
<html>
    <head>
            <title> Question - 2 </title>
    </head>
    <body>
        <form action="" method="post">
            <textarea rows="4" cols="20" name="text"></textarea><br><br>
            <input type="submit" value="Submit">
        </form>
        <div class="btn-toolbar" role="toolbar" aria-label="...">
<div class="btn-group" role="group" aria-label="...">...</div>
<div class="btn-group" role="group" aria-label="...">...</div>
<div class="btn-group" role="group" aria-label="...">...</div>
</div>
    </body>
</html>
<?php
    if($_POST)
    {
        $arr1 = $_POST["text"];
        $arr2 = strtolower($arr1);
        rtrim($arr2);

        $arr3 = explode(" ",$arr2);
        
        sort($arr3);
        $len = count($arr3);
       // print_r($arr3);
       //echo count($arr3);
        /* Now counting */
       
        
        $uel = array();
        $uc = array();
        $index = 0;
        for($i =0 ; $i<($len -1) ; )
        {
            $uel[$index]  = $arr3[$i];
            $uc[$index] = 1;
            if($arr3[$i] == $arr3[$i+1])
            {
                for( $j = $i+1 ; $j<$len && strcmp( $arr3[$j], $arr3[$i]) == 0; $j++)
                {
                    $uc[$index] = $uc[$index]+ 1;
                }
                $i = $j;
                $index = $index+1;
            }
            else
            {
                $i++;
                $index++;
            }
            
        }
        //echo count($uel)."";
        $max = 0 ;
        $maxi = 0;
        $str = "";
        for($i = 0 ; $i<$index; $i++)
        {
            if($uc > $max)
            {
                $max = $uc[$i];
                $maxi = $i;
            }
        }
        echo " max freq $max " ;
        print_r($uel[$maxi]);
        
       
    }
?>