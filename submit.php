<?php
include 'utils/db/config.php'; // File koneksi ke database

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // var_dump($_POST);
    $namaLengkap = $_POST['namaLengkap'];
    $jenisKelamin = $_POST['jenisKelamin'];
    $nik = $_POST['nik'];
    $nomorKK = $_POST['nomorKK'];
    $noRegisAkta = $_POST['noRegisAkta'];
    $tempatLahir = $_POST['tempatLahir'];
    $tanggalLahir = $_POST['tanggalLahir'];
    $alamatAnak = $_POST['alamatAnak'];
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
    $kelas = $_POST['kelas'];

    // Query untuk memasukkan data
    $sql = "INSERT INTO siswa (nama_lengkap, jenis_kelamin, nik, nomor_kk, nomor_registrasi_akta, tempat_lahir, tanggal_lahir, 
    alamat, tinggi, berat, jarak_sekolah, transportasi, tempat_tinggal, jumlah_saudara_kandung, jumlah_saudara_tiri, jumlah_saudara_angkat, 
    sekolah_asal, nspn_sekolah, alamat_sekolah, desa_sekolah, kabupaten_sekolah, nisn, tanggal_sktb, nomor_sktb, lama_tk, bahasa, suku, 
    kewarganegaraan, agama, kelas) 
    VALUES ('$namaLengkap', '$jenisKelamin', '$nik', '$nomorKK', '$noRegisAkta', '$tempatLahir', '$tanggalLahir',
    '$alamatAnak', '$tinggi', '$berat', '$jarak', '$transportasi', '$tempatTinggal', '$jumlahSaudaraKandung', '$jumlahSaudaraTiri', '$jumlahSaudaraAngkat',
    '$namaSekolah', '$nspnSekolah', '$alamatSekolah', '$desaSekolah', '$kabupatenSekolah', '$nisn', '$tanggalSKTB', '$nomorSKTB', '$lamaTK', '$bahasa', '$suku', 
    '$kewarganegaraan', '$agama','$kelas')";

    if ($conn->query($sql) === TRUE) {
        // echo "Data berhasil disimpan";
        echo "<script>
    alert('Data berhasil disimpan');
    window.location.href='index.php';
    </script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
