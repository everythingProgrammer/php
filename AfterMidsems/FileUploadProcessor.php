<?php 
    echo $_FILES['fileToUpload']['name']."\n";
    $target_path = "d:/";
    $target_path = $target_path.basename( $_FILES['fileToUpload']['name']);
    
    if(move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $target_path)) {
        echo "File uploaded successfully!";
    } else{
        echo "Sorry, file not uploaded, please try again!";
    }
//     if($_FILES['fileToUpload']['type']== "image/jpg")
//         echo "File is a image<br> ";
   // $filename = $_FILES['fileToUpload']['name'];
   

//     echo " File Type = ".$_FILES['fileToUpload']['type']."</br>";
    $file = fopen($_FILES['fileToUpload']['name'],"r") or die("Unable to open file");
    while(!feof($file))
    {
        echo fgets($file)."<br>";
    }
    fclose($file);
      

?>


<!-- if($_FILES['filename']['type']== jpg) -->