<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Edit</title>
</head>
<body>
<?php 

	if(is_object($name)):

?>
<form  action="/index.php/welcome/save" method="POST">
	<input type="hidden" name="id" value="<?=$name->id?>">
	<input type="text" name="naam" value="<?=$name->naam?>">
	<button>Opslaan</button>

</form>

<?php
	endif;
?>	
</body>
</html>