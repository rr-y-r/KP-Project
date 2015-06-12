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
            <form class="form-horizontal" role="form">
            <? foreach($profileData as $row => $row_value): ?>
                <? foreach($row_value as $column => $data): ?>
                <? if($column <> "password"): ?>
                    <div class="form-group">
                        <label class="control-label col-md-3"><?=$column; ?>  : </label>
                        <div class="col-md-6">
                            <label class="control-label"><?=$data ?></label> 
                        </div>
                    </div>
                <? endif; ?>
                <? endforeach; ?>
            <? endforeach; ?>
                <!--<button type="submit" class="btn btn-default">Submit</button>-->
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

    $('.content').fadeIn(1000);
});
</script>