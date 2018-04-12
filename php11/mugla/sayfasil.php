<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Sayfa Silme</title>
<?php include("bootstrap.php");?>
</head>

<body>
<?php
if(isset($_POST["delete"])){
	try{
	$sno=$_POST["sayfa_no"];
	include("vtbaglan.php");
	$sorgu="DELETE FROM sayfalar_tablosu WHERE sayfa_no=:s_n";
	$sonuc=$baglanti->prepare($sorgu);
	$sonuc->bindParam(":s_n",$sno,PDO::PARAM_INT);
	$sonuc->execute();
	echo("<div class='alert alert-success'>Kayıt silme başarılı olarak gerçekleşti. Sayfa Listesine yönlendiriliyorsunuz.</div>");
	header("refresh:5;url=sayfalistesi.php");
		}catch(PDOException $ex){//try bitti
		echo("<div class='alert alert-danger'>Kayıt esilmede Hata. Sayfa Listesine yönlendiriliyorsunuz.</div>");	
		header("refresh:5;url=sayfalistesi.php");	
		}
	
}else
{
	header("location:sayfalistesi.php");
}

?>
</body>
</html>