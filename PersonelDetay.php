<?php
require("Ayarlar/Baglantim.php"); 
require("Ayarlar/Guvenlik.php"); 
?>
	<?php


$personel = $baglanti->prepare("SELECT * FROM Personeller Where id=:id");
$personel->execute(['id' => (int)$_GET["id"]]);
$personelim = $personel->fetch();//sorgu çalıştırılıp veriler alınıyor
?>
<!DOCTYPE html>
<html lang="tr">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	
	<title><?= $personelim['ad']?> <?= $personelim['soyad']?> Personel Detayı - <?= $ayar["siteadi"] ?> - <?= $ayar["siteslogan"] ?></title>
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
	<?php 
 if ($kbilgi["personelmesaiekle"]==1) {?>
			<div class="col-6 col-sm-4 col-lg-3">
							<div class="card card-danger" data-toggle="modal" data-target="#MesaiEkle">
								<div class="card-body p-3 text-center">
							<div class="h3 mb-1"><span class="btn-label">
            <i class="fas fa-user-clock"></i>
          </span>MESAİ EKLE</div>
								</div>
							</div>
						</div>
<?php }?>
	<?php 
 if ($kbilgi["personelizinekle"]==1) {?>
<div class="col-6 col-sm-4 col-lg-3">
							<div class="card card-success" data-toggle="modal" data-target="#IzinEkle">
								<div class="card-body p-3 text-center">
							<div class="h3 mb-1"><span class="btn-label">
            <i class="fas fa-user-slash"></i>
          </span>İZİN EKLE</div>
								</div>
							</div>
						</div>
<?php }?>
	<?php 
 if ($kbilgi["personelmaasekle"]==1) {?>
<div class="col-6 col-sm-4 col-lg-3">
							<div class="card card-warning" data-toggle="modal" data-target="#MaasEkle">
								<div class="card-body p-3 text-center">
							<div class="h3 mb-1"><span class="btn-label">
            <i class="fas fa-lira-sign"></i>
          </span>MAAŞ EKLE</div>
								</div>
							</div>
						</div>
<?php }?>
	<?php 
 if ($kbilgi["personelodemeekle"]==1) {?>
<div class="col-6 col-sm-4 col-lg-3">
							<div class="card card-primary" data-toggle="modal" data-target="#OdemeEkle">
								<div class="card-body p-3 text-center">
							<div class="h3 mb-1"><span class="btn-label">
            <i class="fas fa-lira-sign"></i>
          </span>ÖDEME EKLE</div>
								</div>
							</div>
						</div>
<?php }?>


	</div>
								<div class="card sabitmenu">
							
				
<div class="row">
	<?php 
 if ($kbilgi["personelmesaiekle"]==1) {?>
			<div class="col-6 col-sm-4 col-lg-3">
							<div class="card card-danger" data-toggle="modal" data-target="#MesaiEkle">
								<div class="card-body p-3 text-center">
							<div class="h3 mb-1"><span class="btn-label">
            <i class="fas fa-user-clock"></i>
          </span>MESAİ EKLE</div>
								</div>
							</div>
						</div>
<?php }?>
	<?php 
 if ($kbilgi["personelizinekle"]==1) {?>
<div class="col-6 col-sm-4 col-lg-3">
							<div class="card card-success" data-toggle="modal" data-target="#IzinEkle">
								<div class="card-body p-3 text-center">
							<div class="h3 mb-1"><span class="btn-label">
            <i class="fas fa-user-slash"></i>
          </span>İZİN EKLE</div>
								</div>
							</div>
						</div>
<?php }?>
	<?php 
 if ($kbilgi["personelmaasekle"]==1) {?>
<div class="col-6 col-sm-4 col-lg-3">
							<div class="card card-warning" data-toggle="modal" data-target="#MaasEkle">
								<div class="card-body p-3 text-center">
							<div class="h3 mb-1"><span class="btn-label">
            <i class="fas fa-lira-sign"></i>
          </span>MAAŞ EKLE</div>
								</div>
							</div>
						</div>
<?php }?>
	<?php 
 if ($kbilgi["personelodemeekle"]==1) {?>
<div class="col-6 col-sm-4 col-lg-3">
							<div class="card card-primary" data-toggle="modal" data-target="#OdemeEkle">
								<div class="card-body p-3 text-center">
							<div class="h3 mb-1"><span class="btn-label">
            <i class="fas fa-lira-sign"></i>
          </span>ÖDEME EKLE</div>
								</div>
							</div>
						</div>
<?php }?>


	</div>

</div>


			

<div class="row">
						<div class="col-6 col-sm-4 col-lg-2">
							<div class="card card-success">
								<div class="card-body p-3 text-center">
							<div class="h1 mb-1"><span class="btn-label">
            <i class="fas fa-lira-sign"></i>
          </span>MAAŞ</div>
<div>TOPLAM</div>
									<div class="h1"><?php
$maastopla=$baglanti->prepare("SELECT SUM(maas) AS maas FROM PersonelMaas where personelid=".$personelim["id"]);
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
<div>TOPLAM</div>
									<div class="h1"><?php
$agitopla=$baglanti->prepare("SELECT SUM(agi) AS agi FROM PersonelMaas where personelid=".$personelim["id"]);
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
<div>TOPLAM</div>
									<div class="h1"><?php
$mesaitopla=$baglanti->prepare("SELECT SUM(mesaitutar) AS mesai FROM PersonelMesai where personelid=".$personelim["id"]);
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
<div>TOPLAM</div>
									<div class="h1"><?php
$izinucrettopla=$baglanti->prepare("SELECT SUM(ucret) AS ucret FROM PersonelIzin where personelid=".$personelim["id"]);
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
<div>TOPLAM</div>
									<div class="h1"><?php
$odemetopla=$baglanti->prepare("SELECT SUM(odeme) AS odeme FROM PersonelOdeme where personelid=".$personelim["id"]);
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
<div>TOPLAM</div>
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
<div class="row">
<div class="col-md-6">
					<div class="card">




								<div class="card-header">
									<h4 class="card-title table-head-bg-primary">MESAİLER</h4>
								</div>
								<div class="card-body ">
<div class="table-responsive">

    <table class="tablo2 table table-head-bg-<?= $tema['tablorenk']?> table-hover">
                                                        <thead>
                                                            <tr>
 <th>Mesai Tarihi</th>     
 <th>Açıklama</th>                                        
 <th>Mesai Süresi</th>
<th>Mesai Tutar</th>             
<th>İşlem</th> 
  </tr>
</thead>
        <tbody id="Urunlistesi">      
<?php $sorgu = $baglanti->prepare("Select * from PersonelMesai where personelid='$personelim[id]'"); // Veritabanındaki Depolar tablosundaki tüm verileri çekiyoruz
$sorgu->execute();
while($sonuc=$sorgu->fetch()) // While Döngüsü ile Verilerimzi döndürüyoruz
{  // While Başlangıcı

							?>
  
<tr id="secilen" class="Satirekle">
<td class="text-primary"><?= $sonuc['mesaitarih']?></td>
<td class="text-warning"><?= $sonuc['aciklama']?></td>
<td class="text-success"><?= $sonuc['sure']?> Saat</td>
<td class="text-danger"><?= number_format($sonuc['mesaitutar'], 2, ',', '.'); ?></td>
<td>
														<div class="form-button-action">


<?php 
 if ($kbilgi["personelmesaiduzenle"]==1) {?>															
	<button  type="button" data-toggle="modal" title="Düzenle" data-target="#duzenle" data-id="<?= $sonuc['id']?>" id="mesaiduzenleme" class="btn btn-icon btn-round btn-warning" data-original-title="Göster">
																<i class="fa fa-edit"></i>
															</button>
<?php }?>
<?php 
 if ($kbilgi["personelmesaisil"]==1) {?>
<button id="mesaisil" type="button" data-toggle="tooltip" title="Sil" class="btn btn-icon btn-round btn-danger" data-original-title="Sil" data-id="<?= $sonuc["id"] ?>" href="javascript:void(0)">
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
</div>
<div class="col-md-6">
					<div class="card">




								<div class="card-header">
									<h4 class="card-title table-head-bg-primary">ÖDEMELER</h4>
								</div>
								<div class="card-body ">

    <table class="tablo2 table table-head-bg-<?= $tema['tablorenk']?> table-hover">
                                                        <thead>
                                                            <tr>
 <th>İşlem Tarihi</th>                                          
 <th>Ödeme Türü</th>
<th>Ödeme Miktarı</th>             
<th>İşlem</th> 
  </tr>
</thead>
        <tbody id="Urunlistesi">      
<?php $sorgu = $baglanti->prepare("Select * from PersonelOdeme where personelid='$personelim[id]'"); // Veritabanındaki Depolar tablosundaki tüm verileri çekiyoruz
$sorgu->execute();
while($sonuc=$sorgu->fetch()) // While Döngüsü ile Verilerimzi döndürüyoruz
{  // While Başlangıcı

							?>
  
<tr id="secilen" class="Satirekle">
<td class="text-primary"><?= $sonuc['islemtarihi']?></td>
<?php
if ($sonuc['odemeturu'] == "maas") {?> 
 <td class="text-success">MAAŞ</td>
	<?php } ?>
<?php
if ($sonuc['odemeturu'] == "avans") {?> 
 <td class="text-success">AVANS</td>
	<?php } ?>

<td class="text-danger"><?= number_format($sonuc['odeme'], 2, ',', '.'); ?></td>
<td>
														<div class="form-button-action">


<?php 
 if ($kbilgi["personelodemeduzenle"]==1) {?>															
	<button  type="button" data-toggle="modal" title="Düzenle" data-target="#duzenle" data-id="<?= $sonuc['id']?>" id="odemeduzenleme" class="btn btn-icon btn-round btn-warning" data-original-title="Göster">
																<i class="fa fa-edit"></i>
															</button>
<?php }?>															
<?php 
 if ($kbilgi["personelodemesil"]==1) {?>
<button id="odemesil" type="button" data-toggle="tooltip" title="Sil" class="btn btn-icon btn-round btn-danger" data-original-title="Sil" data-id="<?= $sonuc["id"] ?>" href="javascript:void(0)">
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
<div class="col-md-12">
					<div class="card">




								<div class="card-header">
									<h4 class="card-title table-head-bg-primary">MAAŞLAR</h4>
								</div>
								<div class="card-body ">
<div class="table-responsive">

    <table class="tablo2 table table-head-bg-<?= $tema['tablorenk']?> table-hover">
                                                        <thead>
                                                            <tr>
 <th>İşlem Tarihi</th>                                          
 <th>Açıklama</th>
<th>Maaş</th>             
<th>Agi</th> 
<th>Agili Maaş</th>
<th>İşlem</th>
  </tr>
</thead>
        <tbody id="Urunlistesi">      
<?php $sorgu = $baglanti->prepare("Select * from PersonelMaas where personelid='$personelim[id]'"); // Veritabanındaki Depolar tablosundaki tüm verileri çekiyoruz
$sorgu->execute();
while($sonuc=$sorgu->fetch()) // While Döngüsü ile Verilerimzi döndürüyoruz
{  // While Başlangıcı

							?>
  
<tr id="secilen" class="Satirekle">
<td class="text-primary"><?= $sonuc['islemtarihi']?></td>
<td class="text-info"><?= $sonuc['aciklama']?></td>
<td class="text-success"><?= number_format($sonuc['maas'], 2, ',', '.'); ?></td>
<td class="text-warning"><?= number_format($sonuc['agi'], 2, ',', '.'); ?></td>
<td class="text-danger"><?= number_format($sonuc['agilimaas'], 2, ',', '.'); ?></td>
<td>
														<div class="form-button-action">


<?php 
 if ($kbilgi["personelmaasduzenle"]==1) {?>															
<button  type="button" data-toggle="modal" title="Düzenle" data-target="#duzenle" data-id="<?= $sonuc['id']?>" id="maasduzenleme" class="btn btn-icon btn-round btn-warning" data-original-title="Göster">
																<i class="fa fa-edit"></i>
															</button>
<?php }?>															


<?php 
 if ($kbilgi["personelmaassil"]==1) {?>
<button id="maassil" type="button" data-toggle="tooltip" title="Sil" class="btn btn-icon btn-round btn-danger" data-original-title="Sil" data-id="<?= $sonuc["id"] ?>" href="javascript:void(0)">
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
	</div>







<div class="col-md-12">
					<div class="card">




								<div class="card-header">
									<h4 class="card-title table-head-bg-primary">İZİNLER</h4>
								</div>
								<div class="card-body ">
<div class="table-responsive">

    <table class="tablo2 table table-head-bg-<?= $tema['tablorenk']?> table-hover">
                                                        <thead>
                                                            <tr>
 <th>İşlem Tarihi</th>                                          
 <th>İzin Türü</th>
<th>İzine Çıkış Tarihi</th>             
<th>İzin Dönüş Tarihi</th> 
<th>İzin Sayısı</th>
<th>Açıklama</th>
<th>İzin Kesinti Ücreti</th>
<th>İşlem</th>
  </tr>
</thead>
        <tbody id="Urunlistesi">      
<?php $sorgu = $baglanti->prepare("Select * from PersonelIzin where personelid='$personelim[id]'"); // Veritabanındaki Depolar tablosundaki tüm verileri çekiyoruz
$sorgu->execute();
while($sonuc=$sorgu->fetch()) // While Döngüsü ile Verilerimzi döndürüyoruz
{  // While Başlangıcı

							?>
  
<tr id="secilen" class="Satirekle">
<td class="text-primary"><?= $sonuc['islemtarihi']?></td>
<?php
if ($sonuc['izinturu'] == "yillik") {?> 
 <td class="text-success">YILLIK İZİN</td>
	<?php } ?>
<?php
if ($sonuc['izinturu'] == "ucretsiz") {?> 
 <td class="text-danger">ÜCRETSİZ İZİN</td>
	<?php } ?>
<?php
if ($sonuc['izinturu'] == "olum") {?> 
 <td class="text-warning">ÖLÜM İZNİ</td>
	<?php } ?>
<?php
if ($sonuc['izinturu'] == "dogum") {?> 
 <td class="text-primary">DOĞUM İZNİ</td>
	<?php } ?>

<td class="text-danger"><?= $sonuc['izincikis']?></td>
<td class="text-success"><?= $sonuc['izindonus']?></td>
<td class="text-warning"><?= $sonuc['izinsayisi']?> Gün</td>
<td class="text-info"><?= $sonuc['aciklama']?></td>
<td class="text-danger"><?= number_format($sonuc['ucret'], 2, ',', '.'); ?></td>
<td>
														<div class="form-button-action">


<?php 
 if ($kbilgi["personelizinduzenle"]==1) {?>															
	<button  type="button" data-toggle="modal" title="Düzenle" data-target="#duzenle" data-id="<?= $sonuc['id']?>" id="izinduzenleme" class="btn btn-icon btn-round btn-warning" data-original-title="Göster">
																<i class="fa fa-edit"></i>
															</button>

<?php }?>															

<?php 
 if ($kbilgi["personelizinsil"]==1) {?>
<button id="izinsil" type="button" data-toggle="tooltip" title="Sil" class="btn btn-icon btn-round btn-danger" data-original-title="Sil" data-id="<?= $sonuc["id"] ?>" href="javascript:void(0)">
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
	</div>
</div>


<div class="modal fade bd-example-modal-md" id="MesaiEkle" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-md">
                      <div class="modal-content bg-<?= $tema['arkaplan']?>">
                        <div class="modal-header bg-<?= $tema['tablorenk']?>">
                          <h4 class="modal-title" id="myModalLabel8">MESAİ EKLE</h4>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">X</span>
                          </button>
                        </div>
                        <div class="modal-body table-responsive">
<?php 
 if ($kbilgi["personelmesaiekle"]==1) {?>
	<form id="PersonelMesaiEkle" action="javascript:void(0);">
<div class="row">

<input type="text" name="ekleyen" class="form-control" placeholder="ekleyen" readonly="readonly" value="<?= $kbilgi["id"] ?>" hidden="hidden">   
<input type="text" name="personelid" class="form-control" placeholder="ekleyen" readonly="readonly" value="<?= $personelim["id"] ?>" hidden="hidden"> 
<div class="col-md-12">  
 <div class="form-group">                   
   <label class="control-label">MESAİ TARİHİ</label>
 <input type="text" id="mesaitarih" class="form-control text-success tarih" placeholder="MESAİ TARİHİ" name="mesaitarih" value="<?php echo date('Y-m-d H:i'); ?>">
 </div>
</div>
<div class="col-md-12">
<div class="form-group"> 
 <label class="control-label">MESAİ SÜRESİ</label>
 <input type="text" id="sure" class="form-control text-danger sayi" placeholder="MESAİ SÜRESİ" name="sure">
      </div>
</div>
<div class="col-md-12">
<div class="form-group"> 
 <label class="control-label">MESAİ SAAT ÜCRETİ</label>
 <input type="text" id="ucret" class="form-control text-warning sayi" readonly="readonly" placeholder="MESAİ SAAT ÜCRETİ" value="<?= $personelim["mesaiucret"] ?>">
      </div>
</div>
<div class="col-md-12">
<div class="form-group"> 
 <label class="control-label">MESAİ TUTAR</label>
 <input type="text" id="mesaitutar" class="form-control text-primary" readonly="readonly" placeholder="MESAİ TUTAR"  name="mesaitutar">
      </div>
</div>
<div class="col-md-12">
         <div class="form-group">                        
   <label class="control-label">AÇIKLAMA</label>
 <textarea class="form-control text-success" id="aciklama" rows="3" name="aciklama"></textarea>            
                                          </div>
</div>
<div class="col-md-12">
         <div class="form-group">
<input type="hidden" class="form-control" name="mesaiekle">
		<button name="kaydet" type="submit" class="btn btn-success btn-raised btn-block">
Kaydet</button>
                                          </div>
</div>
</form>
<?php }?>
	<?php 
 if ($kbilgi["personelmesaiekle"]!=1) {?>
 	<h1 class="text-danger">BU SAYFAYI GÖRÜNTÜLEMEYE YETKİNİZ YOK </h1>
 <?php }?>

 </div>
                   

                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-outline-<?= $tema['tablorenk']?>" data-dismiss="modal">
							Kapat</button>
                       
                        </div>
                      </div>
                    </div>
                  </div>

<div class="modal fade bd-example-modal-md" id="IzinEkle" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-md">
                      <div class="modal-content bg-<?= $tema['arkaplan']?>">
                        <div class="modal-header bg-<?= $tema['tablorenk']?>">
                          <h4 class="modal-title" id="myModalLabel8">İZİN EKLE</h4>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">X</span>
                          </button>
                        </div>
                        <div class="modal-body table-responsive">

                <?php 
 if ($kbilgi["personelizinekle"]==1) {?>
	<form id="PersonelIzinEkle" action="javascript:void(0);">
<div class="row">

<input type="text" name="ekleyen" class="form-control" placeholder="ekleyen" readonly="readonly" value="<?= $kbilgi["id"] ?>" hidden="hidden">   
<input type="text" name="personelid" class="form-control" placeholder="ekleyen" readonly="readonly" value="<?= $personelim["id"] ?>" hidden="hidden"> 
	 <input type="hidden" id="islemtarihi" class="form-control text-danger" placeholder="İŞLEM TARİHİ" name="islemtarihi" value="<?php echo date('Y-m-d H:i'); ?>" />
<div class="col-md-12">  
 <div class="form-group">                   
   <label class="control-label">İZİN TÜRÜ</label>
       <select class="form-control custom-select" id="izinturu" data-placeholder="İzin Türü Seçiniz" tabindex="1" name="izinturu">
 <option class="text-success" value="yillik">YILLIK İZİN</option>
 <option class="text-danger" value="ucretsiz">ÜCRETSİZ İZİN</option>
 <option class="text-warning" value="olum">ÖLÜM İZNİ</option>
 <option class="text-primary" value="dogum">DOĞUM İZNİ</option>
 </select>
 </div>
</div>
<div class="col-md-12">
<div class="form-group"> 
 <label class="control-label">İZİN BAŞLAMA TARİHİ</label>
 <input type="text" id="izincikis" class="form-control text-danger tarih" placeholder="İZİN BAŞLAMA TARİHİ" name="izincikis">
      </div>
</div>
<div class="col-md-12">
<div class="form-group"> 
 <label class="control-label">İZİN BİTİŞ TARİHİ</label>
 <input type="text" id="izindonus" class="form-control text-success tarih" placeholder="İZİN BİTİŞ TARİHİ" name="izindonus">
      </div>
</div>

<div class="col-md-12">
<div class="form-group"> 
 <label class="control-label">İZİN GÜN SAYISI</label>
 <input type="text" id="izinsayisi" class="form-control text-warning" placeholder="İZİN GÜN SAYISI"  readonly="readonly" name="izinsayisi">
      </div>
</div>
<div class="col-md-12">
<div class="form-group"> 
 <label class="control-label">İZİN KESİNTİ ÜCRETİ</label>
 <input type="text" id="ucret" class="form-control text-danger sayi" placeholder="İZİN KESİNTİ ÜCRETİ"  name="ucret" value="0">
      </div>
</div>
<div class="col-md-12">
         <div class="form-group">                        
   <label class="control-label">AÇIKLAMA</label>
 <textarea class="form-control text-success" id="aciklama" rows="3" name="aciklama"></textarea>            
                                          </div>
</div>
<div class="col-md-12">
         <div class="form-group">
<input type="hidden" class="form-control" name="izinekle">
		<button name="kaydet" type="submit" class="btn btn-success btn-raised btn-block">
Kaydet</button>
                                          </div>
</div>
</form>
<?php }?>
	<?php 
 if ($kbilgi["personelizinekle"]!=1) {?>
 	<h1 class="text-danger">BU SAYFAYI GÖRÜNTÜLEMEYE YETKİNİZ YOK </h1>
 <?php }?>
    </div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-outline-<?= $tema['tablorenk']?>" data-dismiss="modal">
							Kapat</button>
                       
                        </div>
                      </div>
                    </div>
                  </div>	
<div class="modal fade bd-example-modal-md" id="MaasEkle" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-md">
                      <div class="modal-content bg-<?= $tema['arkaplan']?>">
                        <div class="modal-header bg-<?= $tema['tablorenk']?>">
                          <h4 class="modal-title" id="myModalLabel8">MAAŞ EKLE</h4>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">X</span>
                          </button>
                        </div>


                                            <div class="modal-body table-responsive">

                <?php 
 if ($kbilgi["personelmaasekle"]==1) {?>
	<form id="PersonelMaasEkle" action="javascript:void(0);">
<div class="row">

<input type="text" name="ekleyen" class="form-control" placeholder="ekleyen" readonly="readonly" value="<?= $kbilgi["id"] ?>" hidden="hidden">   
<input type="text" name="personelid" class="form-control" placeholder="ekleyen" readonly="readonly" value="<?= $personelim["id"] ?>" hidden="hidden"> 

<div class="col-md-12">
         <div class="form-group">                        
   <label class="control-label">İŞLEM TARİHİ</label>
	 <input type="text" id="islemtarihi" class="form-control text-danger tarih" placeholder="İŞLEM TARİHİ" name="islemtarihi" value="<?php echo date('Y-m-d H:i'); ?>" />        
                                          </div>
</div>
<div class="col-md-12">
         <div class="form-group">                        
   <label class="control-label">MAAŞ</label>
	       <select class="form-control custom-select" id="maasi" data-placeholder="İzin Türü Seçiniz" tabindex="1" name="maas">
 <option class="text-success" value="0">0,00</option>
 <option class="text-danger" value="<?= $personelim["maas"] ?>"><?= number_format($personelim["maas"], 2, ',', '.'); ?></option>
 </select>     
                                          </div>
</div>
<div class="col-md-12">
         <div class="form-group">                        
   <label class="control-label">AGİ</label>
	       <select class="form-control custom-select" id="agisi" data-placeholder="İzin Türü Seçiniz" tabindex="1" name="agi">
 <option class="text-success" value="0">0,00</option>
 <option class="text-danger" value="<?= $personelim["agi"] ?>"><?= number_format($personelim["agi"], 2, ',', '.'); ?></option>
 </select>       
                                          </div>
</div>
<div class="col-md-12">
         <div class="form-group">                        
   <label class="control-label">AGİLİ MAAŞ</label>
	 <input type="text" id="agilimaas" class="form-control text-danger sayi" placeholder="AGİLİ MAAŞ" name="agilimaas">        
                                          </div>
</div>
<div class="col-md-12">
         <div class="form-group">                        
   <label class="control-label">AÇIKLAMA</label>
 <textarea class="form-control text-success" id="aciklama" rows="3" name="aciklama"></textarea>            
                                          </div>
</div>
<div class="col-md-12">
         <div class="form-group">
<input type="hidden" class="form-control" name="maasekle">
		<button name="kaydet" type="submit" class="btn btn-success btn-raised btn-block">
Kaydet</button>
                                          </div>
</div>
</form>
<?php }?>
	<?php 
 if ($kbilgi["personelmaasekle"]!=1) {?>
 	<h1 class="text-danger">BU SAYFAYI GÖRÜNTÜLEMEYE YETKİNİZ YOK </h1>
 <?php }?>
    </div>

                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-outline-<?= $tema['tablorenk']?>" data-dismiss="modal">
							Kapat</button>
                       
                        </div>
                      </div>
                    </div>
                  </div>	

<div class="modal fade bd-example-modal-md" id="OdemeEkle" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-md">
                      <div class="modal-content bg-<?= $tema['arkaplan']?>">
                        <div class="modal-header bg-<?= $tema['tablorenk']?>">
                          <h4 class="modal-title" id="myModalLabel8">ÖDEME EKLE</h4>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">X</span>
                          </button>
                        </div>
                                                                  <div class="modal-body table-responsive">

                <?php 
 if ($kbilgi["personelodemeekle"]==1) {?>
	<form id="PersonelOdemeEkle" action="javascript:void(0);">
<div class="row">

<input type="text" name="ekleyen" class="form-control" placeholder="ekleyen" readonly="readonly" value="<?= $kbilgi["id"] ?>" hidden="hidden">   
<input type="text" name="personelid" class="form-control" placeholder="ekleyen" readonly="readonly" value="<?= $personelim["id"] ?>" hidden="hidden"> 

<div class="col-md-12">
         <div class="form-group">                        
   <label class="control-label">İŞLEM TARİHİ</label>
	 <input type="text" id="islemtarihi" class="form-control text-danger tarih" placeholder="İŞLEM TARİHİ" name="islemtarihi" value="<?php echo date('Y-m-d H:i'); ?>" />        
                                          </div>
</div>
<div class="col-md-12">
         <div class="form-group">                        
   <label class="control-label">ÖDEME TÜRÜ</label>
	       <select class="form-control custom-select" id="odemeturu" data-placeholder="İzin Türü Seçiniz" tabindex="1" name="odemeturu">
 <option class="text-primary" value="avans">AVANS ÖDEMESİ</option>
 <option class="text-success" value="maas">MAAŞ ÖDEMESİ</option>
 </select>     
                                          </div>
</div>

<div class="col-md-12">
         <div class="form-group">                        
   <label class="control-label">ÖDEME TUTARI</label>
	 <input type="text" id="odemetutari" class="form-control text-danger sayi" placeholder=ÖDEME TUTARI" name="odeme">        
                                          </div>
</div>
<div class="col-md-12">
         <div class="form-group">                        
   <label class="control-label">AÇIKLAMA</label>
 <textarea class="form-control text-success" id="aciklama" rows="3" name="aciklama"></textarea>            
                                          </div>
</div>
<div class="col-md-12">
         <div class="form-group">
<input type="hidden" class="form-control" name="odemeekle">
		<button name="kaydet" type="submit" class="btn btn-success btn-raised btn-block">
Kaydet</button>
                                          </div>
</div>
</form>
<?php }?>
	<?php 
 if ($kbilgi["personelodemeekle"]!=1) {?>
 	<h1 class="text-danger">BU SAYFAYI GÖRÜNTÜLEMEYE YETKİNİZ YOK </h1>
 <?php }?>
    </div>
</div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-outline-<?= $tema['tablorenk']?>" data-dismiss="modal">
							Kapat</button>
                       
                        </div>
                      </div>
                    </div>
                  </div>
<div class="modal fade bd-example-modal-md" id="duzenle" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-md">
                      <div class="modal-content bg-<?= $tema['arkaplan']?>">
                        <div class="modal-header bg-<?= $tema['tablorenk']?>">
                          <h4 class="modal-title" id="myModalLabel8">DÜZENLE</h4>
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
$('#PersonelMesaiEkle').on('submit',function(e){
	e.preventDefault();
	$.ajax({
		url: 'Islem/Personel.php', // Verileri Post Ettiğimiz dosya adı
		type: 'POST', // Form Metodumuz
		data: new FormData(this), // Form ile gelen verilerimiz
		contentType: false,
		processData: false,

		success: function(data){
			$('#sonuc').html(data);


		}
	});
});
  </script>

<script>
$(document).ready(function(){
	
	$(document).on('click', '#mesaiduzenleme', function(e){
		
		e.preventDefault();
		
		var uid = $(this).data('id');   // it will get id of clicked row
		
		$('#dynamic-content').html(''); // leave it blank before ajax call
		$('#modal-loader').show();      // load ajax loader
		
		$.ajax({
			url: 'Islem/Personel.php',
			type: 'POST',
			data: 'mesaiduzenleme='+uid,
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
	<script>
$('#PersonelIzinEkle').on('submit',function(e){
	e.preventDefault();
	$.ajax({
		url: 'Islem/Personel.php', // Verileri Post Ettiğimiz dosya adı
		type: 'POST', // Form Metodumuz
		data: new FormData(this), // Form ile gelen verilerimiz
		contentType: false,
		processData: false,

		success: function(data){
			$('#sonuc').html(data);


		}
	});
});
  </script>
<script>
$(document).ready(function(){
	
	$(document).on('click', '#izinduzenleme', function(e){
		
		e.preventDefault();
		
		var uid = $(this).data('id');   // it will get id of clicked row
		
		$('#dynamic-content').html(''); // leave it blank before ajax call
		$('#modal-loader').show();      // load ajax loader
		
		$.ajax({
			url: 'Islem/Personel.php',
			type: 'POST',
			data: 'izinduzenleme='+uid,
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
	<script>
$('#PersonelMaasEkle').on('submit',function(e){
	e.preventDefault();
	$.ajax({
		url: 'Islem/Personel.php', // Verileri Post Ettiğimiz dosya adı
		type: 'POST', // Form Metodumuz
		data: new FormData(this), // Form ile gelen verilerimiz
		contentType: false,
		processData: false,

		success: function(data){
			$('#sonuc').html(data);


		}
	});
});
  </script>
<script>
$(document).ready(function(){
	
	$(document).on('click', '#maasduzenleme', function(e){
		
		e.preventDefault();
		
		var uid = $(this).data('id');   // it will get id of clicked row
		
		$('#dynamic-content').html(''); // leave it blank before ajax call
		$('#modal-loader').show();      // load ajax loader
		
		$.ajax({
			url: 'Islem/Personel.php',
			type: 'POST',
			data: 'maasduzenleme='+uid,
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

<script>
$('#PersonelOdemeEkle').on('submit',function(e){
	e.preventDefault();
	$.ajax({
		url: 'Islem/Personel.php', // Verileri Post Ettiğimiz dosya adı
		type: 'POST', // Form Metodumuz
		data: new FormData(this), // Form ile gelen verilerimiz
		contentType: false,
		processData: false,

		success: function(data){
			$('#sonuc').html(data);


		}
	});
});
  </script>
<script>
$(document).ready(function(){
	
	$(document).on('click', '#odemeduzenleme', function(e){
		
		e.preventDefault();
		
		var uid = $(this).data('id');   // it will get id of clicked row
		
		$('#dynamic-content').html(''); // leave it blank before ajax call
		$('#modal-loader').show();      // load ajax loader
		
		$.ajax({
			url: 'Islem/Personel.php',
			type: 'POST',
			data: 'odemeduzenleme='+uid,
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
<script>
        $(document).ready(function(){
            $(document).on('click', '#mesaisil', function(e){
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
                    data: 'mesaisil='+productId, // Formdaki tüm verileri al
                    success: function(oldu){ // Eğer işlem başarılı olursa sonuç
                        window.location.reload()
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
            $(document).on('click', '#odemesil', function(e){
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
                    data: 'odemesil='+productId, // Formdaki tüm verileri al
                    success: function(oldu){ // Eğer işlem başarılı olursa sonuç
                        window.location.reload()
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
            $(document).on('click', '#maassil', function(e){
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
                    data: 'maassil='+productId, // Formdaki tüm verileri al
                    success: function(oldu){ // Eğer işlem başarılı olursa sonuç
                        window.location.reload()
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
            $(document).on('click', '#izinsil', function(e){
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
                    data: 'izinsil='+productId, // Formdaki tüm verileri al
                    success: function(oldu){ // Eğer işlem başarılı olursa sonuç
                        window.location.reload()
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
$( "#sure, #ucret" ).keyup(function() {
var suresi = parseFloat($("#sure").val());
var ucreti = parseFloat($("#ucret").val());

$("#mesaitutar").val(suresi*ucreti);

});
</script>
<script>
$( "#maasi, #agisi" ).change(function() {
var maasi = parseFloat($("#maasi").val());
var agisi = parseFloat($("#agisi").val());

$("#agilimaas").val(maasi+agisi);

});
</script>
<script>
$( "#izincikis, #izindonus" ).change(function() {
var cikis = $("#izincikis").val();
var donus = $("#izindonus").val();
    

   
   // Date fonksiyonu  aa/gg/yyyy formatında zamanı almaktadır.
            var tarih1 = new Date(cikis);
            var tarih2 = new Date(donus);
            //iki tarih arasındaki saat farkını hesaplamak için aşağıdaki yöntemi kullanabiliriz.
            var zamanFark = Math.abs(tarih2.getTime() - tarih1.getTime());
            
            //zamanFark değişkeni ile elde edilen saati güne çevirmek için aşağıdaki yöntem kullanılabilir.
            var gunFark = Math.ceil(zamanFark / (1000 * 3600 * 24)); 
            
            
  
$("#izinsayisi").val(gunFark);


});
</script>

	
</body>
</html>

	