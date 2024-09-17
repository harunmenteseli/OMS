<?php
require("Ayarlar/Baglantim.php"); 
require("Ayarlar/Guvenlik.php"); 
?>
<!DOCTYPE html>
<html lang="tr">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	
	<title>Günlük Çek Senet İşlem - <?= $ayar["siteadi"] ?> - <?= $ayar["siteslogan"] ?></title>
	<?php
require("Tablolar/tasarim.php"); //logo - üst navigasyon menü
?>
</head>
<body class="animated <?= $tema['animasyon']?>" data-background-color="<?= $tema['arkaplan']?>">
	<div class="wrapper">
		<div class="main-header">
			<?php
include("Tablolar/ustmenu.php"); //logo - üst navigasyon menü
?>
		</div>
<?php
require("Tablolar/sol.php"); //sol menü
?>
		<div class="main-panel">
			<div class="content">
				<div class="page-inner">
				
					<div class="card">


<div class="card-header">
<div class="row">
<div class="col-sm-9 col-md-9">

									<h4 class="card-title">GÜNLÜK ÇEK SENET İŞLEMLERİ</h4>
								</div>

<div class="col-sm-3 col-md-3">
<div class="row">
<div class="col-sm-9 col-md-9">
<h4 class="card-title table-head-bg-primary">

</h4>	
</div>
<div class="col-sm-3 col-md-3">
<div class="form-button-action">
												
															

										
														</div>

</div>
</div>

								
								</div>
</div>


</div>

								<div id="yazdir" class="card-body ">
<?php if ($kbilgi["yetki"]==3 or $kbilgi["yetki"]==4) {?>	
<div class=" table-responsive">
<div class="form-button-action">
    <button type="button" class="btn btn-primary" onclick="tiklama('kopyala');">
           <span class="btn-label">
            <i class="far fa-clipboard"></i>
          </span> 
          <span class="text">Kopyala</span>
        </button>
     <button type="button" class="btn btn-warning" onclick="tiklama('yazdir');">
           <span class="btn-label">
            <i class="fas fa-print"></i>
          </span> 
          <span class="text">Yazdır</span>
        </button>
 
   <button type="button" class="btn btn-success" onclick="tiklama('excel');">
           <span class="btn-label">
            <i class="far fa-file-excel"></i>
          </span> 
          <span class="text">Excel</span>
        </button>
   <button type="button" class="btn btn-danger" onclick="tiklama('pdf');">
           <span class="btn-label">
            <i class="far fa-file-pdf"></i>
          </span> 
          <span class="text">PDF</span>
        </button>
   <button type="button" class="btn btn-info" onclick="tiklama('csv');">
           <span class="btn-label">
            <i class="far fa-file-csv"></i>
          </span> 
          <span class="text">CSV</span>
        </button>

</div>
<br>
      <table class="musteritablosu table table-head-bg-<?= $tema['tablorenk']?> table-hover">
                                                        <thead>
                                                            <tr>
   <th>İşlem Tarihi</th>                                      
 <th>Cari Adı</th>
 <th>Vade Tarihi</th>  
  <th>Çek Senet Türü</th>   
    <th>Giriş</th>         
   <th>Çıkış</th>      
   <th>Ekleyen </th>
<th>İşlem</th> 
  </tr>
</thead>
        <tbody id="Urunlistesi">  

    <?php                                                                                                               $sorgu = $baglanti->query("
                                                                                SELECT * FROM CekSenet where DAY(islemtarihi) = DAY(CURDATE())")->fetchAll();
                                                            foreach ($sorgu as $sonuc) {

     
                                                        ?> 
      
<tr id="secilen" class="Satirekle">
   <td class="islemtarihi"><?= $sonuc["islemtarihi"] ?></td>	      
                    <td class="unvan">
<?php 
                                                      $cari = $baglanti->query("SELECT * FROM Cariler where id=".$sonuc["unvan"])->fetchAll(PDO::FETCH_ASSOC);
                                                                
                                                if(count($cari)>0){


                                                ?>
                                                
                                                
                                           
                                                    <?php
    
                                                        foreach($cari as $carisi){
                                                            ?>
                                                    
                                                     <?php echo $carisi['unvani']; ?>
                                                    <?php


                                                        }
                                                            
                                                    
                                                    ?>
       <?php } ?>
</td>
         <td class="evraknumarasi"><?= $sonuc["vadetarihi"] ?></td> 
       
  
        <td class="aciklama">
<?php
$islem = $sonuc["islem"] ;
if ($islem == "alinan") {
  echo "Alınan";
}elseif ($islem == "verilen") {
  echo "Verilen";
}
?> <?php
$ceksenet = $sonuc["ceksenet"] ;
if ($ceksenet == "cek") {
  echo "Çek";
}elseif ($ceksenet == "senet") {
  echo "Senet";
}
?>
</td> 
  <td><span class="text-success">
<?php
$islem = $sonuc["islem"] ;
if ($islem == "alinan") {?>
<?= number_format ($sonuc["tutar"],2,',','.'); ?> <?php $parabirimi = $baglanti->query("SELECT * FROM ParaBirimleri where id=".$carisi["parabirimi"])->fetchAll(PDO::FETCH_ASSOC);
if(count($parabirimi)>0){?>
<?php
foreach($parabirimi as $parabirimim){
?>
<?php echo $parabirimim['kisaltma']; ?>
<?php } ?>
 <?php } ?>
<br>	
<?php	
if ($parabirimim['kur'] == "TL") {
$kurtutarsonuc=$sonuc["tutar"]*1;
} 
 else{
$kur = $parabirimim['kur']; 
$kurtutarsonuc=$sonuc["tutar"]*$DovizKurlari->$kur;
}
?>
<?= number_format ($kurtutarsonuc,2,',','.'); ?> TL
 <?php } ?></span>
  </td>
  <td><span class="text-danger">
<?php
$islem = $sonuc["islem"] ;
if ($islem == "verilen") {?>
<?= number_format ($sonuc["tutar"],4,',','.'); ?> <?php $parabirimi = $baglanti->query("SELECT * FROM ParaBirimleri where id=".$carisi["parabirimi"])->fetchAll(PDO::FETCH_ASSOC);
if(count($parabirimi)>0){?>
<?php
foreach($parabirimi as $parabirimim){
?>
<?php echo $parabirimim['kisaltma']; ?>
<?php } ?>
 <?php } ?>
<br>	
<?php	
if ($parabirimim['kur'] == "TL") {
$kurtutarsonuc=$sonuc["tutar"]*1;
} 
 else{
$kur = $parabirimim['kur']; 
$kurtutarsonuc=$sonuc["tutar"]*$DovizKurlari->$kur;
}
?>
<?= number_format ($kurtutarsonuc,2,',','.'); ?> TL
 <?php } ?></span>
  </td>
  <td class="barkod">
    <?php 
                                                      $kullanicilar= $baglanti->query("SELECT * FROM Kullanicilar where id=".$sonuc["ekleyen"])->fetchAll(PDO::FETCH_ASSOC);
                                                                
                                                if(count($kullanicilar)>0){


                                                ?>
                                                
                                                
                                           
                                                    <?php
    
                                                        foreach($kullanicilar as $kullanici){
                                                            ?>
                                                    
                                                     <?php echo $kullanici['ad']; ?> <?php echo $kullanici['soyad']; ?>
                                                    <?php


                                                        }
                                                            
                                                    
                                                    ?>
       <?php } ?>
</td>
<td>
														<div class="form-button-action">
		<?php
$islem = $sonuc["islem"] ;
$ceksenet = $sonuc["ceksenet"] ;

if ($islem == "alinan" && $ceksenet == "cek") {
  $adres = "AlinanCekDuzenle";
}else if ($islem == "alinan" && $ceksenet == "senet") {
  $adres = "AlinanSenetDuzenle";
}else if ($islem == "verilen" && $ceksenet == "cek") {
  $adres = "VerilenCekDuzenle";
}
else if ($islem == "verilen" && $ceksenet == "senet") {
  $adres = "VerilenSenetDuzenle";
}
?>
		<?php 
 if ($kbilgi["kasagirisduzenle"]==1 or $kbilgi["kasacikisduzenle"]==1) {?>																
															
										<button  type="button" data-toggle="tooltip" title="Düzenle" class="btn btn-icon btn-round btn-warning" data-original-title="Düzenle" onclick="window.location.href='<?= $adres ?>.php?id=<?= $sonuc["id"] ?>'">
																<i class="fa fa-edit"></i>
															</button>
<?php }?>

		<?php 
 if ($kbilgi["kasagirissil"]==1 or $kbilgi["kasacikissil"]==1) {?>
	<button id="sil" type="button" data-toggle="tooltip" title="Sil" class="btn btn-icon btn-round btn-danger" data-original-title="Sil" data-id="<?= $sonuc["id"] ?>" href="javascript:void(0)">
																<i class="fa fa-times"></i>
															</button>
<?php }?>
														</div>
													</td>
 
  </tr>
									
						<?php
						}  // While Bitiş

						?>
						           
                                                   

                                                                                
                                                        </tbody>
                                                    </table>
							</div>		
<?php }?>
	<?php 
 if ($kbilgi["yetki"]==1 or $kbilgi["yetki"]==2) {?>
 	<h1 class="text-danger">BU SAYFAYI GÖRÜNTÜLEMEYE YETKİNİZ YOK </h1>
 <?php }?>	
									
					</div>
			</div>
					
					
				</div>
			</div>
			<?php
require("Tablolar/alt.php"); //alt
?>
		</div>
		
	</div>
	<div type="hidden" id="sonuc">
	</div>
	<?php
require("Tablolar/js.php"); //logo - üst navigasyon menü
?>
<script>
        $(document).ready(function(){
            $(document).on('click', '#sil', function(e){
           var productId = $(this).data('id'); 	
            
				swal({
					
					title: 'Emin misiniz?',
					text: "Silmek istediğinize emin misiniz?",
					icon: "warning",
					buttons:{
						cancel: {
							visible: true,
							text : 'Hayır',
							className: 'btn btn-danger'
						},        			
						confirm: {
							text : 'Evet',
							className : 'btn btn-success'
						}
					}
				}).then((willDelete) => {
					if (willDelete) {
						$.ajax({ // Ajax metodu
                    type: "POST", // Gönderim Methodu POST (GET'de seçilebilir)
                    url: "Islem/Kasa.php", // POST işleminin olacağı sayfa
                    data: 'kasagirissil='+productId, // Formdaki tüm verileri al
                    success: function(oldu){ // Eğer işlem başarılı olursa sonuç
                        $('#sonuc').html(oldu); // Id'si result olan divde sonucu yaz
                    }
                });
					} else {
						swal("Silmekten vazgeçtiniz", {
							buttons : {
								confirm : {
									text : 'Evet',
									className: 'btn btn-success'
								}
							}
						});
					}
				});
			})
        });
    </script>
	
</body>
</html>
