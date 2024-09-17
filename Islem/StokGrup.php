<?php
require("../Ayarlar/Baglantim.php"); 
require("../Ayarlar/Guvenlik.php"); 
?>
<?php
		

/* Stok  Grup Ekle*/
if (isset($_POST["stokgrupekle"])) { 

    $stokgrupadi = $_POST['stokgrupadi'];
    if($stokgrupadi == ""){ 
	echo '<script>swal("Hata","Stok Grubu Alanını Doldurun.","error");</script>';
	}

	else {
        $satir = [                       
'stokgrupadi' => $stokgrupadi,


        ];
          $sql = "INSERT INTO StokGruplar SET stokgrupadi=:stokgrupadi;";
        $durum = $baglanti->prepare($sql)->execute($satir);

        if ($durum) {
            echo '<script>swal({
            title:"Başarılı",
            text: "Başarıyla Kaydedildi.",
icon:"success",
button:"Tamam",	
            }).then((value)=>{ window.location.href = "StokGruplar.php"});
            </script>';
           

        }
        
         else {
            echo '<script>swal("Hata","Hatalı , Lütfen bilgilerinizi kontrol ediniz.","error");</script>'; 
        }
    }
  
}

/* Stok Grup Ekle*/

/* Stok Grup Düzenle*/
if (isset($_POST["stokgrupduzenle"])) { 

    $stokgrupadi = $_POST['stokgrupadi'];
        $id = $_POST['id'];
    if($stokgrupadi == ""){ 
	echo '<script>swal("Hata","Stok Grup Adı Alanını Doldurun.","error");</script>';
	}

	else {
        $satir = [                       
'stokgrupadi' => $stokgrupadi,
'id' => $id,

        ];
          $sql = "UPDATE StokGruplar SET stokgrupadi=:stokgrupadi WHERE id=:id;";
        $durum = $baglanti->prepare($sql)->execute($satir);

        if ($durum) {
            echo '<script>swal({
            title:"Başarılı",
            text: "Başarıyla Kaydedildi.",
icon:"success",
button:"Tamam",	
            }).then((value)=>{ window.location.href = "StokGruplar.php"});
            </script>';
           

        }
        
         else {
            echo '<script>swal("Hata","Hatalı , Lütfen bilgilerinizi kontrol ediniz.","error");</script>'; 
        }
    }
  
}

/* Stok Grup Ekle*/

/* Stok Grup Sil */
if ($_POST['stokgrupsil']) {
		
		
		$pid = intval($_POST['stokgrupsil']);

    $grup=$baglanti->prepare('SELECT* FROM Urunler WHERE stokgrubu=:pid');
     $grup->execute(array($pid));

     if($grup->rowCount()){
            echo '<script>swal("Hata","Stok Grubu Ürüne Bağlı. Silmek İçin Ürün(leri) Silmelisiniz","error").then((value)=>{ window.location.href = "StokGruplar.php"});

            </script>';
     }else{
		$query = "DELETE FROM StokGruplar WHERE id=:pid";
		$durum = $baglanti->prepare( $query );
		$durum->execute(array(':pid'=>$pid));
		
		if ($durum) {
			echo '<script>swal({
            title:"Başarılı",
            text:"Başarıyla Silindi.",
icon:"success",
button:"Tamam",	
            }).then((value)=>{ window.location.href = "StokGruplar.php"});
            </script>';
		} else {
			echo '<script>swal("Hata","Hatalı , Lütfen bilgilerinizi kontrol ediniz.","error");</script>'; 
		}
		
	}
	}
/* Stok Grup  Sil */


?>