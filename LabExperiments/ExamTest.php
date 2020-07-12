<?php
/*$a = 'anc';
$b = 'ajf';
echo"Hi there $a  $b";
print $a  ;*/


/*$str = <<< String
Hi
String;

print strlen($str);*/



/*$str = "Hello World!";
echo $str . "<br>";
echo trim($str,"He!");*/
/*
$str     = "Line 1\nLine 2\rLine 3\r\nLine 4\n";
$order   = array("\r\n", "\n", "\r");
$replace = '<br />';
$newstr = str_replace($order, $replace, $str);
echo $newstr;*/
/*
$search  = array('A', 'B', 'D', 'E');
$replace = array('C', 'B', 'D');
$subject = 'A';
echo str_replace($search, $replace, $subject);
*/
/*
$letters = array('a', 'p');
$fruit   = array('apple');
$text    = 'a p';
$output  = str_replace($letters, $fruit, $text);
echo $output;
*/
//print_r(str_word_count("Hello world!",2));
/*function calc($price, $tax="")

{
    
    $total = $price + ($price * $tax);
    
    echo "$total";
    
}

calc(42);*/
/*
function a()

{
    
    function b()
    
    {
        
        echo 'I am b';
        
    }
    
    echo 'I am a';
    
}

a();
*/

function a()

{
    
    function b()
    
    {
        
        echo 'I am b';
        
    }
    
    echo 'I am a';
    
}
a();
b();



?>