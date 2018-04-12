<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Muğla Meslek Yüksekokulu</title>
<link href="css/Stil.css" rel="stylesheet" type="text/css">
</head>

<body>
<div id="b_grubu">
<figure class="images">
<?php 
try{
	include("vtbaglanti.php");
	$sorgu="Select * From slayt_tablosu";
	$sonuclar=$baglanti->query($sorgu);
	foreach($sonuclar as $kayit){
		echo("<figure>\n");
		echo("<img src=\"{$kayit['resim']}\" alt=\"\" />");
		echo("<figcaption>{$kayit['baslik']}</figcaption>");
		echo("</figure>\n");	
	}
	
}catch(PDOException $e){
}
?>
</figure>
</div>
</body>
</html>