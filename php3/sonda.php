<!DOCTYPE html>
<html>
	<head>
		<title>Şartlı Döngüler</title>
		<meta charset='utf-8'/>
	</head>
	<body>
		<?php
		$a=25;
		echo("<ul>");
		do
		{
			if($a%5==0)
			{
				echo("<li>$a</li>");
			}
			$a++;
		}while($a<=20);
		echo("</ul>");
		?>
	</body>
</html>


