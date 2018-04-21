<!DOCTYPE html>
<html lang="<?php echo e(config('app.locale')); ?>">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Skripsi</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <!-- Bootstrap core CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo e(url('asset/vendor/bootstrap/css/bootstrap.min.css')); ?>" />
    <!-- Custom fonts for this template-->
    <link rel="stylesheet" type="text/css" href="<?php echo e(url('asset/vendor/font-awesome/css/font-awesome.min.css')); ?>" />
    <!-- Custom styles for this template-->
    <link rel="stylesheet" type="text/css" href="<?php echo e(url('asset/css/sb-admin.css')); ?>">
    <script src="main.js"></script>

</head>
<body class="bg-dark">
  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Login</div>
      <div class="card-body">
        <form method="POST" role="form" action="">
        <?php echo e(csrf_field()); ?>

          <br>
          <div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
            <label for="exampleInputEmail1">Email address</label>
            <input class="form-control" id="exampleInputEmail1" type="email" name="email" value="<?php echo e(old('email')); ?>" aria-describedby="emailHelp" placeholder="Enter email" required>
          </div>
          <div class="form-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
            <label for="exampleInputPassword1">Password</label>
            <input class="form-control" id="exampleInputPassword1" type="password" name="password" placeholder="Password" required>
              <?php if($errors->has('password')): ?>
              <span class="help-block">
                  <strong><?php echo e($errors->first('password')); ?></strong>
              </span>
              <?php endif; ?>
          </div>
          <br><br>
          <!-- <div class="form-group">
            <div class="form-check">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox"> Remember Password</label>
            </div>
          </div> -->
          <a class="btn btn-primary btn-block" href="">Login</a>
        </form>
        <!-- <div class="text-center">
          <a class="d-block small mt-3" href="register.html">Register an Account</a>
          <a class="d-block small" href="forgot-password.html">Forgot Password?</a>
        </div> -->
      </div>
    </div>
  </div>
</body>
    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo e(url('vendor/vendor/jquery/jquery.min.js')); ?>"></script>
    <script src="<?php echo e(url('vendor/vendor/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
    <!-- Core plugin JavaScript-->
    <script src="<?php echo e(url('vendor/vendor/jquery-easing/jquery.easing.min.js')); ?>"></script>