<?php
$nama=$_POST['nama_pemesan'];
$jumlah=$_POST['jumlah_tiket'];
$kelas=$_POST['kelas'];
$tujuan=$_POST['tujuan'];
$bagasi=$_POST['bagasi'];
$asuransi=$_POST['asuransi'];



if($kelas="Ekonomi"){
        $harga=1000000;
}elseif($kelas="Bisnis"){
    $harga=2000000;
}elseif($kelas="Eksekutif"){
    $harga=3000000;
}

if ($jumlah >= 3){
    $diskon=0.30 * $harga;
    }
else{
    $diskon=0;
    }

if($bagasi="5kg"){
        $hargab=100000;
}elseif($bagasi=="10kg"){
    $hargab=150000;
}elseif($bagasi=="15kg"){
    $hargab=200000;
}


if($asuransi="asuransi_jiwa"){
    $hargas=50000;
}elseif($asuransi=="asuransi_kecelaaan"){
$hargas=50000;
}elseif($asuransi=="asuransi_keterlambatan"){
$hargas=50000;
}

$totalharga = $harga * $jumlah - $diskon + $hargab + $hargas;



?>

<table border="1">
<tr>
  <th>Nama Pemesan</th>
  <th>:</th>
  <th><?php echo $nama;?></th>
</tr>
<tr>
<td>Jumlah</td><td></td><td><?php echo $jumlah;?></td>
</tr>
<tr>
<td>Kelas</td><td></td><td><?php echo $kelas;?></td>
</tr>
<tr>
<td>Tujuan</td><td></td><td><?php echo $tujuan;?></td>
</tr>
<tr>
<td>Bagasi</td><td></td><td><?php echo $bagasi;?></td>
</tr>
<tr>
<td>Asuransi</td><td></td><td><?php echo $asuransi;?></td>
</tr>
<tr>
<td>Total Harga</td><td></td><td><?php echo $totalharga;?></td>
</tr>
</table>