<?php
require("Ayarlar/Baglantim.php"); 
require("Ayarlar/Guvenlik.php"); 
?>
<!DOCTYPE html>
<html lang="tr">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	
	<title>Cariler - <?= $ayar["siteadi"] ?> - <?= $ayar["siteslogan"] ?></title>
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

									<h4 class="card-title">CARİ LİSTESİ</h4>
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
 <th>Cari Kodu</th>                                          
 <th>Cari Adı</th>
<th>Para Birimi</th>             
<th>Borç</th>      
<th>Alacak</th>   
<th>Kalan</th>     
<th>İşlem</th> 
  </tr>
</thead>
        <tbody id="Urunlistesi">      
<?php $sorgu = $baglanti->prepare('Select * from Cariler'); // Veritabanındaki Depolar tablosundaki tüm verileri çekiyoruz
$sorgu->execute();
while($sonuc=$sorgu->fetch()) // While Döngüsü ile Verilerimzi döndürüyoruz
{  // While Başlangıcı

							?>
  
<tr id="secilen" class="Satirekle">
	      <td class="carikodu"><?= $sonuc['id']?></td>
                    <td class="cariadi"><?= $sonuc['unvani']?></td>

  
           
<td class="il"><?php $parabirimi = $baglanti->query("SELECT * FROM ParaBirimleri where id=".$sonuc["parabirimi"])->fetchAll(PDO::FETCH_ASSOC);
                                                                
                                                if(count($parabirimi)>0){


                                                ?>
                                                
                                                
                                           
                                                    <?php
    
                                                        foreach($parabirimi as $parabirimim){
                                                            ?>
                                                    
                                                     <?php echo $parabirimim['parabirimadi']; ?>
                                                    <?php


                                                        }
                                                            
                                                    
                                                    ?>
       <?php } ?></td>

  <td class="borc text-danger">
<?php
$fatsatistopla=$baglanti->prepare("SELECT SUM(geneltoplam) AS satis FROM SatFatBilgi where cariadi=".$sonuc["id"]);
$fatsatistopla->execute();
$fatsatisyaz= $fatsatistopla->fetch();
$fatsatistoplam=$fatsatisyaz['satis'];
?>
<?php
$ceksatistopla=$baglanti->prepare("SELECT SUM(tutar) AS satis FROM CekSenet where islem='verilen' and unvan=".$sonuc["id"]);
$ceksatistopla->execute();
$ceksatisyaz= $ceksatistopla->fetch();
$ceksatistoplam=$ceksatisyaz['satis'];
?>
<?php
$bankasatistopla=$baglanti->prepare("SELECT SUM(tutar) AS satis FROM BankaGiris where islem='bankacikti' and unvan=".$sonuc["id"]);
$bankasatistopla->execute();
$bankasatisyaz= $bankasatistopla->fetch();
$bankasatistoplam=$bankasatisyaz['satis'];
?>
<?php
$kasasatistopla=$baglanti->prepare("SELECT SUM(tutar) AS satis FROM KasaGiris where islem='kasacikti' and unvan=".$sonuc["id"]);
$kasasatistopla->execute();
$kasasatisyaz= $kasasatistopla->fetch();
$kasasatistoplam=$kasasatisyaz['satis'];
?>
<?php
$carisatistopla=$baglanti->prepare("SELECT SUM(tutar) AS satis FROM CariIslem where islem='borc' and unvan=".$sonuc["id"]);
$carisatistopla->execute();
$carisatisyaz= $carisatistopla->fetch();
$carisatistoplam=$carisatisyaz['satis'];
?>


	



<?php
 
$fatsatis  = $fatsatistoplam;
$ceksatis  = $ceksatistoplam;
$bankasatis  = $bankasatistoplam;
$kasasatis  = $kasasatistoplam;
$carisatis  = $carisatistoplam;
$cikistoplam  = $fatsatis + $ceksatis + $bankasatis + $kasasatis + $carisatis;
?>
	<?= number_format($cikistoplam, 2, ',', '.');
  ?> <?php $parabirimi = $baglanti->query("SELECT * FROM ParaBirimleri where id=".$sonuc["parabirimi"])->fetchAll(PDO::FETCH_ASSOC);
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
$kurcikissonuc=$cikistoplam*1;
} 
 else{
$kur = $parabirimim['kur']; 
$kurcikissonuc=$cikistoplam*$DovizKurlari->$kur;
}
?>
<?= number_format($kurcikissonuc, 2, ',', '.'); ?> TL
</td>    
           <td class="alacak text-success">
<?php
$fatalistopla=$baglanti->prepare("SELECT SUM(geneltoplam) AS alis FROM AlFatBilgi where cariadi=".$sonuc["id"]);
$fatalistopla->execute();
$fatalisyaz= $fatalistopla->fetch();
$fatalistoplam=$fatalisyaz['alis'];
?>
<?php
$cekalistopla=$baglanti->prepare("SELECT SUM(tutar) AS alis FROM CekSenet where islem='alinan' and unvan=".$sonuc["id"]);
$cekalistopla->execute();
$cekalisyaz= $cekalistopla->fetch();
$cekalistoplam=$cekalisyaz['alis'];
?>
<?php
$bankaalistopla=$baglanti->prepare("SELECT SUM(tutar) AS alis FROM BankaGiris where islem='bankagirdi' and unvan=".$sonuc["id"]);
$bankaalistopla->execute();
$bankaalisyaz= $bankaalistopla->fetch();
$bankaalistoplam=$bankaalisyaz['alis'];
?>
<?php
$kasaalistopla=$baglanti->prepare("SELECT SUM(tutar) AS alis FROM KasaGiris where islem='kasagirdi' and unvan=".$sonuc["id"]);
$kasaalistopla->execute();
$kasaalisyaz= $kasaalistopla->fetch();
$kasaalistoplam=$kasaalisyaz['alis'];
?>
<?php
$carialistopla=$baglanti->prepare("SELECT SUM(tutar) AS alis FROM CariIslem where islem='alacak' and unvan=".$sonuc["id"]);
$carialistopla->execute();
$carialisyaz= $carialistopla->fetch();
$carialistoplam=$carialisyaz['alis'];
?>






<?php
 
$fatalis  = $fatalistoplam;
$cekalis  = $cekalistoplam;
$bankaalis  = $bankaalistoplam;
$kasaalis  = $kasaalistoplam;
$carialis  = $carialistoplam;
$giristoplam  = $fatalis + $cekalis + $bankaalis + $kasaalis + $carialis;
?>
	<?= number_format($giristoplam, 2, ',', '.');
  ?>  <?php $parabirimi = $baglanti->query("SELECT * FROM ParaBirimleri where id=".$sonuc["parabirimi"])->fetchAll(PDO::FETCH_ASSOC);
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
$kurgirissonuc=$giristoplam*1;
} 
 else{
$kur = $parabirimim['kur']; 
$kurgirissonuc=$giristoplam*$DovizKurlari->$kur;
}
?>

<?= number_format($kurgirissonuc, 2, ',', '.'); ?> TL		

</td>  
 <td>
  	<?php
 
$sayi1  = $cikistoplam;
$sayi2  = $giristoplam;
$kalan  = $sayi1 - $sayi2;
if ($kalan > 0) {
    $renk = "danger";
} 
 elseif ($kalan < 0){
    $renk = "success";
}
elseif ($kalan == 0) {
$renk = "primary";
}

?>
	<span class="text-<?= $renk ?>">
	<?= number_format($kalan, 2, ',', '.'); ?>  <?php $parabirimi = $baglanti->query("SELECT * FROM ParaBirimleri where id=".$sonuc["parabirimi"])->fetchAll(PDO::FETCH_ASSOC);
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
$kurkalansonuc=$kalan*1;
} 
 else{
$kur = $parabirimim['kur']; 
$kurkalansonuc=$kalan*$DovizKurlari->$kur;
}
?>

<?= number_format($kurkalansonuc, 2, ',', '.'); ?> TL
  	</span>

</td>       
<td>
														<div class="form-button-action">
	<button  type="button" data-toggle="modal" title="Göster" data-target="#goster" data-id="<?= $sonuc['id']?>" id="fatura" class="btn btn-icon btn-round btn-primary" data-original-title="Göster">
																<i class="fa fa-eye"></i>
															</button>
														<button type="button" data-toggle="tooltip" title="İşlemler" class="btn btn-icon btn-round btn-success" data-original-title=İşlemler" onclick="window.location.href='CariHesapDetay.php?id=<?= $sonuc["id"] ?>'">
																<i class="fa fa-search"></i>
															</button>
<?php 
 if ($kbilgi["cariduzenle"]==1) {?>															
	<button  type="button" data-toggle="tooltip" title="Düzenle" class="btn btn-icon btn-round btn-warning" data-original-title="Düzenle" onclick="window.location.href='CariDuzenle.php?id=<?= $sonuc["id"] ?>'">
																<i class="fa fa-edit"></i>
<?php }?>															</button>
<?php 
 if ($kbilgi["carisil"]==1) {?>
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
									
									
					</div>
			</div>
				<div class="modal fade bd-example-modal-lg" id="goster" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
                      <div class="modal-content bg-<?= $tema['arkaplan']?>">
                        <div class="modal-header bg-<?= $tema['tablorenk']?>">
                          <h4 class="modal-title" id="myModalLabel8">CARİ DETAYI</h4>
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
                    url: "Islem/Cari.php", // POST işleminin olacağı sayfa
                    data: 'carisil='+productId, // Formdaki tüm verileri al
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

	