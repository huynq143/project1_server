<!DOCTYPE html>
<html lang="fr">
  <?php
    include_once('views/layout/head.php');
  ?>
  <body class="cm-login">

    <div class="text-center" style="padding:90px 0 30px 0;background:#fff;border-bottom:1px solid #ddd">
        <!-- <img src="assets/img/logo-big.svg" width="300" height="45"> -->
        <img src="public/images/logo2.png" width="25%" >
    </div>
    
    <div class="col-sm-6 col-md-4 col-lg-3" style="margin:40px auto; float:none;">
      <form method="post" action="">
    <div class="col-xs-12">
          <div class="form-group">
        <div class="input-group">
          <div class="input-group-addon"><i class="fa fa-fw fa-user"></i></div>
          <input type="text" name="username" class="form-control" placeholder="Username">
        </div>
          </div>
          <div class="form-group">
        <div class="input-group">
          <div class="input-group-addon"><i class="fa fa-fw fa-lock"></i></div>
          <input type="password" name="password" class="form-control" placeholder="Password">
        </div>
          </div>
        </div>
    <div class="col-xs-6">
          <div class="checkbox"><label><input type="checkbox"> Remember me</label></div>
    </div><div class="col-xs-6">
          <button type="submit" class="btn btn-block btn-primary" name="btnDangNhap">Sign in</button>
        </div>
      </form>
    </div>
  </body>
</html>
