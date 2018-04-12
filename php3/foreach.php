<!DOCTYPE html>
<html>
	<head>
		<title>Şartlı Döngüler</title>
		<meta charset='utf-8'/>
		<link href='stil/menu.css' type='text/css' rel='stylesheet'/>
	</head>
	<body>
	<h1>Öğretim Elemanları</h1>

	<ul>
		<?php
		$eleman=array(
		array("ad"=>"Mutlu YALI","eposta"=>"mutluyali@mu.edu.tr"),
		array("ad"=>"Ahmet BAYRAKTAR","eposta"=>"bahmet@mu.edu.tr"),
		array("ad"=>"Reşit YILMAZ","eposta"=>"ryilmaz@mu.edu.tr"),
		array("ad"=>"Sena SAĞLAM","eposta"=>"ssaglam@mu.edu.tr")
		);
		foreach($eleman as $deger)
		{
			echo("<li>");
			echo("{$deger['ad']}<br/>");
			echo("{$deger['eposta']}<br/>");
			echo("</li>");
		}
		
		?>
	</ul>

	</body>
</html>


