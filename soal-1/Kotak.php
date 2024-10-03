<?php
class PersegiPanjang
{
    // deklarasikan panjang dan lebar
    public $panjang;
    public $lebar;
    // deklarasikan metode konstruktor
    public function __construct($panjang, $lebar)
    {
        $this->panjang = $panjang;
        $this->lebar = $lebar;
    }

    public function __get($atribut)
    {
        return $this->$atribut;
    }
    // deklarasikan metode mutator dan asesor
    public function __set($atribut, $nilai)
    {
        $this->$atribut = $nilai;
    }

    public function hitungLuas()
    {
        // lengkapi kode untuk menghitung luas persegi panjang
        return $this->panjang * $this->lebar;
    }

    public function hitungKeliling()
    {
        // lengkapi dengan kode untuk menghitung keliling persegi panjang
        return 2*($this->panjang + $this->lebar);
    }
}

$contoh = new PersegiPanjang(12, 20);
echo "Luas Persegi Panjang: " . $contoh->hitungLuas() . "<br>";
echo "Keliling Persegi Panjang: " . $contoh->hitungKeliling() . "<br>";
