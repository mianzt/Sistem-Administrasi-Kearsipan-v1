<section class="content-header">
      <h1>
        
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i></a></li>
        <li class="active">Pelunasan Cash</li>

        
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
            <form action="<?=site_url('transaksi/process')?>" method="post">
              <div class="box-body">
                
                            
                 <div class="form-group " >
                  <label>No transaksi</label>
                  <input type="hidden" name="id" value="<?=$row->transaksi_id?>">
                  <input type="text" class="form-control " readonly name="notransaksi" value="<?=$kodeunik; ?>" placeholder="no.booking" required>

                </div>

                <div class="form-group">
                  <label>No.Booking</label>
                  
                  <select name="nobooking" value="<?=$row->pemesan_id?>" id="booking" onchange="changeValue1(this.value)" class="form-control" >
                    <option value="">-Pilih No.Booking-</option>
                    <?php 
                    $jsArray1 = "var dtkonsumen = new Array();\n";
                     foreach($pemesan->result() as $key =>$data) { ?>
                        <option value="<?=$data->pemesan_id?>" <?=$data->pemesan_id == $row->pemesan_id? "selected" : null?> ><?=$data->no_booking?></option>

                    <?php 
                    $jsArray1 .= "dtkonsumen['" . $data->pemesan_id . "'] = {nama:'" . addslashes($data->nama_pemesan) . "',noktp:'".addslashes($data->no_ktp)."'
                      ,alamat:'".addslashes($data->alamat)."'
                      ,kavling:'".addslashes($data->unit_id)."'
                      };\n"; 
                     } ?>
                    
                  </select>
                </div>

                <div class="form-group ">
                  <label>Kavling</label>
                  <select name="kavling" value="<?=$row->unit_id?>" class="form-control" id="kavling" onchange="changeValue(this.value)">
                    
                    <?php
                    $jsArray = "var dtunit = new Array();\n"; 

                    foreach($unit->result() as $key =>$data) { ?>
                        <option value="<?=$data->unit_id?>"<?=$data->unit_id == $row->unit_id? "selected" : null?>><?=$data->nama_unit?></option>
                    <?php  
                    $jsArray .= "dtunit['" . $data->unit_id . "'] = {harga:'" . addslashes($data->harga) . "'
                    ,uangmuka:'" . addslashes($data->uang_muka) . "'
                      };\n"; 


                   } ?>
                    
                  </select>
                </div>

               



                <div class="form-group">
                  <label>No.KTP</label>
                  <input type="text" class="form-control" id="noktp" name="noktp"   value="<?=$row->no_ktp?>" placeholder="No.ktp" >
                </div>

                                
                <div class="form-group ">
                  <label>Harga</label>
                  <input type="text" onkeypress="return hanyaAngka(event, false)" class="form-control" name="harga" id="harga" onkeyup="sum();" placeholder="Rp." readonly>
                </div>
                <div class="form-group ">
                  <label>Uang Muka</label>
                  <input type="text" onkeypress="return hanyaAngka(event, false)" class="form-control" name="uangmuka"  id="uangmuka" onkeyup="sum();" placeholder="Rp." >
                </div>
                
                <div class="form-group ">
                  <label>Total Pembayaran</label>
                  <input type="text" class="form-control " value="<?=$row->totalbayar?>"id="total" name="total"  placeholder="Rp." readonly>
                </div>
                <input type="hidden" name="pembayaran" value="2">

            
                
                
             
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
    document.getElementById('harga').value = dtunit[unit_id].harga;
    document.getElementById('uangmuka').value = dtunit[unit_id].uangmuka;
      
      
    };  
    </script>

    <script type="text/javascript">    
    <?php echo $jsArray1; ?>  
    function changeValue1(pemesan_id){  
    document.getElementById('nama').value = dtkonsumen[pemesan_id].nama;
    document.getElementById('noktp').value = dtkonsumen[pemesan_id].noktp;
    document.getElementById('alamat').value = dtkonsumen[pemesan_id].alamat;
    document.getElementById('kavling').value = dtkonsumen[pemesan_id].kavling;  
      
    };  
    </script>  

<script>

function sum() {
      var txtFirstNumberValue = document.getElementById('harga').value;
      var txtSecondNumberValue = document.getElementById('uangmuka').value;
       
      var result = parseInt(txtFirstNumberValue) + parseInt(txtSecondNumberValue);
      if (!isNaN(result)) {
         document.getElementById('total').value = result;
      }
}
</script>

</section>
  

