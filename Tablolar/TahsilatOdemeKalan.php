<div class="row">

<div class="col-sm-6 col-md-4">
							<div class="card card-stats card-success card-round">
								<div class="card-body">
									<div class="row">

										<div class="col-5">
											<div class="icon-big text-center">
												<i class="flaticon-coins"></i>
											</div>
										</div>
										<div class="col-7 col-stats">
											<div class="numbers">
												<p class="card-category">CARİDEN TAHSİL EDİLEN</p>
												<h4 class="card-title">
<?php $parabirimleri = $baglanti->query("SELECT * FROM ParaBirimleri")->fetchAll();
foreach($parabirimleri as $parabirimi){
?>



<?php
$kasagiristopla=$baglanti->prepare("SELECT SUM(tutar) AS girisler FROM KasaGiris where islem='kasagirdi' and parabirimi='$parabirimi[id]'");
$kasagiristopla->execute();
$kasagirisyaz= $kasagiristopla->fetch();
$kasagiristoplam=$kasagirisyaz['girisler'];
?>

<?php
$bankagiristopla=$baglanti->prepare("SELECT SUM(tutar) AS girisler FROM BankaGiris where islem='bankagirdi' and parabirimi='$parabirimi[id]'");
$bankagiristopla->execute();
$bankagirisyaz= $bankagiristopla->fetch();
$bankagiristoplam=$bankagirisyaz['girisler'];
?>
<?php
$ceksenetgiristopla=$baglanti->prepare("SELECT SUM(tutar) AS girisler FROM CekSenet where islem='alinan' and parabirimi='$parabirimi[id]'");
$ceksenetgiristopla->execute();
$ceksenetgirisyaz= $ceksenetgiristopla->fetch();
$ceksenetgiristoplam=$ceksenetgirisyaz['girisler'];
?>

<?php
$giristoplam = $kasagiristoplam + $bankagiristoplam + $ceksenetgiristoplam;
?>
<?= number_format($giristoplam, 2, ',', '.'); ?> <?= $parabirimi['kisaltma']?>
<br>
<?php }?>

</h4>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

<div class="col-sm-6 col-md-4">
							<div class="card card-stats card-danger card-round">
								<div class="card-body">
									<div class="row">
										<div class="col-5">
											<div class="icon-big text-center">
												<i class="flaticon-coins"></i>
											</div>
										</div>
										<div class="col-7 col-stats">
											<div class="numbers">
												<p class="card-category">CARİYE ÖDEME YAPILAN</p>
												<h4 class="card-title">
<?php $parabirimleri = $baglanti->query("SELECT * FROM ParaBirimleri")->fetchAll();
foreach($parabirimleri as $parabirimi){
?>



<?php
$kasacikistopla=$baglanti->prepare("SELECT SUM(tutar) AS cikislar FROM KasaGiris where islem='kasacikti' and parabirimi='$parabirimi[id]'");
$kasacikistopla->execute();
$kasacikisyaz= $kasacikistopla->fetch();
$kasacikistoplam=$kasacikisyaz['cikislar'];
?>

<?php
$bankacikistopla=$baglanti->prepare("SELECT SUM(tutar) AS cikislar FROM BankaGiris where islem='bankacikti' and parabirimi='$parabirimi[id]'");
$bankacikistopla->execute();
$bankacikisyaz= $bankacikistopla->fetch();
$bankacikistoplam=$bankacikisyaz['cikislar'];
?>
<?php
$ceksenetcikistopla=$baglanti->prepare("SELECT SUM(tutar) AS cikislar FROM CekSenet where islem='verilen' and parabirimi='$parabirimi[id]'");
$ceksenetcikistopla->execute();
$ceksenetcikisyaz= $ceksenetcikistopla->fetch();
$ceksenetcikistoplam=$ceksenetcikisyaz['cikislar'];
?>

<?php
$cikistoplam = $kasacikistoplam + $bankacikistoplam + $ceksenetcikistoplam;
?>
<?= number_format($cikistoplam, 2, ',', '.'); ?> <?= $parabirimi['kisaltma']?>
<br>
<?php }?>

</h4>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>




<div class="col-sm-6 col-md-4">
							<div class="card card-stats card-secondary card-round">
								<div class="card-body">
									<div class="row">
										<div class="col-5">
											<div class="icon-big text-center">
												<i class="flaticon-coins"></i>
											</div>
										</div>
										<div class="col-7 col-stats">
											<div class="numbers">
												<p class="card-category">KALAN</p>
												<h4 class="card-title">
<?php $parabirimleri = $baglanti->query("SELECT * FROM ParaBirimleri")->fetchAll();
foreach($parabirimleri as $parabirimi){
?>
<?php
$kasagiristopla=$baglanti->prepare("SELECT SUM(tutar) AS girisler FROM KasaGiris where islem='kasagirdi' and parabirimi='$parabirimi[id]'");
$kasagiristopla->execute();
$kasagirisyaz= $kasagiristopla->fetch();
$kasagiristoplam=$kasagirisyaz['girisler'];
?>

<?php
$bankagiristopla=$baglanti->prepare("SELECT SUM(tutar) AS girisler FROM BankaGiris where islem='bankagirdi' and parabirimi='$parabirimi[id]'");
$bankagiristopla->execute();
$bankagirisyaz= $bankagiristopla->fetch();
$bankagiristoplam=$bankagirisyaz['girisler'];
?>
<?php
$ceksenetgiristopla=$baglanti->prepare("SELECT SUM(tutar) AS girisler FROM CekSenet where islem='alinan' and parabirimi='$parabirimi[id]'");
$ceksenetgiristopla->execute();
$ceksenetgirisyaz= $ceksenetgiristopla->fetch();
$ceksenetgiristoplam=$ceksenetgirisyaz['girisler'];
?>

<?php
$giristoplam = $kasagiristoplam + $bankagiristoplam + $ceksenetgiristoplam;
?>
<?php
$kasacikistopla=$baglanti->prepare("SELECT SUM(tutar) AS cikislar FROM KasaGiris where islem='kasacikti' and parabirimi='$parabirimi[id]'");
$kasacikistopla->execute();
$kasacikisyaz= $kasacikistopla->fetch();
$kasacikistoplam=$kasacikisyaz['cikislar'];
?>

<?php
$bankacikistopla=$baglanti->prepare("SELECT SUM(tutar) AS cikislar FROM BankaGiris where islem='bankacikti' and parabirimi='$parabirimi[id]'");
$bankacikistopla->execute();
$bankacikisyaz= $bankacikistopla->fetch();
$bankacikistoplam=$bankacikisyaz['cikislar'];
?>
<?php
$ceksenetcikistopla=$baglanti->prepare("SELECT SUM(tutar) AS cikislar FROM CekSenet where islem='verilen' and parabirimi='$parabirimi[id]'");
$ceksenetcikistopla->execute();
$ceksenetcikisyaz= $ceksenetcikistopla->fetch();
$ceksenetcikistoplam=$ceksenetcikisyaz['cikislar'];
?>

<?php
$cikistoplam = $kasacikistoplam + $bankacikistoplam + $ceksenetcikistoplam;
?>
<?php
$kalantoplam = $giristoplam - $cikistoplam;
?>
<?= number_format($kalantoplam, 2, ',', '.'); ?> <?= $parabirimi['kisaltma']?>

<br>

<?php }?> 


</h4>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
</div>