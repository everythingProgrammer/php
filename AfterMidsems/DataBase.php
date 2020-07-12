<?php 
$servername= "localhost:3320";
$username = "root";
$password ="";
$conn = mysqli_connect($servername, $username,$password);
if(!$conn)
{
    die("connection Issue ".mysqli_connect_error());
}
else 
    echo "connection established ";
    //$sql = "Create table Students (Name varchar(20), ID int Autocorrect PrimaryKey);"
?>