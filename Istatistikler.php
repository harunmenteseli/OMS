<?php
require("Ayarlar/Baglantim.php"); 
require("Ayarlar/Guvenlik.php"); 
?>
                                                
	
<!DOCTYPE html>
<html lang="tr">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	
	<title>İstatistikler - <?= $ayar["siteadi"] ?> - <?= $ayar["siteslogan"] ?></title>
	<?php
require("Tablolar/tasarim.php"); //logo - üst navigasyon menü
?>
	<?php
require("Tablolar/js.php"); //logo - üst navigasyon menü
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
<?php $parabirimleri = $baglanti->query("SELECT * FROM ParaBirimleri")->fetchAll();
foreach($parabirimleri as $parabirimi){
?>


					<div class="col-md-6">
							<div class="card">
								<div class="card-header">
									<div class="card-title">GELİRLERİM <?= $parabirimi['parabirimadi']?></div>
								</div>
								<div class="card-body">
									<ul class="nav nav-pills nav-<?= $tema['tablorenk']?>" id="pills-tab" role="tablist">
										<li class="nav-item">
											<a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#gelirtoplam<?= $parabirimi['kisaltma']?>" role="tab" aria-controls="pills-home" aria-selected="true">Toplam</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#gelirgunluk<?= $parabirimi['kisaltma']?>" role="tab" aria-controls="pills-profile" aria-selected="false">Günlük</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#gelirhaftalik<?= $parabirimi['kisaltma']?>" role="tab" aria-controls="pills-contact" aria-selected="false">7 Günlük</a>
										</li>
									</ul>    
                                                
<div class="tab-content mt-2 mb-3" id="pills-tabContent">
										<div class="tab-pane animated bounceIn show active" id="gelirtoplam<?= $parabirimi['kisaltma']?>" role="tabpanel" aria-labelledby="pills-home-tab">
<?php
$cekalistopla=$baglanti->prepare("SELECT SUM(tutar) AS alis FROM CekSenet where parabirimi='$parabirimi[id]'and islem='alinan' and ceksenet='cek'");
$cekalistopla->execute();
$cekalisyaz= $cekalistopla->fetch();
$cekalistoplam=$cekalisyaz['alis'];
?>

<?php
$senetalistopla=$baglanti->prepare("SELECT SUM(tutar) AS alis FROM CekSenet where parabirimi='$parabirimi[id]' and islem='alinan' and ceksenet='senet'");
$senetalistopla->execute();
$senetalisyaz= $senetalistopla->fetch();
$senetalistoplam=$senetalisyaz['alis'];
?>
	  
<?php
$kasaalistopla=$baglanti->prepare("SELECT SUM(tutar) AS alis FROM KasaGiris where parabirimi='$parabirimi[id]' and islem='kasagirdi'");
$kasaalistopla->execute();
$kasaalisyaz= $kasaalistopla->fetch();
$kasaalistoplam=$kasaalisyaz['alis'];
?>

<?php
$bankaalistopla=$baglanti->prepare("SELECT SUM(tutar) AS alis FROM BankaGiris where parabirimi='$parabirimi[id]' and islem='bankagirdi'");
$bankaalistopla->execute();
$bankaalisyaz= $bankaalistopla->fetch();
$bankaalistoplam=$bankaalisyaz['alis'];
?>

									

										<canvas id="gelirler<?= $parabirimi['kisaltma']?>" width="50%" height="50%"></canvas>
						


								      
<script>
var ctx = document.getElementById('gelirler<?= $parabirimi['kisaltma']?>').getContext('2d');
var gelirler<?= $parabirimi['kisaltma']?> = new Chart(ctx, {
    type: 'pie',
    data: {
        labels: ['NAKİT','BANKA','ÇEK','SENET'],
        datasets: [{
            label: '<?= $parabirimi['parabirimadi']?>',
            data: ['<?php echo $kasaalistoplam; ?>','<?php echo $bankaalistoplam; ?>','<?php echo $cekalistoplam; ?>','<?php echo $senetalistoplam; ?>'],
            backgroundColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)'
             
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)'

            ],
            borderWidth: 1
        }]
    },
   
});
</script>

</div>
<div class="tab-pane animated bounceIn" id="gelirgunluk<?= $parabirimi['kisaltma']?>" role="tabpanel" aria-labelledby="pills-contact-tab">
	<?php
$buguncekalistopla=$baglanti->prepare("SELECT SUM(tutar) AS alis FROM CekSenet where parabirimi='$parabirimi[id]' and islem='alinan' and ceksenet='cek' and DAY(islemtarihi) = DAY(CURDATE())");
$buguncekalistopla->execute();
$buguncekalisyaz= $buguncekalistopla->fetch();
$buguncekalistoplam=$buguncekalisyaz['alis'];
?>

<?php
$bugunsenetalistopla=$baglanti->prepare("SELECT SUM(tutar) AS alis FROM CekSenet where parabirimi='$parabirimi[id]' and islem='alinan' and ceksenet='senet' and DAY(islemtarihi) = DAY(CURDATE())");
$bugunsenetalistopla->execute();
$bugunsenetalisyaz= $bugunsenetalistopla->fetch();
$bugunsenetalistoplam=$bugunsenetalisyaz['alis'];
?>
	  
<?php
$bugunkasaalistopla=$baglanti->prepare("SELECT SUM(tutar) AS alis FROM KasaGiris where parabirimi='$parabirimi[id]' and islem='kasagirdi' and DAY(islemtarihi) = DAY(CURDATE())");
$bugunkasaalistopla->execute();
$bugunkasaalisyaz= $bugunkasaalistopla->fetch();
$bugunkasaalistoplam=$bugunkasaalisyaz['alis'];
?>

<?php
$bugunbankaalistopla=$baglanti->prepare("SELECT SUM(tutar) AS alis FROM BankaGiris where parabirimi='$parabirimi[id]' and islem='bankagirdi' and DAY(islemtarihi) = DAY(CURDATE())");
$bugunbankaalistopla->execute();
$bugunbankaalisyaz= $bugunbankaalistopla->fetch();
$bugunbankaalistoplam=$bugunbankaalisyaz['alis'];
?>

									
									<canvas id="bugungelirler<?= $parabirimi['kisaltma']?>" width="50%" height="50%"></canvas>


								      
<script>
var ctx = document.getElementById('bugungelirler<?= $parabirimi['kisaltma']?>').getContext('2d');
var bugungelirler<?= $parabirimi['kisaltma']?> = new Chart(ctx, {
    type: 'pie',
    data: {
        labels: ['NAKİT','BANKA','ÇEK','SENET'],
        datasets: [{
            label: '<?= $parabirimi['parabirimadi']?>',
            data: ['<?php echo $bugunkasaalistoplam; ?>','<?php echo $bugunbankaalistoplam; ?>','<?php echo $buguncekalistoplam; ?>','<?php echo $bugunsenetalistoplam; ?>'],
            backgroundColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)'
             
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)'

            ],
            borderWidth: 1
        }]
    },
   
});
</script>

	</div>
	<div class="tab-pane animated bounceIn" id="gelirhaftalik<?= $parabirimi['kisaltma']?>" role="tabpanel" aria-labelledby="pills-contact-tab">
	<?php
$haftacekalistopla=$baglanti->prepare("SELECT SUM(tutar) AS alis FROM CekSenet where parabirimi='$parabirimi[id]' and islem='alinan' and ceksenet='cek' and islemtarihi BETWEEN DATE_SUB( CURDATE() ,INTERVAL 7 DAY ) AND CURDATE()");
$haftacekalistopla->execute();
$haftacekalisyaz= $haftacekalistopla->fetch();
$haftacekalistoplam=$haftacekalisyaz['alis'];
?>

<?php
$haftasenetalistopla=$baglanti->prepare("SELECT SUM(tutar) AS alis FROM CekSenet where parabirimi='$parabirimi[id]' and islem='alinan' and ceksenet='senet' and islemtarihi BETWEEN DATE_SUB( CURDATE() ,INTERVAL 7 DAY ) AND CURDATE()");
$haftasenetalistopla->execute();
$haftasenetalisyaz= $haftasenetalistopla->fetch();
$haftasenetalistoplam=$haftasenetalisyaz['alis'];
?>
	  
<?php
$haftakasaalistopla=$baglanti->prepare("SELECT SUM(tutar) AS alis FROM KasaGiris where parabirimi='$parabirimi[id]' and islem='kasagirdi' and islemtarihi BETWEEN DATE_SUB( CURDATE() ,INTERVAL 7 DAY ) AND CURDATE()");
$haftakasaalistopla->execute();
$haftakasaalisyaz= $haftakasaalistopla->fetch();
$haftakasaalistoplam=$haftakasaalisyaz['alis'];
?>

<?php
$haftabankaalistopla=$baglanti->prepare("SELECT SUM(tutar) AS alis FROM BankaGiris where parabirimi='$parabirimi[id]' and islem='bankagirdi' and islemtarihi BETWEEN DATE_SUB( CURDATE() ,INTERVAL 7 DAY ) AND CURDATE()");
$haftabankaalistopla->execute();
$haftabankaalisyaz= $haftabankaalistopla->fetch();
$haftabankaalistoplam=$haftabankaalisyaz['alis'];
?>

									
									<canvas id="haftalikgelirler<?= $parabirimi['kisaltma']?>" width="50%" height="50%"></canvas>


								      
<script>
var ctx = document.getElementById('haftalikgelirler<?= $parabirimi['kisaltma']?>').getContext('2d');
var haftalikgelirler<?= $parabirimi['kisaltma']?> = new Chart(ctx, {
    type: 'pie',
    data: {
        labels: ['NAKİT','BANKA','ÇEK','SENET'],
        datasets: [{
            label: '<?= $parabirimi['parabirimadi']?>',
            data: ['<?php echo $haftakasaalistoplam; ?>','<?php echo $haftabankaalistoplam; ?>','<?php echo $haftacekalistoplam; ?>','<?php echo $haftasenetalistoplam; ?>'],
            backgroundColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)'
             
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)'

            ],
            borderWidth: 1
        }]
    },
   
});
</script>
	</div>

								</div>


									</div>
								</div>
							</div>
<?php }?>
<?php $parabirimleri = $baglanti->query("SELECT * FROM ParaBirimleri")->fetchAll();
foreach($parabirimleri as $parabirimi){
?>

<div class="col-md-6">
							<div class="card">
								<div class="card-header">
									<div class="card-title">GİDERLERİM <?= $parabirimi['parabirimadi']?></div>
								</div>
								<div class="card-body">
									<ul class="nav nav-pills nav-<?= $tema['tablorenk']?>" id="pills-tab" role="tablist">
										<li class="nav-item">
											<a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#gidertoplam<?= $parabirimi['kisaltma']?>" role="tab" aria-controls="pills-home" aria-selected="true">Toplam</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#gidergunluk<?= $parabirimi['kisaltma']?>" role="tab" aria-controls="pills-profile" aria-selected="false">Günlük</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#giderhaftalik<?= $parabirimi['kisaltma']?>" role="tab" aria-controls="pills-contact" aria-selected="false">7 Günlük</a>
										</li>
									</ul>    
                                                
<div class="tab-content mt-2 mb-3" id="pills-tabContent">
										<div class="tab-pane fade show active" id="gidertoplam<?= $parabirimi['kisaltma']?>" role="tabpanel" aria-labelledby="pills-home-tab">
<?php
$ceksatistopla=$baglanti->prepare("SELECT SUM(tutar) AS satis FROM CekSenet where parabirimi='$parabirimi[id]' and islem='verilen' and ceksenet='cek'");
$ceksatistopla->execute();
$ceksatisyaz= $ceksatistopla->fetch();
$ceksatistoplam=$ceksatisyaz['satis'];
?>

<?php
$senetsatistopla=$baglanti->prepare("SELECT SUM(tutar) AS satis FROM CekSenet where parabirimi='$parabirimi[id]' and islem='verilen' and ceksenet='senet'");
$senetsatistopla->execute();
$senetsatisyaz= $senetsatistopla->fetch();
$senetsatistoplam=$senetsatisyaz['satis'];
?>
	  
<?php
$kasasatistopla=$baglanti->prepare("SELECT SUM(tutar) AS satis FROM KasaGiris where parabirimi='$parabirimi[id]' and islem='kasacikti'");
$kasasatistopla->execute();
$kasasatisyaz= $kasasatistopla->fetch();
$kasasatistoplam=$kasasatisyaz['satis'];
?>

<?php
$bankasatistopla=$baglanti->prepare("SELECT SUM(tutar) AS satis FROM BankaGiris where parabirimi='$parabirimi[id]' and islem='bankacikti'");
$bankasatistopla->execute();
$bankasatisyaz= $bankasatistopla->fetch();
$bankasatistoplam=$bankasatisyaz['satis'];
?>

									
									<canvas id="giderler<?= $parabirimi['kisaltma']?>" width="50%" height="50%"></canvas>


								      
<script>
var ctx = document.getElementById('giderler<?= $parabirimi['kisaltma']?>').getContext('2d');
var giderler<?= $parabirimi['kisaltma']?> = new Chart(ctx, {
    type: 'pie',
    data: {
        labels: ['NAKİT','BANKA','ÇEK','SENET'],
        datasets: [{
            label: '<?= $parabirimi['kisaltma']?>',
            data: ['<?php echo $kasasatistoplam; ?>','<?php echo $bankasatistoplam; ?>','<?php echo $ceksatistoplam; ?>','<?php echo $senetsatistoplam; ?>'],
            backgroundColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)'
             
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)'

            ],
            borderWidth: 1
        }]
    },
   
});
</script>

</div>
<div class="tab-pane fade" id="gidergunluk<?= $parabirimi['kisaltma']?>" role="tabpanel" aria-labelledby="pills-contact-tab">
	<?php
$bugunceksatistopla=$baglanti->prepare("SELECT SUM(tutar) AS satis FROM CekSenet where parabirimi='$parabirimi[id]' and islem='verilen' and ceksenet='cek' and DAY(islemtarihi) = DAY(CURDATE())");
$bugunceksatistopla->execute();
$bugunceksatisyaz= $bugunceksatistopla->fetch();
$bugunceksatistoplam=$bugunceksatisyaz['satis'];
?>

<?php
$bugunsenetsatistopla=$baglanti->prepare("SELECT SUM(tutar) AS satis FROM CekSenet where parabirimi='$parabirimi[id]' and islem='verilen' and ceksenet='senet' and DAY(islemtarihi) = DAY(CURDATE())");
$bugunsenetsatistopla->execute();
$bugunsenetsatisyaz= $bugunsenetsatistopla->fetch();
$bugunsenetsatistoplam=$bugunsenetsatisyaz['satis'];
?>
	  
<?php
$bugunkasasatistopla=$baglanti->prepare("SELECT SUM(tutar) AS satis FROM KasaGiris where parabirimi='$parabirimi[id]' and islem='kasacikti' and DAY(islemtarihi) = DAY(CURDATE())");
$bugunkasasatistopla->execute();
$bugunkasasatisyaz= $bugunkasasatistopla->fetch();
$bugunkasasatistoplam=$bugunkasasatisyaz['satis'];
?>

<?php
$bugunbankasatistopla=$baglanti->prepare("SELECT SUM(tutar) AS satis FROM BankaGiris where parabirimi='$parabirimi[id]' and islem='bankacikti' and DAY(islemtarihi) = DAY(CURDATE())");
$bugunbankasatistopla->execute();
$bugunbankasatisyaz= $bugunbankasatistopla->fetch();
$bugunbankasatistoplam=$bugunbankasatisyaz['satis'];
?>

									
									<canvas id="bugungiderler<?= $parabirimi['kisaltma']?>" width="50%" height="50%"></canvas>


								      
<script>
var ctx = document.getElementById('bugungiderler<?= $parabirimi['kisaltma']?>').getContext('2d');
var bugungiderler<?= $parabirimi['kisaltma']?> = new Chart(ctx, {
    type: 'pie',
    data: {
        labels: ['NAKİT','BANKA','ÇEK','SENET'],
        datasets: [{
            label: '<?= $parabirimi['kisaltma']?>',
            data: ['<?php echo $bugunkasasatistoplam; ?>','<?php echo $bugunbankasatistoplam; ?>','<?php echo $bugunceksatistoplam; ?>','<?php echo $bugunsenetsatistoplam; ?>'],
            backgroundColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)'
             
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)'

            ],
            borderWidth: 1
        }]
    },
   
});
</script>

	</div>
	<div class="tab-pane fade" id="giderhaftalik<?= $parabirimi['kisaltma']?>" role="tabpanel" aria-labelledby="pills-contact-tab">
	<?php
$haftaceksatistopla=$baglanti->prepare("SELECT SUM(tutar) AS satis FROM CekSenet where parabirimi='$parabirimi[id]' and islem='verilen' and ceksenet='cek' and islemtarihi BETWEEN DATE_SUB( CURDATE() ,INTERVAL 7 DAY ) AND CURDATE()");
$haftaceksatistopla->execute();
$haftaceksatisyaz= $haftaceksatistopla->fetch();
$haftaceksatistoplam=$haftaceksatisyaz['satis'];
?>

<?php
$haftasenetsatistopla=$baglanti->prepare("SELECT SUM(tutar) AS satis FROM CekSenet where parabirimi='$parabirimi[id]' and islem='verilen' and ceksenet='senet' and islemtarihi BETWEEN DATE_SUB( CURDATE() ,INTERVAL 7 DAY ) AND CURDATE()");
$haftasenetsatistopla->execute();
$haftasenetsatisyaz= $haftasenetsatistopla->fetch();
$haftasenetsatistoplam=$haftasenetsatisyaz['satis'];
?>
	  
<?php
$haftakasasatistopla=$baglanti->prepare("SELECT SUM(tutar) AS satis FROM KasaGiris where parabirimi='$parabirimi[id]' and islem='kasacikti' and islemtarihi BETWEEN DATE_SUB( CURDATE() ,INTERVAL 7 DAY ) AND CURDATE()");
$haftakasasatistopla->execute();
$haftakasasatisyaz= $haftakasasatistopla->fetch();
$haftakasasatistoplam=$haftakasasatisyaz['satis'];
?>

<?php
$haftabankasatistopla=$baglanti->prepare("SELECT SUM(tutar) AS satis FROM BankaGiris where parabirimi='$parabirimi[id]' and islem='bankacikti' and islemtarihi BETWEEN DATE_SUB( CURDATE() ,INTERVAL 7 DAY ) AND CURDATE()");
$haftabankasatistopla->execute();
$haftabankasatisyaz= $haftabankasatistopla->fetch();
$haftabankasatistoplam=$haftabankasatisyaz['satis'];
?>

									
									<canvas id="haftalikgiderler<?= $parabirimi['kisaltma']?>" width="50%" height="50%"></canvas>


								      
<script>
var ctx = document.getElementById('haftalikgiderler<?= $parabirimi['kisaltma']?>').getContext('2d');
var haftalikgiderler<?= $parabirimi['kisaltma']?> = new Chart(ctx, {
    type: 'pie',
    data: {
        labels: ['NAKİT','BANKA','ÇEK','SENET'],
        datasets: [{
            label: '<?= $parabirimi['kisaltma']?>',
            data: ['<?php echo $haftakasasatistoplam; ?>','<?php echo $haftabankasatistoplam; ?>','<?php echo $haftaceksatistoplam; ?>','<?php echo $haftasenetsatistoplam; ?>'],
            backgroundColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)'
             
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)'

            ],
            borderWidth: 1
        }]
    },
   
});
</script>
	</div>

								</div>


									</div>
								</div>
							</div>
<?php }?> 
<?php $parabirimleri = $baglanti->query("SELECT * FROM ParaBirimleri")->fetchAll();
foreach($parabirimleri as $parabirimi){
?>

<div class="col-md-6">
<div class="card">
<div class="card-header">
<h4 class="card-title">SATIŞ FATURALARI <?= $parabirimi['parabirimadi']?></h4>
</div>
<div class="card-body">
	<ul class="nav nav-pills nav-<?= $tema['tablorenk']?>" id="pills-tab" role="tablist">
										<li class="nav-item">
											<a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#satis7gun<?= $parabirimi['kisaltma']?>" role="tab" aria-controls="pills-home" aria-selected="true">7 Günlük</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#satis30gun<?= $parabirimi['kisaltma']?>" role="tab" aria-controls="pills-profile" aria-selected="false">Aylık</a>
										</li>
<li class="nav-item">
											<a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#satisyillik<?= $parabirimi['kisaltma']?>" role="tab" aria-controls="pills-profile" aria-selected="false">Yıllık</a>
										</li>
									
									</ul>    
                                                
<div class="tab-content mt-2 mb-3" id="pills-tabContent">
<div class="tab-pane animated zoomIn show active" id="satis7gun<?= $parabirimi['kisaltma']?>" role="tabpanel" aria-labelledby="pills-home-tab">

  <?php  $satis7gun = $baglanti->query("SELECT SUM(geneltoplam) AS satis, tarih FROM SatFatBilgi WHERE parabirimi='$parabirimi[id]' and tarih BETWEEN DATE_SUB( CURDATE() ,INTERVAL 7 DAY ) AND CURDATE() GROUP by tarih order by tarih asc")->fetchAll(PDO::FETCH_ASSOC);
                                                                      ?> 
  <canvas id="satis7<?= $parabirimi['kisaltma']?>" width="50%" height="50%"></canvas>
<script>
var ctx = document.getElementById('satis7<?= $parabirimi['kisaltma']?>').getContext('2d');
var satis7<?= $parabirimi['kisaltma']?> = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: [<?php
foreach($satis7gun as $satis7gunum){
                                                            ?>'<?=$satis7gunum["tarih"];?>',
<?php } ?>],
        datasets: [{
            label: '<?= $parabirimi['parabirimadi']?>',
            data: [<?php
foreach($satis7gun as $satis7gunum){
                                                            ?>'<?=$satis7gunum["satis"];?>',
<?php } ?>],
backgroundColor: '#f3545d',
borderColor: '#f3545d',
         
        }]
    },
   
});
</script>
</div>
<div class="tab-pane animated zoomIn" id="satis30gun<?= $parabirimi['kisaltma']?>" role="tabpanel" aria-labelledby="pills-home-tab">
   <?php  $satis30gun = $baglanti->query("SELECT SUM(geneltoplam) AS satis, tarih FROM SatFatBilgi WHERE parabirimi='$parabirimi[id]' and MONTH(tarih) = MONTH(CURDATE()) GROUP by tarih order by tarih asc")->fetchAll(PDO::FETCH_ASSOC);
                                                                      ?> 
  <canvas id="satis30<?= $parabirimi['kisaltma']?>" width="50%" height="50%"></canvas>
<script>
var ctx = document.getElementById('satis30<?= $parabirimi['kisaltma']?>').getContext('2d');
var satis30<?= $parabirimi['kisaltma']?> = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: [<?php
foreach($satis30gun as $satis30gunum){
                                                            ?>'<?=$satis30gunum["tarih"];?>',
<?php } ?>],
        datasets: [{
            label: '<?= $parabirimi['parabirimadi']?>',
            data: [<?php
foreach($satis30gun as $satis30gunum){
                                                            ?>'<?=$satis30gunum["satis"];?>',
<?php } ?>],
backgroundColor: '#f3545d',
borderColor: '#f3545d',
         
        }]
    },
   
});
</script>
</div>
<div class="tab-pane animated zoomIn" id="satisyillik<?= $parabirimi['kisaltma']?>" role="tabpanel" aria-labelledby="pills-contact-tab">
 <?php  $satisyillik = $baglanti->query("SELECT SUM(geneltoplam) AS satis, tarih FROM SatFatBilgi WHERE parabirimi='$parabirimi[id]' and YEAR(tarih) = YEAR(CURDATE()) GROUP by EXTRACT(YEAR_MONTH FROM tarih) order by tarih asc")->fetchAll(PDO::FETCH_ASSOC);
                                                                      ?>         





                                                    <canvas id="satisyil<?= $parabirimi['kisaltma']?>" width="50%" height="50%"></canvas>


								      
<script>
var ctx = document.getElementById('satisyil<?= $parabirimi['kisaltma']?>').getContext('2d');
var satisyil<?= $parabirimi['kisaltma']?> = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: [<?php
foreach($satisyillik as $satisyillikk){
                                                            ?>'<?=$satisyillikk["tarih"];?>',
<?php } ?>],
        datasets: [{
            label: 'TOPLAM',
            data: [<?php
foreach($satisyillik as $satisyillikk){
                                                            ?>'<?=$satisyillikk["satis"];?>',
<?php } ?>],
     backgroundColor: '#f3545d',
	borderColor: '#f3545d',
         
        }]
    },
   
});
</script>
	</div>

</div>
</div>
</div>
</div>	
<?php }?> 



<?php $parabirimleri = $baglanti->query("SELECT * FROM ParaBirimleri")->fetchAll();
foreach($parabirimleri as $parabirimi){
?>

<div class="col-md-6">
<div class="card">
<div class="card-header">
<h4 class="card-title">ALIŞ FATURALARI <?= $parabirimi['parabirimadi']?></h4>
</div>
<div class="card-body">
	<ul class="nav nav-pills nav-<?= $tema['tablorenk']?>" id="pills-tab" role="tablist">
										<li class="nav-item">
											<a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#alis7gun<?= $parabirimi['kisaltma']?>" role="tab" aria-controls="pills-home" aria-selected="true">7 Günlük</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#alis30gun<?= $parabirimi['kisaltma']?>" role="tab" aria-controls="pills-profile" aria-selected="false">Aylık</a>
										</li>
<li class="nav-item">
											<a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#alisyillik<?= $parabirimi['kisaltma']?>" role="tab" aria-controls="pills-profile" aria-selected="false">Yıllık</a>
										</li>
									
									</ul>    
                                                
<div class="tab-content mt-2 mb-3" id="pills-tabContent">
<div class="tab-pane animated zoomIn show active" id="alis7gun<?= $parabirimi['kisaltma']?>" role="tabpanel" aria-labelledby="pills-home-tab">

  <?php  $alis7gun = $baglanti->query("SELECT SUM(geneltoplam) AS alis, tarih FROM AlFatBilgi WHERE parabirimi='$parabirimi[id]' and tarih BETWEEN DATE_SUB( CURDATE() ,INTERVAL 7 DAY ) AND CURDATE() GROUP by tarih order by tarih asc")->fetchAll(PDO::FETCH_ASSOC);
                                                                      ?> 
  <canvas id="alis7<?= $parabirimi['kisaltma']?>" width="50%" height="50%"></canvas>
<script>
var ctx = document.getElementById('alis7<?= $parabirimi['kisaltma']?>').getContext('2d');
var alis7<?= $parabirimi['kisaltma']?> = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: [<?php
foreach($alis7gun as $alis7gunum){
                                                            ?>'<?=$alis7gunum["tarih"];?>',
<?php } ?>],
        datasets: [{
            label: '<?= $parabirimi['parabirimadi']?>',
            data: [<?php
foreach($alis7gun as $alis7gunum){
                                                            ?>'<?=$alis7gunum["alis"];?>',
<?php } ?>],
backgroundColor: '#35cd3a',
borderColor: '#35cd3a',
         
        }]
    },
   
});
</script>
</div>
<div class="tab-pane animated zoomIn" id="alis30gun<?= $parabirimi['kisaltma']?>" role="tabpanel" aria-labelledby="pills-home-tab">
   <?php  $alis30gun = $baglanti->query("SELECT SUM(geneltoplam) AS alis, tarih FROM AlFatBilgi WHERE parabirimi='$parabirimi[id]' and MONTH(tarih) = MONTH(CURDATE()) GROUP by tarih order by tarih asc")->fetchAll(PDO::FETCH_ASSOC);
                                                                      ?> 
  <canvas id="alis30<?= $parabirimi['kisaltma']?>" width="50%" height="50%"></canvas>
<script>
var ctx = document.getElementById('alis30<?= $parabirimi['kisaltma']?>').getContext('2d');
var alis30<?= $parabirimi['kisaltma']?> = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: [<?php
foreach($alis30gun as $alis30gunum){
                                                            ?>'<?=$alis30gunum["tarih"];?>',
<?php } ?>],
        datasets: [{
            label: '<?= $parabirimi['parabirimadi']?>',
            data: [<?php
foreach($alis30gun as $alis30gunum){
                                                            ?>'<?=$alis30gunum["alis"];?>',
<?php } ?>],
backgroundColor: '#35cd3a',
borderColor: '#35cd3a',
         
        }]
    },
   
});
</script>
</div>
<div class="tab-pane animated zoomIn" id="alisyillik<?= $parabirimi['kisaltma']?>" role="tabpanel" aria-labelledby="pills-contact-tab">
 <?php  $alisyillik = $baglanti->query("SELECT SUM(geneltoplam) AS alis, tarih FROM AlFatBilgi WHERE parabirimi='$parabirimi[id]' and YEAR(tarih) = YEAR(CURDATE()) GROUP by EXTRACT(YEAR_MONTH FROM tarih) order by tarih asc")->fetchAll(PDO::FETCH_ASSOC);
                                                                      ?>         





                                                    <canvas id="alisyil<?= $parabirimi['kisaltma']?>" width="50%" height="50%"></canvas>


								      
<script>
var ctx = document.getElementById('alisyil<?= $parabirimi['kisaltma']?>').getContext('2d');
var alisyil<?= $parabirimi['kisaltma']?> = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: [<?php
foreach($alisyillik as $alisyillikk){
                                                            ?>'<?=$alisyillikk["tarih"];?>',
<?php } ?>],
        datasets: [{
            label: 'TOPLAM',
            data: [<?php
foreach($alisyillik as $alisyillikk){
                                                            ?>'<?=$alisyillikk["alis"];?>',
<?php } ?>],
     backgroundColor: '#35cd3a',
	borderColor: '#35cd3a',
         
        }]
    },
   
});
</script>
	</div>

</div>
</div>
</div>
</div>	
<?php }?> 

<?php $parabirimleri = $baglanti->query("SELECT * FROM ParaBirimleri")->fetchAll();
foreach($parabirimleri as $parabirimi){
?>

<div class="col-md-6">
							<div class="card">
								<div class="card-header">
									<div class="card-title">CARİ BORÇLANDIRMA <?= $parabirimi['parabirimadi']?></div>
								</div>
								<div class="card-body">
									<ul class="nav nav-pills nav-<?= $tema['tablorenk']?>" id="pills-tab" role="tablist">
										<li class="nav-item">
											<a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#borc7gun<?= $parabirimi['kisaltma']?>" role="tab" aria-controls="pills-home" aria-selected="true">7 Günlük</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#borc30gun<?= $parabirimi['kisaltma']?>" role="tab" aria-controls="pills-profile" aria-selected="false">Aylık</a>
										</li>
<li class="nav-item">
											<a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#borcyillik<?= $parabirimi['kisaltma']?>" role="tab" aria-controls="pills-profile" aria-selected="false">Yıllık</a>
										</li>
									
									</ul>    
                                                
<div class="tab-content mt-2 mb-3" id="pills-tabContent">
										<div class="tab-pane animated bounceIn show active" id="borc7gun<?= $parabirimi['kisaltma']?>" role="tabpanel" aria-labelledby="pills-home-tab">
   <?php  $borc7gun = $baglanti->query("SELECT SUM(tutar) AS satis, tarih FROM CariIslem WHERE parabirimi='$parabirimi[id]' and islem='borc' and tarih BETWEEN DATE_SUB( CURDATE() ,INTERVAL 7 DAY ) AND CURDATE() GROUP by tarih order by tarih asc")->fetchAll(PDO::FETCH_ASSOC);
                                                                      ?>         





                                                    <canvas id="cariborc7gun<?= $parabirimi['kisaltma']?>" width="50%" height="50%"></canvas>


								      
<script>
var ctx = document.getElementById('cariborc7gun<?= $parabirimi['kisaltma']?>').getContext('2d');
var cariborc7gun<?= $parabirimi['kisaltma']?> = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: [<?php
foreach($borc7gun as $borc7gunum){
                                                            ?>'<?=$borc7gunum["tarih"];?>',
<?php } ?>],
        datasets: [{
            label: '<?= $parabirimi['parabirimadi']?>',
            data: [<?php
foreach($borc7gun as $borc7gunum){
                                                            ?>'<?=$borc7gunum["satis"];?>',
<?php } ?>],
     backgroundColor: '#ffa534',
borderColor: '#ffa534)',
         
        }]
    },
   
});
</script>

</div>
<div class="tab-pane animated bounceIn" id="borc30gun<?= $parabirimi['kisaltma']?>" role="tabpanel" aria-labelledby="pills-contact-tab">
   <?php  $borc30gun = $baglanti->query("SELECT SUM(tutar) AS satis, tarih FROM CariIslem WHERE parabirimi='$parabirimi[id]' and islem='borc' and MONTH(tarih) = MONTH(CURDATE()) GROUP by tarih order by tarih asc")->fetchAll(PDO::FETCH_ASSOC);
                                                                      ?>         





                                                    <canvas id="cariborc30gun<?= $parabirimi['kisaltma']?>" width="50%" height="50%"></canvas>


								      
<script>
var ctx = document.getElementById('cariborc30gun<?= $parabirimi['kisaltma']?>').getContext('2d');
var cariborc30gun<?= $parabirimi['kisaltma']?> = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: [<?php
foreach($borc30gun as $borc30gunum){
                                                            ?>'<?=$borc30gunum["tarih"];?>',
<?php } ?>],
        datasets: [{
            label: '<?= $parabirimi['parabirimadi']?>',
            data: [<?php
foreach($borc30gun as $borc30gunum){
                                                            ?>'<?=$borc30gunum["satis"];?>',
<?php } ?>],
     backgroundColor: '#ffa534',
borderColor: '#ffa534)',
         
        }]
    },
   
});
</script>

	</div>
<div class="tab-pane animated bounceIn" id="borcyillik<?= $parabirimi['kisaltma']?>" role="tabpanel" aria-labelledby="pills-contact-tab">
 <?php  $borcyillik = $baglanti->query("SELECT SUM(tutar) AS satis, tarih FROM CariIslem WHERE parabirimi='$parabirimi[id]' and islem='borc' and YEAR(tarih) = YEAR(CURDATE()) GROUP by EXTRACT(YEAR_MONTH FROM tarih) order by tarih asc")->fetchAll(PDO::FETCH_ASSOC);
                                                                      ?>         





                                                    <canvas id="cariborcyillik<?= $parabirimi['kisaltma']?>" width="50%" height="50%"></canvas>


								      
<script>
var ctx = document.getElementById('cariborcyillik<?= $parabirimi['kisaltma']?>').getContext('2d');
var cariborcyillik<?= $parabirimi['kisaltma']?> = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: [<?php
foreach($borcyillik as $borcyillikk){
                                                            ?>'<?=$borcyillikk["tarih"];?>',
<?php } ?>],
        datasets: [{
            label: '<?= $parabirimi['parabirimadi']?>',
            data: [<?php
foreach($borcyillik as $borcyillikk){
                                                            ?>'<?=$borcyillikk["satis"];?>',
<?php } ?>],
     backgroundColor: '#ffa534',
borderColor: '#ffa534)',
         
        }]
    },
   
});
</script>
	</div>

	
</div>
</div>
</div>
	
</div>							
<?php }?> 
<?php $parabirimleri = $baglanti->query("SELECT * FROM ParaBirimleri")->fetchAll();
foreach($parabirimleri as $parabirimi){
?>

				<div class="col-md-6">
							<div class="card">
								<div class="card-header">
									<div class="card-title">CARİ ALACAKLANDIRMA <?= $parabirimi['parabirimadi']?></div>
								</div>
								<div class="card-body">
									<ul class="nav nav-pills nav-<?= $tema['tablorenk']?>" id="pills-tab" role="tablist">
										<li class="nav-item">
											<a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#alacak7gun<?= $parabirimi['kisaltma']?>" role="tab" aria-controls="pills-home" aria-selected="true">7 Günlük</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#alacak30gun<?= $parabirimi['kisaltma']?>" role="tab" aria-controls="pills-profile" aria-selected="false">Aylık</a>
										</li>
<li class="nav-item">
											<a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#alacakyillik<?= $parabirimi['kisaltma']?>" role="tab" aria-controls="pills-profile" aria-selected="false">Yıllık</a>
										</li>
									
									</ul>    
                                                
<div class="tab-content mt-2 mb-3" id="pills-tabContent">
										<div class="tab-pane animated fadeInUp show active" id="alacak7gun<?= $parabirimi['kisaltma']?>" role="tabpanel" aria-labelledby="pills-home-tab">
   <?php  $alacak7gun = $baglanti->query("SELECT SUM(tutar) AS alis, tarih FROM CariIslem WHERE parabirimi='$parabirimi[id]' and islem='alacak' and tarih BETWEEN DATE_SUB( CURDATE() ,INTERVAL 7 DAY ) AND CURDATE() GROUP by tarih order by tarih asc")->fetchAll(PDO::FETCH_ASSOC);
                                                                      ?>         





                                                    <canvas id="carialacak7gun<?= $parabirimi['kisaltma']?>" width="50%" height="50%"></canvas>


								      
<script>
var ctx = document.getElementById('carialacak7gun<?= $parabirimi['kisaltma']?>').getContext('2d');
var carialacak7gun<?= $parabirimi['kisaltma']?> = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: [<?php
foreach($alacak7gun as $alacak7gunum){
                                                            ?>'<?=$alacak7gunum["tarih"];?>',
<?php } ?>],
        datasets: [{
            label: 'TOPLAM',
            data: [<?php
foreach($alacak7gun as $alacak7gunum){
                                                            ?>'<?=$alacak7gunum["alis"];?>',
<?php } ?>],
     backgroundColor: '#716aca',
borderColor: '#716aca',
         
        }]
    },
   
});
</script>

</div>
<div class="tab-pane animated fadeInUp" id="alacak30gun<?= $parabirimi['kisaltma']?>" role="tabpanel" aria-labelledby="pills-contact-tab">
   <?php  $alacak30gun = $baglanti->query("SELECT SUM(tutar) AS alis, tarih FROM CariIslem WHERE parabirimi='$parabirimi[id]' and islem='alacak' and MONTH(tarih) = MONTH(CURDATE()) GROUP by tarih order by tarih asc")->fetchAll(PDO::FETCH_ASSOC);
                                                                      ?>         





                                                    <canvas id="carialacak30gun<?= $parabirimi['kisaltma']?>" width="50%" height="50%"></canvas>


								      
<script>
var ctx = document.getElementById('carialacak30gun<?= $parabirimi['kisaltma']?>').getContext('2d');
var carialacak30gun<?= $parabirimi['kisaltma']?> = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: [<?php
foreach($alacak30gun as $alacak30gunum){
                                                            ?>'<?=$alacak30gunum["tarih"];?>',
<?php } ?>],
        datasets: [{
            label: 'TOPLAM',
            data: [<?php
foreach($alacak30gun as $alacak30gunum){
                                                            ?>'<?=$alacak30gunum["alis"];?>',
<?php } ?>],
     backgroundColor: '#716aca',
borderColor: '#716aca',
         
        }]
    },
   
});
</script>

	</div>
<div class="tab-pane animated fadeInUp" id="alacakyillik<?= $parabirimi['kisaltma']?>" role="tabpanel" aria-labelledby="pills-contact-tab">
 <?php  $alacakyillik = $baglanti->query("SELECT SUM(tutar) AS alis, tarih FROM CariIslem WHERE parabirimi='$parabirimi[id]' and islem='alacak' and YEAR(tarih) = YEAR(CURDATE()) GROUP by EXTRACT(YEAR_MONTH FROM tarih) order by tarih asc")->fetchAll(PDO::FETCH_ASSOC);
                                                                      ?>         





                                                    <canvas id="carialacakyillik<?= $parabirimi['kisaltma']?>" width="50%" height="50%"></canvas>


								      
<script>
var ctx = document.getElementById('carialacakyillik<?= $parabirimi['kisaltma']?>').getContext('2d');
var carialacakyillik<?= $parabirimi['kisaltma']?> = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: [<?php
foreach($alacakyillik as $alacakyillikk){
                                                            ?>'<?=$alacakyillikk["tarih"];?>',
<?php } ?>],
        datasets: [{
            label: 'TOPLAM',
            data: [<?php
foreach($alacakyillik as $alacakyillikk){
                                                            ?>'<?=$alacakyillikk["alis"];?>',
<?php } ?>],
     backgroundColor: '#716aca',
borderColor: '#716aca',
         
        }]
    },
   
});
</script>
	</div>

	
								</div>


									</div>
								</div>
							</div>
<?php }?> 


</div>

				</div>
			</div>
			<?php
require("Tablolar/alt.php"); //alt
?>
		</div>
		
	</div>
	

	

</body>
</html>

	