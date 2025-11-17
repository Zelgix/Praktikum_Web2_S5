<?php
require_once 'User.php';
require_once 'LoginInterface.php';

/**
 * Kelas Admin (Child Class / Kelas Turunan)
 * Mewarisi dari kelas User dan mengimplementasikan LoginInterface
 * Modul 5: Polymorphism (Polimorfisme)
 */
class Admin extends User implements LoginInterface
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
    
    // ===========================================
    // IMPLEMENTASI DARI LoginInterface
    // ===========================================
    
    /**
     * Implementasi wajib dari LoginInterface.
     */
    public function login()
    {
        return "Admin **{$this->nama}** berhasil login ke sistem dengan hak akses penuh.<br>";
    }
    
    /**
     * Implementasi wajib dari LoginInterface.
     */
    public function logout()
    {
        return "Admin **{$this->nama}** berhasil logout dari sistem.<br>";
    }
    
    // ===========================================
    // METHOD OVERRIDING & KHUSUS ADMIN
    // ===========================================
    
    /**
     * Method Overriding: Menimpa metode salam() dari kelas User.
     */
    public function salam()
    {
        // Menggunakan parent::salam() untuk mendapatkan sapaan default dari Induk
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
    
    // Destruktor dari User tetap diwariskan dan dijalankan otomatis.
}
?>