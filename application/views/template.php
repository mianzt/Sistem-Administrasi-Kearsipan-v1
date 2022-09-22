
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>PT.Eshan Mega Propertindo</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?=base_url()?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?=base_url()?>assets/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- datatable -->
   <link rel="stylesheet" href="<?=base_url()?>assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?=base_url()?>assets/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?=base_url()?>assets/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?=base_url()?>assets/dist/css/skins/_all-skins.min.css">
  <link rel="shortcut icon" href="<?=base_url()?>assets/favicon.ico">
  <!-- datepicker -->
  <link rel="stylesheet" href="<?=base_url()?>assets/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">

  <link rel="stylesheet" href="<?=base_url()?>assets/bower_components/select2/dist/css/select2.min.css">
  <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/bower_components/datatables.net/css/buttons.dataTables.css">

  

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-purple-light sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="<?=base_url()?>" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini">
      	<img src="<?=base_url()?>assets/dist/img/logo.png"  width="60px">
      	
      </span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><img src="<?=base_url()?>assets/dist/img/logo.png"  width="80px"><b> SIADM</b></span></br>
      
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          
          <!-- Notifications: style can be found in dropdown.less -->
          
          <!-- Tasks: style can be found in dropdown.less -->
    
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?=base_url()?>assets/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs"><?=$this->fungsi->user_login()->username?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?=base_url()?>assets/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                <p>
                  <?=$this->fungsi->user_login()->name?>
                  
                </p>
              </li>
              <!-- Menu Body -->
              
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="<?=site_url('auth/logout')?>" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          
        </ul>
      </div>
    </nav>
  </header>

  <!-- =============================================== -->

  <!-- Left side column. contains the sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?=base_url()?>assets/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?=$this->fungsi->user_login()->name?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <!-- untuk batasi hak akses menu -->
        <?php if ($this->session->userdata('level') == '1' ||$this->session->userdata('level') == '3') {?>
        <li>
          <a href="<?=base_url('dashboard')?>">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            
          </a>
          
        <?php }?>
      </li>

        <?php if ($this->session->userdata('level') == '1' || $this->session->userdata('level') == '2') {?>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-shopping-cart"></i> <span>Booking</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?=base_url('pemesan/add')?>"><i class="fa fa-circle-o"></i>Input Booking</a></li>
            
            <li><a href="<?=base_url('pemesan')?>"><i class="fa fa-circle-o"></i>List Booking</a></li>
            
          </ul>
        </li>
        <li class="treeview">
          <a href="<?=base_url('unit')?>">
            <i class="fa fa-bank"></i> <span>Manajemen Unit</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?=base_url('unit/add')?>"><i class="fa fa-circle-o"></i>Input kavling</a></li>
            <li><a href="<?=base_url('unit')?>"><i class="fa fa-circle-o"></i>List kavling</a></li>
          </ul>
        </li>
        <?php }?>

        <?php if ($this->session->userdata('level') == '1' || $this->session->userdata('level') == '3' ) {?>
        <li class="treeview">
          <a href="">
            <i class="fa fa-shopping-cart"></i> <span>Transaksi</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            
            <li><a href="<?=base_url('transaksi/cash')?>"><i class="fa fa-circle-o"></i>Bayar Cash</a></li>
            
            <li><a href="<?=base_url('transaksi/kpr')?>"><i class="fa fa-circle-o"></i>Bayar Kredit</a></li>
            <li><a href="<?=base_url('transaksi')?>"><i class="fa fa-circle-o"></i>List Transaksi</a></li>

          </ul>
        </li>
        <li class="treeview">
          <a href="<?=base_url('konsumen')?>">
            <i class="fa fa-user"></i> <span>Data Konsumen</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?=base_url('konsumen/add')?>"><i class="fa fa-circle-o"></i>Input Data Konsumen</a></li>
            <li><a href="<?=base_url('arsip')?>"><i class="fa fa-circle-o"></i>Persyaratan Konsumen</a></li>
            <li><a href="<?=base_url('konsumen')?>"><i class="fa fa-circle-o"></i>List Konsumen</a></li>
          </ul>
        </li>
        
        
         
         
        <!-- untuk membatasi hak akses -->
        
         
          
          <!--  -->
           

            <li>
            <a href="<?=base_url('laporan')?>"><i class="fa fa-book"></i> <span>Laporan</span>
            </a>
          </li>
          <?php }?>
          <?php if ($this->session->userdata('level') == '1' ) {?>
        <li class="header">Setting user</li>
        <li><a href="<?=base_url('user')?>"><i class="fa fa-user-secret text-red"></i> <span>Tambah user</span></a></li>
       <?php }?>
      
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <?php echo $contents ?>
    
  
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b></b> 
    </div>
    <b>Copyright &copy; 2019</b> <strong> <a href="">PT.Eshan Mega Propertindo</a></strong>
  </footer>

  

<!-- jQuery 3 -->
<script src="<?=base_url()?>assets/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?=base_url()?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="<?=base_url()?>assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?=base_url()?>assets/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?=base_url()?>assets/dist/js/adminlte.min.js"></script>
<!-- datepicker -->
<script src="<?=base_url()?>assets/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<script src="<?=base_url()?>assets/bower_components/select2/dist/js/select2.full.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?=base_url()?>assets/dist/js/demo.js"></script>
<script src="<?=base_url()?>assets/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?=base_url()?>assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script src="<?=base_url()?>assets/bower_components/datatables.net/js/dataTables.buttons.min.js"></script>
<script src="<?=base_url()?>assets/bower_components/datatables.net/js/buttons.print.min.js"></script>







<script>
  $(document).ready(function () {
    $('.sidebar-menu').tree()
  })
</script>
<script>
  $(document).ready(function () {
    $('#table1').DataTable({
    

    })
    $('#table2').DataTable({
      
      dom: 'Bfrtip',
        buttons: [
          {        
            extend : 'print',
            text: 'Print',
            title: 'Laporan Penjualan',
          }
          
        ]
    });
    
  });
   
</script>


<script type="text/javascript">
 $(function(){
  $(".datepicker").datepicker({
      format: 'yyyy-mm-dd',
      autoclose: true,
      
  });
  // script untuk select
  $('.select2').select2()
 });
</script>

<!-- Script inputan hanya angka -->
<script language="javascript">
    function hanyaAngka(e, decimal) {
    var key;
    var keychar;
     if (window.event) {
         key = window.event.keyCode;
     } else
     if (e) {
         key = e.which;
     } else return true;
   
    keychar = String.fromCharCode(key);
    if ((key==null) || (key==0) || (key==8) ||  (key==9) || (key==13) || (key==27) ) {
        return true;
    } else
    if ((("0123456789").indexOf(keychar) > -1)) {
        return true;
    } else
    if (decimal && (keychar == ".")) {
        return true;
    } else return false;
    }
</script>


</body>
</html>
