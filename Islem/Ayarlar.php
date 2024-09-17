<?php
require("../Ayarlar/Baglantim.php"); 
require("../Ayarlar/Guvenlik.php"); 
?>
<?php
		


if (isset($_POST["ayarlarduzenle"])) { 

    $siteadi = $_POST['siteadi'];
$siteadresi = $_POST['siteadresi'];
$siteslogan = $_POST['siteslogan'];
$sitemail = $_POST['sitemail'];
$sitewhatsapp = $_POST['sitewhatsapp'];
$sitefacebook = $_POST['sitefacebook'];
$sitetwitter = $_POST['sitetwitter'];
$siteinstagram = $_POST['siteinstagram'];

    if($siteadi == ""){ 
	echo '<script>swal("Hata","Site Adı Alanını Doldurun.","error");</script>';
	}
 elseif($siteadresi == ""){ 
	echo '<script>swal("Hata","Site Adresi Alanını Doldurun.","error");</script>';
	}
 elseif($siteslogan == ""){ 
	echo '<script>swal("Hata","Site Slogan Alanını Doldurun.","error");</script>';
	}
elseif($sitemail == ""){ 
	echo '<script>swal("Hata","Site Mail Alanını Doldurun.","error");</script>';
	}
 elseif($sitewhatsapp == ""){ 
	echo '<script>swal("Hata","Site WhatsApp Alanını Doldurun.","error");</script>';
	}
 elseif($sitefacebook == ""){ 
	echo '<script>swal("Hata","Site Facebook Alanını Doldurun.","error");</script>';
	}
 elseif($sitetwitter == ""){ 
	echo '<script>swal("Hata","Site Twitter Alanını Doldurun.","error");</script>';
	}
 elseif($siteinstagram == ""){ 
	echo '<script>swal("Hata","Site İnstagram Alanını Doldurun.","error");</script>';
	}

	else {
        $satir = [                       
'siteadi' => $siteadi,
'siteadresi' => $siteadresi,
'siteslogan' => $siteslogan,
'sitemail' => $sitemail,
'sitewhatsapp' => $sitewhatsapp,
'sitefacebook' => $sitefacebook,
'sitetwitter' => $sitetwitter,
'siteinstagram' => $siteinstagram,
        ];
          $sql = "UPDATE Ayarlar SET siteadi=:siteadi, siteadresi=:siteadresi, siteslogan=:siteslogan, sitemail=:sitemail, sitewhatsapp=:sitewhatsapp, sitefacebook=:sitefacebook, sitetwitter=:sitetwitter, siteinstagram=:siteinstagram;";
        $durum = $baglanti->prepare($sql)->execute($satir);

        if ($durum) {
            echo '<script>swal({
            title:"Başarılı",
            text: "Başarıyla Kaydedildi.",
icon:"success",
button:"Tamam",	
            }).then((value)=>{ window.location.href = "AyarDuzenle.php"});
            </script>';
           

        }
        
         else {
            echo '<script>swal("Hata","Hatalı , Lütfen bilgilerinizi kontrol ediniz.","error");</script>'; 
        }
    }
  
}




?>