<?php
$panjang= '10'; //panjang karakter yang akan dibuat
$data = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"; //data yang akan diacak
$hasil = ''; //jangan lupa ini kosong eaa
for($l = 0; $l<$panjang; $l++){
    $hasil .= substr(str_shuffle($data),-1);
}
//echo $hasil; //hasil akhirnya