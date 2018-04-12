<!DOCTYPE html>
<html>
	<head>
		<title>Şartlı Döngüler</title>
		<meta charset='utf-8'/>
	</head>
	<body>
		<?php
		$a=1;
		echo("<ul>");
		while($a<=20)
		{
			if($a%5==0)
			{
				echo("<li>$a</li>");
			}
			$a++;
		}
		echo("</ul>");
		?>
	</body>
</html>


