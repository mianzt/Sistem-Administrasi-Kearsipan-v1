<section class="content-header">
      <h1>
        
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i></a></li>
        <li class="active">Arsip</li>

        
      </ol>
</section>

<section class="content">
    <div class="row">
      <div class="col-md-9">

          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
  
  

    <div class="nav-tabs-custom">
      <ul class="nav nav-tabs">
        <li class="active"><a href="#wiraswasta" data-toggle="tab">Wiraswasta</a></li>
        <li><a href="#pns" data-toggle="tab">PNS</a></li>
        <li><a href="#swasta" data-toggle="tab">Pegawai Swasta</a></li>
      </ul>
      <?php echo form_open_multipart('arsip/simpan_arsip');?>
        <div class="col-md-7">
        <div class="form-group">
                  <label>Nama</label>                  
                  <input type="text" class="form-control" name="nama_konsumen"  placeholder="Nama konsumen" >
                </div>
              </div>

      

        <div class="tab-pane" id="swasta">
          <div class="col-md-7">
            <div class="form-group">
                  <label>KTP</label>
                 
                  <input type="file" class="form-control" name="ktp" value="<?php echo set_value('ktp'); ?>" 
                </div>
                <div class="form-group">
                  <label>Kartu Keluarga</label>
                 
                  <input type="file" class="form-control" name="kk" value="<?php echo set_value('kk'); ?>"  >
                </div>
                <div class="form-group">
                  <label>Akta Nikah</label>                 
                  <input type="file" class="form-control" name="akta_nikah" value="<?php echo set_value('akta_nikah'); ?>" >
                </div>
                <div class="form-group">
                  <label>Foto</label>                 
                  <input type="file" class="form-control" name="foto" value="<?php echo set_value('foto'); ?>" >
                </div>
                <div class="form-group">
                  <label>NPWP</label>                 
                  <input type="file" class="form-control" name="npwp" value="<?php echo set_value('npwp'); ?>" >
                </div>
                <div class="form-group">
                  <label>Kartu Pegawai</label>                 
                  <input type="file" class="form-control" name="k_pegawai" value="<?php echo set_value('k_pegawai'); ?>" >
                </div>
                <div class="form-group">
                  <label>SK Pertama</label>                 
                  <input type="file" class="form-control" name="skpertama" value="<?php echo set_value('skpertama'); ?>" >
                </div>
                <div class="form-group">
                  <label>Slip Gaji</label>                 
                  <input type="file" class="form-control" name="slipgaji" value="<?php echo set_value('slipgaji'); ?>" >
                </div>
                 <div class="form-group">
                  <label>SK Bekerja</label>                 
                  <input type="file" class="form-control" name="skbekerja" value="<?php echo set_value('skbekerja'); ?>" >
                </div>                           
            
            
         
        </div>
      </div>
       


        <div class="tab-pane" id="pns">
         <div class="col-md-7">
           <div class="form-group">
                  <label>KTP</label>
                 
                  <input type="file" class="form-control" name="ktp" value="<?php echo set_value('ktp'); ?>" >
                </div>
                <div class="form-group">
                  <label>Kartu Keluarga</label>
                 
                  <input type="file" class="form-control" name="kk" value="<?php echo set_value('kk'); ?>"  >
                </div>
                <div class="form-group">
                  <label>Akta Nikah</label>                 
                  <input type="file" class="form-control" name="akta_nikah" value="<?php echo set_value('akta_nikah'); ?>" >
                </div>
                <div class="form-group">
                  <label>Foto</label>                 
                  <input type="file" class="form-control" name="foto" value="<?php echo set_value('foto'); ?>" >
                </div>
                                   
                   
                      
            
        </div>
      </div>

<div class="tab-content">

        <div class="active tab-pane" id="wiraswasta">
          <div class="col-md-7">
            <div class="form-group">
                  <label>KTP</label>
                 
                  <input type="file" class="form-control" name="ktp" value="<?php echo set_value('ktp'); ?>" >
                </div>
                <div class="form-group">
                  <label>Kartu Keluarga</label>
                 
                  <input type="file" class="form-control" name="kk" value="<?php echo set_value('kk'); ?>"  >
                </div>
                <div class="form-group">
                  <label>Akta Nikah</label>                 
                  <input type="file" class="form-control" name="akta_nikah" value="<?php echo set_value('akta_nikah'); ?>" >
                </div>
                <div class="form-group">
                  <label>Foto</label>                 
                  <input type="file" class="form-control" name="foto" value="<?php echo set_value('foto'); ?>" >
                </div>
                <div class="form-group">
                  <label>NPWP</label>                 
                  <input type="file" class="form-control" name="npwp" value="<?php echo set_value('npwp'); ?>" >
                </div>
             
                <div class="form-group">
                  <label>SK Usaha</label>                 
                  <input type="file" class="form-control" name="skusaha" value="<?php echo set_value('skusaha'); ?>" >
                </div>
                <div class="form-group">
                  <label>SIUP</label>                 
                  <input type="file" class="form-control" name="siup" value="<?php echo set_value('siup'); ?>" >
                </div> 
                <div class="form-group">
                  <label>Keterangan Desa</label>                 
                  <input type="file" class="form-control" name="ket_desa" value="<?php echo set_value('ket_desa'); ?>" >
                </div> 
                <div class="form-group">
                  <label>Rekening Koran</label>                 
                  <input type="file" class="form-control" name="rek_koran" value="<?php echo set_value('skusaha'); ?>" >
                </div>
                <div class="form-group">
                  <label>Neraca</label>                 
                  <input type="file" class="form-control" name="neraca" value="<?php echo set_value('neraca'); ?>" >
                </div>                     
            
            
         
        </div>
      </div>

      </div>
      <div class="form-group">
              <div class=" col-sm-8">
                <button type="submit" class="btn btn-danger">Submit</button>
              </div>
            </div>
          </form>
    </div>

    
  </div>


</div></div>
  

</section>