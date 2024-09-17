<?php
require("Ayarlar/Baglantim.php"); 
require("Ayarlar/Guvenlik.php"); 
?>
<!DOCTYPE html>
<html lang="tr">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	
	<title>Tema Ayarları - Online Muhasebe</title>
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
									<h4 class="card-title">Tema Ayarları</h4>
								</div>
								<div class="card-body ">



<div class="switcher">
<div class="switch-block">
						<h4>Sayfa Animasyon</h4>
<button type="button" class="btn btn-info btn-round animasyondegistir" data-color="yok">Animasyon Yok</button>					
<button type="button" class="btn btn-info btn-round animasyondegistir" data-color="bounce">Bounce</button>
<button type="button" class="btn btn-info btn-round animasyondegistir" data-color="bounceIn">BounceIn</button>
<button type="button" class="btn btn-info btn-round animasyondegistir" data-color="bounceInLeft">BounceInLeft</button>
<button type="button" class="btn btn-info btn-round animasyondegistir" data-color="bounceInRight">BounceInRight</button>
<button type="button" class="btn btn-info btn-round animasyondegistir" data-color="bounceInUp">BounceInUp</button>
<button type="button" class="btn btn-info btn-round animasyondegistir" data-color="bounceInDown">BounceInDown</button>	
<button type="button" class="btn btn-info btn-round animasyondegistir" data-color="flash">Flash</button>
<button type="button" class="btn btn-info btn-round animasyondegistir" data-color="rubberBand">RubberBand</button>
<button type="button" class="btn btn-info btn-round animasyondegistir" data-color="shake">Shake</button>
<button type="button" class="btn btn-info btn-round animasyondegistir" data-color="headShake">HeadShake</button>
<button type="button" class="btn btn-info btn-round animasyondegistir" data-color="swing">Swing</button>	
<button type="button" class="btn btn-info btn-round animasyondegistir" data-color="tada">Tada</button>	
<button type="button" class="btn btn-info btn-round animasyondegistir" data-color="jello">Jello</button>
<button type="button" class="btn btn-info btn-round animasyondegistir" data-color="fadeIn">FadeIn</button>
<button type="button" class="btn btn-info btn-round animasyondegistir" data-color="fadeInLeft">FadeInLeft</button>
<button type="button" class="btn btn-info btn-round animasyondegistir" data-color="fadeInRight">FadeInRight</button>
<button type="button" class="btn btn-info btn-round animasyondegistir" data-color="fadeInDown">FadeInDown</button>
<button type="button" class="btn btn-info btn-round animasyondegistir" data-color="fadeInUp">FadeInUp</button>	
<button type="button" class="btn btn-info btn-round animasyondegistir" data-color="fadeInDownBig">FadeInDownBig</button>
<button type="button" class="btn btn-info btn-round animasyondegistir" data-color="fadeInUpBig">FadeInUpBig</button>
<button type="button" class="btn btn-info btn-round animasyondegistir" data-color="fadeInLeftBig">FadeInLeftBig</button>
<button type="button" class="btn btn-info btn-round animasyondegistir" data-color="fadeInRightBig">FadeInRightBig</button>
<button type="button" class="btn btn-info btn-round animasyondegistir" data-color="flip">Flip</button>
<button type="button" class="btn btn-info btn-round animasyondegistir" data-color="flipInX">FlipInX</button>
<button type="button" class="btn btn-info btn-round animasyondegistir" data-color="flipInY">FlipInY</button>
<button type="button" class="btn btn-info btn-round animasyondegistir" data-color="lightSpeedIn">LightSpeedIn</button>
<button type="button" class="btn btn-info btn-round animasyondegistir" data-color="rotateIn">RotateIn</button>
<button type="button" class="btn btn-info btn-round animasyondegistir" data-color="rotateInDownLeft">RotateInDownLeft</button>
<button type="button" class="btn btn-info btn-round animasyondegistir" data-color="rotateInDownRight">RotateInDownRight</button>
<button type="button" class="btn btn-info btn-round animasyondegistir" data-color="rotateInUpLeft">RotateInUpLeft</button>
<button type="button" class="btn btn-info btn-round animasyondegistir" data-color="rotateInUpRight">RotateInUpRight</button>
<button type="button" class="btn btn-info btn-round animasyondegistir" data-color="jackInTheBox">JackInTheBox</button>
<button type="button" class="btn btn-info btn-round animasyondegistir" data-color="rollIn">RollIn</button>
<button type="button" class="btn btn-info btn-round animasyondegistir" data-color="zoomIn">ZoomIn</button>
<button type="button" class="btn btn-info btn-round animasyondegistir" data-color="zoomInDown">ZoomInDown</button>
<button type="button" class="btn btn-info btn-round animasyondegistir" data-color="zoomInUp">ZoomInUp</button>
<button type="button" class="btn btn-info btn-round animasyondegistir" data-color="zoomInLeft">ZoomInLeft</button>
<button type="button" class="btn btn-info btn-round animasyondegistir" data-color="zoomInRight">ZoomInRight</button>
<button type="button" class="btn btn-info btn-round animasyondegistir" data-color="slideInDown">SlideInDown</button>
<button type="button" class="btn btn-info btn-round animasyondegistir" data-color="slideInLeft">SlideInLeft</button>
<button type="button" class="btn btn-info btn-round animasyondegistir" data-color="slideInRight">SlideInRight</button>
<button type="button" class="btn btn-info btn-round animasyondegistir" data-color="slideInUp">SlideInUp</button>
					</div>
<br>
					<div class="switch-block">
						<h4>Logo Arkaplan</h4>
						<div class="btnSwitch">
							<button type="button" class="btn btn-icon btn-round changeLogoHeaderColor" data-color="dark"></button>
							<button type="button" class="btn btn-icon btn-round changeLogoHeaderColor" data-color="blue"></button>
							<button type="button" class="btn btn-icon btn-round changeLogoHeaderColor" data-color="purple"></button>
							<button type="button" class="btn btn-icon btn-round changeLogoHeaderColor" data-color="light-blue"></button>
							<button type="button" class="btn btn-icon btn-round changeLogoHeaderColor" data-color="green"></button>
							<button type="button" class="btn btn-icon btn-round changeLogoHeaderColor" data-color="orange"></button>
							<button type="button" class="btn btn-icon btn-round changeLogoHeaderColor" data-color="red"></button>
							<button type="button" class="btn btn-icon btn-round changeLogoHeaderColor" data-color="white"></button>
							<button type="button" class="btn btn-icon btn-round changeLogoHeaderColor" data-color="dark2"></button>
							<button type="button" class="btn btn-icon btn-round changeLogoHeaderColor" data-color="blue2"></button>
							<button type="button" class="btn btn-icon btn-round changeLogoHeaderColor" data-color="purple2"></button>
							<button type="button" class="btn btn-icon btn-round changeLogoHeaderColor" data-color="light-blue2"></button>
							<button type="button" class="btn btn-icon btn-round changeLogoHeaderColor" data-color="green2"></button>
							<button type="button" class="btn btn-icon btn-round changeLogoHeaderColor" data-color="orange2"></button>
							<button type="button" class="btn btn-icon btn-round changeLogoHeaderColor" data-color="red2"></button>
						</div>
					</div>
<br>
					<div class="switch-block">
						<h4>Üst Menü Arkaplan</h4>
						<div class="btnSwitch">
							<button type="button" class="btn btn-icon btn-round changeTopBarColor" data-color="dark"></button>
							<button type="button" class="btn btn-icon btn-round changeTopBarColor" data-color="blue"></button>
							<button type="button" class="btn btn-icon btn-round changeTopBarColor" data-color="purple"></button>
							<button type="button" class="btn btn-icon btn-round changeTopBarColor" data-color="light-blue"></button>
							<button type="button" class="btn btn-icon btn-round changeTopBarColor" data-color="green"></button>
							<button type="button" class="btn btn-icon btn-round changeTopBarColor" data-color="orange"></button>
							<button type="button" class="btn btn-icon btn-round changeTopBarColor" data-color="red"></button>
							<button type="button" class="btn btn-icon btn-round changeTopBarColor" data-color="white"></button>
							<button type="button" class="btn btn-icon btn-round changeTopBarColor" data-color="dark2"></button>
							<button type="button" class="btn btn-icon btn-round changeTopBarColor" data-color="blue2"></button>
							<button type="button" class="btn btn-icon btn-round changeTopBarColor" data-color="purple2"></button>
							<button type="button" class="btn btn-icon btn-round changeTopBarColor" data-color="light-blue2"></button>
							<button type="button" class="btn btn-icon btn-round changeTopBarColor" data-color="green2"></button>
							<button type="button" class="btn btn-icon btn-round changeTopBarColor" data-color="orange2"></button>
							<button type="button" class="btn btn-icon btn-round changeTopBarColor" data-color="red2"></button>
						</div>
					</div>
<br>
					<div class="switch-block">
<h4>Yan Menü Arkaplan</h4>
						<div class="btnSwitch">
		
							<button type="button" class="btn btn-icon btn-round changeSideBarColor" data-color="dark"></button>
							<button type="button" class="btn btn-icon btn-round changeSideBarColor" data-color="blue"></button>
							<button type="button" class="btn btn-icon btn-round changeSideBarColor" data-color="purple"></button>
							<button type="button" class="btn btn-icon btn-round changeSideBarColor" data-color="light-blue"></button>
							<button type="button" class="btn btn-icon btn-round changeSideBarColor" data-color="green"></button>
							<button type="button" class="btn btn-icon btn-round changeSideBarColor" data-color="orange"></button>
							<button type="button" class="btn btn-icon btn-round changeSideBarColor" data-color="red"></button>
							<button type="button" class="btn btn-icon btn-round changeSideBarColor" data-color="white"></button>
							<button type="button" class="btn btn-icon btn-round changeSideBarColor" data-color="dark2"></button>
							<button type="button" class="btn btn-icon btn-round changeSideBarColor" data-color="blue2"></button>
							<button type="button" class="btn btn-icon btn-round changeSideBarColor" data-color="purple2"></button>
							<button type="button" class="btn btn-icon btn-round changeSideBarColor" data-color="light-blue2"></button>
							<button type="button" class="btn btn-icon btn-round changeSideBarColor" data-color="green2"></button>
							<button type="button" class="btn btn-icon btn-round changeSideBarColor" data-color="orange2"></button>
							<button type="button" class="btn btn-icon btn-round changeSideBarColor" data-color="red2"></button>
						</div>
					</div>
<br>
					<div class="switch-block">
						<h4>Arkaplan</h4>
						<div class="btnSwitch">
							<button type="button" class="btn btn-icon btn-round changeBackgroundColor" data-color="bg2"></button>
							<button type="button" class="btn btn-icon btn-round changeBackgroundColor" data-color="bg1"></button>
							<button type="button" class="btn btn-icon btn-round changeBackgroundColor" data-color="bg3"></button>
							<button type="button" class="btn btn-icon btn-round changeBackgroundColor" data-color="dark"></button>
						</div>
					</div>



	<div class="switch-block">
						<h4>Tablo Arkaplan</h4>
						<div class="btnSwitch">
							<button type="button" class="btn btn-icon btn-round tabloarkaplandegistir" data-color="default"></button>
							<button type="button" class="btn btn-icon btn-round tabloarkaplandegistir" data-color="primary"></button>
							<button type="button" class="btn btn-icon btn-round tabloarkaplandegistir" data-color="success"></button>
							<button type="button" class="btn btn-icon btn-round tabloarkaplandegistir" data-color="secondary"></button>
							<button type="button" class="btn btn-icon btn-round tabloarkaplandegistir" data-color="info"></button>
							<button type="button" class="btn btn-icon btn-round tabloarkaplandegistir" data-color="warning"></button>
							<button type="button" class="btn btn-icon btn-round tabloarkaplandegistir" data-color="danger"></button>
						</div>
					</div>
<br>
<div class="switch-block">
						<h4>Logo Renk</h4>
					
							<button type="button" class="btn btn-icon btn-round logorenkdegistir arkaplan-beyaz" data-color="yazirenk-beyaz"></button>
							<button type="button" class="btn btn-icon btn-round logorenkdegistir arkaplan-siyah" data-color="yazirenk-siyah"></button>
							
					
					</div>
<br>
<div class="switch-block">
						<h4>Logo Boyut</h4>
							<button type="button" class="btn btn-icon btn-round logoboyutdegistir arkaplan-siyah yazirenk-beyaz" data-color="yazi18">18</button>	
							<button type="button" class="btn btn-icon btn-round logoboyutdegistir arkaplan-siyah yazirenk-beyaz" data-color="yazi19">19</button>				
							<button type="button" class="btn btn-icon btn-round logoboyutdegistir arkaplan-siyah yazirenk-beyaz" data-color="yazi20">20</button>
							<button type="button" class="btn btn-icon btn-round logoboyutdegistir arkaplan-siyah yazirenk-beyaz" data-color="yazi21">21</button>
							<button type="button" class="btn btn-icon btn-round logoboyutdegistir arkaplan-siyah yazirenk-beyaz" data-color="yazi22">22</button>
							<button type="button" class="btn btn-icon btn-round logoboyutdegistir arkaplan-siyah yazirenk-beyaz" data-color="yazi23">23</button>
							<button type="button" class="btn btn-icon btn-round logoboyutdegistir arkaplan-siyah yazirenk-beyaz" data-color="yazi24">24</button>
							<button type="button" class="btn btn-icon btn-round logoboyutdegistir arkaplan-siyah yazirenk-beyaz" data-color="yazi25">25</button>
							<button type="button" class="btn btn-icon btn-round logoboyutdegistir arkaplan-siyah yazirenk-beyaz" data-color="yazi26">26</button>
							<button type="button" class="btn btn-icon btn-round logoboyutdegistir arkaplan-siyah yazirenk-beyaz" data-color="yazi27">27</button>
							<button type="button" class="btn btn-icon btn-round logoboyutdegistir arkaplan-siyah yazirenk-beyaz" data-color="yazi28">28</button>
							<button type="button" class="btn btn-icon btn-round logoboyutdegistir arkaplan-siyah yazirenk-beyaz" data-color="yazi29">29</button>
							<button type="button" class="btn btn-icon btn-round logoboyutdegistir arkaplan-siyah yazirenk-beyaz" data-color="yazi30">30</button>
							<button type="button" class="btn btn-icon btn-round logoboyutdegistir arkaplan-siyah yazirenk-beyaz" data-color="yazi32">32</button>
							<button type="button" class="btn btn-icon btn-round logoboyutdegistir arkaplan-siyah yazirenk-beyaz" data-color="yazi34">34</button>
							<button type="button" class="btn btn-icon btn-round logoboyutdegistir arkaplan-siyah yazirenk-beyaz" data-color="yazi36">36</button>
							<button type="button" class="btn btn-icon btn-round logoboyutdegistir arkaplan-siyah yazirenk-beyaz" data-color="yazi38">38</button>
							<button type="button" class="btn btn-icon btn-round logoboyutdegistir arkaplan-siyah yazirenk-beyaz" data-color="yazi40">40</button>
							<button type="button" class="btn btn-icon btn-round logoboyutdegistir arkaplan-siyah yazirenk-beyaz" data-color="yazi41">41</button>
							<button type="button" class="btn btn-icon btn-round logoboyutdegistir arkaplan-siyah yazirenk-beyaz" data-color="yazi42">42</button>
							<button type="button" class="btn btn-icon btn-round logoboyutdegistir arkaplan-siyah yazirenk-beyaz" data-color="yazi43">43</button>
							<button type="button" class="btn btn-icon btn-round logoboyutdegistir arkaplan-siyah yazirenk-beyaz" data-color="yazi44">44</button>
							<button type="button" class="btn btn-icon btn-round logoboyutdegistir arkaplan-siyah yazirenk-beyaz" data-color="yazi45">45</button>
							<button type="button" class="btn btn-icon btn-round logoboyutdegistir arkaplan-siyah yazirenk-beyaz" data-color="yazi46">46</button>
							<button type="button" class="btn btn-icon btn-round logoboyutdegistir arkaplan-siyah yazirenk-beyaz" data-color="yazi47">47</button>
							<button type="button" class="btn btn-icon btn-round logoboyutdegistir arkaplan-siyah yazirenk-beyaz" data-color="yazi48">48</button>
							<button type="button" class="btn btn-icon btn-round logoboyutdegistir arkaplan-siyah yazirenk-beyaz" data-color="yazi50">50</button>
							
					
					</div>
<br>
<div class="switch-block">
						<h4>Logo Yazı Tipi</h4>
					
							<button type="button" class="btn btn-primary btn-round logoyazidegistir yazi20 ataturk" data-color="ataturk">Atatürk</button>
							<button type="button" class="btn btn-secondary btn-round logoyazidegistir yazi20 elyazisi" data-color="elyazisi">El Yazısı</button>
							<button type="button" class="btn btn-info btn-round logoyazidegistir yazi20 alyslight" data-color="alyslight">AlysLight</button>
							<button type="button" class="btn btn-warning btn-round logoyazidegistir yazi20 ankecall" data-color="ankecall">AnkeCall</button>
							<button type="button" class="btn btn-danger btn-round logoyazidegistir yazi20 argbiwsc" data-color="argbiwsc">ArgBiwSc</button>
							<button type="button" class="btn btn-success btn-round logoyazidegistir yazi20 filxgirl" data-color="filxgirl">Filx Girl</button>
							<button type="button" class="btn btn-primary btn-round logoyazidegistir yazi20 flbrsa1" data-color="flbrsa1">Flbrsal</button>	
							<button type="button" class="btn btn-secondary btn-round logoyazidegistir yazi20 levibrush" data-color="levibrush">Levi Brush</button>	
							<button type="button" class="btn btn-info btn-round logoyazidegistir yazi20 moonstar" data-color="moonstar">Ay Yıldız</button>	
							<button type="button" class="btn btn-warning btn-round logoyazidegistir yazi20 ornamental" data-color="ornamental">Ornamental</button>
							<button type="button" class="btn btn-danger btn-round logoyazidegistir yazi20 scriptin" data-color="scriptin">Scriptin</button>
							<button type="button" class="btn btn-success btn-round logoyazidegistir yazi20 carolingia" data-color="carolingia">Carolingia</button>
							<button type="button" class="btn btn-primary btn-round logoyazidegistir yazi20 diskusm" data-color="diskusm">Diskusm</button>
							<button type="button" class="btn btn-secondary btn-round logoyazidegistir yazi20 embassybt" data-color="embassybt">Embassy BT</button>
							<button type="button" class="btn btn-info btn-round logoyazidegistir yazi20 gessele" data-color="gessele">Gessele</button>
							
			
					</div>









				</div>





		
									
									
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
	<script>
        $(document).ready(function(){
            $(document).on('click', '.changeLogoHeaderColor', function(e){
           var tema = $(this).data('color'); 	
            
				swal({
					
					title: 'Emin misiniz?',
					text: "Değiştirmek istediğinize emin misiniz?",
					icon: "warning",
					buttons:{
						cancel: {
							visible: true,
							text : 'Hayır',
							className: 'btn btn-danger'
						},        			
						confirm: {
							text : 'Evet',
							className : 'btn btn-success'
						}
					}
				}).then((willDelete) => {
					if (willDelete) {
						$.ajax({ // Ajax metodu
                    type: "POST", // Gönderim Methodu POST (GET'de seçilebilir)
                    url: "Islem/Tema.php", // POST işleminin olacağı sayfa
                    data: 'logoarka='+tema, // Formdaki tüm verileri al
                    success: function(oldu){ // Eğer işlem başarılı olursa sonuç
                        $('#sonuc').html(oldu); // Id'si result olan divde sonucu yaz
                    }
                });
					} else {
						swal("Değiştirmekten vazgeçtiniz", {
							buttons : {
								confirm : {
									className: 'btn btn-success'
								}
							}
						});
					}
				});
			})
        });
    </script>
<script>
        $(document).ready(function(){
            $(document).on('click', '.changeTopBarColor', function(e){
           var tema = $(this).data('color'); 	
            
				swal({
					
					title: 'Emin misiniz?',
					text: "Değiştirmek istediğinize emin misiniz?",
					icon: "warning",
					buttons:{
						cancel: {
							visible: true,
							text : 'Hayır',
							className: 'btn btn-danger'
						},        			
						confirm: {
							text : 'Evet',
							className : 'btn btn-success'
						}
					}
				}).then((willDelete) => {
					if (willDelete) {
						$.ajax({ // Ajax metodu
                    type: "POST", // Gönderim Methodu POST (GET'de seçilebilir)
                    url: "Islem/Tema.php", // POST işleminin olacağı sayfa
                    data: 'ustmenuarka='+tema, // Formdaki tüm verileri al
                    success: function(oldu){ // Eğer işlem başarılı olursa sonuç
                        $('#sonuc').html(oldu); // Id'si result olan divde sonucu yaz
                    }
                });
					} else {
						swal("Değiştirmekten vazgeçtiniz", {
							buttons : {
								confirm : {
									className: 'btn btn-success'
								}
							}
						});
					}
				});
			})
        });
    </script>

<script>
        $(document).ready(function(){
            $(document).on('click', '.changeSideBarColor', function(e){
           var tema = $(this).data('color'); 	
            
				swal({
					
					title: 'Emin misiniz?',
					text: "Değiştirmek istediğinize emin misiniz?",
					icon: "warning",
					buttons:{
						cancel: {
							visible: true,
							text : 'Hayır',
							className: 'btn btn-danger'
						},        			
						confirm: {
							text : 'Evet',
							className : 'btn btn-success'
						}
					}
				}).then((willDelete) => {
					if (willDelete) {
						$.ajax({ // Ajax metodu
                    type: "POST", // Gönderim Methodu POST (GET'de seçilebilir)
                    url: "Islem/Tema.php", // POST işleminin olacağı sayfa
                    data: 'yanmenuarka='+tema, // Formdaki tüm verileri al
                    success: function(oldu){ // Eğer işlem başarılı olursa sonuç
                        $('#sonuc').html(oldu); // Id'si result olan divde sonucu yaz
                    }
                });
					} else {
						swal("Değiştirmekten vazgeçtiniz", {
							buttons : {
								confirm : {
									className: 'btn btn-success'
								}
							}
						});
					}
				});
			})
        });
    </script>

<script>
        $(document).ready(function(){
            $(document).on('click', '.changeBackgroundColor', function(e){
           var tema = $(this).data('color'); 	
            
				swal({
					
					title: 'Emin misiniz?',
					text: "Değiştirmek istediğinize emin misiniz?",
					icon: "warning",
					buttons:{
						cancel: {
							visible: true,
							text : 'Hayır',
							className: 'btn btn-danger'
						},        			
						confirm: {
							text : 'Evet',
							className : 'btn btn-success'
						}
					}
				}).then((willDelete) => {
					if (willDelete) {
						$.ajax({ // Ajax metodu
                    type: "POST", // Gönderim Methodu POST (GET'de seçilebilir)
                    url: "Islem/Tema.php", // POST işleminin olacağı sayfa
                    data: 'arkaplan='+tema, // Formdaki tüm verileri al
                    success: function(oldu){ // Eğer işlem başarılı olursa sonuç
                        $('#sonuc').html(oldu); // Id'si result olan divde sonucu yaz
                    }
                });
					} else {
						swal("Değiştirmekten vazgeçtiniz", {
							buttons : {
								confirm : {
									className: 'btn btn-success'
								}
							}
						});
					}
				});
			})
        });
    </script>
<script>
        $(document).ready(function(){
            $(document).on('click', '.tabloarkaplandegistir', function(e){
           var tema = $(this).data('color'); 	
            
				swal({
					
					title: 'Emin misiniz?',
					text: "Değiştirmek istediğinize emin misiniz?",
					icon: "warning",
					buttons:{
						cancel: {
							visible: true,
							text : 'Hayır',
							className: 'btn btn-danger'
						},        			
						confirm: {
							text : 'Evet',
							className : 'btn btn-success'
						}
					}
				}).then((willDelete) => {
					if (willDelete) {
						$.ajax({ // Ajax metodu
                    type: "POST", // Gönderim Methodu POST (GET'de seçilebilir)
                    url: "Islem/Tema.php", // POST işleminin olacağı sayfa
                    data: 'tablorenk='+tema, // Formdaki tüm verileri al
                    success: function(oldu){ // Eğer işlem başarılı olursa sonuç
                        $('#sonuc').html(oldu); // Id'si result olan divde sonucu yaz
                    }
                });
					} else {
						swal("Değiştirmekten vazgeçtiniz", {
							buttons : {
								confirm : {
									className: 'btn btn-success'
								}
							}
						});
					}
				});
			})
        });
    </script>

<script>
        $(document).ready(function(){
            $(document).on('click', '.logorenkdegistir', function(e){
           var tema = $(this).data('color'); 	
            
				swal({
					
					title: 'Emin misiniz?',
					text: "Değiştirmek istediğinize emin misiniz?",
					icon: "warning",
					buttons:{
						cancel: {
							visible: true,
							text : 'Hayır',
							className: 'btn btn-danger'
						},        			
						confirm: {
							text : 'Evet',
							className : 'btn btn-success'
						}
					}
				}).then((willDelete) => {
					if (willDelete) {
						$.ajax({ // Ajax metodu
                    type: "POST", // Gönderim Methodu POST (GET'de seçilebilir)
                    url: "Islem/Tema.php", // POST işleminin olacağı sayfa
                    data: 'logorenk='+tema, // Formdaki tüm verileri al
                    success: function(oldu){ // Eğer işlem başarılı olursa sonuç
                        $('#sonuc').html(oldu); // Id'si result olan divde sonucu yaz
                    }
                });
					} else {
						swal("Değiştirmekten vazgeçtiniz", {
							buttons : {
								confirm : {
									className: 'btn btn-success'
								}
							}
						});
					}
				});
			})
        });
    </script>



<script>
        $(document).ready(function(){
            $(document).on('click', '.logoyazidegistir', function(e){
           var tema = $(this).data('color'); 	
            
				swal({
					
					title: 'Emin misiniz?',
					text: "Değiştirmek istediğinize emin misiniz?",
					icon: "warning",
					buttons:{
						cancel: {
							visible: true,
							text : 'Hayır',
							className: 'btn btn-danger'
						},        			
						confirm: {
							text : 'Evet',
							className : 'btn btn-success'
						}
					}
				}).then((willDelete) => {
					if (willDelete) {
						$.ajax({ // Ajax metodu
                    type: "POST", // Gönderim Methodu POST (GET'de seçilebilir)
                    url: "Islem/Tema.php", // POST işleminin olacağı sayfa
                    data: 'logoyazi='+tema, // Formdaki tüm verileri al
                    success: function(oldu){ // Eğer işlem başarılı olursa sonuç
                        $('#sonuc').html(oldu); // Id'si result olan divde sonucu yaz
                    }
                });
					} else {
						swal("Değiştirmekten vazgeçtiniz", {
							buttons : {
								confirm : {
									className: 'btn btn-success'
								}
							}
						});
					}
				});
			})
        });
    </script>

<script>
        $(document).ready(function(){
            $(document).on('click', '.logoboyutdegistir', function(e){
           var tema = $(this).data('color'); 	
            
				swal({
					
					title: 'Emin misiniz?',
					text: "Değiştirmek istediğinize emin misiniz?",
					icon: "warning",
					buttons:{
						cancel: {
							visible: true,
							text : 'Hayır',
							className: 'btn btn-danger'
						},        			
						confirm: {
							text : 'Evet',
							className : 'btn btn-success'
						}
					}
				}).then((willDelete) => {
					if (willDelete) {
						$.ajax({ // Ajax metodu
                    type: "POST", // Gönderim Methodu POST (GET'de seçilebilir)
                    url: "Islem/Tema.php", // POST işleminin olacağı sayfa
                    data: 'logoboyut='+tema, // Formdaki tüm verileri al
                    success: function(oldu){ // Eğer işlem başarılı olursa sonuç
                        $('#sonuc').html(oldu); // Id'si result olan divde sonucu yaz
                    }
                });
					} else {
						swal("Değiştirmekten vazgeçtiniz", {
							buttons : {
								confirm : {
									className: 'btn btn-success'
								}
							}
						});
					}
				});
			})
        });
    </script>
<script>
        $(document).ready(function(){
            $(document).on('click', '.animasyondegistir', function(e){
           var tema = $(this).data('color'); 	
            
				swal({
					
					title: 'Emin misiniz?',
					text: "Değiştirmek istediğinize emin misiniz?",
					icon: "warning",
					buttons:{
						cancel: {
							visible: true,
							text : 'Hayır',
							className: 'btn btn-danger'
						},        			
						confirm: {
							text : 'Evet',
							className : 'btn btn-success'
						}
					}
				}).then((willDelete) => {
					if (willDelete) {
						$.ajax({ // Ajax metodu
                    type: "POST", // Gönderim Methodu POST (GET'de seçilebilir)
                    url: "Islem/Tema.php", // POST işleminin olacağı sayfa
                    data: 'animasyon='+tema, // Formdaki tüm verileri al
                    success: function(oldu){ // Eğer işlem başarılı olursa sonuç
                        $('#sonuc').html(oldu); // Id'si result olan divde sonucu yaz
                    }
                });
					} else {
						swal("Değiştirmekten vazgeçtiniz", {
							buttons : {
								confirm : {
									className: 'btn btn-success'
								}
							}
						});
					}
				});
			})
        });
    </script>

</body>
</html>

	