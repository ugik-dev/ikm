<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from jthemes.net/themes/html/BeWizard/JobApplication/JobV.1/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 26 Aug 2023 18:20:37 GMT -->

<head>
    <meta charset="utf-8">
    <title>Job V1</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.css">
    <link rel="stylesheet" href="assets/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/fontawesome-all.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- Color switcher Alternatives | you can remove this section -->
    <link rel="stylesheet" type="text/css" href="assets/css/colors/switch.css">
    <link href="assets/css/colors/color-2.css" rel="alternate stylesheet" type="text/css" title="color-2">
    <link href="assets/css/colors/color-3.css" rel="alternate stylesheet" type="text/css" title="color-3">
    <link href="assets/css/colors/color-4.css" rel="alternate stylesheet" type="text/css" title="color-4">
    <link href="assets/css/colors/color-5.css" rel="alternate stylesheet" type="text/css" title="color-5">
    <script src="assets/js/sweetalert2.all.min.js"></script>
    <link rel="stylesheet" href="assets/css/sweetalert2.min.css">

    <script src="assets/js/jquery-3.3.1.min.js"></script>

<body>
    <!-- This code is use for color chooser, you can delete -->
    <!-- <div id="switch-color" class="color-switcher">
        <div class="open"><i class="fas fa-cog"></i></div>
        <h4>COLOR OPTION</h4>
        <ul>
            <li><a class="color-2" onclick="setActiveStyleSheet('color-2'); return false;" href="#"><i class="fas fa-cog"></i></a> </li>
            <li><a class="color-3" onclick="setActiveStyleSheet('color-3'); return false;" href="#"><i class="fas fa-cog"></i></a> </li>
            <li><a class="color-4" onclick="setActiveStyleSheet('color-4'); return false;" href="#"><i class="fas fa-cog"></i></a> </li>
            <li><a class="color-5" onclick="setActiveStyleSheet('color-5'); return false;" href="#"><i class="fas fa-cog"></i></a> </li>
        </ul>
    </div>
    <div class="clearfix"></div> -->
    <div class="wrapper">
        <div class="wizard-content-1 pos-flex clearfix" style="display: flex !important ; padding: 0px">
            <div class="steps d-inline-block clearfix" style="    max-width: 174px !important;
                    max-height: 832px !important;
                    float: left !important;
                    position: relative !important;
                    border-radius: 20px !important;
                    padding: 10px 10px 10px 10px !important;
                    box-shadow: 0px 1px 19px 0px rgba(1, 1, 1, 0.1) !important;
                    background-image: linear-gradient(180deg, #ede6ff 0%, white 100%) !important;">
                <span class="bg-shape"></span>
                <ul class="tablist multisteps-form__progress">
                    <a href="<?= base_url() ?>">
                        <li class="multisteps-form__progress-btn ">
                            <div class="step-btn-icon-text">
                                <span>1</span>
                                <div class="step-btn-icon float-left position-relative">
                                    <img src="assets/img/bt1.png" alt="">
                                </div>
                                <div class="step-btn-text">
                                    <h2 class="text-uppercase">Survey Kepuasan</h2>
                                </div>
                            </div>
                        </li>
                    </a>
                    <a href="<?= base_url('pesan-kesan') ?>">
                        <li class="multisteps-form__progress-btn">
                            <div class="step-btn-icon-text">
                                <span>2</span>
                                <div class="step-btn-icon float-left position-relative">
                                    <img class="fix-image" src="assets/img/bt2.png" alt="">
                                </div>
                                <div class="step-btn-text">
                                    <h2 class="text-uppercase">Pesan Kesan / Saran</h2>
                                </div>
                            </div>
                        </li>
                    </a>
                    <a href="<?= base_url('pengaduan') ?>">
                        <li class="multisteps-form__progress-btn">
                            <div class="step-btn-icon-text">
                                <span>3</span>
                                <div class="step-btn-icon float-left position-relative">
                                    <img class="fix-image-2" src="assets/img/bt3.png" alt="">
                                </div>
                                <div class="step-btn-text">
                                    <h2 class="text-uppercase">Pengaduan</h2>
                                </div>
                            </div>
                        </li>
                    </a>
                </ul>
            </div>
            <?php
            // $this->load->view('fragment/menu') 
            ?>
            <div class="step-inner-content clearfix position-relative" style="    width: 100% !important;
    float: right !important;
    max-height: 832px !important;
                  
    margin-left: 30px !important;
    margin-top: 0px !important;
    max-width: 1292px !important;
    border-radius: 30px !important;
    padding: 20px 20px 20px !important;
    box-shadow: 0px 1px 51px 0px rgba(1, 1, 1, 0.06) !important;
    background-image: linear-gradient(-90deg, #efffff 0%, white 100%) !important;">
                <span class="bg-shape"></span>