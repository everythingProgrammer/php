<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" >
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" >

    <title></title>
  </head>
  <body>
   <!-- This page is to be a simple jumbotron which  will house login form  -->
   <div id="bckgnd" class= "container">
     <!-- <img src="https://s3.ap-south-1.amazonaws.com/s3service.hitbullseye.com/s3fs-public/UPES-Signature.jpg?null" class="img-fluid" alt="Responsive image"> -->
  <div class="jumbotron bg-dark text-white" >
  <h1 class="display-4">Online Student Feedback Portal! </h1>
  <form class= "form-inline" action="" method="post">
  <div  class="input-group mg-4 mr-3" >
    <div class="input-group mb-3">
      <div class="input-group-prepend ">

        <i class="fas fa-passport input-group-text"></i>

      </div>
    <!-- <label for="exampleInputEmail1"></label> -->
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="username">
    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
  </div>
  </div>
  <div class="input-group mb-3 mr-3">
    <div class="input-group-prepend">
      <i class="fas fa-lock input-group-text"></i>
    </div>
    <input type="password" class="form-control" placeholder="password" aria-label="Username" aria-describedby="basic-addon1">
  </div>
  <button type="submit" class="btn btn-outline-light">Submit</button>
</form>
</div>
</div>
</body>
</html>
<?php 
if($_POST)
{
    $username = $_POST["username"];
    $_SERVER["Username"]= $username;
}

?>