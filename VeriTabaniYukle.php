<?php
require("Ayarlar/Baglantim.php"); 
require("Ayarlar/Guvenlik.php"); 
require("Ayarlar/DBBackupRestore.class.php"); 
?>
<!DOCTYPE html>
<html lang="tr">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	
	<title>Veritabanı Yükleme - <?= $ayar["siteadi"] ?> - <?= $ayar["siteslogan"] ?></title>
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
									<h4 class="card-title table-head-bg-primary">Veritabanı Yükleme</h4>
								</div>
								<div class="card-body ">

   
				
	

<?php
  if (isset($_POST["gonder"])) {
        $dosyam  =$_POST["yedekle"];
$dbBackup = new DBYedek(); // class'imizla $dbBackup nesnemizi olusturduk

		$dosya = "$dosyam"; // içe aktarımı yapılacak veritabanı.
	// maxKomut değişkeni yüksek tutmak aynı anda daha fazla verinin işlenmesine olanak tanır ancak hostu yorar
	// echo ini_get('max_execution_time'); ile php.ini dosyasındaki değeri kontrol edebilirsiniz öntanımlı süre genelde 30 saniyedir
    $maxKomut = 8; // php.ini dosyasındaki maksimum komut dosyası yürütme sınırınızdan daha az olmalı.
	
	$dbBackup->Ice_Aktar($dosya, $maxKomut); 


$dbBackup->kapat();// $dbBackup nesnemizi kapattik 

ob_end_flush();
}
?>							
									
					</div>
			</div>
					
					
				</div>
			</div>
			<div type="hidden" id="result">
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

	