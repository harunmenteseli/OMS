<?php
require_once("Ayarlar/Baglantim.php"); 
require_once("Ayarlar/Guvenlik.php"); ?>

<!DOCTYPE html>
<html lang="tr">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	
	<title><?= $ayar["siteadi"] ?> - <?= $ayar["siteslogan"] ?></title>
	<?php
require_once("Tablolar/tasarim.php"); //logo - üst navigasyon menü
?>
</head>
<body class="animated <?= $tema['animasyon']?>" data-background-color="<?= $tema['arkaplan']?>">
	<div class="wrapper">
		<div class="main-header">
			<?php
require_once("Tablolar/ustmenu.php"); //logo - üst navigasyon menü
?>
		</div>
<?php
require("Tablolar/sol.php"); //sol menü
?>

				<div class="main-panel">
			<div class="content">
				<div class="page-inner">
<h4 class="text-danger">İletişim Kurmak İçin info@agartaplus.com mail adresinden irtibata geçebilirsiniz.</h4>
<?php
require_once("Tablolar/TahsilatOdemeKalan.php");
?>

<?php
require_once("Tablolar/Personel.php");
?>
<?php
require_once("Tablolar/ToplamIslemler.php"); 
?>				
<?php
require_once("Tablolar/BugunIslemler.php"); 
?>
<?php
require_once("Tablolar/HaftaIslemler.php");
?>
<?php
require_once("Tablolar/AyIslemler.php"); 
?>




					
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
	<?php
require("Tablolar/uyari.php"); //logo - üst navigasyon menü
?>

</body>
</html>

	