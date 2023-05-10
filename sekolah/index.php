<?php

class siswa {
    public $nama ;
    public $nis ;

    public function siswaBilang(){
        return "Hallo selamat pagi";
    }
}

$siswa1 = new siswa();
$siswa1->nama = "Rehan";

$siswa1->nis = "12209113";
var_dump($siswa1);

echo "<br>";
echo "Siswa: $siswa1->nama, $siswa1->nis";