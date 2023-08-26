<form class="multisteps-form__form" action="https://jthemes.net/themes/html/BeWizard/JobApplication/JobV.1/action.php" id="wizard" method="POST" enctype="multipart/form-data">
    <div class="form-area position-relative">
        <div class="multisteps-form__panel js-active" data-animation="scaleIn">
            <div class="wizard-forms position-relative">
                <span class="step-no position-absolute">Step 1</span>
                <div class="wizard-inner-box">
                    <div class="inner-title text-center">
                        <h2>Bagaimana Kepuasan anda terhadap Aksess Layanan ?</h2>
                    </div>
                    <div class="opsisurvey col-md-12"></div>
                </div>
                <div class="actions mt-3">
                    <ul>
                        <li><span class="js-btn-next" title="Selanjutnya">Selanjutnya</span></li>
                    </ul>
                </div>
            </div>
            <div class="bottom-vector position-absolute">
                <img src="assets/img/sd1.png" alt="">
            </div>
        </div>
        <!-- step 1 -->
        <div class="multisteps-form__panel" data-animation="scaleIn">
            <div class="wizard-forms form-step-2">
                <span class="step-no position-absolute">Step 2</span>
                <div class="wizard-inner-box">
                    <div class="inner-title text-center">
                        <h2>Bagaimana Kepuasan anda terhadap Mutu Layanan ?</h2>
                    </div>
                    <div class="opsisurvey col-md-12"></div>
                </div>

                <div class="actions mt-3">
                    <ul>
                        <li><span class="js-btn-prev" title="Kembali"> Kembali</span></li>
                        <li><span class="js-btn-next" title="Selanjutnya">Selanjutnya</span></li>
                    </ul>
                </div>
                <div class="bottom-vector position-absolute">
                    <img src="assets/img/sd1.png" alt="">
                </div>
            </div>
        </div>
        <div class="multisteps-form__panel" data-animation="scaleIn">
            <div class="wizard-forms form-step-3">
                <span class="step-no position-absolute">Step 3</span>

                <div class="wizard-inner-box">
                    <div class="inner-title text-center">
                        <h2>Bagaimana kepuasan terhadap proses layanan kesehatan termasuk hubungan antar manusia ?</h2>
                    </div>
                    <div class="opsisurvey col-md-12"></div>
                </div>
                <div class="actions mt-3">
                    <ul>
                        <li><span class="js-btn-prev" title="Kembali"> Kembali</span></li>
                        <li><span class="js-btn-next" title="Selanjutnya">Selanjutnya</span></li>
                        <!-- <li><button type="submit" name="submit"><span class="js-btn-next" title="NEXT">Submit </span></button></li> -->
                    </ul>
                </div>
                <div class="bottom-vector position-absolute">
                    <img src="assets/img/sd1.png" alt="">
                </div>
            </div>
        </div>
        <div class="multisteps-form__panel" data-animation="scaleIn">
            <div class="wizard-forms form-step-3">
                <span class="step-no position-absolute">Step 4</span>

                <div class="wizard-inner-box">
                    <div class="inner-title text-center">
                        <h2>Bagaimana kepuasan terhadap Sistem Layanan ?</h2>
                    </div>
                    <div class="opsisurvey col-md-12"></div>
                </div>
                <div class="actions mt-3">
                    <ul>
                        <li><span class="js-btn-prev" title="Kembali"> Kembali</span></li>
                        <!-- <li><span class="js-btn-next" title="Selanjutnya">Selanjutnya</span></li> -->
                        <li><button type="submit" name="submit"><span class="js-btn-next" title="Simpan">Simpan </span></button></li>
                    </ul>
                </div>
                <div class="bottom-vector position-absolute">
                    <img src="assets/img/sd1.png" alt="">
                </div>
            </div>
        </div>
        <!-- step 2 -->
        <div class="multisteps-form__panel" data-animation="scaleIn">
            <div class="wizard-forms form-step-5">
                <span class="step-no position-absolute">Step 3</span>
                <div class="wizard-inner-box">
                    <div class="thank-content text-center">
                        <div class="thank-img">
                            <img src="assets/img/th1.png" alt="">
                        </div>
                        <div class="thank-text">
                            <h2>Thankyou For submition</h2>
                            <p><span>Mike Loen</span> We will Email you soon</p>
                        </div>
                        <div class="thank-subscribe position-relative">
                            <input class="email" name="subs_email" type="email" placeholder="Subcribe For daily update Jobs">
                            <button type="submit" name="email_submit" value="Submit"> <i class="fas fa-envelope"></i></button>
                        </div>
                        <div class="thank-btn text-uppercase">
                            <a href="index.html">Back to home</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</form>
<script>
    var opsi = ` <div class="row">
                                            <div class="col-md-6">
                                                <label class="need-job-icon-text text-center col-md-12 ">
                                                    <input type="radio" name="akses_layanan" value="1" class="j-checkbox">
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
                                                    <input type="radio" name="akses_layanan" value="2" class="j-checkbox">
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

    $('.opsisurvey').html(opsi);
</script>