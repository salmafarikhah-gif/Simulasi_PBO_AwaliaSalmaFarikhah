<?php
// Pendaftaran.php

abstract class Pendaftaran {
    // Properti Terenkapsulasi (protected) sesuai instruksi Tahap 3
    protected $id_pendaftaran;
    protected $nama_calon;
    protected $asal_sekolah;
    protected $nilai_ujian;
    protected $biayaPendaftaranDasar;

    // Constructor untuk memetakan data dari kolom database
    public function __construct($id_pendaftaran, $nama_calon, $asal_sekolah, $nilai_ujian, $biayaPendaftaranDasar) {
        $this->id_pendaftaran = $id_pendaftaran;
        $this->nama_calon = $nama_calon;
        $this->asal_sekolah = $asal_sekolah;
        $this->nilai_ujian = $nilai_ujian;
        $this->biayaPendaftaranDasar = $biayaPendaftaranDasar;
    }

    // Metode Abstrak Wajib (Tanpa Body)
    abstract public function hitungTotalBiaya();
    abstract public function tampilkanInfoJalur();
}
?>