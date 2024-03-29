
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Sistem Manajemen Laboratorium</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.css">

  <link rel="stylesheet" href="plugins/datatables/jquery.dataTables.css">
  <link rel="stylesheet" href="plugins/datatables/dataTables.bootstrap.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.5.6/css/buttons.dataTables.min.css">

  <!-- Select2 Category -->
  <link href="plugins/select2/css/select2.min.css" rel="stylesheet" />
  


  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/font-awesome/css/font-awesome.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
        page. However, you can choose any other skin. Make sure you
        apply the skin class to the body tag so the changes take effect.
  -->
  <link rel="stylesheet" href="dist/css/skins/skin-blue.min.css">

  <?php include_once 'addfile/cek-session.php'; ?>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <!-- Main Header -->
  <header class="main-header">

    <!-- Logo -->
    <a href="index.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>DS</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"></b>SIM</b> Laboratorium</span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account Menu -->
          <li class="dropdown user user-menu">
            <!-- Menu Toggle Button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <!-- The user image in the navbar-->
              <img src="dist/img/mahruskh.jpg" class=" user-image" alt="User Image">
              <!-- hidden-xs hides the username on small devices so only the image appears. -->
              <span class="hidden-xs"><?php echo $_SESSION['nama'] ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- The user image in the menu -->
              <li class="user-header">
                <img src="dist/img/mahruskh.jpg" class="img-circle" alt="User Image">
                <p>
                  <?php echo $_SESSION['nama']. ' - '. $_SESSION['level']. ' - '.$_SESSION['id_logged'] ?> 
                </p>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-right">
                  <a href="addfile/logout.php" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="dist/img/mahruskh.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php   echo $_SESSION['nama'] ?></p>
          <!-- Status -->
          <a href="#"><i class="fa fa-circle text-success"></i> <?php echo ucfirst($_SESSION['level']) ?></a>
        </div>
      </div>

      <!-- search form (Optional) -->
      <!-- <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form> -->
      <!-- /.search form -->

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu">
        <?php include 'aside.php' ?>
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <?php
        if(isset($_GET['page'])){
            $title = $_GET['page'];
        }else{
            $title = 'Beranda';
        }
        ?>
      <h1><i class="fa fa-home"></i> <?= ucfirst($title); ?></h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active"><?= ucfirst($title); ?></li>
      </ol>
    </section>
    <!-- Main content -->
  <section class="content">
      <?php

        if(isset($_GET['page'])){
            $file = $_GET['page'].'.php';
            if(file_exists($file)){
              include_once $_GET['page'].'.php';
            }else{
              include_once '404.php';
            }

        }else{
          echo '<meta http-equiv="refresh" content="0; URL=index.php" />';
        }

      ?>

    </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="pull-right hidden-xs">

    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2016 <a href="#">Company</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li class="active"><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane active" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript::;">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>
                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript::;">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="pull-right-container">
                  <span class="label label-danger pull-right">70%</span>
                </span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>
            <p>
              Some information about this general settings option <div class="tampil-jml-siswa"></div>
            </p>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 2.2.3 -->
<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>

<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>

<!-- Select2 Category -->
<script src="plugins/select2/js/select2.min.js"></script>

<script src="plugins/datatables/jquery.dataTables.js"></script>
<script src="addfile/data-siswa.js"></script>
<script src="plugins/chartjs/Chart.min.js"></script>
<script src="addfile/grafik/chart-siswa.js"></script>
<script src="addfile/barang.js"></script>
<script src="addfile/pemeriksaan.js"></script>
<script src="addfile/transaksi.js"></script>
<script src="addfile/data-user.js"></script>

<!-- Fungsi Pembayaran -->
<script>
    

    
    $('.pembayaran').click (function() {
    var koki = document.cookie;
    console.log(koki);
    var total = $("#sumtotal").text();
    var pasien = "<?php echo $_GET['pasien'] ?>";

      $.ajax({
        type: "POST",
        url: "addfile/crud-transaksi.php?eks=bayar",
        data: "total="+total+"&pasien="+pasien,
        success: function () {
          $.ajax({
            type: "GET",
            url: "addfile/tabel-cart.php",
            success: function (data){
              $('#table-cart').html(data);
              alert("Transaksi Berhasil");
            }
          });
        },
        error: function (msg){
            alert(msg);
        }
      });

  });
  </script>
  <script type="text/javascript">

  $('.inputhasil').on('change', function() {
      var itemID = $(this).attr('id');
      var itemVal = $(this).val();
      var itemVal = itemVal.replace(/n/g, '<br />');
      var itemVal = itemVal.replace(/&/g, 'and');
      var itemstring = "id=" + itemID + "&value=" + itemVal;
  
      processChange(itemstring);
  });

  $('.notif').hide();

  // function print
  function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}

  function processChange(itemstring){
    //console.log(itemstring);
    //return false;
    $.ajax({
        type: "POST",
        url: "addfile/crud-tes.php",
        data: itemstring,
        complete: function(data) {
            var Resp = data.responseText;
            console.log(Resp);
        },
          success: function() {
            $.notify("Data update","success");
              // $('.notif').show(100);
              // setTimeout(function() {
              //     $('.notif').animate({
              //         opacity: 1,
              //     }, 500, function(){
              //         $('.notif').hide(100);
              //     });
              // }, 1000);
          }, error: function(msg){
            $.notify(msg,"danger");
          }
      });
  }

  if($){

  }

  function checkDate() {
      var date = new Date();
      console.log(date.getDay());
      console.log(date.getHours());
      if(date.getDay() === 6 && date.getHours() === 19) {
          alert("REMEMBER! Backup!!");
      }
  }

  var dateLoop = setInterval(function() {
      checkDate();
  },5000);

  <?php if($_SESSION['level'] == 'admin' && !$_COOKIE['backup'] == NULL){
    echo 'setInterval(function(){ $.notify("Jangan Lupa untuk backup database anda.",{ position:"right" }); }, 1000);';
  } ?>

  </script>


<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>
<script src="dist/js/notify.min.js"></script>
<script src="dist/js/barcode.js"></script>
</body>
</html>
