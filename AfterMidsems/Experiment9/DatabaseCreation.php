<?php 

$servername= "localhost:3320";
$username = "root";
$password ="";
$conn = mysqli_connect($servername, $username,$password);
if(!$conn)
    die("connection Issue ".mysqli_connect_error());
    else
    {
//        $sql = "Create Database Experiment9 ";
//        if( mysqli_query($conn , $sql))
//         {
            mysqli_close($conn);
            if(!$conn = mysqli_connect($servername,$username,$password,"Experiment9"))
            {
                echo "Error in reopening the connection ";
            }
            else 
            {
                $sql = "create table StudentRecords1 (Name varchar(20), Course varchar(8), Registration varchar(10) ";
                if(mysqli_query($conn,$sql))
                    echo "Table Created successfully ";
                else 
                    echo "**";
            }
        //}
    }


?>