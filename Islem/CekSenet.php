<?php
require("../Ayarlar/Baglantim.php"); 
require("../Ayarlar/Guvenlik.php"); 
?>
<?php
		/* Alınan Çek Ekle*/
				
if (isset($_POST["alinancekekle"])) { 

    $ceknumarasi = $_POST['ceknumarasi'];
       $islemtarihi = $_POST['islemtarihi'];
           $vadetarihi = $_POST['vadetarihi'];
               $tutar = $_POST['tutar'];
     $durum = $_POST['durum'];
         $aciklama = $_POST['aciklama'];
             $bankaadi = $_POST['bankaadi'];
       $bankasubesi = $_POST['bankasubesi'];
           $hesapnumarasi = $_POST['hesapnumarasi'];
         $unvan = $_POST['unvan'];
       $evrakturu = $_POST['evrakturu'];
       $cekturu = $_POST['cekturu'];
    $ceksenet = $_POST['ceksenet'];
 $islem = $_POST['islem'];  
  $ekleyen = $_POST['ekleyen']; 
  $parabirimi = $_POST['parabirimi'];  
   if($ceknumarasi == ""){ 
	echo '<script>swal("Hata","Çek Numarası Alanını Doldurun.","error");</script>';
	}
else if($islemtarihi == ""){ 
	echo '<script>swal("Hata","İşlem Tarihi Alanını Doldurun.","error");</script>';
	}
	else if($vadetarihi == ""){ 
	echo '<script>swal("Hata","Vade Tarihi Alanını Doldurun.","error");</script>';
	}
	else if($tutar == ""){ 
	echo '<script>swal("Hata","Tutar Alanını Doldurun.","error");</script>';
	}
	else if($durum == ""){ 
	echo '<script>swal("Hata","Durum Alanını Doldurun.","error");</script>';
	}
	else if($bankaadi == ""){ 
	echo '<script>swal("Hata","Banka Adı Alanını Doldurun.","error");</script>';
	}
	else if($bankasubesi == ""){ 
	echo '<script>swal("Hata","Banka Şubesi Alanını Doldurun.","error");</script>';
	}
	else if($hesapnumarasi == ""){ 
	echo '<script>swal("Hata","Hesap Numarası Alanını Doldurun.","error");</script>';
	}
	else if($unvan == ""){ 
	echo '<script>swal("Hata","Ünvan Alanını Doldurun.","error");</script>';
	}
	else if($evrakturu == ""){ 
	echo '<script>swal("Hata","Evrak Türü Alanını Doldurun.","error");</script>';
	}
	else if($cekturu == ""){ 
	echo '<script>swal("Hata","Çek Türü Alanını Doldurun.","error");</script>';
	}
else {
        $satir = [                       
 'ceknumarasi' => $ceknumarasi,
'islemtarihi' => $islemtarihi,
'vadetarihi' => $vadetarihi,
'tutar' => $tutar,
'durum' => $durum,
'aciklama' => $aciklama,
'bankaadi' => $bankaadi,
'bankasubesi' => $bankasubesi,
'hesapnumarasi' => $hesapnumarasi,
'unvan' => $unvan,
'evrakturu' => $evrakturu,
'cekturu' => $cekturu,
'ceksenet' => $ceksenet,
'islem' => $islem,
'ekleyen' => $ekleyen,
'parabirimi' => $parabirimi,
        ];
          $sql = "INSERT INTO CekSenet SET ceknumarasi=:ceknumarasi, islemtarihi=:islemtarihi, vadetarihi=:vadetarihi, tutar=:tutar, durum=:durum,  aciklama=:aciklama, bankaadi=:bankaadi, bankasubesi=:bankasubesi, hesapnumarasi=:hesapnumarasi, unvan=:unvan, evrakturu=:evrakturu, cekturu=:cekturu, ceksenet=:ceksenet, islem=:islem, ekleyen=:ekleyen, parabirimi=:parabirimi;";
        $durum = $baglanti->prepare($sql)->execute($satir);
if ($durum) {
            echo '<script>swal({
            title:"Başarılı",
            text: "Başarıyla Kaydedildi.",
icon:"success",
button:"Tamam",	
            }).then((value)=>{ window.location.href = "AlinanCekler.php"});
            </script>';
           

        }
        
         else {
            echo '<script>swal("Hata","Hatalı , Lütfen bilgilerinizi kontrol ediniz.","error");</script>'; 
        }
    }
  
}
/* Alınan Çek Ekle*/
/* Alınan Çek Düzenle */

if(isset($_POST["alinancekduzenle"])) { 
$id        =$_POST["id"];
    $ceknumarasi = $_POST['ceknumarasi'];// Sayfa yenilendikten sonra post edilen değerleri değişkenlere atıyoruz
       $islemtarihi = $_POST['islemtarihi'];
           $vadetarihi = $_POST['vadetarihi'];
               $tutar = $_POST['tutar'];
     $durum = $_POST['durum'];
         $aciklama = $_POST['aciklama'];
             $bankaadi = $_POST['bankaadi'];
       $bankasubesi = $_POST['bankasubesi'];
           $hesapnumarasi = $_POST['hesapnumarasi'];
         $unvan = $_POST['unvan'];
       $evrakturu = $_POST['evrakturu'];
       $cekturu = $_POST['cekturu'];
    $ceksenet = $_POST['ceksenet'];
 $islem = $_POST['islem'];  
 $ekleyen = $_POST['ekleyen'];  
 $parabirimi = $_POST['parabirimi'];  
    $hata = "";

    // Veri alanlarının boş olmadığını kontrol ettiriyoruz. başka kontrollerde yapabilirsiniz.
    
    if($ceknumarasi == ""){ 
	echo '<script>swal("Hata","Çek Numarası Alanını Doldurun.","error");</script>';
	}
else if($islemtarihi == ""){ 
	echo '<script>swal("Hata","İşlem Tarihi Alanını Doldurun.","error");</script>';
	}
	else if($vadetarihi == ""){ 
	echo '<script>swal("Hata","Vade Tarihi Alanını Doldurun.","error");</script>';
	}
	else if($tutar == ""){ 
	echo '<script>swal("Hata","Tutar Alanını Doldurun.","error");</script>';
	}
	else if($durum == ""){ 
	echo '<script>swal("Hata","Durum Alanını Doldurun.","error");</script>';
	}
	else if($bankaadi == ""){ 
	echo '<script>swal("Hata","Banka Adı Alanını Doldurun.","error");</script>';
	}
	else if($bankasubesi == ""){ 
	echo '<script>swal("Hata","Banka Şubesi Alanını Doldurun.","error");</script>';
	}
	else if($hesapnumarasi == ""){ 
	echo '<script>swal("Hata","Hesap Numarası Alanını Doldurun.","error");</script>';
	}
	else if($unvan == ""){ 
	echo '<script>swal("Hata","Ünvan Alanını Doldurun.","error");</script>';
	}
	else if($evrakturu == ""){ 
	echo '<script>swal("Hata","Evrak Türü Alanını Doldurun.","error");</script>';
	}
	else if($cekturu == ""){ 
	echo '<script>swal("Hata","Çek Türü Alanını Doldurun.","error");</script>';
	}
else {
        $satir = [             
                 'id' => $id,      
 'ceknumarasi' => $ceknumarasi,
'islemtarihi' => $islemtarihi,
'vadetarihi' => $vadetarihi,
'tutar' => $tutar,
'durum' => $durum,
'aciklama' => $aciklama,
'bankaadi' => $bankaadi,
'bankasubesi' => $bankasubesi,
'hesapnumarasi' => $hesapnumarasi,
'unvan' => $unvan,
'evrakturu' => $evrakturu,
'cekturu' => $cekturu,
'ceksenet' => $ceksenet,
'islem' => $islem,
'ekleyen' => $ekleyen,
'parabirimi' => $parabirimi,
        ];
          $sql = "UPDATE CekSenet SET ceknumarasi=:ceknumarasi, islemtarihi=:islemtarihi, vadetarihi=:vadetarihi, tutar=:tutar, durum=:durum,  aciklama=:aciklama, bankaadi=:bankaadi, bankasubesi=:bankasubesi, hesapnumarasi=:hesapnumarasi, unvan=:unvan, evrakturu=:evrakturu, cekturu=:cekturu, ceksenet=:ceksenet, islem=:islem, ekleyen=:ekleyen, parabirimi=:parabirimi WHERE id=:id;";
        $durum = $baglanti->prepare($sql)->execute($satir);

        if ($durum) {
            echo '<script>swal({
            title:"Başarılı",
            text:"Başarıyla Düzenlendi.",
icon:"success",
button:"Tamam",	
            }).then((value)=>{ window.location.href = "AlinanCekler.php"});
            </script>';
           

        }
    
         else {
            echo '<script>swal("Hata","Hatalı , Lütfen bilgilerinizi kontrol ediniz.","error");</script>'; 
        }
    }
    
}
/* Alınan Çek Düzenle */
/* Alınan Çek Sil */
if ($_POST['alinanceksil']) {
		
		
		$pid = intval($_POST['alinanceksil']);
		$query = "DELETE FROM CekSenet WHERE id=:pid";
		$durum = $baglanti->prepare( $query );
		$durum->execute(array(':pid'=>$pid));
		
		if ($durum) {
			echo '<script>swal({
            title:"Başarılı",
            text:"Başarıyla Silindi.",
icon:"success",
button:"Tamam",	
            }).then((value)=>{ window.location.href = "AlinanCekler.php"});
            </script>';
		} else {
			echo '<script>swal("Hata","Hatalı , Lütfen bilgilerinizi kontrol ediniz.","error");</script>'; 
		}
		
	}
/* Alınan Çek Sil */
/* Alınan Senet Ekle */
if (isset($_POST["alinansenetekle"])) { 

    $ceknumarasi = $_POST['ceknumarasi'];
       $islemtarihi = $_POST['islemtarihi'];
           $vadetarihi = $_POST['vadetarihi'];
               $tutar = $_POST['tutar'];
     $durum = $_POST['durum'];
         $aciklama = $_POST['aciklama'];
             $bankaadi = $_POST['bankaadi'];
       $bankasubesi = $_POST['bankasubesi'];
           $hesapnumarasi = $_POST['hesapnumarasi'];
         $unvan = $_POST['unvan'];
       $evrakturu = $_POST['evrakturu'];
       $cekturu = $_POST['cekturu'];
    $ceksenet = $_POST['ceksenet'];
 $islem = $_POST['islem'];  
  $ekleyen = $_POST['ekleyen'];  
 $parabirimi = $_POST['parabirimi'];  
   if($ceknumarasi == ""){ 
	echo '<script>swal("Hata","Senet Numarası Alanını Doldurun.","error");</script>';
	}
else if($islemtarihi == ""){ 
	echo '<script>swal("Hata","İşlem Tarihi Alanını Doldurun.","error");</script>';
	}
	else if($vadetarihi == ""){ 
	echo '<script>swal("Hata","Vade Tarihi Alanını Doldurun.","error");</script>';
	}
	else if($tutar == ""){ 
	echo '<script>swal("Hata","Tutar Alanını Doldurun.","error");</script>';
	}
	else if($durum == ""){ 
	echo '<script>swal("Hata","Durum Alanını Doldurun.","error");</script>';
	}
	else if($bankaadi == ""){ 
	echo '<script>swal("Hata","Banka Adı Alanını Doldurun.","error");</script>';
	}
	else if($bankasubesi == ""){ 
	echo '<script>swal("Hata","Banka Şubesi Alanını Doldurun.","error");</script>';
	}
	else if($hesapnumarasi == ""){ 
	echo '<script>swal("Hata","Hesap Numarası Alanını Doldurun.","error");</script>';
	}
	else if($unvan == ""){ 
	echo '<script>swal("Hata","Ünvan Alanını Doldurun.","error");</script>';
	}
	else if($evrakturu == ""){ 
	echo '<script>swal("Hata","Evrak Türü Alanını Doldurun.","error");</script>';
	}
	else if($cekturu == ""){ 
	echo '<script>swal("Hata","Çek Türü Alanını Doldurun.","error");</script>';
	}
else {
        $satir = [                       
 'ceknumarasi' => $ceknumarasi,
'islemtarihi' => $islemtarihi,
'vadetarihi' => $vadetarihi,
'tutar' => $tutar,
'durum' => $durum,
'aciklama' => $aciklama,
'bankaadi' => $bankaadi,
'bankasubesi' => $bankasubesi,
'hesapnumarasi' => $hesapnumarasi,
'unvan' => $unvan,
'evrakturu' => $evrakturu,
'cekturu' => $cekturu,
'ceksenet' => $ceksenet,
'islem' => $islem,
'ekleyen' => $ekleyen,
'parabirimi' => $parabirimi,
        ];
          $sql = "INSERT INTO CekSenet SET ceknumarasi=:ceknumarasi, islemtarihi=:islemtarihi, vadetarihi=:vadetarihi, tutar=:tutar, durum=:durum,  aciklama=:aciklama, bankaadi=:bankaadi, bankasubesi=:bankasubesi, hesapnumarasi=:hesapnumarasi, unvan=:unvan, evrakturu=:evrakturu, cekturu=:cekturu, ceksenet=:ceksenet, islem=:islem, ekleyen=:ekleyen, parabirimi=:parabirimi;";
        $durum = $baglanti->prepare($sql)->execute($satir);
if ($durum) {
            echo '<script>swal({
            title:"Başarılı",
            text: "Başarıyla Kaydedildi.",
icon:"success",
button:"Tamam",	
            }).then((value)=>{ window.location.href = "AlinanSenetler.php"});
            </script>';
           

        }
        
         else {
            echo '<script>swal("Hata","Hatalı , Lütfen bilgilerinizi kontrol ediniz.","error");</script>'; 
        }
    }
  
}
/* Alınan Senet Ekle */

/* Alınan Senet Düzenle */

if(isset($_POST["alinansenetduzenle"])) { 
$id        =$_POST["id"];
    $ceknumarasi = $_POST['ceknumarasi'];// Sayfa yenilendikten sonra post edilen değerleri değişkenlere atıyoruz
       $islemtarihi = $_POST['islemtarihi'];
           $vadetarihi = $_POST['vadetarihi'];
               $tutar = $_POST['tutar'];
     $durum = $_POST['durum'];
         $aciklama = $_POST['aciklama'];
             $bankaadi = $_POST['bankaadi'];
       $bankasubesi = $_POST['bankasubesi'];
           $hesapnumarasi = $_POST['hesapnumarasi'];
         $unvan = $_POST['unvan'];
       $evrakturu = $_POST['evrakturu'];
       $cekturu = $_POST['cekturu'];
    $ceksenet = $_POST['ceksenet'];
 $islem = $_POST['islem']; 
 $ekleyen = $_POST['ekleyen'];  
 $parabirimi = $_POST['parabirimi']; 
    $hata = "";

    // Veri alanlarının boş olmadığını kontrol ettiriyoruz. başka kontrollerde yapabilirsiniz.
    
    if($ceknumarasi == ""){ 
	echo '<script>swal("Hata","Senet Numarası Alanını Doldurun.","error");</script>';
	}
else if($islemtarihi == ""){ 
	echo '<script>swal("Hata","İşlem Tarihi Alanını Doldurun.","error");</script>';
	}
	else if($vadetarihi == ""){ 
	echo '<script>swal("Hata","Vade Tarihi Alanını Doldurun.","error");</script>';
	}
	else if($tutar == ""){ 
	echo '<script>swal("Hata","Tutar Alanını Doldurun.","error");</script>';
	}
	else if($durum == ""){ 
	echo '<script>swal("Hata","Durum Alanını Doldurun.","error");</script>';
	}
	else if($bankaadi == ""){ 
	echo '<script>swal("Hata","Banka Adı Alanını Doldurun.","error");</script>';
	}
	else if($bankasubesi == ""){ 
	echo '<script>swal("Hata","Banka Şubesi Alanını Doldurun.","error");</script>';
	}
	else if($hesapnumarasi == ""){ 
	echo '<script>swal("Hata","Hesap Numarası Alanını Doldurun.","error");</script>';
	}
	else if($unvan == ""){ 
	echo '<script>swal("Hata","Ünvan Alanını Doldurun.","error");</script>';
	}
	else if($evrakturu == ""){ 
	echo '<script>swal("Hata","Evrak Türü Alanını Doldurun.","error");</script>';
	}
	else if($cekturu == ""){ 
	echo '<script>swal("Hata","Çek Türü Alanını Doldurun.","error");</script>';
	}
else {
        $satir = [             
                 'id' => $id,      
 'ceknumarasi' => $ceknumarasi,
'islemtarihi' => $islemtarihi,
'vadetarihi' => $vadetarihi,
'tutar' => $tutar,
'durum' => $durum,
'aciklama' => $aciklama,
'bankaadi' => $bankaadi,
'bankasubesi' => $bankasubesi,
'hesapnumarasi' => $hesapnumarasi,
'unvan' => $unvan,
'evrakturu' => $evrakturu,
'cekturu' => $cekturu,
'ceksenet' => $ceksenet,
'islem' => $islem,
'ekleyen' => $ekleyen,
'parabirimi' => $parabirimi,
        ];
          $sql = "UPDATE CekSenet SET ceknumarasi=:ceknumarasi, islemtarihi=:islemtarihi, vadetarihi=:vadetarihi, tutar=:tutar, durum=:durum,  aciklama=:aciklama, bankaadi=:bankaadi, bankasubesi=:bankasubesi, hesapnumarasi=:hesapnumarasi, unvan=:unvan, evrakturu=:evrakturu, cekturu=:cekturu, ceksenet=:ceksenet, islem=:islem, ekleyen=:ekleyen, parabirimi=:parabirimi WHERE id=:id;";
        $durum = $baglanti->prepare($sql)->execute($satir);

        if ($durum) {
            echo '<script>swal({
            title:"Başarılı",
            text:"Başarıyla Düzenlendi.",
icon:"success",
button:"Tamam",	
            }).then((value)=>{ window.location.href = "AlinanSenetler.php"});
            </script>';
           

        }
    
         else {
            echo '<script>swal("Hata","Hatalı , Lütfen bilgilerinizi kontrol ediniz.","error");</script>'; 
        }
    }
    
}
/* Alınan Senet Düzenle */
/* Alınan Senet Sil */
if ($_POST['alinansenetsil']) {
		
		
		$pid = intval($_POST['alinansenetsil']);
		$query = "DELETE FROM CekSenet WHERE id=:pid";
		$durum = $baglanti->prepare( $query );
		$durum->execute(array(':pid'=>$pid));
		
		if ($durum) {
			echo '<script>swal({
            title:"Başarılı",
            text:"Başarıyla Silindi.",
icon:"success",
button:"Tamam",	
            }).then((value)=>{ window.location.href = "AlinanSenetler.php"});
            </script>';
		} else {
			echo '<script>swal("Hata","Hatalı , Lütfen bilgilerinizi kontrol ediniz.","error");</script>'; 
		}
		
	}
/* Alınan Senet Sil */



/* Verilen Çek Ekle*/
				
if (isset($_POST["verilencekekle"])) { 

    $ceknumarasi = $_POST['ceknumarasi'];
       $islemtarihi = $_POST['islemtarihi'];
           $vadetarihi = $_POST['vadetarihi'];
               $tutar = $_POST['tutar'];
     $durum = $_POST['durum'];
         $aciklama = $_POST['aciklama'];
             $bankaadi = $_POST['bankaadi'];
       $bankasubesi = $_POST['bankasubesi'];
           $hesapnumarasi = $_POST['hesapnumarasi'];
         $unvan = $_POST['unvan'];
       $evrakturu = $_POST['evrakturu'];
       $cekturu = $_POST['cekturu'];
    $ceksenet = $_POST['ceksenet'];
 $islem = $_POST['islem'];  
  $ekleyen = $_POST['ekleyen']; 
  $parabirimi = $_POST['parabirimi'];   
   if($ceknumarasi == ""){ 
	echo '<script>swal("Hata","Çek Numarası Alanını Doldurun.","error");</script>';
	}
else if($islemtarihi == ""){ 
	echo '<script>swal("Hata","İşlem Tarihi Alanını Doldurun.","error");</script>';
	}
	else if($vadetarihi == ""){ 
	echo '<script>swal("Hata","Vade Tarihi Alanını Doldurun.","error");</script>';
	}
	else if($tutar == ""){ 
	echo '<script>swal("Hata","Tutar Alanını Doldurun.","error");</script>';
	}
	else if($durum == ""){ 
	echo '<script>swal("Hata","Durum Alanını Doldurun.","error");</script>';
	}
	else if($bankaadi == ""){ 
	echo '<script>swal("Hata","Banka Adı Alanını Doldurun.","error");</script>';
	}
	else if($bankasubesi == ""){ 
	echo '<script>swal("Hata","Banka Şubesi Alanını Doldurun.","error");</script>';
	}
	else if($hesapnumarasi == ""){ 
	echo '<script>swal("Hata","Hesap Numarası Alanını Doldurun.","error");</script>';
	}
	else if($unvan == ""){ 
	echo '<script>swal("Hata","Ünvan Alanını Doldurun.","error");</script>';
	}
	else if($evrakturu == ""){ 
	echo '<script>swal("Hata","Evrak Türü Alanını Doldurun.","error");</script>';
	}
	else if($cekturu == ""){ 
	echo '<script>swal("Hata","Çek Türü Alanını Doldurun.","error");</script>';
	}
else {
        $satir = [                       
 'ceknumarasi' => $ceknumarasi,
'islemtarihi' => $islemtarihi,
'vadetarihi' => $vadetarihi,
'tutar' => $tutar,
'durum' => $durum,
'aciklama' => $aciklama,
'bankaadi' => $bankaadi,
'bankasubesi' => $bankasubesi,
'hesapnumarasi' => $hesapnumarasi,
'unvan' => $unvan,
'evrakturu' => $evrakturu,
'cekturu' => $cekturu,
'ceksenet' => $ceksenet,
'islem' => $islem,
'ekleyen' => $ekleyen,
'parabirimi' => $parabirimi,
        ];
          $sql = "INSERT INTO CekSenet SET ceknumarasi=:ceknumarasi, islemtarihi=:islemtarihi, vadetarihi=:vadetarihi, tutar=:tutar, durum=:durum,  aciklama=:aciklama, bankaadi=:bankaadi, bankasubesi=:bankasubesi, hesapnumarasi=:hesapnumarasi, unvan=:unvan, evrakturu=:evrakturu, cekturu=:cekturu, ceksenet=:ceksenet, islem=:islem, ekleyen=:ekleyen, parabirimi=:parabirimi;";
        $durum = $baglanti->prepare($sql)->execute($satir);
if ($durum) {
            echo '<script>swal({
            title:"Başarılı",
            text: "Başarıyla Kaydedildi.",
icon:"success",
button:"Tamam",	
            }).then((value)=>{ window.location.href = "VerilenCekler.php"});
            </script>';
           

        }
        
         else {
            echo '<script>swal("Hata","Hatalı , Lütfen bilgilerinizi kontrol ediniz.","error");</script>'; 
        }
    }
  
}
/* Verilen Çek Ekle*/
/* Verilen Çek Düzenle */

if(isset($_POST["verilencekduzenle"])) { 
$id        =$_POST["id"];
    $ceknumarasi = $_POST['ceknumarasi'];// Sayfa yenilendikten sonra post edilen değerleri değişkenlere atıyoruz
       $islemtarihi = $_POST['islemtarihi'];
           $vadetarihi = $_POST['vadetarihi'];
               $tutar = $_POST['tutar'];
     $durum = $_POST['durum'];
         $aciklama = $_POST['aciklama'];
             $bankaadi = $_POST['bankaadi'];
       $bankasubesi = $_POST['bankasubesi'];
           $hesapnumarasi = $_POST['hesapnumarasi'];
         $unvan = $_POST['unvan'];
       $evrakturu = $_POST['evrakturu'];
       $cekturu = $_POST['cekturu'];
    $ceksenet = $_POST['ceksenet'];
 $islem = $_POST['islem'];  
 $ekleyen = $_POST['ekleyen']; 
 $parabirimi = $_POST['parabirimi']; 
    $hata = "";

    // Veri alanlarının boş olmadığını kontrol ettiriyoruz. başka kontrollerde yapabilirsiniz.
    
    if($ceknumarasi == ""){ 
	echo '<script>swal("Hata","Çek Numarası Alanını Doldurun.","error");</script>';
	}
else if($islemtarihi == ""){ 
	echo '<script>swal("Hata","İşlem Tarihi Alanını Doldurun.","error");</script>';
	}
	else if($vadetarihi == ""){ 
	echo '<script>swal("Hata","Vade Tarihi Alanını Doldurun.","error");</script>';
	}
	else if($tutar == ""){ 
	echo '<script>swal("Hata","Tutar Alanını Doldurun.","error");</script>';
	}
	else if($durum == ""){ 
	echo '<script>swal("Hata","Durum Alanını Doldurun.","error");</script>';
	}
	else if($bankaadi == ""){ 
	echo '<script>swal("Hata","Banka Adı Alanını Doldurun.","error");</script>';
	}
	else if($bankasubesi == ""){ 
	echo '<script>swal("Hata","Banka Şubesi Alanını Doldurun.","error");</script>';
	}
	else if($hesapnumarasi == ""){ 
	echo '<script>swal("Hata","Hesap Numarası Alanını Doldurun.","error");</script>';
	}
	else if($unvan == ""){ 
	echo '<script>swal("Hata","Ünvan Alanını Doldurun.","error");</script>';
	}
	else if($evrakturu == ""){ 
	echo '<script>swal("Hata","Evrak Türü Alanını Doldurun.","error");</script>';
	}
	else if($cekturu == ""){ 
	echo '<script>swal("Hata","Çek Türü Alanını Doldurun.","error");</script>';
	}
else {
        $satir = [             
                 'id' => $id,      
 'ceknumarasi' => $ceknumarasi,
'islemtarihi' => $islemtarihi,
'vadetarihi' => $vadetarihi,
'tutar' => $tutar,
'durum' => $durum,
'aciklama' => $aciklama,
'bankaadi' => $bankaadi,
'bankasubesi' => $bankasubesi,
'hesapnumarasi' => $hesapnumarasi,
'unvan' => $unvan,
'evrakturu' => $evrakturu,
'cekturu' => $cekturu,
'ceksenet' => $ceksenet,
'islem' => $islem,
'ekleyen' => $ekleyen,
'parabirimi' => $parabirimi,
        ];
          $sql = "UPDATE CekSenet SET ceknumarasi=:ceknumarasi, islemtarihi=:islemtarihi, vadetarihi=:vadetarihi, tutar=:tutar, durum=:durum,  aciklama=:aciklama, bankaadi=:bankaadi, bankasubesi=:bankasubesi, hesapnumarasi=:hesapnumarasi, unvan=:unvan, evrakturu=:evrakturu, cekturu=:cekturu, ceksenet=:ceksenet, islem=:islem,ekleyen=:ekleyen, parabirimi=:parabirimi WHERE id=:id;";
        $durum = $baglanti->prepare($sql)->execute($satir);

        if ($durum) {
            echo '<script>swal({
            title:"Başarılı",
            text:"Başarıyla Düzenlendi.",
icon:"success",
button:"Tamam",	
            }).then((value)=>{ window.location.href = "VerilenCekler.php"});
            </script>';
           

        }
    
         else {
            echo '<script>swal("Hata","Hatalı , Lütfen bilgilerinizi kontrol ediniz.","error");</script>'; 
        }
    }
    
}
/* Verilen Çek Düzenle */
/* Verilen Çek Sil */
if ($_POST['verilenceksil']) {
		
		
		$pid = intval($_POST['verilenceksil']);
		$query = "DELETE FROM CekSenet WHERE id=:pid";
		$durum = $baglanti->prepare( $query );
		$durum->execute(array(':pid'=>$pid));
		
		if ($durum) {
			echo '<script>swal({
            title:"Başarılı",
            text:"Başarıyla Silindi.",
icon:"success",
button:"Tamam",	
            }).then((value)=>{ window.location.href = "VerilenCekler.php"});
            </script>';
		} else {
			echo '<script>swal("Hata","Hatalı , Lütfen bilgilerinizi kontrol ediniz.","error");</script>'; 
		}
		
	}
/* Verilen Çek Sil */
/* Verilen Senet Ekle */
if (isset($_POST["verilensenetekle"])) { 

    $ceknumarasi = $_POST['ceknumarasi'];
       $islemtarihi = $_POST['islemtarihi'];
           $vadetarihi = $_POST['vadetarihi'];
               $tutar = $_POST['tutar'];
     $durum = $_POST['durum'];
         $aciklama = $_POST['aciklama'];
             $bankaadi = $_POST['bankaadi'];
       $bankasubesi = $_POST['bankasubesi'];
           $hesapnumarasi = $_POST['hesapnumarasi'];
         $unvan = $_POST['unvan'];
       $evrakturu = $_POST['evrakturu'];
       $cekturu = $_POST['cekturu'];
    $ceksenet = $_POST['ceksenet'];
 $islem = $_POST['islem'];  
 $ekleyen = $_POST['ekleyen'];
$parabirimi = $_POST['parabirimi'];
   if($ceknumarasi == ""){ 
	echo '<script>swal("Hata","Senet Numarası Alanını Doldurun.","error");</script>';
	}
else if($islemtarihi == ""){ 
	echo '<script>swal("Hata","İşlem Tarihi Alanını Doldurun.","error");</script>';
	}
	else if($vadetarihi == ""){ 
	echo '<script>swal("Hata","Vade Tarihi Alanını Doldurun.","error");</script>';
	}
	else if($tutar == ""){ 
	echo '<script>swal("Hata","Tutar Alanını Doldurun.","error");</script>';
	}
	else if($durum == ""){ 
	echo '<script>swal("Hata","Durum Alanını Doldurun.","error");</script>';
	}
	else if($bankaadi == ""){ 
	echo '<script>swal("Hata","Banka Adı Alanını Doldurun.","error");</script>';
	}
	else if($bankasubesi == ""){ 
	echo '<script>swal("Hata","Banka Şubesi Alanını Doldurun.","error");</script>';
	}
	else if($hesapnumarasi == ""){ 
	echo '<script>swal("Hata","Hesap Numarası Alanını Doldurun.","error");</script>';
	}
	else if($unvan == ""){ 
	echo '<script>swal("Hata","Ünvan Alanını Doldurun.","error");</script>';
	}
	else if($evrakturu == ""){ 
	echo '<script>swal("Hata","Evrak Türü Alanını Doldurun.","error");</script>';
	}
	else if($cekturu == ""){ 
	echo '<script>swal("Hata","Çek Türü Alanını Doldurun.","error");</script>';
	}
else {
        $satir = [                       
 'ceknumarasi' => $ceknumarasi,
'islemtarihi' => $islemtarihi,
'vadetarihi' => $vadetarihi,
'tutar' => $tutar,
'durum' => $durum,
'aciklama' => $aciklama,
'bankaadi' => $bankaadi,
'bankasubesi' => $bankasubesi,
'hesapnumarasi' => $hesapnumarasi,
'unvan' => $unvan,
'evrakturu' => $evrakturu,
'cekturu' => $cekturu,
'ceksenet' => $ceksenet,
'islem' => $islem,
'ekleyen' => $ekleyen,
'parabirimi' => $parabirimi,
        ];
          $sql = "INSERT INTO CekSenet SET ceknumarasi=:ceknumarasi, islemtarihi=:islemtarihi, vadetarihi=:vadetarihi, tutar=:tutar, durum=:durum,  aciklama=:aciklama, bankaadi=:bankaadi, bankasubesi=:bankasubesi, hesapnumarasi=:hesapnumarasi, unvan=:unvan, evrakturu=:evrakturu, cekturu=:cekturu, ceksenet=:ceksenet, islem=:islem, ekleyen=:ekleyen, parabirimi=:parabirimi;";
        $durum = $baglanti->prepare($sql)->execute($satir);
if ($durum) {
            echo '<script>swal({
            title:"Başarılı",
            text: "Başarıyla Kaydedildi.",
icon:"success",
button:"Tamam",	
            }).then((value)=>{ window.location.href = "VerilenSenetler.php"});
            </script>';
           

        }
        
         else {
            echo '<script>swal("Hata","Hatalı , Lütfen bilgilerinizi kontrol ediniz.","error");</script>'; 
        }
    }
  
}
/* Verilen Senet Ekle */

/* Verilen Senet Düzenle */

if(isset($_POST["verilensenetduzenle"])) { 
$id        =$_POST["id"];
    $ceknumarasi = $_POST['ceknumarasi'];// Sayfa yenilendikten sonra post edilen değerleri değişkenlere atıyoruz
       $islemtarihi = $_POST['islemtarihi'];
           $vadetarihi = $_POST['vadetarihi'];
               $tutar = $_POST['tutar'];
     $durum = $_POST['durum'];
         $aciklama = $_POST['aciklama'];
             $bankaadi = $_POST['bankaadi'];
       $bankasubesi = $_POST['bankasubesi'];
           $hesapnumarasi = $_POST['hesapnumarasi'];
         $unvan = $_POST['unvan'];
       $evrakturu = $_POST['evrakturu'];
       $cekturu = $_POST['cekturu'];
    $ceksenet = $_POST['ceksenet'];
 $islem = $_POST['islem']; 
 $ekleyen = $_POST['ekleyen']; 
 $parabirimi = $_POST['parabirimi'];
    $hata = "";

    // Veri alanlarının boş olmadığını kontrol ettiriyoruz. başka kontrollerde yapabilirsiniz.
    
    if($ceknumarasi == ""){ 
	echo '<script>swal("Hata","Senet Numarası Alanını Doldurun.","error");</script>';
	}
else if($islemtarihi == ""){ 
	echo '<script>swal("Hata","İşlem Tarihi Alanını Doldurun.","error");</script>';
	}
	else if($vadetarihi == ""){ 
	echo '<script>swal("Hata","Vade Tarihi Alanını Doldurun.","error");</script>';
	}
	else if($tutar == ""){ 
	echo '<script>swal("Hata","Tutar Alanını Doldurun.","error");</script>';
	}
	else if($durum == ""){ 
	echo '<script>swal("Hata","Durum Alanını Doldurun.","error");</script>';
	}
	else if($bankaadi == ""){ 
	echo '<script>swal("Hata","Banka Adı Alanını Doldurun.","error");</script>';
	}
	else if($bankasubesi == ""){ 
	echo '<script>swal("Hata","Banka Şubesi Alanını Doldurun.","error");</script>';
	}
	else if($hesapnumarasi == ""){ 
	echo '<script>swal("Hata","Hesap Numarası Alanını Doldurun.","error");</script>';
	}
	else if($unvan == ""){ 
	echo '<script>swal("Hata","Ünvan Alanını Doldurun.","error");</script>';
	}
	else if($evrakturu == ""){ 
	echo '<script>swal("Hata","Evrak Türü Alanını Doldurun.","error");</script>';
	}
	else if($cekturu == ""){ 
	echo '<script>swal("Hata","Çek Türü Alanını Doldurun.","error");</script>';
	}
else {
        $satir = [             
                 'id' => $id,      
 'ceknumarasi' => $ceknumarasi,
'islemtarihi' => $islemtarihi,
'vadetarihi' => $vadetarihi,
'tutar' => $tutar,
'durum' => $durum,
'aciklama' => $aciklama,
'bankaadi' => $bankaadi,
'bankasubesi' => $bankasubesi,
'hesapnumarasi' => $hesapnumarasi,
'unvan' => $unvan,
'evrakturu' => $evrakturu,
'cekturu' => $cekturu,
'ceksenet' => $ceksenet,
'islem' => $islem,
'ekleyen' => $ekleyen,
'parabirimi' => $parabirimi,
        ];
          $sql = "UPDATE CekSenet SET ceknumarasi=:ceknumarasi, islemtarihi=:islemtarihi, vadetarihi=:vadetarihi, tutar=:tutar, durum=:durum,  aciklama=:aciklama, bankaadi=:bankaadi, bankasubesi=:bankasubesi, hesapnumarasi=:hesapnumarasi, unvan=:unvan, evrakturu=:evrakturu, cekturu=:cekturu, ceksenet=:ceksenet, islem=:islem, ekleyen=:ekleyen, parabirimi=:parabirimi WHERE id=:id;";
        $durum = $baglanti->prepare($sql)->execute($satir);

        if ($durum) {
            echo '<script>swal({
            title:"Başarılı",
            text:"Başarıyla Düzenlendi.",
icon:"success",
button:"Tamam",	
            }).then((value)=>{ window.location.href = "VerilenSenetler.php"});
            </script>';
           

        }
    
         else {
            echo '<script>swal("Hata","Hatalı , Lütfen bilgilerinizi kontrol ediniz.","error");</script>'; 
        }
    }
    
}
/* Verilen Senet Düzenle */
/* Verilen Senet Sil */
if ($_POST['verilensenetsil']) {
		
		
		$pid = intval($_POST['verilensenetsil']);
		$query = "DELETE FROM CekSenet WHERE id=:pid";
		$durum = $baglanti->prepare( $query );
		$durum->execute(array(':pid'=>$pid));
		
		if ($durum) {
			echo '<script>swal({
            title:"Başarılı",
            text:"Başarıyla Silindi.",
icon:"success",
button:"Tamam",	
            }).then((value)=>{ window.location.href = "VerilenSenetler.php"});
            </script>';
		} else {
			echo '<script>swal("Hata","Hatalı , Lütfen bilgilerinizi kontrol ediniz.","error");</script>'; 
		}
		
	}
/* Verilen Senet Sil */
?>