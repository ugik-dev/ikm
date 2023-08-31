 <!--Counter Inbox-->
 <?php
  error_reporting(0);
  $query = $this->db->query("SELECT * FROM tbl_inbox WHERE inbox_status='1'");
  $query2 = $this->db->query("SELECT * FROM tbl_komentar WHERE komentar_status='0'");
  $jum_comment = $query2->num_rows();
  $jum_pesan = $query->num_rows();
  ?>
 <!-- Left side column. contains the logo and sidebar -->
 <aside class="main-sidebar">
   <section class="sidebar">

     <!-- /.search form -->
     <!-- sidebar menu: : style can be found in sidebar.less -->
     <ul class="sidebar-menu">
       <li class="header">Menu Utama</li>
       <li class="active">
         <a href="<?php echo base_url() . 'admin/dashboard' ?>">
           <i class="fa fa-home"></i> <span>Dashboard</span>
           <span class="pull-right-container">
             <small class="label pull-right"></small>
           </span>
         </a>
       </li>

       <li>
         <a href="<?php echo base_url() . 'admin/pengguna' ?>">
           <i class="fa fa-users"></i> <span>Pengguna</span>
           <span class="pull-right-container">
             <small class="label pull-right"></small>
           </span>
         </a>
       </li>
       <li>
         <a href="<?php echo base_url() . 'admin/survey' ?>">
           <i class="fa fa-comments"></i> <span>Survey</span>
           <!-- <span class="pull-right-container">
             <small class="label pull-right bg-green"><?php echo $jum_comment; ?></small>
           </span> -->
         </a>
       </li>
       <li>
         <a href="<?php echo base_url() . 'admin/pesan_kesan' ?>">
           <i class="fa fa-envelope"></i> <span>Pesan Kesan</span>
           <!-- <span class="pull-right-container">
             <small class="label pull-right bg-green"><?php echo $jum_pesan; ?></small>
           </span> -->
         </a>
       </li>


     </ul>
   </section>
 </aside>