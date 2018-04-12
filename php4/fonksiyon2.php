<!DOCTYPE html>
<html>
	<head>
		<title>Parametreli fonksiyon kullanımı</title>
		<meta charset='utf-8'/>
		<link rel='stylesheet' href='stil/stil.css'/> 
	</head>
	<body>
		<?php
			function baslik_olustur($baslik,$aciklama){
				echo("<header class='baslik'>");
				echo("<h1>$baslik</h1>");
				echo("<p>$aciklama</p>");
				echo("</header>");
			}
		?>
		
		
		<?php
			baslik_olustur("İnternet Programcılığı II",
			"PHP ile web programcılığı öğreniyorum.");
		?>
	</body>
</html>



