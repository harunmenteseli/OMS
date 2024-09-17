<?php
require("../Ayarlar/Baglantim.php"); 
require("../Ayarlar/Guvenlik.php"); 
?>
<?php
		

/* Cari Grup Ekle*/
if (isset($_POST["carigrupekle"])) { 

    $carigrupadi = $_POST['carigrupadi'];
    if($carigrupadi == ""){ 
	echo '<script>swal("Hata","Cari Grup Adı Alanını Doldurun.","error");</script>';
	}

	else {
        $satir = [                       
'carigrupadi' => $carigrupadi,


        ];
          $sql = "INSERT INTO CariGruplar SET carigrupadi=:carigrupadi;";
        $durum = $baglanti->prepare($sql)->execute($satir);

        if ($durum) {
            echo '<script>swal({
            title:"Başarılı",
            text: "Başarıyla Kaydedildi.",
icon:"success",
button:"Tamam",	
            }).then((value)=>{ window.location.href = "CariGruplar.php"});
            </script>';
           

        }
        
         else {
            echo '<script>swal("Hata","Hatalı , Lütfen bilgilerinizi kontrol ediniz.","error");</script>'; 
        }
    }
  
}

/* Cari Grup Ekle*/

/* Cari Grup Düzenle*/
if (isset($_POST["carigrupduzenle"])) { 

    $carigrupadi = $_POST['carigrupadi'];
        $id = $_POST['id'];
    if($carigrupadi == ""){ 
	echo '<script>swal("Hata","Cari Grup Adı Alanını Doldurun.","error");</script>';
	}

	else {
        $satir = [                       
'carigrupadi' => $carigrupadi,
'id' => $id,

        ];
          $sql = "UPDATE CariGruplar SET carigrupadi=:carigrupadi WHERE id=:id;";
        $durum = $baglanti->prepare($sql)->execute($satir);

        if ($durum) {
            echo '<script>swal({
            title:"Başarılı",
            text: "Başarıyla Kaydedildi.",
icon:"success",
button:"Tamam",	
            }).then((value)=>{ window.location.href = "CariGruplar.php"});
            </script>';
           

        }
        
         else {
            echo '<script>swal("Hata","Hatalı , Lütfen bilgilerinizi kontrol ediniz.","error");</script>'; 
        }
    }
  
}

/* Cari Grup Ekle*/

/* Cari Grup Sil */
if ($_POST['carigrupsil']) {
		
		
				$pid = intval($_POST['carigrupsil']);
    $carigrup=$baglanti->prepare('SELECT* FROM Cariler WHERE caritipi=:pid');
     $carigrup->execute(array($pid));

     if($carigrup->rowCount()){
            echo '<script>swal("Hata","Cari Grup Cariye Bağlı. Silmek İçin Cari(leri) Silmelisiniz","error").then((value)=>{ window.location.href = "CariGruplar.php"});

            </script>';
     }else{
		$query = "DELETE FROM CariGruplar WHERE id=:pid";
		$durum = $baglanti->prepare( $query );
		$durum->execute(array(':pid'=>$pid));
		
		if ($durum) {
			echo '<script>swal({
            title:"Başarılı",
            text:"Başarıyla Silindi.",
icon:"success",
button:"Tamam",	
            }).then((value)=>{ window.location.href = "CariGruplar.php"});
            </script>';
		} else {
			echo '<script>swal("Hata","Hatalı , Lütfen bilgilerinizi kontrol ediniz.","error");</script>'; 
		}
		
	}
}
/* Cari Grup  Sil */


?>