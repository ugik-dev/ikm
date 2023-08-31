<form class="multisteps-form__form" id="wizard" method="POST" enctype="multipart/form-data">
    <div class="form-area position-relative">
        <div class="multisteps-form__panel js-active" data-animation="scaleIn">
            <div class="wizard-forms position-relative form-step">
                <div class="wizard-inner-box">
                    <div class="inner-title text-center">
                        <h2>Ayo bantu kami menjadi lebih baik</h2>
                    </div>
                    <div class="col-md-12">
                        <label class="need-job-icon-text text-center col-md-12 mt-5 mb-5 start_survey">
                            <span class="need-job-text-inner" style="height: 400px !important;">
                                <!-- <span class="checkbox-circle-mark position-absolute"> </span> -->
                                <span class="need-job-icon">
                                    <img src="assets/img/sd1.png" alt="">
                                </span>
                                <span class="need-job-text mt-4 pt-5">
                                    <h2 class="text-uppercase need-job-title">
                                        <!-- <h2>MULAI</h2> --> SENTUH UNTUK MEMULAI!!
                                    </h2>
                                </span>
                            </span>
                        </label>
                    </div>
                </div>
                <div class="actions mt-3">
                    <ul>
                        <li hidden><span class="js-btn-next js-btn-next0" title="Selanjutnya">Selanjutnya</span></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="multisteps-form__panel" data-animation="scaleIn">
            <div class="wizard-forms position-relative form-step-2">
                <div class="wizard-inner-box">
                    <div class="inner-title text-center">
                        <h2>Bagaimana Kepuasan anda terhadap Aksess Layanan ?</h2>
                    </div>
                    <div class="opsisurvey col-md-12" id="aksess_layanan"></div>
                </div>
                <div class="actions mt-3">
                    <ul>
                        <li hidden><span class="js-btn-next js-btn-next1" title="Selanjutnya">Selanjutnya</span></li>
                    </ul>
                </div>
            </div>
            <div class="bottom-vector position-absolute">
                <img src="assets/img/sd1.png" style="margin-left: 100px" alt="">
            </div>
        </div>
        <div class="multisteps-form__panel" data-animation="scaleIn">
            <div class="wizard-forms form-step-3">
                <div class="wizard-inner-box">
                    <div class="inner-title text-center">
                        <h2>Bagaimana Kepuasan anda terhadap Mutu Layanan ?</h2>
                    </div>
                    <div class="opsisurvey col-md-12" id="mutu_layanan"></div>
                </div>

                <div class="actions mt-3">
                    <ul>
                        <li><span class="js-btn-prev" title="Kembali"> Kembali</span></li>
                        <li hidden><span class="js-btn-next js-btn-next2" title="Selanjutnya">Selanjutnya</span></li>
                    </ul>
                </div>
                <div class="bottom-vector position-absolute">
                    <img src="assets/img/sd1.png" style="margin-left: 100px" alt="">
                </div>
            </div>
        </div>
        <div class="multisteps-form__panel" data-animation="scaleIn">
            <div class="wizard-forms form-step-4">
                <div class="wizard-inner-box">
                    <div class="inner-title text-center">
                        <h2>Bagaimana kepuasan terhadap proses layanan kesehatan termasuk pegawai?</h2>
                    </div>
                    <div class="opsisurvey col-md-12" id="proses_layanan"></div>
                </div>
                <div class="actions mt-3">
                    <ul>
                        <li><span class="js-btn-prev" title="Kembali"> Kembali</span></li>
                        <li hidden><span class="js-btn-next js-btn-next3" title="Selanjutnya">Selanjutnya</span></li>
                    </ul>
                </div>
                <div class="bottom-vector position-absolute">
                    <img src="assets/img/sd1.png" style="margin-left: 100px" alt="">
                </div>
            </div>
        </div>
        <div class="multisteps-form__panel" data-animation="scaleIn">
            <div class="wizard-forms form-step-5">
                <div class="wizard-inner-box">
                    <div class="inner-title text-center">
                        <h2>Bagaimana kepuasan terhadap Sistem Layanan ?</h2>
                    </div>
                    <div class="opsisurvey col-md-12" id="sistem_layanan"></div>
                </div>
                <div class="actions mt-3">
                    <ul>
                        <li><span class="js-btn-prev" title="Kembali"> Kembali</span></li>
                        <li hidden><span class="js-btn-next js-btn-next4" title="Selanjutnya">Selanjutnya</span></li>
                        <li><button type="" id="submit_btn"><span class="" title="Simpan">Simpan </span></button></li>
                    </ul>
                </div>
                <div class="bottom-vector position-absolute">
                    <img src="assets/img/sd1.png" style="margin-left: 100px" alt="">
                </div>
            </div>
        </div>
        <div class="multisteps-form__panel" data-animation="scaleIn">
            <div class="wizard-forms form-step-6">
                <div class="wizard-inner-box">
                    <div class="thank-content text-center">
                        <div class="thank-img">
                            <img src="assets/img/th1.png" alt="">
                        </div>
                        <div class="thank-text">
                            <h2>Terimakasih</h2>
                            <p>atas penilaian anda terhadap Puskesmas Puding Besar</p>
                        </div>
                        <div class="thank-btn text-uppercase">
                            <a href="<?= base_url('survey') ?>">Kembali</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</form>
<script>
    function renderOption(kolom, id, required = "") {
        var opsi = ` <div class="row">
                                            <div class="col-md-6">
                                                <label class="need-job-icon-text text-center col-md-12 ">
                                                    <input required="${required}" type="radio" name="${kolom}" value="1" class="j-checkbox">
                                                    <span class="need-job-text-inner">
                                                        <span class="checkbox-circle-mark position-absolute"> </span>
                                                        <span class="need-job-icon">
                                                            <img src="assets/img/bt1.png" alt="">
                                                        </span>
                                                        <span class="need-job-text">
                                                            <span class="text-uppercase need-job-title">Tidak Puas</span>
                                                        </span>
                                                    </span>
                                                </label>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="need-job-icon-text text-center col-md-12 ">
                                                    <input  type="radio" name="${kolom}" value="2" class="j-checkbox">
                                                    <span class="need-job-text-inner">
                                                        <span class="checkbox-circle-mark position-absolute"> </span>
                                                        <span class="need-job-icon">
                                                            <img src="assets/img/bt3.png" alt="">
                                                        </span>
                                                        <span class="need-job-text">
                                                            <span class="text-uppercase need-job-title">Puas</span>
                                                        </span>
                                                    </span>
                                                </label>
                                            </div>
                                        </div>`;
        $('#' + id).html(opsi);
    }
    renderOption('aksess', 'aksess_layanan');
    renderOption('mutu', 'mutu_layanan');
    renderOption('proses', 'proses_layanan');
    renderOption('sistem', 'sistem_layanan', 'required');
    var wizardForm = $("#wizard");
    $("#submit_btn").on("click", (ev) => {
        ev.preventDefault();
        Swal.fire({
            title: "Loading !",
            html: "sedang mengumpulkan survey", // add html attribute if you want or remove
            allowOutsideClick: false,
        });
        Swal.showLoading();
        $.ajax({
            url: "<?= base_url() . 'main/submit_survey' ?>",
            type: "POST",
            data: wizardForm.serialize(),
            success: (data) => {
                // buttonIdle(submitBtn);
                Swal.close();
                json = JSON.parse(data);
                if (json["error"]) {
                    Swal.fire({
                        icon: "error",
                        title: "Gagal",
                        text: json["message"],
                    });
                    return;
                }
                $(".js-btn-next4").trigger("click");
                audio4.pause();
                audio5.play();
                setTimeout(function() {
                    location.reload();
                }, 10000);
            },
            error: () => {},
        });
    });
</script>