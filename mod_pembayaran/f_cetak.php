<?php
session_start();
error_reporting(0);

ob_start();
 include "cetak_pembayaran.php";
 $content = ob_get_clean();
$date=date('d-m-Y');
// conversion HTML => PDF
 require_once "../pdf/html2pdf.class.php";
 try
 {
 $html2pdf = new HTML2PDF('L','A5', 'en', false, 'ISO-8859-15');
 $html2pdf->writeHTML($content, isset($_GET['vuehtml']));
 $html2pdf->Output('""'.$date.'"-pembayaran.pdf');
 }
 catch(HTML2PDF_exception $e) { echo $e; }
?>