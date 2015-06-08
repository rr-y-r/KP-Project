<? $this->load->view('includes/header');?>
<a href="#" class="glyphicon glyphicon-th-list toogleside pull-right" id="menu-toggle"></a>
<h3 class="text-center wuaso">##HEADEER##</h3>
<div class="container">
    
    <div class="content" style="display:none">
	   <div class="row clearfix">

            
            <div id="wrapper">

    <!-- Sidebar -->
            <div id="sidebar-wrapper">
                <img class="img-circle img-responsive img-brand" alt="500x500"/>
                <ul class="sidebar-nav">

                    <li>
                        <span class="text-success">
                            <?=anchor('login', $this->session->userdata('username')); ?> 
                        </span>
                    </li>
                    <li>
                        <a class="text-danger" style="color:#BA1919;" href="<?=site_url('login/logout'); ?>">Logout</a>
                    </li>
                </ul>
            </div>
            
                <br>
            <h4 class="text-center headercoeg">##header##</h4>
            <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
                <ul id="myTab" class="nav nav-tabs" role="tablist">
                  <li role="presentation" class="active"><a href="#komite_karir" id="komite_karir-tab" role="tab" data-toggle="tab" aria-controls="komite_karir" aria-expanded="true">komite_karir</a></li>
                    <li role="presentation"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">##tab##</a></li>

                  <!--
                    <li role="presentation" class="dropdown">
                    <a href="#" id="myTabDrop1" class="dropdown-toggle" data-toggle="dropdown" aria-controls="myTabDrop1-contents" aria-expanded="false">Dropdown <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu" aria-labelledby="myTabDrop1" id="myTabDrop1-contents">
                      <li><a href="#dropdown1" tabindex="-1" role="tab" id="dropdown1-tab" data-toggle="tab" aria-controls="dropdown1">@fat</a></li>
                      <li><a href="#dropdown2" tabindex="-1" role="tab" id="dropdown2-tab" data-toggle="tab" aria-controls="dropdown2">@mdo</a></li>
                    </ul>
                  </li>
-->
                </ul>
                <div id="myTabContent" class="tab-content">
                  <div role="tabpanel" class="tab-pane fade active in" id="komite_karir" aria-labelledby="komite_karir-tab">
<h4 class="text-center">Form Komite Karir</h4>
                    <!--BEGIN message for showing error/sucess in editing ticket-->
                    <div id="addSuccess" class="row" style="display: none">
                          <div id="addSuccessMessage" class="alert alert-info text-center"></div>
                    </div>
                    <div id="addError" class="row" style="display: none">
                          <div id="addErrorMessage" class="alert alert-danger text-center"></div>
                    </div>
                    <!--END message for showing error/sucess in editing ticket-->
                      
                     <form class="formKomite" role="form" accept-charset="utf-8">
                        
                        <div class="form-group">
                             <label>NIK</label>
                             <input class="form-control" name="nik" type="text" placeholder="NIK"/>
                        </div>
                        <div class="form-group">
                             <label>Nama</label>
                             <input class="form-control" name="nama" type="text" placeholder="nama pegawai"/>
                        </div>
                        <div class="form-group">
                             <label>HATS</label>
                             <input class="form-control" name="hats" type="text" placeholder="NIK"/>
                        </div>
                        <div class="form-group">
                             <label>Jalur Karir</label>
                             <input class="form-control" name="jalur" type="text" placeholder="Jalur Karir"/>
                        </div>
                        <div class="form-group">
                             <label>Posisi</label>
                             <input class="form-control" name="posisi" type="text" placeholder="posisi"/>
                        </div>
                        <div class="form-group">
                             <label>Alasan Belum Direkomendasikan</label>
                             <textarea class="form-control" rows="5" name="alasan"></textarea> 
                            
                        </div>
                        <div class="form-group">
                             <label>Rekomendasi Program Pengembangan</label>
                             <input class="form-control" name="nik" type="text" placeholder="NIK"/>
                        </div>
                        

                    <button type="submit" id="formSubmit" class="btn btn-success btn-large pull-right">Submit</button>
                    </form>
                  </div>

              

                  <div role="tabpanel" class="tab-pane" id="home" aria-labelledby="home-tab">
<h4 class="text-center">Table</h4>
                     <table id="roomTable" class="table table-hover table-striped table-condensed"> 
                        <thead style="background-color:#FF6666;"> 
                        <tr> 
                            <th>Table</th> 
                            <th>Table</th> 
                            <th>Table</th> 
                            <th>Table</th> 
                            <th>Table</th> 
                            <th>Tables</th> 
                        </tr> 
                        </thead> 
                        <tbody> 
                        
                        </tbody> 
                    </table> 
                  </div>

              </div>
                
           
                
                
            </div>
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
    
    $('#formKomite').submit(function() {
      var form = $(this);
      form.children('button').prop('disabled', true);
      $('#addSucess').hide();
      $('#addError').hide();

      var faction = '<?=site_url('user1/insert'); ?>';
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

    

    $('.content').fadeIn(1000);
});
</script>