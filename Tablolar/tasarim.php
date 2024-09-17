<?php
 $tema= $baglanti->query("select * from Tema")->fetch();
?>
<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" href="Tasarim/img/logo.png" type="image/x-icon"/>

	<!-- Fonts and icons -->
	<script src="Tasarim/js/plugin/webfont/webfont.min.js"></script>
	<script>
		WebFont.load({
			google: {"families":["Lato:300,400,700,900"]},
			custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['Tasarim/css/fonts.min.css']},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>


	<link rel="stylesheet" href="Tasarim/css/bootstrap.min.css">
	<link rel="stylesheet" href="Tasarim/css/om.css">
<link rel="stylesheet" href="Tasarim/css/renk.css">
<link rel="stylesheet" href="Tasarim/css/bosluk.css">
<link rel="stylesheet" href="Tasarim/css/yukseklikgenislik.css">
<link rel="stylesheet" href="Tasarim/css/yazitipi.css">

	<link rel="stylesheet" href="Tasarim/css/demo.css">
	<link rel="stylesheet" href="Tasarim/css/switch.css">
	<link rel="stylesheet" href="Tasarim/css/combo.select.css">
        <link href="Tasarim/tarihsecici/jquery.datetimepicker.min.css" rel="stylesheet">
