<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Çıkış</title>
</head>

<body>
<?php 
session_start();
if(isset($_SESSION["user"])){
	//session_destroy(); tüm otorumları kapatmak için.
	unset($_SESSION["user"]);
	header("location:sayfa.php");
}
?>
</body>
</html>