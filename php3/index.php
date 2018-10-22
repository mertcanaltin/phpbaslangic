<!DOCTYPE html>
<html>
	<head>
		<title>Menü</title>
		<meta charset='utf-8'/>
		<link href='stil/menu.css' type='text/css' rel='stylesheet'/>
	</head>
	<body>
		<div id='anamenu'>
		<?php
		$menu=array("Ana Sayfa","Hakkımızda","İletişim");
		$linkler=array("index.php","hakkimizda.php","iletisim.php");
		echo("<nav>");
		for($i=0;$i<count($menu);$i++)
		{
			//echo("<li>");
			echo("<a href='$linkler[$i]' target='_self'>
			$menu[$i]</a>");
			//echo("</li>");
		}
		echo("<div class='animation start-home'></div>");
		echo("</nav>");
		?>
		<p>
		Mert can altın
		</p>
		</div>
	</body>
</html>



