<!DOCTYPE html>
<html>
	<head>
		<title>Else if yapısı</title>
		<meta charset='utf-8'/>
	</head>
	<body>
	<div>
	<?php
	$a=129;
	$kalan=$a%10;
	if($kalan==0){
	echo("Birler Basamağı Sıfır");
	}
	else if($kalan==1){
	echo("Birler Basamağı Bir");
	}
	else if($kalan==2){
	echo("Birler Basamağı İki");
	}
	else if($kalan==3){
	echo("Birler Basamağı Üç");
	}
	else if($kalan==4){
	echo("Birler Basamağı Dört");
	}
	else if($kalan==5){
	echo("Birler Basamağı Beş");
	}
	else if($kalan==6){
	echo("Birler Basamağı Altı");
	}
	else if($kalan==7){
	echo("Birler Basamağı Yedi");
	}
	else if($kalan==8){
	echo("Birler Basamağı Sekiz");
	}
	else{
	echo("Birler Basamağı Dokuz");
	}
	?>
	</div>
	</body>
</html>



