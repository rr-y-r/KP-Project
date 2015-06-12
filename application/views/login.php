<? $this->load->view('includes/header');?>
<body class="login">

<div class="login-form">
    <div class="col-md-12">
  <form class="form-signin" role="form" action="<?=site_url('login/loginCheck'); ?>" method="post" accept-charset="utf-8" style="padding-top:50%;">
    <h2 class="form-signin-heading" style="color:#fff;">Login</h2>
    <input class="form-control" name="username" placeholder="username" required maxlength="40" autofocus>
    <input class="form-control" type="password" name="password" placeholder="Password" required maxlength="20" />
    <label class="checkbox">
      <input value="remember-me" type="checkbox"> Ubah Password
    </label>
    <button class="btn btn-lg btn-primary btn-block" style="background-color:#FF6666;" type="submit">SiGN IN</button>
      
    <? if (isset($error)): ?>
      <div class="row">

      <div class="alert alert-error">
        <strong>Login</strong> gagal !, periksa data anda kembali
      </div>

      </div>
      </form>
      <? endif; ?>


    </div>
</body>



