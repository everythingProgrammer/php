<?php 
if($_POST)
{
    $name = $_POST['name'];
    $course = $_POST['Course'];
    $reg = $_POST['RegNumber'];
    $servername= "localhost:3320";
    $username = "root";
    $password ="";
    $dt = "Experiment9";
    $conn = mysqli_connect($servername, $username,$password,$dt);
    if(!$conn)
        die("connection Issue ".mysqli_connect_error());
    else
    {
        $sql = "insert into  StudentRecords values (\"$name\" , \"$course\",\"$reg\");";
        echo $sql;
        if(mysqli_query($conn,$sql))
        {
            echo "Data entered successfully";
        }
        else 
            echo "<br>Data entered successfully";
      }
}
?>