<div class="row">
						<div class="col-6 col-sm-4 col-lg-2">
							<div class="card card-success">
								<div class="card-body p-3 text-center">
							<div class="h2 mb-1"><span class="btn-label">
            <i class="fas fa-lira-sign"></i>
          </span>MAAŞ</div>
<div>TÜM PERSONELLER</div>
									<div class="h2"><?php
$maastopla=$baglanti->prepare("SELECT SUM(maas) AS maas FROM PersonelMaas");
$maastopla->execute();
$maasyaz= $maastopla->fetch();
$maastoplam=$maasyaz['maas'];
?>
	<?= number_format($maastoplam, 2, ',', '.'); ?> TL</div>
								</div>
							</div>
						</div>
<div class="col-6 col-sm-4 col-lg-2">
							<div class="card card-warning">
								<div class="card-body p-3 text-center">
							<div class="h2 mb-1"><span class="btn-label">
            <i class="fas fa-level-down-alt"></i>
          </span>AGİ</div>
<div>TÜM PERSONELLER</div>
									<div class="h2"><?php
$agitopla=$baglanti->prepare("SELECT SUM(agi) AS agi FROM PersonelMaas");
$agitopla->execute();
$agiyaz= $agitopla->fetch();
$agitoplam=$agiyaz['agi'];
?>
	<?= number_format($agitoplam, 2, ',', '.'); ?> TL</div>
								</div>
							</div>
						</div>
<div class="col-6 col-sm-4 col-lg-2">
							<div class="card card-primary">
								<div class="card-body p-3 text-center">
							<div class="h2 mb-1"><span class="btn-label">
            <i class="fas fa-user-clock"></i>
          </span>MESAİ</div>
<div>TÜM PERSONELLER</div>
									<div class="h2"><?php
$mesaitopla=$baglanti->prepare("SELECT SUM(mesaitutar) AS mesai FROM PersonelMesai");
$mesaitopla->execute();
$mesaiyaz= $mesaitopla->fetch();
$mesaitoplam=$mesaiyaz['mesai'];
?>
	<?= number_format($mesaitoplam, 2, ',', '.'); ?> TL</div>
								</div>
							</div>
						</div>
<div class="col-6 col-sm-4 col-lg-2">
							<div class="card card-secondary">
								<div class="card-body p-3 text-center">
							<div class="h2 mb-1"><span class="btn-label">
            <i class="fas fa-user-slash"></i>
          </span>İZİN</div>
<div>TÜM PERSONELLER</div>
									<div class="h2"><?php
$izinucrettopla=$baglanti->prepare("SELECT SUM(ucret) AS ucret FROM PersonelIzin");
$izinucrettopla->execute();
$izinucretyaz= $izinucrettopla->fetch();
$izinucrettoplam=$izinucretyaz['ucret'];
?>
	<?= number_format($izinucrettoplam, 2, ',', '.'); ?> TL</div>
								</div>
							</div>
						</div>
<div class="col-6 col-sm-4 col-lg-2">
							<div class="card card-danger">
								<div class="card-body p-3 text-center">
							<div class="h2 mb-1"><span class="btn-label">
            <i class="fas fa-lira-sign"></i>
          </span>ÖDEME</div>
<div>TÜM PERSONELLER</div>
									<div class="h2"><?php
$odemetopla=$baglanti->prepare("SELECT SUM(odeme) AS odeme FROM PersonelOdeme");
$odemetopla->execute();
$odemeyaz= $odemetopla->fetch();
$odemetoplam=$odemeyaz['odeme'];
?>
	<?= number_format($odemetoplam, 2, ',', '.'); ?> TL</div>
								</div>
							</div>
						</div>
<div class="col-6 col-sm-4 col-lg-2">
							<div class="card card-info">
								<div class="card-body p-3 text-center">
							<div class="h2 mb-1"><span class="btn-label">
            <i class="far fa-money-bill-alt"></i>
          </span>KALAN</div>
<div>TÜM PERSONELLER</div>
<div class="h2">
<?php
$alacak  = $maastoplam + $agitoplam + $mesaitoplam;
$borc  = $izinucrettoplam + $odemetoplam;
$kalan  = $alacak - $borc;
?>
	<?= number_format($kalan, 2, ',', '.'); ?> TL
 </div>
								</div>
							</div>
						</div>
				

					</div>