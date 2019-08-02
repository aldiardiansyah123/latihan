<?php

$SaldoAwal = 1000000;
$bunga = 0.03;
$jumlah1 = $SaldoAwal*$bunga;
$jum2 = $SaldoAwal*11;
$jum3 = $jum2+$jumlah1*11;


echo "Saldo Akhir : Rp. $jum3";
?>