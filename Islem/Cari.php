<?php
require("../Ayarlar/Baglantim.php"); 
require("../Ayarlar/Guvenlik.php"); 
?>
<?php
		/* Cari Ekle*/
if (isset($_POST["cariekle"])) { 

    $unvani = $_POST['unvani'];// Sayfa yenilendikten sonra post edilen değerleri değişkenlere atıyoruz
    $yadi = $_POST['yadi'];    
$ysoyadi = $_POST['ysoyadi']; 
$dairesi = $_POST['dairesi'];
$verginumarasi = $_POST['verginumarasi'];
$tel = $_POST['tel']; 
$cep = $_POST['cep'];
$fax = $_POST['fax'];
$mail = $_POST['mail'];
$adres = $_POST['adres'];
$ilce = $_POST['ilce'];
$il = $_POST['il'];
$caritipi = $_POST['caritipi'];
$risklimiti = $_POST['risklimiti'];
$parabirimi = $_POST['parabirimi'];
$cariiskonto = $_POST['cariiskonto'];
$nott = $_POST['nott'];
$ekleyen = $_POST['ekleyen'];

    if($unvani == ""){ 
	echo '<script>swal("Hata","Ünvan Alanını Doldurun.","error");</script>';
	}
else if($yadi == ""){ 
	echo '<script>swal("Hata","Yetkili Adı Alanını Doldurun.","error");</script>';
	}
	else if($ysoyadi == ""){ 
	echo '<script>swal("Hata","Yetkili Soyadı Alanını Doldurun.","error");</script>';
	}
	else if($dairesi== ""){ 
	echo '<script>swal("Hata","Vergi Dairesi Alanını Doldurun.","error");</script>';
	}
	else if($verginumarasi == ""){ 
	echo '<script>swal("Hata","Vergi Numarası Alanını Doldurun.","error");</script>';
	}
	else if($tel == ""){ 
	echo '<script>swal("Hata","Telefon Numarası Alanını Doldurun.","error");</script>';
	}
	else if($cep == ""){ 
	echo '<script>swal("Hata","Cep Telefonu Alanını Doldurun.","error");</script>';
	}
	else if($fax == ""){ 
	echo '<script>swal("Hata","Fax Numarası Alanını Doldurun.","error");</script>';
	}
	else if($mail == ""){ 
	echo '<script>swal("Hata","Mail Adresi Alanını Doldurun.","error");</script>';
	}
	else if($adres == ""){ 
	echo '<script>swal("Hata","Adres Alanını Doldurun.","error");</script>';
	}
	else if($ilce == ""){ 
	echo '<script>swal("Hata","İlç Alanını Doldurun.","error");</script>';
	}
	else if($il == ""){ 
	echo '<script>swal("Hata","İl Alanını Doldurun.","error");</script>';
	}
	else if($caritipi == ""){ 
	echo '<script>swal("Hata","Cari Tipi Alanını Doldurun.","error");</script>';
	}
	else if($risklimiti == ""){ 
	echo '<script>swal("Hata","Risk Limiti Alanını Doldurun.","error");</script>';
	}
	else if($parabirimi == ""){ 
	echo '<script>swal("Hata","Para Birimi Alanını Doldurun.","error");</script>';
	}
	else {
        $satir = [    
              
'yadi' => $yadi,
'ysoyadi' => $ysoyadi,  
'unvani' => $unvani, 
'dairesi' => $dairesi,
'verginumarasi' => $verginumarasi,
'tel' => $tel,
'cep' => $cep,
'fax' => $fax,
'mail' => $mail,
'adres' => $adres,
'ilce' => $ilce,
'il' => $il,
'caritipi' => $caritipi,
'risklimiti' => $risklimiti,
'parabirimi' => $parabirimi,
'cariiskonto' => $cariiskonto,
'nott' => $nott,
'ekleyen' => $ekleyen,
        ];
          $sql = "INSERT INTO Cariler SET yadi=:yadi, ysoyadi=:ysoyadi,unvani=:unvani, dairesi=:dairesi, verginumarasi=:verginumarasi, tel=:tel, cep=:cep, fax=:fax, mail=:mail,adres=:adres, ilce=:ilce, il=:il, caritipi=:caritipi, risklimiti=:risklimiti, parabirimi=:parabirimi, cariiskonto=:cariiskonto, nott=:nott, ekleyen=:ekleyen;";
        $durum = $baglanti->prepare($sql)->execute($satir);

        if ($durum) {
            echo '<script>swal({
            title:"Başarılı",
            text: "Başarıyla Kaydedildi.",
icon:"success",
button:"Tamam",	
            }).then((value)=>{ window.location.href = "Cariler.php"});
            </script>';
           

        }
        
         else {
            echo '<script>swal("Hata","Hatalı , Lütfen bilgilerinizi kontrol ediniz.","error");</script>'; 
        }
    }
  
}
/* Cari Ekle */
/* Cari Düzenle*/
if (isset($_POST["cariduzenle"])) { 
$id        =$_POST["id"];
    $unvani = $_POST['unvani'];// Sayfa yenilendikten sonra post edilen değerleri değişkenlere atıyoruz
    $yadi = $_POST['yadi'];    
$ysoyadi = $_POST['ysoyadi']; 
$dairesi = $_POST['dairesi'];
$verginumarasi = $_POST['verginumarasi'];
$tel = $_POST['tel']; 
$cep = $_POST['cep'];
$fax = $_POST['fax'];
$mail = $_POST['mail'];
$adres = $_POST['adres'];
$ilce = $_POST['ilce'];
$il = $_POST['il'];
$caritipi = $_POST['caritipi'];
$risklimiti = $_POST['risklimiti'];
$parabirimi = $_POST['parabirimi'];
$cariiskonto = $_POST['cariiskonto'];
$nott = $_POST['nott'];
$ekleyen = $_POST['ekleyen'];

    if($unvani == ""){ 
	echo '<script>swal("Hata","Ünvan Alanını Doldurun.","error");</script>';
	}
else if($yadi == ""){ 
	echo '<script>swal("Hata","Yetkili Adı Alanını Doldurun.","error");</script>';
	}
	else if($ysoyadi == ""){ 
	echo '<script>swal("Hata","Yetkili Soyadı Alanını Doldurun.","error");</script>';
	}
	else if($dairesi== ""){ 
	echo '<script>swal("Hata","Vergi Dairesi Alanını Doldurun.","error");</script>';
	}
	else if($verginumarasi == ""){ 
	echo '<script>swal("Hata","Vergi Numarası Alanını Doldurun.","error");</script>';
	}
	else if($tel == ""){ 
	echo '<script>swal("Hata","Telefon Numarası Alanını Doldurun.","error");</script>';
	}
	else if($cep == ""){ 
	echo '<script>swal("Hata","Cep Telefonu Alanını Doldurun.","error");</script>';
	}
	else if($fax == ""){ 
	echo '<script>swal("Hata","Fax Numarası Alanını Doldurun.","error");</script>';
	}
	else if($mail == ""){ 
	echo '<script>swal("Hata","Mail Adresi Alanını Doldurun.","error");</script>';
	}
	else if($adres == ""){ 
	echo '<script>swal("Hata","Adres Alanını Doldurun.","error");</script>';
	}
	else if($ilce == ""){ 
	echo '<script>swal("Hata","İlç Alanını Doldurun.","error");</script>';
	}
	else if($il == ""){ 
	echo '<script>swal("Hata","İl Alanını Doldurun.","error");</script>';
	}
	else if($caritipi == ""){ 
	echo '<script>swal("Hata","Cari Tipi Alanını Doldurun.","error");</script>';
	}
	else if($risklimiti == ""){ 
	echo '<script>swal("Hata","Risk Limiti Alanını Doldurun.","error");</script>';
	}
	else if($parabirimi == ""){ 
	echo '<script>swal("Hata","Para Birimi Alanını Doldurun.","error");</script>';
	}
	else {
        $satir = [    
'id' => $id,                 
'yadi' => $yadi,
'ysoyadi' => $ysoyadi,  
'unvani' => $unvani, 
'dairesi' => $dairesi,
'verginumarasi' => $verginumarasi,
'tel' => $tel,
'cep' => $cep,
'fax' => $fax,
'mail' => $mail,
'adres' => $adres,
'ilce' => $ilce,
'il' => $il,
'caritipi' => $caritipi,
'risklimiti' => $risklimiti,
'parabirimi' => $parabirimi,
'cariiskonto' => $cariiskonto,
'nott' => $nott,
'ekleyen' => $ekleyen,
        ];

         $sql = "UPDATE Cariler SET yadi=:yadi, ysoyadi=:ysoyadi,unvani=:unvani, dairesi=:dairesi, verginumarasi=:verginumarasi, tel=:tel, cep=:cep, fax=:fax, mail=:mail,adres=:adres, ilce=:ilce, il=:il, caritipi=:caritipi, risklimiti=:risklimiti, parabirimi=:parabirimi, cariiskonto=:cariiskonto, nott=:nott, ekleyen=:ekleyen WHERE id=:id;";
        $durum = $baglanti->prepare($sql)->execute($satir);
if ($durum) {
            echo '<script>swal({
            title:"Başarılı",
            text: "Başarıyla Düzenlendi.",
icon:"success",
button:"Tamam",	
            }).then((value)=>{ window.location.href = "Cariler.php"});
            </script>';
           

        }
        
         else {
            echo '<script>swal("Hata","Hatalı , Lütfen bilgilerinizi kontrol ediniz.","error");</script>'; 
        }
    }
  
}
        
/* Cari Düzenle*/

/* CariSil */
if ($_POST['carisil']) {

  	$pid = intval($_POST['carisil']);
    $satfat=$baglanti->prepare('SELECT* FROM SatFatBilgi WHERE cariadi=:pid');
     $satfat->execute(array($pid));

    $alfat=$baglanti->prepare('SELECT* FROM AlFatBilgi WHERE cariadi=:pid');
     $alfat->execute(array($pid));

  $kasa=$baglanti->prepare('SELECT* FROM KasaGiris WHERE unvan=:pid');
     $kasa->execute(array($pid));

  $banka=$baglanti->prepare('SELECT* FROM BankaGiris WHERE unvan=:pid');
     $banka->execute(array($pid));

  $ceksenet=$baglanti->prepare('SELECT* FROM CekSenet WHERE unvan=:pid');
     $ceksenet->execute(array($pid));

$cariislem=$baglanti->prepare('SELECT* FROM CariIslem WHERE unvan=:pid');
     $cariislem->execute(array($pid));

     if($satfat->rowCount() or $alfat->rowCount() or $kasa->rowCount() or $banka->rowCount() or $ceksenet->rowCount() or $cariislem->rowCount() ){
            echo '<script>swal("Hata","Caride İşlem Var. Önce İşlemi Silmeniz Gerekli.","error").then((value)=>{ window.location.href = "Cariler.php"});

            </script>';
     }else{
		$query = "DELETE FROM Cariler WHERE id=:pid";
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
}

/* Cari Grup  Sil */



?>