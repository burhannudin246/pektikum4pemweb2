<?php
class Produk {
    public $kode;
    public $nama;
    public $harga;
    public $stock;
    public $diskon;

    public function __construct($kode, $nama, $harga, $stock, $diskon) {
        $this->kode = $kode;
        $this->nama = $nama;
        $this->harga = $harga;
        $this->stock = $stock;
        $this->diskon = $diskon;
    }
    public function hitungNilaiStok() {
        return $this->harga * $this->stock;
        
    }
    public function hitungDiskon(){
        return $this->harga * $this->diskon / 100;
    }
    public function tampilkanProduk() {
        echo "Kode Produk: " . $this->kode . "<br>";
        echo "Nama Produk: " . $this->nama . "<br>";
        echo "Harga Produk: " . $this->harga . "<br>";
        echo "Stock Produk: " . $this->stock . "<br>";
        echo "Nilai Stok Produk: " . $this->hitungNilaiStok() . "<br>";
        echo "Diskon Produk: " . $this->diskon . "%<br>";
        echo "Diskon Produk: " . $this->hitungDiskon() . "<br>";


    
    
    }

}

$produk1 = new Produk("P001", "Laptop", 10000000, 10, 10);
$produk2 = new Produk("P002", "Smartphone", 5000000, 20, 20);

$produk1->tampilkanProduk();
echo "<br>";
$produk2->tampilkanProduk();
echo "<br>";
?>