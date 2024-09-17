<?php
require("../Ayarlar/Baglantim.php"); 
require("../Ayarlar/Guvenlik.php"); 
?>
<?php
		

/* Birim Ekle*/
if (isset($_POST["ajandaekle"])) { 
 $kid = $_POST['kid'];
    $baslik = $_POST['baslik'];
    $icerik = $_POST['icerik'];
$islemtarihi = $_POST['islemtarihi'];
$yapilacaktarih = $_POST['yapilacaktarih'];
 $onem = $_POST['onem'];
    if($baslik == ""){ 
	echo '<script>swal("Hata","Başlık Alanını Doldurun.","error");</script>';
	}
elseif($icerik == ""){ 
	echo '<script>swal("Hata","Yapılacak İş Alanını Doldurun.","error");</script>';
	}
elseif($yapilacaktarih == ""){ 
	echo '<script>swal("Hata","Yapılacak Tarih Alanını Doldurun.","error");</script>';
	}
elseif($onem == ""){ 
	echo '<script>swal("Hata","Önem Rengi Alanını Doldurun.","error");</script>';
	}
	else {
        $satir = [  
'kid' => $kid,                     
'baslik' => $baslik,
'icerik' => $icerik,
'islemtarihi' => $islemtarihi,
'yapilacaktarih' => $yapilacaktarih,
'onem' => $onem, 

        ];
          $sql = "INSERT INTO Ajanda SET kid=:kid, baslik=:baslik, icerik=:icerik, islemtarihi=:islemtarihi, yapilacaktarih=:yapilacaktarih, onem=:onem;";
        $durum = $baglanti->prepare($sql)->execute($satir);

        if ($durum) {
            echo '<script>swal({
            title:"Başarılı",
            text: "Başarıyla Kaydedildi.",
icon:"success",
button:"Tamam",	
            }).then((value)=>{ window.location.href = "Ajandam.php"});
            </script>';
           

        }
        
         else {
            echo '<script>swal("Hata","Hatalı , Lütfen bilgilerinizi kontrol ediniz.","error");</script>'; 
        }
    }
  
}

/* Birim Ekle*/

/* Cari Grup Düzenle*/
if (isset($_POST["ajandaduzenle"])) { 

        $id = $_POST['id'];
 $kid = $_POST['kid'];
    $baslik = $_POST['baslik'];
    $icerik = $_POST['icerik'];
$islemtarihi = $_POST['islemtarihi'];
$yapilacaktarih = $_POST['yapilacaktarih'];
 $onem = $_POST['onem'];
    if($baslik == ""){ 
	echo '<script>swal("Hata","Başlık Alanını Doldurun.","error");</script>';
	}
elseif($icerik == ""){ 
	echo '<script>swal("Hata","Yapılacak İş Alanını Doldurun.","error");</script>';
	}
elseif($yapilacaktarih == ""){ 
	echo '<script>swal("Hata","Yapılacak Tarih Alanını Doldurun.","error");</script>';
	}
elseif($onem == ""){ 
	echo '<script>swal("Hata","Önem Rengi Alanını Doldurun.","error");</script>';
	}
	else {
        $satir = [                       

'id' => $id,
'kid' => $kid,                     
'baslik' => $baslik,
'icerik' => $icerik,
'islemtarihi' => $islemtarihi,
'yapilacaktarih' => $yapilacaktarih,
'onem' => $onem, 

        ];
          $sql = "UPDATE Ajanda SET kid=:kid, baslik=:baslik, icerik=:icerik, islemtarihi=:islemtarihi, yapilacaktarih=:yapilacaktarih, onem=:onem WHERE id=:id;";
        $durum = $baglanti->prepare($sql)->execute($satir);

        if ($durum) {
            echo '<script>swal({
            title:"Başarılı",
            text: "Başarıyla Kaydedildi.",
icon:"success",
button:"Tamam",	
            }).then((value)=>{ window.location.href = "Ajandam.php"});
            </script>';
           

        }
        
         else {
            echo '<script>swal("Hata","Hatalı , Lütfen bilgilerinizi kontrol ediniz.","error");</script>'; 
        }
    }
  
}

/* Birim Düzenle*/

/* Birim Sil */
if ($_POST['ajandasil']) {
		
		
		$pid = intval($_POST['ajandasil']);
		$query = "DELETE FROM Ajanda WHERE id=:pid";
		$durum = $baglanti->prepare( $query );
		$durum->execute(array(':pid'=>$pid));
		
		if ($durum) {
			echo '<script>swal({
            title:"Başarılı",
            text:"Başarıyla Silindi.",
icon:"success",
button:"Tamam",	
            }).then((value)=>{ window.location.href = "Ajandam.php"});
            </script>';
		} else {
			echo '<script>swal("Hata","Hatalı , Lütfen bilgilerinizi kontrol ediniz.","error");</script>'; 
		}
		
	}
/* Birim Sil */


?>