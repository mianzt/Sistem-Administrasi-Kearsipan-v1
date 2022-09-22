
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SISFO | Adminstrasi</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?=base_url()?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?=base_url()?>assets/bower_components/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?=base_url()?>assets/bower_components/login/style.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?=base_url()?>assets/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?=base_url()?>assets/dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?=base_url()?>assets/plugins/iCheck/square/blue.css">
  <link rel="shortcut icon" href="<?=base_url()?>assets/favicon.ico">
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    
  </div>
  <!-- /.login-logo -->
  
  <!-- /.login-box-body -->

  <div class="container login-box">
  <section id="content">
    <img src="<?=base_url()?>assets/dist/img/logo.png" class="user-image" alt="User Image">
    <form action="<?=site_url('auth/process')?>" method="post">

      <h1>Login</h1>
      <div class="form-group ">
        
        <input type="text" placeholder="Username" name="username" required="Tidak Boleh kosong" id="username" />
      </div>
      <div class="form-group ">
        
        <input type="password" placeholder="Password" name="password" required="" id="password" />
      </div>
      
        <div class="form-group col-md-4">
                <button type="submit" name="login"class="btn btn-primary">Login</button>
              </div>
        
     
    </form><!-- form -->
    
  </section><!-- content -->
</div><!-- container -->
</div>
<script src="<?php echo base_url(); ?>assets/bower_components/slideshow/jquery-1.10.2.js"></script>
    <script src="<?php echo base_url(); ?>assets/bower_components/slideshow/jquery.backstretch.min.js"></script>
    <script type="text/javascript">
      $.backstretch (
        [
          src="<?php echo base_url(); ?>assets/dist/img/bg1.jpg",
          src="<?php echo base_url(); ?>assets/dist/img/bg2.jpg",
          src="<?php echo base_url(); ?>assets/dist/img/bg3.jpg",
          
        ],
        {
          duration: 1700,
          fade: 800
        }
      );
    </script>

</body>
</html>
