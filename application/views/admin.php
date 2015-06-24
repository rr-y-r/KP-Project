<? $this->load->view('includes/header');?>
<? $this->load->view('includes/navbar');?>


<div class="container">
    
    <div class="content" style="display:none">
	   <div class="row clearfix">

            
            <div id="wrapper">

    <!-- Sidebar -->
            <? $this->load->view('includes/sidebar');?>
            
                <br>
            <h4 class="text-center headercoeg">Komite Karir</h4>
            <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
                
                <ul id="myTab" class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">Data Komite Karir</a></li>
                  <li role="presentation"><a href="#komite_karir" id="komite_karir-tab" role="tab" data-toggle="tab" aria-controls="komite_karir" aria-expanded="true">Tambah Data Komite</a></li>
                    

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
                  <div role="tabpanel" class="tab-pane komite" id="komite_karir" aria-labelledby="komite_karir-tab">
<h4 class="text-center">Form Komite Karir</h4>
                    <!--BEGIN message for showing error/sucess in editing ticket-->
                    
                    <!--END message for showing error/sucess in editing ticket-->
                     <form class="formKomite" role="form" accept-charset="utf-8">
                        
                        <div class="form-group">
                             <label>NIK</label>
                             <input class="form-control" name="nik" type="text" placeholder="NIK Pegawai" />
                        </div>
                        <div class="form-group">
                             <label>Nama</label>
                             <input class="form-control" name="nama" type="text" placeholder="nama pegawai"/>
                        </div>
                         <div class="form-group">
                             <label>Kategory karir</label>
                             <input class="form-control" name="cat_karir" type="text" placeholder="Kategory karir"/>
                        </div>
                        <div class="form-group">
                             <label>HATS</label>
                             <input class="form-control" name="hats" type="text" placeholder="HATS"/>
                        </div>
                         <div class="form-group">
                             <label>Keterangan HATS</label>
                             <input class="form-control" name="ket_hats" type="text" placeholder="Keterangan HATS"/>
                        </div>
                        <div class="form-group">
                             <label>Hasil</label>
                             <input class="form-control" name="hasil" type="text" placeholder="hasil"/>
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
                             <input class="form-control" name="rekomendasi" type="text" placeholder="rekomendasi"/>
                        </div>
                        
                    <div id="addSuccess" class="row" style="display: none">
                          <div id="addSuccessMessage" class="alert alert-info text-center"></div>
                    </div>
                    <div id="addError" class="row" style="display: none">
                          <div id="addErrorMessage" class="alert alert-danger text-center"></div>
                    </div>
                    <button type="submit" id="formSubmit" class="btn btn-success btn-large pull-right">Submit</button>
                    </form>
                  </div>

              

                  <div role="tabpanel" class="tab-pane fade active in" id="home" aria-labelledby="home-tab">
                      <a href="#" class="glyphicon glyphicon-refresh pull-right" style="font-weight:800;font-size:20px;font-face:'Montserrat',sans-serif;" onclick="return loadTable()"></a>
                      <h4 class="text-center">Table</h4>
                     <table id="komiteTable" class="table table-hover table-striped table-condensed"> 
                        <thead style="background-color:#FF6666;"> 
                        <tr> 
                            <th>ID</th> 
                            <th>NIK</th> 
                            <th>Nama</th> 
                            <th>Kategory Karir</th> 
                            <th>HATS</th> 
                            <th>Keterangan Hats</th> 
                            <th>Hasil</th>  
                            <th>Jalur Karir</th>  
                            <th>Posisi</th>  
                            <th>Alasan Rekomendasi</th>  
                            <th>Rekomendasi</th> 
                            <th>Manage Data</th> 
                        </tr> 
                        </thead> 
                        <tbody> 
                            <? foreach($datakomite as $row): ?>
                    <!--BEGIN Modal For Edit Ticket-->
                        <div class="modal fade" id="editKomiteModal<?=$row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="editKomiteModal" aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close" ><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myModalLabel">Edit Komite ID : <?=$row['id']; ?></h4>
                              </div>
                              <div class="modal-body">
                                  <div class="container-fluid">
                                <!--BEGIN message for showing error/sucess in editing ticket-->
                                
                                <!--END message for showing error/sucess in editing ticket-->

                                <!--BEGIN EDIT ticket form-->
                                <form class="formEdit" role="form" accept-charset="utf-8">
                                    <div class="form-group hidden">
                                         <label>ID Komite</label>
                                         <input class="form-control hidden" type="text" name="id" placeholder="ID" 
                                                value="<?=$row['id']; ?>" />
                                    </div>
                                    <div class="form-group">
                                         <label>NIK</label>
                                         <input class="form-control" name="nik" type="text" placeholder="NIK"
                                                value="<?=$row['nik']; ?>"/>
                                    </div>
                                    <div class="form-group">
                                         <label>Nama</label>
                                         <input class="form-control" name="nama" type="text" placeholder="nama pegawai"
                                                value="<?=$row['nama']; ?>"/>
                                    </div>
                                     <div class="form-group">
                                         <label>Kategory karir</label>
                                         <input class="form-control" name="cat_karir" type="text" placeholder="Kategory karir"
                                                value="<?=$row['cat_karir']; ?>"/>
                                    </div>
                                    <div class="form-group">
                                         <label>HATS</label>
                                         <input class="form-control" name="hats" type="text" placeholder="HATS"
                                                value="<?=$row['hats']; ?>"/>
                                    </div>
                                     <div class="form-group">
                                         <label>Keterangan HATS</label>
                                         <input class="form-control" name="ket_hats" type="text" placeholder="Keterangan HATS"
                                                value="<?=$row['ket_hats']; ?>"/>
                                    </div>
                                    <div class="form-group">
                                         <label>Hasil</label>
                                         <input class="form-control" name="hasil" type="text" placeholder="hasil"
                                                value="<?=$row['hasil']; ?>"/>
                                    </div>
                                    <div class="form-group">
                                         <label>Jalur Karir</label>
                                         <input class="form-control" name="jalur" type="text" placeholder="Jalur Karir"
                                                value="<?=$row['jalur_karir']; ?>"/>
                                    </div>
                                    <div class="form-group">
                                         <label>Posisi</label>
                                         <input class="form-control" name="posisi" type="text" placeholder="posisi"
                                                value="<?=$row['posisi']; ?>"/>
                                    </div>
                                    <div class="form-group">
                                         <label>Alasan Belum Direkomendasikan</label>
                                         <textarea class="form-control" rows="5" name="alasan"
                                                   value="<?=$row['alasan']; ?>"></textarea> 

                                    </div>
                                    <div class="form-group">
                                         <label>Rekomendasi Program Pengembangan</label>
                                         <input class="form-control" name="rekomendasi" type="text" placeholder="rekomendasi"
                                                value="<?=$row['rekomendasi']; ?>"/>
                                    </div>
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
                    
                    <div class="print" >
                    <? foreach($datakomite as $row): ?>
                    <!--BEGIN Modal For Edit Ticket-->
                        <div class="modal fade" id="print_id_<?=$row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="printkomite" aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close" ><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myModalLabel">Kode ID Komite : <?=$row['id']; ?></h4>
                              </div>
                              <div class="modal-body">
                                  <div class="container-fluid">
                                <!--BEGIN message for showing error/sucess in editing ticket-->
                                
                                <!--END message for showing error/sucess in editing ticket-->

                                <!--BEGIN EDIT ticket form-->
                                <form class="formPrint" role="form" action="<?=site_url('admin/print_formKomite'); ?>"  target="_blank"  method="post" accept-charset="utf-8">
                                    <div class="form-group hidden">
                                         <label>id komite</label>
                                         <input class="form-control" name="komite_id" type="text" value="<?=$row['id']; ?>"/>
                                    </div>
                                    <div class="form-group">
                                         <label>Group</label>
                                         <input class="form-control" name="group" type="text" placeholder="nama group"/>
                                    </div>
                                    <div class="form-group">
                                         <label>Tanggal</label>
                                         <input class="form-control" name="tanggal" type="text" placeholder="contoh : 2015-6-23"/>
                                    </div>
                                    
                                <div id="editSuccess" class="row" style="display: none">
                                      <div id="editSuccessMessage" class="alert alert-info text-center"></div>
                                </div>
                                <div id="editError" class="row" style="display: none">
                                      <div id="editErrorMessage" class="alert alert-danger text-center"></div>
                                </div>
                                    <div class="form-group" id="assesor">
                                         <label class="col-md-12">Jumlah Assesor Penandatangan</label>
                                        <div class="hidden">
                                         <input type="number" name="jumlah" id="jumlah" class="form-control"/>
                                        </div>
                                        <div class="col-md-6">
                                         <button type="button" id="tambah" class="btn btn-success form-control">tambah</button>
                                        </div>
                                        <div class="col-md-6">
                                        <button type="button" id="kurang" class="btn btn-danger form-control">kurang</button>
                                        </div>
                                    </div>
                                    
                                    
                                <button type="submit" id="formSubmit-btn" class="btn btn-success btn-large pull-right">Submit</button>
                                </form>
                                <!--END EDIT Ticket form-->
                              </div>
                               </div>
                            </div>
                          </div>
                        </div>
                        <!--END Modal For EDIT Ticket-->
                    <? endforeach; ?>
                    
                    </div>

              </div>
                
            </div>
           </div>
        </div>
    </div>
</div>

<script src="<?=base_url('assets/js/bootstrap-datepicker.js'); ?>"></script>
<script>
    
function loadTable()
{
    $('#komiteTable tbody').fadeOut(200).empty();
    var url = '<?=site_url("admin/getData"); ?>';
    $.get(url, function(data){
        var data_komite = jQuery.parseJSON(data);
        var data = data_komite['data_komite'];
        $.each(data_komite['data_komite'], function (i,d) {

            var row='<tr>';
            row+='<tr>';
           
           $.each(d, function(j, e) {
                row+='<td>'+e+'</td>';
           })
            row+='<td><button class="btn btn-sm btn-default" data-toggle="modal" data-target="#editKomiteModal'+d['id']+'">UPDATE</button><button class="btn btn-sm btn-danger delete" name="id" value="'+d['id']+'" onclick="return deleteKomite('+d['id']+')">HAPUS</button> <button class="btn btn-sm btn-default" data-toggle="modal" data-target="#print_id_'+d['id']+'">PRINT</a> </td>'

           row+='</tr>';
           $('#komiteTable tbody').fadeIn(1000).append(row);

        })
    }); 
};    
  
function deleteKomite(x)
{
    var confMsg =  confirm("apakah kamu yakin ingin menghapus data ini ?");
    var deleteURL = '<?=site_url("admin/deleteDataKomite"); ?>'+'/'+x;
     if (confMsg == true)
     {
         console.log(deleteURL);
         $.post(deleteURL);
     }
    else
    {
        console.log('b');
    }
    loadTable();
};

    
 $("#menu-toggle").click(function(e) {
    e.preventDefault();
    $("#wrapper").toggleClass("");
});
    
$(document).ready(function() {
    loadTable();
    $('.datepicker').datepicker({
        format: 'yyyy-mm-dd'
    });
    
    $("#menu-toggle").click();
    
    var i = 1;
    
    
    $("#tambah").click(function(e) {
        e.preventDefault();
        
        var url = '<?=site_url("admin/getPejabatData"); ?>';
        var person ='<select class="form-control assesor'+i+'" name="assesor'+i+'" required>';
        $.get(url, function(data){
        var data_pejabat = jQuery.parseJSON(data);

        $.each(data_pejabat['data_pejabat'], function (i,d) {
            person +='<option value="'+d['nama']+'"> '+d['nama']+' - '+d['jabatan']+'</option>';
        })
        person+='</select>';
          i++;
            $('#assesor').append(person);
            $('#jumlah').val(i);
            
    });        
        
        /*
        
        var person ='<select class="form-control assesor'+i+'" name="assesor'+i+'" required><option value="HRD">HRD</option><option value="HMC">HMC</option></select><br>';
        */
        
        
        console.log(i);
    });
    $("#kurang").click(function(e) {
        e.preventDefault();
        i--;
        $('.assesor'+i).remove();
        $('#jumlah').val(i);
        console.log(i);
    });
    
    $('.formKomite').submit(function() {
      var form = $(this);
      form.children('button').prop('disabled', true);
      $('#addSucess').hide();
      $('#addError').hide();

      var faction = '<?=site_url('admin/insert'); ?>';
      var fdata = form.serialize();

      $.post(faction, fdata, function(rdata) {
          var json = jQuery.parseJSON(rdata);
          if (json.isSuccessful) {
              $('#addSuccessMessage').html(json.message);
              $('#addSuccess').show();
              loadTable();
          } else {
              $('#addErrorMessage').html(json.message);
              $('#addError').show();
              loadTable();
          }

          form.children('button').prop('disabled', false);
          form.children('input[name="name"]').select();
      });

      return false;
        loadTable();
    });
    
    $('.formEdit').submit(function() {
      var form = $(this);
      form.children('button').prop('disabled', true);
      $('#editSucess').hide();
      $('#editError').hide();

      var faction = '<?=site_url('admin/editKomite'); ?>';
      var fdata = form.serialize();

      $.post(faction, fdata, function(rdata) {
          var json = jQuery.parseJSON(rdata);
          if (json.isSuccessful) {
              $('#editSuccessMessage').html(json.message);
              $('#editSuccess').show();
              $('#editKomiteModal').modal('hide');
              loadTable();

          } else {
              $('#editErrorMessage').html(json.message);
              $('#editError').show();
              loadTable();
          }

          form.children('button').prop('disabled', false);
          form.children('input[name="name"]').select();
      });
        loadTable();
      return false;
    });
    


    

    $('.content').fadeIn(1000);
});
</script>