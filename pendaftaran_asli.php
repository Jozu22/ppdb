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
        .btn-next {
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

<body>

    <div class="container mt-5">
        <h2 class="text-center mb-4">Formulir Pendaftaran Siswa Baru Bertahap</h2>

        <!-- Step Indicator -->
        <div class="step-indicator" id="stepIndicator">
            <div class="active">Step 1: Data Pribadi</div>
            <div>Step 2: Data Orang Tua</div>
            <div>Step 3: Data Alamat</div>
        </div>

        <form id="multiStepForm" action="proses_pendaftaran.php" method="POST">
            <!-- Step 1: Data Pribadi -->
            <div class="step active">
                <h3 class="step-title">Data Pribadi</h3>
                <div class="mb-3">
                    <label for="namaLengkap" class="form-label">Nama Lengkap</label>
                    <input type="text" class="form-control" id="namaLengkap" name="namaLengkap" required>
                </div>
                <div class="mb-3">
                    <label for="tanggalLahir" class="form-label">Tanggal Lahir</label>
                    <input type="date" class="form-control" id="tanggalLahir" name="tanggalLahir" required>
                </div>
                <div class="mb-3">
                    <label for="jenisKelamin" class="form-label">Jenis Kelamin</label>
                    <select class="form-select" id="jenisKelamin" name="jenisKelamin" required>
                        <option value="">Pilih...</option>
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                </div>
                <button type="button" class="btn btn-primary btn-next">Berikutnya</button>
            </div>

            <!-- Step 2: Data Orang Tua -->
            <div class="step">
                <h3 class="step-title">Data Orang Tua</h3>
                <div class="mb-3">
                    <label for="namaOrtu" class="form-label">Nama Orang Tua/Wali</label>
                    <input type="text" class="form-control" id="namaOrtu" name="namaOrtu" required>
                </div>
                <div class="mb-3">
                    <label for="noTelepon" class="form-label">Nomor Telepon</label>
                    <input type="tel" class="form-control" id="noTelepon" name="noTelepon" required>
                </div>
                <button type="button" class="btn btn-secondary btn-prev">Sebelumnya</button>
                <button type="button" class="btn btn-primary btn-next">Berikutnya</button>
            </div>

            <!-- Step 3: Data Alamat -->
            <div class="step">
                <h3 class="step-title">Data Alamat</h3>
                <div class="mb-3">
                    <label for="alamat" class="form-label">Alamat</label>
                    <textarea class="form-control" id="alamat" name="alamat" rows="3" required></textarea>
                </div>
                <div class="mb-3">
                    <label for="sekolahAsal" class="form-label">Sekolah Asal (jika ada)</label>
                    <input type="text" class="form-control" id="sekolahAsal" name="sekolahAsal">
                </div>
                <button type="button" class="btn btn-secondary btn-prev">Sebelumnya</button>
                <button type="submit" class="btn btn-success">Kirim Pendaftaran</button>
            </div>
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

        btnNext.forEach(button => {
            button.addEventListener('click', () => {
                currentStep++;
                showStep(currentStep);
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
</body>

</html>