<!doctype html>
<html>
<head>
</head>
<body>
<form enctype="multipart/form-data" action="" method = "post">
Enter Product:<input type = "text" name ="ProductName" required> <br> 
Enter Product Description: <input type = "text" name = "ProductDescription" required><br>
Enter Product Quantity<input type = "number" min = 0  name = "Quantity"><br>
Enter Product Price<input type = "number" min  ="0"  name = "price"><br>
<input type="file" name="fileToUpload" id="fileToUpload"><br>
<input type = "reset" value ="Clear Form " name ="ResetClick" >     <input type = "submit" value = "Submit Details" name = "Proceed">
</form>
</body>
</html>
<?php
if($_POST)
{
    $ProductDetails = $_POST["ProductName"];
    $ProductDesc = $_POST["ProductDescription"];
    $ProductQty = $_POST["Quantity"];
    $ProductPrice = $_POST["price"];
    $str = "ProductName: ".$ProductDetails."<br>ProductDescription: ".$ProductDesc."<br> ProductQuantity: ".$ProductQty."<br> Price: ".$ProductPrice;
    if($_FILES['fileToUpload']['type'] == ".gif")
    {
        $target_path = "d:/";
        $target_path = $target_path.basename( $_FILES['fileToUpload']['name']);
        if(move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $target_path)) {
            echo "File uploaded successfully!";
        } 
        else{
            echo "Sorry, file not uploaded, please try again!";
        }
    }
    else 
        echo "Gif file format only! ";
        $servername= "localhost:3320";
        $username = "root";
        $password ="";
        $conn = mysqli_connect($servername, $username,$password);
        
//         $sql = "create Database Assignment1";
//         if(mysqli_query($conn, $sql))
//         {
//             echo " Database Created ";
//         }
//         else
//             //The database already exists No need to do anything just restart connection with your database 
//             mysqli_close($conn);
        $dt = "Assignment1";
        $conn = mysqli_connect($servername, $username,$password,$dt);
        if(!$conn)
        {
            die("connection Issue ".mysqli_connect_error());
        }
        else
        {
         echo "<br>connection established <br>";
         $sql = "create table Customer (ProductName varchar(20), ProductDescription varchar(250) , ProductQty int ,ProductPrice int) ;";
         if(mysqli_query($conn,$sql ))
         {
             echo "New Table created <br>";
         }
         $sql = "insert into Customer values ("."\"".$ProductDetails."\",\"".$ProductDesc."\",\"".$ProductQty."\",\"".$ProductPrice."\");";
         if($conn->query($sql) === TRUE)
         {
             echo "Data Successfully entered in Database ";
         }
         else 
             echo "Query not executed ";
        }
}
?>