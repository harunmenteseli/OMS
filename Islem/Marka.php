<?php
require("../Ayarlar/Baglantim.php"); 
require("../Ayarlar/Guvenlik.php"); 
?>
<?php
		

/* Marka Ekle*/
if (isset($_POST["markaekle"])) { 

    $markaadi = $_POST['markaadi'];
    if($markaadi == ""){ 
	echo '<script>swal("Hata","Marka Grubu Alanını Doldurun.","error");</script>';
	}

	else {
        $satir = [                       
'markaadi' => $markaadi,


        ];
          $sql = "INSERT INTO Markalar SET markaadi=:markaadi;";
        $durum = $baglanti->prepare($sql)->execute($satir);

        if ($durum) {
            echo '<script>swal({
            title:"Başarılı",
            text: "Başarıyla Kaydedildi.",
icon:"success",
button:"Tamam",	
            }).then((value)=>{ window.location.href = "Markalar.php"});
            </script>';
           

        }
        
         else {
            echo '<script>swal("Hata","Hatalı , Lütfen bilgilerinizi kontrol ediniz.","error");</script>'; 
        }
    }
  
}

/* Marka Ekle*/

/* Marka Düzenle*/
if (isset($_POST["markaduzenle"])) { 

    $markaadi = $_POST['markaadi'];
        $id = $_POST['id'];
    if($markaadi == ""){ 
	echo '<script>swal("Hata","Marka Grup Adı Alanını Doldurun.","error");</script>';
	}

	else {
        $satir = [                       
'markaadi' => $markaadi,
'id' => $id,

        ];
          $sql = "UPDATE Markalar SET markaadi=:markaadi WHERE id=:id;";
        $durum = $baglanti->prepare($sql)->execute($satir);

        if ($durum) {
            echo '<script>swal({
            title:"Başarılı",
            text: "Başarıyla Kaydedildi.",
icon:"success",
button:"Tamam",	
            }).then((value)=>{ window.location.href = "Markalar.php"});
            </script>';
           

        }
        
         else {
            echo '<script>swal("Hata","Hatalı , Lütfen bilgilerinizi kontrol ediniz.","error");</script>'; 
        }
    }
  
}

/* Marka  Düzenle */

/* Marka Sil */
if ($_POST['markasil']) {
		
		
				$pid = intval($_POST['markasil']);
    $marka=$baglanti->prepare('SELECT* FROM Urunler WHERE markasi=:pid');
     $marka->execute(array($pid));

     if($marka->rowCount()){
            echo '<script>swal("Hata","Marka Ürüne Bağlı. Silmek İçin Ürün(leri) Silmelisiniz","error").then((value)=>{ window.location.href = "Markalar.php"});

            </script>';
     }else{
		$query = "DELETE FROM Markalar WHERE id=:pid";
		$durum = $baglanti->prepare( $query );
		$durum->execute(array(':pid'=>$pid));
		
		if ($durum) {
			echo '<script>swal({
            title:"Başarılı",
            text:"Başarıyla Silindi.",
icon:"success",
button:"Tamam",	
            }).then((value)=>{ window.location.href = "Markalar.php"});
            </script>';
		} else {
			echo '<script>swal("Hata","Hatalı , Lütfen bilgilerinizi kontrol ediniz.","error");</script>'; 
		}
		
	}
}
/* Marka Sil */


?>