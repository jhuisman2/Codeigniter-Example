<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Voorbeeld</title>
</head>
<body>
	<?php
		foreach($pietje as $name):
	?>
			<a href="/index.php/welcome/edit/<?=$name->id?>"><?=$name->naam?></a>
	<?php
		endforeach;
	?>
</body>
</html>