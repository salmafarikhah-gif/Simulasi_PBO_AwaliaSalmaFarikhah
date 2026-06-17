<?php
// index.php
require_once 'koneksi/database.php'; 
require_once 'PendaftaranReguler.php';
require_once 'PendaftaranPrestasi.php';
require_once 'PendaftaranKedinasan.php';

// Membuat objek dummy untuk memanggil metode query spesifik dari Tahap 4
$dummyReguler   = new PendaftaranReguler("", "", "", 0, 0, "", "");
$dummyPrestasi  = new PendaftaranPrestasi("", "", "", 0, 0, "", "");
$dummyKedinasan = new PendaftaranKedinasan("", "", "", 0, 0, "", "");

// Mengambil data spesifik jalur dari database
$dataReguler   = $dummyReguler->getDaftarReguler($koneksi);
$dataPrestasi  = $dummyPrestasi->getDaftarPrestasi($koneksi);
$dataKedinasan = $dummyKedinasan->getDaftarKedinasan($koneksi);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Simulasi UAS PBO - Awalia Salma</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; background-color: #f4f6f9; }
        h1 { text-align: center; color: #2c3e50; margin-bottom: 30px; }
        .container-jalur { margin-bottom: 50px; background: #fff; padding: 25px; border-radius: 8px; box-shadow: 0 4px 6px rgba(0,0,0,0.05); }
        h2 { padding: 12px; color: #fff; border-radius: 5px; margin-top: 0; font-size: 1.2rem; }
        .jalur-reguler h2 { background-color: #2c3e50; }
        .jalur-prestasi h2 { background-color: #27ae60; }
        .jalur-kedinasan h2 { background-color: #2980b9; }
        table { width: 100%; border-collapse: collapse; margin-top: 15px; background: #fff; }
        th, td { border: 1px solid #dee2e6; padding: 12px; text-align: left; font-size: 0.95rem; }
        th { background-color: #f8f9fa; font-weight: bold; color: #333; }
        tr:hover { background-color: #fdfdfd; }
        .biaya-dasar { color: #7f8c8d; }
        .total-biaya { font-weight: bold; color: #d9534f; }
    </style>
</head>
<body>

    <h1>Daftar Pendaftaran Mahasiswa Baru - Awalia Salma (TI-1C)</h1>

    <div class="container-jalur jalur-reguler">
        <h2>Daftar Mahasiswa - Jalur Reguler</h2>
        <table>
            <thead>
                <tr>
                    <th>ID Daftar</th>
                    <th>Nama Calon</th>
                    <th>Asal Sekolah</th>
                    <th>Nilai Ujian</th>
                    <th>Informasi Detail Jalur</th>
                    <th>Biaya Dasar</th>
                    <th>Total Biaya</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                while ($row = mysqli_fetch_assoc($dataReguler)) {
                    // Instansiasi objek konkrit dari data row database
                    $mhs = new PendaftaranReguler(
                        $row['id_pendaftaran'], $row['nama_calon'], $row['asal_sekolah'], 
                        $row['nilai_ujian'], $row['biaya_pendaftaran_dasar'], $row['pilihan_prodi'], $row['lokasi_kampus']
                    );
                    echo "<tr>
                            <td>{$row['id_pendaftaran']}</td>
                            <td>{$row['nama_calon']}</td>
                            <td>{$row['asal_sekolah']}</td>
                            <td>{$row['nilai_ujian']}</td>
                            <td>" . $mhs->tampilkanInfoJalur() . "</td>
                            <td class='biaya-dasar'>Rp " . number_format($row['biaya_pendaftaran_dasar'], 0, ',', '.') . "</td>
                            <td class='total-biaya'>Rp " . number_format($mhs->hitungTotalBiaya(), 0, ',', '.') . "</td>
                          </tr>";
                }
                ?>
            </tbody>
        </table>
    </div>

    <div class="container-jalur jalur-prestasi">
        <h2>Daftar Mahasiswa - Jalur Prestasi</h2>
        <table>
            <thead>
                <tr>
                    <th>ID Daftar</th>
                    <th>Nama Calon</th>
                    <th>Asal Sekolah</th>
                    <th>Nilai Ujian</th>
                    <th>Informasi Detail Jalur</th>
                    <th>Biaya Dasar</th>
                    <th>Total Biaya</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                while ($row = mysqli_fetch_assoc($dataPrestasi)) {
                    $mhs = new PendaftaranPrestasi(
                        $row['id_pendaftaran'], $row['nama_calon'], $row['asal_sekolah'], 
                        $row['nilai_ujian'], $row['biaya_pendaftaran_dasar'], $row['jenis_prestasi'], $row['tingkat_prestasi']
                    );
                    echo "<tr>
                            <td>{$row['id_pendaftaran']}</td>
                            <td>{$row['nama_calon']}</td>
                            <td>{$row['asal_sekolah']}</td>
                            <td>{$row['nilai_ujian']}</td>
                            <td>" . $mhs->tampilkanInfoJalur() . "</td>
                            <td class='biaya-dasar'>Rp " . number_format($row['biaya_pendaftaran_dasar'], 0, ',', '.') . "</td>
                            <td class='total-biaya'>Rp " . number_format($mhs->hitungTotalBiaya(), 0, ',', '.') . "</td>
                          </tr>";
                }
                ?>
            </tbody>
        </table>
    </div>

    <div class="container-jalur jalur-kedinasan">
        <h2>Daftar Mahasiswa - Jalur Kedinasan</h2>
        <table>
            <thead>
                <tr>
                    <th>ID Daftar</th>
                    <th>Nama Calon</th>
                    <th>Asal Sekolah</th>
                    <th>Nilai Ujian</th>
                    <th>Informasi Detail Jalur</th>
                    <th>Biaya Dasar</th>
                    <th>Total Biaya</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                while ($row = mysqli_fetch_assoc($dataKedinasan)) {
                    $mhs = new PendaftaranKedinasan(
                        $row['id_pendaftaran'], $row['nama_calon'], $row['asal_sekolah'], 
                        $row['nilai_ujian'], $row['biaya_pendaftaran_dasar'], $row['sk_ikatan_dinas'], $row['instansi_sponsor']
                    );
                    echo "<tr>
                            <td>{$row['id_pendaftaran']}</td>
                            <td>{$row['nama_calon']}</td>
                            <td>{$row['asal_sekolah']}</td>
                            <td>{$row['nilai_ujian']}</td>
                            <td>" . $mhs->tampilkanInfoJalur() . "</td>
                            <td class='biaya-dasar'>Rp " . number_format($row['biaya_pendaftaran_dasar'], 0, ',', '.') . "</td>
                            <td class='total-biaya'>Rp " . number_format($mhs->hitungTotalBiaya(), 0, ',', '.') . "</td>
                          </tr>";
                }
                ?>
            </tbody>
        </table>
    </div>

</body>
</html>