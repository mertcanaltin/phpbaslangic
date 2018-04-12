<!DOCTYPE html>
<html>
	<head>
		<title>For Döngüsü Örnek 1</title>
		<meta charset='UTF-8'/>
	</head>
	<body>
		<table cellpadding='2' cellspacing='0' border='1'>
		<?php
		for($i=1;$i<=10;$i++){
			echo("<tr><td>");
			echo("$i");
			echo("</td></tr>");
		}
		?>
		</table>
	</body>
</html>