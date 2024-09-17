<!--   Core JS Files   -->
	<script src="Tasarim/js/core/jquery.3.2.1.min.js"></script>
	<script src="Tasarim/js/core/popper.min.js"></script>
	<script src="Tasarim/js/core/bootstrap.min.js"></script>

	<!-- jQuery UI -->
	<script src="Tasarim/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
	<script src="Tasarim/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>

	<!-- jQuery Scrollbar -->
	<script src="Tasarim/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>


	<!-- Chart JS -->
	<script src="Tasarim/js/plugin/chart.js/chart.min.js"></script>

	<!-- jQuery Sparkline -->
	<script src="Tasarim/js/plugin/jquery.sparkline/jquery.sparkline.min.js"></script>

	<!-- Chart Circle -->
	<script src="Tasarim/js/plugin/chart-circle/circles.min.js"></script>

	<!-- Datatables -->
	<script src="Tasarim/js/plugin/datatables/datatables.min.js"></script>
<script src="Tasarim/js/plugin/datatables/dataTables.buttons.min.js"></script>
<script src="Tasarim/js/plugin/datatables/buttons.print.min.js"></script>
<script src="Tasarim/js/plugin/datatables/pdfmake.min.js"></script>
<script src="Tasarim/js/plugin/datatables/vfs_fonts.js"></script>
<script src="Tasarim/js/plugin/datatables/buttons.html5.min.js"></script>
<script src="Tasarim/js/plugin/datatables/jszip.min.js"></script>
<script src="Tasarim/js/plugin/datatables/dataTables.bootstrap4.min.js"></script>
<script src="Tasarim/js/plugin/datatables/moment.min.js"></script>
<script src="Tasarim/js/plugin/datatables/dataTables.dateTime.min.js"></script>




	<!-- Bootstrap Notify -->
	<script src="Tasarim/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>

	<!-- jQuery Vector Maps -->
	<script src="Tasarim/js/plugin/jqvmap/jquery.vmap.min.js"></script>
	<script src="Tasarim/js/plugin/jqvmap/maps/jquery.vmap.world.js"></script>

	<!-- Sweet Alert -->
	<script src="Tasarim/js/plugin/sweetalert/sweetalert.min.js"></script>

	<!-- Atlantis JS -->
	<script src="Tasarim/js/atlantis.min.js"></script>
	
	<!-- Fatura JS -->
	<script src="Tasarim/js/Fatura.js"></script>
<script src="Tasarim/js/setting-demo.js"></script>

    <script src="Tasarim/tarihsecici/jquery.datetimepicker.full.min.js"></script>
    <script>
    $(document).ready(function () {
                'use strict';

            
                $.datetimepicker.setLocale('tr');
              $('.tarih').datetimepicker({
                format:'Y-m-d H:i',
                  dayOfWeekStart: 1
              });
        
            });
        
    </script>
	
<script language="JavaScript">
function yazdir() {
var yazdirilacakAlan= document.getElementById('yazdir').innerHTML;
var orjinalSayfa= document.body.innerHTML;
document.body.innerHTML = yazdirilacakAlan;
window.print();
document.body.innerHTML = orjinalSayfa;
}

</script>
<script language="JavaScript">
function yazdirma() {
var yazdirilacakAlan= document.getElementById('yazdirma').innerHTML;
var orjinalSayfa= document.body.innerHTML;
document.body.innerHTML = yazdirilacakAlan;
window.print();
document.body.innerHTML = orjinalSayfa;
}

</script>
<script>
  $(".musteritablosu").DataTable({
   initComplete: function () {
    this.api().columns().every( function () {
      var column = this;
      var select = $('<select><option value=""></option></select>')
      .appendTo( $(column.footer()).empty() )
      .on( 'change', function () {
        var val = $.fn.dataTable.util.escapeRegex(
          $(this).val()
          );

        column
        .search( val ? '^'+val+'$' : '', true, false )
        .draw();
      } );

      column.data().unique().sort().each( function ( d, j ) {
        select.append( '<option value="'+d+'">'+d+'</option>' )
      } );
    } );
  },
  dom: "<'row '<'col-md-6'l><'col-md-6'f><'col-md-4 d-none d-print-block'B>>rtip",
"aLengthMenu": [[20, 100, -1], [20, 100, "Hepsi"]],
  buttons: [
  {
    extend: 'copyHtml5', 
    className: 'kopyalama-buton'
  },
  {
    extend: 'excelHtml5', 
    className: 'excel-buton'
  },
  {
   extend: 'pdfHtml5',
   className: 'pdf-buton'
 },
 {
  extend: 'csvHtml5',
  className: 'csv-buton'
},
 {
  extend: 'print',
  className: 'yazdir-buton'
}
],
"language": {
    "sDecimal":        ",",
    "sEmptyTable":     "Tabloda herhangi bir veri mevcut değil",
    "sInfo":           "_TOTAL_ kayıttan _START_ - _END_ arasındaki kayıtlar gösteriliyor",
    "sInfoEmpty":      "Kayıt yok",
    "sInfoFiltered":   "(_MAX_ kayıt içerisinden bulunan)",
    "sInfoPostFix":    "",
    "sInfoThousands":  ".",
    "sLengthMenu":     "Sayfada _MENU_ kayıt göster",
    "sLoadingRecords": "Yükleniyor...",
    "sProcessing":     "İşleniyor...",
    "sSearch":         "Ara :",
    "sZeroRecords":    "Eşleşen kayıt bulunamadı",
    "oPaginate": {
        "sFirst":    "İlk",
        "sLast":     "Son",
        "sNext":     "Sonraki",
        "sPrevious": "Önceki"
    },
    "oAria": {
        "sSortAscending":  ": artan sütun sıralamasını aktifleştir",
        "sSortDescending": ": azalan sütun sıralamasını aktifleştir"
    },
"buttons": {
        "collection": "Koleksiyon <span class=\"ui-button-icon-primary ui-icon ui-icon-triangle-1-s\"><\/span>",
        "colvis": "Sütun görünürlüğü",
        "colvisRestore": "Görünürlüğü eski haline getir",
        "copySuccess": {
            "1": "1 satır panoya kopyalandı",
            "_": "%ds satır panoya kopyalandı"
        },
        "copyTitle": "Panoya kopyala",
        "csv": "CSV İndir",
        "excel": "Excel İndir",
        "pageLength": {
            "-1": "Bütün satırları göster",
            "1": "-",
            "_": "%d satır göster"
        },
        "pdf": "PDF İndir",
        "print": "Yazdır",
        "copy": "Kopyala",
        "copyKeys": "Tablodaki veriyi kopyalamak için CTRL veya u2318 + C tuşlarına basınız. İptal etmek için bu mesaja tıklayın veya escape tuşuna basın."
    },
    "select": {
        "rows": {
            "_": "%d kayıt seçildi",
            "0": "",
            "1": "1 kayıt seçildi"
        }
    }
} 
});


  function tiklama(islem){
    switch (islem){
      case "excel":
      $(".excel-buton").trigger("click");
      break;
      case "kopyala":
      $(".kopyalama-buton").trigger("click");
      break;
      case "pdf":
      $(".pdf-buton").trigger("click");
      break;
      case "csv":
      $(".csv-buton").trigger("click");
      break;
  case "yazdir":
      $(".yazdir-buton").trigger("click");
      break;
    }
  }


</script>
<script>
$(document).ready(function() {
    $('.tablo2').DataTable( {
        "language": {
            "emptyTable": "Gösterilecek ver yok.",
            "processing": "Veriler yükleniyor",
            "sDecimal": ".",
            "sInfo": "_TOTAL_ kayıttan _START_ - _END_ arasındaki kayıtlar gösteriliyor",
            "sInfoFiltered": "(_MAX_ kayıt içerisinden bulunan)",
            "sInfoPostFix": "",
            "sInfoThousands": ".",
            "sLengthMenu": "Sayfada _MENU_ kayıt göster",
            "sLoadingRecords": "Yükleniyor...",
            "sSearch": "Ara:",
            "sZeroRecords": "Eşleşen kayıt bulunamadı",
       "oPaginate": {
                "sFirst": "İlk",
                "sLast": "Son",
                "sNext": "Sonraki",
                "sPrevious": "Önceki"
            },
        }

    } );
} );

</script>

		<script type="text/javascript">



 $(".urunsecilen").click(function () {

	
//Extract the text of the clicked element
var urunid = $(this).find(".urunid").text();

var urunadi = $(this).find(".urunadi").text();


  $('#urunid').text(urunid).val(urunid);
  $('#urunadi').text(urunadi).val(urunadi);

  //Close the modal
	$('#urunsecicipencere').modal('hide');
});





    
   </script>
	
	<script type="text/javascript">
	$(".sayi").keyup(function (){

  if (this.value.match(/[^0-9]/g)){

    this.value = this.value.replace(/,/g, '.');

  }

});
   </script>	


	 <script>
        $(document).ready(function(){
            $('#Giris').submit(function(e) {
				
						$.ajax({ // Ajax metodu
                    type: "POST", // Gönderim Methodu POST (GET'de seçilebilir)
                    url: "Islem/Giris.php", // POST işleminin olacağı sayfa
                    data: $("#Giris").serialize(), // Formdaki tüm verileri al
                    success: function(oldu){ // Eğer işlem başarılı olursa sonuç
                        $('#sonuc').html(oldu); // Id'si result olan divde sonucu yaz
                    }
                });
					
			})
        });
    </script>



	 <script>
        $(document).ready(function(){
            $('#Cikis').submit(function(e) {
				
						$.ajax({ // Ajax metodu
                    type: "POST", // Gönderim Methodu POST (GET'de seçilebilir)
                    url: "Islem/Giris.php", // POST işleminin olacağı sayfa
                    data: $("#Cikis").serialize(), // Formdaki tüm verileri al
                    success: function(oldu){ // Eğer işlem başarılı olursa sonuç
                        $('#sonuc').html(oldu); // Id'si result olan divde sonucu yaz
                    }
                });
					
			})
        });
        $(document).ready(function(){
            $('#Cikis2').submit(function(e) {
				
						$.ajax({ // Ajax metodu
                    type: "POST", // Gönderim Methodu POST (GET'de seçilebilir)
                    url: "Islem/Giris.php", // POST işleminin olacağı sayfa
                    data: $("#Cikis2").serialize(), // Formdaki tüm verileri al
                    success: function(oldu){ // Eğer işlem başarılı olursa sonuç
                        $('#sonuc').html(oldu); // Id'si result olan divde sonucu yaz
                    }
                });
					
			})
        });
    </script>	

<script type="text/javascript">
$(window).bind("load", function() { 

   $('#yukleniyor').fadeOut(500);
});
</script>

<script type="text/javascript">
// Mobil Menü js
  // Alt menü js
  $(window).scroll(function () {
    var window_top = $(window).scrollTop() + 1;
    if (window_top > 65) {
      $('.sabitmenu').addClass('goster animated fadeInDown');
    } else {
      $('.sabitmenu').removeClass('goster animated fadeInDown');
    }
  });

    </script>
<script type="text/javascript">
$(document).ready(function(){
        $(function(){
         $("#modeller option").hide();
            $("#markalar").change(function(){
                
                $("#modeller option").hide();
                var slug = $("#markalar option:selected").attr("slug");
                if(slug){
                $("#modeller option[marka-slug='"+slug+"']").show();
                }
            });
        });
    });
</script>