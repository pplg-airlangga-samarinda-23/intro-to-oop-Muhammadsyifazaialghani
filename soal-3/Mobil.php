<?php
class Mobil {
    public $merek;
    public $type;
    public $tahun;
    // lengkapi dengan atribut dan metode sesuai pada buku
    public function __set($atribut, $nilai)
    {
        $this->$atribut = $nilai;
    }
    // contoh metode melaju()
    public function melaju() {
        echo "Mobil sedang melaju.";
    }
    public function belok() {
        echo "Mobil sedang belok.";
    }
    public function berhenti() {
        echo "Mobil sedang berhenti.";
        
    }
    public function mundur() {
        echo "Mobil sedang mundur.";
    }
    
}

// buat sebuah objek mobil dan lengkapi atributnya
$contoh = new Mobil();
$contoh->merek = "belok";
$contoh->type = "berhenti";
$contoh->tahun = "mundur";

// panggil keempat metode yang terdapat pada kelas Mobil
echo $contoh->melaju() . "<br>";
echo $contoh->belok() . "<br>";
echo $contoh->berhenti() . "<br>";
echo $contoh->mundur() . "<br>";
?>