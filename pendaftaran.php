<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Pendaftaran Siswa Bertahap</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .step {
            display: none;
        }

        .step.active {
            display: block;
        }

        .step-title {
            margin-bottom: 20px;
        }

        .btn-prev,
        .btn-next,
        .btn-kirim {
            margin-top: 20px;
        }

        /* Step indicator styles */
        .step-indicator {
            margin-bottom: 30px;
            display: flex;
            justify-content: space-between;
        }

        .step-indicator div {
            width: 100%;
            padding: 10px;
            text-align: center;
            background-color: #e9ecef;
            border-radius: 5px;
            margin-right: 10px;
            position: relative;
        }

        .step-indicator div.active {
            background-color: #0d6efd;
            color: white;
        }

        .step-indicator div::after {
            content: "";
            position: absolute;
            top: 50%;
            right: -15px;
            width: 30px;
            height: 2px;
            background-color: #e9ecef;
            z-index: 1;
        }

        .step-indicator div.active::after {
            background-color: #0d6efd;
        }

        .step-indicator div:last-child::after {
            display: none;
        }
    </style>
</head>
<?php
include "layout/header.php";
include "layout/navbar.php";
?>

<body>
    <br><br>
    <div class="container mt-5">
        <h2 class="text-center mb-4">Formulir Pendaftaran Siswa Baru Bertahap</h2>

        <!-- Step Indicator -->
        <div class="step-indicator fixed" id="stepIndicator">
            <div class="active">Step 1: Data Anak</div>
            <div>Step 2: Data Orang Tua</div>
            <div>Step 3: Data Wali</div>
            <div>Step 4: Keterangan Tambahan</div>
        </div>

        <form id="multiStepForm" action="submit.php" method="POST" onsubmit="console.log('submitted')">
            <!-- Step 1: Data Anak -->
            <?php
            include "step1.php"
            ?>

            <!-- Step 2: Data Orang Tua -->
            <!-- <div class="step"> -->
            <!-- <h3 class="step-title">Data Orang Tua</h3> -->
            <!-- <div class="mb-3">
                    <label for="namaOrtu" class="form-label">Nama Orang Tua/Wali</label>
                    <input type="text" class="form-control" id="namaOrtu" name="namaOrtu" required>
                </div>
                <div class="mb-3">
                    <label for="noTelepon" class="form-label">Nomor Telepon</label>
                    <input type="tel" class="form-control" id="noTelepon" name="noTelepon" required>
                </div> -->
            <!-- <button type="button" class="btn btn-secondary btn-prev">Sebelumnya</button>
                <button type="button" class="btn btn-primary btn-next">Berikutnya</button> -->
            <!-- </div> -->
            <?php
            include "form.php"
            ?>


            <!-- Step 3: Data Wali -->
            <?php
            include "step3.php"
            ?>

            <!-- Step 4: Keterangan Tambahan -->
            <?php
            include "step4.php";
            ?>
        </form>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Custom JavaScript for Multi-step form -->
    <script>
        let currentStep = 0;
        const steps = document.querySelectorAll('.step');
        const stepIndicator = document.querySelectorAll('.step-indicator div');
        const btnNext = document.querySelectorAll('.btn-next');
        const btnPrev = document.querySelectorAll('.btn-prev');

        function showStep(step) {
            steps.forEach((el, index) => {
                el.classList.toggle('active', index === step);
                stepIndicator[index].classList.toggle('active', index === step);
            });
        }

        function validateStep(step) {
            // Ambil hanya input yang memiliki atribut 'required'
            const inputs = steps[step].querySelectorAll('input[required]');
            let formIsValid = true;

            // Cek semua input 'required' dan berhenti jika ada yang tidak valid
            for (let input of inputs) {
                if (!input.reportValidity()) {
                    formIsValid = false;
                    break; // Hentikan validasi setelah menemukan input yang tidak valid
                }
            }

            return formIsValid;
        }


        btnNext.forEach(button => {
            button.addEventListener('click', () => {
                if (validateStep(currentStep)) { // Validasi menggunakan required
                    currentStep++;
                    showStep(currentStep);
                }
            });
        });

        btnPrev.forEach(button => {
            button.addEventListener('click', () => {
                currentStep--;
                showStep(currentStep);
            });
        });

        showStep(currentStep); // Show the first step on page load
    </script>
    <script>
        // Ambil elemen checkbox dan input teks
        const lainLainCheckbox = document.getElementById('lainLain');
        const inputLainLain = document.getElementById('inputLainLain');

        // Tambahkan event listener pada checkbox 'Lain-lain'
        lainLainCheckbox.addEventListener('change', function() {
            if (this.checked) {
                inputLainLain.style.display = 'block'; // Tampilkan input teks jika dipilih
            } else {
                inputLainLain.style.display = 'none'; // Sembunyikan input teks jika tidak dipilih
            }
        });
    </script>
    <!-- Script untuk menampilkan input text jika suku lain-lain dipilih -->
    <script>
        const lainLainSukuRadio = document.getElementById('lainLainSuku');
        const inputLainLainSuku = document.getElementById('inputLainLainSuku');

        const sukuRadios = document.querySelectorAll('input[name="suku"]');

        sukuRadios.forEach(radio => {
            radio.addEventListener('change', function() {
                if (lainLainSukuRadio.checked) {
                    inputLainLainSuku.style.display = 'block'; // Tampilkan input teks jika 'Lain-lain' dipilih
                } else {
                    inputLainLainSuku.style.display = 'none'; // Sembunyikan input teks jika 'Lain-lain' tidak dipilih
                }
            });
        });
    </script>
    <!-- Script untuk menampilkan input text jika 'Lain-lain' dipilih -->
    <script>
        const lainLainKewarganegaraanRadio = document.getElementById('lainLainKewarganegaraan');
        const indonesiaRadio = document.getElementById('indonesia');
        const inputLainLainKewarganegaraan = document.getElementById('inputLainLainKewarganegaraan');

        // Event listener untuk radio button kewarganegaraan
        lainLainKewarganegaraanRadio.addEventListener('change', function() {
            if (this.checked) {
                inputLainLainKewarganegaraan.style.display = 'block'; // Tampilkan input teks jika 'Lain-lain' dipilih
            }
        });

        indonesiaRadio.addEventListener('change', function() {
            if (this.checked) {
                inputLainLainKewarganegaraan.style.display = 'none'; // Sembunyikan input teks jika 'Indonesia' dipilih
            }
        });
    </script>
    <!-- Script untuk menampilkan input text jika 'Lain-lain' dipilih -->
    <script>
        const lainLainAgamaRadio = document.getElementById('lainLainAgama');
        const inputLainLainAgama = document.getElementById('inputLainLainAgama');

        const agamaRadios = document.querySelectorAll('input[name="agama"]');

        agamaRadios.forEach(radio => {
            radio.addEventListener('change', function() {
                if (lainLainAgamaRadio.checked) {
                    inputLainLainAgama.style.display = 'block'; // Tampilkan input teks jika 'Lain-lain' dipilih
                } else {
                    inputLainLainAgama.style.display = 'none'; // Sembunyikan input teks jika 'Lain-lain' tidak dipilih
                }
            });
        });
    </script>
</body>
<br><br>

<!-- <?php
        // include "layout/footer.php";
        ?> -->

</html>