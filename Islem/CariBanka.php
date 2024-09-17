<?php
require("../Ayarlar/Baglantim.php"); 
require("../Ayarlar/Guvenlik.php"); 
?>
<?php
		





/* Banka Giriş Ekle*/
if (isset($_POST["bankagirisekle"])) { 

    $bankaadi = $_POST['bankaadi'];// Sayfa yenilendikten sonra post edilen değerleri değişkenlere atıyoruz
   $odemesekli = $_POST['odemesekli'];
   $islemtarihi = $_POST['islemtarihi'];
   $unvan = $_POST['unvan'];
   $evraknumarasi = $_POST['evraknumarasi'];
   $aciklama = $_POST['aciklama'];
   $tutar = $_POST['tutar'];
      $islem = $_POST['islem'];
 $ekleyen = $_POST['ekleyen'];
 $parabirimi = $_POST['parabirimi'];
    if($bankaadi == ""){ 
	echo '<script>swal("Hata","Banka Adı Alanını Doldurun.","error");</script>';
	}
	else if($odemesekli== ""){ 
	echo '<script>swal("Hata","Ödeme Şekli Alanını Doldurun.","error");</script>';
	}
else if($islemtarihi == ""){ 
	echo '<script>swal("Hata","İşlem Tarihi Alanını Doldurun.","error");</script>';
	}
	else if($unvan == ""){ 
	echo '<script>swal("Hata","Ünvan Alanını Doldurun.","error");</script>';
	}
	else if($evraknumarasi == ""){ 
	echo '<script>swal("Hata","Evrak Numarası Alanını Doldurun.","error");</script>';
	}
	else if($tutar == ""){ 
	echo '<script>swal("Hata","Tutar Alanını Doldurun.","error");</script>';
	}
	else {
        $satir = [                       
            'bankaadi' => $bankaadi,
           'islemtarihi' => $islemtarihi, 
    'odemesekli' => $odemesekli,       'unvan' => $unvan,
'evraknumarasi' => $evraknumarasi,
'aciklama' => $aciklama,
'tutar' => $tutar,
'islem' => $islem,
'ekleyen' => $ekleyen,
'parabirimi' => $parabirimi,
        ];
          $sql = "INSERT INTO BankaGiris SET bankaadi=:bankaadi, islemtarihi=:islemtarihi, odemesekli=:odemesekli, unvan=:unvan, evraknumarasi=:evraknumarasi, aciklama=:aciklama, tutar=:tutar, islem=:islem, ekleyen=:ekleyen, parabirimi=:parabirimi;";
        $durum = $baglanti->prepare($sql)->execute($satir);

        if ($durum) {
            echo '<script>swal({
            title:"Başarılı",
            text: "Başarıyla Kaydedildi.",
icon:"success",
button:"Tamam",	
            }).then((value)=>{ window.location.href = "CariHesapDetay.php?id='.$unvan.'"});
            </script>';
           

        }
        
         else {
            echo '<script>swal("Hata","Hatalı , Lütfen bilgilerinizi kontrol ediniz.","error");</script>'; 
        }
    }
  
}

/* Banka Giriş Ekle*/

/* Banka Giriş Düzenle*/
if (isset($_POST["bankagirisduzenle"])) { 
$id = $_POST['id'];
$bankaadi = $_POST['bankaadi'];// Sayfa yenilendikten sonra post edilen değerleri değişkenlere atıyoruz
   $odemesekli = $_POST['odemesekli'];
   $islemtarihi = $_POST['islemtarihi'];
   $unvan = $_POST['unvan'];
   $evraknumarasi = $_POST['evraknumarasi'];
   $aciklama = $_POST['aciklama'];
   $tutar = $_POST['tutar'];
      $islem = $_POST['islem'];
   $ekleyen = $_POST['ekleyen'];
   $parabirimi = $_POST['parabirimi'];
    if($bankaadi == ""){ 
	echo '<script>swal("Hata","Banka Adı Alanını Doldurun.","error");</script>';
	}
	else if($odemesekli== ""){ 
	echo '<script>swal("Hata","Ödeme Şekli Alanını Doldurun.","error");</script>';
	}
else if($islemtarihi == ""){ 
	echo '<script>swal("Hata","İşlem Tarihi Alanını Doldurun.","error");</script>';
	}
	else if($unvan == ""){ 
	echo '<script>swal("Hata","Ünvan Alanını Doldurun.","error");</script>';
	}
	else if($evraknumarasi == ""){ 
	echo '<script>swal("Hata","Evrak Numarası Alanını Doldurun.","error");</script>';
	}
	else if($tutar == ""){ 
	echo '<script>swal("Hata","Tutar Alanını Doldurun.","error");</script>';
	}
	else {
        $satir = [                
               'id' => $id,
            'bankaadi' => $bankaadi,
           'islemtarihi' => $islemtarihi, 
    'odemesekli' => $odemesekli,  
     'unvan' => $unvan,
'evraknumarasi' => $evraknumarasi,
'aciklama' => $aciklama,
'tutar' => $tutar,
'islem' => $islem,
'ekleyen' => $ekleyen,
'parabirimi' => $parabirimi,
        ];
    $sql = "UPDATE BankaGiris SET bankaadi=:bankaadi, islemtarihi=:islemtarihi, odemesekli=:odemesekli, unvan=:unvan, evraknumarasi=:evraknumarasi, aciklama=:aciklama, tutar=:tutar, islem=:islem, ekleyen=:ekleyen, parabirimi=:parabirimi WHERE id=:id;";
        $durum = $baglanti->prepare($sql)->execute($satir);

        if ($durum) {
            echo '<script>swal({
            title:"Başarılı",
            text: "Başarıyla Kaydedildi.",
icon:"success",
button:"Tamam",	
            }).then((value)=>{ window.location.href = "CariHesapDetay.php?id='.$unvan.'"});
            </script>';
           

        }
        
         else {
            echo '<script>swal("Hata","Hatalı , Lütfen bilgilerinizi kontrol ediniz.","error");</script>'; 
        }
    }
  
}

/* Banka Giriş Düzenle */

/* Banka Gieiş Sil */
if ($_POST['bankagirissil']) {
		
		
		$pid = intval($_POST['bankagirissil']);
		$query = "DELETE FROM BankaGiris WHERE id=:pid";
		$durum = $baglanti->prepare( $query );
		$durum->execute(array(':pid'=>$pid));
		
		if ($durum) {
			echo '<script>swal({
            title:"Başarılı",
            text:"Başarıyla Silindi.",
icon:"success",
button:"Tamam",	
            }).then((value)=>{ window.location.href = "CariHesapDetay.php?id='.$unvan.'"});
            </script>';
		} else {
			echo '<script>swal("Hata","Hatalı , Lütfen bilgilerinizi kontrol ediniz.","error");</script>'; 
		}
		
	}
/* Banka Giriş Sil */



?>