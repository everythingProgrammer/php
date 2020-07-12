
<!Doctype html>
<html>
<head>
<title>Volume Calulator </title>
</head>
<body>
<script type="text/javascript">

function display()
{
	var r = document.VolumeCalculator.Radius.value;
	var vol	= 4.186 * r*r*r;
	document.VolumeCalculator.displayField.innerText = vol;
}
</script>
<form action="" name = "VolumeCalculator">

<fieldset>
	<legend>Volume Calculator Using JavaScript</legend>
	<input type = "number"  name = "Raidus"required>
	<input type = "submit" onclick="display()">
	<br>
	<input type = "text" name = "displayField">
</fieldset>

</form>


</body>
</html>



<?php
?>