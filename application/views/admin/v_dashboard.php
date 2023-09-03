<!--Counter Inbox-->
<?php
error_reporting(0);
$query = $this->db->query("SELECT * FROM tbl_inbox WHERE inbox_status='1'");
$query2 = $this->db->query("SELECT * FROM tbl_komentar WHERE komentar_status='0'");
$jum_comment = $query2->num_rows();
$jum_pesan = $query->num_rows();
$profil = getProfil();

?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <script language="JavaScript">
    var txt = "Home | <?= $profil->nama_puskesmas ?>  ";
    var kecepatan = 450;
    var segarkan = null;

    function bergerak() {
      document.title = txt;
      txt = txt.substring(1, txt.length) + txt.charAt(0);
      segarkan = setTimeout("bergerak()", kecepatan);
    }
    bergerak();
  </script>
  <!-- Tell the browser to be responsive to screen width -->
  <link rel="shorcut icon" type="text/css" href="<?php echo base_url() . 'upload/images/kab_bangka.png' ?>">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo base_url() . 'assets_old/bootstrap/css/bootstrap.min.css' ?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url() . 'assets_old/font-awesome/css/font-awesome.min.css' ?>">
  <!-- Ionicons -->
  <!-- jvectormap -->
  <link rel="stylesheet" href="<?php echo base_url() . 'assets_old/plugins/jvectormap/jquery-jvectormap-1.2.2.css' ?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url() . 'assets_old/dist/css/AdminLTE.min.css' ?>">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url() . 'assets_old/dist/css/skins/_all-skins.min.css' ?>">
  <?php
  /* Mengambil query report*/
  foreach ($visitor as $result) {
    $bulan[] = $result->tgl; //ambil bulan
    $value[] = (float) $result->jumlah; //ambil nilai
  }
  /* end mengambil query*/

  ?>

</head>

<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">

    <!--Header-->
    <?php
    $this->load->view('admin/v_header');
    ?>

    <!-- Left side column. contains the logo and sidebar -->
    <?php
    $this->load->view('admin/v_menu');
    ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Dashboard
          <small></small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
          <li class="active">Dashboard</li>
        </ol>
      </section>
      <?php
      $query = $this->db->query("SELECT count('id_survey') total,
              COUNT(IF(aksess = 2, 1, NULL)) AS aksess,
              COUNT(IF(mutu = 2, 1, NULL)) AS mutu,
              COUNT(IF(proses = 2, 1, NULL)) AS proses,
              COUNT(IF(sistem = 2, 1, NULL)) AS sistem
               FROM app_survey");
      $res = $query->result_array()[0];
      $total = $res['total'];
      $aksess = round($res['aksess'] / $total * 100);
      $mutu = round($res['mutu'] / $total * 100);
      $proses = round($res['proses'] / $total * 100);
      $sistem = round($res['sistem'] / $total * 100);

      $query = $this->db->query("SELECT count('id_kesan') total
           FROM app_kesan");
      $res = $query->result_array()[0];
      $total_kesan = $res['total'];
      ?>
      <!-- Main content -->
      <section class="content">
        <!-- Info boxes -->
        <!-- <div class="col-md-12"> -->
        <div class="row">

          <div class="col-sm-6">

            <div class="info-box bg-yellow">
              <span class="info-box-icon"><i class="fa fa-globe"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Responden Survey</span>
                <span class="info-box-number"><?php echo number_format($total); ?></span>

                <div class="progress">
                  <div class="progress-bar" style="width: 100%"></div>
                </div>
                <span class="progress-description">
                  Responden
                </span>
              </div>
            </div>
          </div>
          <div class="col-sm-6">

            <div class="info-box bg-aqua">
              <span class="info-box-icon"><i class="fa fa-users"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Total Pesan / Kesan / Saran</span>
                <span class="info-box-number"><?php echo number_format($total_kesan); ?></span>

                <div class="progress">
                  <div class="progress-bar" style="width: 100%"></div>
                </div>
                <span class="progress-description">
                  Responden
                </span>
              </div>
            </div>
          </div>
        </div>

        <!-- </div> -->
        <div class="row">

          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">

              <span class="info-box-icon bg-lime"><i class="fa fa-sign-in"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Akses Layanan</span>
                <span class="info-box-number"><?php echo $aksess; ?>% Puas</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <!-- <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
              <span class="info-box-icon bg-red">
                <i class="fa fa-firefox"></i>
                <?= $aksess ?>%
              </span>

              <div class="info-box-content">
                <span class="info-box-text">Aksess</span>
                <span class="info-box-number"><?php echo $aksess; ?></span>
              </div>
            </div>
          </div> -->
          <!-- /.col -->

          <!-- fix for small devices only -->
          <div class="clearfix visible-sm-block"></div>

          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
              <span class="info-box-icon bg-navy"><i class="fa fa-balance-scale" aria-hidden="true"></i></span>
              <div class="info-box-content">
                <span class="info-box-text">Mutu</span>
                <span class="info-box-number"><?php echo $mutu; ?>% Puas</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
              <span class="info-box-icon bg-fuchsia"><i class="fa fa-spinner" aria-hidden="true"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Prosess</span>
                <span class="info-box-number"><?php echo $proses; ?>% Puas</span>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
              <span class="info-box-icon bg-teal"><i class="fa fa-desktop" aria-hidden="true"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Sistem</span>
                <span class="info-box-number"><?php echo $sistem; ?>% Puas</span>
              </div>
            </div>
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->

        <!-- Main row -->
        <div class="row">
          <div class="col-md-12">
            <div class="box box-success">
              <div class="box-header with-border">
                <h3 class="box-title">Pesan Kesan</h3>

                <table class="table">
                  <?php
                  $query = $this->db->query("SELECT * FROM app_kesan ORDER BY id_kesan DESC LIMIT 10");
                  foreach ($query->result_array() as $i) :
                    // $tulisan_id = $i['tulisan_id'];
                    $tulisan_judul = $i['tulisan_judul'];
                    $tulisan_views = $i['tulisan_views'];
                  ?>
                    <tr>
                      <td><?php echo $i['pesan']; ?></td>
                      <td><?php echo $i['nama']; ?></td>
                    </tr>
                  <?php endforeach; ?>
                </table>
              </div>

              <!-- /.box-body -->
            </div>
            <!-- /.box -->

            <!-- /.box -->
          </div>
          <!-- /.col -->

          <!-- <div class="col-md-4">
            <div class="info-box bg-yellow">
              <span class="info-box-icon"><i class="fa fa-safari"></i></span>
              <?php
              $query = $this->db->query("SELECT * FROM tbl_pengunjung WHERE pengunjung_perangkat='Safari'");
              $jml = $query->num_rows();
              ?>
              <div class="info-box-content">
                <span class="info-box-text">Safari</span>
                <span class="info-box-number"><?php echo number_format($jml); ?></span>

                <div class="progress">
                  <div class="progress-bar" style="width: 100%"></div>
                </div>
                <span class="progress-description">
                  Penggunjung
                </span>
              </div>
            </div>
            <div class="info-box bg-green">
              <span class="info-box-icon"><i class="fa fa-globe"></i></span>
              <?php
              $query = $this->db->query("SELECT * FROM tbl_pengunjung WHERE pengunjung_perangkat='Other' OR pengunjung_perangkat='Internet Explorer'");
              $jml = $query->num_rows();
              ?>
              <div class="info-box-content">
                <span class="info-box-text">Lainnya</span>
                <span class="info-box-number"><?php echo number_format($jml); ?></span>

                <div class="progress">
                  <div class="progress-bar" style="width: 100%"></div>
                </div>
                <span class="progress-description">
                  Pengunjung
                </span>
              </div>
            </div>
            <div class="info-box bg-red">
              <span class="info-box-icon"><i class="fa fa-users"></i></span>
              <?php
              $query = $this->db->query("SELECT * FROM tbl_pengunjung WHERE DATE_FORMAT(pengunjung_tanggal,'%m%y')=DATE_FORMAT(DATE_SUB(CURDATE(), INTERVAL 1 MONTH),'%m%y')");
              $jml = $query->num_rows();
              ?>
              <div class="info-box-content">
                <span class="info-box-text">Pengunjung Bulan Lalu</span>
                <span class="info-box-number"><?php echo number_format($jml); ?></span>

                <div class="progress">
                  <div class="progress-bar" style="width: 100%"></div>
                </div>
                <span class="progress-description">
                  Pengunjung
                </span>
              </div>
            </div>
            <div class="info-box bg-aqua">
              <span class="info-box-icon"><i class="fa fa-users"></i></span>
              <?php
              $query = $this->db->query("SELECT * FROM tbl_pengunjung WHERE DATE_FORMAT(pengunjung_tanggal,'%m%y')=DATE_FORMAT(CURDATE(),'%m%y')");
              $jml = $query->num_rows();
              ?>
              <div class="info-box-content">
                <span class="info-box-text">Pengunjung Bulan Ini</span>
                <span class="info-box-number"><?php echo number_format($jml); ?></span>

                <div class="progress">
                  <div class="progress-bar" style="width: 100%"></div>
                </div>
                <span class="progress-description">
                  Pengunjung
                </span>
              </div>
            </div>

          </div> -->
        </div>
      </section>
    </div>
    <!-- /.content-wrapper -->

    <!--Footer-->
    <?php
    $this->load->view('admin/v_footer');
    ?>




  </div>
  <!-- ./wrapper -->

  <!-- jQuery 2.2.3 -->
  <script src="<?php echo base_url() . 'assets_old/plugins/jQuery/jquery-2.2.3.min.js' ?>"></script>
  <!-- Bootstrap 3.3.6 -->
  <script src="<?php echo base_url() . 'assets_old/bootstrap/js/bootstrap.min.js' ?>"></script>
  <!-- FastClick -->
  <script src="<?php echo base_url() . 'assets_old/plugins/fastclick/fastclick.js' ?>"></script>
  <!-- AdminLTE App -->
  <script src="<?php echo base_url() . 'assets_old/dist/js/app.min.js' ?>"></script>
  <!-- Sparkline -->
  <script src="<?php echo base_url() . 'assets_old/plugins/sparkline/jquery.sparkline.min.js' ?>"></script>
  <!-- jvectormap -->
  <script src="<?php echo base_url() . 'assets_old/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js' ?>"></script>
  <script src="<?php echo base_url() . 'assets_old/plugins/jvectormap/jquery-jvectormap-world-mill-en.js' ?>"></script>
  <!-- SlimScroll 1.3.0 -->
  <script src="<?php echo base_url() . 'assets_old/plugins/slimScroll/jquery.slimscroll.min.js' ?>"></script>
  <!-- ChartJS 1.0.1 -->
  <script src="<?php echo base_url() . 'assets_old/plugins/chartjs/Chart.min.js' ?>"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="<?php echo base_url() . 'assets_old/dist/js/pages/dashboard2.js' ?>"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="<?php echo base_url() . 'assets_old/dist/js/demo.js' ?>"></script>

  <script>
    var lineChartData = {
      labels: <?php echo json_encode($bulan); ?>,
      datasets: [

        {
          fillColor: "rgba(60,141,188,0.9)",
          strokeColor: "rgba(60,141,188,0.8)",
          pointColor: "#3b8bba",
          pointStrokeColor: "#fff",
          pointHighlightFill: "#fff",
          pointHighlightStroke: "rgba(152,235,239,1)",
          data: <?php echo json_encode($value); ?>
        }

      ]

    }

    var myLine = new Chart(document.getElementById("canvas").getContext("2d")).Line(lineChartData);

    var canvas = new Chart(myLine).Line(lineChartData, {
      scaleShowGridLines: true,
      scaleGridLineColor: "rgba(0,0,0,.005)",
      scaleGridLineWidth: 0,
      scaleShowHorizontalLines: true,
      scaleShowVerticalLines: true,
      bezierCurve: true,
      bezierCurveTension: 0.4,
      pointDot: true,
      pointDotRadius: 4,
      pointDotStrokeWidth: 1,
      pointHitDetectionRadius: 2,
      datasetStroke: true,
      tooltipCornerRadius: 2,
      datasetStrokeWidth: 2,
      datasetFill: true,
      legendTemplate: "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<datasets.length; i++){%><li><span style=\"background-color:<%=datasets[i].strokeColor%>\"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>",
      responsive: true
    });
  </script>

</body>

</html>