<section class="content-header">

<div class="row">
  <div class="col-md-12">
<div class="box">
        <div class="box-header with-border">
          <h3 class="box-title"><b>IDENTITAS</b></h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            
          </div>
        </div>
        <div class="box-body">
          
    <!-- agar bisa dropdown -->
    <!-- Main content -->
    <section class="content">
       <?php $this->view('alert')  ?> 
      <div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Identitas Pemohon</h3>
              
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form  action="<?=site_url('konsumen/process')?>" method="post">
              
                <div class="form-group">
                  <label>No.Transaksi</label>
                  <input type="hidden" name="id" value="<?=$row->konsumen_id?>">
                  <select name="notransaksi" id="booking" onchange="changeValue(this.value)" class="form-control" >
                    <option value="">-Pilih No.Transaksi-</option>
                    <?php 
                    $jsArray = "var dtkonsumen = new Array();\n";
                     foreach($transaksi->result() as $key =>$data) { ?>
                        <option value="<?=$data->transaksi_id?>" <?=$data->transaksi_id == $row->transaksi_id? "selected" : null?> ><?=$data->no_transaksi?></option>

                    <?php 
                    $jsArray .= "dtkonsumen['" . $data->transaksi_id . "'] = {nama:'" . addslashes($data->nama) . "',noktp:'".addslashes($data->no_ktp)."'
                      ,alamat:'".addslashes($data->alamat)."'
                      };\n"; 
                     } ?>
                    
                  </select>
                </div>



                <div class="form-group">
                  <label>No.KTP</label>
                  <input type="text" class="form-control" name="noktp" id="noktp" value="<?=$row->no_ktp?>"  placeholder="No.ktp" readonly >
                </div>

                <div class="form-group">
                  <label>Nama</label>
                  <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama" readonly >
                  
                </div>
                <div class="form-group">
                  <label>Tempat lahir</label>
                  <input type="text" class="form-control" name="tempatlahir" value="<?=$row->tempat_lahir?>" placeholder="Tempat lahir" >
                </div>
                <div class="form-group">
                  <label>Tanggal lahir</label>
                  <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  
                  <input type="tex"  class="form-control datepicker"  name="tanggallahir" value="<?=$row->tgl_lahir?>" placeholder="Tanggal lahir" >
                </div>
              </div>

                <div class="form-group">
                  <label>Alamat</label>
                  <textarea name="alamat" id="alamat" cols="20" rows="5" class="form-control" value="<?=$row->alamat?>" placeholder="Alamat" maxlength="100" readonly ></textarea>
                </div>
                <div class="form-group">
                  <label>Pekerjaan</label>
                  <input type="text" class="form-control" name="pekerjaan" value="<?=$row->pekerjaan?>" placeholder="Pekerjaan" >
                </div>
                
                <!-- akhir form -->
             
                <div class="form-group">
                  <label>No.Telpon</label>
                  <input type="text" class="form-control" name="notelpon" value="<?=$row->no_telpon?>" placeholder="No.Telpon" >
                </div>
                
                
              <!-- /.box-body -->

              
          </div>
          
        </div>
        <!--/.col (left) -->
        <!-- right column -->
        
        <div class="col-md-6">
          <!-- Horizontal Form -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Identitas Pasangan</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            
                <div class="form-group">
                  <label>No.KTP</label>
                  <input type="text" class="form-control" name="noktp_p" value="<?=$row->no_ktp_p?>" placeholder="No.ktp" >
                </div>
                <div class="form-group">
                  <label>Nama</label>
                  <input type="text" class="form-control" name="nama_p" value="<?=$row->nama_p?>" placeholder="Nama" >
                </div>
                <div class="form-group">
                  <label>Tempat lahir</label>
                  <input type="text" class="form-control" name="tempatlahir_p" value="<?=$row->tempat_lahir_p?>" placeholder="Tempat lahir" >
                </div>
                <div class="form-group">
                  <label>Tanggal lahir</label>
                  <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" id="datepicker" class="form-control datepicker" name="tanggallahir_p" value="<?=$row->tgl_lahir_p?>" placeholder="Tanggal lahir" >
                </div>
                <div class="form-group">
                  <label>Alamat</label>
                  <textarea name="alamat_p" cols="20" rows="5" class=" form-control" value="<?=$row->alamat_p?>" placeholder="Alamat" maxlength="100"  ></textarea>
                </div>
                <div class="form-group">
                  <label>Pekerjaan</label>
                  <input type="text" class="form-control" name="pekerjaan_p" value="<?=$row->pekerjaan_p?>" placeholder="Pekerjaan" >
                </div>
                <div class="form-group">
                  <label>No.Telpon</label>
                  <input type="text" class="form-control" name="notelpon_p" value="<?=$row->no_telpon_p?>" placeholder="No.Telpon" >
                </div>


          </div>
          <div class="box-footer">
                <button type="submit" name="<?=$page?>"class="btn btn-primary">Save</button>
                
              </div>
            </form>
        </div>
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
</div>

  <!-- /akhir isi dropdown -->
<script type="text/javascript">    
    <?php echo $jsArray; ?>  
    function changeValue(pemesan_id){  
    document.getElementById('nama').value = dtkonsumen[pemesan_id].nama;
    document.getElementById('noktp').value = dtkonsumen[pemesan_id].noktp;
    document.getElementById('alamat').value = dtkonsumen[pemesan_id].alamat;  
      
    };  
    </script> 

</section>