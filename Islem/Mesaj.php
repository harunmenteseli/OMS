<?php
require("../Ayarlar/Baglantim.php"); 
require("../Ayarlar/Guvenlik.php"); 
?>
<?php
		

/* Birim Ekle*/
if (isset($_POST["mesajekle"])) { 

    $baslik = $_POST['baslik'];
    $mesaj = $_POST['mesaj'];
 $kimden = $_POST['kimden'];
 $kime = $_POST['kime'];
 $okunma = $_POST['okunma'];
 $mesajtarihi = $_POST['mesajtarihi'];

    if($baslik == ""){ 
	echo '<script>swal("Hata","Mesaj Başlığı Alanını Doldurun.","error");</script>';
	}
if($mesaj == ""){ 
	echo '<script>swal("Hata","Mesaj Alanını Doldurun.","error");</script>';
	}
if($kime == ""){ 
	echo '<script>swal("Hata","Gönderilcek Alanını Doldurun.","error");</script>';
	}
	else {
        $satir = [                       
'baslik' => $baslik,
'mesaj' => $mesaj,
'kimden' => $kimden,
'kime' => $kime,
'okunma' => $okunma,
'mesajtarihi' => $mesajtarihi,


        ];
          $sql = "INSERT INTO Mesajlar SET baslik=:baslik, mesaj=:mesaj, kimden=:kimden, kime=:kime, okunma=:okunma, mesajtarihi=:mesajtarihi;";
        $durum = $baglanti->prepare($sql)->execute($satir);

        if ($durum) {
            echo '<script>swal({
            title:"Başarılı",
            text: "Başarıyla Kaydedildi.",
icon:"success",
button:"Tamam",	
            }).then((value)=>{ window.location.href = "Mesajlar.php"});
            </script>';
           

        }
        
         else {
            echo '<script>swal("Hata","Hatalı , Lütfen bilgilerinizi kontrol ediniz.","error");</script>'; 
        }
    }
  
}

/* Birim Ekle*/

/* Cari Grup Düzenle*/
if (isset($_POST["mesajduzenle"])) { 

        $id = $_POST['id'];
    $baslik = $_POST['baslik'];
    $mesaj = $_POST['mesaj'];
 $kimden = $_POST['kimden'];
 $kime = $_POST['kime'];
 $okunma = $_POST['okunma'];
 $mesajtarihi = $_POST['mesajtarihi'];
    if($baslik == ""){ 
	echo '<script>swal("Hata","Mesaj Başlığı Alanını Doldurun.","error");</script>';
	}
if($mesaj == ""){ 
	echo '<script>swal("Hata","Mesaj Alanını Doldurun.","error");</script>';
	}
if($kime == ""){ 
	echo '<script>swal("Hata","Gönderilcek Alanını Doldurun.","error");</script>';
	}
	else {
        $satir = [                       

'id' => $id,
'baslik' => $baslik,
'mesaj' => $mesaj,
'kimden' => $kimden,
'kime' => $kime,
'okunma' => $okunma,
'mesajtarihi' => $mesajtarihi,

        ];
          $sql = "UPDATE Mesajlar SET baslik=:baslik, mesaj=:mesaj, kimden=:kimden, kime=:kime, okunma=:okunma, mesajtarihi=:mesajtarihi WHERE id=:id;";
        $durum = $baglanti->prepare($sql)->execute($satir);

        if ($durum) {
            echo '<script>swal({
            title:"Başarılı",
            text: "Başarıyla Kaydedildi.",
icon:"success",
button:"Tamam",	
            }).then((value)=>{ window.location.href = "Mesajlar.php"});
            </script>';
           

        }
        
         else {
            echo '<script>swal("Hata","Hatalı , Lütfen bilgilerinizi kontrol ediniz.","error");</script>'; 
        }
    }
  
}

/* Birim Düzenle*/

/* Birim Sil */
if ($_POST['gonderenpasif']) {
		
		
		$id = intval($_POST['gonderenpasif']);
    $gonderenpasif = 1;
   
        $satir = [                       

'id' => $id,
'gonderenpasif' => $gonderenpasif,


        ];
          $sql = "UPDATE Mesajlar SET gonderenpasif=:gonderenpasif WHERE id=:id;";
        $durum = $baglanti->prepare($sql)->execute($satir);

        if ($durum) {
            echo '<script>swal({
            title:"Başarılı",
            text: "Başarıyla Silindi.",
icon:"success",
button:"Tamam",	
            }).then((value)=>{ window.location.href = "Mesajlar.php"});
            </script>';
           

        }
        
         else {
            echo '<script>swal("Hata","Hatalı , Lütfen bilgilerinizi kontrol ediniz.","error");</script>'; 
        }

  
}
/* Birim Sil */

/* Birim Sil */
if ($_POST['alanpasif']) {
		
		
		$id = intval($_POST['alanpasif']);
    $alanpasif = 1;
   
        $satir = [                       

'id' => $id,
'alanpasif' => $alanpasif,


        ];
          $sql = "UPDATE Mesajlar SET alanpasif=:alanpasif WHERE id=:id;";
        $durum = $baglanti->prepare($sql)->execute($satir);

        if ($durum) {
            echo '<script>swal({
            title:"Başarılı",
            text: "Başarıyla Silindi.",
icon:"success",
button:"Tamam",	
            }).then((value)=>{ window.location.href = "Mesajlar.php"});
            </script>';
           

        }
        
         else {
            echo '<script>swal("Hata","Hatalı , Lütfen bilgilerinizi kontrol ediniz.","error");</script>'; 
        }

  
}
/* Birim Sil */
/* Birim Sil */
if ($_POST['mesajsil']) {
		
		
		$pid = intval($_POST['mesajsil']);
		$query = "DELETE FROM Mesajlar WHERE id=:pid";
		$durum = $baglanti->prepare( $query );
		$durum->execute(array(':pid'=>$pid));
		
		if ($durum) {
			echo '<script>swal({
            title:"Başarılı",
            text:"Başarıyla Silindi.",
icon:"success",
button:"Tamam",	
            }).then((value)=>{ window.location.href = "UyelerArasiMesajlar.php"});
            </script>';
		} else {
			echo '<script>swal("Hata","Hatalı , Lütfen bilgilerinizi kontrol ediniz.","error");</script>'; 
		}
		
	}
/* Birim Sil */
?>