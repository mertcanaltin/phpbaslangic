<!DOCTYPE html>
<html>
	<head>
		<title>Değişken Tanımlama</title>
		<meta charset='UTF-8'/>
	</head>
	<body>
	<?php
	//Metin türünde değişkenlere değer, tırnak içinde aktarılır.
	$isim="Mutlu";
	#Sayısal değişkenler direk olarak aktarılır
	$sayi=152;
	/*Ondalık saylarda ondalık ayracı noktadır
	*/
	$ondalik=5.25;
	//Mantıksal değerler aktarılırken true veya false değeri aktarılır.
	$mantik=true;
	echo("isim değişkenine aktarılan değer $isim <br/>");
	//Metin birleştirmek için nokta işareti kullanılır
	echo('isim değişkenine aktarılan değer '.$isim.' <br/>');
	echo("Sayı=$sayi <br/> Ondalık Sayı=$ondalik <br/>");
	$fark=$ondalik-$sayi;
	echo("Fark Sonucu=$fark");
	//Değişkeni hafızadan silme
	unset($isim);
	echo $isim;
	?>
	</body>
</html>





