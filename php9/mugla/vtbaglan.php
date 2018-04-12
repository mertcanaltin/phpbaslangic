<?php
$user="root";
$password="";
$host="localhost";
$database="mugla_site_vt";
$baglanti=new PDO("mysql:host=$host;dbname=$database",$user,$password);
$baglanti->exec("SET NAMES utf8");
?>