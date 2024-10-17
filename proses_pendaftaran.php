<?php
// Include file konfigurasi database
require 'utils/db/config.php';

// Cek apakah data dikirim menggunakan metode POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari form
    $namaLengkap = $_POST['namaLengkap'];
    $jenisKelamin = $_POST['jenisKelamin'];
    $nik = $_POST['nik'];
    $nomorKK = $_POST['nomorKK'];
    $noRegisAkta = $_POST['noRegisAkta'];
    $tampatLahir = $_POST['tampatLahir'];
    $tanggalLahir = $_POST['tanggalLahir'];
    $alamat = $_POST['alamat'];
    $tinggi = $_POST['tinggi'];
    $berat = $_POST['berat'];
    $jarak = $_POST['jarak'];

    // Gabungkan nilai transportasi yang dipilih ke dalam satu string
    $transportasi = isset($_POST['transportasi']) ? implode(', ', $_POST['transportasi']) : '';

    $tempatTinggal = $_POST['tempatTinggal'];
    $jumlahSaudaraKandung = $_POST['jumlahSaudaraKandung'];
    $jumlahSaudaraTiri = $_POST['jumlahSaudaraTiri'];
    $jumlahSaudaraAngkat = $_POST['jumlahSaudaraAngkat'];
    $namaSekolah = $_POST['namaSekolah'];
    $nspnSekolah = $_POST['nspnSekolah'];
    $alamatSekolah = $_POST['alamatSekolah'];
    $desaSekolah = $_POST['desaSekolah'];
    $kabupatenSekolah = $_POST['kabupatenSekolah'];
    $nisn = $_POST['nisn'];
    $tanggalSKTB = $_POST['tanggalSKTB'];
    $nomorSKTB = $_POST['nomorSKTB'];
    $lamaTK = $_POST['lamaTK'];
    $bahasa = $_POST['bahasa'];
    $suku = $_POST['suku'];
    $kewarganegaraan = $_POST['kewarganegaraan'];
    $agama = $_POST['agama'];


    $namaOrtu = $_POST['namaOrtu'];
    $noTelepon = $_POST['noTelepon'];
    $alamat = $_POST['alamat'];
    $sekolahAsal = isset($_POST['sekolahAsal']) ? $_POST['sekolahAsal'] : '';

    // Validasi data
    if (!empty($namaLengkap) && !empty($tanggalLahir) && !empty($jenisKelamin) && !empty($namaOrtu) && !empty($noTelepon) && !empty($alamat)) {

        // SQL untuk memasukkan data ke dalam database
        $sql = "INSERT INTO siswa (nama_lengkap, tanggal_lahir, jenis_kelamin, nama_ortu, no_telepon, alamat, sekolah_asal)
                VALUES (:namaLengkap, :tanggalLahir, :jenisKelamin, :namaOrtu, :noTelepon, :alamat, :sekolahAsal)";

        // Persiapkan query
        $stmt = $pdo->prepare($sql);

        // Binding parameter
        $stmt->bindParam(':namaLengkap', $namaLengkap);
        $stmt->bindParam(':tanggalLahir', $tanggalLahir);
        $stmt->bindParam(':jenisKelamin', $jenisKelamin);
        $stmt->bindParam(':namaOrtu', $namaOrtu);
        $stmt->bindParam(':noTelepon', $noTelepon);
        $stmt->bindParam(':alamat', $alamat);
        $stmt->bindParam(':sekolahAsal', $sekolahAsal);

        // Eksekusi query dan cek apakah berhasil
        if ($stmt->execute()) {
            echo "Pendaftaran berhasil!";
            // Redirect ke halaman sukses (misalnya: sukses.php)
            header("Location: sukses.php");
            exit();
        } else {
            echo "Terjadi kesalahan saat menyimpan data.";
        }
    } else {
        echo "Semua kolom wajib diisi.";
    }
} else {
    echo "Data tidak valid.";
}
