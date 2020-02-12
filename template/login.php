<body class="hold-transition login-page">
  <div class="login-box">
    <div class="login-logo">
      <a href="../../index2.html"><b>BUKU SAKU SOP</b></a><b>
      </b></div><b>
      <!-- /.login-logo -->
      <div class="login-box-body">
        <p class="login-box-msg">LOGIN</p>
        <?php
        if (isset($_SESSION['pesan'])) :
        ?>
          <div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <?= $_SESSION['pesan'] ?>
          </div>
        <?php
          unset($_SESSION['pesan']);
        endif;
        ?>
        <form method="post" action="template/action_login.php">

          <div class="form-group has-feedback">
            <input type="text" name="user" class="form-control" placeholder="masukan username">

          </div>
          <div class="form-group has-feedback">
            <input type="password" name="pass" class="form-control" placeholder="masukan password">

          </div>
          <div class="row">

            <!-- /.col -->
            <div class="col-xs-4">
              <button type="submit" name="login" class="btn btn-primary btn-block btn-flat">Login</button>
            </div>
            <!-- /.col -->
          </div>
        </form>


      </div>
      <!-- /.login-box-body -->
    </b>
  </div><b>
    <!-- /.login-box -->

    <!-- jQuery 3 -->
    <script src="../assets/login/jquery.min.js"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="../assets/login/bootstrap.min.js"></script>
    <!-- iCheck -->
    <script src="../assets/login/icheck.min.js"></script>
    <script>
      $(function() {
        $('input').iCheck({
          checkboxClass: 'icheckbox_square-blue',
          radioClass: 'iradio_square-blue',
          increaseArea: '20%' /* optional */
        });
      });
    </script>


  </b>
</body>