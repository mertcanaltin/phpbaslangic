<!DOCTYPE html>
<html>
	<head>
		<title>Menü</title>
		<meta charset='utf-8'/>
		<link href='stil/menu.css' type='text/css' rel='stylesheet'/>
	</head>
	<body>
		<table border='1' cellpadding='3' cellspacing='0' class='tahta'>
		<?php
			for($i=8;$i>=1;$i--)
			{
				echo("<tr>");
				for($j=1;$j<=8;$j++)
				{
					if($i%2==$j%2)
					echo("<td class='siyah'>&nbsp;</td>");
					else
					echo("<td class='beyaz'>&nbsp;</td>");
				}
				echo("</tr>");
			}
		?>
		</table>
	</body>
</html>



