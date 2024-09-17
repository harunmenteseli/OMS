<?php
require("Ayarlar/Baglantim.php"); 
require("Ayarlar/Guvenlik.php"); 
?>
<!DOCTYPE html>
<html lang="tr">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	
	<title>Cari İşlemler - <?= $ayar["siteadi"] ?> - <?= $ayar["siteslogan"] ?></title>
	<?php
require("Tablolar/tasarim.php"); //logo - üst navigasyon menü
?>
</head>
<body class="animated <?= $tema['animasyon']?>" data-background-color="<?= $tema['arkaplan']?>">
	<div class="wrapper">
		<div class="main-header">
			<?php
require("Tablolar/ustmenu.php"); //logo - üst navigasyon menü
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

									<h4 class="card-title">GÜNLÜK CARİ İŞLEMLER</h4>
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
      <table class="musteritablosu table table-head-bg-<?= $tema['tablorenk']?> table-hover mt-3">
                                                        <thead>
                                                            <tr>
 <th>Cari İşlem Kodu</th>                                          
 <th>İşlem Tarihi</th>
 <th>İşlem Tipi</th>
  <th>Cari Adı</th>
<th>Açıklama</th>
<th>İşlem Tutarı</th>
<th>İşlem</th> 
  </tr>
</thead>
        <tbody id="Urunlistesi">       
    
     <?php                                                                                                               $sorgu = $baglanti->query("
                                                                                SELECT * FROM CariIslem where DAY(tarih) = DAY(CURDATE())")->fetchAll();
                                                            foreach ($sorgu as $sonuc) {

     
                                                        ?> 
                                                        	
                                                
<tr id="secilen" class="Satirekle">
	      <td class="urunkodu"><?= $sonuc['id']?></td>
                    <td class="urunadi"><?= $sonuc['islemtarihi']?></td>
                    <td class="urunadi">
<?php

if ($sonuc['islem'] == "borc") {
  echo "Cari Borçlandırma";
}
elseif ($sonuc['islem'] == "alacak") {
echo "Cari Alacaklandırma";
}

?> 
</td>
     <td class="barkod">
    <?php 
                                                      $cariler = $baglanti->query("SELECT * FROM Cariler where id=".$sonuc["unvan"])->fetchAll(PDO::FETCH_ASSOC);
                                                                
                                                if(count($cariler)>0){


                                                ?>
                                                
                                                
                                           
                                                    <?php
    
                                                        foreach($cariler as $cari){
                                                            ?>
                                                    
                                                     <?php echo $cari['unvani']; ?>
                                                    <?php


                                                        }
                                                            
                                                    
                                                    ?>
       <?php } ?>
</td>
  <td class="kdvorani"><?= $sonuc['aciklama']?> </td>         
 <td class="model">
   <?php
if ($sonuc['islem'] == "borc") {
    $renk = "danger";
} 
elseif ($sonuc['islem'] == "alacak") {
    $renk = "success";
}

?> 

	<span class="text-<?= $renk ?>">
<?= number_format($sonuc['tutar'], 2, ',', '.');?> <?php $parabirimi = $baglanti->query("SELECT * FROM ParaBirimleri where id=".$cari["parabirimi"])->fetchAll(PDO::FETCH_ASSOC);
if(count($parabirimi)>0){?>
<?php
foreach($parabirimi as $parabirimim){
?>
<?php echo $parabirimim['kisaltma']; ?>
<?php } ?>
 <?php } ?>
<br>	
<?php	
$tutar=$sonuc['tutar'];
if ($parabirimim['kur'] == "TL") {
$kurgenelsonuc=$tutar*1;
} 
 else{
$kur = $parabirimim['kur']; 
$kurgenelsonuc=$tutar*$DovizKurlari->$kur;
}
?>
<?= number_format($kurgenelsonuc, 2, ',', '.'); ?> TL
  	</span>
</td>       
<td>
														<div class="form-button-action">
															<?php
$islem = $sonuc["islem"] ;
if ($islem == "borc") {
  $adres = "CariBorclandirDuzenle";
}else if ($islem == "alacak"){
  $adres = "CariAlacaklandirDuzenle";
}
?>
															
															
										<button  type="button" data-toggle="tooltip" title="Düzenle" class="btn btn-icon btn-round btn-warning" data-original-title="Düzenle" onclick="window.location.href='<?= $adres ?>.php?id=<?= $sonuc["id"] ?>'">
																<i class="fa fa-edit"></i>
															</button>

	<button id="sil" type="button" data-toggle="tooltip" title="Sil" class="btn btn-icon btn-round btn-danger" data-original-title="Sil" data-id="<?= $sonuc["id"] ?>" href="javascript:void(0)">
																<i class="fa fa-times"></i>
															</button>
															
				
														</div>
													</td>
 
      </tr>
									
						                  
<?php } ?>
                                                                                
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
                    url: "Islem/CariIslem.php", // POST işleminin olacağı sayfa
                    data: 'cariislemsil='+productId, // Formdaki tüm verileri al
                    success: function(oldu){ // Eğer işlem başarılı olursa sonuç
                        $('#sonuc').html(oldu); // Id'si result olan divde sonucu yaz
                    }
                });
					} else {
						swal("Silmekten vazgeçtiniz", {
							buttons : {
								confirm : {
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
