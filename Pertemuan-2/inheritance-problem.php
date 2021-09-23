<?php

//Jualan Produk
//Komik
//Game

class Produk {
    public $judul,
            $penulis,
            $penerbit,
            $harga,
            $jmlHalaman,
            $waktuMain,
            $tipe;

    public function __construct( $judul = "judul", $penulis = "penulis",
                                $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0, $waktuMain = 0, $tipe = "tipe"){
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlHalaman = $jmlHalaman;
        $this->waktuMain = $waktuMain;
        $this->tipe = $tipe;

        // echo "Hello World";
    }

    // public function sayHello(){
    //     return "Hello World";
    // }

    public function getLabel(){
        return "$this->penulis, $this->penerbit";
    }

    public function getInfoLengkap(){
        //Komik : Naruto | Mashashimoto, Shonen Jump (Rp. 30000) - 100 Halaman.
        $str = "{$this -> tipe} : {$this -> judul} | {$this -> getLabel()} (Rp. {$this -> harga})";
        if ( $this -> tipe == "Komik"){
            $str .= " - {$this -> jmlHalaman} Halaman.";
        } else if ($this -> tipe == "Game"){
            $str .= " ~ {$this -> waktuMain} Jam.";
        }

        return $str;
    }
}


class CetakInfoProduk {
    public function cetak (Produk $produk) {
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. ($produk->harga})";
        return $str;
    }
}


$produk1 = new Produk("Naruto", "Masashi Kishimoto","Shonen Jump", 30000, 100, 0, "Komik");
// $produk3->judul = "Naruto";
// $produk3->penulis = "Masashi Kishimoto";
// $produk3->penerbit = "Shonen Jump";
// $produk3->harga = 30000;
//var_dump ($produk3);

// echo "Komik : $produk3->penulis, $produk3->penerbit";
// echo "<br>";
// // echo $produk3->sayHello();

// echo $produk3->getLabel();

// echo "<hr>";

$produk2 = new Produk("Uncharted", "Neil Druckmann", "Sony Computer", 2500000, 0, 50, "Game");
// $produk4->judul = "Uncharted";
// $produk4->penulis = "Neil Druckmann";
// $produk4->penerbit = "Sony Computer";
// $produk4->harga = 2500000;

// $produk3 = new Produk("Dragon Ball");

echo "Komik : " . $produk1->getLabel();
echo "<br>";
echo "Game : " . $produk2->getLabel();
echo "<br>";
// var_dump ($produk3);

$infoProduk1 = new CetakInfoProduk();
echo $infoProduk1->cetak($produk1);

// Komik : Masashi Kishimoto, Shonen Jump
// Game : Neil Druckmann, Sony Computer
// Naruto | Masashi Kishimoto, Shonen Jump (Rp. (30000})

//Komik : Naruto | Mashashimoto, Shonen Jump (Rp. 30000) - 100 Halaman.
//Game : Uncharted | Neil Druckmann, Sony Computer (Rp. 250000) ~ 50 Uam. 

echo "<br>";
echo $produk1 -> getInfoLengkap();
echo "<br>";
echo $produk2 -> getInfoLengkap();