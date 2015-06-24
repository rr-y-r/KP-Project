<? $this->load->view('includes/header');?>

<div class="container">

	   <div class="row">

                <button class="pull-right btn btn-success print-btn" onclick="return printBtn()">print</button>
                <h4 class="text-center">BERITA ACARA SIDANG KOMITE KARIR PT. TELEKOMUNIKASI SELULAR</h2>
                     <table id="komiteTable" class="table table-bordered table-striped table-condensed print-tab"> 
                        <thead style="background-color:#FF6666;">
                      <tr>
                        <th>No</th>
                        <th>Nama<br></th>
                        <th>NIK</th>
                        <th>Posisi Saat Ini</th>
                        <th>Band</th>
                          <th>nilai rata-rata</th>
                          <th>nilai ca</th>
                          <th>hasil assesment</th>
                          <th colspan="2">keputusan/hasil</th>
                      </tr>
                    </thead>
                         <tbody>
                             <tr>
                                 <td rowspan=11>1</td> 
                                 <td rowspan=11> nama :<hr> <b><?=$data_komkar[0]['nama'];?></b></td> 
                                 <td rowspan=11> nik :<hr> <b><?=$data_komkar[0]['nik'];?></b></td> 
                             </tr>
                             <tr>
                                 <td>Nama posisi :<hr> <b><?=$data_komkar[0]['posisi'];?></b> 
                                     <br>
                                     <br>
                                 </td>
                                 <td></td><td></td><td></td>
                                 <td><input type="checkbox" > Strongly Recommended</td>
                                 <td><input type="checkbox" > Promosi</td>
                                 <td><input type="checkbox" > Struktural Band
                                    <br>
                                     <input type="checkbox" > Fungstionalitas Band
                                 </td>
                             </tr>
                             <tr>
                                 <td>Dept.
                                     <br>
                                     <br>
                                 </td>
                                 <td></td><td></td><td></td>
                                 <td><input type="checkbox" > Recommended</td>
                                 <td><input type="checkbox" > Rotasi</td>
                                 <td><input type="checkbox" > Struktural
                                    <br>
                                     <input type="checkbox" > Fungstionalitas
                                 </td>
                             </tr>
                             <tr>
                                 <td>Divisi
                                     <br>
                                     <br>
                                 </td>
                                 <td>Band
                                 </td>
                                 <td>nilai</td>
                                 <td>nilai</td>
                                 <td><input type="checkbox" > not Recommended</td>
                                 <td colspan="2"><input type="checkbox" > belum direkomendasikan, alasan <br></td>
                             </tr>
                             <tr>
                                 <td>Group
                                     <br>
                                     <br>
                                 </td>
                                 <td></td><td></td><td></td>
                                 <td rowspan="7">keterangan</td>
                                 <td>Nama posisi yang direkomendasikan</td>
                                 <td>
                                 </td>
                             </tr>
                             <tr>
                                 <td>Lokasi Kerja
                                     <br>
                                     <br>
                                 </td>
                                 <td></td><td></td><td></td>
                                 <td>Hirarki Organisasi<br>Departemen</td>
                                 <td>
                                 </td>
                             </tr>
                             <tr>
                                 <td rowspan="5">Kategori Karir
                                 <br>
                                <br>
                                 </td>
                                 <td></td><td></td><td></td>
                                 <td>Divisi</td>
                                 
                                 <td>
                                 </td>
                             </tr>
                             <tr>
                                 <td></td>
                                 <td></td>
                                <td></td>
                                 <td>group</td><td></td>
                             
                             </tr>
                             <tr>
                                 <td></td>
                                 <td></td>
                                <td></td>
                                 <td>lokasi / kerja</td><td></td>
                             
                             </tr>
                             <tr>
                                 <td></td>
                                 <td></td>
                                <td></td>
                                 <td>job family/sub job family</td><td></td>
                             
                             </tr>
                             
                             <tr>
                                 <td></td>
                                 <td></td>
                                <td></td>
                                 <td>rekomendasi program pengembangan</td><td></td>
                             
                             </tr>

                </tbody>
                </table>
           <hr><hr><hr>
           <div align="center">

           <? for($i=1;$i<$data_print['jumlah'];$i++): ?>
            <SPAN class=sentence style="text-decoration: overline;"><?=$data_print['assesor'.$i];?> 
                ( <?=$data_print['jabatan'.$i];?> )</SPAN>
                
            <? endfor; ?>

</div>
    <!-- Sidebar -->
            
        </div>
        </div>


<script src="<?=base_url('assets/js/bootstrap-datepicker.js'); ?>"></script>
<script>
    function printBtn(){
            $('.print-btn').hide();
            window.print();
            $('.print-btn').show();
            
        }
    $(document).ready(function() {
           
    });
    
    

</script>