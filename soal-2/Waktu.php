<?php
class Waktu
{
    public $jam;
    public $menit;
    public $detik;
    // deklarasikan atribut sesuai ditentukan buku
    public function getJam() {
        return $this->jam;
    }
    public function getMenit() {
        return $this->menit;
    }
    public function getDetik() {
        return $this->detik;
    }

    // deklarasikan metode sesuai yang diminta buku
    public function setJam()
    {
        return $this->jam;
    }
    public function setMenit()
    {
        return $this->menit;
    }
    public function setDetik()
    {
        return $this->detik;
    }        
}

$contoh = new Waktu(15,34,50);
echo "Sekarang pukul 15".$contoh->jam.":34".$contoh->menit.":50".$contoh->detik."<br>"; //output: Sekarang pukul 15:34:50
