<section class="content-header">
      <h1>
        
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i></a></li>
        <li class="active">pemesan</li>

        
      </ol>
</section>

<section class="content">
    <div class="row">
        <!-- left column -->
        <div class="col-md-12">

          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              

            <!-- /.box-header -->
            <!-- form start -->
            <div class="col-md-6">
            <?php echo form_open_multipart('arsip/simpan_arsip');?>             
            
              <div class="box-body">
                <div class="form-group">
                  <label>Nama</label>
                  
                  <input type="text" class="form-control" name="nama_konsumen"  placeholder="Nama konsumen" >
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
                  <input type="file" class="form-control" name="bk_nikah" value="<?php echo set_value('bk_nikah'); ?>" >
                </div>
                <div class="form-group">
                  <label>Foto</label>                 
                  <input type="file" class="form-control" name="foto" value="<?php echo set_value('foto'); ?>" >
                </div>
                <div class="form-group">
                  <label>NPWP</label>                 
                  <input type="file" class="form-control" name="npwp" value="<?php echo set_value('npwp'); ?>" >
                </div>                              
                
                
             
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Upload</button>
              </div>
            </form>
          </div>
          </div>
          </div>
</div>


          <!-- form posisi kanan -->




  

</section>