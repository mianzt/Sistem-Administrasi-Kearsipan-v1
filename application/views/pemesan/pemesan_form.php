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
                  <input type="hidden" name="status" value="1">
                  
                  <input type="text" class="form-control " readonly name="nobooking" value="<?=$kodeunik; ?>" placeholder="no.booking" required>
                </div>
                
                <div class="form-group ">
                  <label>Kavling</label>
                  <select name="kavling" class="form-control select2" onchange="changeValue(this.value)" required>
                    <option value="">-Pilih Kavling-</option>
                    <?php 
                    $jsArray = "var dtunit = new Array();\n"; 

                    foreach($unit->result() as $key =>$data) { ?>
                        <option value="<?=$data->unit_id?>"><?=$data->nama_unit?>--(<?=$data->status == 1?"Sudah Dipesan" : "Tersedia"?>)</option >
                    <?php 
                    $jsArray .= "dtunit['" . $data->unit_id . "'] = {booking:'" . addslashes($data->booking) . "'
                    
                      };\n"; 



                    } ?>
                    
                  </select>
                </div>

                <div class="form-group">
                  <label>No.KTP</label>
                  <input type="text" class="form-control" maxlength="16"  onkeypress="return hanyaAngka(event, false)" name="noktp" value="<?=$row->no_ktp?>"  placeholder="No.ktp" minlength="16">
                </div>

                <div class="form-group ">
                  <label>Nama Pemesan</label>
                  <input type="text" class="form-control" name="namapemesan" value="<?=$row->nama_pemesan?>" placeholder="Nama Pemesan" required="">
                </div>
                <div class="form-group">
                  <label>Alamat</label>
                  <textarea name="alamat" cols="20" rows="5" class="form-control" value="<?=$row->alamat?>" placeholder="Alamat" maxlength="100" ></textarea>
                </div>
                
                <div class="form-group ">
                  <label>Booking</label>
                  <input type="text" onkeypress="return hanyaAngka(event, false)" class="form-control " name="booking" id="booking" value="<?=$row->booking?>" placeholder="Uang Booking" readonly>
                </div>
                
                <div class="form-group ">
                  <label>Deadline Uang Muka</label>
                  <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" class="form-control datepicker" name="bataswaktu" value="<?=$row->deadline?>" placeholder="Deadline" required>
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

<script type="text/javascript">    
    <?php echo $jsArray; ?>  
    function changeValue(unit_id){  
    document.getElementById('booking').value = dtunit[unit_id].booking;
      
      
    };  
    </script>


  

</section>

