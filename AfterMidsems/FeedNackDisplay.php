<DOCTYPE html>
<html>
<head><link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"></head>
<body>
<?php 
$JavaRecordFile = file_get_contents("Java.txt");
$JavaRatings = explode(" ",$JavaRecordFile);
$PythonRecordFile = file_get_contents("Python.txt");
$PythonRatings = explode(" ",$PythonRecordFile);
$Kotlin = file_get_contents("Kotlin.txt");
$KotlinRatings = explode(" ",$Kotlin);
?>
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Java</th>
      <th scope="col">Python </th>
      <th scope="col">Kotlin</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Communication</th>
      <td><?php echo $JavaRatings[0]; ?></td>
      <td><?php echo $PythonRatings[0]; ?></td>
      <td><?php echo $KotlinRatings[0]?></td>
    </tr>
    <tr>
      <th scope="row">Assignment</th>
      <td><?php echo "".$JavaRatings[1]; ?></td>
      <td><?php echo "".$PythonRatings[1];?></td>
      <td><?php echo "".$KotlinRatings[1]?></td>
    </tr>
    <tr>
      <th scope="row">Delivery</th>
      <td><?php echo "".$JavaRatings[2]?></td>
      <td><?php echo "".$PythonRatings[2]?></td>
      <td><?php echo "".$KotlinRatings[2]?></td>
    </tr>
  </tbody>
</table>
</body>
</html>