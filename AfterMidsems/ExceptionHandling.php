<!Doctype html>
<HTML>
<head></head>
<body>
<form action="" method ="post">
Username: <input type= "password" name = "login"><br>
Password :<input type ="password" name = "pass"> 
</form>
</body>
</HTML>


<?php 
if($_POST)
{
    $pass = $_POST["pass"];
    
    class passwordOverFlow extends Exception
    {
        
    }
}

?>