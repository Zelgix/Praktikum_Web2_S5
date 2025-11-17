<?php
require_once 'User.php';

/**
 * Kelas Admin (Child Class / Kelas Turunan)
 * Mewarisi dari kelas User
 * Modul 4: Inheritance (Pewarisan)
 */
class Admin extends User
{
    // Properti tambahan khusus Admin
    private $akses_level;
    
    /**
     * Konstruktor Admin.
     * Memanggil konstruktor parent (User) menggunakan parent::__construct()
     */
    public function __construct($nama, $akses_level)
    {
        parent::__construct($nama); // Memanggil konstruktor kelas induk
        $this->akses_level = $akses_level;
        $this->role = 'Admin'; // Mengubah role menjadi 'Admin'
    }
    
    /**
     * Method Overriding: Menimpa metode salam() dari kelas User.
     */
    public function salam()
    {
        // Menggunakan parent::salam() untuk mendapatkan sapaan default dari Induk,
        // lalu menambahkannya dengan pesan khusus Admin.
        $pesan_induk = parent::salam();
        return $pesan_induk . " Sebagai admin, saya memiliki **akses {$this->akses_level}**.<br>";
    }
    
    /**
     * Metode khusus Admin.
     */
    public function kelolaSistem()
    {
        return "Admin {$this->nama} sedang mengelola data sistem.<br>";
    }
}
?>