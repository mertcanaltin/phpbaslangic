 
 <div class="container-fluid">
<?php 
session_start();
if(!isset($_SESSION["user"])){
if(!isset($_POST["giris"])){ ?>
<form class="form-signin" action="" method="post">
        <h4 class="form-signin-heading">Kullanıcı Girişi</h4>
        <label for="inputEmail" class="sr-only">Kullanıcı Adı</label>
        <input type="text" id="username" name="username" class="form-control" placeholder="Kullanıcı Adı" required autofocus>
        <label for="inputPassword" class="sr-only">Şifre</label>
        <input type="password" id="password" name="password" class="form-control" placeholder="Şifre" style="margin-top:3px;" required>
        <button class="btn btn-lg btn-primary btn-block" style="margin-top:3px;" type="submit" name="giris" id="giris">Giriş</button>
      </form>
<?php }//if ifadesi bitti
else{
	try{
		include("vtbaglan.php");
		$sorgu="SELECT * FROM login_tablosu WHERE username=:user and password=:psw";
		$sonuc=$baglanti->prepare($sorgu);
		$user=$_POST["username"];
		$sonuc->bindParam(":user",$user,PDO::PARAM_STR);
		$sifre=$_POST["password"];
		$sifre=md5($sifre);
		$sonuc->bindParam(":psw",$sifre,PDO::PARAM_STR);
		$sonuc->execute();
		if($sonuc->rowCount()==1){
		foreach($sonuc as $kayit){
			$_SESSION["user"]=$kayit["username"];
			echo("Hoşgeldin ".$_SESSION["user"]."(<a href=\"cikis.php\">Çıkış</a>)");
		}
		}//if($sonuc->rowCount()==1)
		else{
			echo("Kullanıcı Bulunamadı.");
			header("refresh:3;Sayfa.php");
		}
		
	}catch(PDOException $ex){
		 echo("<div class='alert alert-danger'>Giriş işlemi yaplamadı. Sistem yönetinicinize baş vurunuz.</div>");	
	
	}
}//if(!isset($_POST["giris"]) else si
}//if(!isset($_SESSION["user"]))
else
{
				echo("Hoşgeldin ".$_SESSION["user"]."(<a href=\"cikis.php\">Çıkış</a>)");
}

?>
    </div> 