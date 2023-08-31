<form class="multisteps-form__form" id="form_pesan_kesan" enctype="multipart/form-data">
    <div class="form-area position-relative">
        <div class="multisteps-form__panel js-active scaleIn" data-animation="scaleIn">
            <div class="wizard-forms form-step">
                <div class="wizard-inner-box">
                    <div class="inner-title text-center">
                        <h2>Bantu Kami Menjadi Lebih Baik</h2>
                        <p>Ayo berikan kami masukan agar menjadi lebih baik lagi.</p>
                        <p><small><b style="color:red">*</b>Kolom nama dan no telepon diperbolehkan kosong.<small></p>
                    </div>
                </div>
                <div class="details-form-area mt-2 pt-2">
                    <div class="row">

                        <div class="col-lg-6">
                            <div class="form-input-inner position-relative has-float-label">
                                <input type="text" name="nama" placeholder="Nama" class="form-control">
                                <label>Nama</label>
                                <div class="icon-bg text-center">
                                    <i class="fas fa-user"></i>
                                </div>

                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-input-inner position-relative has-float-label">
                                <input type="text" name="no_hp" placeholder="No Telpon" class="form-control">
                                <label>No Telpon</label>
                                <div class="icon-bg text-center">
                                    <i class="fas fa-phone"></i>
                                </div>

                            </div>
                        </div>
                        <div class="col-lg-3">

                            <div class="speaker d-flex justify-content-center  align-items-center" onclick="runSpeechRecog()" style="display: flex;justify-content: space-between;width: 13rem; height: 70% ;box-shadow: 0 0 13px #0000003d;border-radius: 10px;">
                                <i class="fa fa-microphone fa-5x"></i>
                            </div>
                        </div>
                        <div class="col-lg-9">

                            <div class="form-input-inner add-textarea has-float-label  position-relative">
                                <textarea name="pesan" class="form-control" id="pesan" placeholder="Pesan / Kesan / Saran" required="required"></textarea>
                                <label>No Telpon</label>
                                <div class="icon-bg text-center">
                                    <i class="fas fa-edit"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="actions">
                    <ul>
                        <li>
                            <button type="" id="save_btn"><span class="" title="NEXT">Kirim </span></button>
                        </li>
                        <li hidden>
                            <span class="js-btn-next js-next-pesan">nex </span>
                        </li>
                    </ul>
                </div>
                <div class="bottom-vector position-absolute">
                    <img style="margin-left: 100px" src="assets/img/sd1.png" alt="">
                </div>
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

    runSpeechRecog = () => {
        // document.getElementById("output").innerHTML = "Loading text...";
        var output = document.getElementById('output');
        var action = document.getElementById('action');
        let recognization = new webkitSpeechRecognition();
        recognization.onstart = () => {
            Swal.fire({
                title: "Sedang Merekam !",
                // html: "sedang merekam", // add html attribute if you want or remove
                allowOutsideClick: true,
            });
            Swal.showLoading();
            // action.innerHTML = "Listening...";
        }
        recognization.onresult = (e) => {
            Swal.close();
            var transcript = e.results[0][0].transcript;
            // output.innerHTML = transcript;
            // output.classList.remove("hide")
            wizardForm.pesan.val(transcript)
            // action.innerHTML = "";
        }
        recognization.start();
    }
    wizardForm.save.on("click", (ev) => {
        ev.preventDefault();
        if (wizardForm.pesan.val() == '' ||
            wizardForm.pesan.val() == null) {
            Swal.fire({
                icon: "error",
                // title: "Gagal",
                text: "Pesan / Kesan / Saran tidak boleh kosong",
            });
            return;
        }
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
                audio5.play();
                setTimeout(function() {
                    location.reload();
                }, 10000);
            },
            error: () => {},
        });
    });
</script>