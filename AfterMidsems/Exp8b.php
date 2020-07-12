<?php 
class Book
{
   public  $price;
   public $title;
   function __construct($num , $name)
   {
       global $price;
       global $title;
       $price =$num;
       $title =$name;
   }
   function getPrice()
   {
       global $price;
       echo"".$price."<br>";
   }
   function getTitle()
   {
       global $title;
       echo "".$title."<br>";
   }
}
$abc = new Book("A road less taken", 2500);
$abc->getPrice();
$abc->getTitle();
?>