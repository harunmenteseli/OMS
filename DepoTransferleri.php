<?php
require("Ayarlar/Baglantim.php"); 
require("Ayarlar/Guvenlik.php"); 
?>
<!DOCTYPE html>
<html lang="tr">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	
	<title>Depo Transferleri - <?= $ayar["siteadi"] ?> - <?= $ayar["siteslogan"] ?></title>
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
									<h4 class="card-title table-head-bg-primary">Depo Transferleri</h4>
								</div>
								<div class="card-body ">
									<?php 
 if ($kbilgi["alinancekekle"]==1) {?>	
<button id="Kaydet" name="kaydet" type="submit" class="btn btn-success btn-raised btn-block" onclick="window.location.href='DepoTransferEkle.php'">
Depo Transfer Ekle</button>
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
 <th>İşlem Tarihi</th>
<th>Ürün Adı</th>
<th>Marka</th>
<th>Model</th>
<th>Çıkan Depo</th>
<th>Giren Depo</th>                                          
<th>Miktar</th> 
<th>İşlem</th> 
  </tr>
</thead>
        <tbody id="Urunlistesi">       
    
     <?php $sorgu = $baglanti->query("SELECT * FROM DepoTransfer")->fetchAll();

                                                            foreach ($sorgu as $sonuc) {

     
                                                        ?> 
                                                     	
                                      
<tr id="secilen" class="Satirekle">
<td><?= $sonuc['islemtarihi']?></td>
 <td><span>
                                           <?php 
                                                      $urunlerim = $baglanti->query("SELECT * FROM Urunler where id=".$sonuc["urun"])->fetchAll(PDO::FETCH_ASSOC);
                                                                
                                                if(count($urunlerim)>0){


                                                ?>
                                                
                                                
                                           
                                                    <?php
    
                                                        foreach($urunlerim as $urunum){
                                                            ?>
<?php echo $urunum['urunadi'] ?>
       <?php } ?>
         	
         <?php


                                                        }
                                                            
                                                    
                                                    ?>        
</span></td>
 <td class="marka">
 <?php 
                                                      $marka = $baglanti->query("SELECT * FROM Markalar where id=".$urunum["markasi"])->fetchAll(PDO::FETCH_ASSOC);
                                                                
                                                if(count($marka)>0){


                                                ?>
                                                
                                                
                                           
                                                    <?php
    
                                                        foreach($marka as $markasi){
                                                            ?>
                                                    
                                                     <?php echo $markasi['markaadi']; ?>
                                                    <?php


                                                        }
                                                            
                                                    
                                                    ?>
       <?php } ?>
</td>       
 <td class="model">
 <?php 
                                                      $model = $baglanti->query("SELECT * FROM Modeller where id=".$urunum["modeli"])->fetchAll(PDO::FETCH_ASSOC);
                                                                
                                                if(count($model)>0){


                                                ?>
                                                
                                                
                                           
                                                    <?php
    
                                                        foreach($model as $modeli){
                                                            ?>
                                                    
                                                     <?php echo $modeli['modeladi']; ?>
                                                    <?php


                                                        }
                                                            
                                                    
                                                    ?>
       <?php } ?>

</td>       
<td>
	<span class="text-danger">
         <?php 
                                                      $depo = $baglanti->query("SELECT * FROM Depolar where id=".$sonuc["cikandepo"])->fetchAll(PDO::FETCH_ASSOC);
                                                                
                                                if(count($depo)>0){


                                                ?>
                                                
                                                
                                           
                                                    <?php
    
                                                        foreach($depo as $deposu){
                                                            ?>
                                                    
                                                     <?php echo $deposu['depoadi']; ?>
                                                    <?php


                                                        }
                                                            
                                                    
                                                    ?>
       <?php } ?>        
</span>                  
</td>
<td>
	<span class="text-success">
                    <?php 
                                                      $depo = $baglanti->query("SELECT * FROM Depolar where id=".$sonuc["girendepo"])->fetchAll(PDO::FETCH_ASSOC);
                                                                
                                                if(count($depo)>0){


                                                ?>
                                                
                                                
                                           
                                                    <?php
    
                                                        foreach($depo as $deposu){
                                                            ?>
                                                    
                                                     <?php echo $deposu['depoadi']; ?>
                                                    <?php


                                                        }
                                                            
                                                    
                                                    ?>
       <?php } ?>           
                   </span>             
</td>	     

<td>
	<span class="text-primary">
<?= $sonuc['miktar']?>
	        </span>             
</td>    
<td>
	<div class="form-button-action">
	
<?php 
 if ($kbilgi["depotransferduzenle"]==1) {?>															
	<button  type="button" data-toggle="tooltip" title="Düzenle" class="btn btn-icon btn-round btn-warning" data-original-title="Düzenle" onclick="window.location.href='DepoTransferDuzenle.php?id=<?= $sonuc["id"] ?>'">
																<i class="fa fa-edit"></i>
										</button>
										<?php }?>					
<?php 
 if ($kbilgi["depotransfersil"]==1) {?>
<button id="sil" type="button" data-toggle="tooltip" title="Sil" class="btn btn-icon btn-round btn-danger" data-original-title="Sil" data-id="<?= $sonuc["id"] ?>" href="javascript:void(0)">
																<i class="fa fa-times"></i>
															</button>
<?php }?>
														</div>
	</td>

      </tr>
	
<?php } ?>									
						                  

                                                                                
                                                        </tbody>
                                                    </table>
							</div>		

				
					</div>
			</div>
					
					
				</div>
			</div>
			<div type="hidden" id="sonuc">
	</div>
			<?php
require("Tablolar/alt.php"); //alt
?>
		</div>
		
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
                    url: "Islem/DepoTransfer.php", // POST işleminin olacağı sayfa
                    data: 'transfersil='+productId, // Formdaki tüm verileri al
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
			url: 'Islem/CariGoster.php',
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

	