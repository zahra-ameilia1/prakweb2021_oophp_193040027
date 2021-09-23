<?php

// define ('NAMA', 'Zahra Dwi Ameilia');
// echo NAMA;

// echo "<br>";

// const UMUR = 20;
// echo UMUR;

// class Coba{
//     // define ('NAMA', 'Zahra Dwi Ameilia');
//     const NAMA = 'Zahra';

// }

// echo Coba::NAMA;

echo __LINE__;
echo "<br>";
echo __FILE__;

echo "<br>";
function coba(){
    return __FUNCTION__;
}

echo coba();


echo "<br>";
class Coba{
    public $kelas = __CLASS__;
}

$obj = new Coba;
echo $obj -> kelas;












?>