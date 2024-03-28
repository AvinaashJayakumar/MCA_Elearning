<?php require_once('../config.php') ?>
<!DOCTYPE html>
<html lang="en" class="" style="height: auto;">
    <head><!-- comment -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"></head>
 <?php require_once('inc/header.php') ?>
<body class="hold-transition login-page bg-gray-dark text-dark" style="background-image: url('25.png');background-repeat: no-repeat; background-size: 1600px 740px;">
  <script>
    start_loader()
  </script>
   <div class="login-box-wrapper">
<div class="login-box animate__animated animate__fadeInUp" style="animation-delay: 0.2s;">
  <!-- /.login-logo -->
  <!--<div class="card card-outline card-primary">-->
    <div class="card-header text-center">
        <img src="MCAlogo.jpeg" alt="" style="height:80px; width:85px;  border-radius:50px;"><h4 style="color:lightblue;font-weight:bold;">MCA_ELEARNING</h4>
      <a href="./" class="h1" style="color:lightblue;"><b>Login</b></a>
    </div>
    <div class="card-body">
      <p class="login-box-msg" style="color:lightblue;">Sign in to start your session</p>

      <form id="flogin-frm" action="" method="post">
        <div class="input-group mb-3">
          <input type="text" class="form-control" name="faculty_id" placeholder="Association MemberID">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" name="password" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <a href="<?php echo base_url ?>">Go to Home</a>
          </div>
          <!-- /.col -->
          <div class="col-4">
           <button type="submit" class="btn btn-primary btn-block" style="background-color:rgb(6, 2, 28) !important;border-color:rgb(6, 2, 28) !important;">Sign In</button>

          </div>
          <!-- /.col -->
        </div>
      </form>
      <!-- /.social-auth-links -->

      <!-- <p class="mb-1">
        <a href="forgot-password.html">I forgot my password</a>
      </p> -->
      
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->
</div>
<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>

<script>
  $(document).ready(function(){
    end_loader();
  })
</script>
</body>
</html>