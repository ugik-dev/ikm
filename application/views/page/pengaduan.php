<form class="multisteps-form__form" id="form_pesan_kesan" enctype="multipart/form-data">
    <div class="form-area position-relative">
        <div class="multisteps-form__panel js-active scaleIn" data-animation="scaleIn">
            <div class="wizard-forms form-step">
                <div class="wizard-inner-box">
                    <div class="inner-title text-center">
                        <h2>Pengaduan</h2>
                        <p>berikut beberapa langkah untuk melakukan pengaduan.</p>
                        <!-- <p><small><b style="color:red">*</b>Kolom nama dan no telepon diperbolehkan kosong.<small></p> -->
                    </div>
                    <div class="opsisurvey col-md-12" id="proses_layanan">


                        <div class="row">
                            <div class="col-md-12">
                                <label class="need-job-icon-text text-center col-md-12 " style="height: 450px !important;">
                                    <span class="need-job-text-inner" style="height: 450px !important;">
                                        <!-- <span class="checkbox-circle-mark position-absolute"> </span> -->
                                        <span class="need-job-icon">
                                            <img src="assets/img/sd1.png" style="height: 150px !important" alt="">
                                        </span>
                                        <span class="need-job-text">
                                            <h3 class="">
                                                Telpon / Whatsapp : 0813 7784 0842 (Puskesmas Puding Besar)<br>
                                                Telpon : 0717-92102 (Dinas Kesehatan Kabupaten Bangka)<br>
                                                Whatsapp : 082311448289 (Dinas Kesehatan Kabupaten Bangka)<br>
                                                Website Puskesmas : pudingbesar.bangka.go.id<br>
                                                Website Dinas Kesehatan Kabupaten Bangk : dinkes.bangka.go.id<br>
                                                Sp4n Lapor! : lapor.go.id
                                            </h3>
                                        </span>
                                    </span>
                                </label>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- <div class="bottom-vector position-absolute">
                    <img style="margin-left: 100px" src="assets/img/sd1.png" alt="">
                </div> -->
            </div>

        </div>
        <div class="multisteps-form__panel" data-animation="scaleIn">
            <div class="wizard-forms form-step-2">
                <div class="wizard-inner-box">
                    <div class="thank-content text-center">
                        <div class="thank-img">
                            <img src="assets/img/th1.png" alt="">
                        </div>
                        <div class="thank-text">
                            <h2>Terimakasih</h2>
                            <p>sudah membantu kami menjadi lebih baik..</p>
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
    // var wizardForm = $("#wizard");
    var wizardForm = {
        'form': $('#form_pesan_kesan'),
        'save': $('#save_btn'),
        'nama': $('#nama'),
        'no_hp': $('#no_hp'),
        'pesan': $('#pesan'),
    }

    wizardForm.save.on("click", (ev) => {
        ev.preventDefault();
        // if (wizardForm.pesan.val() == '' ||
        //     wizardForm.pesan.val() == null) {
        //     Swal.fire({
        //         icon: "error",
        //         // title: "Gagal",
        //         text: "Pesan / Kesan / Saran tidak boleh kosong",
        //     });
        //     return;
        // }
        Swal.fire({
            title: "Loading !",
            html: "sedang mengumpulkan ", // add html attribute if you want or remove
            allowOutsideClick: false,
        });
        Swal.showLoading();
        $.ajax({
            url: "<?= base_url() . 'main/submit_pesan' ?>",
            type: "POST",
            data: wizardForm.form.serialize(),
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
                $(".js-btn-next").trigger("click");
                // audio4.pause();
                // audio5.play();
                setTimeout(function() {
                    location.reload();
                }, 10000);
            },
            error: () => {},
        });
    });
</script>