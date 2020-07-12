<?php  
    $servername= "localhost:3320";
    $username = "root";
    $password ="";
    $dt = "Experiment9";
    $conn = mysqli_connect($servername, $username,$password,$dt);
    if(!$conn)
        die("connection Issue ".mysqli_connect_error());
    else
    {
    	$sql = "Delete table StudentRecords; ";
    	if(mysqli_query( $sql,$conn))
    	{
    		echo "Database Deleted";
    	}
    	else
    	    echo "Query failed";
    }
    	
  ?>