<?php
require("../Ayarlar/Baglantim.php"); 
require("../Ayarlar/Guvenlik.php"); 
?>
<?php
if (isset($_POST["kullaniciduzenle"])) { 

        $id = $_POST['id'];
        
    $ad = $_POST['ad'];
    $soyad = $_POST['soyad'];
  $kullaniciadi = $_POST['kullaniciadi'];
 $sifre = sha1(md5($_POST['sifre']));

    if($ad == ""){ 
	echo '<script>swal("Hata","Ad Alanını Doldurun.","error");</script>';
	}
elseif($soyad == ""){ 
	echo '<script>swal("Hata","Soyad Alanını Doldurun.","error");</script>';
	}
elseif($kullaniciadi == ""){ 
	echo '<script>swal("Hata","Kullanıcı Adı Alanını Doldurun.","error");</script>';
	}
elseif($sifre == ""){ 
	echo '<script>swal("Hata","Şifre Alanını Doldurun.","error");</script>';
	}

	else {
        $satir = [                       

'id' => $id,
'ad' => $ad,
'soyad' => $soyad,
'kullaniciadi' => $kullaniciadi,
'sifre' => $sifre,


        ];
          $sql = "UPDATE Kullanicilar SET ad=:ad, soyad=:soyad, kullaniciadi=:kullaniciadi, sifre=:sifre WHERE id=:id;";
        $durum = $baglanti->prepare($sql)->execute($satir);

        if ($durum) {
            echo '<script>swal({
            title:"Başarılı",
            text: "Başarıyla Kaydedildi.",
icon:"success",
button:"Tamam",	
            }).then((value)=>{ window.location.href = "Profilim.php"});
            </script>';
           

        }
        
         else {
            echo '<script>swal("Hata","Hatalı , Lütfen bilgilerinizi kontrol ediniz.","error");</script>'; 
        }
    }
  
}

?>
