<?php
require("../Ayarlar/Baglantim.php"); 
require("../Ayarlar/Guvenlik.php"); 
?>
<?php
		

/* Kdv Ekle*/
if (isset($_POST["kdvekle"])) { 

    $kdvorani = $_POST['kdvorani'];
    if($kdvorani == ""){ 
	echo '<script>swal("Hata","Kdv Oranı Alanını Doldurun.","error");</script>';
	}

	else {
        $satir = [                       
'kdvorani' => $kdvorani,


        ];
          $sql = "INSERT INTO Kdvler SET kdvorani=:kdvorani;";
        $durum = $baglanti->prepare($sql)->execute($satir);

        if ($durum) {
            echo '<script>swal({
            title:"Başarılı",
            text: "Başarıyla Kaydedildi.",
icon:"success",
button:"Tamam",	
            }).then((value)=>{ window.location.href = "Kdvler.php"});
            </script>';
           

        }
        
         else {
            echo '<script>swal("Hata","Hatalı , Lütfen bilgilerinizi kontrol ediniz.","error");</script>'; 
        }
    }
  
}

/* Kdv Ekle*/

/* Kdv Düzenle*/
if (isset($_POST["kdvduzenle"])) { 

    $kdvorani = $_POST['kdvorani'];
        $id = $_POST['id'];
    if($kdvorani == ""){ 
	echo '<script>swal("Hata","Kdv Oranı Alanını Doldurun.","error");</script>';
	}

	else {
        $satir = [                       
'kdvorani' => $kdvorani,
'id' => $id,

        ];
          $sql = "UPDATE Kdvler SET kdvorani=:kdvorani WHERE id=:id;";
        $durum = $baglanti->prepare($sql)->execute($satir);

        if ($durum) {
            echo '<script>swal({
            title:"Başarılı",
            text: "Başarıyla Kaydedildi.",
icon:"success",
button:"Tamam",	
            }).then((value)=>{ window.location.href = "Kdvler.php"});
            </script>';
           

        }
        
         else {
            echo '<script>swal("Hata","Hatalı , Lütfen bilgilerinizi kontrol ediniz.","error");</script>'; 
        }
    }
  
}

/* Kdv Düzenle */

/* Kdv Sil */
if ($_POST['kdvsil']) {
		
		
		$pid = intval($_POST['kdvsil']);
    $kdv=$baglanti->prepare('SELECT* FROM Urunler WHERE kdvorani=:pid');
     $kdv->execute(array($pid));

     if($kdv->rowCount()){
            echo '<script>swal("Hata","Kdv Oranı Ürüne Bağlı. Silmek İçin Ürün(leri) Silmelisiniz","error").then((value)=>{ window.location.href = "Kdvler.php"});

            </script>';
     }else{
		$query = "DELETE FROM Kdvler WHERE id=:pid";
		$durum = $baglanti->prepare( $query );
		$durum->execute(array(':pid'=>$pid));
		
		if ($durum) {
			echo '<script>swal({
            title:"Başarılı",
            text:"Başarıyla Silindi.",
icon:"success",
button:"Tamam",	
            }).then((value)=>{ window.location.href = "Kdvler.php"});
            </script>';
		} else {
			echo '<script>swal("Hata","Hatalı , Lütfen bilgilerinizi kontrol ediniz.","error");</script>'; 
		}
		
	}
}
/* Kdv Sil */


?>