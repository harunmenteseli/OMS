<?php
require("../Ayarlar/Baglantim.php"); 
require("../Ayarlar/Guvenlik.php"); 
?>
<?php
		/* Cari Ekle*/
if (isset($_POST["personelekle"])) { 

    $ad = $_POST['ad'];
    $soyad = $_POST['soyad'];
    $tckn = $_POST['tckn'];
    $isegiristarihi = $_POST['isegiristarihi'];
    $dogumtarihi = $_POST['dogumtarihi'];
    $dogumyeri = $_POST['dogumyeri'];
    $maas = $_POST['maas'];
    $agi = $_POST['agi'];
    $mesaiucret = $_POST['mesaiucret'];
    $yillikizinsayisi = $_POST['yillikizinsayisi'];
    $gorevi = $_POST['gorevi'];
    $tel = $_POST['tel'];
    $medenidurumu = $_POST['medenidurumu'];
    $cocuksayisi = $_POST['cocuksayisi'];
    $askerlik = $_POST['askerlik'];
    $ikamet = $_POST['ikamet'];
$ekleyen = $_POST['ekleyen'];

    if($ad == ""){ 
	echo '<script>swal("Hata","Ad Alanını Doldurun.","error");</script>';
	}
	else if($soyad == ""){ 
	echo '<script>swal("Hata","Soyad Alanını Doldurun.","error");</script>';
	}
	else if($tckn == ""){ 
	echo '<script>swal("Hata","Kimlik Numarası Alanını Doldurun.","error");</script>';
	}
	else if($isegiristarihi == ""){ 
	echo '<script>swal("Hata","İşe Giriş Tarihi Alanını Doldurun.","error");</script>';
	}
	else if($dogumtarihi == ""){ 
	echo '<script>swal("Hata","Doğum Tarihi Alanını Doldurun.","error");</script>';
	}
	else if($dogumyeri == ""){ 
	echo '<script>swal("Hata","Doğum Yeri Alanını Doldurun.","error");</script>';
	}
	else if($maas == ""){ 
	echo '<script>swal("Hata","Maaş Alanını Doldurun.","error");</script>';
	}
	else if($agi == ""){ 
	echo '<script>swal("Hata","Asgari Geçim İndirimi Alanını Doldurun.","error");</script>';
	}
	else if($mesaiucret == ""){ 
	echo '<script>swal("Hata","Mesai Ücreti Alanını Doldurun.","error");</script>';
	}
	else if($yillikizinsayisi == ""){ 
	echo '<script>swal("Hata","Yıllık İzin Alanını Doldurun.","error");</script>';
	}
	else if($gorevi == ""){ 
	echo '<script>swal("Hata","Görevi Alanını Doldurun.","error");</script>';
	}
	else if($tel == ""){ 
	echo '<script>swal("Hata","Telefon Alanını Doldurun.","error");</script>';
	}
	else if($medenidurumu == ""){ 
	echo '<script>swal("Hata","Medeni Durumu Alanını Doldurun.","error");</script>';
	}
	else if($cocuksayisi == ""){ 
	echo '<script>swal("Hata","Çocuk Sayısı Alanını Doldurun.","error");</script>';
	}
	else if($askerlik == ""){ 
	echo '<script>swal("Hata","Askerlik Durumu Alanını Doldurun.","error");</script>';
	}
	else if($ikamet == ""){ 
	echo '<script>swal("Hata","İkamet Adresi Alanını Doldurun.","error");</script>';
	}
	
	else {
        $satir = [    
 'ad' => $ad,
 'soyad' => $soyad,
 'tckn' => $tckn,
 'isegiristarihi' => $isegiristarihi,
 'dogumtarihi' => $dogumtarihi,
'dogumyeri' => $dogumyeri,
 'maas' => $maas,
 'agi' => $agi,
 'mesaiucret' => $mesaiucret,
 'yillikizinsayisi' => $yillikizinsayisi,
 'gorevi' => $gorevi,
 'tel' => $tel,
 'medenidurumu' => $medenidurumu,
 'cocuksayisi' => $cocuksayisi,
 'askerlik' => $askerlik,
 'ikamet' => $ikamet,
'ekleyen' => $ekleyen,
        ];
          $sql = "INSERT INTO Personeller SET ad=:ad, soyad=:soyad, tckn=:tckn, isegiristarihi=:isegiristarihi, dogumtarihi=:dogumtarihi, dogumyeri=:dogumyeri, maas=:maas, agi=:agi, mesaiucret=:mesaiucret, yillikizinsayisi=:yillikizinsayisi, gorevi=:gorevi, tel=:tel, medenidurumu=:medenidurumu, cocuksayisi=:cocuksayisi, askerlik=:askerlik, ikamet=:ikamet, ekleyen=:ekleyen;";
        $durum = $baglanti->prepare($sql)->execute($satir);

        if ($durum) {
            echo '<script>swal({
            title:"Başarılı",
            text: "Başarıyla Kaydedildi.",
icon:"success",
button:"Tamam",	
            }).then((value)=>{ window.location.href = "Personeller.php"});
            </script>';
           

        }
        
         else {
            echo '<script>swal("Hata","Hatalı , Lütfen bilgilerinizi kontrol ediniz.","error");</script>'; 
        }
    }
  
}
/* Cari Ekle */
		/* Cari Ekle*/
if (isset($_POST["personelduzenle"])) { 
$id        =$_POST["id"];
    $ad = $_POST['ad'];
    $soyad = $_POST['soyad'];
    $tckn = $_POST['tckn'];
    $isegiristarihi = $_POST['isegiristarihi'];
    $dogumtarihi = $_POST['dogumtarihi'];
    $dogumyeri = $_POST['dogumyeri'];
    $maas = $_POST['maas'];
    $agi = $_POST['agi'];
    $mesaiucret = $_POST['mesaiucret'];
    $yillikizinsayisi = $_POST['yillikizinsayisi'];
    $gorevi = $_POST['gorevi'];
    $tel = $_POST['tel'];
    $medenidurumu = $_POST['medenidurumu'];
    $cocuksayisi = $_POST['cocuksayisi'];
    $askerlik = $_POST['askerlik'];
    $ikamet = $_POST['ikamet'];
$ekleyen = $_POST['ekleyen'];

    if($ad == ""){ 
	echo '<script>swal("Hata","Ad Alanını Doldurun.","error");</script>';
	}
	else if($soyad == ""){ 
	echo '<script>swal("Hata","Soyad Alanını Doldurun.","error");</script>';
	}
	else if($tckn == ""){ 
	echo '<script>swal("Hata","Kimlik Numarası Alanını Doldurun.","error");</script>';
	}
	else if($isegiristarihi == ""){ 
	echo '<script>swal("Hata","İşe Giriş Tarihi Alanını Doldurun.","error");</script>';
	}
	else if($dogumtarihi == ""){ 
	echo '<script>swal("Hata","Doğum Tarihi Alanını Doldurun.","error");</script>';
	}
	else if($dogumyeri == ""){ 
	echo '<script>swal("Hata","Doğum Yeri Alanını Doldurun.","error");</script>';
	}
	else if($maas == ""){ 
	echo '<script>swal("Hata","Maaş Alanını Doldurun.","error");</script>';
	}
	else if($agi == ""){ 
	echo '<script>swal("Hata","Asgari Geçim İndirimi Alanını Doldurun.","error");</script>';
	}
	else if($mesaiucret == ""){ 
	echo '<script>swal("Hata","Mesai Ücreti Alanını Doldurun.","error");</script>';
	}
	else if($yillikizinsayisi == ""){ 
	echo '<script>swal("Hata","Yıllık İzin Alanını Doldurun.","error");</script>';
	}
	else if($gorevi == ""){ 
	echo '<script>swal("Hata","Görevi Alanını Doldurun.","error");</script>';
	}
	else if($tel == ""){ 
	echo '<script>swal("Hata","Telefon Alanını Doldurun.","error");</script>';
	}
	else if($medenidurumu == ""){ 
	echo '<script>swal("Hata","Medeni Durumu Alanını Doldurun.","error");</script>';
	}
	else if($cocuksayisi == ""){ 
	echo '<script>swal("Hata","Çocuk Sayısı Alanını Doldurun.","error");</script>';
	}
	else if($askerlik == ""){ 
	echo '<script>swal("Hata","Askerlik Durumu Alanını Doldurun.","error");</script>';
	}
	else if($ikamet == ""){ 
	echo '<script>swal("Hata","İkamet Adresi Alanını Doldurun.","error");</script>';
	}
	
	else {
        $satir = [    
 'id' => $id,
 'ad' => $ad,
 'soyad' => $soyad,
 'tckn' => $tckn,
 'isegiristarihi' => $isegiristarihi,
 'dogumtarihi' => $dogumtarihi,
'dogumyeri' => $dogumyeri,
 'maas' => $maas,
 'agi' => $agi,
 'mesaiucret' => $mesaiucret,
 'yillikizinsayisi' => $yillikizinsayisi,
 'gorevi' => $gorevi,
 'tel' => $tel,
 'medenidurumu' => $medenidurumu,
 'cocuksayisi' => $cocuksayisi,
 'askerlik' => $askerlik,
 'ikamet' => $ikamet,
'ekleyen' => $ekleyen,
        ];
          $sql = "UPDATE Personeller SET ad=:ad, soyad=:soyad, tckn=:tckn, isegiristarihi=:isegiristarihi, dogumtarihi=:dogumtarihi, dogumyeri=:dogumyeri, maas=:maas, agi=:agi, mesaiucret=:mesaiucret, yillikizinsayisi=:yillikizinsayisi, gorevi=:gorevi, tel=:tel, medenidurumu=:medenidurumu, cocuksayisi=:cocuksayisi, askerlik=:askerlik, ikamet=:ikamet, ekleyen=:ekleyen WHERE id=:id;";
        $durum = $baglanti->prepare($sql)->execute($satir);

        if ($durum) {
            echo '<script>swal({
            title:"Başarılı",
            text: "Başarıyla Düzenlendi.",
icon:"success",
button:"Tamam",	
            }).then((value)=>{ window.location.href = "Personeller.php"});
            </script>';
           

        }
        
         else {
            echo '<script>swal("Hata","Hatalı , Lütfen bilgilerinizi kontrol ediniz.","error");</script>'; 
        }
    }
  
}
/* Cari Ekle */

/* CariSil */
if ($_POST['personelsil']) {

  	$pid = intval($_POST['personelsil']);
    $maas=$baglanti->prepare('SELECT* FROM PersonelMaas WHERE personelid=:pid');
     $maas->execute(array($pid));

    $izin=$baglanti->prepare('SELECT* FROM PersonelIzin WHERE personelid=:pid');
     $izin->execute(array($pid));

  $mesai=$baglanti->prepare('SELECT* FROM PersonelMesai WHERE personelid=:pid');
     $mesai->execute(array($pid));

  $odeme=$baglanti->prepare('SELECT* FROM PersonelOdeme WHERE personelid=:pid');
     $odeme->execute(array($pid));


     if($maas->rowCount() or $izin->rowCount() or $mesai->rowCount() or $odeme->rowCount()){
            echo '<script>swal("Hata","Personelde İşlem(ler) Var. Önce İşlem(ler)i Silmeniz Gerekli.","error").then((value)=>{ window.location.href = "Personeller.php"});

            </script>';
     }else{
		$query = "DELETE FROM Personeller WHERE id=:pid";
		$durum = $baglanti->prepare( $query );
		$durum->execute(array(':pid'=>$pid));
		
		if ($durum) {
			echo '<script>swal({
            title:"Başarılı",
            text:"Başarıyla Silindi.",
icon:"success",
button:"Tamam",	
            }).then((value)=>{ window.location.href = "Personeller.php"});
            </script>';
		} else {
			echo '<script>swal("Hata","Hatalı , Lütfen bilgilerinizi kontrol ediniz.","error");</script>'; 
		}
		
	}
}

/* Cari Grup  Sil */



		
/* Cari Grup Ekle*/
if (isset($_POST["mesaiekle"])) { 

    $personelid = $_POST['personelid'];
$sure = $_POST['sure'];
$aciklama = $_POST['aciklama'];
$mesaitutar = $_POST['mesaitutar'];
$mesaitarih = $_POST['mesaitarih'];

$ekleyen = $_POST['ekleyen'];
    if($personelid == ""){ 
	echo '<script>swal("Hata","Personel İd Alanını Doldurun.","error");</script>';
	}
   elseif($sure == ""){ 
	echo '<script>swal("Hata","Mesai Süresi Alanını Doldurun.","error");</script>';
	}

   elseif($mesaitutar == ""){ 
	echo '<script>swal("Hata","Mesai Tutar Alanını Doldurun.","error");</script>';
	}
   elseif($mesaitarih == ""){ 
	echo '<script>swal("Hata","Mesai Tarihi Alanını Doldurun.","error");</script>';
	}

	else {
        $satir = [                       
'personelid' => $personelid,
'sure' => $sure,
'aciklama' => $aciklama,
'mesaitutar' => $mesaitutar,
'mesaitarih' => $mesaitarih,

'ekleyen' => $ekleyen,
        ];
          $sql = "INSERT INTO PersonelMesai SET personelid=:personelid, sure=:sure, aciklama=:aciklama, mesaitutar=:mesaitutar, mesaitarih=:mesaitarih, ekleyen=:ekleyen;";
        $durum = $baglanti->prepare($sql)->execute($satir);

        if ($durum) {
            echo '<script>swal({
            title:"Başarılı",
            text: "Başarıyla Kaydedildi.",
icon:"success",
button:"Tamam",	
            }).then((value)=>{ window.location.href = "PersonelDetay.php?id='.$personelid.'"});
            </script>';
           

        }
        
         else {
            echo '<script>swal("Hata","Hatalı , Lütfen bilgilerinizi kontrol ediniz.","error");</script>'; 
        }
    }
  
}

/* Cari Grup Ekle*/
	
/* Cari Grup Ekle*/
if (isset($_POST["mesaiduzenle"])) { 
    $id = $_POST['id'];
    $personelid = $_POST['personelid'];
$sure = $_POST['sure'];
$aciklama = $_POST['aciklama'];
$mesaitutar = $_POST['mesaitutar'];
$mesaitarih = $_POST['mesaitarih'];
$ekleyen = $_POST['ekleyen'];
    if($personelid == ""){ 
	echo '<script>swal("Hata","Personel İd Alanını Doldurun.","error");</script>';
	}
   elseif($sure == ""){ 
	echo '<script>swal("Hata","Mesai Süresi Alanını Doldurun.","error");</script>';
	}

   elseif($mesaitutar == ""){ 
	echo '<script>swal("Hata","Mesai Tutar Alanını Doldurun.","error");</script>';
	}
   elseif($mesaitarih == ""){ 
	echo '<script>swal("Hata","Mesai Tarihi Alanını Doldurun.","error");</script>';
	}

	else {
        $satir = [  
'id' => $id,                     
'personelid' => $personelid,
'sure' => $sure,
'aciklama' => $aciklama,
'mesaitutar' => $mesaitutar,
'mesaitarih' => $mesaitarih,

'ekleyen' => $ekleyen,
        ];
          $sql = "UPDATE PersonelMesai SET personelid=:personelid, sure=:sure, aciklama=:aciklama, mesaitutar=:mesaitutar, mesaitarih=:mesaitarih, ekleyen=:ekleyen WHERE id=:id;";
        $durum = $baglanti->prepare($sql)->execute($satir);

        if ($durum) {
            echo '<script>swal({
            title:"Başarılı",
            text: "Başarıyla Kaydedildi.",
icon:"success",
button:"Tamam",	
            }).then((value)=>{ window.location.href = "PersonelDetay.php?id='.$personelid.'"});
            </script>';
           

        }
        
         else {
            echo '<script>swal("Hata","Hatalı , Lütfen bilgilerinizi kontrol ediniz.","error");</script>'; 
        }
    }
  
}

/* Cari Grup Ekle*/
/* Personel sil */
if ($_POST['mesaisil']) {
		
		
		$pid = intval($_POST['mesaisil']);
		$query = "DELETE FROM PersonelMesai WHERE id=:pid";
		$durum = $baglanti->prepare( $query );
		$durum->execute(array(':pid'=>$pid));
		
		if ($durum) {
			echo '<script>swal({
            title:"Başarılı",
            text:"Başarıyla Silindi.",
icon:"success",
button:"Tamam",	
            }).then((value)=>{ window.location.href = "PersonelDetay.php?id='.$personelid.'"});
            </script>';
		} else {
			echo '<script>swal("Hata","Hatalı , Lütfen bilgilerinizi kontrol ediniz.","error");</script>'; 
		}
		
	}

/* Personel Sil */
/* Cari Grup Ekle*/
if (isset($_POST["izinekle"])) { 
 $islemtarihi = $_POST['islemtarihi'];
 $personelid = $_POST['personelid'];
 $ekleyen = $_POST['ekleyen'];
 $izinturu = $_POST['izinturu'];
 $izincikis = $_POST['izincikis'];
 $izindonus = $_POST['izindonus'];
 $izinsayisi = $_POST['izinsayisi'];
 $aciklama = $_POST['aciklama'];
 $ucret = $_POST['ucret'];
 if($personelid == ""){ 
	echo '<script>swal("Hata","Personel İd Alanını Doldurun.","error");</script>';
	}
   elseif($islemtarihi == ""){ 
	echo '<script>swal("Hata","İşlem Tarihi Alanını Doldurun.","error");</script>';
	}

   elseif($ekleyen == ""){ 
	echo '<script>swal("Hata","Ekleyen Alanını Doldurun.","error");</script>';
	}
   elseif($izinturu == ""){ 
	echo '<script>swal("Hata","İzin Türü Alanını Doldurun.","error");</script>';
	}
   elseif($izincikis == ""){ 
	echo '<script>swal("Hata","İzin Çıkış Tarihi Alanını Doldurun.","error");</script>';
	}
   elseif($izindonus == ""){ 
	echo '<script>swal("Hata","İzin Dönüş Tarihi Alanını Doldurun.","error");</script>';
	}
   elseif($izinsayisi == ""){ 
	echo '<script>swal("Hata","İzin Süresi Alanını Doldurun.","error");</script>';
	}
   elseif($aciklama == ""){ 
	echo '<script>swal("Hata","Açıklama Alanını Doldurun.","error");</script>';
	}
   elseif($ucret == ""){ 
	echo '<script>swal("Hata","İzin Ücreti Kesintisi Alanını Doldurun.","error");</script>';
	}
	else {
        $satir = [                       
'islemtarihi' => $islemtarihi,                      
'personelid' => $personelid,
'ekleyen' => $ekleyen,
'izinturu' => $izinturu,
'izincikis' => $izincikis,
'izindonus' => $izindonus,
'izinsayisi' => $izinsayisi,
'aciklama' => $aciklama,
'ucret' => $ucret,
        ];
          $sql = "INSERT INTO PersonelIzin SET islemtarihi=:islemtarihi, personelid=:personelid, ekleyen=:ekleyen, izinturu=:izinturu, izincikis=:izincikis, izindonus=:izindonus, izinsayisi=:izinsayisi, aciklama=:aciklama, ucret=:ucret;";
        $durum = $baglanti->prepare($sql)->execute($satir);

        if ($durum) {
            echo '<script>swal({
            title:"Başarılı",
            text: "Başarıyla Kaydedildi.",
icon:"success",
button:"Tamam",	
            }).then((value)=>{ window.location.href = "PersonelDetay.php?id='.$personelid.'"});
            </script>';
           

        }
        
         else {
            echo '<script>swal("Hata","Hatalı , Lütfen bilgilerinizi kontrol ediniz.","error");</script>'; 
        }
    }
  
}

/* Cari Grup Ekle*/
/* Cari Grup Ekle*/
if (isset($_POST["izinduzenle"])) { 
 $id = $_POST['id'];
 $islemtarihi = $_POST['islemtarihi'];
 $personelid = $_POST['personelid'];
 $ekleyen = $_POST['ekleyen'];
 $izinturu = $_POST['izinturu'];
 $izincikis = $_POST['izincikis'];
 $izindonus = $_POST['izindonus'];
 $izinsayisi = $_POST['izinsayisi'];
 $aciklama = $_POST['aciklama'];
 $ucret = $_POST['ucret'];
 if($personelid == ""){ 
	echo '<script>swal("Hata","Personel İd Alanını Doldurun.","error");</script>';
	}
   elseif($islemtarihi == ""){ 
	echo '<script>swal("Hata","İşlem Tarihi Alanını Doldurun.","error");</script>';
	}

   elseif($ekleyen == ""){ 
	echo '<script>swal("Hata","Ekleyen Alanını Doldurun.","error");</script>';
	}
   elseif($izinturu == ""){ 
	echo '<script>swal("Hata","İzin Türü Alanını Doldurun.","error");</script>';
	}
   elseif($izincikis == ""){ 
	echo '<script>swal("Hata","İzin Çıkış Tarihi Alanını Doldurun.","error");</script>';
	}
   elseif($izindonus == ""){ 
	echo '<script>swal("Hata","İzin Dönüş Tarihi Alanını Doldurun.","error");</script>';
	}
   elseif($izinsayisi == ""){ 
	echo '<script>swal("Hata","İzin Süresi Alanını Doldurun.","error");</script>';
	}
   elseif($aciklama == ""){ 
	echo '<script>swal("Hata","Açıklama Alanını Doldurun.","error");</script>';
	}
   elseif($ucret == ""){ 
	echo '<script>swal("Hata","İzin Ücreti Kesintisi Alanını Doldurun.","error");</script>';
	}
	else {
        $satir = [  
'id' => $id,                     
'islemtarihi' => $islemtarihi,                      
'personelid' => $personelid,
'ekleyen' => $ekleyen,
'izinturu' => $izinturu,
'izincikis' => $izincikis,
'izindonus' => $izindonus,
'izinsayisi' => $izinsayisi,
'aciklama' => $aciklama,
'ucret' => $ucret,
        ];
          $sql = "UPDATE PersonelIzin SET islemtarihi=:islemtarihi, personelid=:personelid, ekleyen=:ekleyen, izinturu=:izinturu, izincikis=:izincikis, izindonus=:izindonus, izinsayisi=:izinsayisi, aciklama=:aciklama, ucret=:ucret WHERE id=:id;";
        $durum = $baglanti->prepare($sql)->execute($satir);

        if ($durum) {
            echo '<script>swal({
            title:"Başarılı",
            text: "Başarıyla Kaydedildi.",
icon:"success",
button:"Tamam",	
            }).then((value)=>{ window.location.href = "PersonelDetay.php?id='.$personelid.'"});
            </script>';
           

        }
        
         else {
            echo '<script>swal("Hata","Hatalı , Lütfen bilgilerinizi kontrol ediniz.","error");</script>'; 
        }
    }
  
}

/* Cari Grup Ekle*/
/* Personel sil */
if ($_POST['izinsil']) {
		
		
		$pid = intval($_POST['izinsil']);
		$query = "DELETE FROM PersonelIzin WHERE id=:pid";
		$durum = $baglanti->prepare( $query );
		$durum->execute(array(':pid'=>$pid));
		
		if ($durum) {
			echo '<script>swal({
            title:"Başarılı",
            text:"Başarıyla Silindi.",
icon:"success",
button:"Tamam",	
            }).then((value)=>{ window.location.href = "PersonelDetay.php?id='.$personelid.'"});
            </script>';
		} else {
			echo '<script>swal("Hata","Hatalı , Lütfen bilgilerinizi kontrol ediniz.","error");</script>'; 
		}
		
	}

/* Personel Sil */
/* Cari Grup Ekle*/
if (isset($_POST["maasekle"])) { 
 $islemtarihi = $_POST['islemtarihi'];
 $personelid = $_POST['personelid'];
 $maas = $_POST['maas'];
 $agi = $_POST['agi'];
 $agilimaas = $_POST['agilimaas'];
 $aciklama = $_POST['aciklama'];
 $ekleyen = $_POST['ekleyen'];
   if($islemtarihi == ""){ 
	echo '<script>swal("Hata","İşlem Tarihi Alanını Doldurun.","error");</script>';
	}
   elseif($personelid == ""){ 
	echo '<script>swal("Hata","Personel İd Alanını Doldurun.","error");</script>';
	}
   elseif($maas == ""){ 
	echo '<script>swal("Hata","Maaş Alanını Doldurun.","error");</script>';
	}
   elseif($agi == ""){ 
	echo '<script>swal("Hata","Agi Alanını Doldurun.","error");</script>';
	}
   elseif($agilimaas == ""){ 
	echo '<script>swal("Hata","Agili Maaş Alanını Doldurun.","error");</script>';
	}
   elseif($aciklama == ""){ 
	echo '<script>swal("Hata","Açıklama Alanını Doldurun.","error");</script>';
	}
   elseif($ekleyen == ""){ 
	echo '<script>swal("Hata","Ekleyen Alanını Doldurun.","error");</script>';
	}

	else {
        $satir = [                       
'islemtarihi' => $islemtarihi,                      
'personelid' => $personelid, 
'maas' => $maas, 
'agi' => $agi, 
'agilimaas' => $agilimaas, 
'aciklama' => $aciklama, 
'ekleyen' => $ekleyen, 

        ];
          $sql = "INSERT INTO PersonelMaas SET islemtarihi=:islemtarihi, personelid=:personelid, maas=:maas, agi=:agi, agilimaas=:agilimaas, aciklama=:aciklama, ekleyen=:ekleyen;";
        $durum = $baglanti->prepare($sql)->execute($satir);

        if ($durum) {
            echo '<script>swal({
            title:"Başarılı",
            text: "Başarıyla Kaydedildi.",
icon:"success",
button:"Tamam",	
            }).then((value)=>{ window.location.href = "PersonelDetay.php?id='.$personelid.'"});
            </script>';
           

        }
        
         else {
            echo '<script>swal("Hata","Hatalı , Lütfen bilgilerinizi kontrol ediniz.","error");</script>'; 
        }
    }
  
}

/* Cari Grup Ekle*/
/* Cari Grup Ekle*/
if (isset($_POST["maasduzenle"])) { 
 $id = $_POST['id'];
 $islemtarihi = $_POST['islemtarihi'];
 $personelid = $_POST['personelid'];
 $maas = $_POST['maas'];
 $agi = $_POST['agi'];
 $agilimaas = $_POST['agilimaas'];
 $aciklama = $_POST['aciklama'];
 $ekleyen = $_POST['ekleyen'];
   if($islemtarihi == ""){ 
	echo '<script>swal("Hata","İşlem Tarihi Alanını Doldurun.","error");</script>';
	}
   elseif($personelid == ""){ 
	echo '<script>swal("Hata","Personel İd Alanını Doldurun.","error");</script>';
	}
   elseif($maas == ""){ 
	echo '<script>swal("Hata","Maaş Alanını Doldurun.","error");</script>';
	}
   elseif($agi == ""){ 
	echo '<script>swal("Hata","Agi Alanını Doldurun.","error");</script>';
	}
   elseif($agilimaas == ""){ 
	echo '<script>swal("Hata","Agili Maaş Alanını Doldurun.","error");</script>';
	}
   elseif($aciklama == ""){ 
	echo '<script>swal("Hata","Açıklama Alanını Doldurun.","error");</script>';
	}
   elseif($ekleyen == ""){ 
	echo '<script>swal("Hata","Ekleyen Alanını Doldurun.","error");</script>';
	}

	else {
        $satir = [ 
'id' => $id,                       
'islemtarihi' => $islemtarihi,                      
'personelid' => $personelid, 
'maas' => $maas, 
'agi' => $agi, 
'agilimaas' => $agilimaas, 
'aciklama' => $aciklama, 
'ekleyen' => $ekleyen, 

        ];
          $sql = "UPDATE PersonelMaas SET islemtarihi=:islemtarihi, personelid=:personelid, maas=:maas, agi=:agi, agilimaas=:agilimaas, aciklama=:aciklama, ekleyen=:ekleyen WHERE id=:id;";
        $durum = $baglanti->prepare($sql)->execute($satir);

        if ($durum) {
            echo '<script>swal({
            title:"Başarılı",
            text: "Başarıyla Düzenlendi.",
icon:"success",
button:"Tamam",	
            }).then((value)=>{ window.location.href = "PersonelDetay.php?id='.$personelid.'"});
            </script>';
           

        }
        
         else {
            echo '<script>swal("Hata","Hatalı , Lütfen bilgilerinizi kontrol ediniz.","error");</script>'; 
        }
    }
  
}

/* Cari Grup Ekle*/
/* Personel sil */
if ($_POST['maassil']) {
		
		
		$pid = intval($_POST['maassil']);
		$query = "DELETE FROM PersonelMaas WHERE id=:pid";
		$durum = $baglanti->prepare( $query );
		$durum->execute(array(':pid'=>$pid));
		
		if ($durum) {
			echo '<script>swal({
            title:"Başarılı",
            text:"Başarıyla Silindi.",
icon:"success",
button:"Tamam",	
            }).then((value)=>{ window.location.href = "PersonelDetay.php?id='.$personelid.'"});
            </script>';
		} else {
			echo '<script>swal("Hata","Hatalı , Lütfen bilgilerinizi kontrol ediniz.","error");</script>'; 
		}
		
	}

/* Personel Sil */
/* Cari Grup Ekle*/
if (isset($_POST["odemeekle"])) { 
 $islemtarihi = $_POST['islemtarihi'];
 $personelid = $_POST['personelid'];
 $odemeturu = $_POST['odemeturu'];
 $odeme = $_POST['odeme'];
 $aciklama = $_POST['aciklama'];
 $ekleyen = $_POST['ekleyen'];
   if($islemtarihi == ""){ 
	echo '<script>swal("Hata","İşlem Tarihi Alanını Doldurun.","error");</script>';
	}
   elseif($personelid == ""){ 
	echo '<script>swal("Hata","Personel İd Alanını Doldurun.","error");</script>';
	}
   elseif($odemeturu == ""){ 
	echo '<script>swal("Hata","Ödeme Türü Alanını Doldurun.","error");</script>';
	}
   elseif($odeme == ""){ 
	echo '<script>swal("Hata","Ödeme Alanını Doldurun.","error");</script>';
	}

   elseif($aciklama == ""){ 
	echo '<script>swal("Hata","Açıklama Alanını Doldurun.","error");</script>';
	}
   elseif($ekleyen == ""){ 
	echo '<script>swal("Hata","Ekleyen Alanını Doldurun.","error");</script>';
	}

	else {
        $satir = [                       
'islemtarihi' => $islemtarihi,                      
'personelid' => $personelid, 
'odemeturu' => $odemeturu, 
'odeme' => $odeme, 
'aciklama' => $aciklama, 
'ekleyen' => $ekleyen, 

        ];
          $sql = "INSERT INTO PersonelOdeme SET islemtarihi=:islemtarihi, personelid=:personelid, odemeturu=:odemeturu, odeme=:odeme, aciklama=:aciklama, ekleyen=:ekleyen;";
        $durum = $baglanti->prepare($sql)->execute($satir);

        if ($durum) {
            echo '<script>swal({
            title:"Başarılı",
            text: "Başarıyla Kaydedildi.",
icon:"success",
button:"Tamam",	
            }).then((value)=>{ window.location.href = "PersonelDetay.php?id='.$personelid.'"});
            </script>';
           

        }
        
         else {
            echo '<script>swal("Hata","Hatalı , Lütfen bilgilerinizi kontrol ediniz.","error");</script>'; 
        }
    }
  
}

/* Cari Grup Ekle*/
/* Cari Grup Ekle*/
if (isset($_POST["odemeduzenle"])) {
 $id = $_POST['id']; 
 $islemtarihi = $_POST['islemtarihi'];
 $personelid = $_POST['personelid'];
 $odemeturu = $_POST['odemeturu'];
 $odeme = $_POST['odeme'];
 $aciklama = $_POST['aciklama'];
 $ekleyen = $_POST['ekleyen'];
   if($islemtarihi == ""){ 
	echo '<script>swal("Hata","İşlem Tarihi Alanını Doldurun.","error");</script>';
	}
   elseif($personelid == ""){ 
	echo '<script>swal("Hata","Personel İd Alanını Doldurun.","error");</script>';
	}
   elseif($odemeturu == ""){ 
	echo '<script>swal("Hata","Ödeme Türü Alanını Doldurun.","error");</script>';
	}
   elseif($odeme == ""){ 
	echo '<script>swal("Hata","Ödeme Alanını Doldurun.","error");</script>';
	}

   elseif($aciklama == ""){ 
	echo '<script>swal("Hata","Açıklama Alanını Doldurun.","error");</script>';
	}
   elseif($ekleyen == ""){ 
	echo '<script>swal("Hata","Ekleyen Alanını Doldurun.","error");</script>';
	}

	else {
        $satir = [ 
'id' => $id,                      
'islemtarihi' => $islemtarihi,                      
'personelid' => $personelid, 
'odemeturu' => $odemeturu, 
'odeme' => $odeme, 
'aciklama' => $aciklama, 
'ekleyen' => $ekleyen, 

        ];
          $sql = "UPDATE PersonelOdeme SET islemtarihi=:islemtarihi, personelid=:personelid, odemeturu=:odemeturu, odeme=:odeme, aciklama=:aciklama, ekleyen=:ekleyen WHERE id=:id;";
        $durum = $baglanti->prepare($sql)->execute($satir);

        if ($durum) {
            echo '<script>swal({
            title:"Başarılı",
            text: "Başarıyla Düzenlendi.",
icon:"success",
button:"Tamam",	
            }).then((value)=>{ window.location.href = "PersonelDetay.php?id='.$personelid.'"});
            </script>';
           

        }
        
         else {
            echo '<script>swal("Hata","Hatalı , Lütfen bilgilerinizi kontrol ediniz.","error");</script>'; 
        }
    }
  
}

/* Cari Grup Ekle*/
/* Personel sil */
if ($_POST['odemesil']) {
		
		
		$pid = intval($_POST['odemesil']);
		$query = "DELETE FROM PersonelOdeme WHERE id=:pid";
		$durum = $baglanti->prepare( $query );
		$durum->execute(array(':pid'=>$pid));
		
		if ($durum) {
			echo '<script>swal({
            title:"Başarılı",
            text:"Başarıyla Silindi.",
icon:"success",
button:"Tamam",	
            }).then((value)=>{ window.location.href = "PersonelDetay.php?id='.$personelid.'"});
            </script>';
		} else {
			echo '<script>swal("Hata","Hatalı , Lütfen bilgilerinizi kontrol ediniz.","error");</script>'; 
		}
		
	}

/* Personel Sil */
?>

<?php
		 
	
if ($_POST['mesaiduzenleme']) {
			
$id = intval($_POST['mesaiduzenleme']);
	$sorgu = $baglanti->prepare("SELECT * FROM PersonelMesai Where id=:id");
$sorgu->execute(array(':id'=>$id));
$sonuc = $sorgu->fetch();//sorgu çalıştırılıp veriler alınıyor
		
		?>
	

<?php 
 if ($kbilgi["personelmesaiduzenle"]==1) {?>
	<form id="PersonelMesaiDuzenle" action="javascript:void(0);">
<div class="row">
<input type="text" name="id" class="form-control" placeholder="ekleyen" readonly="readonly" value="<?= $sonuc["id"] ?>" hidden="hidden">  
<input type="text" name="ekleyen" class="form-control" placeholder="ekleyen" readonly="readonly" value="<?= $kbilgi["id"] ?>" hidden="hidden">   
<input type="text" name="personelid" class="form-control" placeholder="ekleyen" readonly="readonly" value="<?= $sonuc["personelid"] ?>" hidden="hidden"> 
<div class="col-md-12">  
 <div class="form-group">                   
   <label class="control-label">MESAİ TARİHİ</label>
 <input type="text" id="mesaitarih" class="form-control text-success tarih" placeholder="MESAİ TARİHİ" name="mesaitarih" value="<?= $sonuc['mesaitarih'];?>">
 </div>
</div>
<div class="col-md-12">
<div class="form-group"> 
 <label class="control-label">MESAİ SÜRESİ</label>
 <input type="text" id="sure1" class="form-control text-danger sayi" placeholder="MESAİ SÜRESİ" name="sure" value="<?= $sonuc['sure'];?>">
      </div>
</div>
<div class="col-md-12">
<div class="form-group"> 
 <label class="control-label">MESAİ SAAT ÜCRETİ</label>
 <input type="text" id="ucret1" class="form-control text-warning sayi" readonly="readonly" placeholder="MESAİ SAAT ÜCRETİ" value="<?php $personeller = $baglanti->query("SELECT * FROM Personeller where id=".$sonuc["personelid"])->fetchAll(PDO::FETCH_ASSOC);
                                                                
                                                if(count($personeller)>0){ ?>
<?php foreach($personeller as $personel){
                                                            ?>
<?php echo $personel['mesaiucret']; ?>
                                                    <?php } ?>
       <?php } ?>                ">
      </div>
</div>
<div class="col-md-12">
<div class="form-group"> 
 <label class="control-label">MESAİ TUTAR</label>
 <input type="text" id="mesaitutar1" class="form-control text-primary" readonly="readonly" placeholder="MESAİ TUTAR"  name="mesaitutar" value="<?= $sonuc['mesaitutar'];?>">
      </div>
</div>
<div class="col-md-12">
         <div class="form-group">                        
   <label class="control-label">AÇIKLAMA</label>
 <textarea class="form-control text-success" id="aciklama" rows="3" name="aciklama"><?= $sonuc['aciklama'];?></textarea>            
                                          </div>
</div>
<div class="col-md-12">
         <div class="form-group">
<input type="hidden" class="form-control" name="mesaiduzenle">
		<button name="kaydet" type="submit" class="btn btn-success btn-raised btn-block">
Kaydet</button>
                                          </div>
</div>
</form>
<?php }?>
	<?php 
 if ($kbilgi["personelmesaiduzenle"]!=1) {?>
 	<h1 class="text-danger">BU SAYFAYI GÖRÜNTÜLEMEYE YETKİNİZ YOK </h1>
 <?php }?>



	
 <?php } ?> 


<?php
		 
	
if ($_POST['izinduzenleme']) {
			
$id = intval($_POST['izinduzenleme']);
	$sorgu = $baglanti->prepare("SELECT * FROM PersonelIzin Where id=:id");
$sorgu->execute(array(':id'=>$id));
$sonuc = $sorgu->fetch();//sorgu çalıştırılıp veriler alınıyor
		
		?>

   <?php 
 if ($kbilgi["personelizinduzenle"]==1) {?>
	<form id="PersonelIzinDuzenle" action="javascript:void(0);">
<div class="row">
<input type="text" name="id" class="form-control" placeholder="ekleyen" readonly="readonly" value="<?= $sonuc["id"] ?>" hidden="hidden">  
<input type="text" name="ekleyen" class="form-control" placeholder="ekleyen" readonly="readonly" value="<?= $kbilgi["id"] ?>" hidden="hidden">   
<input type="text" name="personelid" class="form-control" placeholder="ekleyen" readonly="readonly" value="<?= $sonuc["personelid"] ?>" hidden="hidden"> 
	 <input type="hidden" id="islemtarihi" class="form-control text-danger" placeholder="İŞLEM TARİHİ" name="islemtarihi" value="<?= $sonuc["islemtarihi"] ?>" />
<div class="col-md-12">  
 <div class="form-group">                   
   <label class="control-label">İZİN TÜRÜ</label>
       <select class="form-control custom-select" id="izinturu" data-placeholder="İzin Türü Seçiniz" tabindex="1" name="izinturu" value="<?= $sonuc["izinturu"] ?>">
<option class="text-success" value="<?= $sonuc["izinturu"] ?>"><?= $sonuc["izinturu"] ?></option>
 <option class="text-success" value="yillik">YILLIK İZİN</option>
 <option class="text-danger" value="ucretsiz">ÜCRETSİZ İZİN</option>
 <option class="text-warning" value="olum">ÖLÜM İZNİ</option>
 <option class="text-primary" value="dogum">DOĞUM İZNİ</option>
 </select>
 </div>
</div>
<div class="col-md-12">
<div class="form-group"> 
 <label class="control-label">İZİN BAŞLAMA TARİHİ</label>
 <input type="text" id="izincikis1" class="form-control text-danger tarih" placeholder="İZİN BAŞLAMA TARİHİ" name="izincikis" value="<?= $sonuc["izincikis"] ?>">
      </div>
</div>
<div class="col-md-12">
<div class="form-group"> 
 <label class="control-label">İZİN BİTİŞ TARİHİ</label>
 <input type="text" id="izindonus1" class="form-control text-success tarih" placeholder="İZİN BİTİŞ TARİHİ" name="izindonus" value="<?= $sonuc["izindonus"] ?>">
      </div>
</div>

<div class="col-md-12">
<div class="form-group"> 
 <label class="control-label">İZİN GÜN SAYISI</label>
 <input type="text" id="izinsayisi1" class="form-control text-warning" placeholder="İZİN GÜN SAYISI"  readonly="readonly" name="izinsayisi" value="<?= $sonuc["izinsayisi"] ?>">
      </div>
</div>
<div class="col-md-12">
<div class="form-group"> 
 <label class="control-label">İZİN KESİNTİ ÜCRETİ</label>
 <input type="text" id="ucret1" class="form-control text-danger sayi" placeholder="İZİN KESİNTİ ÜCRETİ"  name="ucret" value="<?= $sonuc["ucret"] ?>">
      </div>
</div>
<div class="col-md-12">
         <div class="form-group">                        
   <label class="control-label">AÇIKLAMA</label>
 <textarea class="form-control text-success" id="aciklama" rows="3" name="aciklama"><?= $sonuc["aciklama"] ?></textarea>            
                                          </div>
</div>
<div class="col-md-12">
         <div class="form-group">
<input type="hidden" class="form-control" name="izinduzenle">
		<button name="kaydet" type="submit" class="btn btn-success btn-raised btn-block">
Kaydet</button>
                                          </div>
</div>
</form>
<?php }?>
	<?php 
 if ($kbilgi["personelizinduzenle"]!=1) {?>
 	<h1 class="text-danger">BU SAYFAYI GÖRÜNTÜLEMEYE YETKİNİZ YOK </h1>
 <?php }?>




 <?php } ?> 

<?php
		 
	
if ($_POST['maasduzenleme']) {
			
$id = intval($_POST['maasduzenleme']);
	$sorgu = $baglanti->prepare("SELECT * FROM PersonelMaas Where id=:id");
$sorgu->execute(array(':id'=>$id));
$sonuc = $sorgu->fetch();//sorgu çalıştırılıp veriler alınıyor
		
		?>

  <?php 
 if ($kbilgi["personelmaasduzenle"]==1) {?>
	<form id="PersonelMaasDuzenle" action="javascript:void(0);">
<div class="row">
<input type="text" name="id" class="form-control" placeholder="ekleyen" readonly="readonly" value="<?= $sonuc["id"] ?>" hidden="hidden">  
<input type="text" name="ekleyen" class="form-control" placeholder="ekleyen" readonly="readonly" value="<?= $kbilgi["id"] ?>" hidden="hidden">   
<input type="text" name="personelid" class="form-control" placeholder="ekleyen" readonly="readonly" value="<?= $sonuc["personelid"] ?>" hidden="hidden"> 

<div class="col-md-12">
         <div class="form-group">                        
   <label class="control-label">İŞLEM TARİHİ</label>
	 <input type="text" id="islemtarihi" class="form-control text-danger tarih" placeholder="İŞLEM TARİHİ" name="islemtarihi" value="<?= $sonuc["islemtarihi"] ?>" />        
                                          </div>
</div>
<div class="col-md-12">
         <div class="form-group">                        
   <label class="control-label">MAAŞ</label>
	       <select class="form-control custom-select" id="maasi1" data-placeholder="İzin Türü Seçiniz" tabindex="1" name="maas">
 <option class="text-danger" value="<?= $sonuc["maas"] ?>"><?= number_format($sonuc["maas"], 2, ',', '.'); ?></option>
 <option class="text-success" value="0">0,00</option>
<?php $personeller = $baglanti->query("SELECT * FROM Personeller where id=".$sonuc["personelid"])->fetchAll(PDO::FETCH_ASSOC);
                                                                
                                                if(count($personeller)>0){ ?>
<?php foreach($personeller as $personel){
                                                            ?>

    
 <option class="text-danger" value="<?php echo $personel['maas']; ?>"><?php echo number_format($personel['maas'], 2, ',', '.'); ?></option>
                                                  <?php } ?>
       <?php } ?>
 </select>     
                                          </div>
</div>
<div class="col-md-12">
         <div class="form-group">                        
   <label class="control-label">AGİ</label>
	       <select class="form-control custom-select" id="agisi1" data-placeholder="İzin Türü Seçiniz" tabindex="1" name="agi">
 <option class="text-danger" value="<?= $sonuc["agi"] ?>"><?= number_format($sonuc["agi"], 2, ',', '.'); ?></option>
 <option class="text-success" value="0">0,00</option>
<?php $personeller = $baglanti->query("SELECT * FROM Personeller where id=".$sonuc["personelid"])->fetchAll(PDO::FETCH_ASSOC);
                                                                
                                                if(count($personeller)>0){ ?>
<?php foreach($personeller as $personel){
                                                            ?>

    
 <option class="text-danger" value="<?php echo $personel['agi']; ?>"><?php echo number_format($personel['agi'], 2, ',', '.'); ?></option>
                                                  <?php } ?>
       <?php } ?>
 </select>       
                                          </div>
</div>
<div class="col-md-12">
         <div class="form-group">                        
   <label class="control-label">AGİLİ MAAŞ</label>
	 <input type="text" id="agilimaas1" class="form-control text-danger sayi" placeholder="AGİLİ MAAŞ" name="agilimaas" value="<?= $sonuc["agilimaas"] ?>">        
                                          </div>
</div>
<div class="col-md-12">
         <div class="form-group">                        
   <label class="control-label">AÇIKLAMA</label>
 <textarea class="form-control text-success" id="aciklama" rows="3" name="aciklama"><?= $sonuc["aciklama"] ?></textarea>            
                                          </div>
</div>
<div class="col-md-12">
         <div class="form-group">
<input type="hidden" class="form-control" name="maasduzenle">
		<button name="kaydet" type="submit" class="btn btn-success btn-raised btn-block">
Kaydet</button>
                                          </div>
</div>
</form>
<?php }?>
	<?php 
 if ($kbilgi["personelmaasduzenle"]!=1) {?>
 	<h1 class="text-danger">BU SAYFAYI GÖRÜNTÜLEMEYE YETKİNİZ YOK </h1>
 <?php }?>
 <?php } ?> 


<?php
		 
	
if ($_POST['odemeduzenleme']) {
			
$id = intval($_POST['odemeduzenleme']);
	$sorgu = $baglanti->prepare("SELECT * FROM PersonelOdeme Where id=:id");
$sorgu->execute(array(':id'=>$id));
$sonuc = $sorgu->fetch();//sorgu çalıştırılıp veriler alınıyor
		
		?>

  <?php 
 if ($kbilgi["personelodemeduzenle"]==1) {?>
	<form id="PersonelOdemeDuzenle" action="javascript:void(0);">
<div class="row">
<input type="text" name="id" class="form-control" placeholder="ekleyen" readonly="readonly" value="<?= $sonuc["id"] ?>" hidden="hidden">
<input type="text" name="ekleyen" class="form-control" placeholder="ekleyen" readonly="readonly" value="<?= $kbilgi["id"] ?>" hidden="hidden">   
<input type="text" name="personelid" class="form-control" placeholder="ekleyen" readonly="readonly" value="<?= $sonuc["personelid"] ?>" hidden="hidden"> 

<div class="col-md-12">
         <div class="form-group">                        
   <label class="control-label">İŞLEM TARİHİ</label>
	 <input type="text" id="islemtarihi" class="form-control text-danger tarih" placeholder="İŞLEM TARİHİ" name="islemtarihi" value="<?= $sonuc["islemtarihi"] ?>" />        
                                          </div>
</div>
<div class="col-md-12">
         <div class="form-group">                        
   <label class="control-label">ÖDEME TÜRÜ</label>
	       <select class="form-control custom-select" id="odemeturu" data-placeholder="İzin Türü Seçiniz" tabindex="1" name="odemeturu">
 <option class="text-primary" value="<?= $sonuc["odemeturu"] ?>"><?= $sonuc["odemeturu"] ?></option>
 <option class="text-primary" value="avans">AVANS ÖDEMESİ</option>
 <option class="text-success" value="maas">MAAŞ ÖDEMESİ</option>
 </select>     
                                          </div>
</div>

<div class="col-md-12">
         <div class="form-group">                        
   <label class="control-label">ÖDEME TUTARI</label>
	 <input type="text" id="odemetutari" class="form-control text-danger sayi" placeholder=ÖDEME TUTARI" name="odeme" value="<?= $sonuc["odeme"] ?>">        
                                          </div>
</div>
<div class="col-md-12">
         <div class="form-group">                        
   <label class="control-label">AÇIKLAMA</label>
 <textarea class="form-control text-success" id="aciklama" rows="3" name="aciklama"><?= $sonuc["aciklama"] ?></textarea>            
                                          </div>
</div>
<div class="col-md-12">
         <div class="form-group">
<input type="hidden" class="form-control" name="odemeduzenle">
		<button name="kaydet" type="submit" class="btn btn-success btn-raised btn-block">
Kaydet</button>
                                          </div>
</div>
</form>
<?php }?>
	<?php 
 if ($kbilgi["personelodemeduzenle"]!=1) {?>
 	<h1 class="text-danger">BU SAYFAYI GÖRÜNTÜLEMEYE YETKİNİZ YOK </h1>
 <?php }?>


 <?php } ?> 
<script>
$( "#sure1, #ucret1" ).keyup(function() {
var suresi1 = parseFloat($("#sure1").val());
var ucreti1 = parseFloat($("#ucret1").val());

$("#mesaitutar1").val(suresi1*ucreti1);

});
</script>
<script>
$( "#maasi1, #agisi1" ).change(function() {
var maasi1 = parseFloat($("#maasi1").val());
var agisi1 = parseFloat($("#agisi1").val());

$("#agilimaas1").val(maasi1+agisi1);

});
</script>
<script>
$( "#izincikis1, #izindonus1" ).change(function() {
var cikis1 = $("#izincikis1").val();
var donus1 = $("#izindonus1").val();
    

   
   // Date fonksiyonu  aa/gg/yyyy formatında zamanı almaktadır.
            var tarih11 = new Date(cikis1);
            var tarih21 = new Date(donus1);
            //iki tarih arasındaki saat farkını hesaplamak için aşağıdaki yöntemi kullanabiliriz.
            var zamanFark = Math.abs(tarih21.getTime() - tarih11.getTime());
            
            //zamanFark değişkeni ile elde edilen saati güne çevirmek için aşağıdaki yöntem kullanılabilir.
            var gunFark1 = Math.ceil(zamanFark / (1000 * 3600 * 24)); 
            
            
  
$("#izinsayisi1").val(gunFark1);


});
</script>
 <script>
    $(document).ready(function () {
                'use strict';

            
                $.datetimepicker.setLocale('tr');
              $('.tarih').datetimepicker({
                format:'Y-m-d H:i',
                  dayOfWeekStart: 1
              });
        
            });
        
    </script>
<script>
        $(document).ready(function(){
            $('#PersonelMesaiDuzenle').submit(function(e) {
				swal({
					
					title: 'Emin misiniz?',
					text: "Düzenlemek istediğinize emin misiniz?",
					icon: "warning",
					buttons:{
						cancel: {
							visible: true,
							text : 'Hayır',
							className: 'btn btn-danger'
						},        			
						confirm: {
							text : 'Evet',
							className : 'btn btn-success'
						}
					}
				}).then((willDelete) => {
					if (willDelete) {
						$.ajax({ // Ajax metodu
                    type: "POST", // Gönderim Methodu POST (GET'de seçilebilir)
                    url: "Islem/Personel.php", // POST işleminin olacağı sayfa
                    data: $("#PersonelMesaiDuzenle").serialize(), // Formdaki tüm verileri al
                    success: function(oldu){ // Eğer işlem başarılı olursa sonuç
                        $('#sonuc').html(oldu); // Id'si result olan divde sonucu yaz
                    }
                });
					} else {
						swal("Düzenlemekten vazgeçtiniz", {
							buttons : {
								confirm : {
									className: 'btn btn-success'
								}
							}
						});
					}
				});
			})
        });
    </script>
<script>
        $(document).ready(function(){
            $('#PersonelIzinDuzenle').submit(function(e) {
				swal({
					
					title: 'Emin misiniz?',
					text: "Düzenlemek istediğinize emin misiniz?",
					icon: "warning",
					buttons:{
						cancel: {
							visible: true,
							text : 'Hayır',
							className: 'btn btn-danger'
						},        			
						confirm: {
							text : 'Evet',
							className : 'btn btn-success'
						}
					}
				}).then((willDelete) => {
					if (willDelete) {
						$.ajax({ // Ajax metodu
                    type: "POST", // Gönderim Methodu POST (GET'de seçilebilir)
                    url: "Islem/Personel.php", // POST işleminin olacağı sayfa
                    data: $("#PersonelIzinDuzenle").serialize(), // Formdaki tüm verileri al
                    success: function(oldu){ // Eğer işlem başarılı olursa sonuç
                        $('#sonuc').html(oldu); // Id'si result olan divde sonucu yaz
                    }
                });
					} else {
						swal("Düzenlemekten vazgeçtiniz", {
							buttons : {
								confirm : {
									className: 'btn btn-success'
								}
							}
						});
					}
				});
			})
        });
    </script>
<script>
        $(document).ready(function(){
            $('#PersonelMaasDuzenle').submit(function(e) {
				swal({
					
					title: 'Emin misiniz?',
					text: "Düzenlemek istediğinize emin misiniz?",
					icon: "warning",
					buttons:{
						cancel: {
							visible: true,
							text : 'Hayır',
							className: 'btn btn-danger'
						},        			
						confirm: {
							text : 'Evet',
							className : 'btn btn-success'
						}
					}
				}).then((willDelete) => {
					if (willDelete) {
						$.ajax({ // Ajax metodu
                    type: "POST", // Gönderim Methodu POST (GET'de seçilebilir)
                    url: "Islem/Personel.php", // POST işleminin olacağı sayfa
                    data: $("#PersonelMaasDuzenle").serialize(), // Formdaki tüm verileri al
                    success: function(oldu){ // Eğer işlem başarılı olursa sonuç
                        $('#sonuc').html(oldu); // Id'si result olan divde sonucu yaz
                    }
                });
					} else {
						swal("Düzenlemekten vazgeçtiniz", {
							buttons : {
								confirm : {
									className: 'btn btn-success'
								}
							}
						});
					}
				});
			})
        });
    </script>
<script>
        $(document).ready(function(){
            $('#PersonelOdemeDuzenle').submit(function(e) {
				swal({
					
					title: 'Emin misiniz?',
					text: "Düzenlemek istediğinize emin misiniz?",
					icon: "warning",
					buttons:{
						cancel: {
							visible: true,
							text : 'Hayır',
							className: 'btn btn-danger'
						},        			
						confirm: {
							text : 'Evet',
							className : 'btn btn-success'
						}
					}
				}).then((willDelete) => {
					if (willDelete) {
						$.ajax({ // Ajax metodu
                    type: "POST", // Gönderim Methodu POST (GET'de seçilebilir)
                    url: "Islem/Personel.php", // POST işleminin olacağı sayfa
                    data: $("#PersonelOdemeDuzenle").serialize(), // Formdaki tüm verileri al
                    success: function(oldu){ // Eğer işlem başarılı olursa sonuç
                        $('#sonuc').html(oldu); // Id'si result olan divde sonucu yaz
                    }
                });
					} else {
						swal("Düzenlemekten vazgeçtiniz", {
							buttons : {
								confirm : {
									className: 'btn btn-success'
								}
							}
						});
					}
				});
			})
        });
    </script>