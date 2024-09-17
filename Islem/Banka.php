<?php
require("../Ayarlar/Baglantim.php"); 
require("../Ayarlar/Guvenlik.php"); 
?>
<?php
		

/* Banka Ekle*/
if (isset($_POST["bankaekle"])) { 

    $bankaadi = $_POST['bankaadi'];
    $subeadi = $_POST['subeadi'];    
$hesapnumarasi = $_POST['hesapnumarasi']; 
  $subenumarasi = $_POST['subenumarasi'];
    $ibannumarasi = $_POST['ibannumarasi'];
    if($bankaadi == ""){ 
	echo '<script>swal("Hata","Banka Adı Alanını Doldurun.","error");</script>';
	}
	else if($subeadi== ""){ 
	echo '<script>swal("Hata","Şube Adı Alanını Doldurun.","error");</script>';
	}
else if($hesapnumarasi == ""){ 
	echo '<script>swal("Hata","Hesap Numarası Alanını Doldurun.","error");</script>';
	}
	else if($subenumarasi == ""){ 
	echo '<script>swal("Hata","Şube Numarası Alanını Doldurun.","error");</script>';
	}
	else if($ibannumarasi == ""){ 
	echo '<script>swal("Hata","İban Numarası Alanını Doldurun.","error");</script>';
	}
	else {
        $satir = [                       
            'bankaadi' => $bankaadi,
            'subeadi' => $subeadi, 
  'subenumarasi' => $subenumarasi, 
          'hesapnumarasi' => $hesapnumarasi,
        'ibannumarasi' => $ibannumarasi,

        ];
          $sql = "INSERT INTO Bankalar SET bankaadi=:bankaadi, subeadi=:subeadi,subenumarasi=:subenumarasi, hesapnumarasi=:hesapnumarasi, ibannumarasi=:ibannumarasi;";
        $durum = $baglanti->prepare($sql)->execute($satir);

        if ($durum) {
            echo '<script>swal({
            title:"Başarılı",
            text: "Başarıyla Kaydedildi.",
icon:"success",
button:"Tamam",	
            }).then((value)=>{ window.location.href = "Bankalar.php"});
            </script>';
           

        }
        
         else {
            echo '<script>swal("Hata","Hatalı , Lütfen bilgilerinizi kontrol ediniz.","error");</script>'; 
        }
    }
  
}

/* Banka Ekle*/

/* Banka Düzenle*/
if (isset($_POST["bankaduzenle"])) { 
$id = $_POST['id'];
$bankaadi = $_POST['bankaadi'];
    $subeadi = $_POST['subeadi'];    
$hesapnumarasi = $_POST['hesapnumarasi']; 
  $subenumarasi = $_POST['subenumarasi'];
    $ibannumarasi = $_POST['ibannumarasi'];
    if($bankaadi == ""){ 
	echo '<script>swal("Hata","Banka Adı Alanını Doldurun.","error");</script>';
	}
	else if($subeadi== ""){ 
	echo '<script>swal("Hata","Şube Adı Alanını Doldurun.","error");</script>';
	}
else if($hesapnumarasi == ""){ 
	echo '<script>swal("Hata","Hesap Numarası Alanını Doldurun.","error");</script>';
	}
	else if($subenumarasi == ""){ 
	echo '<script>swal("Hata","Şube Numarası Alanını Doldurun.","error");</script>';
	}
	else if($ibannumarasi == ""){ 
	echo '<script>swal("Hata","İban Numarası Alanını Doldurun.","error");</script>';
	}
	else {
        $satir = [        
                   'id' => $id,   
            'bankaadi' => $bankaadi,
            'subeadi' => $subeadi, 
  'subenumarasi' => $subenumarasi, 
          'hesapnumarasi' => $hesapnumarasi,
        'ibannumarasi' => $ibannumarasi,

        ];
    $sql = "UPDATE Bankalar SET bankaadi=:bankaadi, subeadi=:subeadi,subenumarasi=:subenumarasi, hesapnumarasi=:hesapnumarasi, ibannumarasi=:ibannumarasi WHERE id=:id;";
        $durum = $baglanti->prepare($sql)->execute($satir);

        if ($durum) {
            echo '<script>swal({
            title:"Başarılı",
            text: "Başarıyla Kaydedildi.",
icon:"success",
button:"Tamam",	
            }).then((value)=>{ window.location.href = "Bankalar.php"});
            </script>';
           

        }
        
         else {
            echo '<script>swal("Hata","Hatalı , Lütfen bilgilerinizi kontrol ediniz.","error");</script>'; 
        }
    }
  
}

/* Banka Düzenle */

/* Banka Sil */
if ($_POST['bankasil']) {
		
		
				$pid = intval($_POST['bankasil']);
    $banka=$baglanti->prepare('SELECT* FROM BankaGiris WHERE bankaadi=:pid');
     $banka->execute(array($pid));

     if($banka->rowCount()){
            echo '<script>swal("Hata","Bankada İşlem Var. Silmek İçin Giriş-Çıkış(ları) Silmelisiniz","error").then((value)=>{ window.location.href = "Bankalar.php"});

            </script>';
     }else{
		$query = "DELETE FROM Bankalar WHERE id=:pid";
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
}
/* Banka Sil */



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
            }).then((value)=>{ window.location.href = "Bankalar.php"});
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
    'odemesekli' => $odemesekli,       'unvan' => $unvan,
'evraknumarasi' => $evraknumarasi,
'aciklama' => $aciklama,
'tutar' => $tutar,
'islem' => $islem,
'ekleyen' => $ekleyen,
        ];
    $sql = "UPDATE BankaGiris SET bankaadi=:bankaadi, islemtarihi=:islemtarihi, odemesekli=:odemesekli, unvan=:unvan, evraknumarasi=:evraknumarasi, aciklama=:aciklama, tutar=:tutar, islem=:islem, ekleyen=:ekleyen, parabirimi=:parabirimi WHERE id=:id;";
        $durum = $baglanti->prepare($sql)->execute($satir);

        if ($durum) {
            echo '<script>swal({
            title:"Başarılı",
            text: "Başarıyla Kaydedildi.",
icon:"success",
button:"Tamam",	
            }).then((value)=>{ window.location.href = "Bankalar.php"});
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
            }).then((value)=>{ window.location.href = "Bankalar.php"});
            </script>';
		} else {
			echo '<script>swal("Hata","Hatalı , Lütfen bilgilerinizi kontrol ediniz.","error");</script>'; 
		}
		
	}
/* Banka Giriş Sil */



?>