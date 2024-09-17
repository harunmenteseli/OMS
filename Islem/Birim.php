<?php
require("../Ayarlar/Baglantim.php"); 
require("../Ayarlar/Guvenlik.php"); 
?>
<?php
		

/* Birim Ekle*/
if (isset($_POST["birimekle"])) { 

    $birimadi = $_POST['birimadi'];
    $kisaltma = $_POST['kisaltma'];
    if($birimadi == ""){ 
	echo '<script>swal("Hata","Birim Adı Alanını Doldurun.","error");</script>';
	}
if($kisaltma == ""){ 
	echo '<script>swal("Hata","Kısaltma Alanını Doldurun.","error");</script>';
	}
	else {
        $satir = [                       
'birimadi' => $birimadi,
'kisaltma' => $kisaltma,

        ];
          $sql = "INSERT INTO Birim SET birimadi=:birimadi, kisaltma=:kisaltma;";
        $durum = $baglanti->prepare($sql)->execute($satir);

        if ($durum) {
            echo '<script>swal({
            title:"Başarılı",
            text: "Başarıyla Kaydedildi.",
icon:"success",
button:"Tamam",	
            }).then((value)=>{ window.location.href = "Birimler.php"});
            </script>';
           

        }
        
         else {
            echo '<script>swal("Hata","Hatalı , Lütfen bilgilerinizi kontrol ediniz.","error");</script>'; 
        }
    }
  
}

/* Birim Ekle*/

/* Cari Grup Düzenle*/
if (isset($_POST["birimduzenle"])) { 

        $id = $_POST['id'];
        
    $birimadi = $_POST['birimadi'];
    $kisaltma = $_POST['kisaltma'];
    if($birimadi == ""){ 
	echo '<script>swal("Hata","Birim Adı Alanını Doldurun.","error");</script>';
	}
if($kisaltma == ""){ 
	echo '<script>swal("Hata","Kısaltma Alanını Doldurun.","error");</script>';
	}
	else {
        $satir = [                       

'id' => $id,
'birimadi' => $birimadi,
'kisaltma' => $kisaltma,

        ];
          $sql = "UPDATE Birim SET birimadi=:birimadi, kisaltma=:kisaltma WHERE id=:id;";
        $durum = $baglanti->prepare($sql)->execute($satir);

        if ($durum) {
            echo '<script>swal({
            title:"Başarılı",
            text: "Başarıyla Kaydedildi.",
icon:"success",
button:"Tamam",	
            }).then((value)=>{ window.location.href = "Birimler.php"});
            </script>';
           

        }
        
         else {
            echo '<script>swal("Hata","Hatalı , Lütfen bilgilerinizi kontrol ediniz.","error");</script>'; 
        }
    }
  
}

/* Birim Düzenle*/

/* Birim Sil */
if ($_POST['birimsil']) {
		
		
		$pid = intval($_POST['birimsil']);
		$query = "DELETE FROM Birim WHERE id=:pid";
		$durum = $baglanti->prepare( $query );
		$durum->execute(array(':pid'=>$pid));
		
		if ($durum) {
			echo '<script>swal({
            title:"Başarılı",
            text:"Başarıyla Silindi.",
icon:"success",
button:"Tamam",	
            }).then((value)=>{ window.location.href = "Birimler.php"});
            </script>';
		} else {
			echo '<script>swal("Hata","Hatalı , Lütfen bilgilerinizi kontrol ediniz.","error");</script>'; 
		}
		
	}
/* Birim Sil */


?>