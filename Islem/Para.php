<?php
require("../Ayarlar/Baglantim.php"); 
require("../Ayarlar/Guvenlik.php"); 
?>
<?php
		

/* Para Birimi Ekle*/
if (isset($_POST["paraekle"])) { 

    $parabirimadi = $_POST['parabirimadi'];
  $kur = $_POST['kur'];
  $kisaltma = $_POST['kisaltma'];
    if($parabirimadi == ""){ 
	echo '<script>swal("Hata","Para Birimi Alanını Doldurun.","error");</script>';
	}

	else {
        $satir = [                       
'parabirimadi' => $parabirimadi,
'kur' => $kur,
'kisaltma' => $kisaltma,
        ];
          $sql = "INSERT INTO ParaBirimleri SET parabirimadi=:parabirimadi, kur=:kur, kisaltma=:kisaltma;";
        $durum = $baglanti->prepare($sql)->execute($satir);

        if ($durum) {
            echo '<script>swal({
            title:"Başarılı",
            text: "Başarıyla Kaydedildi.",
icon:"success",
button:"Tamam",	
            }).then((value)=>{ window.location.href = "ParaBirimleri.php"});
            </script>';
           

        }
        
         else {
            echo '<script>swal("Hata","Hatalı , Lütfen bilgilerinizi kontrol ediniz.","error");</script>'; 
        }
    }
  
}

/* Para Birimi Ekle*/

/* Para Birimi Düzenle*/
if (isset($_POST["paraduzenle"])) { 

    $parabirimadi = $_POST['parabirimadi'];
  $kur = $_POST['kur'];
  $kisaltma = $_POST['kisaltma'];
        $id = $_POST['id'];
    if($parabirimadi == ""){ 
	echo '<script>swal("Hata","Para Birimi Alanını Doldurun.","error");</script>';
	}

	else {
        $satir = [                       
'parabirimadi' => $parabirimadi,
'kur' => $kur,
'kisaltma' => $kisaltma,
'id' => $id,

        ];
          $sql = "UPDATE ParaBirimleri SET parabirimadi=:parabirimadi, kur=:kur, kisaltma=:kisaltma WHERE id=:id;";
        $durum = $baglanti->prepare($sql)->execute($satir);

        if ($durum) {
            echo '<script>swal({
            title:"Başarılı",
            text: "Başarıyla Kaydedildi.",
icon:"success",
button:"Tamam",	
            }).then((value)=>{ window.location.href = "ParaBirimleri.php"});
            </script>';
           

        }
        
         else {
            echo '<script>swal("Hata","Hatalı , Lütfen bilgilerinizi kontrol ediniz.","error");</script>'; 
        }
    }
  
}

/* Para Birimi Düzenle*/

/* Para Birimi Sil */
if ($_POST['parasil']) {
		
		
			$pid = intval($_POST['parasil']);
    $para=$baglanti->prepare('SELECT* FROM Cariler WHERE parabirimi=:pid');
     $para->execute(array($pid));

     if($para->rowCount()){
            echo '<script>swal("Hata","Para Birimi Cariye Bağlı. Silmek İçin Cari(leri) Silmelisiniz","error").then((value)=>{ window.location.href = "ParaBirimleri.php"});

            </script>';
     }else{
		$query = "DELETE FROM ParaBirimleri WHERE id=:pid";
		$durum = $baglanti->prepare( $query );
		$durum->execute(array(':pid'=>$pid));
		
		if ($durum) {
			echo '<script>swal({
            title:"Başarılı",
            text:"Başarıyla Silindi.",
icon:"success",
button:"Tamam",	
            }).then((value)=>{ window.location.href = "ParaBirimleri.php"});
            </script>';
		} else {
			echo '<script>swal("Hata","Hatalı , Lütfen bilgilerinizi kontrol ediniz.","error");</script>'; 
		}
		
	}
}

/* Cari Grup  Sil */


?>