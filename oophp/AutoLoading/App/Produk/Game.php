<?php
class Game extends Produk{
    public $waktuMain;

    public function __construct( $judul , $penulis ,$penerbit , 
    $harga , $waktuMain = 0 ){
        parent::__construct( $judul , $penulis ,$penerbit , 
        $harga );

        $this->waktuMain = $waktuMain;
    }

    public function setDiskon( $diskon ){
        $this->diskon = $diskon;
    }

    public function getInfoProduk(){
        $str = "Game " . $this->getInfo() . " {$this->waktuMain} Jam."; 
        return $str;
    }
}
?>