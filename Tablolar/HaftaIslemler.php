<div class="row">

			<div class="col-sm-6 col-md-3">

							<div class="card card-stats card-round">
								<div class="card-body ">
									<div class="row align-items-center">
										<div class="col-icon">
											<div class="icon-big text-center icon-success bubble-shadow-small">
												<i class="flaticon-interface-6"></i>
											</div>
										</div>
										<div class="col col-stats ml-3 ml-sm-0">
											<div class="numbers">
												<p class="card-category">Bu Hafta Satış Faturaları</p>
												<h4 class="card-title text-success">
<?php $parabirimleri = $baglanti->query("SELECT * FROM ParaBirimleri")->fetchAll();
foreach($parabirimleri as $parabirimi){
?>


<?php
$fatsatistopla=$baglanti->prepare("SELECT SUM(geneltoplam) AS satis FROM SatFatBilgi where parabirimi='$parabirimi[id]' and faturatarihi between '$haftailkgun' and '$haftasongun'");
$fatsatistopla->execute();
$fatsatisyaz= $fatsatistopla->fetch();
$fatsatistoplam=$fatsatisyaz['satis'];
?>
	<?= number_format($fatsatistoplam, 2, ',', '.'); ?> <?= $parabirimi['kisaltma']?>
<br>
<?php }?>

</h4>
	
											</div>
										</div>
									</div>
								</div>
							</div>

						</div>

		<div class="col-sm-6 col-md-3">

							<div class="card card-stats card-round">
								<div class="card-body ">
									<div class="row align-items-center">
										<div class="col-icon">
											<div class="icon-big text-center icon-danger bubble-shadow-small">
												<i class="flaticon-interface-6"></i>
											</div>
										</div>
										<div class="col col-stats ml-3 ml-sm-0">
											<div class="numbers">
												<p class="card-category">Bu Hafta Alış Faturaları</p>
												<h4 class="card-title text-danger">
<?php $parabirimleri = $baglanti->query("SELECT * FROM ParaBirimleri")->fetchAll();
foreach($parabirimleri as $parabirimi){
?>


<?php
$fatalistopla=$baglanti->prepare("SELECT SUM(geneltoplam) AS alis FROM AlFatBilgi where parabirimi='$parabirimi[id]' and faturatarihi between '$haftailkgun' and '$haftasongun'");
$fatalistopla->execute();
$fatalisyaz= $fatalistopla->fetch();
$fatalistoplam=$fatalisyaz['alis'];
?>
	<?= number_format($fatalistoplam, 2, ',', '.'); ?> <?= $parabirimi['kisaltma']?>
<br>
<?php }?>
</h4>
											</div>
										</div>
									</div>
								</div>
							</div>

						</div>



			<div class="col-sm-6 col-md-3">

							<div class="card card-stats card-round">
								<div class="card-body ">
									<div class="row align-items-center">
										<div class="col-icon">
											<div class="icon-big text-center icon-primary bubble-shadow-small">
												<i class="flaticon-file"></i>
											</div>
										</div>
										<div class="col col-stats ml-3 ml-sm-0">
											<div class="numbers">
												<p class="card-category">Bu Hafta Alınan Çek</p>
												<h4 class="card-title text-primary">
<?php $parabirimleri = $baglanti->query("SELECT * FROM ParaBirimleri")->fetchAll();
foreach($parabirimleri as $parabirimi){
?>

<?php
$cekalistopla=$baglanti->prepare("SELECT SUM(tutar) AS alis FROM CekSenet where islem='alinan' and ceksenet='cek' and  parabirimi='$parabirimi[id]' and islemtarihi between '$haftailkgun' and '$haftasongun'");
$cekalistopla->execute();
$cekalisyaz= $cekalistopla->fetch();
$cekalistoplam=$cekalisyaz['alis'];
?>
	<?= number_format($cekalistoplam, 2, ',', '.'); ?> <?= $parabirimi['kisaltma']?>
<br>

<?php }?>
</h4>
											</div>
										</div>
									</div>
								</div>
							</div>

						</div>
			<div class="col-sm-6 col-md-3">

							<div class="card card-stats card-round">
								<div class="card-body ">
									<div class="row align-items-center">
										<div class="col-icon">
											<div class="icon-big text-center icon-warning bubble-shadow-small">
												<i class="flaticon-file"></i>
											</div>
										</div>
										<div class="col col-stats ml-3 ml-sm-0">
											<div class="numbers">
												<p class="card-category">Bu Hafta Verilen Çek</p>
												<h4 class="card-title text-warning">
<?php $parabirimleri = $baglanti->query("SELECT * FROM ParaBirimleri")->fetchAll();
foreach($parabirimleri as $parabirimi){
?>

<?php
$ceksatisimtopla=$baglanti->prepare("SELECT SUM(tutar) AS satis FROM CekSenet where islem='verilen' and ceksenet='cek' and parabirimi='$parabirimi[id]' and islemtarihi between '$haftailkgun' and '$haftasongun'");
$ceksatisimtopla->execute();
$ceksatisimyaz= $ceksatisimtopla->fetch();
$ceksatisimtoplam=$ceksatisimyaz['satis'];
?>
	<?= number_format($ceksatisimtoplam, 2, ',', '.'); ?> <?= $parabirimi['kisaltma']?>
<br>
<?php }?>

</h4>
											</div>
										</div>
									</div>
								</div>
							</div>

						</div>



<div class="col-sm-6 col-md-3">

							<div class="card card-stats card-round">
								<div class="card-body ">
									<div class="row align-items-center">
										<div class="col-icon">
											<div class="icon-big text-center icon-success bubble-shadow-small">
												<i class="fas fa-user-minus"></i>
											</div>
										</div>
										<div class="col col-stats ml-3 ml-sm-0">
											<div class="numbers">
												<p class="card-category">Bu Hafta Cari Borçlandırma</p>
												<h4 class="card-title text-success">
<?php $parabirimleri = $baglanti->query("SELECT * FROM ParaBirimleri")->fetchAll();
foreach($parabirimleri as $parabirimi){
?>

<?php
$carialistopla=$baglanti->prepare("SELECT SUM(tutar) AS alis FROM CariIslem where islem='borc' and parabirimi='$parabirimi[id]' and islemtarihi between '$haftailkgun' and '$haftasongun'");
$carialistopla->execute();
$carialisyaz= $carialistopla->fetch();
$carialistoplam=$carialisyaz['alis'];
?>
	<?= number_format($carialistoplam, 2, ',', '.'); ?> <?= $parabirimi['kisaltma']?>
<br>
<?php }?>
</h4>
											</div>
										</div>
									</div>
								</div>
							</div>

						</div>
			<div class="col-sm-6 col-md-3">

							<div class="card card-stats card-round">
								<div class="card-body ">
									<div class="row align-items-center">
										<div class="col-icon">
											<div class="icon-big text-center icon-danger bubble-shadow-small">
												<i class="fas fa-user-plus"></i>
											</div>
										</div>
										<div class="col col-stats ml-3 ml-sm-0">
											<div class="numbers">
												<p class="card-category">Bu Hafta Cari Alacaklandır</p>
												<h4 class="card-title text-danger">
<?php $parabirimleri = $baglanti->query("SELECT * FROM ParaBirimleri")->fetchAll();
foreach($parabirimleri as $parabirimi){
?>

<?php
$carisatisimtopla=$baglanti->prepare("SELECT SUM(tutar) AS satis FROM CariIslem where islem='alacak' and parabirimi='$parabirimi[id]' and islemtarihi between '$haftailkgun' and '$haftasongun'");
$carisatisimtopla->execute();
$carisatisimyaz= $carisatisimtopla->fetch();
$carisatisimtoplam=$carisatisimyaz['satis'];
?>
	<?= number_format($carisatisimtoplam, 2, ',', '.'); ?> <?= $parabirimi['kisaltma']?>
<br>
<?php }?>
</h4>
											</div>
										</div>
									</div>
								</div>
							</div>

						</div>



<div class="col-sm-6 col-md-3">

							<div class="card card-stats card-round">
								<div class="card-body ">
									<div class="row align-items-center">
										<div class="col-icon">
											<div class="icon-big text-center icon-primary bubble-shadow-small">
												<i class="flaticon-file"></i>
											</div>
										</div>
										<div class="col col-stats ml-3 ml-sm-0">
											<div class="numbers">
												<p class="card-category">Bu Hafta Alınan Senet</p>
												<h4 class="card-title text-primary">
<?php $parabirimleri = $baglanti->query("SELECT * FROM ParaBirimleri")->fetchAll();
foreach($parabirimleri as $parabirimi){
?>

<?php
$senetalistopla=$baglanti->prepare("SELECT SUM(tutar) AS alis FROM CekSenet where islem='alinan' and ceksenet='senet' and parabirimi='$parabirimi[id]' and islemtarihi between '$haftailkgun' and '$haftasongun'");
$senetalistopla->execute();
$senetalisyaz= $senetalistopla->fetch();
$senetalistoplam=$senetalisyaz['alis'];
?>
	<?= number_format($senetalistoplam, 2, ',', '.'); ?> <?= $parabirimi['kisaltma']?>
<br>
<?php }?>
</h4>
											</div>
										</div>
									</div>
								</div>
							</div>

						</div>
			<div class="col-sm-6 col-md-3">

							<div class="card card-stats card-round">
								<div class="card-body ">
									<div class="row align-items-center">
										<div class="col-icon">
											<div class="icon-big text-center icon-warning bubble-shadow-small">
												<i class="flaticon-file"></i>
											</div>
										</div>
										<div class="col col-stats ml-3 ml-sm-0">
											<div class="numbers">
												<p class="card-category">Bu Hafta Verilen Senet</p>
												<h4 class="card-title text-warning">
<?php $parabirimleri = $baglanti->query("SELECT * FROM ParaBirimleri")->fetchAll();
foreach($parabirimleri as $parabirimi){
?>

<?php
$senetsatisimtopla=$baglanti->prepare("SELECT SUM(tutar) AS satis FROM CekSenet where islem='verilen' and ceksenet='senet' and parabirimi='$parabirimi[id]' and islemtarihi between '$haftailkgun' and '$haftasongun'");
$senetsatisimtopla->execute();
$senetsatisimyaz= $senetsatisimtopla->fetch();
$senetsatisimtoplam=$senetsatisimyaz['satis'];
?>
	<?= number_format($senetsatisimtoplam, 2, ',', '.'); ?> <?= $parabirimi['kisaltma']?>
<br>
<?php }?>
</h4>
											</div>
										</div>
									</div>
								</div>
							</div>

						</div>
		<div class="col-sm-6 col-md-3">

							<div class="card card-stats card-round">
								<div class="card-body ">
									<div class="row align-items-center">
										<div class="col-icon">
											<div class="icon-big text-center icon-success bubble-shadow-small">
												<i class="flaticon-coins"></i>
											</div>
										</div>
										<div class="col col-stats ml-3 ml-sm-0">
											<div class="numbers">
												<p class="card-category">Bu Hafta Nakit Tahsilat</p>
												<h4 class="card-title text-success">
<?php $parabirimleri = $baglanti->query("SELECT * FROM ParaBirimleri")->fetchAll();
foreach($parabirimleri as $parabirimi){
?>

<?php
$kasaalistopla=$baglanti->prepare("SELECT SUM(tutar) AS alis FROM KasaGiris where islem='kasagirdi' and parabirimi='$parabirimi[id]' and islemtarihi between '$haftailkgun' and '$haftasongun'");
$kasaalistopla->execute();
$kasaalisyaz= $kasaalistopla->fetch();
$kasaalistoplam=$kasaalisyaz['alis'];
?>
	<?= number_format($kasaalistoplam, 2, ',', '.'); ?> <?= $parabirimi['kisaltma']?>
<br>
<?php }?>
</h4>
											</div>
										</div>
									</div>
								</div>
							</div>

						</div>
		<div class="col-sm-6 col-md-3">

							<div class="card card-stats card-round">
								<div class="card-body ">
									<div class="row align-items-center">
										<div class="col-icon">
											<div class="icon-big text-center icon-danger bubble-shadow-small">
												<i class="flaticon-coins"></i>
											</div>
										</div>
										<div class="col col-stats ml-3 ml-sm-0">
											<div class="numbers">
												<p class="card-category">Bu Hafta Nakit Ödeme</p>
												<h4 class="card-title text-danger">
<?php $parabirimleri = $baglanti->query("SELECT * FROM ParaBirimleri")->fetchAll();
foreach($parabirimleri as $parabirimi){
?>

<?php
$kasasatistopla=$baglanti->prepare("SELECT SUM(tutar) AS alis FROM KasaGiris where islem='kasacikti' and parabirimi='$parabirimi[id]' and islemtarihi between '$haftailkgun' and '$haftasongun'");
$kasasatistopla->execute();
$kasasatisyaz= $kasasatistopla->fetch();
$kasasatistoplam=$kasasatisyaz['alis'];
?>
	<?= number_format($kasasatistoplam, 2, ',', '.'); ?> <?= $parabirimi['kisaltma']?>
<br>
<?php }?>
</h4>
											</div>
										</div>
									</div>
								</div>
							</div>

						</div>
			<div class="col-sm-6 col-md-3">

							<div class="card card-stats card-round">
								<div class="card-body ">
									<div class="row align-items-center">
										<div class="col-icon">
											<div class="icon-big text-center icon-primary bubble-shadow-small">
												<i class="flaticon-credit-card"></i>
											</div>
										</div>
										<div class="col col-stats ml-3 ml-sm-0">
											<div class="numbers">
												<p class="card-category">Bu Hafta Banka Tasilatı</p>
												<h4 class="card-title text-primary">
<?php $parabirimleri = $baglanti->query("SELECT * FROM ParaBirimleri")->fetchAll();
foreach($parabirimleri as $parabirimi){
?>

<?php
$bankaalistopla=$baglanti->prepare("SELECT SUM(tutar) AS alis FROM BankaGiris where islem='bankagirdi' and parabirimi='$parabirimi[id]' and islemtarihi between '$haftailkgun' and '$haftasongun'");
$bankaalistopla->execute();
$bankaalisyaz= $bankaalistopla->fetch();
$bankaalistoplam=$bankaalisyaz['alis'];
?>
	<?= number_format($bankaalistoplam, 2, ',', '.'); ?> <?= $parabirimi['kisaltma']?>
<br>
<?php }?>
</h4>
											</div>
										</div>
									</div>
								</div>
							</div>

						</div>
			<div class="col-sm-6 col-md-3">

							<div class="card card-stats card-round">
								<div class="card-body">
									<div class="row align-items-center">
										<div class="col-icon">
											<div class="icon-big text-center icon-warning bubble-shadow-small">
												<i class="flaticon-credit-card"></i>
											</div>
										</div>
										<div class="col col-stats ml-3 ml-sm-0">
											<div class="numbers">
												<p class="card-category">Bu Hafta Banka Ödemesi</p>
												<h4 class="card-title text-warning">
<?php $parabirimleri = $baglanti->query("SELECT * FROM ParaBirimleri")->fetchAll();
foreach($parabirimleri as $parabirimi){
?>

<?php
$bankasatistopla=$baglanti->prepare("SELECT SUM(tutar) AS satis FROM BankaGiris where islem='bankacikti' and parabirimi='$parabirimi[id]' and islemtarihi between '$haftailkgun' and '$haftasongun'");
$bankasatistopla->execute();
$bankasatisyaz= $bankasatistopla->fetch();
$bankasatistoplam=$bankasatisyaz['satis'];
?>
	<?= number_format($bankasatistoplam, 2, ',', '.'); ?> <?= $parabirimi['kisaltma']?>
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