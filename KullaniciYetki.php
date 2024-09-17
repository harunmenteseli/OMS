<?php
require("Ayarlar/Baglantim.php"); 
require("Ayarlar/Guvenlik.php"); 
?>
	<?php
$sorgu = $baglanti->prepare("SELECT * FROM Kullanicilar Where id=:id");
$sorgu->execute(['id' => (int)$_GET["id"]]);
$sonuc = $sorgu->fetch();//sorgu çalıştırılıp veriler alınıyor
?>
<!DOCTYPE html>
<html lang="tr">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	
	<title><?= $sonuc["ad"] ?> <?= $sonuc["soyad"] ?> Kulanıcısı Düzenle - <?= $ayar["siteadi"] ?> - <?= $ayar["siteslogan"] ?></title>
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
      
						<?php 
 if ($kbilgi["yetki"]==4 or $kbilgi["yetki"]==3) {?>
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
if ($sonuc['cariekle'] == "0") {?> 
											<h2 class="card-title text-danger">İZİN YOK</h2>
<?php } ?> 
<?php
if ($sonuc['cariekle'] == "1") {?> 
											<h2 class="card-title text-success">İZİN VAR</h2>
<?php } ?>
									      <label class="switch">
                        <!-- checkbox a id ve checked bilgilerini ekliyoruz -->
                        <input type="checkbox" id='<?php echo $sonuc['id'] ?>' class="aktifPasif cariekle" <?= $sonuc['cariekle']==1?'checked':'' ?> />
                        <span class="slider round"></span>
                    </label>





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
if ($sonuc['cariduzenle'] == "0") {?> 
											<h2 class="card-title text-danger">İZİN YOK</h2>
<?php } ?> 
<?php
if ($sonuc['cariduzenle'] == "1") {?> 
											<h2 class="card-title text-success">İZİN VAR</h2>
<?php } ?>
									      <label class="switch">
                        <!-- checkbox a id ve checked bilgilerini ekliyoruz -->
                        <input type="checkbox" id='<?php echo $sonuc['id'] ?>' class="aktifPasif cariduzenle" <?= $sonuc['cariduzenle']==1?'checked':'' ?> />
                        <span class="slider round"></span>
                    </label>

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
if ($sonuc['carisil'] == "0") {?> 
											<h2 class="card-title text-danger">İZİN YOK</h2>
<?php } ?> 
<?php
if ($sonuc['carisil'] == "1") {?> 
											<h2 class="card-title text-success">İZİN VAR</h2>
<?php } ?>
											      <label class="switch">
                        <!-- checkbox a id ve checked bilgilerini ekliyoruz -->
                        <input type="checkbox" id='<?php echo $sonuc['id'] ?>' class="aktifPasif carisil" <?= $sonuc['carisil']==1?'checked':'' ?> />
                        <span class="slider round"></span>
                    </label>
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
if ($sonuc['carigrupekle'] == "0") {?> 
											<h2 class="card-title text-danger">İZİN YOK</h2>
<?php } ?> 
<?php
if ($sonuc['carigrupekle'] == "1") {?> 
											<h2 class="card-title text-success">İZİN VAR</h2>
<?php } ?>
											      <label class="switch">
                        <!-- checkbox a id ve checked bilgilerini ekliyoruz -->
                        <input type="checkbox" id='<?php echo $sonuc['id'] ?>' class="aktifPasif carigrupekle" <?= $sonuc['carigrupekle']==1?'checked':'' ?> />
                        <span class="slider round"></span>
                    </label>
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
if ($sonuc['carigrupduzenle'] == "0") {?> 
											<h2 class="card-title text-danger">İZİN YOK</h2>
<?php } ?> 
<?php
if ($sonuc['carigrupduzenle'] == "1") {?> 
											<h2 class="card-title text-success">İZİN VAR</h2>
<?php } ?>
											      <label class="switch">
                        <!-- checkbox a id ve checked bilgilerini ekliyoruz -->
                        <input type="checkbox" id='<?php echo $sonuc['id'] ?>' class="aktifPasif carigrupduzenle" <?= $sonuc['carigrupduzenle']==1?'checked':'' ?> />
                        <span class="slider round"></span>
                    </label>
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
if ($sonuc['carigrupsil'] == "0") {?> 
											<h2 class="card-title text-danger">İZİN YOK</h2>
<?php } ?> 
<?php
if ($sonuc['carigrupsil'] == "1") {?> 
											<h2 class="card-title text-success">İZİN VAR</h2>
<?php } ?>
											      <label class="switch">
                        <!-- checkbox a id ve checked bilgilerini ekliyoruz -->
                        <input type="checkbox" id='<?php echo $sonuc['id'] ?>' class="aktifPasif carigrupsil" <?= $sonuc['carigrupsil']==1?'checked':'' ?> />
                        <span class="slider round"></span>
                    </label>
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
if ($sonuc['parabirimiekle'] == "0") {?> 
											<h2 class="card-title text-danger">İZİN YOK</h2>
<?php } ?> 
<?php
if ($sonuc['parabirimiekle'] == "1") {?> 
											<h2 class="card-title text-success">İZİN VAR</h2>
<?php } ?>
											      <label class="switch">
                        <!-- checkbox a id ve checked bilgilerini ekliyoruz -->
                        <input type="checkbox" id='<?php echo $sonuc['id'] ?>' class="aktifPasif parabirimiekle" <?= $sonuc['parabirimiekle']==1?'checked':'' ?> />
                        <span class="slider round"></span>
                    </label>
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
if ($sonuc['parabirimiduzenle'] == "0") {?> 
											<h2 class="card-title text-danger">İZİN YOK</h2>
<?php } ?> 
<?php
if ($sonuc['parabirimiduzenle'] == "1") {?> 
											<h2 class="card-title text-success">İZİN VAR</h2>
<?php } ?>
											      <label class="switch">
                        <!-- checkbox a id ve checked bilgilerini ekliyoruz -->
                        <input type="checkbox" id='<?php echo $sonuc['id'] ?>' class="aktifPasif parabirimiduzenle" <?= $sonuc['parabirimiduzenle']==1?'checked':'' ?> />
                        <span class="slider round"></span>
                    </label>
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
if ($sonuc['parabirimisil'] == "0") {?> 
											<h2 class="card-title text-danger">İZİN YOK</h2>
<?php } ?> 
<?php
if ($sonuc['parabirimisil'] == "1") {?> 
											<h2 class="card-title text-success">İZİN VAR</h2>
<?php } ?>
											      <label class="switch">
                        <!-- checkbox a id ve checked bilgilerini ekliyoruz -->
                        <input type="checkbox" id='<?php echo $sonuc['id'] ?>' class="aktifPasif parabirimisil" <?= $sonuc['parabirimisil']==1?'checked':'' ?> />
                        <span class="slider round"></span>
                    </label>
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
if ($sonuc['stokekle'] == "0") {?> 
											<h2 class="card-title text-danger">İZİN YOK</h2>
<?php } ?> 
<?php
if ($sonuc['stokekle'] == "1") {?> 
											<h2 class="card-title text-success">İZİN VAR</h2>
<?php } ?>
											      <label class="switch">
                        <!-- checkbox a id ve checked bilgilerini ekliyoruz -->
                        <input type="checkbox" id='<?php echo $sonuc['id'] ?>' class="aktifPasif stokekle" <?= $sonuc['stokekle']==1?'checked':'' ?> />
                        <span class="slider round"></span>
                    </label>
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
if ($sonuc['stokduzenle'] == "0") {?> 
											<h2 class="card-title text-danger">İZİN YOK</h2>
<?php } ?> 
<?php
if ($sonuc['stokduzenle'] == "1") {?> 
											<h2 class="card-title text-success">İZİN VAR</h2>
<?php } ?>
											      <label class="switch">
                        <!-- checkbox a id ve checked bilgilerini ekliyoruz -->
                        <input type="checkbox" id='<?php echo $sonuc['id'] ?>' class="aktifPasif stokduzenle" <?= $sonuc['stokduzenle']==1?'checked':'' ?> />
                        <span class="slider round"></span>
                    </label>
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
if ($sonuc['stoksil'] == "0") {?> 
											<h2 class="card-title text-danger">İZİN YOK</h2>
<?php } ?> 
<?php
if ($sonuc['stoksil'] == "1") {?> 
											<h2 class="card-title text-success">İZİN VAR</h2>
<?php } ?>											      <label class="switch">
                        <!-- checkbox a id ve checked bilgilerini ekliyoruz -->
                        <input type="checkbox" id='<?php echo $sonuc['id'] ?>' class="aktifPasif stoksil" <?= $sonuc['stoksil']==1?'checked':'' ?> />
                        <span class="slider round"></span>
                    </label>

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
if ($sonuc['stokgrupekle'] == "0") {?> 
											<h2 class="card-title text-danger">İZİN YOK</h2>
<?php } ?> 
<?php
if ($sonuc['stokgrupekle'] == "1") {?> 
											<h2 class="card-title text-success">İZİN VAR</h2>
<?php } ?>
											      <label class="switch">
                        <!-- checkbox a id ve checked bilgilerini ekliyoruz -->
                        <input type="checkbox" id='<?php echo $sonuc['id'] ?>' class="aktifPasif stokgrupekle" <?= $sonuc['stokgrupekle']==1?'checked':'' ?> />
                        <span class="slider round"></span>
                    </label>
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
if ($sonuc['stokgrupduzenle'] == "0") {?> 
											<h2 class="card-title text-danger">İZİN YOK</h2>
<?php } ?> 
<?php
if ($sonuc['stokgrupduzenle'] == "1") {?> 
											<h2 class="card-title text-success">İZİN VAR</h2>
<?php } ?>
											      <label class="switch">
                        <!-- checkbox a id ve checked bilgilerini ekliyoruz -->
                        <input type="checkbox" id='<?php echo $sonuc['id'] ?>' class="aktifPasif stokgrupduzenle" <?= $sonuc['stokgrupduzenle']==1?'checked':'' ?> />
                        <span class="slider round"></span>
                    </label>
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
if ($sonuc['stokgrupsil'] == "0") {?> 
											<h2 class="card-title text-danger">İZİN YOK</h2>
<?php } ?> 
<?php
if ($sonuc['stokgrupsil'] == "1") {?> 
											<h2 class="card-title text-success">İZİN VAR</h2>
<?php } ?>
											      <label class="switch">
                        <!-- checkbox a id ve checked bilgilerini ekliyoruz -->
                        <input type="checkbox" id='<?php echo $sonuc['id'] ?>' class="aktifPasif stokgrupsil" <?= $sonuc['stokgrupsil']==1?'checked':'' ?> />
                        <span class="slider round"></span>
                    </label>
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
if ($sonuc['birimekle'] == "0") {?> 
											<h2 class="card-title text-danger">İZİN YOK</h2>
<?php } ?> 
<?php
if ($sonuc['birimekle'] == "1") {?> 
											<h2 class="card-title text-success">İZİN VAR</h2>
<?php } ?>
											      <label class="switch">
                        <!-- checkbox a id ve checked bilgilerini ekliyoruz -->
                        <input type="checkbox" id='<?php echo $sonuc['id'] ?>' class="aktifPasif birimekle" <?= $sonuc['birimekle']==1?'checked':'' ?> />
                        <span class="slider round"></span>
                    </label>
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
if ($sonuc['birimduzenle'] == "0") {?> 
											<h2 class="card-title text-danger">İZİN YOK</h2>
<?php } ?> 
<?php
if ($sonuc['birimduzenle'] == "1") {?> 
											<h2 class="card-title text-success">İZİN VAR</h2>
<?php } ?>
											      <label class="switch">
                        <!-- checkbox a id ve checked bilgilerini ekliyoruz -->
                        <input type="checkbox" id='<?php echo $sonuc['id'] ?>' class="aktifPasif birimduzenle" <?= $sonuc['birimduzenle']==1?'checked':'' ?> />
                        <span class="slider round"></span>
                    </label>
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
if ($sonuc['birimsil'] == "0") {?> 
											<h2 class="card-title text-danger">İZİN YOK</h2>
<?php } ?> 
<?php
if ($sonuc['birimsil'] == "1") {?> 
											<h2 class="card-title text-success">İZİN VAR</h2>
<?php } ?>
											      <label class="switch">
                        <!-- checkbox a id ve checked bilgilerini ekliyoruz -->
                        <input type="checkbox" id='<?php echo $sonuc['id'] ?>' class="aktifPasif birimsil" <?= $sonuc['birimsil']==1?'checked':'' ?> />
                        <span class="slider round"></span>
                    </label>
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
if ($sonuc['markaekle'] == "0") {?> 
											<h2 class="card-title text-danger">İZİN YOK</h2>
<?php } ?> 
<?php
if ($sonuc['markaekle'] == "1") {?> 
											<h2 class="card-title text-success">İZİN VAR</h2>
<?php } ?>
											      <label class="switch">
                        <!-- checkbox a id ve checked bilgilerini ekliyoruz -->
                        <input type="checkbox" id='<?php echo $sonuc['id'] ?>' class="aktifPasif markaekle" <?= $sonuc['markaekle']==1?'checked':'' ?> />
                        <span class="slider round"></span>
                    </label>
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
if ($sonuc['markaduzenle'] == "0") {?> 
											<h2 class="card-title text-danger">İZİN YOK</h2>
<?php } ?> 
<?php
if ($sonuc['markaduzenle'] == "1") {?> 
											<h2 class="card-title text-success">İZİN VAR</h2>
<?php } ?>
											      <label class="switch">
                        <!-- checkbox a id ve checked bilgilerini ekliyoruz -->
                        <input type="checkbox" id='<?php echo $sonuc['id'] ?>' class="aktifPasif markaduzenle" <?= $sonuc['markaduzenle']==1?'checked':'' ?> />
                        <span class="slider round"></span>
                    </label>
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
if ($sonuc['markasil'] == "0") {?> 
											<h2 class="card-title text-danger">İZİN YOK</h2>
<?php } ?> 
<?php
if ($sonuc['markasil'] == "1") {?> 
											<h2 class="card-title text-success">İZİN VAR</h2>
<?php } ?>
											      <label class="switch">
                        <!-- checkbox a id ve checked bilgilerini ekliyoruz -->
                        <input type="checkbox" id='<?php echo $sonuc['id'] ?>' class="aktifPasif markasil" <?= $sonuc['markasil']==1?'checked':'' ?> />
                        <span class="slider round"></span>
                    </label>
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
if ($sonuc['modelekle'] == "0") {?> 
											<h2 class="card-title text-danger">İZİN YOK</h2>
<?php } ?> 
<?php
if ($sonuc['modelekle'] == "1") {?> 
											<h2 class="card-title text-success">İZİN VAR</h2>
<?php } ?>
											      <label class="switch">
                        <!-- checkbox a id ve checked bilgilerini ekliyoruz -->
                        <input type="checkbox" id='<?php echo $sonuc['id'] ?>' class="aktifPasif modelekle" <?= $sonuc['modelekle']==1?'checked':'' ?> />
                        <span class="slider round"></span>
                    </label>
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
if ($sonuc['modelduzenle'] == "0") {?> 
											<h2 class="card-title text-danger">İZİN YOK</h2>
<?php } ?> 
<?php
if ($sonuc['modelduzenle'] == "1") {?> 
											<h2 class="card-title text-success">İZİN VAR</h2>
<?php } ?>
											      <label class="switch">
                        <!-- checkbox a id ve checked bilgilerini ekliyoruz -->
                        <input type="checkbox" id='<?php echo $sonuc['id'] ?>' class="aktifPasif modelduzenle" <?= $sonuc['modelduzenle']==1?'checked':'' ?> />
                        <span class="slider round"></span>
                    </label>
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
if ($sonuc['modelsil'] == "0") {?> 
											<h2 class="card-title text-danger">İZİN YOK</h2>
<?php } ?> 
<?php
if ($sonuc['modelsil'] == "1") {?> 
											<h2 class="card-title text-success">İZİN VAR</h2>
<?php } ?>
											      <label class="switch">
                        <!-- checkbox a id ve checked bilgilerini ekliyoruz -->
                        <input type="checkbox" id='<?php echo $sonuc['id'] ?>' class="aktifPasif modelsil" <?= $sonuc['modelsil']==1?'checked':'' ?> />
                        <span class="slider round"></span>
                    </label>
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
if ($sonuc['kdvekle'] == "0") {?> 
											<h2 class="card-title text-danger">İZİN YOK</h2>
<?php } ?> 
<?php
if ($sonuc['kdvekle'] == "1") {?> 
											<h2 class="card-title text-success">İZİN VAR</h2>
<?php } ?>
											      <label class="switch">
                        <!-- checkbox a id ve checked bilgilerini ekliyoruz -->
                        <input type="checkbox" id='<?php echo $sonuc['id'] ?>' class="aktifPasif kdvekle" <?= $sonuc['kdvekle']==1?'checked':'' ?> />
                        <span class="slider round"></span>
                    </label>
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
if ($sonuc['kdvduzenle'] == "0") {?> 
											<h2 class="card-title text-danger">İZİN YOK</h2>
<?php } ?> 
<?php
if ($sonuc['kdvduzenle'] == "1") {?> 
											<h2 class="card-title text-success">İZİN VAR</h2>
<?php } ?>
											      <label class="switch">
                        <!-- checkbox a id ve checked bilgilerini ekliyoruz -->
                        <input type="checkbox" id='<?php echo $sonuc['id'] ?>' class="aktifPasif kdvduzenle" <?= $sonuc['kdvduzenle']==1?'checked':'' ?> />
                        <span class="slider round"></span>
                    </label>
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
if ($sonuc['kdvsil'] == "0") {?> 
											<h2 class="card-title text-danger">İZİN YOK</h2>
<?php } ?> 
<?php
if ($sonuc['kdvsil'] == "1") {?> 
											<h2 class="card-title text-success">İZİN VAR</h2>
<?php } ?>
											      <label class="switch">
                        <!-- checkbox a id ve checked bilgilerini ekliyoruz -->
                        <input type="checkbox" id='<?php echo $sonuc['id'] ?>' class="aktifPasif kdvsil" <?= $sonuc['kdvsil']==1?'checked':'' ?> />
                        <span class="slider round"></span>
                    </label>
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
if ($sonuc['otvekle'] == "0") {?> 
											<h2 class="card-title text-danger">İZİN YOK</h2>
<?php } ?> 
<?php
if ($sonuc['otvekle'] == "1") {?> 
											<h2 class="card-title text-success">İZİN VAR</h2>
<?php } ?>
											      <label class="switch">
                        <!-- checkbox a id ve checked bilgilerini ekliyoruz -->
                        <input type="checkbox" id='<?php echo $sonuc['id'] ?>' class="aktifPasif otvekle" <?= $sonuc['otvekle']==1?'checked':'' ?> />
                        <span class="slider round"></span>
                    </label>
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
if ($sonuc['otvduzenle'] == "0") {?> 
											<h2 class="card-title text-danger">İZİN YOK</h2>
<?php } ?> 
<?php
if ($sonuc['otvduzenle'] == "1") {?> 
											<h2 class="card-title text-success">İZİN VAR</h2>
<?php } ?>
											      <label class="switch">
                        <!-- checkbox a id ve checked bilgilerini ekliyoruz -->
                        <input type="checkbox" id='<?php echo $sonuc['id'] ?>' class="aktifPasif otvduzenle" <?= $sonuc['otvduzenle']==1?'checked':'' ?> />
                        <span class="slider round"></span>
                    </label>
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
if ($sonuc['otvsil'] == "0") {?> 
											<h2 class="card-title text-danger">İZİN YOK</h2>
<?php } ?> 
<?php
if ($sonuc['otvsil'] == "1") {?> 
											<h2 class="card-title text-success">İZİN VAR</h2>
<?php } ?>
											      <label class="switch">
                        <!-- checkbox a id ve checked bilgilerini ekliyoruz -->
                        <input type="checkbox" id='<?php echo $sonuc['id'] ?>' class="aktifPasif otvsil" <?= $sonuc['otvsil']==1?'checked':'' ?> />
                        <span class="slider round"></span>
                    </label>
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
if ($sonuc['alisfaturaekle'] == "0") {?> 
											<h2 class="card-title text-danger">İZİN YOK</h2>
<?php } ?> 
<?php
if ($sonuc['alisfaturaekle'] == "1") {?> 
											<h2 class="card-title text-success">İZİN VAR</h2>
<?php } ?>
											      <label class="switch">
                        <!-- checkbox a id ve checked bilgilerini ekliyoruz -->
                        <input type="checkbox" id='<?php echo $sonuc['id'] ?>' class="aktifPasif alisfaturaekle" <?= $sonuc['alisfaturaekle']==1?'checked':'' ?> />
                        <span class="slider round"></span>
                    </label>
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
if ($sonuc['alisfaturaduzenle'] == "0") {?> 
											<h2 class="card-title text-danger">İZİN YOK</h2>
<?php } ?> 
<?php
if ($sonuc['alisfaturaduzenle'] == "1") {?> 
											<h2 class="card-title text-success">İZİN VAR</h2>
<?php } ?>
											      <label class="switch">
                        <!-- checkbox a id ve checked bilgilerini ekliyoruz -->
                        <input type="checkbox" id='<?php echo $sonuc['id'] ?>' class="aktifPasif alisfaturaduzenle" <?= $sonuc['alisfaturaduzenle']==1?'checked':'' ?> />
                        <span class="slider round"></span>
                    </label>
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
if ($sonuc['alisfaturasil'] == "0") {?> 
											<h2 class="card-title text-danger">İZİN YOK</h2>
<?php } ?> 
<?php
if ($sonuc['alisfaturasil'] == "1") {?> 
											<h2 class="card-title text-success">İZİN VAR</h2>
<?php } ?>
											      <label class="switch">
                        <!-- checkbox a id ve checked bilgilerini ekliyoruz -->
                        <input type="checkbox" id='<?php echo $sonuc['id'] ?>' class="aktifPasif alisfaturasil" <?= $sonuc['alisfaturasil']==1?'checked':'' ?> />
                        <span class="slider round"></span>
                    </label>
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
if ($sonuc['satisfaturaekle'] == "0") {?> 
											<h2 class="card-title text-danger">İZİN YOK</h2>
<?php } ?> 
<?php
if ($sonuc['satisfaturaekle'] == "1") {?> 
											<h2 class="card-title text-success">İZİN VAR</h2>
<?php } ?>
											      <label class="switch">
                        <!-- checkbox a id ve checked bilgilerini ekliyoruz -->
                        <input type="checkbox" id='<?php echo $sonuc['id'] ?>' class="aktifPasif satisfaturaekle" <?= $sonuc['satisfaturaekle']==1?'checked':'' ?> />
                        <span class="slider round"></span>
                    </label>
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
if ($sonuc['satisfaturaduzenle'] == "0") {?> 
											<h2 class="card-title text-danger">İZİN YOK</h2>
<?php } ?> 
<?php
if ($sonuc['satisfaturaduzenle'] == "1") {?> 
											<h2 class="card-title text-success">İZİN VAR</h2>
<?php } ?>
											      <label class="switch">
                        <!-- checkbox a id ve checked bilgilerini ekliyoruz -->
                        <input type="checkbox" id='<?php echo $sonuc['id'] ?>' class="aktifPasif satisfaturaduzenle" <?= $sonuc['satisfaturaduzenle']==1?'checked':'' ?> />
                        <span class="slider round"></span>
                    </label>
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
if ($sonuc['satisfaturasil'] == "0") {?> 
											<h2 class="card-title text-danger">İZİN YOK</h2>
<?php } ?> 
<?php
if ($sonuc['satisfaturasil'] == "1") {?> 
											<h2 class="card-title text-success">İZİN VAR</h2>
<?php } ?>
											      <label class="switch">
                        <!-- checkbox a id ve checked bilgilerini ekliyoruz -->
                        <input type="checkbox" id='<?php echo $sonuc['id'] ?>' class="aktifPasif satisfaturasil" <?= $sonuc['satisfaturasil']==1?'checked':'' ?> />
                        <span class="slider round"></span>
                    </label>
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
												<p class="card-category">CARİ ALACAKLANDIRMA İZNİ</p>
									<?php
if ($sonuc['carialacaklandir'] == "0") {?> 
											<h2 class="card-title text-danger">İZİN YOK</h2>
<?php } ?> 
<?php
if ($sonuc['carialacaklandir'] == "1") {?> 
											<h2 class="card-title text-success">İZİN VAR</h2>
<?php } ?>
											      <label class="switch">
                        <!-- checkbox a id ve checked bilgilerini ekliyoruz -->
                        <input type="checkbox" id='<?php echo $sonuc['id'] ?>' class="aktifPasif carialacaklandir" <?= $sonuc['carialacaklandir']==1?'checked':'' ?> />
                        <span class="slider round"></span>
                    </label>
	
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
												<p class="card-category">CARİ ALACAKLANDIRMA DÜZENLEME İZNİ</p>
																	<?php
if ($sonuc['carialacaklandirduzenle'] == "0") {?> 
											<h2 class="card-title text-danger">İZİN YOK</h2>
<?php } ?> 
<?php
if ($sonuc['carialacaklandirduzenle'] == "1") {?> 
											<h2 class="card-title text-success">İZİN VAR</h2>
<?php } ?>
											      <label class="switch">
                        <!-- checkbox a id ve checked bilgilerini ekliyoruz -->
                        <input type="checkbox" id='<?php echo $sonuc['id'] ?>' class="aktifPasif carialacaklandirduzenle" <?= $sonuc['carialacaklandirduzenle']==1?'checked':'' ?> />
                        <span class="slider round"></span>
                    </label>
		
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
												<p class="card-category">CARİ ALACAKLANDIRMA SİLME İZNİ</p>
													<?php
if ($sonuc['carialacaklandirsil'] == "0") {?> 
											<h2 class="card-title text-danger">İZİN YOK</h2>
<?php } ?> 
<?php
if ($sonuc['carialacaklandirsil'] == "1") {?> 
											<h2 class="card-title text-success">İZİN VAR</h2>
<?php } ?>
 <label class="switch">
                        <!-- checkbox a id ve checked bilgilerini ekliyoruz -->
                        <input type="checkbox" id='<?php echo $sonuc['id'] ?>' class="aktifPasif carialacaklandirsil" <?= $sonuc['carialacaklandirsil']==1?'checked':'' ?> />
                        <span class="slider round"></span>
                    </label>

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
												<p class="card-category">CARİ BORÇLANDIRMA İZNİ</p>
									<?php
if ($sonuc['cariborclandir'] == "0") {?> 
											<h2 class="card-title text-danger">İZİN YOK</h2>
<?php } ?> 
<?php
if ($sonuc['cariborclandir'] == "1") {?> 
											<h2 class="card-title text-success">İZİN VAR</h2>
<?php } ?>
											      <label class="switch">
                        <!-- checkbox a id ve checked bilgilerini ekliyoruz -->
                        <input type="checkbox" id='<?php echo $sonuc['id'] ?>' class="aktifPasif cariborclandir" <?= $sonuc['cariborclandir']==1?'checked':'' ?> />
                        <span class="slider round"></span>
                    </label>
	
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
												<p class="card-category">CARİ BORÇLANDIRMA DÜZENLEME İZNİ</p>
																	<?php
if ($sonuc['cariborclandirduzenle'] == "0") {?> 
											<h2 class="card-title text-danger">İZİN YOK</h2>
<?php } ?> 
<?php
if ($sonuc['cariborclandirduzenle'] == "1") {?> 
											<h2 class="card-title text-success">İZİN VAR</h2>
<?php } ?>
											      <label class="switch">
                        <!-- checkbox a id ve checked bilgilerini ekliyoruz -->
                        <input type="checkbox" id='<?php echo $sonuc['id'] ?>' class="aktifPasif cariborclandirduzenle" <?= $sonuc['cariborclandirduzenle']==1?'checked':'' ?> />
                        <span class="slider round"></span>
                    </label>
		
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
												<p class="card-category">CARİ BORÇLANDIRMA SİLME İZNİ</p>
													<?php
if ($sonuc['cariborclandirsil'] == "0") {?> 
											<h2 class="card-title text-danger">İZİN YOK</h2>
<?php } ?> 
<?php
if ($sonuc['cariborclandirsil'] == "1") {?> 
											<h2 class="card-title text-success">İZİN VAR</h2>
<?php } ?>
 <label class="switch">
                        <!-- checkbox a id ve checked bilgilerini ekliyoruz -->
                        <input type="checkbox" id='<?php echo $sonuc['id'] ?>' class="aktifPasif cariborclandirsil" <?= $sonuc['cariborclandirsil']==1?'checked':'' ?> />
                        <span class="slider round"></span>
                    </label>

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
if ($sonuc['verilencekekle'] == "0") {?> 
											<h2 class="card-title text-danger">İZİN YOK</h2>
<?php } ?> 
<?php
if ($sonuc['verilencekekle'] == "1") {?> 
											<h2 class="card-title text-success">İZİN VAR</h2>
<?php } ?>
											      <label class="switch">
                        <!-- checkbox a id ve checked bilgilerini ekliyoruz -->
                        <input type="checkbox" id='<?php echo $sonuc['id'] ?>' class="aktifPasif verilencekekle" <?= $sonuc['verilencekekle']==1?'checked':'' ?> />
                        <span class="slider round"></span>
                    </label>
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
if ($sonuc['verilencekduzenle'] == "0") {?> 
											<h2 class="card-title text-danger">İZİN YOK</h2>
<?php } ?> 
<?php
if ($sonuc['verilencekduzenle'] == "1") {?> 
											<h2 class="card-title text-success">İZİN VAR</h2>
<?php } ?>
											      <label class="switch">
                        <!-- checkbox a id ve checked bilgilerini ekliyoruz -->
                        <input type="checkbox" id='<?php echo $sonuc['id'] ?>' class="aktifPasif verilencekduzenle" <?= $sonuc['verilencekduzenle']==1?'checked':'' ?> />
                        <span class="slider round"></span>
                    </label>
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
if ($sonuc['verilenceksil'] == "0") {?> 
											<h2 class="card-title text-danger">İZİN YOK</h2>
<?php } ?> 
<?php
if ($sonuc['verilenceksil'] == "1") {?> 
											<h2 class="card-title text-success">İZİN VAR</h2>
<?php } ?>
											      <label class="switch">
                        <!-- checkbox a id ve checked bilgilerini ekliyoruz -->
                        <input type="checkbox" id='<?php echo $sonuc['id'] ?>' class="aktifPasif verilenceksil" <?= $sonuc['verilenceksil']==1?'checked':'' ?> />
                        <span class="slider round"></span>
                    </label>
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
if ($sonuc['verilensenetekle'] == "0") {?> 
											<h2 class="card-title text-danger">İZİN YOK</h2>
<?php } ?> 
<?php
if ($sonuc['verilensenetekle'] == "1") {?> 
											<h2 class="card-title text-success">İZİN VAR</h2>
<?php } ?>
											      <label class="switch">
                        <!-- checkbox a id ve checked bilgilerini ekliyoruz -->
                        <input type="checkbox" id='<?php echo $sonuc['id'] ?>' class="aktifPasif verilensenetekle" <?= $sonuc['verilensenetekle']==1?'checked':'' ?> />
                        <span class="slider round"></span>
                    </label>
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
if ($sonuc['verilensenetduzenle'] == "0") {?> 
											<h2 class="card-title text-danger">İZİN YOK</h2>
<?php } ?> 
<?php
if ($sonuc['verilensenetduzenle'] == "1") {?> 
											<h2 class="card-title text-success">İZİN VAR</h2>
<?php } ?>
											      <label class="switch">
                        <!-- checkbox a id ve checked bilgilerini ekliyoruz -->
                        <input type="checkbox" id='<?php echo $sonuc['id'] ?>' class="aktifPasif verilensenetduzenle" <?= $sonuc['verilensenetduzenle']==1?'checked':'' ?> />
                        <span class="slider round"></span>
                    </label>
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
if ($sonuc['verilensenetsil'] == "0") {?> 
											<h2 class="card-title text-danger">İZİN YOK</h2>
<?php } ?> 
<?php
if ($sonuc['verilensenetsil'] == "1") {?> 
											<h2 class="card-title text-success">İZİN VAR</h2>
<?php } ?>
											      <label class="switch">
                        <!-- checkbox a id ve checked bilgilerini ekliyoruz -->
                        <input type="checkbox" id='<?php echo $sonuc['id'] ?>' class="aktifPasif verilensenetsil" <?= $sonuc['verilensenetsil']==1?'checked':'' ?> />
                        <span class="slider round"></span>
                    </label>
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
if ($sonuc['alinancekekle'] == "0") {?> 
											<h2 class="card-title text-danger">İZİN YOK</h2>
<?php } ?> 
<?php
if ($sonuc['alinancekekle'] == "1") {?> 
											<h2 class="card-title text-success">İZİN VAR</h2>
<?php } ?>
											      <label class="switch">
                        <!-- checkbox a id ve checked bilgilerini ekliyoruz -->
                        <input type="checkbox" id='<?php echo $sonuc['id'] ?>' class="aktifPasif alinancekekle" <?= $sonuc['alinancekekle']==1?'checked':'' ?> />
                        <span class="slider round"></span>
                    </label>
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
if ($sonuc['alinancekduzenle'] == "0") {?> 
											<h2 class="card-title text-danger">İZİN YOK</h2>
<?php } ?> 
<?php
if ($sonuc['alinancekduzenle'] == "1") {?> 
											<h2 class="card-title text-success">İZİN VAR</h2>
<?php } ?>
											      <label class="switch">
                        <!-- checkbox a id ve checked bilgilerini ekliyoruz -->
                        <input type="checkbox" id='<?php echo $sonuc['id'] ?>' class="aktifPasif alinancekduzenle" <?= $sonuc['alinancekduzenle']==1?'checked':'' ?> />
                        <span class="slider round"></span>
                    </label>
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
if ($sonuc['alinanceksil'] == "0") {?> 
											<h2 class="card-title text-danger">İZİN YOK</h2>
<?php } ?> 
<?php
if ($sonuc['alinanceksil'] == "1") {?> 
											<h2 class="card-title text-success">İZİN VAR</h2>
<?php } ?>
											      <label class="switch">
                        <!-- checkbox a id ve checked bilgilerini ekliyoruz -->
                        <input type="checkbox" id='<?php echo $sonuc['id'] ?>' class="aktifPasif alinanceksil" <?= $sonuc['alinanceksil']==1?'checked':'' ?> />
                        <span class="slider round"></span>
                    </label>
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
if ($sonuc['alinansenetekle'] == "0") {?> 
											<h2 class="card-title text-danger">İZİN YOK</h2>
<?php } ?> 
<?php
if ($sonuc['alinansenetekle'] == "1") {?> 
											<h2 class="card-title text-success">İZİN VAR</h2>
<?php } ?>
											      <label class="switch">
                        <!-- checkbox a id ve checked bilgilerini ekliyoruz -->
                        <input type="checkbox" id='<?php echo $sonuc['id'] ?>' class="aktifPasif alinansenetekle" <?= $sonuc['alinansenetekle']==1?'checked':'' ?> />
                        <span class="slider round"></span>
                    </label>
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
if ($sonuc['alinansenetduzenle'] == "0") {?> 
											<h2 class="card-title text-danger">İZİN YOK</h2>
<?php } ?> 
<?php
if ($sonuc['alinansenetduzenle'] == "1") {?> 
											<h2 class="card-title text-success">İZİN VAR</h2>
<?php } ?>
											      <label class="switch">
                        <!-- checkbox a id ve checked bilgilerini ekliyoruz -->
                        <input type="checkbox" id='<?php echo $sonuc['id'] ?>' class="aktifPasif alinansenetduzenle" <?= $sonuc['alinansenetduzenle']==1?'checked':'' ?> />
                        <span class="slider round"></span>
                    </label>
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
if ($sonuc['alinansenetsil'] == "0") {?> 
											<h2 class="card-title text-danger">İZİN YOK</h2>
<?php } ?> 
<?php
if ($sonuc['alinansenetsil'] == "1") {?> 
											<h2 class="card-title text-success">İZİN VAR</h2>
<?php } ?>
											      <label class="switch">
                        <!-- checkbox a id ve checked bilgilerini ekliyoruz -->
                        <input type="checkbox" id='<?php echo $sonuc['id'] ?>' class="aktifPasif alinansenetsil" <?= $sonuc['alinansenetsil']==1?'checked':'' ?> />
                        <span class="slider round"></span>
                    </label>
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
if ($sonuc['kasaekle'] == "0") {?> 
											<h2 class="card-title text-danger">İZİN YOK</h2>
<?php } ?> 
<?php
if ($sonuc['kasaekle'] == "1") {?> 
											<h2 class="card-title text-success">İZİN VAR</h2>
<?php } ?>
											      <label class="switch">
                        <!-- checkbox a id ve checked bilgilerini ekliyoruz -->
                        <input type="checkbox" id='<?php echo $sonuc['id'] ?>' class="aktifPasif kasaekle" <?= $sonuc['kasaekle']==1?'checked':'' ?> />
                        <span class="slider round"></span>
                    </label>
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
if ($sonuc['kasaduzenle'] == "0") {?> 
											<h2 class="card-title text-danger">İZİN YOK</h2>
<?php } ?> 
<?php
if ($sonuc['kasaduzenle'] == "1") {?> 
											<h2 class="card-title text-success">İZİN VAR</h2>
<?php } ?>
											      <label class="switch">
                        <!-- checkbox a id ve checked bilgilerini ekliyoruz -->
                        <input type="checkbox" id='<?php echo $sonuc['id'] ?>' class="aktifPasif kasaduzenle" <?= $sonuc['kasaduzenle']==1?'checked':'' ?> />
                        <span class="slider round"></span>
                    </label>
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
if ($sonuc['kasasil'] == "0") {?> 
											<h2 class="card-title text-danger">İZİN YOK</h2>
<?php } ?> 
<?php
if ($sonuc['kasasil'] == "1") {?> 
											<h2 class="card-title text-success">İZİN VAR</h2>
<?php } ?>
											      <label class="switch">
                        <!-- checkbox a id ve checked bilgilerini ekliyoruz -->
                        <input type="checkbox" id='<?php echo $sonuc['id'] ?>' class="aktifPasif kasasil" <?= $sonuc['kasasil']==1?'checked':'' ?> />
                        <span class="slider round"></span>
                    </label>
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
if ($sonuc['kasagirisekle'] == "0") {?> 
											<h2 class="card-title text-danger">İZİN YOK</h2>
<?php } ?> 
<?php
if ($sonuc['kasagirisekle'] == "1") {?> 
											<h2 class="card-title text-success">İZİN VAR</h2>
<?php } ?>
											      <label class="switch">
                        <!-- checkbox a id ve checked bilgilerini ekliyoruz -->
                        <input type="checkbox" id='<?php echo $sonuc['id'] ?>' class="aktifPasif kasagirisekle" <?= $sonuc['kasagirisekle']==1?'checked':'' ?> />
                        <span class="slider round"></span>
                    </label>
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
if ($sonuc['kasagirisduzenle'] == "0") {?> 
											<h2 class="card-title text-danger">İZİN YOK</h2>
<?php } ?> 
<?php
if ($sonuc['kasagirisduzenle'] == "1") {?> 
											<h2 class="card-title text-success">İZİN VAR</h2>
<?php } ?>
											      <label class="switch">
                        <!-- checkbox a id ve checked bilgilerini ekliyoruz -->
                        <input type="checkbox" id='<?php echo $sonuc['id'] ?>' class="aktifPasif kasagirisduzenle" <?= $sonuc['kasagirisduzenle']==1?'checked':'' ?> />
                        <span class="slider round"></span>
                    </label>
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
if ($sonuc['kasagirissil'] == "0") {?> 
											<h2 class="card-title text-danger">İZİN YOK</h2>
<?php } ?> 
<?php
if ($sonuc['kasagirissil'] == "1") {?> 
											<h2 class="card-title text-success">İZİN VAR</h2>
<?php } ?>
											      <label class="switch">
                        <!-- checkbox a id ve checked bilgilerini ekliyoruz -->
                        <input type="checkbox" id='<?php echo $sonuc['id'] ?>' class="aktifPasif kasagirissil" <?= $sonuc['kasagirissil']==1?'checked':'' ?> />
                        <span class="slider round"></span>
                    </label>
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
if ($sonuc['kasacikisekle'] == "0") {?> 
											<h2 class="card-title text-danger">İZİN YOK</h2>
<?php } ?> 
<?php
if ($sonuc['kasacikisekle'] == "1") {?> 
											<h2 class="card-title text-success">İZİN VAR</h2>
<?php } ?>
											      <label class="switch">
                        <!-- checkbox a id ve checked bilgilerini ekliyoruz -->
                        <input type="checkbox" id='<?php echo $sonuc['id'] ?>' class="aktifPasif kasacikisekle" <?= $sonuc['kasacikisekle']==1?'checked':'' ?> />
                        <span class="slider round"></span>
                    </label>
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
if ($sonuc['kasacikisduzenle'] == "0") {?> 
											<h2 class="card-title text-danger">İZİN YOK</h2>
<?php } ?> 
<?php
if ($sonuc['kasacikisduzenle'] == "1") {?> 
											<h2 class="card-title text-success">İZİN VAR</h2>
<?php } ?>
											      <label class="switch">
                        <!-- checkbox a id ve checked bilgilerini ekliyoruz -->
                        <input type="checkbox" id='<?php echo $sonuc['id'] ?>' class="aktifPasif kasacikisduzenle" <?= $sonuc['kasacikisduzenle']==1?'checked':'' ?> />
                        <span class="slider round"></span>
                    </label>
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
if ($sonuc['kasacikissil'] == "0") {?> 
											<h2 class="card-title text-danger">İZİN YOK</h2>
<?php } ?> 
<?php
if ($sonuc['kasacikissil'] == "1") {?> 
											<h2 class="card-title text-success">İZİN VAR</h2>
<?php } ?>
											      <label class="switch">
                        <!-- checkbox a id ve checked bilgilerini ekliyoruz -->
                        <input type="checkbox" id='<?php echo $sonuc['id'] ?>' class="aktifPasif kasacikissil" <?= $sonuc['kasacikissil']==1?'checked':'' ?> />
                        <span class="slider round"></span>
                    </label>
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
if ($sonuc['bankaekle'] == "0") {?> 
											<h2 class="card-title text-danger">İZİN YOK</h2>
<?php } ?> 
<?php
if ($sonuc['bankaekle'] == "1") {?> 
											<h2 class="card-title text-success">İZİN VAR</h2>
<?php } ?>
											      <label class="switch">
                        <!-- checkbox a id ve checked bilgilerini ekliyoruz -->
                        <input type="checkbox" id='<?php echo $sonuc['id'] ?>' class="aktifPasif bankaekle" <?= $sonuc['bankaekle']==1?'checked':'' ?> />
                        <span class="slider round"></span>
                    </label>
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
if ($sonuc['bankaduzenle'] == "0") {?> 
											<h2 class="card-title text-danger">İZİN YOK</h2>
<?php } ?> 
<?php
if ($sonuc['bankaduzenle'] == "1") {?> 
											<h2 class="card-title text-success">İZİN VAR</h2>
<?php } ?>
											      <label class="switch">
                        <!-- checkbox a id ve checked bilgilerini ekliyoruz -->
                        <input type="checkbox" id='<?php echo $sonuc['id'] ?>' class="aktifPasif bankaduzenle" <?= $sonuc['bankaduzenle']==1?'checked':'' ?> />
                        <span class="slider round"></span>
                    </label>
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
if ($sonuc['bankasil'] == "0") {?> 
											<h2 class="card-title text-danger">İZİN YOK</h2>
<?php } ?> 
<?php
if ($sonuc['bankasil'] == "1") {?> 
											<h2 class="card-title text-success">İZİN VAR</h2>
<?php } ?>
											      <label class="switch">
                        <!-- checkbox a id ve checked bilgilerini ekliyoruz -->
                        <input type="checkbox" id='<?php echo $sonuc['id'] ?>' class="aktifPasif bankasil" <?= $sonuc['bankasil']==1?'checked':'' ?> />
                        <span class="slider round"></span>
                    </label>

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
if ($sonuc['bankagirisekle'] == "0") {?> 
											<h2 class="card-title text-danger">İZİN YOK</h2>
<?php } ?> 
<?php
if ($sonuc['bankagirisekle'] == "1") {?> 
											<h2 class="card-title text-success">İZİN VAR</h2>
<?php } ?>
											      <label class="switch">
                        <!-- checkbox a id ve checked bilgilerini ekliyoruz -->
                        <input type="checkbox" id='<?php echo $sonuc['id'] ?>' class="aktifPasif bankagirisekle" <?= $sonuc['bankagirisekle']==1?'checked':'' ?> />
                        <span class="slider round"></span>
                    </label>
	
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
if ($sonuc['bankagirisduzenle'] == "0") {?> 
											<h2 class="card-title text-danger">İZİN YOK</h2>
<?php } ?> 
<?php
if ($sonuc['bankagirisduzenle'] == "1") {?> 
											<h2 class="card-title text-success">İZİN VAR</h2>
<?php } ?>
											      <label class="switch">
                        <!-- checkbox a id ve checked bilgilerini ekliyoruz -->
                        <input type="checkbox" id='<?php echo $sonuc['id'] ?>' class="aktifPasif bankagirisduzenle" <?= $sonuc['bankagirisduzenle']==1?'checked':'' ?> />
                        <span class="slider round"></span>
                    </label>
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
if ($sonuc['bankagirissil'] == "0") {?> 
											<h2 class="card-title text-danger">İZİN YOK</h2>
<?php } ?> 
<?php
if ($sonuc['bankagirissil'] == "1") {?> 
											<h2 class="card-title text-success">İZİN VAR</h2>
<?php } ?>
											      <label class="switch">
                        <!-- checkbox a id ve checked bilgilerini ekliyoruz -->
                        <input type="checkbox" id='<?php echo $sonuc['id'] ?>' class="aktifPasif bankagirissil" <?= $sonuc['bankagirissil']==1?'checked':'' ?> />
                        <span class="slider round"></span>
                    </label>

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
if ($sonuc['bankacikisekle'] == "0") {?> 
											<h2 class="card-title text-danger">İZİN YOK</h2>
<?php } ?> 
<?php
if ($sonuc['bankacikisekle'] == "1") {?> 
											<h2 class="card-title text-success">İZİN VAR</h2>
<?php } ?>
											      <label class="switch">
                        <!-- checkbox a id ve checked bilgilerini ekliyoruz -->
                        <input type="checkbox" id='<?php echo $sonuc['id'] ?>' class="aktifPasif bankacikisekle" <?= $sonuc['bankacikisekle']==1?'checked':'' ?> />
                        <span class="slider round"></span>
                    </label>

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
if ($sonuc['bankacikisduzenle'] == "0") {?> 
											<h2 class="card-title text-danger">İZİN YOK</h2>
<?php } ?> 
<?php
if ($sonuc['bankacikisduzenle'] == "1") {?> 
											<h2 class="card-title text-success">İZİN VAR</h2>
<?php } ?>
											      <label class="switch">
                        <!-- checkbox a id ve checked bilgilerini ekliyoruz -->
                        <input type="checkbox" id='<?php echo $sonuc['id'] ?>' class="aktifPasif bankacikisduzenle" <?= $sonuc['bankacikisduzenle']==1?'checked':'' ?> />
                        <span class="slider round"></span>
                    </label>
	
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
if ($sonuc['bankacikissil'] == "0") {?> 
											<h2 class="card-title text-danger">İZİN YOK</h2>
<?php } ?> 
<?php
if ($sonuc['bankacikissil'] == "1") {?> 
											<h2 class="card-title text-success">İZİN VAR</h2>
<?php } ?>
											      <label class="switch">
                        <!-- checkbox a id ve checked bilgilerini ekliyoruz -->
                        <input type="checkbox" id='<?php echo $sonuc['id'] ?>' class="aktifPasif bankacikissil" <?= $sonuc['bankacikissil']==1?'checked':'' ?> />
                        <span class="slider round"></span>
                    </label>

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
if ($sonuc['depoekle'] == "0") {?> 
											<h2 class="card-title text-danger">İZİN YOK</h2>
<?php } ?> 
<?php
if ($sonuc['depoekle'] == "1") {?> 
											<h2 class="card-title text-success">İZİN VAR</h2>
<?php } ?>
											      <label class="switch">
                        <!-- checkbox a id ve checked bilgilerini ekliyoruz -->
                        <input type="checkbox" id='<?php echo $sonuc['id'] ?>' class="aktifPasif depoekle" <?= $sonuc['depoekle']==1?'checked':'' ?> />
                        <span class="slider round"></span>
                    </label>
	
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
if ($sonuc['depoduzenle'] == "0") {?> 
											<h2 class="card-title text-danger">İZİN YOK</h2>
<?php } ?> 
<?php
if ($sonuc['depoduzenle'] == "1") {?> 
											<h2 class="card-title text-success">İZİN VAR</h2>
<?php } ?>
											      <label class="switch">
                        <!-- checkbox a id ve checked bilgilerini ekliyoruz -->
                        <input type="checkbox" id='<?php echo $sonuc['id'] ?>' class="aktifPasif depoduzenle" <?= $sonuc['depoduzenle']==1?'checked':'' ?> />
                        <span class="slider round"></span>
                    </label>
		
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
if ($sonuc['deposil'] == "0") {?> 
											<h2 class="card-title text-danger">İZİN YOK</h2>
<?php } ?> 
<?php
if ($sonuc['deposil'] == "1") {?> 
											<h2 class="card-title text-success">İZİN VAR</h2>
<?php } ?>
 <label class="switch">
                        <!-- checkbox a id ve checked bilgilerini ekliyoruz -->
                        <input type="checkbox" id='<?php echo $sonuc['id'] ?>' class="aktifPasif deposil" <?= $sonuc['deposil']==1?'checked':'' ?> />
                        <span class="slider round"></span>
                    </label>

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
if ($sonuc['depotransferekle'] == "0") {?> 
											<h2 class="card-title text-danger">İZİN YOK</h2>
<?php } ?> 
<?php
if ($sonuc['depotransferekle'] == "1") {?> 
											<h2 class="card-title text-success">İZİN VAR</h2>
<?php } ?>
											      <label class="switch">
                        <!-- checkbox a id ve checked bilgilerini ekliyoruz -->
                        <input type="checkbox" id='<?php echo $sonuc['id'] ?>' class="aktifPasif depotransferekle" <?= $sonuc['depotransferekle']==1?'checked':'' ?> />
                        <span class="slider round"></span>
                    </label>
	
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
if ($sonuc['depotransferduzenle'] == "0") {?> 
											<h2 class="card-title text-danger">İZİN YOK</h2>
<?php } ?> 
<?php
if ($sonuc['depotransferduzenle'] == "1") {?> 
											<h2 class="card-title text-success">İZİN VAR</h2>
<?php } ?>
											      <label class="switch">
                        <!-- checkbox a id ve checked bilgilerini ekliyoruz -->
                        <input type="checkbox" id='<?php echo $sonuc['id'] ?>' class="aktifPasif depotransferduzenle" <?= $sonuc['depotransferduzenle']==1?'checked':'' ?> />
                        <span class="slider round"></span>
                    </label>
		
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
if ($sonuc['depotransfersil'] == "0") {?> 
											<h2 class="card-title text-danger">İZİN YOK</h2>
<?php } ?> 
<?php
if ($sonuc['depotransfersil'] == "1") {?> 
											<h2 class="card-title text-success">İZİN VAR</h2>
<?php } ?>
 <label class="switch">
                        <!-- checkbox a id ve checked bilgilerini ekliyoruz -->
                        <input type="checkbox" id='<?php echo $sonuc['id'] ?>' class="aktifPasif depotransfersil" <?= $sonuc['depotransfersil']==1?'checked':'' ?> />
                        <span class="slider round"></span>
                    </label>

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
if ($sonuc['personelekle'] == "0") {?> 
											<h2 class="card-title text-danger">İZİN YOK</h2>
<?php } ?> 
<?php
if ($sonuc['personelekle'] == "1") {?> 
											<h2 class="card-title text-success">İZİN VAR</h2>
<?php } ?>
											      <label class="switch">
                        <!-- checkbox a id ve checked bilgilerini ekliyoruz -->
                        <input type="checkbox" id='<?php echo $sonuc['id'] ?>' class="aktifPasif personelekle" <?= $sonuc['personelekle']==1?'checked':'' ?> />
                        <span class="slider round"></span>
                    </label>
	
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
if ($sonuc['personelduzenle'] == "0") {?> 
											<h2 class="card-title text-danger">İZİN YOK</h2>
<?php } ?> 
<?php
if ($sonuc['personelduzenle'] == "1") {?> 
											<h2 class="card-title text-success">İZİN VAR</h2>
<?php } ?>
											      <label class="switch">
                        <!-- checkbox a id ve checked bilgilerini ekliyoruz -->
                        <input type="checkbox" id='<?php echo $sonuc['id'] ?>' class="aktifPasif personelduzenle" <?= $sonuc['personelduzenle']==1?'checked':'' ?> />
                        <span class="slider round"></span>
                    </label>
		
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
if ($sonuc['personelsil'] == "0") {?> 
											<h2 class="card-title text-danger">İZİN YOK</h2>
<?php } ?> 
<?php
if ($sonuc['personelsil'] == "1") {?> 
											<h2 class="card-title text-success">İZİN VAR</h2>
<?php } ?>
 <label class="switch">
                        <!-- checkbox a id ve checked bilgilerini ekliyoruz -->
                        <input type="checkbox" id='<?php echo $sonuc['id'] ?>' class="aktifPasif personelsil" <?= $sonuc['personelsil']==1?'checked':'' ?> />
                        <span class="slider round"></span>
                    </label>

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
if ($sonuc['personelmaasekle'] == "0") {?> 
											<h2 class="card-title text-danger">İZİN YOK</h2>
<?php } ?> 
<?php
if ($sonuc['personelmaasekle'] == "1") {?> 
											<h2 class="card-title text-success">İZİN VAR</h2>
<?php } ?>
											      <label class="switch">
                        <!-- checkbox a id ve checked bilgilerini ekliyoruz -->
                        <input type="checkbox" id='<?php echo $sonuc['id'] ?>' class="aktifPasif personelmaasekle" <?= $sonuc['personelmaasekle']==1?'checked':'' ?> />
                        <span class="slider round"></span>
                    </label>
	
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
if ($sonuc['personelmaasduzenle'] == "0") {?> 
											<h2 class="card-title text-danger">İZİN YOK</h2>
<?php } ?> 
<?php
if ($sonuc['personelmaasduzenle'] == "1") {?> 
											<h2 class="card-title text-success">İZİN VAR</h2>
<?php } ?>
											      <label class="switch">
                        <!-- checkbox a id ve checked bilgilerini ekliyoruz -->
                        <input type="checkbox" id='<?php echo $sonuc['id'] ?>' class="aktifPasif personelmaasduzenle" <?= $sonuc['personelmaasduzenle']==1?'checked':'' ?> />
                        <span class="slider round"></span>
                    </label>
		
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
if ($sonuc['personelmaassil'] == "0") {?> 
											<h2 class="card-title text-danger">İZİN YOK</h2>
<?php } ?> 
<?php
if ($sonuc['personelmaassil'] == "1") {?> 
											<h2 class="card-title text-success">İZİN VAR</h2>
<?php } ?>
 <label class="switch">
                        <!-- checkbox a id ve checked bilgilerini ekliyoruz -->
                        <input type="checkbox" id='<?php echo $sonuc['id'] ?>' class="aktifPasif personelmaassil" <?= $sonuc['personelmaassil']==1?'checked':'' ?> />
                        <span class="slider round"></span>
                    </label>

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
if ($sonuc['personelmesaiekle'] == "0") {?> 
											<h2 class="card-title text-danger">İZİN YOK</h2>
<?php } ?> 
<?php
if ($sonuc['personelmesaiekle'] == "1") {?> 
											<h2 class="card-title text-success">İZİN VAR</h2>
<?php } ?>
											      <label class="switch">
                        <!-- checkbox a id ve checked bilgilerini ekliyoruz -->
                        <input type="checkbox" id='<?php echo $sonuc['id'] ?>' class="aktifPasif personelmesaiekle" <?= $sonuc['personelmesaiekle']==1?'checked':'' ?> />
                        <span class="slider round"></span>
                    </label>
	
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
if ($sonuc['personelmesaiduzenle'] == "0") {?> 
											<h2 class="card-title text-danger">İZİN YOK</h2>
<?php } ?> 
<?php
if ($sonuc['personelmesaiduzenle'] == "1") {?> 
											<h2 class="card-title text-success">İZİN VAR</h2>
<?php } ?>
											      <label class="switch">
                        <!-- checkbox a id ve checked bilgilerini ekliyoruz -->
                        <input type="checkbox" id='<?php echo $sonuc['id'] ?>' class="aktifPasif personelmesaiduzenle" <?= $sonuc['personelmesaiduzenle']==1?'checked':'' ?> />
                        <span class="slider round"></span>
                    </label>
		
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
if ($sonuc['personelmesaisil'] == "0") {?> 
											<h2 class="card-title text-danger">İZİN YOK</h2>
<?php } ?> 
<?php
if ($sonuc['personelmesaisil'] == "1") {?> 
											<h2 class="card-title text-success">İZİN VAR</h2>
<?php } ?>
 <label class="switch">
                        <!-- checkbox a id ve checked bilgilerini ekliyoruz -->
                        <input type="checkbox" id='<?php echo $sonuc['id'] ?>' class="aktifPasif personelmesaisil" <?= $sonuc['personelmesaisil']==1?'checked':'' ?> />
                        <span class="slider round"></span>
                    </label>

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
if ($sonuc['personelizinekle'] == "0") {?> 
											<h2 class="card-title text-danger">İZİN YOK</h2>
<?php } ?> 
<?php
if ($sonuc['personelizinekle'] == "1") {?> 
											<h2 class="card-title text-success">İZİN VAR</h2>
<?php } ?>
											      <label class="switch">
                        <!-- checkbox a id ve checked bilgilerini ekliyoruz -->
                        <input type="checkbox" id='<?php echo $sonuc['id'] ?>' class="aktifPasif personelizinekle" <?= $sonuc['personelizinekle']==1?'checked':'' ?> />
                        <span class="slider round"></span>
                    </label>
	
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
if ($sonuc['personelizinduzenle'] == "0") {?> 
											<h2 class="card-title text-danger">İZİN YOK</h2>
<?php } ?> 
<?php
if ($sonuc['personelizinduzenle'] == "1") {?> 
											<h2 class="card-title text-success">İZİN VAR</h2>
<?php } ?>
											      <label class="switch">
                        <!-- checkbox a id ve checked bilgilerini ekliyoruz -->
                        <input type="checkbox" id='<?php echo $sonuc['id'] ?>' class="aktifPasif personelizinduzenle" <?= $sonuc['personelizinduzenle']==1?'checked':'' ?> />
                        <span class="slider round"></span>
                    </label>
		
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
if ($sonuc['personelizinsil'] == "0") {?> 
											<h2 class="card-title text-danger">İZİN YOK</h2>
<?php } ?> 
<?php
if ($sonuc['personelizinsil'] == "1") {?> 
											<h2 class="card-title text-success">İZİN VAR</h2>
<?php } ?>
 <label class="switch">
                        <!-- checkbox a id ve checked bilgilerini ekliyoruz -->
                        <input type="checkbox" id='<?php echo $sonuc['id'] ?>' class="aktifPasif personelizinsil" <?= $sonuc['personelizinsil']==1?'checked':'' ?> />
                        <span class="slider round"></span>
                    </label>

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
if ($sonuc['personelodemeekle'] == "0") {?> 
											<h2 class="card-title text-danger">İZİN YOK</h2>
<?php } ?> 
<?php
if ($sonuc['personelodemeekle'] == "1") {?> 
											<h2 class="card-title text-success">İZİN VAR</h2>
<?php } ?>
											      <label class="switch">
                        <!-- checkbox a id ve checked bilgilerini ekliyoruz -->
                        <input type="checkbox" id='<?php echo $sonuc['id'] ?>' class="aktifPasif personelodemeekle" <?= $sonuc['personelodemeekle']==1?'checked':'' ?> />
                        <span class="slider round"></span>
                    </label>
	
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
if ($sonuc['personelodemeduzenle'] == "0") {?> 
											<h2 class="card-title text-danger">İZİN YOK</h2>
<?php } ?> 
<?php
if ($sonuc['personelodemeduzenle'] == "1") {?> 
											<h2 class="card-title text-success">İZİN VAR</h2>
<?php } ?>
											      <label class="switch">
                        <!-- checkbox a id ve checked bilgilerini ekliyoruz -->
                        <input type="checkbox" id='<?php echo $sonuc['id'] ?>' class="aktifPasif personelodemeduzenle" <?= $sonuc['personelodemeduzenle']==1?'checked':'' ?> />
                        <span class="slider round"></span>
                    </label>
		
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
if ($sonuc['personelodemesil'] == "0") {?> 
											<h2 class="card-title text-danger">İZİN YOK</h2>
<?php } ?> 
<?php
if ($sonuc['personelodemesil'] == "1") {?> 
											<h2 class="card-title text-success">İZİN VAR</h2>
<?php } ?>
 <label class="switch">
                        <!-- checkbox a id ve checked bilgilerini ekliyoruz -->
                        <input type="checkbox" id='<?php echo $sonuc['id'] ?>' class="aktifPasif personelodemesil" <?= $sonuc['personelodemesil']==1?'checked':'' ?> />
                        <span class="slider round"></span>
                    </label>

											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
</div>


	<?php }?>
	<?php 
 if ($kbilgi["yetki"]<3) {?>
 	<h1 class="text-danger">BU SAYFAYI GÖRÜNTÜLEMEYE YETKİNİZ YOK </h1>
 <?php }?>								
		






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
$(document).ready(function () {
    $('.aktifPasif').click(function (event) {
        var id = $(this).attr("id");  //id değerini alıyoruz
        var cariekle = ($('.cariekle').is(':checked')) ? '1' : '0';
var cariduzenle = ($('.cariduzenle').is(':checked')) ? '1' : '0';
var carisil = ($('.carisil').is(':checked')) ? '1' : '0';
var carigrupekle = ($('.carigrupekle').is(':checked')) ? '1' : '0';
var carigrupduzenle = ($('.carigrupduzenle').is(':checked')) ? '1' : '0';
var carigrupsil = ($('.carigrupsil').is(':checked')) ? '1' : '0';
var parabirimiekle = ($('.parabirimiekle').is(':checked')) ? '1' : '0';
var parabirimiduzenle = ($('.parabirimiduzenle').is(':checked')) ? '1' : '0';
var parabirimisil = ($('.parabirimisil').is(':checked')) ? '1' : '0';
var stokekle = ($('.stokekle').is(':checked')) ? '1' : '0';
var stokduzenle = ($('.stokduzenle').is(':checked')) ? '1' : '0';
var stoksil = ($('.stoksil').is(':checked')) ? '1' : '0';
var stokgrupekle = ($('.stokgrupekle').is(':checked')) ? '1' : '0';
var stokgrupduzenle = ($('.stokgrupduzenle').is(':checked')) ? '1' : '0';
var stokgrupsil = ($('.stokgrupsil').is(':checked')) ? '1' : '0';
var birimekle = ($('.birimekle').is(':checked')) ? '1' : '0';
var birimduzenle = ($('.birimduzenle').is(':checked')) ? '1' : '0';
var birimsil = ($('.birimsil').is(':checked')) ? '1' : '0';
var markaekle = ($('.markaekle').is(':checked')) ? '1' : '0';
var markaduzenle = ($('.markaduzenle').is(':checked')) ? '1' : '0';
var markasil = ($('.markasil').is(':checked')) ? '1' : '0';
var modelekle = ($('.modelekle').is(':checked')) ? '1' : '0';
var modelduzenle = ($('.modelduzenle').is(':checked')) ? '1' : '0';
var modelsil = ($('.modelsil').is(':checked')) ? '1' : '0';
var kdvekle = ($('.kdvekle').is(':checked')) ? '1' : '0';
var kdvduzenle = ($('.kdvduzenle').is(':checked')) ? '1' : '0';
var kdvsil = ($('.kdvsil').is(':checked')) ? '1' : '0';
var otvekle = ($('.otvekle').is(':checked')) ? '1' : '0';
var otvduzenle = ($('.otvduzenle').is(':checked')) ? '1' : '0';
var otvsil = ($('.otvsil').is(':checked')) ? '1' : '0';
var alisfaturaekle = ($('.alisfaturaekle').is(':checked')) ? '1' : '0';
var alisfaturaduzenle = ($('.alisfaturaduzenle').is(':checked')) ? '1' : '0';
var alisfaturasil = ($('.alisfaturasil').is(':checked')) ? '1' : '0';
var satisfaturaekle = ($('.satisfaturaekle').is(':checked')) ? '1' : '0';
var satisfaturaduzenle = ($('.satisfaturaduzenle').is(':checked')) ? '1' : '0';
var satisfaturasil = ($('.satisfaturasil').is(':checked')) ? '1' : '0';
var verilencekekle = ($('.verilencekekle').is(':checked')) ? '1' : '0';
var verilencekduzenle = ($('.verilencekduzenle').is(':checked')) ? '1' : '0';
var verilenceksil = ($('.verilenceksil').is(':checked')) ? '1' : '0';
var verilensenetekle = ($('.verilensenetekle').is(':checked')) ? '1' : '0';
var verilensenetduzenle = ($('.verilensenetduzenle').is(':checked')) ? '1' : '0';
var verilensenetsil = ($('.verilensenetsil').is(':checked')) ? '1' : '0';
var alinancekekle = ($('.alinancekekle').is(':checked')) ? '1' : '0';
var alinancekduzenle = ($('.alinancekduzenle').is(':checked')) ? '1' : '0';
var alinanceksil = ($('.alinanceksil').is(':checked')) ? '1' : '0';
var alinansenetekle = ($('.alinansenetekle').is(':checked')) ? '1' : '0';
var alinansenetduzenle = ($('.alinansenetduzenle').is(':checked')) ? '1' : '0';
var alinansenetsil = ($('.alinansenetsil').is(':checked')) ? '1' : '0';
var kasaekle = ($('.kasaekle').is(':checked')) ? '1' : '0';
var kasaduzenle = ($('.kasaduzenle').is(':checked')) ? '1' : '0';
var kasasil = ($('.kasasil').is(':checked')) ? '1' : '0';
var kasagirisekle = ($('.kasagirisekle').is(':checked')) ? '1' : '0';
var kasagirisduzenle = ($('.kasagirisduzenle').is(':checked')) ? '1' : '0';
var kasagirissil = ($('.kasagirissil').is(':checked')) ? '1' : '0';
var kasacikisekle = ($('.kasacikisekle').is(':checked')) ? '1' : '0';
var kasacikisduzenle = ($('.kasacikisduzenle').is(':checked')) ? '1' : '0';
var kasacikissil = ($('.kasacikissil').is(':checked')) ? '1' : '0';
var bankaekle = ($('.bankaekle').is(':checked')) ? '1' : '0';
var bankaduzenle = ($('.bankaduzenle').is(':checked')) ? '1' : '0';
var bankasil = ($('.bankasil').is(':checked')) ? '1' : '0';
var bankagirisekle = ($('.bankagirisekle').is(':checked')) ? '1' : '0';
var bankagirisduzenle = ($('.bankagirisduzenle').is(':checked')) ? '1' : '0';
var bankagirissil = ($('.bankagirissil').is(':checked')) ? '1' : '0';
var bankacikisekle = ($('.bankacikisekle').is(':checked')) ? '1' : '0';
var bankacikisduzenle = ($('.bankacikisduzenle').is(':checked')) ? '1' : '0';
var bankacikissil = ($('.bankacikissil').is(':checked')) ? '1' : '0';
var depoekle = ($('.depoekle').is(':checked')) ? '1' : '0';
var depoduzenle = ($('.depoduzenle').is(':checked')) ? '1' : '0';
var deposil = ($('.deposil').is(':checked')) ? '1' : '0';
var depotransferekle = ($('.depotransferekle').is(':checked')) ? '1' : '0';
var depotransferduzenle = ($('.depotransferduzenle').is(':checked')) ? '1' : '0';
var depotransfersil = ($('.depotransfersil').is(':checked')) ? '1' : '0';
var carialacaklandir = ($('.carialacaklandir').is(':checked')) ? '1' : '0';
var carialacaklandirduzenle = ($('.carialacaklandirduzenle').is(':checked')) ? '1' : '0';
var carialacaklandirsil = ($('.carialacaklandirsil').is(':checked')) ? '1' : '0';
var cariborclandir = ($('.cariborclandir').is(':checked')) ? '1' : '0';
var cariborclandirduzenle = ($('.cariborclandirduzenle').is(':checked')) ? '1' : '0';
var cariborclandirsil = ($('.cariborclandirsil').is(':checked')) ? '1' : '0';
var personelekle = ($('.personelekle').is(':checked')) ? '1' : '0';
var personelduzenle = ($('.personelduzenle').is(':checked')) ? '1' : '0';
var personelsil = ($('.personelsil').is(':checked')) ? '1' : '0';
var personelmaasekle = ($('.personelmaasekle').is(':checked')) ? '1' : '0';
var personelmaasduzenle = ($('.personelmaasduzenle').is(':checked')) ? '1' : '0';
var personelmaassil = ($('.personelmaassil').is(':checked')) ? '1' : '0';
var personelmesaiekle = ($('.personelmesaiekle').is(':checked')) ? '1' : '0';
var personelmesaiduzenle = ($('.personelmesaiduzenle').is(':checked')) ? '1' : '0';
var personelmesaisil = ($('.personelmesaisil').is(':checked')) ? '1' : '0';
var personelizinekle = ($('.personelizinekle').is(':checked')) ? '1' : '0';
var personelizinduzenle = ($('.personelizinduzenle').is(':checked')) ? '1' : '0';
var personelizinsil = ($('.personelizinsil').is(':checked')) ? '1' : '0';
var personelodemeekle = ($('.personelodemeekle').is(':checked')) ? '1' : '0';
var personelodemeduzenle = ($('.personelodemeduzenle').is(':checked')) ? '1' : '0';
var personelodemesil = ($('.personelodemesil').is(':checked')) ? '1' : '0';
        //checkbox a göre aktif mi pasif mi bilgisini alıyoruz.

        $.ajax({
            type: 'POST',
            url: 'Islem/KullaniciYetki.php',  //işlem yaptığımız sayfayı belirtiyoruz
            data: { id:id,
 cariekle: cariekle, cariduzenle: cariduzenle, carisil: carisil, 
carigrupekle: carigrupekle, carigrupduzenle: carigrupduzenle, carigrupsil: carigrupsil, 
parabirimiekle: parabirimiekle, parabirimiduzenle: parabirimiduzenle, parabirimisil: parabirimisil, 
stokekle: stokekle, stokduzenle: stokduzenle, stoksil: stoksil, 
 stokgrupekle: stokgrupekle, stokgrupduzenle: stokgrupduzenle, stokgrupsil: stokgrupsil, 
birimekle: birimekle, birimduzenle: birimduzenle, birimsil: birimsil, 
markaekle: markaekle, markaduzenle: markaduzenle, markasil: markasil,
modelekle: modelekle, modelduzenle: modelduzenle, modelsil: modelsil,  
kdvekle:kdvekle, kdvduzenle: kdvduzenle, kdvsil: kdvsil, 
otvekle: otvekle, otvduzenle: otvduzenle, otvsil: otvsil, 
alisfaturaekle: alisfaturaekle, alisfaturaduzenle: alisfaturaduzenle, alisfaturasil: alisfaturasil, 
satisfaturaekle: satisfaturaekle, satisfaturaduzenle: satisfaturaduzenle, satisfaturasil: satisfaturasil,
 verilencekekle: verilencekekle, verilencekduzenle: verilencekduzenle, verilenceksil: verilenceksil,
 verilensenetekle: verilensenetekle, verilensenetduzenle: verilensenetduzenle, verilensenetsil: verilensenetsil,  
alinancekekle: alinancekekle, alinancekduzenle: alinancekduzenle, alinanceksil: alinanceksil, 
 alinansenetekle: alinansenetekle, alinansenetduzenle: alinansenetduzenle, alinansenetsil: alinansenetsil, 
kasaekle: kasaekle, kasaduzenle: kasaduzenle, kasasil: kasasil,
 kasagirisekle: kasagirisekle, kasagirisduzenle: kasagirisduzenle, kasagirissil: kasagirissil, 
 kasacikisekle: kasacikisekle, kasacikisduzenle: kasacikisduzenle, kasacikissil: kasacikissil, 
bankaekle: bankaekle, bankaduzenle: bankaduzenle, bankasil: bankasil,
 bankagirisekle: bankagirisekle, bankagirisduzenle: bankagirisduzenle, bankagirissil: bankagirissil, 
 bankacikisekle: bankacikisekle, bankacikisduzenle: bankacikisduzenle, bankacikissil: bankacikissil, 
 depoekle: depoekle, depoduzenle: depoduzenle, deposil: deposil,
depotransferekle: depotransferekle, depotransferduzenle: depotransferduzenle, depotransfersil: depotransfersil,
carialacaklandir: carialacaklandir, carialacaklandirduzenle: carialacaklandirduzenle, carialacaklandirsil: carialacaklandirsil,
cariborclandir: cariborclandir, cariborclandirduzenle: cariborclandirduzenle, cariborclandirsil: cariborclandirsil,
personelekle: personelekle, personelduzenle: personelduzenle, personelsil: personelsil,
personelmaasekle: personelmaasekle, personelmaasduzenle: personelmaasduzenle, personelmaassil: personelmaassil,
personelmesaiekle: personelmesaiekle, personelmesaiduzenle: personelmesaiduzenle, personelmesaisil: personelmesaisil,
personelizinekle: personelizinekle, personelizinduzenle: personelizinduzenle, personelizinsil: personelizinsil,
personelodemeekle: personelodemeekle, personelodemeduzenle: personelodemeduzenle, personelodemesil: personelodemesil,

}, //datamızı yolluyoruz 
            success: function (result) {
            location.reload();
            },
            error: function () {
                alert('Hata');
            }
        });
    });
});
    </script>
	
</body>
</html>

	