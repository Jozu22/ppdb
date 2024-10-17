<div class="container mt-5">
    <h3 class="text-center">Data Anak</h3><br>

    <!-- Grid Layout untuk membagi halaman menjadi 2 bagian -->
    <div class="row">
        <!-- Bagian Kiri -->
        <div class="col-md-6">
            <!-- <h4>Bagian 1</h4> -->
            <form id="multiStepForm" action="proses_pendaftaran.php" method="POST">
                <div class="step active mb-3">
                    <label for="namaLengkap" class="form-label">Nama Lengkap</label>
                    <input type="text" class="form-control" id="namaLengkap" name="namaLengkap" required>
                    <span class="error-message"></span> <!-- Ini untuk pesan kesalahan -->
                </div>
                <div class="mb-3">
                    <label for="jenisKelamin" class="form-label">Jenis Kelamin</label><br>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="jenisKelamin" id="lakiLaki" value="Laki-laki" checked>
                        <label class="form-check-label" for="lakiLaki">Laki-laki</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="jenisKelamin" id="perempuan" value="Perempuan">
                        <label class="form-check-label" for="perempuan">Perempuan</label>
                    </div>
                    <span class="error-message"></span> <!-- Ini untuk pesan kesalahan -->
                </div>
                <div>
                    <label for="tempatLahir" class="form-label">Tempat Lahir</label>
                    <input type="text" class="form-control" id="tempatLahir" name="tempatLahir" required>
                </div>
                <div class="mb-3">
                    <label for="tanggalLahir" class="form-label">Tanggal Lahir</label>
                    <input type="date" class="form-control" id="tanggalLahir" name="tanggalLahir" required>
                </div>
                <div class="mb-3">
                    <label for="tinggi" class="form-label">Tinggi</label>
                    <input type="text" class="form-control" id="tinggi" name="tinggi" required>
                </div>
                <div class="mb-3">
                    <label for="berat" class="form-label">Berat</label>
                    <input type="text" class="form-control" id="berat" name="berat" required>
                </div>
                <div class="mb-3">
                    <label for="jumlahSaudaraKandung" class="form-label">Jumlah Saudara Kandung</label>
                    <input type="number" class="form-control" id="jumlahSaudaraKandung" name="jumlahSaudaraKandung" required>
                </div>
                <div class="mb-3">
                    <label for="jumlahSaudaraTiri" class="form-label">Jumlah Saudara Tiri</label>
                    <input type="number" class="form-control" id="jumlahSaudaraTiri" name="jumlahSaudaraTiri" required>
                </div>
                <div class="mb-3">
                    <label for="jumlahSaudaraAngkat" class="form-label">Jumlah Saudara Angkat</label>
                    <input type="number" class="form-control" id="jumlahSaudaraAngkat" name="jumlahSaudaraAngkat" required>
                </div>
                <div class="mb-3">
                    <label for="bahasa" class="form-label">Bahasa yang digunakan dalam keluarga</label>
                    <input type="text" class="form-control" id="bahasa" name="bahasa" required>
                </div>
                <div class="mb-3">
                    <label for="suku" class="form-label">Suku</label>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="suku" id="jawa" value="Jawa">
                                <label class="form-check-label" for="jawa">Jawa</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="suku" id="sunda" value="Sunda">
                                <label class="form-check-label" for="sunda">Sunda</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="suku" id="batak" value="Batak">
                                <label class="form-check-label" for="batak">Batak</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="suku" id="bugis" value="Bugis">
                                <label class="form-check-label" for="bugis">Bugis</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="suku" id="lainLainSuku" value="Lain-lain">
                                <label class="form-check-label" for="lainLainSuku">Lain-lain</label>
                            </div>
                        </div>
                    </div>

                    <!-- Input teks yang akan muncul jika 'Lain-lain' dipilih -->
                    <div id="inputLainLainSuku" class="mt-3" style="display:none;">
                        <label for="sukuLain" class="form-label">Masukkan Suku Lain</label>
                        <input type="text" class="form-control" id="sukuLain" name="sukuLain" placeholder="Masukkan suku lain">
                    </div>
                </div>

                <hr>
                <div class="mb-3">
                    <h5 for="sekolahAsal">Sebelum Masuk di SD ini berasal dari TK/SD</h5>
                    <div class="container">
                        <div class="mb-3">
                            <label for="namaSekolah" class="form-label">Nama Sekolah</label>
                            <input type="text" class="form-control" id="namaSekolah" name="namaSekolah" placeholder="Masukkan nama sekolah" required>
                        </div>

                        <div class="mb-3">
                            <label for="nspnSekolah" class="form-label">NSPN Sekolah</label>
                            <input type="text" class="form-control" id="nspnSekolah" name="nspnSekolah" placeholder="Masukkan NSPN sekolah" required>
                        </div>

                        <div class="mb-3">
                            <label for="alamatSekolah" class="form-label">Alamat Sekolah</label>
                            <input type="text" class="form-control" id="alamatSekolah" name="alamatSekolah" placeholder="Masukkan alamat sekolah" required>
                        </div>

                        <div class="mb-3">
                            <label for="desaSekolah" class="form-label">Desa</label>
                            <input type="text" class="form-control" id="desaSekolah" name="desaSekolah" placeholder="Masukkan desa sekolah" required>
                        </div>

                        <div class="mb-3">
                            <label for="kabupatenSekolah" class="form-label">Kabupaten</label>
                            <input type="text" class="form-control" id="kabupatenSekolah" name="kabupatenSekolah" placeholder="Masukkan kabupaten sekolah" required>
                        </div>

                        <div class="mb-3">
                            <label for="nisn" class="form-label">NISN</label>
                            <input type="text" class="form-control" id="nisn" name="nisn" placeholder="Masukkan NISN" required>
                        </div>

                        <div class="mb-3">
                            <label for="tanggalSKTB" class="form-label">Tanggal SKTB</label>
                            <input type="date" class="form-control" id="tanggalSKTB" name="tanggalSKTB" required>
                        </div>

                        <div class="mb-3">
                            <label for="nomorSKTB" class="form-label">Nomor SKTB</label>
                            <input type="text" class="form-control" id="nomorSKTB" name="nomorSKTB" placeholder="Masukkan nomor SKTB" required>
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="lamaTK" class="form-label">Lama Pendidikan TK</label>
                    <input type="text" class="form-control" id="lamaTK" name="lamaTK" placeholder="Masukkan nomor SKTB" required>
                </div>
        </div>

        <!-- Bagian Kanan -->
        <div class="col-md-6">
            <!-- <h4>Bagian 2</h4> -->
            <form>
                <div class="mb-3">
                    <label for="alamatAnak" class="form-label">Alamat</label>
                    <input type="text" class="form-control" id="alamatAnak" name="alamatAnak" required>
                </div>
                <div class="mb-3">
                    <label for=" nik" class="form-label">NIK</label>
                    <input type="text" class="form-control" id="nik" name="nik" required>
                </div>
                <div class="mb-3">
                    <label for=" nomorKK" class="form-label">Nomor Kartu Keluarga</label>
                    <input type="text" class="form-control" id="nomorKK" name="nomorKK" required>
                </div>
                <div class="mb-3">
                    <label for=" noRegisAkta" class="form-label">Nomor Registrasi Akta Kelahiran</label>
                    <input type="text" class="form-control" id="noRegisAkta" name="noRegisAkta" required>
                </div>
                <div class="mb-3">
                    <label for="jarak" class="form-label">Jarak Tempat Tinggal Ke Sekolah</label>
                    <input type="text" class="form-control" id="jarak" name="jarak" required>
                </div>
                <div class="mb-3">
                    <label for="tempatTinggal" class="form-label">Tempat Tinggal Saat Ini</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="tempatTinggal" id="rumahSendiri" value="Dirumah sendiri bersama orang tua" required>
                        <label class="form-check-label" for="rumahSendiri">Di rumah sendiri bersama orang tua</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="tempatTinggal" id="rumahFamili" value="Dirumah famili/kerabat">
                        <label class="form-check-label" for="rumahFamili">Di rumah famili/kerabat</label>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="transportasi" class="form-label">Transportasi Ke Sekolah</label>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="transportasi[]" id="jalanKaki" value="Jalan Kaki">
                                <label class="form-check-label" for="jalanKaki">Jalan Kaki</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="transportasi[]" id="sepedaMotor" value="Sepeda Motor">
                                <label class="form-check-label" for="sepedaMotor">Sepeda Motor</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="transportasi[]" id="busSekolah" value="Bus Sekolah">
                                <label class="form-check-label" for="busSekolah">Bus Sekolah</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="transportasi[]" id="angkutanUmum" value="Angkutan Umum">
                                <label class="form-check-label" for="angkutanUmum">Angkutan Umum</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="transportasi[]" id="sepeda" value="Sepeda">
                                <label class="form-check-label" for="sepeda">Sepeda</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="transportasi[]" id="mobil" value="Mobil">
                                <label class="form-check-label" for="mobil">Mobil</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="transportasi[]" id="lainLain" value="Lain-lain">
                                <label class="form-check-label" for="lainLain">Lain-lain</label>
                            </div>
                        </div>
                    </div>

                    <!-- Input teks yang akan muncul jika 'Lain-lain' dipilih -->
                    <div id="inputLainLain" class="mt-3" style="display:none;">
                        <label for="transportasiLain" class="form-label">Masukkan Transportasi Lain</label>
                        <input type="text" class="form-control" id="transportasiLain" name="transportasiLain" placeholder="Masukkan transportasi lain">
                    </div>
                </div>
                <div class="mb-3">
                    <label for="kewarganegaraan" class="form-label">Kewarganegaraan</label><br>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="kewarganegaraan" id="indonesia" value="Indonesia" checked>
                        <label class="form-check-label" for="indonesia">Indonesia</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="kewarganegaraan" id="lainLainKewarganegaraan" value="Lain-lain">
                        <label class="form-check-label" for="lainLainKewarganegaraan">Lain-lain</label>
                    </div>

                    <!-- Input teks yang akan muncul jika 'Lain-lain' dipilih -->
                    <div id="inputLainLainKewarganegaraan" class="mt-3" style="display:none;">
                        <label for="kewarganegaraanLain" class="form-label">Masukkan Kewarganegaraan Lain</label>
                        <input type="text" class="form-control" id="kewarganegaraanLain" name="kewarganegaraanLain" placeholder="Masukkan kewarganegaraan lain">
                    </div>
                </div>
                <div class="mb-5">
                    <label for="agama" class="form-label">Agama</label>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="agama" id="islam" value="Islam" checked>
                                <label class="form-check-label" for="islam">Islam</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="agama" id="kristen" value="Kristen">
                                <label class="form-check-label" for="kristen">Kristen</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="agama" id="katolik" value="Katolik">
                                <label class="form-check-label" for="katolik">Katolik</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="agama" id="hindu" value="Hindu">
                                <label class="form-check-label" for="hindu">Hindu</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="agama" id="buddha" value="Buddha">
                                <label class="form-check-label" for="buddha">Buddha</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="agama" id="konghucu" value="Konghucu">
                                <label class="form-check-label" for="konghucu">Konghucu</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="agama" id="lainLainAgama" value="Lain-lain">
                                <label class="form-check-label" for="lainLainAgama">Lain-lain</label>
                            </div>
                        </div>
                    </div>

                    <!-- Input teks yang akan muncul jika 'Lain-lain' dipilih -->
                    <div id="inputLainLainAgama" class="mt-3" style="display:none;">
                        <label for="agamaLain" class="form-label">Masukkan Agama Lain</label>
                        <input type="text" class="form-control" id="agamaLain" name="agamaLain" placeholder="Masukkan agama lain">
                    </div>
                </div>

                <hr>
                <div class="mb-3">
                    <h5 for="">Jika Murid Pindahan</h5>
                    <div class="container">
                        <div class="mb-3">
                            <label for="namaSekolah" class="form-label">Nama Sekolah</label>
                            <input type="text" class="form-control" id="namaSekolah" name="namaSekolah" placeholder="Masukkan nama sekolah" required>
                        </div>

                        <div class="mb-3">
                            <label for="alamatSekolah" class="form-label">Alamat Sekolah</label>
                            <input type="text" class="form-control" id="alamatSekolah" name="alamatSekolah" placeholder="Masukkan alamat sekolah" required>
                        </div>

                        <div class="mb-3">
                            <label for="desaSekolah" class="form-label">Desa</label>
                            <input type="text" class="form-control" id="desaSekolah" name="desaSekolah" placeholder="Masukkan desa sekolah" required>
                        </div>


                        <div class="mb-3">
                            <label for="kabupatenSekolah" class="form-label">Kecamatan</label>
                            <input type="text" class="form-control" id="kabupatenSekolah" name="kabupatenSekolah" placeholder="Masukkan kabupaten sekolah" required>
                        </div>
                        <div class="mb-3">
                            <label for="kabupatenSekolah" class="form-label">Kabupaten</label>
                            <input type="text" class="form-control" id="kabupatenSekolah" name="kabupatenSekolah" placeholder="Masukkan kabupaten sekolah" required>
                        </div>

                        <div class="mb-3">
                            <label for="nisn" class="form-label">NISN</label>
                            <input type="text" class="form-control" id="nisn" name="nisn" placeholder="Masukkan NISN" required>
                        </div>

                        <div class="mb-3">
                            <label for="tanggalSKTB" class="form-label">Masuk SD ini dikelas</label>
                            <input type="date" class="form-control" id="tanggalSKTB" name="tanggalSKTB" required>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="text-center mt-4">
        <!-- <h3 class="step-title">Data Anak</h3> -->
        <button type="button" class="btn btn-primary btn-next">Berikutnya</button>
    </div>