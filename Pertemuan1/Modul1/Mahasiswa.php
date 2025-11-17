<?php
class Mahasiswa
{
    public $nama;
    public $nim;
    public function sayHello()
    {
        echo "Hallo, Saya adalah mashasiswa Uniska".$this->nama.".<br>";
        echo "NIM Saya adalah 2310010420".$this->nim.".Selamat datang di dunia OOP!";
    
    }
}