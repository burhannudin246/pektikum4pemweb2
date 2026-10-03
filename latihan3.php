SS<?php

class Mahasiswa {
    
    public $nama;
    public $prodi;

    public function __construct($nama, $prodi) 
    {
        $this->nama = $nama;
        $this->prodi = $prodi;
    }

    public function tampilkanData(){
        echo "Nama: " . $this->nama . "<br>";
        echo "Prodi: " . $this->prodi . "<br>";
    }
}

$mhs1 = new Mahasiswa(
"andi",
"Sistem Informasi"
);

$mhs2 = new Mahasiswa(
"budi",
"Teknik Informatika"
);

$mhs1->tampilkanData();

echo "<br>";
$mhs2->tampilkanData();
?>

