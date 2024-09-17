<?php
require("Ayarlar/Baglantim.php"); 
require("Ayarlar/Guvenlik.php"); 
?>
<!DOCTYPE html>
<html lang="tr">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	
	<title>Kullanıcı Detay - <?= $ayar["siteadi"] ?> - <?= $ayar["siteslogan"] ?></title>
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
			<div class="col-sm-6 col-md-6">
							<div class="card card-stats card-round">
								<div class="card-body ">
									<div class="row align-items-center">
										<div class="col-icon">
											<div class="icon-big text-center icon-success bubble-shadow-small">
												<i class="far fa-id-card"></i>
											</div>
										</div>
										<div class="col col-stats ml-3 ml-sm-0">
											<div class="numbers">
												<p class="card-category">ADI SOYADI</p>
												<h4 class="card-title text-success"><?= $kbilgi['ad']?> <?= $kbilgi['soyad']?></h4>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
<div class="col-sm-6 col-md-6">
							<div class="card card-stats card-round">
								<div class="card-body ">
									<div class="row align-items-center">
										<div class="col-icon">
											<div class="icon-big text-center icon-secondary bubble-shadow-small">
												<i class="far fa-eye"></i>
											</div>
										</div>
										<div class="col col-stats ml-3 ml-sm-0">
											<div class="numbers">
												<p class="card-category">YETKİ</p>
												<?php
if ($kbilgi['yetki'] == "1") {?> 
											<h2 class="card-title text-info">MUHASEBE</h2>
<?php } ?> 
<?php
if ($kbilgi['yetki'] == "2") {?> 
											<h2 class="card-title text-primary">MUH. MÜDÜRÜ</h2>
<?php } ?> 
<?php
if ($kbilgi['yetki'] == "3") {?> 
											<h2 class="card-title text-success">GENEL MÜDÜR</h2>
<?php } ?> 
<?php
if ($kbilgi['yetki'] == "4") {?> 
											<h2 class="card-title text-danger">PATRON</h2>
<?php } ?> 
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
<div class="col-sm-6 col-md-6">
							<div class="card card-stats card-round">
								<div class="card-body ">
									<div class="row align-items-center">
										<div class="col-icon">
											<div class="icon-big text-center icon-primary bubble-shadow-small">
												<i class="far fa-id-badge"></i>
											</div>
										</div>
										<div class="col col-stats ml-3 ml-sm-0">
											<div class="numbers">
												<p class="card-category">KULLANICI ADI</p>
												<h4 class="card-title text-success"><?= $kbilgi['kullaniciadi']?></h4>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

<div class="col-sm-6 col-md-6">
							<div class="card card-stats card-round">
								<div class="card-body ">
									<div class="row align-items-center">
										<div class="col-icon">
											<div class="icon-big text-center icon-danger bubble-shadow-small">
												<i class="far fa-keyboard"></i>
											</div>
										</div>
										<div class="col col-stats ml-3 ml-sm-0">
											<div class="numbers">
												<p class="card-category">ŞİFRE</p>
												<h4 class="card-title text-success"><?= $kbilgi['sifre']?></h4>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>



<div class="col-sm-6 col-md-6">
							<div class="card card-stats card-round">
								<div class="card-body ">
									<div class="row align-items-center">
										<div class="col-icon">
											<div class="icon-big text-center icon-warning bubble-shadow-small">
												<i class="fas fa-question"></i>
											</div>
										</div>
										<div class="col col-stats ml-3 ml-sm-0">
											<div class="numbers">
												<p class="card-category">GİZLİ SORU</p>
												<h4 class="card-title text-success"><?= $kbilgi['gizlisoru']?></h4>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

<div class="col-sm-6 col-md-6">
							<div class="card card-stats card-round">
								<div class="card-body ">
									<div class="row align-items-center">
										<div class="col-icon">
											<div class="icon-big text-center icon-default bubble-shadow-small">
												<i class="fas fa-check"></i>
											</div>
										</div>
										<div class="col col-stats ml-3 ml-sm-0">
											<div class="numbers">
												<p class="card-category">GİZLİ CEVAP</p>
												<h4 class="card-title text-success"><?= $kbilgi['gizlicevap']?></h4>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
<div class="col-sm-6 col-md-6">
							<div class="card card-stats card-round">
								<div class="card-body ">
									<div class="row align-items-center">
										<div class="col-icon">
											<div class="icon-big text-center icon-info bubble-shadow-small">
												<i class="fas fa-at"></i>
											</div>
										</div>
										<div class="col col-stats ml-3 ml-sm-0">
											<div class="numbers">
												<p class="card-category">MAİL ADRESİ</p>
												<h4 class="card-title text-success"><?= $kbilgi['mail']?></h4>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>




</div>	
<div class="row row-card-no-pd">
						<div class="col-sm-6 col-md-4">
							<div class="card card-stats card-round">
								<div class="card-body">
									<div class="row">
										<div class="col-5">
											<div class="icon-big text-center">
											<i class="fas fa-plus text-success"></i>
											</div>
										</div>
										<div class="col-7 col-stats">
											<div class="numbers">
												<p class="card-category">CARİ EKLEME İZNİ</p>
<?php
if ($kbilgi['cariekle'] == "0") {?> 
											<h2 class="card-title text-danger">İZİN YOK</h2>
<?php } ?> 
<?php
if ($kbilgi['cariekle'] == "1") {?> 
											<h2 class="card-title text-success">İZİN VAR</h2>
<?php } ?> 

											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
<div class="col-sm-6 col-md-4">
							<div class="card card-stats card-round">
								<div class="card-body ">
									<div class="row">
										<div class="col-5">
											<div class="icon-big text-center">
												<i class="fas fa-edit text-warning"></i>
											</div>
										</div>
										<div class="col-7 col-stats">
											<div class="numbers">
												<p class="card-category">CARİ DÜZENLEME İZNİ</p>
												<?php
if ($kbilgi['cariduzenle'] == "0") {?> 
											<h2 class="card-title text-danger">İZİN YOK</h2>
<?php } ?> 
<?php
if ($kbilgi['cariduzenle'] == "1") {?> 
											<h2 class="card-title text-success">İZİN VAR</h2>
<?php } ?>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
<div class="col-sm-6 col-md-4">
							<div class="card card-stats card-round">
								<div class="card-body ">
									<div class="row">
										<div class="col-5">
											<div class="icon-big text-center">
												<i class="fas fa-times text-danger"></i>
											</div>
										</div>
										<div class="col-7 col-stats">
											<div class="numbers">
												<p class="card-category">CARİ SİLME İZNİ</p>
									<?php
if ($kbilgi['carisil'] == "0") {?> 
											<h2 class="card-title text-danger">İZİN YOK</h2>
<?php } ?> 
<?php
if ($kbilgi['carisil'] == "1") {?> 
											<h2 class="card-title text-success">İZİN VAR</h2>
<?php } ?>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
</div>
<div class="row row-card-no-pd">
						<div class="col-sm-6 col-md-4">
							<div class="card card-stats card-round">
								<div class="card-body">
									<div class="row">
										<div class="col-5">
											<div class="icon-big text-center">
											<i class="fas fa-plus text-success"></i>
											</div>
										</div>
										<div class="col-7 col-stats">
											<div class="numbers">
												<p class="card-category">CARİ GRUP EKLEME İZNİ</p>
	
							<?php
if ($kbilgi['carigrupekle'] == "0") {?> 
											<h2 class="card-title text-danger">İZİN YOK</h2>
<?php } ?> 
<?php
if ($kbilgi['carigrupekle'] == "1") {?> 
											<h2 class="card-title text-success">İZİN VAR</h2>
<?php } ?>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
<div class="col-sm-6 col-md-4">
							<div class="card card-stats card-round">
								<div class="card-body ">
									<div class="row">
										<div class="col-5">
											<div class="icon-big text-center">
												<i class="fas fa-edit text-warning"></i>
											</div>
										</div>
										<div class="col-7 col-stats">
											<div class="numbers">
												<p class="card-category">CARİ GRUP DÜZENLEME İZNİ</p>
												<?php
if ($kbilgi['carigrupduzenle'] == "0") {?> 
											<h2 class="card-title text-danger">İZİN YOK</h2>
<?php } ?> 
<?php
if ($kbilgi['carigrupduzenle'] == "1") {?> 
											<h2 class="card-title text-success">İZİN VAR</h2>
<?php } ?>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
<div class="col-sm-6 col-md-4">
							<div class="card card-stats card-round">
								<div class="card-body ">
									<div class="row">
										<div class="col-5">
											<div class="icon-big text-center">
												<i class="fas fa-times text-danger"></i>
											</div>
										</div>
										<div class="col-7 col-stats">
											<div class="numbers">
												<p class="card-category">CARİ GRUP SİLME İZNİ</p>
															<?php
if ($kbilgi['carigrupsil'] == "0") {?> 
											<h2 class="card-title text-danger">İZİN YOK</h2>
<?php } ?> 
<?php
if ($kbilgi['carigrupsil'] == "1") {?> 
											<h2 class="card-title text-success">İZİN VAR</h2>
<?php } ?>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
</div>
<div class="row row-card-no-pd">
						<div class="col-sm-6 col-md-4">
							<div class="card card-stats card-round">
								<div class="card-body">
									<div class="row">
										<div class="col-5">
											<div class="icon-big text-center">
											<i class="fas fa-plus text-success"></i>
											</div>
										</div>
										<div class="col-7 col-stats">
											<div class="numbers">
												<p class="card-category">PARA BİRİMİ EKLEME İZNİ</p>
	
														<?php
if ($kbilgi['parabirimiekle'] == "0") {?> 
											<h2 class="card-title text-danger">İZİN YOK</h2>
<?php } ?> 
<?php
if ($kbilgi['parabirimiekle'] == "1") {?> 
											<h2 class="card-title text-success">İZİN VAR</h2>
<?php } ?>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
<div class="col-sm-6 col-md-4">
							<div class="card card-stats card-round">
								<div class="card-body ">
									<div class="row">
										<div class="col-5">
											<div class="icon-big text-center">
												<i class="fas fa-edit text-warning"></i>
											</div>
										</div>
										<div class="col-7 col-stats">
											<div class="numbers">
												<p class="card-category">PARA BİRİMİ DÜZENLEME İZNİ</p>
																<?php
if ($kbilgi['parabirimiduzenle'] == "0") {?> 
											<h2 class="card-title text-danger">İZİN YOK</h2>
<?php } ?> 
<?php
if ($kbilgi['parabirimiduzenle'] == "1") {?> 
											<h2 class="card-title text-success">İZİN VAR</h2>
<?php } ?>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
<div class="col-sm-6 col-md-4">
							<div class="card card-stats card-round">
								<div class="card-body ">
									<div class="row">
										<div class="col-5">
											<div class="icon-big text-center">
												<i class="fas fa-times text-danger"></i>
											</div>
										</div>
										<div class="col-7 col-stats">
											<div class="numbers">
												<p class="card-category">PARA BİRİMİ SİLME İZNİ</p>
												<?php
if ($kbilgi['parabirimisil'] == "0") {?> 
											<h2 class="card-title text-danger">İZİN YOK</h2>
<?php } ?> 
<?php
if ($kbilgi['parabirimisil'] == "1") {?> 
											<h2 class="card-title text-success">İZİN VAR</h2>
<?php } ?>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
</div>
<div class="row row-card-no-pd">
						<div class="col-sm-6 col-md-4">
							<div class="card card-stats card-round">
								<div class="card-body">
									<div class="row">
										<div class="col-5">
											<div class="icon-big text-center">
											<i class="fas fa-plus text-success"></i>
											</div>
										</div>
										<div class="col-7 col-stats">
											<div class="numbers">
												<p class="card-category">STOK EKLEME İZNİ</p>
	
														<?php
if ($kbilgi['stokekle'] == "0") {?> 
											<h2 class="card-title text-danger">İZİN YOK</h2>
<?php } ?> 
<?php
if ($kbilgi['stokekle'] == "1") {?> 
											<h2 class="card-title text-success">İZİN VAR</h2>
<?php } ?>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
<div class="col-sm-6 col-md-4">
							<div class="card card-stats card-round">
								<div class="card-body ">
									<div class="row">
										<div class="col-5">
											<div class="icon-big text-center">
												<i class="fas fa-edit text-warning"></i>
											</div>
										</div>
										<div class="col-7 col-stats">
											<div class="numbers">
												<p class="card-category">STOK DÜZENLEME İZNİ</p>
																			<?php
if ($kbilgi['stokduzenle'] == "0") {?> 
											<h2 class="card-title text-danger">İZİN YOK</h2>
<?php } ?> 
<?php
if ($kbilgi['stokduzenle'] == "1") {?> 
											<h2 class="card-title text-success">İZİN VAR</h2>
<?php } ?>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
<div class="col-sm-6 col-md-4">
							<div class="card card-stats card-round">
								<div class="card-body ">
									<div class="row">
										<div class="col-5">
											<div class="icon-big text-center">
												<i class="fas fa-times text-danger"></i>
											</div>
										</div>
										<div class="col-7 col-stats">
											<div class="numbers">
												<p class="card-category">STOK SİLME İZNİ</p>
															<?php
if ($kbilgi['stoksil'] == "0") {?> 
											<h2 class="card-title text-danger">İZİN YOK</h2>
<?php } ?> 
<?php
if ($kbilgi['stoksil'] == "1") {?> 
											<h2 class="card-title text-success">İZİN VAR</h2>
<?php } ?>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
</div>
<div class="row row-card-no-pd">
						<div class="col-sm-6 col-md-4">
							<div class="card card-stats card-round">
								<div class="card-body">
									<div class="row">
										<div class="col-5">
											<div class="icon-big text-center">
											<i class="fas fa-plus text-success"></i>
											</div>
										</div>
										<div class="col-7 col-stats">
											<div class="numbers">
												<p class="card-category">STOK GRUP EKLEME İZNİ</p>
	
																	<?php
if ($kbilgi['stokgrupekle'] == "0") {?> 
											<h2 class="card-title text-danger">İZİN YOK</h2>
<?php } ?> 
<?php
if ($kbilgi['stokgrupekle'] == "1") {?> 
											<h2 class="card-title text-success">İZİN VAR</h2>
<?php } ?>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
<div class="col-sm-6 col-md-4">
							<div class="card card-stats card-round">
								<div class="card-body ">
									<div class="row">
										<div class="col-5">
											<div class="icon-big text-center">
												<i class="fas fa-edit text-warning"></i>
											</div>
										</div>
										<div class="col-7 col-stats">
											<div class="numbers">
												<p class="card-category">STOK GRUP DÜZENLEME İZNİ</p>
																		<?php
if ($kbilgi['stokgrupduzenle'] == "0") {?> 
											<h2 class="card-title text-danger">İZİN YOK</h2>
<?php } ?> 
<?php
if ($kbilgi['stokgrupduzenle'] == "1") {?> 
											<h2 class="card-title text-success">İZİN VAR</h2>
<?php } ?>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
<div class="col-sm-6 col-md-4">
							<div class="card card-stats card-round">
								<div class="card-body ">
									<div class="row">
										<div class="col-5">
											<div class="icon-big text-center">
												<i class="fas fa-times text-danger"></i>
											</div>
										</div>
										<div class="col-7 col-stats">
											<div class="numbers">
												<p class="card-category">STOK GRUP SİLME İZNİ</p>
																	<?php
if ($kbilgi['stokgrupsil'] == "0") {?> 
											<h2 class="card-title text-danger">İZİN YOK</h2>
<?php } ?> 
<?php
if ($kbilgi['stokgrupsil'] == "1") {?> 
											<h2 class="card-title text-success">İZİN VAR</h2>
<?php } ?>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
</div>
<div class="row row-card-no-pd">
						<div class="col-sm-6 col-md-4">
							<div class="card card-stats card-round">
								<div class="card-body">
									<div class="row">
										<div class="col-5">
											<div class="icon-big text-center">
											<i class="fas fa-plus text-success"></i>
											</div>
										</div>
										<div class="col-7 col-stats">
											<div class="numbers">
												<p class="card-category">BİRİM EKLEME İZNİ</p>
								<?php
if ($kbilgi['birimekle'] == "0") {?> 
											<h2 class="card-title text-danger">İZİN YOK</h2>
<?php } ?> 
<?php
if ($kbilgi['birimekle'] == "1") {?> 
											<h2 class="card-title text-success">İZİN VAR</h2>
<?php } ?>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
<div class="col-sm-6 col-md-4">
							<div class="card card-stats card-round">
								<div class="card-body ">
									<div class="row">
										<div class="col-5">
											<div class="icon-big text-center">
												<i class="fas fa-edit text-warning"></i>
											</div>
										</div>
										<div class="col-7 col-stats">
											<div class="numbers">
												<p class="card-category">BİRİM DÜZENLEME İZNİ</p>
															<?php
if ($kbilgi['birimduzenle'] == "0") {?> 
											<h2 class="card-title text-danger">İZİN YOK</h2>
<?php } ?> 
<?php
if ($kbilgi['birimduzenle'] == "1") {?> 
											<h2 class="card-title text-success">İZİN VAR</h2>
<?php } ?>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
<div class="col-sm-6 col-md-4">
							<div class="card card-stats card-round">
								<div class="card-body ">
									<div class="row">
										<div class="col-5">
											<div class="icon-big text-center">
												<i class="fas fa-times text-danger"></i>
											</div>
										</div>
										<div class="col-7 col-stats">
											<div class="numbers">
												<p class="card-category">BİRİM SİLME İZNİ</p>
														<?php
if ($kbilgi['birimsil'] == "0") {?> 
											<h2 class="card-title text-danger">İZİN YOK</h2>
<?php } ?> 
<?php
if ($kbilgi['birimsil'] == "1") {?> 
											<h2 class="card-title text-success">İZİN VAR</h2>
<?php } ?>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
</div>
<div class="row row-card-no-pd">
						<div class="col-sm-6 col-md-4">
							<div class="card card-stats card-round">
								<div class="card-body">
									<div class="row">
										<div class="col-5">
											<div class="icon-big text-center">
											<i class="fas fa-plus text-success"></i>
											</div>
										</div>
										<div class="col-7 col-stats">
											<div class="numbers">
												<p class="card-category">MARKA EKLEME İZNİ</p>
									<?php
if ($kbilgi['markaekle'] == "0") {?> 
											<h2 class="card-title text-danger">İZİN YOK</h2>
<?php } ?> 
<?php
if ($kbilgi['markaekle'] == "1") {?> 
											<h2 class="card-title text-success">İZİN VAR</h2>
<?php } ?>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
<div class="col-sm-6 col-md-4">
							<div class="card card-stats card-round">
								<div class="card-body ">
									<div class="row">
										<div class="col-5">
											<div class="icon-big text-center">
												<i class="fas fa-edit text-warning"></i>
											</div>
										</div>
										<div class="col-7 col-stats">
											<div class="numbers">
												<p class="card-category">MARKA DÜZENLEME İZNİ</p>
													<?php
if ($kbilgi['markaduzenle'] == "0") {?> 
											<h2 class="card-title text-danger">İZİN YOK</h2>
<?php } ?> 
<?php
if ($kbilgi['markaduzenle'] == "1") {?> 
											<h2 class="card-title text-success">İZİN VAR</h2>
<?php } ?>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
<div class="col-sm-6 col-md-4">
							<div class="card card-stats card-round">
								<div class="card-body ">
									<div class="row">
										<div class="col-5">
											<div class="icon-big text-center">
												<i class="fas fa-times text-danger"></i>
											</div>
										</div>
										<div class="col-7 col-stats">
											<div class="numbers">
												<p class="card-category">MARKA SİLME İZNİ</p>
														<?php
if ($kbilgi['markasil'] == "0") {?> 
											<h2 class="card-title text-danger">İZİN YOK</h2>
<?php } ?> 
<?php
if ($kbilgi['markasil'] == "1") {?> 
											<h2 class="card-title text-success">İZİN VAR</h2>
<?php } ?>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
</div>
<div class="row row-card-no-pd">
						<div class="col-sm-6 col-md-4">
							<div class="card card-stats card-round">
								<div class="card-body">
									<div class="row">
										<div class="col-5">
											<div class="icon-big text-center">
											<i class="fas fa-plus text-success"></i>
											</div>
										</div>
										<div class="col-7 col-stats">
											<div class="numbers">
												<p class="card-category">MODEL EKLEME İZNİ</p>
								<?php
if ($kbilgi['modelekle'] == "0") {?> 
											<h2 class="card-title text-danger">İZİN YOK</h2>
<?php } ?> 
<?php
if ($kbilgi['modelekle'] == "1") {?> 
											<h2 class="card-title text-success">İZİN VAR</h2>
<?php } ?>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
<div class="col-sm-6 col-md-4">
							<div class="card card-stats card-round">
								<div class="card-body ">
									<div class="row">
										<div class="col-5">
											<div class="icon-big text-center">
												<i class="fas fa-edit text-warning"></i>
											</div>
										</div>
										<div class="col-7 col-stats">
											<div class="numbers">
												<p class="card-category">MODEL DÜZENLEME İZNİ</p>
													<?php
if ($kbilgi['modelduzenle'] == "0") {?> 
											<h2 class="card-title text-danger">İZİN YOK</h2>
<?php } ?> 
<?php
if ($kbilgi['modelduzenle'] == "1") {?> 
											<h2 class="card-title text-success">İZİN VAR</h2>
<?php } ?>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
<div class="col-sm-6 col-md-4">
							<div class="card card-stats card-round">
								<div class="card-body ">
									<div class="row">
										<div class="col-5">
											<div class="icon-big text-center">
												<i class="fas fa-times text-danger"></i>
											</div>
										</div>
										<div class="col-7 col-stats">
											<div class="numbers">
												<p class="card-category">MODEL SİLME İZNİ</p>
														<?php
if ($kbilgi['modelsil'] == "0") {?> 
											<h2 class="card-title text-danger">İZİN YOK</h2>
<?php } ?> 
<?php
if ($kbilgi['modelsil'] == "1") {?> 
											<h2 class="card-title text-success">İZİN VAR</h2>
<?php } ?>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
</div>
<div class="row row-card-no-pd">
						<div class="col-sm-6 col-md-4">
							<div class="card card-stats card-round">
								<div class="card-body">
									<div class="row">
										<div class="col-5">
											<div class="icon-big text-center">
											<i class="fas fa-plus text-success"></i>
											</div>
										</div>
										<div class="col-7 col-stats">
											<div class="numbers">
												<p class="card-category">KDV EKLEME İZNİ</p>
	
								<?php
if ($kbilgi['kdvekle'] == "0") {?> 
											<h2 class="card-title text-danger">İZİN YOK</h2>
<?php } ?> 
<?php
if ($kbilgi['kdvekle'] == "1") {?> 
											<h2 class="card-title text-success">İZİN VAR</h2>
<?php } ?>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
<div class="col-sm-6 col-md-4">
							<div class="card card-stats card-round">
								<div class="card-body ">
									<div class="row">
										<div class="col-5">
											<div class="icon-big text-center">
												<i class="fas fa-edit text-warning"></i>
											</div>
										</div>
										<div class="col-7 col-stats">
											<div class="numbers">
												<p class="card-category">KDV DÜZENLEME İZNİ</p>
										<?php
if ($kbilgi['kdvduzenle'] == "0") {?> 
											<h2 class="card-title text-danger">İZİN YOK</h2>
<?php } ?> 
<?php
if ($kbilgi['kdvduzenle'] == "1") {?> 
											<h2 class="card-title text-success">İZİN VAR</h2>
<?php } ?>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
<div class="col-sm-6 col-md-4">
							<div class="card card-stats card-round">
								<div class="card-body ">
									<div class="row">
										<div class="col-5">
											<div class="icon-big text-center">
												<i class="fas fa-times text-danger"></i>
											</div>
										</div>
										<div class="col-7 col-stats">
											<div class="numbers">
												<p class="card-category">KDV SİLME İZNİ</p>
													<?php
if ($kbilgi['kdvsil'] == "0") {?> 
											<h2 class="card-title text-danger">İZİN YOK</h2>
<?php } ?> 
<?php
if ($kbilgi['kdvsil'] == "1") {?> 
											<h2 class="card-title text-success">İZİN VAR</h2>
<?php } ?>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
</div>
<div class="row row-card-no-pd">
						<div class="col-sm-6 col-md-4">
							<div class="card card-stats card-round">
								<div class="card-body">
									<div class="row">
										<div class="col-5">
											<div class="icon-big text-center">
											<i class="fas fa-plus text-success"></i>
											</div>
										</div>
										<div class="col-7 col-stats">
											<div class="numbers">
												<p class="card-category">ÖTV EKLEME İZNİ</p>
	
															<?php
if ($kbilgi['otvekle'] == "0") {?> 
											<h2 class="card-title text-danger">İZİN YOK</h2>
<?php } ?> 
<?php
if ($kbilgi['otvekle'] == "1") {?> 
											<h2 class="card-title text-success">İZİN VAR</h2>
<?php } ?>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
<div class="col-sm-6 col-md-4">
							<div class="card card-stats card-round">
								<div class="card-body ">
									<div class="row">
										<div class="col-5">
											<div class="icon-big text-center">
												<i class="fas fa-edit text-warning"></i>
											</div>
										</div>
										<div class="col-7 col-stats">
											<div class="numbers">
												<p class="card-category">ÖTV DÜZENLEME İZNİ</p>
								<?php
if ($kbilgi['otvduzenle'] == "0") {?> 
											<h2 class="card-title text-danger">İZİN YOK</h2>
<?php } ?> 
<?php
if ($kbilgi['otvduzenle'] == "1") {?> 
											<h2 class="card-title text-success">İZİN VAR</h2>
<?php } ?>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
<div class="col-sm-6 col-md-4">
							<div class="card card-stats card-round">
								<div class="card-body ">
									<div class="row">
										<div class="col-5">
											<div class="icon-big text-center">
												<i class="fas fa-times text-danger"></i>
											</div>
										</div>
										<div class="col-7 col-stats">
											<div class="numbers">
												<p class="card-category">ÖTV SİLME İZNİ</p>
									<?php
if ($kbilgi['otvsil'] == "0") {?> 
											<h2 class="card-title text-danger">İZİN YOK</h2>
<?php } ?> 
<?php
if ($kbilgi['otvsil'] == "1") {?> 
											<h2 class="card-title text-success">İZİN VAR</h2>
<?php } ?>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
</div>
<div class="row row-card-no-pd">
						<div class="col-sm-6 col-md-4">
							<div class="card card-stats card-round">
								<div class="card-body">
									<div class="row">
										<div class="col-5">
											<div class="icon-big text-center">
											<i class="fas fa-plus text-success"></i>
											</div>
										</div>
										<div class="col-7 col-stats">
											<div class="numbers">
												<p class="card-category">ALIŞ FATURASI EKLEME İZNİ</p>
	
																<?php
if ($kbilgi['alisfaturaekle'] == "0") {?> 
											<h2 class="card-title text-danger">İZİN YOK</h2>
<?php } ?> 
<?php
if ($kbilgi['alisfaturaekle'] == "1") {?> 
											<h2 class="card-title text-success">İZİN VAR</h2>
<?php } ?>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
<div class="col-sm-6 col-md-4">
							<div class="card card-stats card-round">
								<div class="card-body ">
									<div class="row">
										<div class="col-5">
											<div class="icon-big text-center">
												<i class="fas fa-edit text-warning"></i>
											</div>
										</div>
										<div class="col-7 col-stats">
											<div class="numbers">
												<p class="card-category">ALIŞ FATURASI DÜZENLEME İZNİ</p>
																			<?php
if ($kbilgi['alisfaturaduzenle'] == "0") {?> 
											<h2 class="card-title text-danger">İZİN YOK</h2>
<?php } ?> 
<?php
if ($kbilgi['alisfaturaduzenle'] == "1") {?> 
											<h2 class="card-title text-success">İZİN VAR</h2>
<?php } ?>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
<div class="col-sm-6 col-md-4">
							<div class="card card-stats card-round">
								<div class="card-body ">
									<div class="row">
										<div class="col-5">
											<div class="icon-big text-center">
												<i class="fas fa-times text-danger"></i>
											</div>
										</div>
										<div class="col-7 col-stats">
											<div class="numbers">
												<p class="card-category">ALIŞ FATURASI SİLME İZNİ</p>
															<?php
if ($kbilgi['alisfaturasil'] == "0") {?> 
											<h2 class="card-title text-danger">İZİN YOK</h2>
<?php } ?> 
<?php
if ($kbilgi['alisfaturasil'] == "1") {?> 
											<h2 class="card-title text-success">İZİN VAR</h2>
<?php } ?>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
</div>
<div class="row row-card-no-pd">
						<div class="col-sm-6 col-md-4">
							<div class="card card-stats card-round">
								<div class="card-body">
									<div class="row">
										<div class="col-5">
											<div class="icon-big text-center">
											<i class="fas fa-plus text-success"></i>
											</div>
										</div>
										<div class="col-7 col-stats">
											<div class="numbers">
												<p class="card-category">SATIŞ FATURASI EKLEME İZNİ</p>
								<?php
if ($kbilgi['satisfaturaekle'] == "0") {?> 
											<h2 class="card-title text-danger">İZİN YOK</h2>
<?php } ?> 
<?php
if ($kbilgi['satisfaturaekle'] == "1") {?> 
											<h2 class="card-title text-success">İZİN VAR</h2>
<?php } ?>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
<div class="col-sm-6 col-md-4">
							<div class="card card-stats card-round">
								<div class="card-body ">
									<div class="row">
										<div class="col-5">
											<div class="icon-big text-center">
												<i class="fas fa-edit text-warning"></i>
											</div>
										</div>
										<div class="col-7 col-stats">
											<div class="numbers">
												<p class="card-category">SATIŞ FATURASI DÜZENLEME İZNİ</p>
													<?php
if ($kbilgi['satisfaturaduzenle'] == "0") {?> 
											<h2 class="card-title text-danger">İZİN YOK</h2>
<?php } ?> 
<?php
if ($kbilgi['satisfaturaduzenle'] == "1") {?> 
											<h2 class="card-title text-success">İZİN VAR</h2>
<?php } ?>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
<div class="col-sm-6 col-md-4">
							<div class="card card-stats card-round">
								<div class="card-body ">
									<div class="row">
										<div class="col-5">
											<div class="icon-big text-center">
												<i class="fas fa-times text-danger"></i>
											</div>
										</div>
										<div class="col-7 col-stats">
											<div class="numbers">
												<p class="card-category">SATIŞ FATURASI SİLME İZNİ</p>
													<?php
if ($kbilgi['satisfaturasil'] == "0") {?> 
											<h2 class="card-title text-danger">İZİN YOK</h2>
<?php } ?> 
<?php
if ($kbilgi['satisfaturasil'] == "1") {?> 
											<h2 class="card-title text-success">İZİN VAR</h2>
<?php } ?>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
</div>
<div class="row row-card-no-pd">
						<div class="col-sm-6 col-md-4">
							<div class="card card-stats card-round">
								<div class="card-body">
									<div class="row">
										<div class="col-5">
											<div class="icon-big text-center">
											<i class="fas fa-plus text-success"></i>
											</div>
										</div>
										<div class="col-7 col-stats">
											<div class="numbers">
												<p class="card-category">VERİLEN ÇEK EKLEME İZNİ</p>
									<?php
if ($kbilgi['verilencekekle'] == "0") {?> 
											<h2 class="card-title text-danger">İZİN YOK</h2>
<?php } ?> 
<?php
if ($kbilgi['verilencekekle'] == "1") {?> 
											<h2 class="card-title text-success">İZİN VAR</h2>
<?php } ?>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
<div class="col-sm-6 col-md-4">
							<div class="card card-stats card-round">
								<div class="card-body ">
									<div class="row">
										<div class="col-5">
											<div class="icon-big text-center">
												<i class="fas fa-edit text-warning"></i>
											</div>
										</div>
										<div class="col-7 col-stats">
											<div class="numbers">
												<p class="card-category">VERİLEN ÇEK DÜZENLEME İZNİ</p>
								<?php
if ($kbilgi['verilencekduzenle'] == "0") {?> 
											<h2 class="card-title text-danger">İZİN YOK</h2>
<?php } ?> 
<?php
if ($kbilgi['verilencekduzenle'] == "1") {?> 
											<h2 class="card-title text-success">İZİN VAR</h2>
<?php } ?>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
<div class="col-sm-6 col-md-4">
							<div class="card card-stats card-round">
								<div class="card-body ">
									<div class="row">
										<div class="col-5">
											<div class="icon-big text-center">
												<i class="fas fa-times text-danger"></i>
											</div>
										</div>
										<div class="col-7 col-stats">
											<div class="numbers">
												<p class="card-category">VERİLEN ÇEK SİLME İZNİ</p>
								<?php
if ($kbilgi['verilenceksil'] == "0") {?> 
											<h2 class="card-title text-danger">İZİN YOK</h2>
<?php } ?> 
<?php
if ($kbilgi['verilenceksil'] == "1") {?> 
											<h2 class="card-title text-success">İZİN VAR</h2>
<?php } ?>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
</div>
<div class="row row-card-no-pd">
						<div class="col-sm-6 col-md-4">
							<div class="card card-stats card-round">
								<div class="card-body">
									<div class="row">
										<div class="col-5">
											<div class="icon-big text-center">
											<i class="fas fa-plus text-success"></i>
											</div>
										</div>
										<div class="col-7 col-stats">
											<div class="numbers">
												<p class="card-category">VERİLEN SENET EKLEME İZNİ</p>
									<?php
if ($kbilgi['verilensenetekle'] == "0") {?> 
											<h2 class="card-title text-danger">İZİN YOK</h2>
<?php } ?> 
<?php
if ($kbilgi['verilensenetekle'] == "1") {?> 
											<h2 class="card-title text-success">İZİN VAR</h2>
<?php } ?>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
<div class="col-sm-6 col-md-4">
							<div class="card card-stats card-round">
								<div class="card-body ">
									<div class="row">
										<div class="col-5">
											<div class="icon-big text-center">
												<i class="fas fa-edit text-warning"></i>
											</div>
										</div>
										<div class="col-7 col-stats">
											<div class="numbers">
												<p class="card-category">VERİLEN SENET DÜZENLEME İZNİ</p>
												<?php
if ($kbilgi['verilensenetduzenle'] == "0") {?> 
											<h2 class="card-title text-danger">İZİN YOK</h2>
<?php } ?> 
<?php
if ($kbilgi['verilensenetduzenle'] == "1") {?> 
											<h2 class="card-title text-success">İZİN VAR</h2>
<?php } ?>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
<div class="col-sm-6 col-md-4">
							<div class="card card-stats card-round">
								<div class="card-body ">
									<div class="row">
										<div class="col-5">
											<div class="icon-big text-center">
												<i class="fas fa-times text-danger"></i>
											</div>
										</div>
										<div class="col-7 col-stats">
											<div class="numbers">
												<p class="card-category">VERİLEN SENET SİLME İZNİ</p>
																<?php
if ($kbilgi['verilensenetsil'] == "0") {?> 
											<h2 class="card-title text-danger">İZİN YOK</h2>
<?php } ?> 
<?php
if ($kbilgi['verilensenetsil'] == "1") {?> 
											<h2 class="card-title text-success">İZİN VAR</h2>
<?php } ?>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
</div>
<div class="row row-card-no-pd">
						<div class="col-sm-6 col-md-4">
							<div class="card card-stats card-round">
								<div class="card-body">
									<div class="row">
										<div class="col-5">
											<div class="icon-big text-center">
											<i class="fas fa-plus text-success"></i>
											</div>
										</div>
										<div class="col-7 col-stats">
											<div class="numbers">
												<p class="card-category">ALINAN ÇEK EKLEME İZNİ</p>
								<?php
if ($kbilgi['alinancekekle'] == "0") {?> 
											<h2 class="card-title text-danger">İZİN YOK</h2>
<?php } ?> 
<?php
if ($kbilgi['alinancekekle'] == "1") {?> 
											<h2 class="card-title text-success">İZİN VAR</h2>
<?php } ?>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
<div class="col-sm-6 col-md-4">
							<div class="card card-stats card-round">
								<div class="card-body ">
									<div class="row">
										<div class="col-5">
											<div class="icon-big text-center">
												<i class="fas fa-edit text-warning"></i>
											</div>
										</div>
										<div class="col-7 col-stats">
											<div class="numbers">
												<p class="card-category">ALINAN ÇEK DÜZENLEME İZNİ</p>
																		<?php
if ($kbilgi['alinancekduzenle'] == "0") {?> 
											<h2 class="card-title text-danger">İZİN YOK</h2>
<?php } ?> 
<?php
if ($kbilgi['alinancekduzenle'] == "1") {?> 
											<h2 class="card-title text-success">İZİN VAR</h2>
<?php } ?>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
<div class="col-sm-6 col-md-4">
							<div class="card card-stats card-round">
								<div class="card-body ">
									<div class="row">
										<div class="col-5">
											<div class="icon-big text-center">
												<i class="fas fa-times text-danger"></i>
											</div>
										</div>
										<div class="col-7 col-stats">
											<div class="numbers">
												<p class="card-category">ALINAN ÇEK SİLME İZNİ</p>
								<?php
if ($kbilgi['alinanceksil'] == "0") {?> 
											<h2 class="card-title text-danger">İZİN YOK</h2>
<?php } ?> 
<?php
if ($kbilgi['alinanceksil'] == "1") {?> 
											<h2 class="card-title text-success">İZİN VAR</h2>
<?php } ?>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
</div>
<div class="row row-card-no-pd">
						<div class="col-sm-6 col-md-4">
							<div class="card card-stats card-round">
								<div class="card-body">
									<div class="row">
										<div class="col-5">
											<div class="icon-big text-center">
											<i class="fas fa-plus text-success"></i>
											</div>
										</div>
										<div class="col-7 col-stats">
											<div class="numbers">
												<p class="card-category">ALINAN SENET EKLEME İZNİ</p>
									<?php
if ($kbilgi['alinansenetekle'] == "0") {?> 
											<h2 class="card-title text-danger">İZİN YOK</h2>
<?php } ?> 
<?php
if ($kbilgi['alinansenetekle'] == "1") {?> 
											<h2 class="card-title text-success">İZİN VAR</h2>
<?php } ?>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
<div class="col-sm-6 col-md-4">
							<div class="card card-stats card-round">
								<div class="card-body ">
									<div class="row">
										<div class="col-5">
											<div class="icon-big text-center">
												<i class="fas fa-edit text-warning"></i>
											</div>
										</div>
										<div class="col-7 col-stats">
											<div class="numbers">
												<p class="card-category">ALINAN SENET DÜZENLEME İZNİ</p>
												<?php
if ($kbilgi['alinansenetduzenle'] == "0") {?> 
											<h2 class="card-title text-danger">İZİN YOK</h2>
<?php } ?> 
<?php
if ($kbilgi['alinansenetduzenle'] == "1") {?> 
											<h2 class="card-title text-success">İZİN VAR</h2>
<?php } ?>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
<div class="col-sm-6 col-md-4">
							<div class="card card-stats card-round">
								<div class="card-body ">
									<div class="row">
										<div class="col-5">
											<div class="icon-big text-center">
												<i class="fas fa-times text-danger"></i>
											</div>
										</div>
										<div class="col-7 col-stats">
											<div class="numbers">
												<p class="card-category">ALINAN SENET SİLME İZNİ</p>
								<?php
if ($kbilgi['alinansenetsil'] == "0") {?> 
											<h2 class="card-title text-danger">İZİN YOK</h2>
<?php } ?> 
<?php
if ($kbilgi['alinansenetsil'] == "1") {?> 
											<h2 class="card-title text-success">İZİN VAR</h2>
<?php } ?>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
</div>
<div class="row row-card-no-pd">
						<div class="col-sm-6 col-md-4">
							<div class="card card-stats card-round">
								<div class="card-body">
									<div class="row">
										<div class="col-5">
											<div class="icon-big text-center">
											<i class="fas fa-plus text-success"></i>
											</div>
										</div>
										<div class="col-7 col-stats">
											<div class="numbers">
												<p class="card-category">KASA EKLEME İZNİ</p>
									<?php
if ($kbilgi['kasaekle'] == "0") {?> 
											<h2 class="card-title text-danger">İZİN YOK</h2>
<?php } ?> 
<?php
if ($kbilgi['kasaekle'] == "1") {?> 
											<h2 class="card-title text-success">İZİN VAR</h2>
<?php } ?>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
<div class="col-sm-6 col-md-4">
							<div class="card card-stats card-round">
								<div class="card-body ">
									<div class="row">
										<div class="col-5">
											<div class="icon-big text-center">
												<i class="fas fa-edit text-warning"></i>
											</div>
										</div>
										<div class="col-7 col-stats">
											<div class="numbers">
												<p class="card-category">KASA DÜZENLEME İZNİ</p>
														<?php
if ($kbilgi['kasaduzenle'] == "0") {?> 
											<h2 class="card-title text-danger">İZİN YOK</h2>
<?php } ?> 
<?php
if ($kbilgi['kasaduzenle'] == "1") {?> 
											<h2 class="card-title text-success">İZİN VAR</h2>
<?php } ?>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
<div class="col-sm-6 col-md-4">
							<div class="card card-stats card-round">
								<div class="card-body ">
									<div class="row">
										<div class="col-5">
											<div class="icon-big text-center">
												<i class="fas fa-times text-danger"></i>
											</div>
										</div>
										<div class="col-7 col-stats">
											<div class="numbers">
												<p class="card-category">KASA SİLME İZNİ</p>
															<?php
if ($kbilgi['kasasil'] == "0") {?> 
											<h2 class="card-title text-danger">İZİN YOK</h2>
<?php } ?> 
<?php
if ($kbilgi['kasasil'] == "1") {?> 
											<h2 class="card-title text-success">İZİN VAR</h2>
<?php } ?>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
</div>
<div class="row row-card-no-pd">
						<div class="col-sm-6 col-md-4">
							<div class="card card-stats card-round">
								<div class="card-body">
									<div class="row">
										<div class="col-5">
											<div class="icon-big text-center">
											<i class="fas fa-plus text-success"></i>
											</div>
										</div>
										<div class="col-7 col-stats">
											<div class="numbers">
												<p class="card-category">KASA GİRİŞ EKLEME İZNİ</p>
	
								<?php
if ($kbilgi['kasagirisekle'] == "0") {?> 
											<h2 class="card-title text-danger">İZİN YOK</h2>
<?php } ?> 
<?php
if ($kbilgi['kasagirisekle'] == "1") {?> 
											<h2 class="card-title text-success">İZİN VAR</h2>
<?php } ?>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
<div class="col-sm-6 col-md-4">
							<div class="card card-stats card-round">
								<div class="card-body ">
									<div class="row">
										<div class="col-5">
											<div class="icon-big text-center">
												<i class="fas fa-edit text-warning"></i>
											</div>
										</div>
										<div class="col-7 col-stats">
											<div class="numbers">
												<p class="card-category">KASA GİRİŞ DÜZENLEME İZNİ</p>
													<?php
if ($kbilgi['kasagirisduzenle'] == "0") {?> 
											<h2 class="card-title text-danger">İZİN YOK</h2>
<?php } ?> 
<?php
if ($kbilgi['kasagirisduzenle'] == "1") {?> 
											<h2 class="card-title text-success">İZİN VAR</h2>
<?php } ?>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
<div class="col-sm-6 col-md-4">
							<div class="card card-stats card-round">
								<div class="card-body ">
									<div class="row">
										<div class="col-5">
											<div class="icon-big text-center">
												<i class="fas fa-times text-danger"></i>
											</div>
										</div>
										<div class="col-7 col-stats">
											<div class="numbers">
												<p class="card-category">KASA GİRİŞ SİLME İZNİ</p>
									<?php
if ($kbilgi['kasagirissil'] == "0") {?> 
											<h2 class="card-title text-danger">İZİN YOK</h2>
<?php } ?> 
<?php
if ($kbilgi['kasagirissil'] == "1") {?> 
											<h2 class="card-title text-success">İZİN VAR</h2>
<?php } ?>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
</div>
<div class="row row-card-no-pd">
						<div class="col-sm-6 col-md-4">
							<div class="card card-stats card-round">
								<div class="card-body">
									<div class="row">
										<div class="col-5">
											<div class="icon-big text-center">
											<i class="fas fa-plus text-success"></i>
											</div>
										</div>
										<div class="col-7 col-stats">
											<div class="numbers">
												<p class="card-category">KASA ÇIKIŞ EKLEME İZNİ</p>
								<?php
if ($kbilgi['kasacikisekle'] == "0") {?> 
											<h2 class="card-title text-danger">İZİN YOK</h2>
<?php } ?> 
<?php
if ($kbilgi['kasacikisekle'] == "1") {?> 
											<h2 class="card-title text-success">İZİN VAR</h2>
<?php } ?>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
<div class="col-sm-6 col-md-4">
							<div class="card card-stats card-round">
								<div class="card-body ">
									<div class="row">
										<div class="col-5">
											<div class="icon-big text-center">
												<i class="fas fa-edit text-warning"></i>
											</div>
										</div>
										<div class="col-7 col-stats">
											<div class="numbers">
												<p class="card-category">KASA ÇIKIŞ DÜZENLEME İZNİ</p>
								<?php
if ($kbilgi['kasacikisduzenle'] == "0") {?> 
											<h2 class="card-title text-danger">İZİN YOK</h2>
<?php } ?> 
<?php
if ($kbilgi['kasacikisduzenle'] == "1") {?> 
											<h2 class="card-title text-success">İZİN VAR</h2>
<?php } ?>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
<div class="col-sm-6 col-md-4">
							<div class="card card-stats card-round">
								<div class="card-body ">
									<div class="row">
										<div class="col-5">
											<div class="icon-big text-center">
												<i class="fas fa-times text-danger"></i>
											</div>
										</div>
										<div class="col-7 col-stats">
											<div class="numbers">
												<p class="card-category">KASA ÇIKIŞ SİLME İZNİ</p>
										<?php
if ($kbilgi['kasacikissil'] == "0") {?> 
											<h2 class="card-title text-danger">İZİN YOK</h2>
<?php } ?> 
<?php
if ($kbilgi['kasacikissil'] == "1") {?> 
											<h2 class="card-title text-success">İZİN VAR</h2>
<?php } ?>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
</div>
<div class="row row-card-no-pd">
						<div class="col-sm-6 col-md-4">
							<div class="card card-stats card-round">
								<div class="card-body">
									<div class="row">
										<div class="col-5">
											<div class="icon-big text-center">
											<i class="fas fa-plus text-success"></i>
											</div>
										</div>
										<div class="col-7 col-stats">
											<div class="numbers">
												<p class="card-category">BANKA EKLEME İZNİ</p>
								<?php
if ($kbilgi['bankaekle'] == "0") {?> 
											<h2 class="card-title text-danger">İZİN YOK</h2>
<?php } ?> 
<?php
if ($kbilgi['bankaekle'] == "1") {?> 
											<h2 class="card-title text-success">İZİN VAR</h2>
<?php } ?>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
<div class="col-sm-6 col-md-4">
							<div class="card card-stats card-round">
								<div class="card-body ">
									<div class="row">
										<div class="col-5">
											<div class="icon-big text-center">
												<i class="fas fa-edit text-warning"></i>
											</div>
										</div>
										<div class="col-7 col-stats">
											<div class="numbers">
												<p class="card-category">BANKA DÜZENLEME İZNİ</p>
									<?php
if ($kbilgi['bankaduzenle'] == "0") {?> 
											<h2 class="card-title text-danger">İZİN YOK</h2>
<?php } ?> 
<?php
if ($kbilgi['bankaduzenle'] == "1") {?> 
											<h2 class="card-title text-success">İZİN VAR</h2>
<?php } ?>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
<div class="col-sm-6 col-md-4">
							<div class="card card-stats card-round">
								<div class="card-body ">
									<div class="row">
										<div class="col-5">
											<div class="icon-big text-center">
												<i class="fas fa-times text-danger"></i>
											</div>
										</div>
										<div class="col-7 col-stats">
											<div class="numbers">
												<p class="card-category">BANKA SİLME İZNİ</p>
														<?php
if ($kbilgi['bankasil'] == "0") {?> 
											<h2 class="card-title text-danger">İZİN YOK</h2>
<?php } ?> 
<?php
if ($kbilgi['bankasil'] == "1") {?> 
											<h2 class="card-title text-success">İZİN VAR</h2>
<?php } ?>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
</div>
<div class="row row-card-no-pd">
						<div class="col-sm-6 col-md-4">
							<div class="card card-stats card-round">
								<div class="card-body">
									<div class="row">
										<div class="col-5">
											<div class="icon-big text-center">
											<i class="fas fa-plus text-success"></i>
											</div>
										</div>
										<div class="col-7 col-stats">
											<div class="numbers">
												<p class="card-category">BANKA GİRİŞ EKLEME İZNİ</p>
									<?php
if ($kbilgi['bankagirisekle'] == "0") {?> 
											<h2 class="card-title text-danger">İZİN YOK</h2>
<?php } ?> 
<?php
if ($kbilgi['bankagirisekle'] == "1") {?> 
											<h2 class="card-title text-success">İZİN VAR</h2>
<?php } ?>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
<div class="col-sm-6 col-md-4">
							<div class="card card-stats card-round">
								<div class="card-body ">
									<div class="row">
										<div class="col-5">
											<div class="icon-big text-center">
												<i class="fas fa-edit text-warning"></i>
											</div>
										</div>
										<div class="col-7 col-stats">
											<div class="numbers">
												<p class="card-category">BANKA GİRİŞ DÜZENLEME İZNİ</p>
												<?php
if ($kbilgi['bankagirisduzenle'] == "0") {?> 
											<h2 class="card-title text-danger">İZİN YOK</h2>
<?php } ?> 
<?php
if ($kbilgi['bankagirisduzenle'] == "1") {?> 
											<h2 class="card-title text-success">İZİN VAR</h2>
<?php } ?>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
<div class="col-sm-6 col-md-4">
							<div class="card card-stats card-round">
								<div class="card-body ">
									<div class="row">
										<div class="col-5">
											<div class="icon-big text-center">
												<i class="fas fa-times text-danger"></i>
											</div>
										</div>
										<div class="col-7 col-stats">
											<div class="numbers">
												<p class="card-category">BANKA GİRİŞ SİLME İZNİ</p>
									<?php
if ($kbilgi['bankagirissil'] == "0") {?> 
											<h2 class="card-title text-danger">İZİN YOK</h2>
<?php } ?> 
<?php
if ($kbilgi['bankagirissil'] == "1") {?> 
											<h2 class="card-title text-success">İZİN VAR</h2>
<?php } ?>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
</div>
<div class="row row-card-no-pd">
						<div class="col-sm-6 col-md-4">
							<div class="card card-stats card-round">
								<div class="card-body">
									<div class="row">
										<div class="col-5">
											<div class="icon-big text-center">
											<i class="fas fa-plus text-success"></i>
											</div>
										</div>
										<div class="col-7 col-stats">
											<div class="numbers">
												<p class="card-category">BANKA ÇIKIŞ EKLEME İZNİ</p>
	
								<?php
if ($kbilgi['bankacikisekle'] == "0") {?> 
											<h2 class="card-title text-danger">İZİN YOK</h2>
<?php } ?> 
<?php
if ($kbilgi['bankacikisekle'] == "1") {?> 
											<h2 class="card-title text-success">İZİN VAR</h2>
<?php } ?>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
<div class="col-sm-6 col-md-4">
							<div class="card card-stats card-round">
								<div class="card-body ">
									<div class="row">
										<div class="col-5">
											<div class="icon-big text-center">
												<i class="fas fa-edit text-warning"></i>
											</div>
										</div>
										<div class="col-7 col-stats">
											<div class="numbers">
												<p class="card-category">BANKA ÇIKIŞ DÜZENLEME İZNİ</p>
								<?php
if ($kbilgi['bankacikisduzenle'] == "0") {?> 
											<h2 class="card-title text-danger">İZİN YOK</h2>
<?php } ?> 
<?php
if ($kbilgi['bankacikisduzenle'] == "1") {?> 
											<h2 class="card-title text-success">İZİN VAR</h2>
<?php } ?>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
<div class="col-sm-6 col-md-4">
							<div class="card card-stats card-round">
								<div class="card-body ">
									<div class="row">
										<div class="col-5">
											<div class="icon-big text-center">
												<i class="fas fa-times text-danger"></i>
											</div>
										</div>
										<div class="col-7 col-stats">
											<div class="numbers">
												<p class="card-category">BANKA ÇIKIŞ SİLME İZNİ</p>
										<?php
if ($kbilgi['bankacikissil'] == "0") {?> 
											<h2 class="card-title text-danger">İZİN YOK</h2>
<?php } ?> 
<?php
if ($kbilgi['bankacikissil'] == "1") {?> 
											<h2 class="card-title text-success">İZİN VAR</h2>
<?php } ?>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
</div>
<div class="row row-card-no-pd">
						<div class="col-sm-6 col-md-4">
							<div class="card card-stats card-round">
								<div class="card-body">
									<div class="row">
										<div class="col-5">
											<div class="icon-big text-center">
											<i class="fas fa-plus text-success"></i>
											</div>
										</div>
										<div class="col-7 col-stats">
											<div class="numbers">
												<p class="card-category">DEPO EKLEME İZNİ</p>
									<?php
if ($kbilgi['depoekle'] == "0") {?> 
											<h2 class="card-title text-danger">İZİN YOK</h2>
<?php } ?> 
<?php
if ($kbilgi['depoekle'] == "1") {?> 
											<h2 class="card-title text-success">İZİN VAR</h2>
<?php } ?>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
<div class="col-sm-6 col-md-4">
							<div class="card card-stats card-round">
								<div class="card-body ">
									<div class="row">
										<div class="col-5">
											<div class="icon-big text-center">
												<i class="fas fa-edit text-warning"></i>
											</div>
										</div>
										<div class="col-7 col-stats">
											<div class="numbers">
												<p class="card-category">DEPO DÜZENLEME İZNİ</p>
																	<?php
if ($kbilgi['depoduzenle'] == "0") {?> 
											<h2 class="card-title text-danger">İZİN YOK</h2>
<?php } ?> 
<?php
if ($kbilgi['depoduzenle'] == "1") {?> 
											<h2 class="card-title text-success">İZİN VAR</h2>
<?php } ?>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
<div class="col-sm-6 col-md-4">
							<div class="card card-stats card-round">
								<div class="card-body ">
									<div class="row">
										<div class="col-5">
											<div class="icon-big text-center">
												<i class="fas fa-times text-danger"></i>
											</div>
										</div>
										<div class="col-7 col-stats">
											<div class="numbers">
												<p class="card-category">DEPO SİLME İZNİ</p>
													<?php
if ($kbilgi['deposil'] == "0") {?> 
											<h2 class="card-title text-danger">İZİN YOK</h2>
<?php } ?> 
<?php
if ($kbilgi['deposil'] == "1") {?> 
											<h2 class="card-title text-success">İZİN VAR</h2>
<?php } ?>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
</div>
<div class="row row-card-no-pd">
						<div class="col-sm-6 col-md-4">
							<div class="card card-stats card-round">
								<div class="card-body">
									<div class="row">
										<div class="col-5">
											<div class="icon-big text-center">
											<i class="fas fa-plus text-success"></i>
											</div>
										</div>
										<div class="col-7 col-stats">
											<div class="numbers">
												<p class="card-category">DEPO TRANSFER EKLEME İZNİ</p>
									<?php
if ($kbilgi['depotransferekle'] == "0") {?> 
											<h2 class="card-title text-danger">İZİN YOK</h2>
<?php } ?> 
<?php
if ($kbilgi['depotransferekle'] == "1") {?> 
											<h2 class="card-title text-success">İZİN VAR</h2>
<?php } ?>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
<div class="col-sm-6 col-md-4">
							<div class="card card-stats card-round">
								<div class="card-body ">
									<div class="row">
										<div class="col-5">
											<div class="icon-big text-center">
												<i class="fas fa-edit text-warning"></i>
											</div>
										</div>
										<div class="col-7 col-stats">
											<div class="numbers">
												<p class="card-category">DEPO TRANSFER DÜZENLEME İZNİ</p>
																	<?php
if ($kbilgi['depotransferduzenle'] == "0") {?> 
											<h2 class="card-title text-danger">İZİN YOK</h2>
<?php } ?> 
<?php
if ($kbilgi['depotransferduzenle'] == "1") {?> 
											<h2 class="card-title text-success">İZİN VAR</h2>
<?php } ?>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
<div class="col-sm-6 col-md-4">
							<div class="card card-stats card-round">
								<div class="card-body ">
									<div class="row">
										<div class="col-5">
											<div class="icon-big text-center">
												<i class="fas fa-times text-danger"></i>
											</div>
										</div>
										<div class="col-7 col-stats">
											<div class="numbers">
												<p class="card-category">DEPO TRANSFER SİLME İZNİ</p>
													<?php
if ($kbilgi['depotransfersil'] == "0") {?> 
											<h2 class="card-title text-danger">İZİN YOK</h2>
<?php } ?> 
<?php
if ($kbilgi['depotransfersil'] == "1") {?> 
											<h2 class="card-title text-success">İZİN VAR</h2>
<?php } ?>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
</div>
<div class="row row-card-no-pd">
						<div class="col-sm-6 col-md-4">
							<div class="card card-stats card-round">
								<div class="card-body">
									<div class="row">
										<div class="col-5">
											<div class="icon-big text-center">
											<i class="fas fa-plus text-success"></i>
											</div>
										</div>
										<div class="col-7 col-stats">
											<div class="numbers">
												<p class="card-category">PERSONEL EKLEME İZNİ</p>
									<?php
if ($kbilgi['personelekle'] == "0") {?> 
											<h2 class="card-title text-danger">İZİN YOK</h2>
<?php } ?> 
<?php
if ($kbilgi['personelekle'] == "1") {?> 
											<h2 class="card-title text-success">İZİN VAR</h2>
<?php } ?>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
<div class="col-sm-6 col-md-4">
							<div class="card card-stats card-round">
								<div class="card-body ">
									<div class="row">
										<div class="col-5">
											<div class="icon-big text-center">
												<i class="fas fa-edit text-warning"></i>
											</div>
										</div>
										<div class="col-7 col-stats">
											<div class="numbers">
												<p class="card-category">PERSONEL DÜZENLEME İZNİ</p>
																	<?php
if ($kbilgi['personelduzenle'] == "0") {?> 
											<h2 class="card-title text-danger">İZİN YOK</h2>
<?php } ?> 
<?php
if ($kbilgi['personelduzenle'] == "1") {?> 
											<h2 class="card-title text-success">İZİN VAR</h2>
<?php } ?>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
<div class="col-sm-6 col-md-4">
							<div class="card card-stats card-round">
								<div class="card-body ">
									<div class="row">
										<div class="col-5">
											<div class="icon-big text-center">
												<i class="fas fa-times text-danger"></i>
											</div>
										</div>
										<div class="col-7 col-stats">
											<div class="numbers">
												<p class="card-category">PERSONEL SİLME İZNİ</p>
													<?php
if ($kbilgi['personelsil'] == "0") {?> 
											<h2 class="card-title text-danger">İZİN YOK</h2>
<?php } ?> 
<?php
if ($kbilgi['personelsil'] == "1") {?> 
											<h2 class="card-title text-success">İZİN VAR</h2>
<?php } ?>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
</div>
<div class="row row-card-no-pd">
						<div class="col-sm-6 col-md-4">
							<div class="card card-stats card-round">
								<div class="card-body">
									<div class="row">
										<div class="col-5">
											<div class="icon-big text-center">
											<i class="fas fa-plus text-success"></i>
											</div>
										</div>
										<div class="col-7 col-stats">
											<div class="numbers">
												<p class="card-category">PERSONEL MAAŞ EKLEME İZNİ</p>
									<?php
if ($kbilgi['personelmaasekle'] == "0") {?> 
											<h2 class="card-title text-danger">İZİN YOK</h2>
<?php } ?> 
<?php
if ($kbilgi['personelmaasekle'] == "1") {?> 
											<h2 class="card-title text-success">İZİN VAR</h2>
<?php } ?>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
<div class="col-sm-6 col-md-4">
							<div class="card card-stats card-round">
								<div class="card-body ">
									<div class="row">
										<div class="col-5">
											<div class="icon-big text-center">
												<i class="fas fa-edit text-warning"></i>
											</div>
										</div>
										<div class="col-7 col-stats">
											<div class="numbers">
												<p class="card-category">PERSONEL MAAŞ DÜZENLEME İZNİ</p>
																	<?php
if ($kbilgi['personelmaasduzenle'] == "0") {?> 
											<h2 class="card-title text-danger">İZİN YOK</h2>
<?php } ?> 
<?php
if ($kbilgi['personelmaasduzenle'] == "1") {?> 
											<h2 class="card-title text-success">İZİN VAR</h2>
<?php } ?>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
<div class="col-sm-6 col-md-4">
							<div class="card card-stats card-round">
								<div class="card-body ">
									<div class="row">
										<div class="col-5">
											<div class="icon-big text-center">
												<i class="fas fa-times text-danger"></i>
											</div>
										</div>
										<div class="col-7 col-stats">
											<div class="numbers">
												<p class="card-category">PERSONEL MAAŞ SİLME İZNİ</p>
													<?php
if ($kbilgi['personelmaassil'] == "0") {?> 
											<h2 class="card-title text-danger">İZİN YOK</h2>
<?php } ?> 
<?php
if ($kbilgi['personelmaassil'] == "1") {?> 
											<h2 class="card-title text-success">İZİN VAR</h2>
<?php } ?>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
</div>
<div class="row row-card-no-pd">
						<div class="col-sm-6 col-md-4">
							<div class="card card-stats card-round">
								<div class="card-body">
									<div class="row">
										<div class="col-5">
											<div class="icon-big text-center">
											<i class="fas fa-plus text-success"></i>
											</div>
										</div>
										<div class="col-7 col-stats">
											<div class="numbers">
												<p class="card-category">PERSONEL MESAİ EKLEME İZNİ</p>
									<?php
if ($kbilgi['personelmesaiekle'] == "0") {?> 
											<h2 class="card-title text-danger">İZİN YOK</h2>
<?php } ?> 
<?php
if ($kbilgi['personelmesaiekle'] == "1") {?> 
											<h2 class="card-title text-success">İZİN VAR</h2>
<?php } ?>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
<div class="col-sm-6 col-md-4">
							<div class="card card-stats card-round">
								<div class="card-body ">
									<div class="row">
										<div class="col-5">
											<div class="icon-big text-center">
												<i class="fas fa-edit text-warning"></i>
											</div>
										</div>
										<div class="col-7 col-stats">
											<div class="numbers">
												<p class="card-category">PERSONEL MESAİ DÜZENLEME İZNİ</p>
																	<?php
if ($kbilgi['personelmesaiduzenle'] == "0") {?> 
											<h2 class="card-title text-danger">İZİN YOK</h2>
<?php } ?> 
<?php
if ($kbilgi['personelmesaiduzenle'] == "1") {?> 
											<h2 class="card-title text-success">İZİN VAR</h2>
<?php } ?>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
<div class="col-sm-6 col-md-4">
							<div class="card card-stats card-round">
								<div class="card-body ">
									<div class="row">
										<div class="col-5">
											<div class="icon-big text-center">
												<i class="fas fa-times text-danger"></i>
											</div>
										</div>
										<div class="col-7 col-stats">
											<div class="numbers">
												<p class="card-category">PERSONEL MESAİ SİLME İZNİ</p>
													<?php
if ($kbilgi['personelmesaisil'] == "0") {?> 
											<h2 class="card-title text-danger">İZİN YOK</h2>
<?php } ?> 
<?php
if ($kbilgi['personelmesaisil'] == "1") {?> 
											<h2 class="card-title text-success">İZİN VAR</h2>
<?php } ?>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
</div>
<div class="row row-card-no-pd">
						<div class="col-sm-6 col-md-4">
							<div class="card card-stats card-round">
								<div class="card-body">
									<div class="row">
										<div class="col-5">
											<div class="icon-big text-center">
											<i class="fas fa-plus text-success"></i>
											</div>
										</div>
										<div class="col-7 col-stats">
											<div class="numbers">
												<p class="card-category">PERSONEL İZİN EKLEME İZNİ</p>
									<?php
if ($kbilgi['personelizinekle'] == "0") {?> 
											<h2 class="card-title text-danger">İZİN YOK</h2>
<?php } ?> 
<?php
if ($kbilgi['personelizinekle'] == "1") {?> 
											<h2 class="card-title text-success">İZİN VAR</h2>
<?php } ?>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
<div class="col-sm-6 col-md-4">
							<div class="card card-stats card-round">
								<div class="card-body ">
									<div class="row">
										<div class="col-5">
											<div class="icon-big text-center">
												<i class="fas fa-edit text-warning"></i>
											</div>
										</div>
										<div class="col-7 col-stats">
											<div class="numbers">
												<p class="card-category">PERSONEL İZİN DÜZENLEME İZNİ</p>
																	<?php
if ($kbilgi['personelizinduzenle'] == "0") {?> 
											<h2 class="card-title text-danger">İZİN YOK</h2>
<?php } ?> 
<?php
if ($kbilgi['personelizinduzenle'] == "1") {?> 
											<h2 class="card-title text-success">İZİN VAR</h2>
<?php } ?>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
<div class="col-sm-6 col-md-4">
							<div class="card card-stats card-round">
								<div class="card-body ">
									<div class="row">
										<div class="col-5">
											<div class="icon-big text-center">
												<i class="fas fa-times text-danger"></i>
											</div>
										</div>
										<div class="col-7 col-stats">
											<div class="numbers">
												<p class="card-category">PERSONEL İZİN SİLME İZNİ</p>
													<?php
if ($kbilgi['personelizinsil'] == "0") {?> 
											<h2 class="card-title text-danger">İZİN YOK</h2>
<?php } ?> 
<?php
if ($kbilgi['personelizinsil'] == "1") {?> 
											<h2 class="card-title text-success">İZİN VAR</h2>
<?php } ?>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
</div>
<div class="row row-card-no-pd">
						<div class="col-sm-6 col-md-4">
							<div class="card card-stats card-round">
								<div class="card-body">
									<div class="row">
										<div class="col-5">
											<div class="icon-big text-center">
											<i class="fas fa-plus text-success"></i>
											</div>
										</div>
										<div class="col-7 col-stats">
											<div class="numbers">
												<p class="card-category">PERSONEL ÖDEME EKLEME İZNİ</p>
									<?php
if ($kbilgi['personelodemeekle'] == "0") {?> 
											<h2 class="card-title text-danger">İZİN YOK</h2>
<?php } ?> 
<?php
if ($kbilgi['personelodemeekle'] == "1") {?> 
											<h2 class="card-title text-success">İZİN VAR</h2>
<?php } ?>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
<div class="col-sm-6 col-md-4">
							<div class="card card-stats card-round">
								<div class="card-body ">
									<div class="row">
										<div class="col-5">
											<div class="icon-big text-center">
												<i class="fas fa-edit text-warning"></i>
											</div>
										</div>
										<div class="col-7 col-stats">
											<div class="numbers">
												<p class="card-category">PERSONEL ÖDEME DÜZENLEME İZNİ</p>
																	<?php
if ($kbilgi['personelodemeduzenle'] == "0") {?> 
											<h2 class="card-title text-danger">İZİN YOK</h2>
<?php } ?> 
<?php
if ($kbilgi['personelodemeduzenle'] == "1") {?> 
											<h2 class="card-title text-success">İZİN VAR</h2>
<?php } ?>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
<div class="col-sm-6 col-md-4">
							<div class="card card-stats card-round">
								<div class="card-body ">
									<div class="row">
										<div class="col-5">
											<div class="icon-big text-center">
												<i class="fas fa-times text-danger"></i>
											</div>
										</div>
										<div class="col-7 col-stats">
											<div class="numbers">
												<p class="card-category">PERSONEL ÖDEME SİLME İZNİ</p>
													<?php
if ($kbilgi['personelodemesil'] == "0") {?> 
											<h2 class="card-title text-danger">İZİN YOK</h2>
<?php } ?> 
<?php
if ($kbilgi['personelodemesil'] == "1") {?> 
											<h2 class="card-title text-success">İZİN VAR</h2>
<?php } ?>
											</div>
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
	
	

</body>
</html>

	