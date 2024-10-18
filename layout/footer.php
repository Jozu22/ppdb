<!-- Footer -->
<footer id="contact">
    <div class="container">
        <p>&copy; 2024 SD Permata. All rights reserved.</p>
        <p><a href="mailto:info@sdharapanbangsa.com">info@sdpermata.com</a></p>
    </div>
</footer>

<!-- Bootstrap JS and dependencies -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
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

</html>