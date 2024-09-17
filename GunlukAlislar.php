<?php
require("Ayarlar/Baglantim.php"); 
require("Ayarlar/Guvenlik.php"); 
?>
<!DOCTYPE html>
<html lang="tr">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	
	<title>Alış Faturaları - <?= $ayar["siteadi"] ?> - <?= $ayar["siteslogan"] ?></title>
	<?php
require("Tablolar/tasarim.php"); //logo - üst navigasyon menü
?>
</head>
<body class="animated <?= $tema['animasyon']?>" class="animated bounceIn" data-background-color="<?= $tema['arkaplan']?>">
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

									<h4 class="card-title">GÜNLÜK ALIŞ FATURALARI</h4>
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
 <th>Fatura Tarihi</th>
 <th>Fatura Kodu</th>                                          
  <th>Cari Adı</th>
<th>Fatura Seri - No</th>
<th>Fatura Tutarı</th>
<th>Ekleyen</th>
<th>İşlem</th> 
  </tr>
</thead>
        <tbody id="Urunlistesi">       
    
     <?php                                                                                                               $sorgu = $baglanti->query("
                                                                                SELECT * FROM AlFatBilgi where DAY(faturatarihi) = DAY(CURDATE())")->fetchAll();
                                                            foreach ($sorgu as $sonuc) {

     
                                                        ?> 
                                                        	
                                                
<tr id="secilen" class="Satirekle">
	     
                    <td class="urunadi"><?= $sonuc['faturatarihi']?></td>
 <td class="urunkodu"><?= $sonuc['id']?></td>
     <td class="barkod">
    <?php $cariler = $baglanti->query("SELECT * FROM Cariler where id=".$sonuc["cariadi"])->fetchAll(PDO::FETCH_ASSOC);
 if(count($cariler)>0){
 ?>
 <?php
foreach($cariler as $cari){
?>
 <?php echo $cari['unvani']; ?>
<?php }?>
       <?php } ?>
</td>
  <td class="kdvorani"><?= $sonuc['faturaseri']?> - <?= $sonuc['faturanumarasi']?></td>   
         
 <td class="model text-danger">
<?= number_format($sonuc['geneltoplam'], 2, ',', '.');?> <?php $parabirimi = $baglanti->query("SELECT * FROM ParaBirimleri where id=".$cari["parabirimi"])->fetchAll(PDO::FETCH_ASSOC);
if(count($parabirimi)>0){?>
<?php
foreach($parabirimi as $parabirimim){
?>
<?php echo $parabirimim['kisaltma']; ?>
<?php } ?>
 <?php } ?>
<br>	
<?php	
$geneltoplam=$sonuc['geneltoplam'];
if ($parabirimim['kur'] == "TL") {
$kurgenelsonuc=$geneltoplam*1;
} 
 else{
$kur = $parabirimim['kur']; 
$kurgenelsonuc=$geneltoplam*$DovizKurlari->$kur;
}
?>
<?= number_format($kurgenelsonuc, 2, ',', '.'); ?> TL
</td>       
<td class="barkod">
    <?php $kullanicilar= $baglanti->query("SELECT * FROM Kullanicilar where id=".$sonuc["ekleyen"])->fetchAll(PDO::FETCH_ASSOC);
if(count($kullanicilar)>0){
?>
<?php
foreach($kullanicilar as $kullanici){
?>
 <?php echo $kullanici['ad']; ?> <?php echo $kullanici['soyad']; ?>
<?php }?>
       <?php } ?>
</td>
<td>
														<div class="form-button-action">
															
			<button  type="button" data-toggle="modal" title="Düzenle" data-target="#goster" data-id="<?= $sonuc['id']?>" id="fatura" class="btn btn-icon btn-round btn-primary" data-original-title="Göster">
																<i class="fa fa-eye"></i>
															</button>												
			<?php 
 if ($kbilgi["alisfaturaduzenle"]==1) {?>															
															<button  type="button" data-toggle="tooltip" title="Düzenle" class="btn btn-icon btn-round btn-warning" data-original-title="Düzenle" onclick="window.location.href='AlisFaturasiDuzenle.php?id=<?= $sonuc["id"] ?>'">
																<i class="fa fa-edit"></i>
															</button>
<?php }?>
				<?php 
 if ($kbilgi["alisfaturasil"]==1) {?>
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
<?php }?>
	<?php 
 if ($kbilgi["yetki"]==1 or $kbilgi["yetki"]==2) {?>
 	<h1 class="text-danger">BU SAYFAYI GÖRÜNTÜLEMEYE YETKİNİZ YOK </h1>
 <?php }?>				
									
					</div>
			</div>
<div class="modal fade bd-example-modal-lg" id="goster" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
                      <div class="modal-content bg-<?= $tema['arkaplan']?>">
                        <div class="modal-header bg-<?= $tema['tablorenk']?>">
                          <h4 class="modal-title" id="myModalLabel8">FATURA DETAYI</h4>
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
                    url: "Islem/Alis.php", // POST işleminin olacağı sayfa
                    data: 'alissil='+productId, // Formdaki tüm verileri al
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
			url: 'Islem/AlisGoster.php',
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
