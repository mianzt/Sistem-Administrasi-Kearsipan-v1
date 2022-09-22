<section class="content-header">
      


          <!-- awal pns -->
<div class="box">
        <div class="box-header with-border">
          <h3 class="box-title"><b>PNS</b></h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
          <!-- isi konten -->
          <div class="col-md-6">
            <?php echo form_open_multipart('arsip/simpan_arsip');?>             
            
              
                
                <div class="form-group">
                <label>Nama Konsumen</label>
                  <input type="hidden" name="kategoriarsip" value="PNS" >
                  <select name="nama_konsumen" class="form-control select2">
                    <option >--Input Nama Konsumen--</option>
                    <?php 
                    foreach($konsumen->result() as $key => $data) { ?> 
                        <option value="<?=$data->konsumen_id?>"><?=$data->nama_pemesan?>--(<?=$data->pekerjaan?>)</option>
                    <?php } ?>
                    </select>
                  </div>
                

                
             
              
            
                <div class="form-group">
                  <label>KTP</label>
                 
                  <input type="file" class="form-control" name="ktp" value="<?php echo set_value('ktp'); ?>" >
                </div>
                <div class="form-group">
                  <label>Kartu Keluarga</label>
                 
                  <input type="file" class="form-control" name="kk" value="<?php echo set_value('kk'); ?>"  >
                </div>
                <div class="form-group">
                  <label>Buku Nikah</label>                 
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
                  <label>SK pertama</label>                 
                  <input type="file" class="form-control" name="skpertama" value="<?php echo set_value('skpertama'); ?>" >
                </div>
                 <div class="form-group">
                  <label>Slip Gaji</label>                 
                  <input type="file" class="form-control" name="slipgaji" value="<?php echo set_value('slipgaji'); ?>" >
                </div>
                                              
                
                
             
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Upload</button>
              </div>
            </form>
       
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->
      <!-- akhir pns -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title"><b>Pegawai Swasta</b></h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
          <!-- isi konten -->
          <div class="col-md-6">
            <?php echo form_open_multipart('arsip2/simpan_arsip');?>             
            
              
                <div class="form-group">
                <label>Nama Konsumen</label>
                  <input type="hidden" name="kategoriarsip" value="PEGAWAI SWASTA" >
                  <select name="nama_konsumen" class="form-control select2">
                    <option >--Input Nama Konsumen--</option>
                    <?php 
                    foreach($konsumen->result() as $key => $data) { ?> 
                        <option value="<?=$data->konsumen_id?>"><?=$data->nama_pemesan?>--(<?=$data->pekerjaan?>)</option>
                    <?php } ?>
                    </select>
                  </div>
                
              
            
                <div class="form-group">
                  <label>KTP</label>
                 
                  <input type="file" class="form-control" name="ktp" value="<?php echo set_value('ktp'); ?>" >
                </div>
                <div class="form-group">
                  <label>Kartu Keluarga</label>
                 
                  <input type="file" class="form-control" name="kk" value="<?php echo set_value('kk'); ?>"  >
                </div>
                <div class="form-group">
                  <label>Buku Nikah</label>                 
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
                  <label>SK pertama</label>                 
                  <input type="file" class="form-control" name="skpertama" value="<?php echo set_value('skpertama'); ?>" >
                </div>
                 <div class="form-group">
                  <label>Slip Gaji</label>                 
                  <input type="file" class="form-control" name="slipgaji" value="<?php echo set_value('slipgaji'); ?>" >
                </div>
                <div class="form-group">
                  <label>Surat Keterangan Bekerja</label>                 
                  <input type="file" class="form-control" name="skbekerja" value="<?php echo set_value('skbekerja'); ?>" >
                </div>
                                              
                
                
             
              <!-- /.box-body -->

              
                <button type="submit" class="btn btn-primary">Upload</button>
              
            </form>
          </div>
          
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
         
        </div>
        <!-- /.box-footer-->
      </div>
      <div></div>
      <!-- /.box -->
      <!-- akhir Pegawai swasta -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title"><b>Wiraswasta</b></h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
          <div class="col-md-6">
            <?php echo form_open_multipart('arsip3/simpan_arsip');?>             
            
              
                <div class="form-group">
                <label>Nama Konsumen</label>
                  <input type="hidden" name="kategoriarsip" value="WIRASWASTA" >
                  <select name="nama_konsumen" class="form-control select2">
                    <option >--Input Nama Konsumen--</option>
                    <?php 
                    foreach($konsumen->result() as $key => $data) { ?> 
                        <option value="<?=$data->konsumen_id?>"><?=$data->nama_pemesan?>--(<?=$data->pekerjaan?>)</option>
                    <?php } ?>
                    </select>
                  </div>
                
              
            
                <div class="form-group">
                  <label>KTP</label>
                 
                  <input type="file" class="form-control" name="ktp" value="<?php echo set_value('ktp'); ?>" >
                </div>
                <div class="form-group">
                  <label>Kartu Keluarga</label>
                 
                  <input type="file" class="form-control" name="kk" value="<?php echo set_value('kk'); ?>"  >
                </div>
                <div class="form-group">
                  <label>Buku Nikah</label>                 
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
                  <label>Surat Keterangan Usaha</label>                 
                  <input type="file" class="form-control" name="sku" value="<?php echo set_value('sku'); ?>" >
                </div>
                <div class="form-group">
                  <label>SIUP</label>                 
                  <input type="file" class="form-control" name="siup" value="<?php echo set_value('siup'); ?>" >
                </div>
                 <div class="form-group">
                  <label>Keterangan Penhasilan Dari Desa</label>                 
                  <input type="file" class="form-control" name="ket_desa" value="<?php echo set_value('Ket_desa'); ?>" >
                </div>
                <div class="form-group">
                  <label>Rekening Koran</label>                 
                  <input type="file" class="form-control" name="rek_koran" value="<?php echo set_value('rek_koran'); ?>" >
                </div>
                <div class="form-group">
                  <label>Neraca</label>                 
                  <input type="file" class="form-control" name="neraca" value="<?php echo set_value('neraca'); ?>" >
                </div>
                                              
                
                
             
              <!-- /.box-body -->

              
                <button type="submit" class="btn btn-primary">Upload</button>
              
            </form>
          </div>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->
      <!-- akhir swasta -->
  

</section>