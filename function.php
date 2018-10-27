<?php
function nama_bulan($bulan) {
$nama_bulan = array (1 => 'Januari', 
                         2 => 'Februari', 
                         3 => 'Maret',
                         4 => 'April',
                         5 => 'Mei',
                         6 => 'Juni',
                         7 => 'Juli',
                         8 => 'Agustus',
                         9 => 'September',
                         10=> 'Oktober',
                         11 => 'November',
                         10 => 'Desember');
return $nama_bulan[$bulan];
}

$bulan = nama_bulan(date('n')); 
echo date ('d') .' '.$bulan . ' ' . date('Y');
echo '<br>';
?>
