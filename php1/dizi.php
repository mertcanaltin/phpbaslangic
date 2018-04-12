<!DOCTYPE html>
<html>
	<head>
		<title>Dizi değişkenler</title>
		<meta charset='UTF-8'/>
	</head>
	<body>
	<?php
	
	$dizi=array('Görsel 2','İnternet 2');
	//print_r($dizi);
	//dizinin sonuna eleman ekler
	array_push($dizi,'Görsel 1');
	echo("Ders:$dizi[2]");
	
	
	//indeks numarası ile atama
	$dizi2=array(1=>'Görsel 2',2=>'İnternet 2');
	//dizinin sonuna eleman ekler
	$dizi2[]="Görsel 1";
	echo("Ders:$dizi2[3]");
	?>
	</body>
</html>





