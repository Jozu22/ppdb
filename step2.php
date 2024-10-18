<div class="step container mt-5">
    <h3 class="step-title text-center">Data Orang Tua</h3><br>

    <!-- Grid Layout untuk membagi halaman menjadi 2 bagian -->
    <div class="row">
        <!-- Bagian Kiri -->
        <div class="col-md-6">
            <div class="mb-3">
                <label for="namaLengkap" class="form-label">Nama Lengkap Ayah <span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="namaLengkapAyah" name="namaLengkapAyah" required placeholder="Masukan nama lengkap ayah">
                <span class="error-message"></span> <!-- Ini untuk pesan kesalahan -->
            </div>
            <div class="mb-3">
                <label for="nikAyah" class="form-label">NIK Ayah<span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="nikAyah" name="nikAyah" required placeholder="Masukan NIK ayah" maxlength="16" pattern="\d{16}" title="NIK harus 16 digit angka">
                <span class="error-message"></span> <!-- Ini untuk pesan kesalahan -->
            </div>
            <div class="row mb-3">
                <legend class="col-form-label col-sm-2 pt-0">Status Ayah</legend>
                <div class="col-sm-10 d-flex align-items-center gap-5">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="gridCheck1">
                        <label class="form-check-label" for="gridCheck1">
                            Kandung
                        </label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="gridCheck2">
                        <label class="form-check-label" for="gridCheck2">
                            Tiri
                        </label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="gridCheck3">
                        <label class="form-check-label" for="gridCheck3">
                            Angkat
                        </label>
                    </div>
                </div>
            </div>

            <div class="mb-3">
                <label for="namaLengkapAyah" class="form-label">Tempat/Tanggal Lahir Ayah <span class="text-danger">*</span></label>
                <div class="row">
                    <div class="col-12 col-md-6 mb-2">
                        <input type="text" class="form-control" id="tempatLahirA" name="tempatLahirA" required placeholder="Masukan tempat lahir ayah">
                    </div>
                    <div class="col-12 col-md-6 mb-2">
                        <input type="date" class="form-control" id="tanggalLahirA" name="tanggalLahirA" required>
                    </div>
                </div>
                <span class="error-message"></span> <!-- Ini untuk pesan kesalahan -->
            </div>
        </div>

        <!-- bagian kanan -->
        <div class="col-md-6">
            <div class="mb-3">
                <label for="namaLengkap" class="form-label">Nama Lengkap Ibu <span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="namaLengkapIbu" name="namaLengkapIbu" required placeholder="Masukan nama lengkap ayah">
                <span class="error-message"></span> <!-- Ini untuk pesan kesalahan -->
            </div>
            <div class="mb-3">
                <label for="nikAyah" class="form-label">NIK Ibu<span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="nikIbu" name="nikIbu" required placeholder="Masukan NIK ayah" maxlength="16" pattern="\d{16}" title="NIK harus 16 digit angka">
                <span class="error-message"></span> <!-- Ini untuk pesan kesalahan -->
            </div>
            <div class="row mb-3">
                <legend class="col-form-label col-sm-2 pt-0">Status Ibu</legend>
                <div class="col-sm-10 d-flex align-items-center gap-5">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="gridCheck1">
                        <label class="form-check-label" for="gridCheck1">
                            Kandung
                        </label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="gridCheck2">
                        <label class="form-check-label" for="gridCheck2">
                            Tiri
                        </label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="gridCheck3">
                        <label class="form-check-label" for="gridCheck3">
                            Angkat
                        </label>
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <label for="namaLengkapAyah" class="form-label">Tempat/Tanggal Lahir Ibu <span class="text-danger">*</span></label>
                <div class="row">
                    <div class="col-12 col-md-6 mb-2">
                        <input type="text" class="form-control" id="tempatLahirI" name="tempatLahirI" required placeholder="Masukan tempat lahir ibu">
                    </div>
                    <div class="col-12 col-md-6 mb-2">
                        <input type="date" class="form-control" id="tanggalLahirI" name="tanggalLahirI" required>
                    </div>
                </div>
                <span class="error-message"></span> <!-- Ini untuk pesan kesalahan -->
            </div>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-6">
            <div class="mb-3">
                <label for="namaLengkap" class="form-label">Alamat Rumah<span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="alamat" name="alamat" required placeholder="Contoh : Jl. Sudirman No. 00, Kota Padang">
                <span class="error-message"></span>
            </div>

            <div class="mb-3">
                <label for="namaLengkap" class="form-label">Kode Pos<span class="text-danger">*</span></label>
                <input type="number" class="form-control" id="kodepos" name="kodepos" required placeholder="Masukan kode pos anda">
                <span class="error-message"></span>
            </div>

            <div class="mb-3">
                <label for="namaLengkap" class="form-label">Nomor Telepon<span class="text-danger">*</span></label>
                <input type="tel" class="form-control" id="notelp" name="notelp" required placeholder="Contoh : 6282123456789">
                <span class="error-message"></span>
            </div>

            <div class="mb-3">
                <p class="mb-1">Kantor/Tempat Kerja</p>
                <div class="mb-1 row">
                    <label for="kantorAyah" class="col-sm-2 col-form-label">a. Ayah <span class="text-danger">*</span></label>
                    <div class="col-sm-10">
                        <input type="tel" class="form-control" id="kantorAyah" name="kantorAyah" required placeholder="Jl. Sudirman, Kota Padang">
                        <span class="error-message"></span> <!-- Ini untuk pesan kesalahan -->
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="kantorIbu" class="col-sm-2 col-form-label">b. Ibu <span class="text-danger">*</span></label>
                    <div class="col-sm-10">
                        <input type="tel" class="form-control" id="kantorIbu" name="kantorIbu" required placeholder="Jl. Sudirman, Kota Padang">
                        <span class="error-message"></span> <!-- Ini untuk pesan kesalahan -->
                    </div>
                </div>
            </div>

            <div class="mb-3">
                <p class="mb-1">Yang dapat dihubungi dengan cepat jika terjadi sesuatu (Emergency) / No. HP</p>
                <div class="mb-1 row">
                    <label for="nohpAyah" class="col-sm-2 col-form-label">a. Ayah <span class="text-danger">*</span></label>
                    <div class="col-sm-10">
                        <input type="tel" class="form-control" id="nohpAyah" name="nohpAyah" required placeholder="Contoh : 6282123456789">
                        <span class="error-message"></span> <!-- Ini untuk pesan kesalahan -->
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="nohpIbu" class="col-sm-2 col-form-label">b. Ibu <span class="text-danger">*</span></label>
                    <div class="col-sm-10">
                        <input type="tel" class="form-control" id="nohpIbu" name="nohpIbu" required placeholder="Contoh : 6282123456789">
                        <span class="error-message"></span> <!-- Ini untuk pesan kesalahan -->
                    </div>
                </div>
                <div class="row mb-3" style="padding-top: 2rem;">
                    <p class="mb-1">Pekerjaan Ayah Sebagai <span class="text-danger">*</span></p>
                    <div class="col-sm-12">
                        <select class="form-select" aria-label="Default select example" id="jobSelect" onchange="updatePlaceholder()">
                            <option selected>Klik untuk memilih</option>
                            <option value="1">Pegawai Negeri, dengan Golongan</option>
                            <option value="2">Pegawai Swasta, dengan Jabatan</option>
                            <option value="3">Pengusaha, dengan Bidang Usaha</option>
                            <option value="4">Wiraswasta, dengan Bidang Usaha</option>
                            <option value="5">Militer, dengan Pangkat</option>
                            <option value="6">Polisi, dengan Pangkat</option>
                            <option value="7">Buruh, Petani, Nelayan</option>
                            <option value="8">Lain-Lain, sebutkan</option>
                        </select>
                        <input type="text" class="form-control mt-2" id="detailInput" placeholder="Masukan detail golongan" style="display: none;">
                    </div>
                </div>
                <div class="row mb-3">
                    <p class="mb-1">Pekerjaan Ibu Sebagai <span class="text-danger">*</span></p>
                    <div class="col-sm-12">
                        <select class="form-select" aria-label="Default select example" id="jobSelect" onchange="updatePlaceholder()">
                            <option selected>Klik untuk memilih</option>
                            <option value="1">Pegawai Negeri, dengan Golongan</option>
                            <option value="2">Pegawai Swasta, dengan Jabatan</option>
                            <option value="3">Pengusaha, dengan Bidang Usaha</option>
                            <option value="4">Wiraswasta, dengan Bidang Usaha</option>
                            <option value="5">Militer, dengan Pangkat</option>
                            <option value="6">Polisi, dengan Pangkat</option>
                            <option value="7">Buruh, Petani, Nelayan</option>
                            <option value="8">Lain-Lain, sebutkan</option>
                        </select>
                        <input type="text" class="form-control mt-2" id="detailInput" placeholder="Masukan detail golongan" style="display: none;">
                    </div>
                </div>

                <div class="row mb-3">
                    <p class="mb-1">Penghasilan Sebulan yang diperoleh Ayah<span class="text-danger">*</span></p>
                    <div class="col-sm-12">
                        <select class="form-select" aria-label="Default select example" id="penghasilan">
                            <option selected>Klik untuk memilih</option>
                            <option value="1">Kurang dari Rp.2.000.000</option>
                            <option value="2">Rp.5.000.000 s/d Rp.10.000.000</option>
                            <option value="3">Lebih dari Rp.10.000.000</option>
                        </select>
                    </div>
                </div>

                <div class="row mb-3">
                    <p class="mb-1">Penghasilan Sebulan yang diperoleh Ibu<span class="text-danger">*</span></p>
                    <div class="col-sm-12">
                        <select class="form-select" aria-label="Default select example" id="penghasilanIbu">
                            <option selected>Klik untuk memilih</option>
                            <option value="1">Kurang dari Rp.2.000.000</option>
                            <option value="2">Rp.5.000.000 s/d Rp.10.000.000</option>
                            <option value="3">Lebih dari Rp.10.000.000</option>
                        </select>
                    </div>
                </div>

                <div class="row mb-3">
                    <p class="mb-1">Kewarganegaraan Ayah <span class="text-danger">*</span></p>
                    <div class="col-sm-10">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="kwnAyah" id="kwnAyahIndo" value="Indo" onclick="toggleInputKwnAyah()">
                            <label class="form-check-label" for="kwnAyahIndo">Indonesia</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="kwnAyah" id="kwnAyahLain" value="Lain-lain" onclick="toggleInputKwnAyah()">
                            <label class="form-check-label" for="kwnAyahLain">Asing, sebutkan...</label>
                        </div>
                        <input type="text" class="form-control mt-2" id="Asing" name="Asing" placeholder="Sebutkan..." style="display:none;">
                    </div>
                </div>

                <div class="row mb-3">
                    <p class="mb-1">Kewarganegaraan Ibu <span class="text-danger">*</span></p>
                    <div class="col-sm-10">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="kwnIbu" id="kwnIbuIndo" value="Indo" onclick="toggleInputKwnIbu()">
                            <label class="form-check-label" for="kwnIbuIndo">Indonesia</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="kwnIbu" id="kwnIbuLain" value="Lain-lain" onclick="toggleInputKwnIbu()">
                            <label class="form-check-label" for="kwnIbuLain">Asing, sebutkan...</label>
                        </div>
                        <input type="text" class="form-control mt-2" id="AsingIbu" name="AsingIbu" placeholder="Sebutkan..." style="display:none;">
                    </div>
                </div>

                <div class="row mb-3">
                    <p class="mb-1">Suku Ayah</p>
                    <div class="col-sm-10 d-flex flex-wrap justify-content-between">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="sukuAyah" id="sukuAyahBatak" value="Batak" onclick="toggleInputSuku('ayah')">
                            <label class="form-check-label" for="sukuAyahBatak">Batak</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="sukuAyah" id="sukuAyahJawa" value="Jawa" onclick="toggleInputSuku('ayah')">
                            <label class="form-check-label" for="sukuAyahJawa">Jawa</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="sukuAyah" id="sukuAyahMelayu" value="Melayu" onclick="toggleInputSuku('ayah')">
                            <label class="form-check-label" for="sukuAyahMelayu">Melayu</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="sukuAyah" id="sukuAyahMinang" value="Minang" onclick="toggleInputSuku('ayah')">
                            <label class="form-check-label" for="sukuAyahMinang">Minang</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="sukuAyah" id="sukuAyahTionghoa" value="Tionghoa" onclick="toggleInputSuku('ayah')">
                            <label class="form-check-label" for="sukuAyahTionghoa">Tionghoa</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="sukuAyah" id="sukuAyahFlores" value="Flores" onclick="toggleInputSuku('ayah')">
                            <label class="form-check-label" for="sukuAyahFlores">Flores</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="sukuAyah" id="sukuAyahLain" value="Lain-lain" onclick="toggleInputSuku('ayah')">
                            <label class="form-check-label" for="sukuAyahLain">Lain-lain, sebutkan...</label>
                        </div>
                        <input type="text" class="form-control mt-2" id="sukuAyahLainInput" name="sukuAyahLain" placeholder="Sebutkan..." style="display:none;">
                    </div>
                </div>

                <div class="row mb-3">
                    <p class="mb-1">Suku Ibu</p>
                    <div class="col-sm-10 d-flex flex-wrap justify-content-between">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="sukuIbu" id="sukuIbuBatak" value="Batak" onclick="toggleInputSuku('ibu')">
                            <label class="form-check-label" for="sukuIbuBatak">Batak</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="sukuIbu" id="sukuIbuJawa" value="Jawa" onclick="toggleInputSuku('ibu')">
                            <label class="form-check-label" for="sukuIbuJawa">Jawa</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="sukuIbu" id="sukuIbuMelayu" value="Melayu" onclick="toggleInputSuku('ibu')">
                            <label class="form-check-label" for="sukuIbuMelayu">Melayu</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="sukuIbu" id="sukuIbuMinang" value="Minang" onclick="toggleInputSuku('ibu')">
                            <label class="form-check-label" for="sukuIbuMinang">Minang</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="sukuIbu" id="sukuIbuTionghoa" value="Tionghoa" onclick="toggleInputSuku('ibu')">
                            <label class="form-check-label" for="sukuIbuTionghoa">Tionghoa</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="sukuIbu" id="sukuIbuFlores" value="Flores" onclick="toggleInputSuku('ibu')">
                            <label class="form-check-label" for="sukuIbuFlores">Flores</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="sukuIbu" id="sukuIbuLain" value="Lain-lain" onclick="toggleInputSuku('ibu')">
                            <label class="form-check-label" for="sukuIbuLain">Lain-lain, sebutkan...</label>
                        </div>
                        <input type="text" class="form-control mt-2" id="sukuIbuLainInput" name="sukuIbuLain" placeholder="Sebutkan..." style="display:none;">
                    </div>
                </div>


                <div class="row mb-3">
                    <p class="mb-1">Agama Ayah</p>
                    <div class="col-sm-10 d-flex flex-wrap justify-content-between">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="agamaAyah" id="agamaAyahIslam" value="Islam">
                            <label class="form-check-label" for="agamaAyahIslam">Islam</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="agamaAyah" id="agamaAyahKatolik" value="Katolik">
                            <label class="form-check-label" for="agamaAyahKatolik">Katolik</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="agamaAyah" id="agamaAyahProtestan" value="Protestan">
                            <label class="form-check-label" for="agamaAyahProtestan">Protestan</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="agamaAyah" id="agamaAyahBuddha" value="Buddha">
                            <label class="form-check-label" for="agamaAyahBuddha">Buddha</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="agamaAyah" id="agamaAyahHindu" value="Hindu">
                            <label class="form-check-label" for="agamaAyahHindu">Hindu</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="agamaAyah" id="agamaAyahKonghucu" value="Konghucu">
                            <label class="form-check-label" for="agamaAyahKonghucu">Konghucu</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="agamaAyah" id="agamaAyahLain" value="Lain-lain" onclick="toggleInputAgama('ayah')">
                            <label class="form-check-label" for="agamaAyahLain">Lain-lain, sebutkan...</label>
                        </div>
                        <input type="text" class="form-control mt-2" id="agamaAyahLainInput" name="agamaAyahLain" placeholder="Sebutkan..." style="display:none;">
                    </div>
                </div>

                <div class="row mb-3">
                    <p class="mb-1">Agama Ibu</p>
                    <div class="col-sm-10 d-flex flex-wrap justify-content-between">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="agamaIbu" id="agamaIbuIslam" value="Islam" onclick="toggleInputAgama('ibu')">
                            <label class="form-check-label" for="agamaIbuIslam">Islam</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="agamaIbu" id="agamaIbuKatolik" value="Katolik" onclick="toggleInputAgama('ibu')">
                            <label class="form-check-label" for="agamaIbuKatolik">Katolik</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="agamaIbu" id="agamaIbuProtestan" value="Protestan" onclick="toggleInputAgama('ibu')">
                            <label class="form-check-label" for="agamaIbuProtestan">Protestan</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="agamaIbu" id="agamaIbuBuddha" value="Buddha" onclick="toggleInputAgama('ibu')">
                            <label class="form-check-label" for="agamaIbuBuddha">Buddha</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="agamaIbu" id="agamaIbuHindu" value="Hindu" onclick="toggleInputAgama('ibu')">
                            <label class="form-check-label" for="agamaIbuHindu">Hindu</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="agamaIbu" id="agamaIbuKonghucu" value="Konghucu" onclick="toggleInputAgama('ibu')">
                            <label class="form-check-label" for="agamaIbuKonghucu">Konghucu</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="agamaIbu" id="agamaIbuLain" value="Lain-lain" onclick="toggleInputAgama('ibu')">
                            <label class="form-check-label" for="agamaIbuLain">Lain-lain, sebutkan...</label>
                        </div>
                        <input type="text" class="form-control mt-2" id="agamaIbuLainInput" name="agamaIbuLain" placeholder="Sebutkan..." style="display:none;">
                    </div>
                </div>
                <div class="mb-3">
                    <label for="jumlahtanggungan" class="form-label">Jumlah anak yang menjadi tanggungan <span class="text-danger">*</span></label>
                    <div style="display: flex; align-items: center;">
                        <input type="number" class="form-control" id="jumlahtanggungan" name="jumlahtanggungan" required placeholder="Masukkan jumlah tanggungan" style="flex-grow: 1; margin-right: 10px;">
                        <span>Orang</span>
                    </div>
                    <span class="error-message"></span> <!-- Ini untuk pesan kesalahan -->
                </div>

                <div class="mb-3">
                    <label for="dataTanggungan" class="form-label">Nama anak yang menjadi tanggungan<span class="text-danger">*</span></label>
                    <div style="display: flex; align-items: center;">
                        <button type="button" class="btn btn-warning">Tambahkan data tanggungan</button>
                    </div>
                    <span class="error-message"></span> <!-- Ini untuk pesan kesalahan -->
                </div>
            </div>

        </div>
        <div class="col-md-6">
            <fieldset class="row mb-3">
                <legend class="col-form-label col-sm-2 pt-0">Kawasan Tinggal</legend>
                <div class="col-sm-10">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1">
                        <label class="form-check-label" for="gridRadios1">
                            Perumahan/Komplek
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                        <label class="form-check-label" for="gridRadios2">
                            Ruko
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option3">
                        <label class="form-check-label" for="gridRadios3">
                            Perkampungan
                        </label>
                    </div>
                </div>
            </fieldset>

            <div class="row mb-3">
                <legend class="col-form-label col-sm-2 pt-0">Status Tempat Tinggal</legend>
                <div class="col-sm-10">

                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="gridCheck1">
                        <label class="form-check-label" for="gridCheck1">
                            Milik Pribadi
                        </label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="gridCheck2">
                        <label class="form-check-label" for="gridCheck2">
                            Sewa
                        </label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="gridCheck2">
                        <label class="form-check-label" for="gridCheck2">
                            Tumpangan
                        </label>
                    </div>
                </div>
            </div>

            <div class="row mb-3">
                <p class="mb-1">Jika mengajak anak untuk rekreasi kemana?</p>
                <div class="col-sm-10 d-flex flex-wrap justify-content-between">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="rekreasi1" name="rekreasi" value="DalamKota">
                        <label class="form-check-label" for="rekreasi1">
                            Dalam Kota
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="rekreasi2" name="rekreasi" value="LuarKota">
                        <label class="form-check-label" for="rekreasi2">
                            Luar Kota
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="rekreasi3" name="rekreasi" value="LuarProvinsi">
                        <label class="form-check-label" for="rekreasi3">
                            Luar Provinsi
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="rekreasi4" name="rekreasi" value="LuarNegeri">
                        <label class="form-check-label" for="rekreasi4">
                            Luar Negeri
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="rekreasi5" name="rekreasi" value="Lain-lain" onclick="toggleInputRekreasi()">
                        <label class="form-check-label" for="rekreasi5">
                            Lain-lain, sebutkan...
                        </label>
                    </div>
                    <input type="text" class="form-control mt-2" id="inputLainRekreasi" name="inputLainRekreasi" placeholder="Sebutkan..." style="display:none;">
                </div>

                <div class="mb-3" id="inputLain" style="display: none;">
                    <input type="text" class="form-control" id="inputLainDetail" name="inputLainDetail" placeholder="Masukan jawaban anda">
                    <span class="error-message"></span>
                </div>
            </div>

            <div class="row mb-3">
                <legend class="col-form-label col-sm-2 pt-0">Pendidikan Ayah</legend>
                <div class="col-sm-10">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="pendidikanAyah" id="pendidikanAyah1" value="SD" onclick="toggleInputPendidikan()">
                        <label class="form-check-label" for="pendidikanAyah1">SD</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="pendidikanAyah" id="pendidikanAyah2" value="SMP" onclick="toggleInputPendidikan()">
                        <label class="form-check-label" for="pendidikanAyah2">SMP</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="pendidikanAyah" id="pendidikanAyah3" value="SMA" onclick="toggleInputPendidikan()">
                        <label class="form-check-label" for="pendidikanAyah3">SMA</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="pendidikanAyah" id="pendidikanAyah3" value="SMA" onclick="toggleInputPendidikan()">
                        <label class="form-check-label" for="pendidikanAyah3">DIII</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="pendidikanAyah" id="pendidikanAyah3" value="SMA" onclick="toggleInputPendidikan()">
                        <label class="form-check-label" for="pendidikanAyah3">S1</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="pendidikanAyah" id="pendidikanAyah3" value="SMA" onclick="toggleInputPendidikan()">
                        <label class="form-check-label" for="pendidikanAyah3">S2</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="pendidikanAyah" id="pendidikanAyah4" value="Lain-lain" onclick="toggleInputPendidikan()">
                        <label class="form-check-label" for="pendidikanAyah4">Lain-lain, sebutkan...</label>
                    </div>
                    <input type="text" class="form-control mt-2" id="inputLainPendidikanAyah" name="inputLainPendidikanAyah" placeholder="Sebutkan..." style="display:none;">
                </div>
            </div>

            <div class="row mb-3">
                <legend class="col-form-label col-sm-2 pt-0">Pendidikan Ibu</legend>
                <div class="col-sm-10">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="pendidikanAyah" id="pendidikanAyah1" value="SD" onclick="toggleInputPendidikan()">
                        <label class="form-check-label" for="pendidikanAyah1">SD</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="pendidikanAyah" id="pendidikanAyah2" value="SMP" onclick="toggleInputPendidikan()">
                        <label class="form-check-label" for="pendidikanAyah2">SMP</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="pendidikanAyah" id="pendidikanAyah3" value="SMA" onclick="toggleInputPendidikan()">
                        <label class="form-check-label" for="pendidikanAyah3">SMA</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="pendidikanAyah" id="pendidikanAyah3" value="SMA" onclick="toggleInputPendidikan()">
                        <label class="form-check-label" for="pendidikanAyah3">DIII</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="pendidikanAyah" id="pendidikanAyah3" value="SMA" onclick="toggleInputPendidikan()">
                        <label class="form-check-label" for="pendidikanAyah3">S1</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="pendidikanAyah" id="pendidikanAyah3" value="SMA" onclick="toggleInputPendidikan()">
                        <label class="form-check-label" for="pendidikanAyah3">S2</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="pendidikanIbu" id="pendidikanIbu4" value="Lain-lain" onclick="toggleInputPendidikan()">
                        <label class="form-check-label" for="pendidikanIbu4">Lain-lain, sebutkan...</label>
                    </div>
                    <input type="text" class="form-control mt-2" id="inputLainPendidikanIbu" name="inputLainPendidikanIbu" placeholder="Sebutkan..." style="display:none;">
                </div>
            </div>
        </div>
    </div>

    <button type="button" class="btn btn-secondary btn-prev">Sebelumnya</button>
    <button type="button" class="btn btn-primary btn-next">Berikutnya</button>

</div>