<?php
class Mahasiswa2
{
    public $nama;
    public $nim;

    public function __construct($nama, $nim) 
    {
        $this->nama = $nama;
        $this->nim = $nim;
        echo "--> Objek **{$this->nama}** berhasil dibuat (konstruktor berjalan).<br>";
    }

    public function sayHello()
    {
        echo "Hallo, Saya adalah mashasiswa Uniska".$this->nama.".<br>";
        echo "NIM Saya adalah 2310010420".$this->nim.".Selamat datang di dunia OOP!";
    }

    public function __destruct() 
    {
        echo "--> Objek **{$this->nama}** telah dihancurkan (Destruktor berjalan).<br>";
    }
}