<?php
include "layout/header.php";
include "layout/navbar.php";

?>

<!-- Background Image Section -->
<div class="bg-cover mt-5">
    <div class="overlay text-center">
        <h1 class="main-heading">Selamat Datang di SD Permata</h1>
        <p class="subheading">Pendaftaran Siswa Baru Tahun Ajaran 2024/2025 Telah Dibuka</p>
        <a href="pendaftaran.php" class="btn btn-primary btn-register">Daftar Sekarang</a>
    </div>
</div>

<!-- Info Section -->
<section class="info-cards text-center" id="info">
    <div class="container">
        <h2 class="mb-5">Mengapa Memilih Kami?</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="card p-4 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Guru Berkualitas</h5>
                        <p class="card-text">Guru kami berpengalaman dalam memberikan pendidikan terbaik untuk anak-anak.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card p-4 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Fasilitas Lengkap</h5>
                        <p class="card-text">Kami menyediakan fasilitas yang modern untuk mendukung pembelajaran siswa.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card p-4 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Lingkungan Nyaman</h5>
                        <p class="card-text">Sekolah kami menawarkan lingkungan yang aman dan nyaman bagi para siswa.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
include "layout/footer.php"
?>