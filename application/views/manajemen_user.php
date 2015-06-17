<? $this->load->view('includes/header');?>
<? $this->load->view('includes/navbar');?>


<div class="container">
    
    <div class="content" style="display:none">
	   <div class="row clearfix">

            
            <div id="wrapper">

    <!-- Sidebar -->
            <? $this->load->view('includes/sidebar');?>
            
                <br>
            <h4 class="text-center headercoeg">Profile</h4>
            <form id="form-user" class="form-horizontal" role="form">
            <? foreach($profileData as $row => $row_value): ?>
                <? foreach($row_value as $column => $data): ?>
                <? if($column <> "password" and $column <> "id"): ?>
                    <div class="form-group">
                        <label class="control-label col-md-3"><?=$column; ?>  : </label>
                        <div class="col-md-6">
                            <input class="form-control" name="<?=$column; ?>" type="text" placeholder="<?=$column; ?>" />
                        </div>
                    </div>
                <? endif; ?>
                <? if($column == "password"): ?>
                    <div class="form-group">
                        <label class="control-label col-md-3"><?=$column; ?>  : </label>
                        <div class="col-md-6">
                            <input class="form-control" name="<?=$column; ?>" type="password" placeholder="<?=$column; ?>" />
                        </div>
                    </div>
                <? endif; ?>
                <? endforeach; ?>
            <? endforeach; ?>
                <!--<button type="submit" class="btn btn-default">Submit</button>-->
                <button type="submit" id="formSubmit" class="btn btn-success btn-large pull-right">Submit</button>
                
                <div id="addSuccess" class="row" style="display: none">
                          <div id="addSuccessMessage" class="alert alert-info text-center"></div>
                    </div>
                    <div id="addError" class="row" style="display: none">
                          <div id="addErrorMessage" class="alert alert-danger text-center"></div>
                    </div>
            </form>
        </div>
        </div>
        
    </div>
</div>

<script src="<?=base_url('assets/js/bootstrap-datepicker.js'); ?>"></script>
<script>
    
 $("#menu-toggle").click(function(e) {
    e.preventDefault();
    $("#wrapper").toggleClass("toggled");
});
    
$(document).ready(function() {
    $('.datepicker').datepicker({
        format: 'yyyy-mm-dd'
    });
    
     $('#form-user').submit(function() {
      var form = $(this);
      form.children('button').prop('disabled', true);
      $('#addSucess').hide();
      $('#addError').hide();

      var faction = '<?=site_url('admin/createUserx'); ?>';
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
        loadTable();
    });

    $('.content').fadeIn(1000);
});
</script>