<? $this->load->view('includes/header');?>
<body class="login">

<div class="login-form">
    <div class="col-md-12">
  <form class="form-signin" id="form-signin" role="form" action="<?=site_url('login/loginCheck'); ?>" method="post" accept-charset="utf-8" style="padding-top:50%;">
    <h2 class="form-signin-heading" style="color:#fff;">Login</h2>
    <input class="form-control" name="username" placeholder="username" required maxlength="40" >
    <input class="form-control" type="password" name="password" placeholder="Password" required maxlength="20" />
      <br>
    <button class="btn btn-lg btn-primary btn-block" style="background-color:#FF6666;" type="submit">SIGN IN</button>
      
    <? if (isset($error)): ?>
      <div class="row">

      <div class="alert alert-error">
        <strong>Login</strong> gagal !, periksa data anda kembali
      </div>

      </div>
      
      <? endif; ?>
</form>
    </div>
    <a data-toggle="modal" data-target="#forgot_password" href="#">lupa Password</a>
    </div>
    
    <div class="modal fade" id="forgot_password" tabindex="-1" role="dialog" aria-labelledby="forgot_password" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close" ><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Lupa Password</h4>
          </div>
          <div class="modal-body">
              <div class="container-fluid">
            <!--BEGIN message for showing error/sucess in editing ticket-->
            <div id="addSuccess" class="row" style="display: none">
                  <div id="addSuccessMessage" class="alert alert-info text-center"></div>
            </div>
            <div id="addError" class="row" style="display: none">
                  <div id="addErrorMessage" class="alert alert-danger text-center"></div>
            </div>
            <!--END message for showing error/sucess in editing ticket-->

            <!--BEGIN EDIT ticket form-->
            <form id="form_password" role="form" accept-charset="utf-8">
                <div class="form-group">
                     <label>NIK</label>
                     <input class="form-control" type="text" name="q0" placeholder="NIK ex: 76219" required/>
                </div>
                <div class="form-group">
                     <label>username</label>
                     <input class="form-control" type="text" name="q1" placeholder="USERNAME ex: user1" required/>
                </div>
                <div class="form-group">
                     <label>tanggal masuk</label>
                     <input class="form-control" type="text" name="q2" placeholder="tanggal masuk: 1996-11-04"/>
                </div>
                <div class="form-group">
                     <label>NIK atasan</label>
                     <input class="form-control" type="text" name="q3" placeholder="NIK atasan: 67002"/>
                </div>
                

                <br>

            <button type="submit" id="form_password" class="btn btn-success btn-large pull-right">Submit</button>
            </form>
            <!--END EDIT Ticket form-->
          </div>
           </div>
        </div>
      </div>
    </div>
    <script>
    $(document).ready(function() {
        $('#form_password').submit(function() {
          var form = $(this);
          form.children('button').prop('disabled', true);
          $('#addSucess').hide();
          $('#addError').hide();

          var faction = '<?=site_url('login/forgot_password'); ?>';
          var fdata = form.serialize();

          $.post(faction, fdata, function(rdata) {
              var json = jQuery.parseJSON(rdata);
              if (json.isSuccessful) {
                  $('#addSuccessMessage').html(json.message);
                  $('#addSuccess').show();

              } else {
                  $('#addErrorMessage').html(json.message);
                  $('#addError').show();
              }

              form.children('button').prop('disabled', false);
              form.children('input[name="name"]').select();
          });

          return false;
        });
    });
    </script>
</body>



