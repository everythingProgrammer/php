<!Doctype html>
<html>
<body>
<form action="" method="">
<a> This is simple program to Read a file</a>

</form>

</body>
</html>




<?php
// get contents of a file into a string
$filename = "D:\discreetmathslinks.txt";
$handle = fopen($filename, "r");
$contents = fread($handle, filesize($filename));
echo $contents;
fclose($handle);
?>
