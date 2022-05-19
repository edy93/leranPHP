<?php

$nilai = 80;
$absen = 70;


if ($nilai >= 100 && $absen >= 100){
    echo "nilai A";
}elseif($nilai >= 90 && $absen >= 90){
    echo "nilai B";
}elseif($nilai >= 80 && $absen >= 75){
    echo "nilai c";
}elseif($nilai >= 70 && $absen >= 60){
    echo "nilai d";
}else{
    echo "nilai E";
}