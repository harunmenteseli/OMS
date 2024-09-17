<?php
require("../Ayarlar/Baglantim.php"); 
require("../Ayarlar/Guvenlik.php"); 
?>
<?php
		


/* Kasa Giriş Ekle*/
if (isset($_POST["cariislemekle"])) { 

    $unvan = $_POST['unvan'];// Sayfa yenilendikten sonra post edilen değerleri değişkenlere atıyoruz

    
   $islemtarihi = $_POST['islemtarihi'];
$tarih = $kisatarih = substr($_POST['islemtarihi'],0,10);
   
   $aciklama = $_POST['aciklama'];
   
   $tutar = $_POST['tutar'];
   

   $islem = $_POST['islem'];
$ekleyen = $_POST['ekleyen'];
$parabirimi = $_POST['parabirimi'];
    if($unvan == ""){ 
	echo '<script>swal("Hata","Ünvan Alanını Doldurun.","error");</script>';
	}

else if($islemtarihi == ""){ 
	echo '<script>swal("Hata","İşlem Tarihi Alanını Doldurun.","error");</script>';
	}
	else if($tutar == ""){ 
	echo '<script>swal("Hata","Tutar Alanını Doldurun.","error");</script>';
	}

	else {
        $satir = [                       
            'unvan' => $unvan,
      'islemtarihi' => $islemtarihi,
'tarih' => $tarih, 
      'tutar' => $tutar,
      'aciklama' => $aciklama,

'islem' => $islem,
'ekleyen' => $ekleyen,
'parabirimi' => $parabirimi,
        ];
          $sql = "INSERT INTO CariIslem SET unvan=:unvan, islemtarihi=:islemtarihi, tarih=:tarih, tutar=:tutar, aciklama=:aciklama, islem=:islem, ekleyen=:ekleyen, parabirimi=:parabirimi;";
        $durum = $baglanti->prepare($sql)->execute($satir);

        if ($durum) {
            echo '<script>swal({
            title:"Başarılı",
            text: "Başarıyla Kaydedildi.",
icon:"success",
button:"Tamam",	
            }).then((value)=>{ window.location.href = "CariIslemler.php"});
            </script>';
           

        }
        
         else {
            echo '<script>swal("Hata","Hatalı , Lütfen bilgilerinizi kontrol ediniz.","error");</script>'; 
        }
    }
  
}

/* Kasa Giriş Ekle*/

if (isset($_POST["cariislemduzenle"])) { 

        $id = $_POST['id'];
     $unvan = $_POST['unvan'];

    
   $islemtarihi = $_POST['islemtarihi'];
$tarih = $kisatarih = substr($_POST['islemtarihi'],0,10);
   
   $aciklama = $_POST['aciklama'];
   
   $tutar = $_POST['tutar'];
   

   $islem = $_POST['islem'];
$ekleyen = $_POST['ekleyen'];
$parabirimi = $_POST['parabirimi'];
   if($unvan == ""){ 
	echo '<script>swal("Hata","Ünvan Alanını Doldurun.","error");</script>';
	}

else if($islemtarihi == ""){ 
	echo '<script>swal("Hata","İşlem Tarihi Alanını Doldurun.","error");</script>';
	}
	else if($tutar == ""){ 
	echo '<script>swal("Hata","Tutar Alanını Doldurun.","error");</script>';
	}

	else {
        $satir = [                       

'id' => $id,
           'unvan' => $unvan,
      'islemtarihi' => $islemtarihi,
'tarih' => $tarih,  
      'tutar' => $tutar,
      'aciklama' => $aciklama,

'islem' => $islem,
'ekleyen' => $ekleyen,
'parabirimi' => $parabirimi,
        ];
          $sql = "UPDATE CariIslem SET unvan=:unvan, islemtarihi=:islemtarihi, tarih=:tarih, tutar=:tutar, aciklama=:aciklama, islem=:islem, ekleyen=:ekleyen, parabirimi=:parabirimi WHERE id=:id;";
        $durum = $baglanti->prepare($sql)->execute($satir);

        if ($durum) {
            echo '<script>swal({
            title:"Başarılı",
            text: "Başarıyla Kaydedildi.",
icon:"success",
button:"Tamam",	
            }).then((value)=>{ window.location.href = "CariIslemler.php"});
            </script>';
           

        }
        
         else {
            echo '<script>swal("Hata","Hatalı , Lütfen bilgilerinizi kontrol ediniz.","error");</script>'; 
        }
    }
  
}

/* Kasa Giriş Sil */
if ($_POST['cariislemsil']) {
		
		
		$pid = intval($_POST['cariislemsil']);
		$query = "DELETE FROM CariIslem WHERE id=:pid";
		$durum = $baglanti->prepare( $query );
		$durum->execute(array(':pid'=>$pid));
		
		if ($durum) {
			echo '<script>swal({
            title:"Başarılı",
            text:"Başarıyla Silindi.",
icon:"success",
button:"Tamam",	
      }).then((value)=>{ window.location.href = "CariIslemler.php"});
            </script>';
		} else {
			echo '<script>swal("Hata","Hatalı , Lütfen bilgilerinizi kontrol ediniz.","error");</script>'; 
		}
		
	}
/* Kasa Giriş Sil */


?>