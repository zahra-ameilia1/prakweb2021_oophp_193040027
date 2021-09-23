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
            $waktuMain;

    public function __construct( $judul = "judul", $penulis = "penulis",
                                $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0, $waktuMain = 0){
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlHalaman = $jmlHalaman;
        $this->waktuMain = $waktuMain;

        // echo "Hello World";
    }

    // public function sayHello(){
    //     return "Hello World";
    // }

    public function getLabel(){
        return "$this->penulis, $this->penerbit";
    }

    public function getInfoProduk(){
        //Komik : Naruto | Mashashimoto, Shonen Jump (Rp. 30000) - 100 Halaman.
        $str = "{$this -> judul} | {$this -> getLabel()} (Rp. {$this -> harga})";

        return $str;
    }
}

class Komik extends Produk {
    public function getInfoProduk (){
        $str =  "Komik : {$this -> judul} | {$this -> getLabel()} (Rp. {$this -> harga})
             - {$this -> jmlHalaman} Halaman.";
        return $str;
    }
}

class Game extends Produk {
    public function getInfoProduk (){
        $str =  "Game : {$this -> judul} | {$this -> getLabel()} (Rp. {$this -> harga})
             ~ {$this -> waktuMain} Jam.";
        return $str;
    }
}

class CetakInfoProduk {
    public function cetak (Produk $produk) {
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. ($produk->harga})";
        return $str;
    }
}


$produk1 = new  Komik("Naruto", "Masashi Kishimoto","Shonen Jump", 30000, 100, 0);
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

$produk2 = new Game("Uncharted", "Neil Druckmann", "Sony Computer", 2500000, 0, 50);
    // $produk4->judul = "Uncharted";
    // $produk4->penulis = "Neil Druckmann";
    // $produk4->penerbit = "Sony Computer";
    // $produk4->harga = 2500000;

    // $produk3 = new Produk("Dragon Ball");

// echo "Komik : " . $produk1->getLabel();
// echo "<br>";
// echo "Game : " . $produk2->getLabel();
// echo "<br>";
// // var_dump ($produk3);

// $infoProduk1 = new CetakInfoProduk();
// echo $infoProduk1->cetak($produk1);

// Komik : Masashi Kishimoto, Shonen Jump
// Game : Neil Druckmann, Sony Computer
// Naruto | Masashi Kishimoto, Shonen Jump (Rp. (30000})

//Komik : Naruto | Mashashimoto, Shonen Jump (Rp. 30000) - 100 Halaman.
//Game : Uncharted | Neil Druckmann, Sony Computer (Rp. 250000) ~ 50 Uam. 

echo "<br>";
echo $produk1 -> getInfoProduk();
echo "<br>";
echo $produk2 -> getInfoProduk();