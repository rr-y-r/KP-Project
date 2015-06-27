<? $this->load->view('includes/header');?>
<? $this->load->view('includes/navbar');?>


<div class="container">
    
    <div class="content">
	   <div class="row clearfix">

            
            <div id="wrapper">

    <!-- Sidebar -->
            <? $this->load->view('includes/sidebar');?>
            
                <br>
                 <br>
            <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
                
                <ul id="myTab" class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">Manajemen Data User</a></li>
                  <li role="presentation"><a href="#userTab" id="komite_karir-tab" role="tab" data-toggle="tab" aria-controls="userTab" aria-expanded="true">Tambah User Baru</a></li>
                    

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
                    <div role="tabpanel" class="tab-pane fade active in" id="home" aria-labelledby="home-tab">
                    
                    <!--table for crud user goes here-->
                        <table id="userDataTable" class="table table-hover table-striped table-condensed"> 
                        <thead style="background-color:#FF6666;"> 
                        <tr> 
                            <? foreach($profileData as $row => $row_value): ?>
                                <? foreach($row_value as $column => $data): ?>
                                    <? if($column == 'id' or $column == 'username' or $column == 'tipe' or $column == 'nik' or $column == 'status' or $column == 'department'): ?>
                                    <th><?=$column; ?></th> 
                                    <? endif;?>
                                <? endforeach; ?>
                            <? endforeach; ?>
                        </tr> 
                        </thead> 
                        <tbody> 
                            <? foreach($userTableData as $row): ?>
                    <!--BEGIN Modal For Edit Ticket-->
                        <div class="modal fade" id="editUserModal" tabindex="-1" role="dialog" aria-labelledby="editUserModal" aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close" ><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myModalLabel">Edit User ID :</h4>
                              </div>
                              <div class="modal-body">
                                  <div class="container-fluid">
                                <!--BEGIN message for showing error/sucess in editing ticket-->
                                
                                <!--END message for showing error/sucess in editing ticket-->

                                <!--BEGIN EDIT user form-->
                                <form class="formEdit" role="form" accept-charset="utf-8">
                                    
                                <div id="editSuccess" class="row" style="display: none">
                                      <div id="editSuccessMessage" class="alert alert-info text-center"></div>
                                </div>
                                <div id="editError" class="row" style="display: none">
                                      <div id="editErrorMessage" class="alert alert-danger text-center"></div>
                                </div>
                                <button type="submit" id="formSubmit" class="btn btn-success btn-large pull-right">Submit</button>
                                </form>
                                <!--END EDIT Ticket form-->
                              </div>
                               </div>
                            </div>
                          </div>
                        </div>
                        <!--END Modal For EDIT Ticket-->
                    <? endforeach; ?>
                        
                        </tbody> 
                    </table> 
                    </div>
                  <div role="tabpanel" class="tab-pane komite" id="userTab" aria-labelledby="userTab">
            <h4 class="text-center headercoeg">Tambah User Baru</h4>
            <form id="form-user" class="form-horizontal" role="form">
            <? foreach($profileData as $row => $row_value): ?>
                <? foreach($row_value as $column => $data): ?>
                <? if($column <> "password" and $column <> "id" and $column <> "nik" and $column <> "tipe" and $column <> "department"): ?>
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
                <? if($column == "nik"): ?>
                    <div class="form-group">
                        <label class="control-label col-md-3"><?=$column; ?>  : </label>
                        <div class="col-md-6">
                            <input class="form-control" name="<?=$column; ?>" type="text" placeholder="<?=$column; ?>" required/>
                        </div>
                    </div>
                <? endif; ?>
                <? if($column == "department"): ?>
                    <div class="form-group">
                            <label class="control-label col-md-3">Departement</label>
                            <div class="col-md-6">
                                <select class="form-control" name="<?=$column; ?>" required>
                                    <option></option>
                                    <option value="HRD">HRD</option>
                                    <option value="HMC">HMC</option>
                                </select>
                            </div>
                      </div>  
                    
                <? endif; ?>
                <? if($column == "tipe"): ?>
                    <div class="form-group">
                            <label class="control-label col-md-3">Tipe User</label>
                            <div class="col-md-6">
                                <select class="form-control" name="<?=$column; ?>" required>
                                    <option></option>
                                    <option value="Manajer">Manajer</option>
                                    <option value="Anggota">Anggota</option>
                                </select>
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
        
    </div>
</div>
</div>

<script src="<?=base_url('assets/js/bootstrap-datepicker.js'); ?>"></script>
<script>
    
 $("#menu-toggle").click(function(e) {
    e.preventDefault();
    $("#wrapper").toggleClass("toggled");
});
    
    
function loadTable()
{
    $('#userDataTable tbody').fadeOut(200).empty();
    var url = '<?=site_url("user/get_user_data_by_group/".$this->session->userdata('group')); ?>';
    $.get(url, function(data){
        var data_user = jQuery.parseJSON(data);
        var data = data_user['data_user'];
        $.each(data_user['data_user'], function (i,d) {
            
            var row='<tr>';
            row+='<tr>';
           
           $.each(d, function(j, e) 
            {
               if(j == 'id' || j == 'username' || j == 'tipe' || j == 'nik' || j == 'status' || j == 'department'){
                  row+='<td>'+e+'</td>'; 
               } 
           })
            
           row+='</tr>';
           $('#userDataTable tbody').fadeIn(1000).append(row);

        })
    }); 
}; 
    
$(document).ready(function() {
    $('.datepicker').datepicker({
        format: 'yyyy-mm-dd'
    });
    
    loadTable();
    
     $("#menu-toggle").delay(2000).click();
    
     $('#form-user').submit(function() {
      var form = $(this);
      form.children('button').prop('disabled', true);
      $('#addSucess').hide();
      $('#addError').hide();

      var faction = '<?=site_url('user/createUserx'); ?>';
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