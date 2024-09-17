<?php
require("../Ayarlar/Baglantim.php"); 
require("../Ayarlar/Guvenlik.php"); 
?>
<?php
if ($_POST['alissil']) {
		
		    $fatid = (int)$_POST["alissil"];
		
		
    $durum1 = $baglanti->query("DELETE FROM AlFatBag WHERE  bilgiid=$fatid");
    $durum2 = $baglanti->query("DELETE d FROM AlisFaturasi d WHERE NOT EXISTS (SELECT * FROM AlFatBag WHERE faturaid = d.id)");
    $durum3 = $baglanti->query("DELETE FROM AlFatBilgi WHERE  id=$fatid");
if ($durum3) {
			echo '<script>swal({
            title:"Başarılı",
            text:"Başarıyla Silindi.",
icon:"success",
button:"Tamam",	
            }).then((value)=>{ window.location.href = "AlisFaturalari.php"});
            </script>';
		} else {
			echo '<script>swal("Hata","Hatalı , Lütfen bilgilerinizi kontrol ediniz.","error");</script>'; 
		}
    
	}

if ($_POST['satissil']) {
		
		    $fatid = (int)$_POST["satissil"];
		
		
    $durum1 = $baglanti->query("DELETE FROM SatFatBag WHERE  bilgiid=$fatid");
    $durum2 = $baglanti->query("DELETE d FROM SatisFaturasi d WHERE NOT EXISTS (SELECT * FROM SatFatBag WHERE faturaid = d.id)");
    $durum3 = $baglanti->query("DELETE FROM SatFatBilgi WHERE  id=$fatid");
if ($durum3) {
			echo '<script>swal({
            title:"Başarılı",
            text:"Başarıyla Silindi.",
icon:"success",
button:"Tamam",	
            }).then((value)=>{ window.location.href = "SatisFaturalari.php"});
            </script>';
		} else {
			echo '<script>swal("Hata","Hatalı , Lütfen bilgilerinizi kontrol ediniz.","error");</script>'; 
		}
    
	}

if ($_POST['kasagirdisil']) {
		
		
		$pid = intval($_POST['kasagirdisil']);
		$query = "DELETE FROM KasaGiris WHERE id=:pid";
		$durum = $baglanti->prepare( $query );
		$durum->execute(array(':pid'=>$pid));
		
		if ($durum) {
			echo '<script>swal({
            title:"Başarılı",
            text:"Başarıyla Silindi.",
icon:"success",
button:"Tamam",	
            }).then((value)=>{ window.location.href = "Kasalar.php"});
            </script>';
		} else {
			echo '<script>swal("Hata","Hatalı , Lütfen bilgilerinizi kontrol ediniz.","error");</script>'; 
		}
		
	}

if ($_POST['kasaciktisil']) {
		
		
		$pid = intval($_POST['kasaciktisil']);
		$query = "DELETE FROM KasaGiris WHERE id=:pid";
		$durum = $baglanti->prepare( $query );
		$durum->execute(array(':pid'=>$pid));
		
		if ($durum) {
			echo '<script>swal({
            title:"Başarılı",
            text:"Başarıyla Silindi.",
icon:"success",
button:"Tamam",	
            }).then((value)=>{ window.location.href = "Kasalar.php"});
            </script>';
		} else {
			echo '<script>swal("Hata","Hatalı , Lütfen bilgilerinizi kontrol ediniz.","error");</script>'; 
		}
		
	}


if ($_POST['bankagirdisil']) {
		
		
		$pid = intval($_POST['bankagirdisil']);
		$query = "DELETE FROM BankaGiris WHERE id=:pid";
		$durum = $baglanti->prepare( $query );
		$durum->execute(array(':pid'=>$pid));
		
		if ($durum) {
			echo '<script>swal({
            title:"Başarılı",
            text:"Başarıyla Silindi.",
icon:"success",
button:"Tamam",	
            }).then((value)=>{ window.location.href = "Bankalar.php"});
            </script>';
		} else {
			echo '<script>swal("Hata","Hatalı , Lütfen bilgilerinizi kontrol ediniz.","error");</script>'; 
		}
		
	}

if ($_POST['bankaciktisil']) {
		
		
		$pid = intval($_POST['bankaciktisil']);
		$query = "DELETE FROM BankaGiris WHERE id=:pid";
		$durum = $baglanti->prepare( $query );
		$durum->execute(array(':pid'=>$pid));
		
		if ($durum) {
			echo '<script>swal({
            title:"Başarılı",
            text:"Başarıyla Silindi.",
icon:"success",
button:"Tamam",	
            }).then((value)=>{ window.location.href = "Bankalar.php"});
            </script>';
		} else {
			echo '<script>swal("Hata","Hatalı , Lütfen bilgilerinizi kontrol ediniz.","error");</script>'; 
		}
		
	}



if ($_POST['alacaksil']) {

  	$pid = intval($_POST['alacaksil']);
  
		$query = "DELETE FROM CariIslem WHERE id=:pid";
		$durum = $baglanti->prepare( $query );
		$durum->execute(array(':pid'=>$pid));
		
		if ($durum) {
			echo '<script>swal({
            title:"Başarılı",
            text:"Başarıyla Silindi.",
icon:"success",
button:"Tamam",	
            }).then((value)=>{ window.location.href = "Cariler.php"});
            </script>';
		} else {
			echo '<script>swal("Hata","Hatalı , Lütfen bilgilerinizi kontrol ediniz.","error");</script>'; 
		}
		
	}



if ($_POST['borcsil']) {

  	$pid = intval($_POST['borcsil']);
  
		$query = "DELETE FROM CariIslem WHERE id=:pid";
		$durum = $baglanti->prepare( $query );
		$durum->execute(array(':pid'=>$pid));
		
		if ($durum) {
			echo '<script>swal({
            title:"Başarılı",
            text:"Başarıyla Silindi.",
icon:"success",
button:"Tamam",	
            }).then((value)=>{ window.location.href = "Cariler.php"});
            </script>';
		} else {
			echo '<script>swal("Hata","Hatalı , Lütfen bilgilerinizi kontrol ediniz.","error");</script>'; 
		}
		
	}

if ($_POST['alinansil']) {

  	$pid = intval($_POST['alinansil']);
  
		$query = "DELETE FROM CekSenet WHERE id=:pid";
		$durum = $baglanti->prepare( $query );
		$durum->execute(array(':pid'=>$pid));
		
		if ($durum) {
			echo '<script>swal({
            title:"Başarılı",
            text:"Başarıyla Silindi.",
icon:"success",
button:"Tamam",	
            }).then((value)=>{ window.location.href = "Cariler.php"});
            </script>';
		} else {
			echo '<script>swal("Hata","Hatalı , Lütfen bilgilerinizi kontrol ediniz.","error");</script>'; 
		}
		
	}


if ($_POST['verilensil']) {

  	$pid = intval($_POST['verilensil']);
  
		$query = "DELETE FROM CekSenet WHERE id=:pid";
		$durum = $baglanti->prepare( $query );
		$durum->execute(array(':pid'=>$pid));
		
		if ($durum) {
			echo '<script>swal({
            title:"Başarılı",
            text:"Başarıyla Silindi.",
icon:"success",
button:"Tamam",	
            }).then((value)=>{ window.location.href = "Cariler.php"});
            </script>';
		} else {
			echo '<script>swal("Hata","Hatalı , Lütfen bilgilerinizi kontrol ediniz.","error");</script>'; 
		}
		
	}





?>