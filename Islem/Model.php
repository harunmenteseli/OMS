<?php
require("../Ayarlar/Baglantim.php"); 
require("../Ayarlar/Guvenlik.php"); 
?>
<?php
		

/* Model Ekle*/
if (isset($_POST["modelekle"])) { 

    $markadi = $_POST['markadi'];
    $modeladi = $_POST['modeladi'];
    if($markadi == ""){ 
	echo '<script>swal("Hata","Marka Adı Alanını Doldurun.","error");</script>';
	}
else if($modeladi == ""){ 
	echo '<script>swal("Hata","Model Adı Alanını Doldurun.","error");</script>';
	}
	else {
        $satir = [                       
'markadi' => $markadi,
'modeladi' => $modeladi,

        ];
          $sql = "INSERT INTO Modeller SET modeladi=:modeladi, markadi=:markadi;";
        $durum = $baglanti->prepare($sql)->execute($satir);

        if ($durum) {
            echo '<script>swal({
            title:"Başarılı",
            text: "Başarıyla Kaydedildi.",
icon:"success",
button:"Tamam",	
            }).then((value)=>{ window.location.href = "Modeller.php"});
            </script>';
           

        }
        
         else {
            echo '<script>swal("Hata","Hatalı , Lütfen bilgilerinizi kontrol ediniz.","error");</script>'; 
        }
    }
  
}

/* Model Ekle*/

/* Model Düzenle*/
if (isset($_POST["modelduzenle"])) { 

    $markadi = $_POST['markadi'];
    $modeladi = $_POST['modeladi'];
        $id = $_POST['id'];
    if($markadi == ""){ 
	echo '<script>swal("Hata","Marka Adı Alanını Doldurun.","error");</script>';
	}
else if($modeladi == ""){ 
	echo '<script>swal("Hata","Model Adı Alanını Doldurun.","error");</script>';
	}

	else {
        $satir = [                       
'markadi' => $markadi,
'modeladi' => $modeladi,
'id' => $id,

        ];
          $sql = "UPDATE Modeller SET modeladi=:modeladi, markadi=:markadi WHERE id=:id;";
        $durum = $baglanti->prepare($sql)->execute($satir);

        if ($durum) {
            echo '<script>swal({
            title:"Başarılı",
            text: "Başarıyla Kaydedildi.",
icon:"success",
button:"Tamam",	
            }).then((value)=>{ window.location.href = "Modeller.php"});
            </script>';
           

        }
        
         else {
            echo '<script>swal("Hata","Hatalı , Lütfen bilgilerinizi kontrol ediniz.","error");</script>'; 
        }
    }
  
}

/* Model Düzenle */

/* Mıdel Sil */
if ($_POST['modelsil']) {
		
		
			$pid = intval($_POST['modelsil']);
    $model=$baglanti->prepare('SELECT* FROM Urunler WHERE modeli=:pid');
     $model->execute(array($pid));

     if($model->rowCount()){
            echo '<script>swal("Hata","Model Ürüne Bağlı. Silmek İçin Ürün(leri) Silmelisiniz","error").then((value)=>{ window.location.href = "Modeller.php"});

            </script>';
     }else{
		$query = "DELETE FROM Modeller WHERE id=:pid";
		$durum = $baglanti->prepare( $query );
		$durum->execute(array(':pid'=>$pid));
		
		if ($durum) {
			echo '<script>swal({
            title:"Başarılı",
            text:"Başarıyla Silindi.",
icon:"success",
button:"Tamam",	
            }).then((value)=>{ window.location.href = "Modeller.php"});
            </script>';
		} else {
			echo '<script>swal("Hata","Hatalı , Lütfen bilgilerinizi kontrol ediniz.","error");</script>'; 
		}
		
	}
}
/* Model Sil */


?>