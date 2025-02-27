<div class="step">
    <h3 class="step-title">Data Wali</h3>
    <div class="row">
        <div class="col-md-6">
            <div class="mb-3">
                <label for="" class="form-label">Nama Wali</label>
                <input type="text" class="form-control" id="" name="" rows="3" placeholder="Masukkan Nama Wali"></input>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Tempat Lahir</label>
                <input type="text" class="form-control" id="" name="" rows="3" placeholder="Masukkan Tempat Lahir"></input>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Tanggal Lahir</label>
                <input type="date" class="form-control" id="" name="" rows="3"></input>
            </div>


            <div class="mb-3">
                <label for="pendidikanWali" class="form-label">Pendidikan Terakhir Wali<span class="text-danger">*</span></label>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="pendidikanWali" id="sd" value="SD" checked>
                            <label class="form-check-label" for="sd">SD</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="pendidikanWali" id="smp" value="SMP">
                            <label class="form-check-label" for="smp">SMP</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="pendidikanWali" id="sma" value="SMA">
                            <label class="form-check-label" for="sma">SMA</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="pendidikanWali" id="d3" value="D3">
                            <label class="form-check-label" for="d3">D III</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="pendidikanWali" id="s1" value="S1">
                            <label class="form-check-label" for="S1">S1</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="pendidikanWali" id="s2" value="S2">
                            <label class="form-check-label" for="S2">S2</label>
                        </div>
                    </div>


                    <div class="col-md-6">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="pendidikanWali" id="lainLainPendidikanWali" value="Lain-lain">
                            <label class="form-check-label" for="lainLainPendidikanWali">Lain-lain</label>
                        </div>
                    </div>
                </div>

                <!-- Input teks yang akan muncul jika 'Lain-lain' dipilih -->
                <div id="inputLainLainPendidikanWali" class="mt-3" style="display:none;">
                    <label for="pendidikanWaliLain" class="form-label">Masukkan Pendidikan Lain</label>
                    <input type="text" class="form-control" id="pendidikanWaliLain" name="pendidikanWaliLain" placeholder="Masukkan pendidikan lain">
                </div>
            </div>
            <div class="mb-3">
                <label for="pendidikanWali" class="form-label">Hubungan Kekeluargaan Dengan Murid<span class="text-danger">*</span></label>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="hubunganMuridWali" id="paman" value="Paman" checked>
                            <label class="form-check-label" for="paman">Sebagai Paman</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="hubunganMuridWali" id="bibi" value="Bibi">
                            <label class="form-check-label" for="bibi">Sebagai Bibi</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="hubunganMuridWali" id="lainLainHubunganMuridWali" value="Lain-lain">
                            <label class="form-check-label" for="lainLainHubunganMuridWali">Lain-lain</label>
                        </div>
                    </div>
                </div>

                <!-- Input teks yang akan muncul jika 'Lain-lain' dipilih -->
                <div id="inputLainLainMuridWali" class="mt-3" style="display:none;">
                    <label for="hubunganMuridWaliLain" class="form-label">Lain-lain, sebutkan:</label>
                    <input type="text" class="form-control" id="hubunganMuridWaliLain" name="hubunganMuridWaliLain" placeholder="Masukkan hubungan lain">
                </div>
            </div>
            <div class="mb-3">
                <label for="tanggunganWali" class="form-label">Tanggungan terhadap murid dalam bentuk<span class="text-danger">*</span></label>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="tanggunganWali" id="uangSekolah" value="Menanggung Uang Sekokah" checked>
                            <label class="form-check-label" for="uangSekolah">Menanggung Uang Sekolah</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="tanggunganWali" id="buku" value="Menanggung Buku-buku">
                            <label class="form-check-label" for="buku">Menanggung Buku-buku</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="tanggunganWali" id="penginapan" value="Menanggung Penginapan">
                            <label class="form-check-label" for="penginapan">Menanggung Penginapan</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="tanggunganWali" id="lainLainTanggunganWali" value="Lain-lain">
                            <label class="form-check-label" for="lainLainTanggunganWali">Lain-lain</label>
                        </div>
                    </div>
                </div>

                <!-- Input teks yang akan muncul jika 'Lain-lain' dipilih -->
                <div id="inputLainLainTanggunganWali" class="mt-3" style="display:none;">
                    <label for="tanggunganWaliLain" class="form-label">Lain-lain, sebutkan:</label>
                    <input type="text" class="form-control" id="tanggunganWaliLain" name="tanggunganWaliLain" placeholder="Masukkan tanggungan lain">
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="mb-3">
                <h6 for="alamatWali">Alamat Wali</h6>
                <div class="container">

                    <div class="mb-3">
                        <label for="" class="form-label">Rumah</label>
                        <input type="text" class="form-control" id="" name="" rows="3" placeholder="Masukkan Alamat Rumah"></input>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Kode POS</label>
                        <input type="number" class="form-control" id="" name="" rows="3" placeholder="Masukkan Kode POS"></input>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Nomor Telepon</label>
                        <input type="number" class="form-control" id="" name="" rows="3" placeholder="Masukkan Nomor Telepon"></input>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Alamat Kantor/Tempat Kerja</label>
                        <input type="text" class="form-control" id="" name="" rows="3" placeholder="Masukkan Alamat Kantor/Tempat Kerja"></input>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <button type="button" class="btn btn-secondary btn-prev">Sebelumnya</button>
    <button type="button" class="btn btn-primary btn-next">Berikutnya</button>
</div>