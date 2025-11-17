<?php
/**
 * Kelas User (Parent Class / Kelas Induk)
 * Modul 4: Inheritance (Pewarisan)
 */
class User
{
    // Properti yang bisa diakses oleh kelas anak
    protected $nama;
    protected $role = "User"; // Role default
    
    /**
     * Konstruktor: Otomatis dipanggil saat objek dibuat.
     */
    public function __construct($nama)
    {
        $this->nama = $nama;
        echo "--> Objek User **{$this->nama}** berhasil dibuat.<br>";
    }
    
    /**
     * Metode dasar sapaan.
     */
    public function salam()
    {
        return "Halo, saya **{$this->nama}**, peran saya adalah **{$this->role}**.<br>";
    }
    
    /**
     * Metode yang bisa diakses oleh kelas anak.
     */
    public function getRole()
    {
        return $this->role;
    }
    
    /**
     * Destruktor (untuk modul sebelumnya, dipertahankan sebagai contoh)
     */
    public function __destruct()
    {
        echo "--> Objek User **{$this->nama}** telah dihancurkan.<br>";
    }
}
?>