<?php

class Film {
    public $judul,
            $genre,
            $durasi,
            $studio,
            $tahun;

    public function __construct( $judul = "Unknown", $genre = "Unknown", $durasi = "0", $studio = "Unknown" , $tahun = "Coming soon" ){
        $this->judul = $judul;
        $this->genre = $genre;
        $this->durasi = $durasi;
        $this->studio = $studio;
        $this->tahun = $tahun;

    }

    public function infoFilm( ){
        echo "$this->judul ($this->tahun)";
        echo "<br>";
        echo "=====================================" . "<br>";
        echo "Genre: $this->genre  -----  Durasi: $this->durasi Jam." . "<br>";
        echo "By $this->studio";
        echo "<br>";
        echo "<br>";    
        echo "<br>";
    }

}

$film1 = new Film( "The Shawshank Redemption", "Kriminal", "2,2" , "Castle Rock Entertainment", "1994" );
$film2 = new Film( "Spiderman 3", "Superhero", "2,1" , "Columbia Pictures", "2007" );
$film3 = new Film( "Barbie", "Komedi, Drama", "1,4", "Warner Bros Entertainment", "2023" );
$film4 = new Film( "The GodFather", "Kriminal", "2,5", "Paramount Pictures", "1972");
$film5 = new Film( "Toy Story 4", "Drama", "1,3", "Pixar", "2019");
$film6 = new Film();



echo $film1->infoFilm();
echo "<br>";
echo "<br>";
echo $film2->infoFilm();
echo "<br>";
echo "<br>";
echo $film3->infoFilm();
echo "<br>";
echo "<br>";
echo $film4->infoFilm();
echo "<br>";
echo "<br>";
echo $film5->infoFilm();
echo "<br>";
echo "<br>";
echo $film6->infoFilm();
echo "<br>";


?>