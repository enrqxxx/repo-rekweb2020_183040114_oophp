<?php

// define ('NAMA', 'Yusyfi Fuada');
// echo NAMA;

// echo "<br>";

// const UMUR = 32;
// echo UMUR;


// class Coba {
//     const NAMA ='Yusyfi Fuada';

// }

// echo Coba::NAMA;

class Coba {
    public $kelas = __CLASS__;

}

$obj = new Coba;
echo $obj -> kelas;

?>