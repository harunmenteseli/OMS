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
	
	<title>Yedekleme - <?= $ayar["siteadi"] ?> - <?= $ayar["siteslogan"] ?></title>
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
									<h4 class="card-title table-head-bg-primary">Yedekleme</h4>
								</div>
								<div class="card-body ">

   
	<?php





$dbBackup = new DBYedek(); // class'imizla $dbBackup nesnemizi olusturduk

	//$kayityeri klasor yolu belirtirken sonunda mutlaka / olmali (klasoradi/) seklinde
	$kayityeri	= "Yedeklemeler/";	// ayni dizin için $kayityeri degiskeni bos birakilmali
	$arsiv		= false;	//Yedeği zip arsivi olarak almak için true // .sql olarak almak için false
	$tablosil	= true;		//DROP TABLE IF EXISTS satırı eklemek için true // istenmiyorsa false
	//Veri için kullanılacak sözdizimi:
	$veritipi	= 1; // INSERT INTO tbl_adı VALUES (1,2,3);
	//$veritipi	= 2; // INTO tbl_adı VALUES (1,2,3), (4,5,6), (7,8,9);
	//$veritipi	= 3; // INSERT INTO tbl_adı (sütun_A,sütun_B,sütun_C) VALUES (1,2,3);
	//$veritipi	= 4; // INSERT INTO tbl_adı (col_A,col_B,col_C) VALUES (1,2,3), (4,5,6), (7,8,9);

	$backup = $dbBackup->Disa_Aktar($kayityeri, $arsiv, $tablosil, $veritipi);

	if($backup){
						echo '<a class="btn btn-success" href="' . $backup . '" download="' . $backup . '"><span class="btn-label"><i class="fas fa-download"></i></span> Veritabanını İndir</a>';
	
	
	} else {
		echo 'Beklenmedik hata oluştu!';
	}

$dbBackup->kapat();// $dbBackup nesnemizi kapattik


?>


									
									
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

	