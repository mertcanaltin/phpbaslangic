<!DOCTYPE html>
<html>
	<head>
		<title>Switch Case Yapısı</title>
		<meta charset='utf-8'/>
	</head>
	<body>
	<?php
	$a=127;
	$kalan=$a%10;
	echo("Birler Basamağı ");
	switch ($kalan){
	case 0:echo("Sıfır");break;
	case 1:echo("Bir");break;
	case 2:echo("İki");break;
	case 3:echo("Üç");break;
	case 4:echo("Dört");break;
	case 5:echo("Beş");break;
	case 6:echo("Altı");break;
	case 7:echo("Yedi");break;
	case 8:echo("Sekiz");break;
	default:echo("Dokuz");break;
	}
	?>
	</body>
</html>