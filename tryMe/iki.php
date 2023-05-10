<?php
class Murid{
    private $nama = "Mamat";

    public $rombel = "Default";

    protected $kemampuan;



    public function sebutNamaku( $namaMurid ){
        $this->nama = $namaMurid;
        return $namaMurid;
    }

}

class Kemampuan extends Murid{

    public function setKemampuan($kemampuan){
        $this->kemampuan = $kemampuan;
    }

    public function kemampuanSiapa(){
        $cuy = "Kemampuan si  $this->nama ini adalah $this->kemampuan";
        return $cuy;
    }

}




// instansiasi objek
$siswa1 = new Murid();

// menampilkan isi dari property ber visibility private
echo $siswa1->sebutNamaku("Waluyo Alkatiri");
echo "</br>";


// men set dan menampilkan property ber visibility public
$siswa1->rombel = "PPLG X-1";
echo $siswa1->rombel;

echo "<hr>";

$kemampu1 = new Kemampuan();
$kemampu1->setKemampuan("Makan ikan");
echo $kemampu1->kemampuanSiapa();

