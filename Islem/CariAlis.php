<?php
require("../Ayarlar/Baglantim.php"); 
require("../Ayarlar/Guvenlik.php"); 
?>
<?php
		/* Alış Faturası Ekle*/
				if (isset($_POST["alisekle"])) { 

$cariadi = $_POST['cariadi'];
$faturatarihi = $_POST['faturatarihi'];
$tarih = $kisatarih = substr($_POST['faturatarihi'],0,10);
$faturaseri = $_POST['faturaseri'];
$faturanumarasi = $_POST['faturanumarasi'];
$odemetipi = $_POST['odemetipi'];
$depo = $_POST['depo'];
$odeme = $_POST['odeme'];
$aratoplam = $_POST['aratoplam'];
$kdvtoplam = $_POST['kdvtoplam'];
$geneltoplam = $_POST['geneltoplam'];
$ekleyen = $_POST['ekleyen'];
$parabirimi = $_POST['parabirimi'];
   if($cariadi == ""){ 
	echo '<script>swal("Hata","Cari Adı Alanını Doldurun.","error");</script>';
	}
  elseif($faturatarihi == ""){ 
	echo '<script>swal("Hata","Fatura Tarihi Alanını Doldurun.","error");</script>';
	}
  elseif($faturaseri == ""){ 
	echo '<script>swal("Hata","Fatura Seri Alanını Doldurun.","error");</script>';
	}
  elseif($faturanumarasi == ""){ 
	echo '<script>swal("Hata","Fatura Numarası Alanını Doldurun.","error");</script>';
	}
  elseif($odemetipi == ""){ 
	echo '<script>swal("Hata","Açıklama Alanını Doldurun.","error");</script>';
	}
	else {
          $satir = [                       
            'cariadi' => $cariadi,
             'faturatarihi' => $faturatarihi,   
'tarih' => $tarih,    
       'faturaseri' => $faturaseri,
       'faturanumarasi' => $faturanumarasi,
   'odemetipi' => $odemetipi,    
'depo' => $depo,
'odeme' => $odeme,
'aratoplam' => $aratoplam,
'kdvtoplam' => $kdvtoplam,
'geneltoplam' => $geneltoplam,
'ekleyen' => $ekleyen,
'parabirimi' => $parabirimi,
        ];
          $sql = "INSERT INTO AlFatBilgi SET cariadi=:cariadi, faturatarihi=:faturatarihi, tarih=:tarih, faturaseri=:faturaseri, faturanumarasi=:faturanumarasi, odemetipi=:odemetipi, depo=:depo, odeme=:odeme, aratoplam=:aratoplam, kdvtoplam=:kdvtoplam, geneltoplam=:geneltoplam, ekleyen=:ekleyen, parabirimi=:parabirimi;";
        $durum = $baglanti->prepare($sql)->execute($satir);
  $eklenen_ogrenci_adi = $baglanti->lastInsertId(); ## SON EKLENEN ID ALIYORUZ
}
    //Dersler için gerekli alanlar doldurulduysa kontrol ediyoruz
    if ($_POST['urunadi']) {

        //en son eklenen id alıyoruz
      

        //alanlar metin kutuları kadar döngü oluşturuyoruz.
        foreach ($_POST['urunadi'] as $key => $value) {

             $urunadi = $_POST['urunadi'][$key];
$adet = $_POST['adet'][$key];
$fiyat = $_POST['fiyat'][$key];
$kdvsiztoplam = $_POST['kdvsiztoplam'][$key];
$kdvoran = $_POST['kdvoran'][$key];
$kdvtutar = $_POST['kdvtutar'][$key];
$kdvlitoplam = $_POST['kdvlitoplam'][$key];
$depo = $_POST['depo'];

          $satirim = [                       
            'urunadi' => $urunadi,
 'adet' => $adet,
  'fiyat' => $fiyat,
'kdvsiztoplam' => $kdvsiztoplam,    
  'kdvoran' => $kdvoran,
'kdvtutar' => $kdvtutar,
'kdvlitoplam' => $kdvlitoplam,
'depo' => $depo,
        ];
          $sqll = "INSERT INTO AlisFaturasi SET urunadi=:urunadi, adet=:adet, fiyat=:fiyat, kdvsiztoplam=:kdvsiztoplam, kdvoran=:kdvoran, kdvtutar=:kdvtutar, kdvlitoplam=:kdvlitoplam, depo=:depo;";
        $durum = $baglanti->prepare($sqll)->execute($satirim);

      $eklenen_ders_id = $baglanti->lastInsertId(); ## SON EKLENEN ID ALIYORUZ   


            $satirr = [                       
            'bilgiid' => $eklenen_ogrenci_adi,
 'faturaid' => $eklenen_ders_id,

        ];
          $sqlll = "INSERT INTO AlFatBag SET bilgiid=:bilgiid, faturaid=:faturaid;";
        $durum = $baglanti->prepare($sqlll)->execute($satirr);
        if ($durum) {
            echo '<script>swal({
            title:"Başarılı",
            text: "Başarıyla Kaydedildi.",
icon:"success",
button:"Tamam",	
            }).then((value)=>{ window.location.href = "CariHesapDetay.php?id='.$cariadi.'"});
            </script>';
           

        }
        
         else {
            echo '<script>swal("Hata","Hatalı , Lütfen bilgilerinizi kontrol ediniz.","error");</script>'; 
        }
        
        
        }
    }

  
}
/* Cari Ekle */
/* Alış Faturası Düzenle*/
if (isset($_POST["alisduzenle"])) { 
$id = $_POST["id"];					
	$durum1 = $baglanti->query("DELETE FROM AlFatBag WHERE  bilgiid=$id");
    $durum2 = $baglanti->query("DELETE d FROM AlisFaturasi d WHERE NOT EXISTS (SELECT * FROM AlFatBag WHERE faturaid = d.id)");

$id = $_POST["id"];
$cariadi = $_POST['cariadi'];
$faturatarihi = $_POST['faturatarihi'];
$tarih = $kisatarih = substr($_POST['faturatarihi'],0,10);
$faturaseri = $_POST['faturaseri'];
$faturanumarasi = $_POST['faturanumarasi'];
$odemetipi = $_POST['odemetipi'];
$depo = $_POST['depo'];
$odeme = $_POST['odeme'];
$aratoplam = $_POST['aratoplam'];
$kdvtoplam = $_POST['kdvtoplam'];
$geneltoplam = $_POST['geneltoplam'];
$ekleyen = $_POST['ekleyen'];
$parabirimi = $_POST['parabirimi'];
   if($cariadi == ""){ 
	echo '<script>swal("Hata","Cari Adı Alanını Doldurun.","error");</script>';
	}
	else {
          $satir = [                 
      'id' => $id,
            'cariadi' => $cariadi,
             'faturatarihi' => $faturatarihi,
'tarih' => $tarih,       
       'faturaseri' => $faturaseri,
       'faturanumarasi' => $faturanumarasi,
   'odemetipi' => $odemetipi,    
'depo' => $depo,
'odeme' => $odeme,
'aratoplam' => $aratoplam,
'kdvtoplam' => $kdvtoplam,
'geneltoplam' => $geneltoplam,
'ekleyen' => $ekleyen,
'parabirimi' => $parabirimi,
        ];
          $sql = "UPDATE AlFatBilgi SET cariadi=:cariadi, faturatarihi=:faturatarihi, tarih=:tarih, faturaseri=:faturaseri, faturanumarasi=:faturanumarasi, odemetipi=:odemetipi, depo=:depo, odeme=:odeme, aratoplam=:aratoplam, kdvtoplam=:kdvtoplam, geneltoplam=:geneltoplam, ekleyen=:ekleyen, parabirimi=:parabirimi WHERE id=:id;";
        $durum = $baglanti->prepare($sql)->execute($satir);
  $eklenen_ogrenci_adi = $id = $_POST["id"];
}

    if ($_POST['urunadi']) {
        
        foreach ($_POST['urunadi'] as $key => $value) {

             $urunadi = $_POST['urunadi'][$key];
$adet = $_POST['adet'][$key];
$fiyat = $_POST['fiyat'][$key];
$kdvsiztoplam = $_POST['kdvsiztoplam'][$key];
$kdvoran = $_POST['kdvoran'][$key];
$kdvtutar = $_POST['kdvtutar'][$key];
$kdvlitoplam = $_POST['kdvlitoplam'][$key];
  $depo = $_POST['depo'];
  
          $satirim = [                       
            'urunadi' => $urunadi,
 'adet' => $adet,
  'fiyat' => $fiyat,
'kdvsiztoplam' => $kdvsiztoplam,    
  'kdvoran' => $kdvoran,
'kdvtutar' => $kdvtutar,
'kdvlitoplam' => $kdvlitoplam,
'depo' => $depo,
        ];
          $sqll = "INSERT INTO AlisFaturasi SET urunadi=:urunadi, adet=:adet, fiyat=:fiyat, kdvsiztoplam=:kdvsiztoplam, kdvoran=:kdvoran, kdvtutar=:kdvtutar, kdvlitoplam=:kdvlitoplam, depo=:depo;";
        $durum = $baglanti->prepare($sqll)->execute($satirim);

      $eklenen_ders_id = $baglanti->lastInsertId(); ## SON EKLENEN ID ALIYORUZ   

 

            $satirr = [                       
            'bilgiid' => $eklenen_ogrenci_adi,
 'faturaid' => $eklenen_ders_id,

        ];
          $sqlll = "INSERT INTO AlFatBag SET bilgiid=:bilgiid, faturaid=:faturaid;";
        $durum = $baglanti->prepare($sqlll)->execute($satirr);
        if ($durum) {
            echo '<script>swal({
            title:"Başarılı",
            text: "Başarıyla Kaydedildi.",
icon:"success",
button:"Tamam",	
            }).then((value)=>{ window.location.href = "CariHesapDetay.php?id='.$cariadi.'"});
            </script>';
           

        }
        
         else {
            echo '<script>swal("Hata","Hatalı , Lütfen bilgilerinizi kontrol ediniz.","error");</script>'; 
        }
        
        
        }
    }

  
}
        
/* Cari Düzenle*/
/* Cari Sil */
if ($_POST['alissil']) {
		
		    $fatid = (int)$_POST["alissil"];
		
		
    $durum1 = $baglanti->query("DELETE FROM AlFatBag WHERE  bilgiid=$fatid");
    $durum2 = $baglanti->query("DELETE d FROM AlisFaturasi d WHERE NOT EXISTS (SELECT * FROM AlFatBag WHERE faturaid = d.id)");
    $durum3 = $baglanti->query("DELETE FROM AlFatBilgi WHERE  id=$fatid");
if ($durum3) {
			echo '<script>swal({
            title:"Başarılı",
            text:"Başarıyla Silindi.",
icon:"success",
button:"Tamam",	
            }).then((value)=>{ window.location.href = "CariHesapDetay.php?id='.$cariadi.'"});
            </script>';
		} else {
			echo '<script>swal("Hata","Hatalı , Lütfen bilgilerinizi kontrol ediniz.","error");</script>'; 
		}
    
	}
/* Cari Sil */


?>