<?php

define ('NAMA', 'Chaerul');
echo NAMA;

echo "<br>";

class Coba{
    const MAHASISWA = 'bsi';
}

echo Coba::MAHASISWA;

echo "<br>";

echo __FILE__;

echo "<br>";

function magic(){
    return __FUNCTION__;
}

echo magic();

echo "<br>";

// class Const{
//     public $kelas = __CLASS__;
// }

// $obj = new Const;
// echo $obj -> kelas;
?>