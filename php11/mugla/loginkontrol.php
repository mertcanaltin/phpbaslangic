<?php
session_start();
if(!isset($_SESSION["user"])){
	echo("<div class='alert alert-danger'>Kullanıcı Girişi Yapmalısınız. Ana sayfaya yönlendiriliyorsunuz.</div>");	
		header("refresh:5;url=sayfa.php");
	die();
}

?>