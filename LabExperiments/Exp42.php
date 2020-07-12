<!DOCTYPE HTML>
<HTMl><head><title>Simple form program </title></head>
<body>
<h3>Simple Student attribute Analyzing Webpage .<br></h3> 
<form action ="" method =post >
Name :	<input type = "text" name= "Name" placeholder = "Enter full name " size ="35" maxlength = "50"  > <br>
Select gender <br> 
 <select name="Gender">
  <option value="Male">Male</option>
  <option value="Female">Female</option>
  <option value="Others">Others</option>
 </select> <br><br>
  <textarea rows="4" cols="50" name= "Textarea" placeholder = " Enter about yourself" ></textarea><br>
 <input type = "submit" value= "Run">
</form>
</body>
</HTMl>
<?php 
if($_POST)
{
    $Fname = $_POST["Name"];
    $text  = $_POST["Textarea"];
    $len = strlen($Fname);
    /* Extracting First Name and Last Name */
    $arr = explode(" ",$Fname);
    $len = count($arr);
    echo "$len";
    $len = $len-1;
    echo " First Name $arr[0]<br>";
    echo " Last Name $arr[$len] <br>";
    echo "Middle Name ";
    $len = $len-1;
    
    for($x = 1 ; $x <= $len; $x++)
    {
        echo "$arr[$x] ";
    }
   // echo "this works $arr[1]";
    echo " <br>";
    /* Counting Number of Vovels and Number of Spaces */
    
    $count =0;
    for( $x = 0 ; $x< $len ; $x++)
    {
        if($Fname[$x]=='A' ||$Fname[$x]=='E' ||$Fname[$x]=='I' ||$Fname[$x]=='O' ||$Fname[$x]=='U' ||$Fname[$x]=='a' ||$Fname[$x]=='e' ||$Fname[$x]=='i' ||$Fname[$x]=='o' ||$Fname[$x]=='u' )
        {
            $count++;
        }
    }
    echo "Number of Vovels entered = $count <br>";
    
    
    $len = strlen($text);
    $count =0 ;
    for( $x = 0 ; $x< $len ; $x++)
    {
        if($text[$x]==' ')
            $count++;
    }
    echo" Number of Spaces in yourself section $count<br><br><br>";
    
    
    /*Converting the Entered name to Capital Words */
    /* $len has length of entered name */
    /* Fname has the entered name */
    /* Cname will have new modified name */
    $Cname = "";
    $len = strlen($Fname);
    for( $i =0; $i<$len ; $i++)
    {
        $j = ord($Fname[$i]);
        if($j>= 97 && $j<=122)
        {
            $var = chr($j -32);
            $Cname .= $var;
        }
        else {
            $Cname .= $Fname[$i];
        }
    }
    echo "Name in all caps $Cname <br><br>";
    
    /* Script to Decide Title */
    $G = $_POST["Gender"];
    
    if($G == "Male")
    {
        echo"Mr $Fname <br> <br>";
    }
    else 
        echo "Mrs $Fname <br><br>";
    
    /*Script to check whether the entered name is characters only ... */
        $counter =0; /* used to count occurence of non character literals */
        for( $i =0; $i<$len ; $i++)
        {
            $j = ord($Fname[$i]);
            /*echo" $j ";*/
            if($j <65 && $j!=32)
                $counter++;
            else if($j > 122)
                $counter++;
            else if($j >= 91 && $j <= 96)
                $counter++;
        }
        if($counter == 0)
            echo"Name is all Characters ";
        else 
            echo "Sudo Name entered $counter";           
}
?>