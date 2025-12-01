<?php

class Flasher
{
    /**
     * Set pesan flash ke session.
     * @param string $pesan Pesan notifikasi
     * @param string $aksi Aksi yang dilakukan (misalnya: 'ditambahkan')
     * @param string $tipe Tipe notifikasi (success, danger, warning)
     */
    public static function setFlash($pesan, $aksi, $tipe)
    {
        $_SESSION['flash'] = [
            'pesan' => $pesan,
            'aksi'  => $aksi,
            'tipe'  => $tipe
        ];
    }

    /**
     * Tampilkan pesan flash jika ada dan hapus dari session.
     */
    public static function flash()
    {
        if (isset($_SESSION['flash'])) {
            echo '<div class="alert alert-' . $_SESSION['flash']['tipe'] . ' alert-dismissible fade show" role="alert">
                    Data Mahasiswa <strong>' . $_SESSION['flash']['pesan'] . '</strong> ' . $_SESSION['flash']['aksi'] . '.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>';
            
            // Hapus session flash setelah ditampilkan
            unset($_SESSION['flash']);
        }
    }
}