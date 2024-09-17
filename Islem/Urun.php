<?php
require("../Ayarlar/Baglantim.php"); 
require("../Ayarlar/Guvenlik.php"); 
?>
<?php
		
/* Ürün Ekle*/
if (isset($_POST["urunekle"])) { 

        $urunadi = $_POST['urunadi'];// Sayfa yenilendikten sonra post edilen değerleri değişkenlere atıyoruz
    $urunkodu = $_POST['urunkodu'];    
$urunbarkodu = $_POST['urunbarkodu']; 
$kdvsizalisfiyati = $_POST['kdvsizalisfiyati'];
$kdvsizsatisfiyati = $_POST['kdvsizsatisfiyati'];
$alisfiyati = $_POST['alisfiyati'];
$satisfiyati = $_POST['satisfiyati'];
$kdvorani = $_POST['kdvorani'];
$stokgrubu = $_POST['stokgrubu'];
$markasi = $_POST['markasi'];
$modeli = $_POST['modeli'];
$resmi = $_POST['resmi'];
$birimadi = $_POST['birimadi'];
$uyarilimiti = $_POST['uyarilimiti'];
$ekleyen = $_POST['ekleyen'];

    if($urunadi == ""){ 
	echo '<script>swal("Hata","Ürün Adı Alanını Doldurun.","error");</script>';
	}
	else if($urunkodu == ""){ 
	echo '<script>swal("Hata","Ürün Kodu Alanını Doldurun.","error");</script>';
	}
else if($urunbarkodu == ""){ 
	echo '<script>swal("Hata","Ürün Barkodu Alanını Doldurun.","error");</script>';
	}
	else if($kdvsizalisfiyati == ""){ 
	echo '<script>swal("Hata","Kdvsiz Alış Fiyatı Alanını Doldurun.","error");</script>';
	}
	else if($kdvsizsatisfiyati == ""){ 
	echo '<script>swal("Hata","Kdvsiz Satış Fiyatı Alanını Doldurun.","error");</script>';
	}
	else if($alisfiyati == ""){ 
	echo '<script>swal("Hata","Kdvli Alış Fiyatı Alanını Doldurun.","error");</script>';
	}
	else if($satisfiyati == ""){ 
	echo '<script>swal("Hata","Kdvli Satış Fiyatı Alanını Doldurun.","error");</script>';
	}
	else if($kdvorani == ""){ 
	echo '<script>swal("Hata","Kdv Oranı Alanını Doldurun.","error");</script>';
	}
	
	else if($stokgrubu == ""){ 
	echo '<script>swal("Hata","Stok Grubu Alanını Doldurun.","error");</script>';
	}
	else if($markasi == ""){ 
	echo '<script>swal("Hata","Marka Alanını Doldurun.","error");</script>';
	}
	else if($modeli == ""){ 
	echo '<script>swal("Hata","Model Alanını Doldurun.","error");</script>';
	}
	else if($resmi == ""){ 
	echo '<script>swal("Hata","Resim Alanını Doldurun.","error");</script>';
	}
	else if($uyarilimiti == ""){ 
	echo '<script>swal("Hata","Uyarı Limiti Alanını Doldurun.","error");</script>';
	}
	else if($birimadi == ""){ 
	echo '<script>swal("Hata","Birim Alanını Doldurun.","error");</script>';
	}

	else {

        $satir = [                       

     'urunadi' => $urunadi,
            'urunkodu' => $urunkodu, 
  'urunbarkodu' => $urunbarkodu, 
  'kdvsizalisfiyati' => $kdvsizalisfiyati, 
  'kdvsizsatisfiyati' => $kdvsizsatisfiyati, 
  'alisfiyati' => $alisfiyati, 
  'satisfiyati' => $satisfiyati, 
  'kdvorani' => $kdvorani, 
  'stokgrubu' => $stokgrubu, 
  'markasi' => $markasi, 
   'modeli' => $modeli, 
   'resmi' => $resmi, 
  'uyarilimiti' => $uyarilimiti,  
  'birimadi' => $birimadi,  
  'ekleyen' => $ekleyen,  
        ];
          $sql = "INSERT INTO Urunler SET urunadi=:urunadi, urunkodu=:urunkodu, urunbarkodu=:urunbarkodu, alisfiyati=:alisfiyati, satisfiyati=:satisfiyati, kdvorani=:kdvorani, stokgrubu=:stokgrubu, markasi=:markasi, modeli=:modeli, resmi=:resmi, uyarilimiti=:uyarilimiti, kdvsizalisfiyati=:kdvsizalisfiyati, kdvsizsatisfiyati=:kdvsizsatisfiyati, birimadi=:birimadi, ekleyen=:ekleyen;";
        $durum = $baglanti->prepare($sql)->execute($satir);

        if ($durum) {
            echo '<script>swal({
            title:"Başarılı",
            text: "Başarıyla Kaydedildi.",
icon:"success",
button:"Tamam",	
            }).then((value)=>{ window.location.reload()});
            </script>';
           

        }
        
         else {
            echo '<script>swal("Hata","Hatalı , Lütfen bilgilerinizi kontrol ediniz.","error");</script>'; 
        }
    }
  
}

/* Ürün Ekle*/

/* Ürün Düzenle*/
if (isset($_POST["urunduzenle"])) { 
 $id = $_POST['id'];
        $urunadi = $_POST['urunadi'];
    $urunkodu = $_POST['urunkodu'];    
$urunbarkodu = $_POST['urunbarkodu']; 
$kdvsizalisfiyati = $_POST['kdvsizalisfiyati'];
$kdvsizsatisfiyati = $_POST['kdvsizsatisfiyati'];
$alisfiyati = $_POST['alisfiyati'];
$satisfiyati = $_POST['satisfiyati'];
$kdvorani = $_POST['kdvorani'];
$stokgrubu = $_POST['stokgrubu'];
$markasi = $_POST['markasi'];
$modeli = $_POST['modeli'];
$resmi = $_POST['resmi'];
$birimadi = $_POST['birimadi'];
$uyarilimiti = $_POST['uyarilimiti'];
$ekleyen = $_POST['ekleyen'];





    if($urunadi == ""){ 
	echo '<script>swal("Hata","Ürün Adı Alanını Doldurun.","error");</script>';
	}
	else if($urunkodu == ""){ 
	echo '<script>swal("Hata","Ürün Kodu Alanını Doldurun.","error");</script>';
	}

else if($urunbarkodu == ""){ 
	echo '<script>swal("Hata","Ürün Barkodu Alanını Doldurun.","error");</script>';
	}
	else if($kdvsizalisfiyati == ""){ 
	echo '<script>swal("Hata","Kdvsiz Alış Fiyatı Alanını Doldurun.","error");</script>';
	}
	else if($kdvsizsatisfiyati == ""){ 
	echo '<script>swal("Hata","Kdvsiz Satış Fiyatı Alanını Doldurun.","error");</script>';
	}
	else if($alisfiyati == ""){ 
	echo '<script>swal("Hata","Kdvli Alış Fiyatı Alanını Doldurun.","error");</script>';
	}
	else if($satisfiyati == ""){ 
	echo '<script>swal("Hata","Kdvli Satış Fiyatı Alanını Doldurun.","error");</script>';
	}
	else if($kdvorani == ""){ 
	echo '<script>swal("Hata","Kdv Oranı Alanını Doldurun.","error");</script>';
	}
	
	else if($stokgrubu == ""){ 
	echo '<script>swal("Hata","Stok Grubu Alanını Doldurun.","error");</script>';
	}
	else if($markasi == ""){ 
	echo '<script>swal("Hata","Marka Alanını Doldurun.","error");</script>';
	}
	else if($modeli == ""){ 
	echo '<script>swal("Hata","Model Alanını Doldurun.","error");</script>';
	}
else if($resmi == ""){ 
	echo '<script>swal("Hata","Resim Alanını Doldurun.","error");</script>';
	}
	else if($uyarilimiti == ""){ 
	echo '<script>swal("Hata","Uyarı Limiti Alanını Doldurun.","error");</script>';
	}
	else if($birimadi == ""){ 
	echo '<script>swal("Hata","Birim Alanını Doldurun.","error");</script>';
	}

	else {

        $satir = [                       
'id' => $id,
     'urunadi' => $urunadi,
            'urunkodu' => $urunkodu, 
  'urunbarkodu' => $urunbarkodu, 
  'kdvsizalisfiyati' => $kdvsizalisfiyati, 
  'kdvsizsatisfiyati' => $kdvsizsatisfiyati, 
  'alisfiyati' => $alisfiyati, 
  'satisfiyati' => $satisfiyati, 
  'kdvorani' => $kdvorani, 
  'stokgrubu' => $stokgrubu, 
  'markasi' => $markasi, 
   'modeli' => $modeli, 
   'resmi' => $resmi, 
  'uyarilimiti' => $uyarilimiti,  
  'birimadi' => $birimadi, 
  'ekleyen' => $ekleyen,  
        ];
          $sql = "UPDATE Urunler SET urunadi=:urunadi, urunkodu=:urunkodu, urunbarkodu=:urunbarkodu, alisfiyati=:alisfiyati, satisfiyati=:satisfiyati, kdvorani=:kdvorani, stokgrubu=:stokgrubu, markasi=:markasi, modeli=:modeli, resmi=:resmi, uyarilimiti=:uyarilimiti, kdvsizalisfiyati=:kdvsizalisfiyati, kdvsizsatisfiyati=:kdvsizsatisfiyati, birimadi=:birimadi, ekleyen=:ekleyen where id=:id;";
        $durum = $baglanti->prepare($sql)->execute($satir);

        if ($durum) {
            echo '<script>swal({
            title:"Başarılı",
            text: "Başarıyla Kaydedildi.",
icon:"success",
button:"Tamam",	
            }).then((value)=>{ window.location.reload()});
            </script>';
           

        }
        
         else {
            echo '<script>swal("Hata","Hatalı , Lütfen bilgilerinizi kontrol ediniz.","error");</script>'; 
        }
    }
  
}


/* Ürün Düzenle*/

/* Ürün Sil */
if ($_POST['urunsil']) {
		
$pid = intval($_POST['urunsil']);
    $satfat=$baglanti->prepare('SELECT* FROM SatisFaturasi WHERE urunadi=:pid');
     $satfat->execute(array($pid));

    $alfat=$baglanti->prepare('SELECT* FROM AlisFaturasi WHERE urunadi=:pid');
     $alfat->execute(array($pid));



     if($satfat->rowCount() or $alfat->rowCount() ){
            echo '<script>swal("Hata","Üründe Alış-Satış Faturası Var. Önce İşlemi Silmeniz Gerekli.","error").then((value)=>{ window.location.href = "Urunler.php"});

            </script>';
     }else{
		$query = "DELETE FROM Urunler WHERE id=:pid";
		$durum = $baglanti->prepare( $query );
		$durum->execute(array(':pid'=>$pid));
		
		if ($durum) {
			echo '<script>swal({
            title:"Başarılı",
            text:"Başarıyla Silindi.",
icon:"success",
button:"Tamam",	
            }).then((value)=>{ window.location.reload()});
            </script>';
		} else {
			echo '<script>swal("Hata","Hatalı , Lütfen bilgilerinizi kontrol ediniz.","error");</script>'; 
		}
		
	}
	}


?>