<?php 
$SERVER="localhost";
$PENGGUNA="root";
$PASSWORD="";
$DATABASE="perpuska";

$koneksi = mysqli_connect($SERVER,$PENGGUNA,$PASSWORD,$DATABASE);
if (!$koneksi){
    echo "Koneksi Error:".mysqli_error($koneksi);
}