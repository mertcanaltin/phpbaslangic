<!DOCTYPE html>
<html>
	<head>
		<title>Parametresiz fonksiyon kullanımı</title>
		<meta charset='utf-8'/>
		<link rel='stylesheet' href='stil/stil.css'/> 
	</head>
	<body>
		<?php
			function baslik_olustur(){
				echo("<header class='baslik'>");
				echo("<h1>Buraya Başlık Bilgisi Gelecek</h1>");
				echo("<p>Buraya açıklama gelecek</p>");
				echo("</header>");
			}
		?>
		
		
		<?php
			baslik_olustur();
		?>
	</body>
</html>