
<!-- Sidebar -->
		<div class="sidebar" data-background-color="<?= $tema['yanmenuarka']?>">			
			<div class="sidebar-wrapper scrollbar scrollbar-inner">
				<div class="sidebar-content">

					<div class="user">
						<div class="info">
							<a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
								<span>
									<?= $kbilgi['ad']?> <?= $kbilgi['soyad']?>
<?php 
 if ($kbilgi["yetki"]==1) {?>
									<span class="user-level text-info">Muhasebe</span>
<?php }?>
<?php 
 if ($kbilgi["yetki"]==2) {?>
									<span class="user-level text-primary">Muhasebe Müdürü</span>
<?php }?>
<?php 
 if ($kbilgi["yetki"]==3) {?>
									<span class="user-level text-success">Genel Müdür</span>
<?php }?>
<?php 
 if ($kbilgi["yetki"]==4) {?>
									<span class="user-level text-danger">Patron</span>
<?php }?>
									<span class="caret"></span>
								</span>
							</a>
							<div class="clearfix"></div>

							<div class="collapse in" id="collapseExample">
								<ul class="nav">
									<li>
										<a href="Profilim.php">
											<span class="link-collapse">Profilim</span>
										</a>
									</li>
									<li>
										<a href="ProfilimiDuzenle.php">
											<span class="link-collapse">Profilimi Düzenle</span>
										</a>
									</li>
									<li>
										<a href="Ajandam.php">
											<span class="link-collapse">Ajandam</span>
											
										</a>
									</li>
	<li>
										<a href="Mesajlar.php">
											<span class="link-collapse">Mesajlar</span>
											
										</a>
									</li>
<?php 
 if ($kbilgi["yetki"]==4) {?>	
<li>
		<a href="UyelerArasiMesajlar.php">
											<span class="link-collapse">Üyeler Arası Mesajlar</span>
											
										</a>
</li>
<?php }?>

									
								</ul>
							</div>
						</div>
					</div>
					<ul class="nav nav-<?= $tema['tablorenk']?>">
						<li class="nav-item">
							<a href="index.php">
								<i class="fas fa-home"></i>
								<p>ANASAYFA</p>
								
							</a>
						</li>
<?php 
 if ($kbilgi["yetki"]==4 or $kbilgi["yetki"]==3) {?>	
					<li class="nav-item">
							<a data-toggle="collapse" href="#gunluk">
								<i class="fas fa-chart-bar"></i>
								<p>GÜNLÜK İŞLEMLER</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="gunluk">
								<ul class="nav nav-collapse">
									<li>
										<a href="GunlukSatislar.php">
										
											<i class="fas fa-file-export"></i>
								<p>Satışlar</p>
								<?php
$satisfaturalari=$baglanti->prepare("SELECT count(*) AS toplam FROM SatFatBilgi where DAY(faturatarihi) = DAY(CURDATE())");
$satisfaturalari->execute();
$satisfaturalariyaz= $satisfaturalari->fetch();
$satisfaturalaritoplam=$satisfaturalariyaz['toplam'];
?>
								<span class="text-right badge badge-danger"><?= $satisfaturalaritoplam;
  ?></span>
										</a>
									</li>
<li>
										<a href="GunlukAlislar.php">
										
											<i class="fas fa-file-import"></i>
								<p>Alışlar</p>
								<?php
$alisfaturalari=$baglanti->prepare("SELECT count(*) AS toplam FROM AlFatBilgi where DAY(faturatarihi) = DAY(CURDATE())");
$alisfaturalari->execute();
$alisfaturalariyaz= $alisfaturalari->fetch();
$alisfaturalaritoplam=$alisfaturalariyaz['toplam'];
?>
								<span class="text-right badge badge-success"><?= $alisfaturalaritoplam;
  ?></span>
										</a>
									</li>
<li>
										<a href="GunlukCariislem.php">
										
											<i class="fas fa-book-reader"></i>
								<p>Cari İşlemler</p>
								<?php
$cariislemler=$baglanti->prepare("SELECT count(*) AS toplam FROM CariIslem where DAY(tarih) = DAY(CURDATE())");
$cariislemler->execute();
$cariislemleryaz= $cariislemler->fetch();
$cariislemlertoplam=$cariislemleryaz['toplam'];
?>
								<span class="text-right badge badge-primary"><?= $cariislemlertoplam;
  ?></span>
										</a>
									</li>
<li>
										<a href="GunlukKasaIslem.php">
										
											<i class="fas fa-coins"></i>
								<p>Kasa İşlemleri</p>
								<?php
$kasaislemler=$baglanti->prepare("SELECT count(*) AS toplam FROM KasaGiris where DAY(islemtarihi) = DAY(CURDATE())");
$kasaislemler->execute();
$kasaislemleryaz= $kasaislemler->fetch();
$kasaislemlertoplam=$kasaislemleryaz['toplam'];
?>
								<span class="text-right badge badge-warning"><?= $kasaislemlertoplam;
  ?></span>
										</a>
									</li>
<li>
										<a href="GunlukBankaIslem.php">
										
											<i class="fas fa-building"></i>
								<p>Banka İşlemleri</p>
								<?php
$bankaislemler=$baglanti->prepare("SELECT count(*) AS toplam FROM BankaGiris where DAY(islemtarihi) = DAY(CURDATE())");
$bankaislemler->execute();
$bankaislemleryaz= $bankaislemler->fetch();
$bankaislemlertoplam=$bankaislemleryaz['toplam'];
?>
								<span class="text-right badge badge-secondary"><?= $bankaislemlertoplam;
  ?></span>
										</a>
									</li>
<li>
										<a href="GunlukCekSenetIslem.php">
										
											<i class="fas fa-money-check"></i>
								<p>Çek-Senet İşlem</p>
								<?php
$ceksenetislemler=$baglanti->prepare("SELECT count(*) AS toplam FROM CekSenet where DAY(islemtarihi) = DAY(CURDATE())");
$ceksenetislemler->execute();
$ceksenetislemleryaz= $ceksenetislemler->fetch();
$ceksenetislemlertoplam=$ceksenetislemleryaz['toplam'];
?>
								<span class="text-right badge badge-info"><?= $ceksenetislemlertoplam;
  ?></span>
										</a>
									</li>
<li>
										<a href="GunlukDepoIslem.php">
										
											<i class="fas fa-dolly-flatbed"></i>
								<p>Depo İşlem</p>
<?php
$depoislemler=$baglanti->prepare("SELECT count(*) AS toplam FROM DepoTransfer where DAY(islemtarihi) = DAY(CURDATE())");
$depoislemler->execute();
$depoislemleryaz= $depoislemler->fetch();
$depoislemlertoplam=$depoislemleryaz['toplam'];
?>
								<span class="text-right badge badge-danger"><?= $depoislemlertoplam;
  ?></span>
										</a>
									</li>
									
	
								</ul>
							</div>
						</li>
<?php }?>
						<li class="nav-item">
							<a data-toggle="collapse" href="#cari">
								<i class="fas fa-address-card"></i>
								<p>CARİ KARTLAR</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="cari">
								<ul class="nav nav-collapse">
									<li>
										<a href="Cariler.php">
										
											<i class="fas fa-users"></i>
								<p>Cariler</p>
								<?php
$cariler=$baglanti->prepare("SELECT count(*) AS toplam FROM Cariler");
$cariler->execute();
$cariyaz= $cariler->fetch();
$caritoplam=$cariyaz['toplam'];
?>
								<span class="text-right badge badge-primary"><?= $caritoplam;
  ?> Cari</span>
										</a>
									</li>
									<li>
										<a href="CariEkle.php">
										
											<i class="fas fa-user-edit"></i>
								<p>Cari Ekle</p>
										</a>
									</li>
		<li>
										<a href="BorcluCariler.php">
										
											<i class="fas fa-user-minus"></i>
								<p>Borçlu Cariler</p>
										</a>
									</li>
	<li>
										<a href="AlacakliCariler.php">
										
											<i class="fas fa-user-plus"></i>
								<p>Alacaklı Cariler</p>
										</a>
									</li>
	<li>
										<a href="CariGruplar.php">
										
											<i class="fas fa-chalkboard-teacher"></i>
								<p>Cari Gruplar</p>
										</a>
									</li>
	<li>
										<a href="ParaBirimleri.php">
										
											<i class="fas fa-lira-sign"></i>
								<p>Para Birimleri</p>
										</a>
									</li>
	
								</ul>
							</div>
						</li>
					
						<li class="nav-item">
							<a data-toggle="collapse" href="#stok">
								<i class="fas fa-box"></i>
								<p>STOK KARTLARI</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="stok">
								<ul class="nav nav-collapse">
									<li>
										<a href="Urunler.php">
										
											<i class="fas fa-boxes"></i>
								<p>Stoklar</p>
								<?php
$urunler=$baglanti->prepare("SELECT count(*) AS toplam FROM Urunler");
$urunler->execute();
$urunyaz= $urunler->fetch();
$uruntoplam=$urunyaz['toplam'];
?>
								<span class="badge badge-success"><?= $uruntoplam; ?> Ürün</span>
										</a>
									</li>
									<li>
										<a href="UrunEkle.php">
										
											<i class="fas fa-file-medical"></i>
								<p>Stok Kartı Ekle</p>
										</a>
									</li>
									
<li>
										<a href="StokGruplar.php">
										
											<i class="fas fa-cubes"></i>
								<p>Gruplar</p>
							<?php
$stokgrup=$baglanti->prepare("SELECT count(*) AS toplam FROM StokGruplar");
$stokgrup->execute();
$stokgrupyaz= $stokgrup->fetch();
$stokgruptoplam=$stokgrupyaz['toplam'];
?>
								<span class="badge badge-primary"><?= $stokgruptoplam; ?> Grup</span>
										</a>
									</li>
									
									
									<li>
										<a href="Birimler.php">
										
											<i class="fas fa-balance-scale"></i>
								<p>Birimler</p>
							<?php
$birim=$baglanti->prepare("SELECT count(*) AS toplam FROM Birim");
$birim->execute();
$birimyaz= $birim->fetch();
$birimtoplam=$birimyaz['toplam'];
?>
								<span class="badge badge-info"><?= $birimtoplam; ?> Birim</span>
										</a>
									</li>
	<li>
										<a href="Markalar.php">
										
											<i class="fas fa-dove"></i>
								<p>Markalar</p>
							<?php
$marka=$baglanti->prepare("SELECT count(*) AS toplam FROM Markalar");
$marka->execute();
$markayaz= $marka->fetch();
$markatoplam=$markayaz['toplam'];
?>
								<span class="badge badge-secondary"><?= $markatoplam; ?> Marka</span>
										</a>
									</li>
<li>
										<a href="Modeller.php">
										
											<i class="fas fa-info-circle"></i>
								<p>Modeller</p>
							<?php
$model=$baglanti->prepare("SELECT count(*) AS toplam FROM Modeller");
$model->execute();
$modelyaz= $model->fetch();
$modeltoplam=$modelyaz['toplam'];
?>
								<span class="badge badge-warning"><?= $modeltoplam; ?> Model</span>
										</a>
									</li>
<li>
										<a href="Kdvler.php">
										
											<i class="fas fa-percent"></i>
								<p>KDV</p>
<?php
$kdv=$baglanti->prepare("SELECT count(*) AS toplam FROM Kdvler");
$kdv->execute();
$kdvyaz= $kdv->fetch();
$kdvtoplam=$kdvyaz['toplam'];
?>
								<span class="badge badge-danger"><?= $kdvtoplam; ?> Kdv</span>
										</a>
									</li>

								</ul>
							</div>
						</li>
	<li class="nav-item">
							<a data-toggle="collapse" href="#faturacari">
								<i class="fas fa-file-invoice"></i>
								<p>FATURA VE CARİ İŞLEM</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="faturacari">
								<ul class="nav nav-collapse">
									<li>
										<a href="AlisFaturalari.php">
										
											<i class="fas fa-file-import"></i>
								<p>Alışlar</p>
								<?php
$alfat=$baglanti->prepare("SELECT count(*) AS toplam FROM AlFatBilgi");
$alfat->execute();
$alfatyaz= $alfat->fetch();
$alfattoplam=$alfatyaz['toplam'];
?>
								<span class="badge badge-danger"><?= $alfattoplam; ?> Fatura</span>
										</a>
									</li>
<li>
										<a href="AlisFaturasiEkle.php">
										
											<i class="fas fa-plus"></i>
								<p>Alış Faturası Ekle</p>
										</a>
									</li>
									<li>
										<a href="SatisFaturalari.php">
										
											<i class="fas fa-file-export"></i>
								<p>Satışlar</p>
<?php
$satfat=$baglanti->prepare("SELECT count(*) AS toplam FROM SatFatBilgi");
$satfat->execute();
$satfatyaz= $satfat->fetch();
$satfattoplam=$satfatyaz['toplam'];
?>
								<span class="badge badge-success"><?= $satfattoplam; ?> Fatura</span>
										</a>
									</li>
<li>
										<a href="SatisFaturasiEkle.php">
										
											<i class="fas fa-plus"></i>
								<p>Satış Faturası Ekle</p>
										</a>
									</li>
									<li>
										<a href="CariIslemler.php">
										
											<i class="fas fa-book-reader"></i>
								<p>Cari İşlemler</p>
<?php
$cariislem=$baglanti->prepare("SELECT count(*) AS toplam FROM CariIslem");
$cariislem->execute();
$cariislemyaz= $cariislem->fetch();
$cariislemtoplam=$cariislemyaz['toplam'];
?>
								<span class="badge badge-warning"><?= $cariislemtoplam; ?> İşlem</span>
										</a>
									</li>
							<li>
										<a href="CariAlacaklandir.php">
										
											<i class="fas fa-plus"></i>
								<p>Cari Alacaklandırma</p>
										</a>
									</li>
									<li>
										<a href="CariBorclandir.php">
										
											<i class="fas fa-minus"></i>
								<p>Cari Borçlandırma</p>
										</a>
									</li>
	
								</ul>
							</div>
						</li>
						<li class="nav-item">
							<a data-toggle="collapse" href="#ceksenet">
								<i class="fas fa-money-check"></i>
								<p>ÇEK VE SENETLER</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="ceksenet">
								<ul class="nav nav-collapse">
									<li>
										<a href="VerilenCekler.php">
										
											<i class="fas fa-file-export"></i>
								<p>Verilen Çekler</p>
<?php
$vcek=$baglanti->prepare("SELECT count(*) AS toplam FROM CekSenet where islem='verilen' and ceksenet='cek'");
$vcek->execute();
$vcekyaz= $vcek->fetch();
$vcektoplam=$vcekyaz['toplam'];
?>
								<span class="badge badge-danger"><?= $vcektoplam;
  ?></span>
										</a>
									</li>
									<li>
										<a href="AlinanCekler.php">
										
											<i class="fas fa-file-import"></i>
								<p>Alınan Çekler</p>
<?php
$acek=$baglanti->prepare("SELECT count(*) AS toplam FROM CekSenet where islem='alinan' and ceksenet='cek'");
$acek->execute();
$acekyaz= $acek->fetch();
$acektoplam=$acekyaz['toplam'];
?>
								<span class="badge badge-success"><?= $acektoplam;
  ?></span>
										</a>
									</li>
	<li>
										<a href="VerilenSenetler.php">
										
											<i class="fas fa-file-export"></i>
								<p>Verilen Senetler</p>
<?php
$vsenet=$baglanti->prepare("SELECT count(*) AS toplam FROM CekSenet where islem='verilen' and ceksenet='senet'");
$vsenet->execute();
$vsenetyaz= $vsenet->fetch();
$vsenettoplam=$vsenetyaz['toplam'];
?>
								<span class="badge badge-danger"><?= $vsenettoplam;
  ?></span>
										</a>
									</li>
									<li>
										<a href="AlinanSenetler.php">
										
											<i class="fas fa-file-import"></i>
								<p>Alınan Senetler</p>
<?php
$asenet=$baglanti->prepare("SELECT count(*) AS toplam FROM CekSenet where islem='alinan' and ceksenet='senet'");
$asenet->execute();
$asenetyaz= $asenet->fetch();
$asenettoplam=$asenetyaz['toplam'];
?>
								<span class="badge badge-success"><?= $asenettoplam;
  ?></span>
										</a>
									</li>
	
								</ul>
							</div>
						</li>
		<li class="nav-item">
							<a data-toggle="collapse" href="#kasa">
								<i class="fas fa-coins"></i>
								<p>KASA İŞLEMLERİ</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="kasa">
								<ul class="nav nav-collapse">
									<li>
										<a href="Kasalar.php">
										
											<i class="fas fa-wallet"></i>
								<p>Kasalar</p>
										</a>
									</li>
									
									<li>
										<a href="KasaGiris.php">
										
											<i class="fas fa-money-bill-alt"></i>
								<p>Giriş</p>
<?php
$kasaalistopla=$baglanti->prepare("SELECT count(*) AS toplam FROM KasaGiris where islem='kasagirdi'");
$kasaalistopla->execute();
$kasaalisyaz= $kasaalistopla->fetch();
$kasaalistoplam=$kasaalisyaz['toplam'];
?>
								<span class="badge badge-success"><?= $kasaalistoplam; ?> Giriş</span>
										</a>
									</li>
									<li>
										<a href="KasaCikis.php">
										
											<i class="fas fa-money-bill"></i>
								<p>Çıkış</p>
<?php
$kasasatistopla=$baglanti->prepare("SELECT count(*) AS toplam FROM KasaGiris where islem='kasacikti'");
$kasasatistopla->execute();
$kasasatisyaz= $kasasatistopla->fetch();
$kasasatistoplam=$kasasatisyaz['toplam'];
?>
<span class="badge badge-danger"><?= $kasasatistoplam; ?> Çıkış</span>										</a>
									</li>

	
								</ul>
							</div>
						</li>
						<li class="nav-item">
							<a data-toggle="collapse" href="#banka">
								<i class="fas fa-building"></i>
								<p>BANKA İŞLEMLERİ</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="banka">
								<ul class="nav nav-collapse">
									
<li>
										<a href="Bankalar.php">
										
											<i class="fas fa-wallet"></i>
								<p>Banka Hesapları</p>
										</a>
									</li>
									<li>
										<a href="BankaGiris.php">
										
											<i class="fas fa-money-bill-alt"></i>
								<p>Giriş</p>
<?php
$bankaalistopla=$baglanti->prepare("SELECT count(*) AS toplam FROM BankaGiris where islem='bankagirdi'");
$bankaalistopla->execute();
$bankaalisyaz= $bankaalistopla->fetch();
$bankaalistoplam=$bankaalisyaz['toplam'];
?>
<span class="badge badge-success"><?= $bankaalistoplam; ?> Giriş</span>	
										</a>
									</li>
									<li>
										<a href="BankaCikis.php">
										
											<i class="fas fa-money-bill"></i>
								<p>Çıkış</p>
<?php
$bankasatistopla=$baglanti->prepare("SELECT count(*) AS toplam FROM BankaGiris where islem='bankacikti'");
$bankasatistopla->execute();
$bankasatisyaz= $bankasatistopla->fetch();
$bankasatistoplam=$bankasatisyaz['toplam'];
?>
<span class="badge badge-danger"><?= $bankasatistoplam; ?> Çıkış</span>
										</a>
									</li>
	
								</ul>
							</div>
						</li>
<li class="nav-item">
							<a data-toggle="collapse" href="#depo">
								<i class="fas fa-dolly-flatbed"></i>
								<p>DEPO İŞLEMLERİ</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="depo">
								<ul class="nav nav-collapse">
									<li>
										<a href="Depolar.php">
										
											<i class="fas fa-cubes"></i>
								<p>Depolar</p>
<?php
$depo=$baglanti->prepare("SELECT count(*) AS toplam FROM Depolar");
$depo->execute();
$depoyaz= $depo->fetch();
$depotoplam=$depoyaz['toplam'];
?>
								<span class="badge badge-primary"><?= $depotoplam; ?> Depo</span>
										</a>
									</li>
									<li>
										<a href="DepoTransferleri.php">
										
											<i class="fas fa-angle-double-right"></i>
								<p>Transfer</p>
<?php
$depotransfer=$baglanti->prepare("SELECT count(*) AS toplam FROM DepoTransfer");
$depotransfer->execute();
$depotransferyaz= $depotransfer->fetch();
$depotransfertoplam=$depotransferyaz['toplam'];
?>
								<span class="badge badge-danger"><?= $depotransfertoplam; ?> Transfer</span>
										</a>
									</li>
	
								</ul>
							</div>
						</li>
						
					
	<li class="nav-item">
							<a href="Istatistikler.php">
								<i class="fas fa-chart-pie"></i>
								<p>İSTATİSTİKLER</p>
							
							</a>
						</li>
							

							<?php 
 if ($kbilgi["yetki"]==4) {?>
<li class="nav-item">
							<a href="Kullanicilar.php">
								<i class="fas fa-user-friends"></i>
								<p>KULLANICILAR</p>
								<?php
$kullanicilar=$baglanti->prepare("SELECT count(*) AS toplam FROM Kullanicilar");
$kullanicilar->execute();
$kullaniciyaz= $kullanicilar->fetch();
$kullanicitoplam=$kullaniciyaz['toplam'];
?>
								<span class="badge badge-success"><?= $kullanicitoplam;
  ?></span>
							</a>
						</li>
						<?php }?>
			<?php 
 if ($kbilgi["yetki"]==4 or $kbilgi["yetki"]==3) {?>
<li class="nav-item">
							<a href="Personeller.php">
								<i class="fas fa-users"></i>
								<p>PERSONELLER</p>
								<?php
$personeller=$baglanti->prepare("SELECT count(*) AS toplam FROM Personeller");
$personeller->execute();
$personelyaz= $personeller->fetch();
$personeltoplam=$personelyaz['toplam'];
?>
								<span class="badge badge-primary"><?= $personeltoplam;
  ?></span>
							</a>
						</li>
						<?php }?>
<?php 
 if ($kbilgi["yetki"]==4 or $kbilgi["yetki"]==3) {?>	
	<li class="nav-item">
							<a data-toggle="collapse" href="#ayar">
								<i class="fas fa-cogs"></i>
								<p>AYARLAR</p>
								<span class="caret"></span>
					
							</a>
							<div class="collapse" id="ayar">
								<ul class="nav nav-collapse">
	<li>
										<a href="Tema.php">
										
											<i class="fas fa-th"></i>
								<p>TEMA AYARLARI</p>
										</a>
									</li>
									<li>
										<a href="AyarDuzenle.php">
										
											<i class="fas fa-cog"></i>
								<p>SİTE AYARLARI</p>
										</a>
									</li>
							
	
	
	
								</ul>
							</div>
						</li>
<?php }?>
						<?php 
 if ($kbilgi["yetki"]==4 or $kbilgi["yetki"]==3) {?>	
	<li class="nav-item">
							<a data-toggle="collapse" href="#yedek">
								<i class="fas fa-database"></i>
								<p>VERİTABANI İŞLEMLERİ</p>
								<span class="caret"></span>
					
							</a>
							<div class="collapse" id="yedek">
								<ul class="nav nav-collapse">
	<li>
										<a href="VeriTabaniYedekleri.php">
										
											<i class="fab fa-stack-overflow"></i>
								<p>YEDEK VERİTABANLARI</p>
										</a>
									</li>
									<li>
										<a href="VeriTabaniYedekle.php">
										
											<i class="fas fa-copy"></i>
								<p>YEDEKLE</p>
										</a>
									</li>
							
	
	
	
								</ul>
							</div>
						</li>
<?php }?>
		<li class="nav-item">
													<form id="Cikis2" action="javascript:void(0);">
<input type="hidden" class="form-control" name="cikisyap">
<button type="submit" class="btn btn-danger btn-block btn-lg fas fa-power-off" data-toggle="tooltip" title="Çıkış Yap"></button>
</form>	
						</li>


						</ul>
			
				</div>
			</div>

		</div>
		<!-- End Sidebar -->

