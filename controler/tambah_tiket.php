<?php


$nama       = $_POST['nama'];
$identitas  = $_POST['identitas'];
$nohp       = $_POST['nohp'];
$wisata     = $_POST['wisata'];
$tgl_kunjungan  = $_POST['tgl_kunjungan'];
$pdewasa        = $_POST['pdewasa'];
$panak          = $_POST['panak'];
$tharga         = $_POST['tharga'];

include 'koneksi.php';
$quey = mysqli_query ($koneksi,"insert into pemesanan (nama,identitas,nohp,wisata,tgl_kunjungan,pdewasa,panak,tharga) 
values ('$nama','$identitas','$nohp','$wisata','$tgl_kunjungan','$pdewasa','$panak','$tharga')");

   //get data cetak
if ($quey)
    header('location: ../view/cetak.php?&nama='.$nama.'&identitas='.$identitas.'&nohp='.$nohp.'&wisata='.$wisata.'&tgl_kunjungan='.$tgl_kunjungan.'&pdewasa='.$pdewasa.'&panak='.$panak.'&tharga='.$tharga.'');
 
?>