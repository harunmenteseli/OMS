<?php $ajanda = $baglanti->query("Select * from Ajanda where kid='$kbilgi[id]'")->fetchAll();
                                                         foreach ($ajanda as $ajandam) {
                                                        ?> 
<?php	
$ilktarih=date('Y-m-d'); //bu ilk kayıt tarihi olsun
$sontarih=$kisatarih = substr($ajandam["yapilacaktarih"],0,10);//buda şu anki tarih olsun
$ilktarihstr=strtotime($ilktarih);//ilk tarihi strtotime ile çeviriyom
$sontarihstr=strtotime($sontarih);//ilk tarihi strtotime ile çeviriyom
$farkim=($sontarihstr-$ilktarihstr)/86400;//sondan ilki çıkarıp 86400 e bölüyoz bu bize günü verecek
	  
	if($farkim == 0 ){?>
<script>
//Notify
$.notify({
	icon: 'fas fa-bell',
	title: '<?= $ajandam['baslik']?>',
	message: '<?= $ajandam['icerik']?>',

},{
	type: '<?= $ajandam['onem']?>',
	placement: {
		from: "bottom",
		align: "right"

	},
	time: 3000,
});

</script>
<?php } ?>
<?php }?>