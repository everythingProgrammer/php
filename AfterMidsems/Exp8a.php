<!DOCTYPE html>
<html>
<head>
</head>
<body>
<form action ="" method="post">

Enter Title  <input type ="text" name= "title"><br>

Enter Price <input type = "text" name= "price">

<input type ="submit" value ="submit">
</form>

</body>



</html>




<?php 
if($_POST)
{
class Book
{
   public $price;
   public  $title;
   function __construct($num , $name)
   {
       global $price;
       global $title;
       $price =$num;
       $title =$name;
   }
   function setPrice($num)
   {
       global $price;
       $price = $num;
   }
   
   function setTitle($name)
   {
       global $title;
       $title = $name;
   }
   
   function getPrice() 
   {
       global $price;
       return $price;
   }
   function getTitle()
   {
       global $title;
       return $title;   
   }  
}
$n = $_POST["title"];
$p = $_POST["price"];
$abc = new Book($n, $p);
echo "Book :" .$abc->getPrice()."</br> Price :".$abc->getTitle();
}
?>