<?php
require("Ayarlar/Baglantim.php"); 
require("Ayarlar/Guvenlik.php"); 
?>
<!DOCTYPE html>
<html lang="tr">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	
	<title>Verilen Çekler - <?= $ayar["siteadi"] ?> - <?= $ayar["siteslogan"] ?></title>
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

									<h4 class="card-title">VERİLEN ÇEK LİSTESİ</h4>
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
	<?php 
 if ($kbilgi["verilencekekle"]==1) {?>
<button id="Kaydet" name="kaydet" type="submit" class="btn btn-success btn-raised btn-block" onclick="window.location.href='VerilenCekEkle.php'">
Çek Ekle</button>
<?php }?>
	<br>
	
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
 <th>#</th>                                          
 <th>Cari Adı</th>
<th>Evrak Tipi</th>
<th>Evrak Türü</th>
  <th>Durum</th>
<th>Tarih</th>
<th>Vade Tarihi</th>                 
<th>Tutar</th>      
<th>Ekleyen </th>   
<th>İşlem</th> 
  </tr>
</thead>
        <tbody id="Urunlistesi">      
                      <?php                                                                                                               $sorgu = $baglanti->query("
                                                                                SELECT * FROM CekSenet where islem='verilen' and ceksenet='cek'")->fetchAll();
                                                            foreach ($sorgu as $sonuc) {

     
                                                        ?> 
                                          	
      
<tr id="secilen" class="Satirekle">
	      <td class="sira"><?= $sonuc['id']?></td>
                    <td class="cariadi">
       
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
<td class="durum"><?= $sonuc['evrakturu']?></td>
<td class="durum"><?= $sonuc['cekturu']?></td>
     <td class="durum"><?= $sonuc['durum']?></td>
  <td class="tarih"><?= $sonuc['islemtarihi']?></td>   
                    <td class="vade"><?= $sonuc['vadetarihi']?></td>
<td class="tutar text-danger"><?= number_format($sonuc['tutar'], 4, ',', '.');?> <?php $parabirimi = $baglanti->query("SELECT * FROM ParaBirimleri where id=".$carisi["parabirimi"])->fetchAll(PDO::FETCH_ASSOC);
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
<?= number_format($kurgenelsonuc, 4, ',', '.'); ?> TL</td>
      <td> <?php 
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
															<button  type="button" data-toggle="modal" title="Düzenle" data-target="#goster" data-id="<?= $sonuc['id']?>" id="fatura" class="btn btn-icon btn-round btn-primary" data-original-title="Göster">
																<i class="fa fa-eye"></i>
															</button>
			<?php 
 if ($kbilgi["verilencekduzenle"]==1) {?>															
										<button  type="button" data-toggle="tooltip" title="Düzenle" class="btn btn-icon btn-round btn-warning" data-original-title="Düzenle" onclick="window.location.href='VerilenCekDuzenle.php?id=<?= $sonuc["id"] ?>'">
																<i class="fa fa-edit"></i>
															</button>
<?php }?>
				<?php 
 if ($kbilgi["verilenceksil"]==1) {?>
															<button id="sil" type="button" data-toggle="tooltip" title="Sil" class="btn btn-icon btn-round btn-danger" data-original-title="Sil" data-id="<?= $sonuc["id"] ?>" href="javascript:void(0)">
																<i class="fa fa-times"></i>
															</button>
<?php }?>
														</div>
													</td>
 
      <?php } ?>

                                                                                
                                                        </tbody>
                                                    </table>
							</div>		
									
									
					</div>
			</div>
					<div class="modal fade bd-example-modal-lg" id="goster" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
                      <div class="modal-content bg-<?= $tema['arkaplan']?>">
                        <div class="modal-header bg-<?= $tema['tablorenk']?>">
                          <h4 class="modal-title" id="myModalLabel8">ÇEK DETAYI</h4>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">X</span>
                          </button>
                        </div>
                        <div class="modal-body table-responsive">

                       	   <div id="modal-loader" style="display: none; text-align: center;">
                       	   	<img src="Resimler/hesapp.gif">
                       	   </div>                            
                           <!-- content will be load here -->                          
                           <div id="dynamic-content"></div>    

                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-outline-<?= $tema['tablorenk']?>" data-dismiss="modal">
							Kapat</button>
                       
                        </div>
                      </div>
                    </div>
                  </div>
					
				</div>
			</div>
			<?php
require("Tablolar/alt.php"); //alt
?>
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
                    url: "Islem/CekSenet.php", // POST işleminin olacağı sayfa
                    data: 'verilenceksil='+productId, // Formdaki tüm verileri al
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
	<script>
$(document).ready(function(){
	
	$(document).on('click', '#fatura', function(e){
		
		e.preventDefault();
		
		var uid = $(this).data('id');   // it will get id of clicked row
		
		$('#dynamic-content').html(''); // leave it blank before ajax call
		$('#modal-loader').show();      // load ajax loader
		
		$.ajax({
			url: 'Islem/CekSenetGoster.php',
			type: 'POST',
			data: 'id='+uid,
			dataType: 'html'
		})
		.done(function(data){
			console.log(data);	
			$('#dynamic-content').html('');    
			$('#dynamic-content').html(data); // load response 
			$('#modal-loader').hide();		  // hide ajax loader	
		})
		.fail(function(){
					$('#dynamic-content').html('<div class="card card-stats card-round"><div class="card-body "><div class="row align-items-center"><div class="col-icon"><div class="icon-big text-center icon-danger bubble-shadow-small"><i class="fas fa-times"></i></div></div><div class="col col-stats ml-3 ml-sm-0"><div class="numbers"><p class="card-category text-danger">Hata</p><h5 class="card-title text-warning">Birşeyler Yanlış Gitti. Daha Sonra Tekrar Deneyiniz.</h5></div></div></div></div></div>');
			$('#modal-loader').hide();
		});
		
	});
	
});

</script>	

</body>
</html>
