<!DOCTYPE html>
<html>
	<head>
		<title>Sabit Değişkenler</title>
		<meta charset='utf-8'/>
	</head>
	<body>
	<?php
	define("KDV",0.18);
	$fiyat=100;
	//KDV=0.08;
	$satis_fiyat=$fiyat+$fiyat*KDV;
	
	echo("Ürünün satış fiyatı: $satis_fiyat TL");
	?>
	</body>
</html>







