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
  <?php $this->view('alert')?>
    <div class="row">
        <!-- left column -->
        <div class="col-md-12">

          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              

            <!-- /.box-header -->
            <!-- form start -->
            <div class="col-md-6">             
            <form action="<?=site_url('pemesan/process')?>" method="post">
              <div class="box-body">
                <div class="form-group " >
                  <label>No.Booking</label>
                  <input type="hidden" name="id" value="<?=$row->pemesan_id?>">
                  
                  <input type="text" class="form-control " readonly name="nobooking" value="<?=$kodeunik; ?>" placeholder="no.booking" required>
                </div>
                
                <div class="form-group ">
                  <label>Kavling</label>
                  <select name="kavling" class="form-control">
                    <option value="">-Pilih Kavling-</option>
                    <?php foreach($unit->result() as $key =>$data) { ?>
                        <option value="<?=$data->unit_id?>"><?=$data->nama_unit?></option>
                    <?php } ?>
                    
                  </select>
                </div>

                <div class="form-group">
                  <label>No.KTP</label>
                  <input type="text" class="form-control" name="noktp" value="<?=$row->no_ktp?>"  placeholder="No.ktp" >
                </div>

                <div class="form-group ">
                  <label>Nama Pemesan</label>
                  <input type="text" class="form-control" name="namapemesan" value="<?=$row->nama_pemesan?>" placeholder="Nama Pemesan" required>
                </div>
                <div class="form-group">
                  <label>Alamat</label>
                  <textarea name="alamat" cols="20" rows="5" class="form-control" value="<?=$row->alamat?>" placeholder="Alamat" maxlength="100" ></textarea>
                </div>
                
                <div class="form-group ">
                  <label>Booking</label>
                  <input type="text" class="form-control" name="booking" value="<?=$row->booking?>" placeholder="Uang Booking" required>
                </div>
                
                <div class="form-group ">
                  <label>Deadline</label>
                  <input type="date" class="form-control datepicker" name="bataswaktu" value="<?=$row->deadline?>" placeholder="Deadline" required>
                </div>
                <input type="hidden" name="bayar" value="2">
            
                
                
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" name="<?=$page?>"class="btn btn-primary">Save</button>
              </div>
            </form>
          </div>
          </div>
          </div>
</div>


          <!-- form posisi kanan -->




  

</section>