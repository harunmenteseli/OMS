<?php
require("../Ayarlar/Baglantim.php"); 
require("../Ayarlar/Guvenlik.php"); 
?>
<?php
		

/* Kasa Ekle*/
if (isset($_POST["kasaekle"])) { 

    $kasaadi = $_POST['kasaadi'];
    $aciklama = $_POST['aciklama'];
    $acilistarihi = $_POST['acilistarihi'];
    if($kasaadi == ""){ 
	echo '<script>swal("Hata","Kasa Adı Alanını Doldurun.","error");</script>';
	}
	else if($acilistarihi == ""){ 
	echo '<script>swal("Hata","Açılış Tarihi Alanını Doldurun.","error");</script>';
	}
else if($aciklama == ""){ 
	echo '<script>swal("Hata","Açıklama Alanını Doldurun.","error");</script>';
	}
	else {
        $satir = [                       
'kasaadi' => $kasaadi,
'aciklama' => $aciklama,
'acilistarihi' => $acilistarihi,
        ];
          $sql = "INSERT INTO Kasalar SET kasaadi=:kasaadi, aciklama=:aciklama,acilistarihi=:acilistarihi;";
        $durum = $baglanti->prepare($sql)->execute($satir);

        if ($durum) {
            echo '<script>swal({
            title:"Başarılı",
            text: "Başarıyla Kaydedildi.",
icon:"success",
button:"Tamam",	
            }).then((value)=>{ window.location.href = "Kasalar.php"});
            </script>';
           

        }
        
         else {
            echo '<script>swal("Hata","Hatalı , Lütfen bilgilerinizi kontrol ediniz.","error");</script>'; 
        }
    }
  
}

/* Kasa Ekle*/

/* Kasa Düzenle*/
if (isset($_POST["kasaduzenle"])) { 

$kasaadi = $_POST['kasaadi'];
    $aciklama = $_POST['aciklama'];
    $acilistarihi = $_POST['acilistarihi'];
        $id = $_POST['id'];
    if($kasaadi == ""){ 
	echo '<script>swal("Hata","Kasa Adı Alanını Doldurun.","error");</script>';
	}
	else if($acilistarihi == ""){ 
	echo '<script>swal("Hata","Açılış Tarihi Alanını Doldurun.","error");</script>';
	}
else if($aciklama == ""){ 
	echo '<script>swal("Hata","Açıklama Alanını Doldurun.","error");</script>';
	}
	else {
        $satir = [                       
'kasaadi' => $kasaadi,
'aciklama' => $aciklama,
'acilistarihi' => $acilistarihi,
'id' => $id,
        ];
          $sql = "UPDATE Kasalar SET kasaadi=:kasaadi, aciklama=:aciklama,acilistarihi=:acilistarihi WHERE id=:id;";
        $durum = $baglanti->prepare($sql)->execute($satir);

        if ($durum) {
            echo '<script>swal({
            title:"Başarılı",
            text: "Başarıyla Kaydedildi.",
icon:"success",
button:"Tamam",	
            }).then((value)=>{ window.location.href = "Kasalar.php"});
            </script>';
           

        }
        
         else {
            echo '<script>swal("Hata","Hatalı , Lütfen bilgilerinizi kontrol ediniz.","error");</script>'; 
        }
    }
  
}

/* Kasa Düzenle */

/* Kasa Sil */
if ($_POST['kasasil']) {
		
		
				$pid = intval($_POST['kasasil']);
    $kasa=$baglanti->prepare('SELECT* FROM KasaGiris WHERE kasaadi=:pid');
     $kasa->execute(array($pid));

     if($kasa->rowCount()){
            echo '<script>swal("Hata","Kasada İşlem Var. Silmek İçin Giriş-Çıkış(ları) Silmelisiniz","error").then((value)=>{ window.location.href = "Kasalar.php"});

            </script>';
     }else{
		$query = "DELETE FROM Kasalar WHERE id=:pid";
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
}
/* Kasa Sil */



/* Kasa Giriş Ekle*/
if (isset($_POST["kasagirisekle"])) { 

    $unvan = $_POST['unvan'];// Sayfa yenilendikten sonra post edilen değerleri değişkenlere atıyoruz
    $evraknumarasi = $_POST['evraknumarasi'];
    
   $islemtarihi = $_POST['islemtarihi'];
   
   $aciklama = $_POST['aciklama'];
   
   $tutar = $_POST['tutar'];
   
   $kasaadi = $_POST['kasaadi'];
   $islem = $_POST['islem'];
$ekleyen = $_POST['ekleyen'];
$parabirimi = $_POST['parabirimi'];
    if($unvan == ""){ 
	echo '<script>swal("Hata","Ünvan Alanını Doldurun.","error");</script>';
	}
	else if($evraknumarasi == ""){ 
	echo '<script>swal("Hata","Evrak Numarası Alanını Doldurun.","error");</script>';
	}
else if($islemtarihi == ""){ 
	echo '<script>swal("Hata","İşlem Tarihi Alanını Doldurun.","error");</script>';
	}
	else if($tutar == ""){ 
	echo '<script>swal("Hata","Tutar Alanını Doldurun.","error");</script>';
	}
	else if($kasaadi == ""){ 
	echo '<script>swal("Hata","Kasa Adı Alanını Doldurun.","error");</script>';
	}
	else {
        $satir = [                       
            'unvan' => $unvan,
      'evraknumarasi' => $evraknumarasi,
      'islemtarihi' => $islemtarihi,
      'tutar' => $tutar,
      'aciklama' => $aciklama,
      'kasaadi' => $kasaadi,
'islem' => $islem,
'ekleyen' => $ekleyen,
'parabirimi' => $parabirimi,
        ];
          $sql = "INSERT INTO KasaGiris SET unvan=:unvan, evraknumarasi=:evraknumarasi, islemtarihi=:islemtarihi, tutar=:tutar, aciklama=:aciklama, kasaadi=:kasaadi, islem=:islem, ekleyen=:ekleyen, parabirimi=:parabirimi;";
        $durum = $baglanti->prepare($sql)->execute($satir);

        if ($durum) {
            echo '<script>swal({
            title:"Başarılı",
            text: "Başarıyla Kaydedildi.",
icon:"success",
button:"Tamam",	
            }).then((value)=>{ window.location.href = "Kasalar.php"});
            </script>';
           

        }
        
         else {
            echo '<script>swal("Hata","Hatalı , Lütfen bilgilerinizi kontrol ediniz.","error");</script>'; 
        }
    }
  
}

/* Kasa Giriş Ekle*/

/* Kasa Düzenle*/
if (isset($_POST["kasagirisduzenle"])) { 

$unvan = $_POST['unvan'];// Sayfa yenilendikten sonra post edilen değerleri değişkenlere atıyoruz
    $evraknumarasi = $_POST['evraknumarasi'];
    
   $islemtarihi = $_POST['islemtarihi'];
   
   $aciklama = $_POST['aciklama'];
   
   $tutar = $_POST['tutar'];
   
   $kasaadi = $_POST['kasaadi'];
   $islem = $_POST['islem'];
   $ekleyen = $_POST['ekleyen'];
   $parabirimi = $_POST['parabirimi'];
   $id = $_POST['id'];
    if($unvan == ""){ 
	echo '<script>swal("Hata","Ünvan Alanını Doldurun.","error");</script>';
	}
	else if($evraknumarasi == ""){ 
	echo '<script>swal("Hata","Evrak Numarası Alanını Doldurun.","error");</script>';
	}
else if($islemtarihi == ""){ 
	echo '<script>swal("Hata","İşlem Tarihi Alanını Doldurun.","error");</script>';
	}
	else if($tutar == ""){ 
	echo '<script>swal("Hata","Tutar Alanını Doldurun.","error");</script>';
	}
	else if($kasaadi == ""){ 
	echo '<script>swal("Hata","Kasa Adı Alanını Doldurun.","error");</script>';
	}
	else {
        $satir = [                       
            'unvan' => $unvan,
      'evraknumarasi' => $evraknumarasi,
      'islemtarihi' => $islemtarihi,
      'tutar' => $tutar,
      'aciklama' => $aciklama,
      'kasaadi' => $kasaadi,
'islem' => $islem,
'ekleyen' => $ekleyen,
'parabirimi' => $parabirimi,
'id' => $id,
        ];
          $sql = "UPDATE KasaGiris SET unvan=:unvan, evraknumarasi=:evraknumarasi, islemtarihi=:islemtarihi, tutar=:tutar, aciklama=:aciklama, kasaadi=:kasaadi, islem=:islem, ekleyen=:ekleyen, parabirimi=:parabirimi WHERE id=:id;";
        $durum = $baglanti->prepare($sql)->execute($satir);

        if ($durum) {
            echo '<script>swal({
            title:"Başarılı",
            text: "Başarıyla Kaydedildi.",
icon:"success",
button:"Tamam",	
            }).then((value)=>{ window.location.href = "Kasalar.php"});
            </script>';
           

        }
        
         else {
            echo '<script>swal("Hata","Hatalı , Lütfen bilgilerinizi kontrol ediniz.","error");</script>'; 
        }
    }
  
}

/* Kasa Düzenle */

/* Kasa Giriş Sil */
if ($_POST['kasagirissil']) {
		
		
		$pid = intval($_POST['kasagirissil']);
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
/* Kasa Giriş Sil */


?>