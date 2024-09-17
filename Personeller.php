<?php
require("Ayarlar/Baglantim.php"); 
require("Ayarlar/Guvenlik.php"); 
?>
<!DOCTYPE html>
<html lang="tr">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	
	<title>Personeller - <?= $ayar["siteadi"] ?> - <?= $ayar["siteslogan"] ?></title>
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
				<div class="row">
						<div class="col-6 col-sm-4 col-lg-2">
							<div class="card card-success">
								<div class="card-body p-3 text-center">
							<div class="h1 mb-1"><span class="btn-label">
            <i class="fas fa-lira-sign"></i>
          </span>MAAŞ</div>
<div>TÜM PERSONELLER</div>
									<div class="h1"><?php
$maastopla=$baglanti->prepare("SELECT SUM(maas) AS maas FROM PersonelMaas");
$maastopla->execute();
$maasyaz= $maastopla->fetch();
$maastoplam=$maasyaz['maas'];
?>
	<?= number_format($maastoplam, 2, ',', '.'); ?></div>
								</div>
							</div>
						</div>
<div class="col-6 col-sm-4 col-lg-2">
							<div class="card card-warning">
								<div class="card-body p-3 text-center">
							<div class="h1 mb-1"><span class="btn-label">
            <i class="fas fa-level-down-alt"></i>
          </span>AGİ</div>
<div>TÜM PERSONELLER</div>
									<div class="h1"><?php
$agitopla=$baglanti->prepare("SELECT SUM(agi) AS agi FROM PersonelMaas");
$agitopla->execute();
$agiyaz= $agitopla->fetch();
$agitoplam=$agiyaz['agi'];
?>
	<?= number_format($agitoplam, 2, ',', '.'); ?></div>
								</div>
							</div>
						</div>
<div class="col-6 col-sm-4 col-lg-2">
							<div class="card card-primary">
								<div class="card-body p-3 text-center">
							<div class="h1 mb-1"><span class="btn-label">
            <i class="fas fa-user-clock"></i>
          </span>MESAİ</div>
<div>TÜM PERSONELLER</div>
									<div class="h1"><?php
$mesaitopla=$baglanti->prepare("SELECT SUM(mesaitutar) AS mesai FROM PersonelMesai");
$mesaitopla->execute();
$mesaiyaz= $mesaitopla->fetch();
$mesaitoplam=$mesaiyaz['mesai'];
?>
	<?= number_format($mesaitoplam, 2, ',', '.'); ?></div>
								</div>
							</div>
						</div>
<div class="col-6 col-sm-4 col-lg-2">
							<div class="card card-secondary">
								<div class="card-body p-3 text-center">
							<div class="h1 mb-1"><span class="btn-label">
            <i class="fas fa-user-slash"></i>
          </span>İZİN</div>
<div>TÜM PERSONELLER</div>
									<div class="h1"><?php
$izinucrettopla=$baglanti->prepare("SELECT SUM(ucret) AS ucret FROM PersonelIzin");
$izinucrettopla->execute();
$izinucretyaz= $izinucrettopla->fetch();
$izinucrettoplam=$izinucretyaz['ucret'];
?>
	<?= number_format($izinucrettoplam, 2, ',', '.'); ?></div>
								</div>
							</div>
						</div>
<div class="col-6 col-sm-4 col-lg-2">
							<div class="card card-danger">
								<div class="card-body p-3 text-center">
							<div class="h1 mb-1"><span class="btn-label">
            <i class="fas fa-lira-sign"></i>
          </span>ÖDEME</div>
<div>TÜM PERSONELLER</div>
									<div class="h1"><?php
$odemetopla=$baglanti->prepare("SELECT SUM(odeme) AS odeme FROM PersonelOdeme");
$odemetopla->execute();
$odemeyaz= $odemetopla->fetch();
$odemetoplam=$odemeyaz['odeme'];
?>
	<?= number_format($odemetoplam, 2, ',', '.'); ?></div>
								</div>
							</div>
						</div>
<div class="col-6 col-sm-4 col-lg-2">
							<div class="card card-info">
								<div class="card-body p-3 text-center">
							<div class="h1 mb-1"><span class="btn-label">
            <i class="far fa-money-bill-alt"></i>
          </span>KALAN</div>
<div>TÜM PERSONELLER</div>
<div class="h1">
<?php
$alacak  = $maastoplam + $agitoplam + $mesaitoplam;
$borc  = $izinucrettoplam + $odemetoplam;
$kalan  = $alacak - $borc;
?>
	<?= number_format($kalan, 2, ',', '.');
  ?>
 </div>
								</div>
							</div>
						</div>
				

					</div>				
					<div class="card">
								<div class="card-header">
									<h4 class="card-title table-head-bg-primary">Personeller</h4>
								</div>
								<div class="card-body ">
	<?php 
 if ($kbilgi["personelekle"]==1) {?>
<button id="Kaydet" name="kaydet" type="submit" class="btn btn-success btn-raised btn-block" onclick="window.location.href='PersonelEkle.php'">
Personel Ekle</button>
<br>
<?php }?>

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
 <th>Ad</th>                                          
 <th>Soyad</th>
 <th>Maaş</th>
<th>AGİ</th>     
<th>Mesai</th> 
<th>Toplam Ücret</th>
<th>Kesinti</th>        
<th>Ödeme</th> 
<th>Kalan</th>   
<th>İşlem</th> 
  </tr>
</thead>
        <tbody id="Urunlistesi">      
<?php $sorgu = $baglanti->prepare('Select * from Personeller'); // Veritabanındaki Depolar tablosundaki tüm verileri çekiyoruz
$sorgu->execute();
while($sonuc=$sorgu->fetch()) // While Döngüsü ile Verilerimzi döndürüyoruz
{  // While Başlangıcı

							?>
  
<tr>
<td class="text-success"><?= $sonuc['ad']?></td>
<td class="text-success"><?= $sonuc['soyad']?></td>
<td class="text-primary"><?php
$maastopla=$baglanti->prepare("SELECT SUM(maas) AS maas FROM PersonelMaas where personelid=".$sonuc["id"]);
$maastopla->execute();
$maasyaz= $maastopla->fetch();
$maastoplam=$maasyaz['maas'];
?>
	<?= number_format($maastoplam, 2, ',', '.'); ?> <i class="fas fa-lira-sign"></i></td>
<td class="text-info"><?php
$agitopla=$baglanti->prepare("SELECT SUM(agi) AS agi FROM PersonelMaas where personelid=".$sonuc["id"]);
$agitopla->execute();
$agiyaz= $agitopla->fetch();
$agitoplam=$agiyaz['agi'];
?>
	<?= number_format($agitoplam, 2, ',', '.'); ?> <i class="fas fa-lira-sign"></i></td>
<td class="text-secondary"><?php
$mesaitopla=$baglanti->prepare("SELECT SUM(mesaitutar) AS mesai FROM PersonelMesai where personelid=".$sonuc["id"]);
$mesaitopla->execute();
$mesaiyaz= $mesaitopla->fetch();
$mesaitoplam=$mesaiyaz['mesai'];
?>
	<?= number_format($mesaitoplam, 2, ',', '.'); ?> <i class="fas fa-lira-sign"></i></td> 
<td class="text-warning"><?php
$alacak  = $maastoplam + $agitoplam + $mesaitoplam;
?>
	<?= number_format($alacak, 2, ',', '.');
  ?> <i class="fas fa-lira-sign"></i></td>
<td class="text-danger"><?php
$izinucrettopla=$baglanti->prepare("SELECT SUM(ucret) AS ucret FROM PersonelIzin where personelid=".$sonuc["id"]);
$izinucrettopla->execute();
$izinucretyaz= $izinucrettopla->fetch();
$izinucrettoplam=$izinucretyaz['ucret'];
?>
	<?= number_format($izinucrettoplam, 2, ',', '.'); ?> <i class="fas fa-lira-sign"></i></td>
<td class="text-danger"><?php
$odemetopla=$baglanti->prepare("SELECT SUM(odeme) AS odeme FROM PersonelOdeme where personelid=".$sonuc["id"]);
$odemetopla->execute();
$odemeyaz= $odemetopla->fetch();
$odemetoplam=$odemeyaz['odeme'];
?>
	<?= number_format($odemetoplam, 2, ',', '.'); ?> <i class="fas fa-lira-sign"></td>
<td class="text-success"><?php
$alacak  = $maastoplam + $agitoplam + $mesaitoplam;
$borc  = $izinucrettoplam + $odemetoplam;
$kalan  = $alacak - $borc;
?>
	<?= number_format($kalan, 2, ',', '.');
  ?> <i class="fas fa-lira-sign"></i></td>
<td>
														<div class="form-button-action">
	<button  type="button" data-toggle="modal" title="Göster" data-target="#goster" data-id="<?= $sonuc['id']?>" id="fatura" class="btn btn-icon btn-round btn-primary" data-original-title="Göster">
																<i class="fa fa-eye"></i>
															</button>
														<button type="button" data-toggle="tooltip" title="İşlemler" class="btn btn-icon btn-round btn-success" data-original-title=İşlemler" onclick="window.location.href='PersonelDetay.php?id=<?= $sonuc["id"] ?>'">
																<i class="fa fa-search"></i>
															</button>
<?php 
 if ($kbilgi["personelduzenle"]==1) {?>															
	<button  type="button" data-toggle="tooltip" title="Düzenle" class="btn btn-icon btn-round btn-warning" data-original-title="Düzenle" onclick="window.location.href='PersonelDuzenle.php?id=<?= $sonuc["id"] ?>'">
																<i class="fa fa-edit"></i>
<?php }?>															</button>
<?php 
 if ($kbilgi["personelsil"]==1) {?>
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
                    url: "Islem/Personel.php", // POST işleminin olacağı sayfa
                    data: 'personelsil='+productId, // Formdaki tüm verileri al
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
			url: 'Islem/PersonelGoster.php',
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

	