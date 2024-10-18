<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Forms / Elements - NiceAdmin Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Updated: Apr 20 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Form Elements</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Forms</li>
          <li class="breadcrumb-item active">Elements</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-6">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Data Orang Tua</h5>

              <!-- General Form Elements -->
              <form>
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
                </div>

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
              </form><!-- End General Form Elements -->
            </div>
          </div>
        </div>

        <!--Halaman kedua-->
        <div class="col-lg-6">
          <div class="card">
            <div class="card-body">
              <form>
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

                <table class="table table-striped table-bordered text-center">
                  <thead>
                    <tr>
                      <th scope="col">No</th>
                      <th scope="col">Nama</th>
                      <th scope="col">Sekolah/Kampus</th>
                      <th scope="col">Kelas/Semster</th>
                      <th scope="col">Uang Sekolah</th>
                      <th scope="col">Keterangan</th>
                      <th scope="col">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="text-center">1</td>
                      <td class="text-center">Ahmad</td>
                      <td class="text-center">SMAN 1 Padang</td>
                      <td class="text-center">X</td>
                      <td class="text-center">0</td>
                      <td class="text-center">KIP</td>
                      <td class="text-center">
                        Edit
                      </td>
                    </tr>
                  </tbody>
                </table>


                <div class="form-check mb-3">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                  <label class="form-check-label" for="flexCheckDefault">
                    Data-data dalam formulir pendaftaran ini saya isi dengan sebenar-benarnya dan sejujurnya sesuai dengan keadaan yang sebenarnya untuk dipergunakan bagi perkembangan pendidikan anak saya.
                  </label>
                </div>


                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary w-100" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                  Lanjutkan pengisian
                </button>

                <!-- Modal -->
                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Perhatian!</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        <p style="text-decoration: underline;"><b>Harap persiapkan data berikut :</b></p>
                        <ol>
                          <li>Scan Akte Kelahiran</li>
                          <li>Scan Kartu Keluarga</li>
                          <li>Scan KTP Orang Tua/Wali Murid</li>
                          <li>Pas Photo Latar Merah</li>
                          <li>Ijazah TK (jika ada)</li>
                        </ol>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Lanjutkan</button>
                      </div>
                    </div>
                  </div>
                </div>
              </form><!-- End General Form Elements -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>NiceAdmin</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
      Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>


  <script>
    function toggleInputPendidikan() {
      const pendidikanAyah = document.querySelector('input[name="pendidikanAyah"]:checked');
      const pendidikanIbu = document.querySelector('input[name="pendidikanIbu"]:checked');

      const inputLainPendidikanAyah = document.getElementById('inputLainPendidikanAyah');
      const inputLainPendidikanIbu = document.getElementById('inputLainPendidikanIbu');

      // Menampilkan atau menyembunyikan input berdasarkan status radio button
      inputLainPendidikanAyah.style.display = pendidikanAyah && pendidikanAyah.value === 'Lain-lain' ? 'block' : 'none';
      inputLainPendidikanIbu.style.display = pendidikanIbu && pendidikanIbu.value === 'Lain-lain' ? 'block' : 'none';
    }

    function toggleInputRekreasi() {
      const lainCheckbox = document.getElementById('rekreasi5');
      const inputLainRekreasi = document.getElementById('inputLainRekreasi');

      inputLainRekreasi.style.display = lainCheckbox.checked ? 'block' : 'none';
    }

    function updatePlaceholder() {
      const select = document.getElementById('jobSelect');
      const input = document.getElementById('detailInput');

      // Ambil nilai yang dipilih
      const selectedValue = select.value;

      // Ubah placeholder dan tampilkan input berdasarkan pilihan
      if (selectedValue >= 1 && selectedValue <= 7) {
        input.placeholder = "Masukan detail golongan";
        input.style.display = "block"; // Tampilkan input
      } else if (selectedValue === "8") {
        input.placeholder = "Masukan pekerjaan ayah";
        input.style.display = "block"; // Tampilkan input
      } else {
        input.placeholder = ""; // Kosongkan placeholder
        input.style.display = "none"; // Sembunyikan input
      }
    }

    // kwn Ayah
    function toggleInputKwnAyah() {
      const isLainLainChecked = document.getElementById('kwnAyahLain').checked;
      const inputAsing = document.getElementById('Asing');

      if (isLainLainChecked) {
        inputAsing.style.display = "block"; // Tampilkan input
      } else {
        inputAsing.style.display = "none"; // Sembunyikan input
        inputAsing.value = ""; // Kosongkan input saat tidak dipilih
      }
    }

    // Kwn Ibu
    function toggleInputKwnIbu() {
      const isLainLainChecked = document.getElementById('kwnIbuLain').checked;
      const inputAsingIbu = document.getElementById('AsingIbu');

      if (isLainLainChecked) {
        inputAsingIbu.style.display = "block"; // Tampilkan input
      } else {
        inputAsingIbu.style.display = "none"; // Sembunyikan input
        inputAsingIbu.value = ""; // Kosongkan input saat tidak dipilih
      }
    }

    //suku
    function toggleInputSuku(role) {
      const isLainLainChecked = document.getElementById(`suku${role.charAt(0).toUpperCase() + role.slice(1)}Lain`).checked;
      const inputSukuLain = document.getElementById(`suku${role.charAt(0).toUpperCase() + role.slice(1)}LainInput`);

      if (isLainLainChecked) {
        inputSukuLain.style.display = "block"; // Tampilkan input
      } else {
        inputSukuLain.style.display = "none"; // Sembunyikan input
        inputSukuLain.value = ""; // Kosongkan input saat tidak dipilih
      }


      //agama
      function toggleInputAgama(role) {
        const isLainLainChecked = document.getElementById(`agama${role.charAt(0).toUpperCase() + role.slice(1)}Lain`).checked;
        const inputAgamaLain = document.getElementById(`agama${role.charAt(0).toUpperCase() + role.slice(1)}LainInput`);

        if (isLainLainChecked) {
          inputAgamaLain.style.display = "block"; // Tampilkan input
        } else {
          inputAgamaLain.style.display = "none"; // Sembunyikan input
          inputAgamaLain.value = ""; // Kosongkan input saat tidak dipilih
        }
      }

      const radios = document.querySelectorAll('input[name="agamaAyah"]');
      radios.forEach(radio => {
        radio.addEventListener('change', toggleInputAgama);
      });


    }
  </script>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.umd.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>