<?php
$servername= "localhost:3320";
$username = "root";
$password ="";
$dt = "Assignment1";
$conn = mysqli_connect($servername, $username,$password,$dt);
if(!$conn)
{
    die("connection Issue ".mysqli_connect_error());
}
else
{
    echo "<br>connection established <br>";
}

// $tb = "create table TestTable (p1 varchar(20) )";
// if(mysqli_query($conn, $tb))
//     echo "Table created";
$sql = "Insert into TestTable( p1 ) values (?) ";
if($stmt = mysqli_prepare($conn, $sql))
{    mysqli_stmt_bend_param($stmt, "S",$Data)
{
        $Data = "abcdef";
        mysqli_stmt_execute($Data);
        echo "Query Executed <br>";
}
?>