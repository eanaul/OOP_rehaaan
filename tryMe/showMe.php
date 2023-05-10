<?php

class Mobil {
    public $merek,
            $warna,
            $harga,
            $tempatDuduk,
            $max;

    public function __construct ( $merek, $warna, $harga, $tempatDuduk, $max){
        $this->merek = $merek;
        $this->warna = $warna;
        $this->harga = $harga;
        $this->tempatDuduk = $tempatDuduk;
        $this->max = $max;
    }

    public function infoKendaraan( ){
        echo "Merek {$this->merek} | Warna {$this->warna} | Harga {$this->harga} Juta. | {$this->tempatDuduk} Tempat duduk.";
    }

}

class maxSpeed {
    
    public function maximumDrive( Mobil $mobil ){
        $str = "Mobil {$mobil->infoKendaraan()}" . " Kecepatan Max: {$mobil->max} Km/h";
        return $str;
    }
}

$mobil1 = new Mobil("Mazda", "Merah", 100, 4, 150);

$infoMobil1 = new maxSpeed();

echo $infoMobil1->maximumDrive($mobil1);



?>