<section class="content-header">
      <h1>
        
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i></a></li>
        <li class="active">Bayar KPR</li>

        
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
                      ,uangmuka:'".addslashes($data->uangmuka)."'
                      ,harga:'" . addslashes($data->totalunit) . "'
                      };\n"; 
                     } ?>
                    
                  </select>
                </div>

                <div class="form-group ">
                  <label>Kavling</label>
                  <select name="kavling" class="form-control" id="kavling" onchange="changeValue(this.value)" readonly>
                    <option value="">-Pilih Kavling-</option>
                    <?php
                    $jsArray = "var dtunit = new Array();\n"; 

                    foreach($unit->result() as $key =>$data) { ?>
                        <option value="<?=$data->unit_id?>"<?=$data->unit_id == $row->unit_id? "selected" : null?>><?=$data->nama_unit?>--(<?=$data->status == 1?"Sudah Dipesan" : "Tersedia"?>)</option>
                    <?php  
                    $jsArray .= "dtunit['" . $data->unit_id . "'] = {
                      
                      };\n"; 


                   } ?>
                    
                  </select>
                </div>

                <div class="form-group ">
                  <label>Lama Angsuran</label>
              
                  <select name="angsuran" class="form-control" value="<?=$row->angsuran?>">
                    <option value="10" <?=set_value('angsuran')== 10? "selected" : null?>>10 Tahun</option>
                    <option value="15" <?=set_value('angsuran')== 15? "selected" : null?>>15 Tahun</option>
                    <option value="20" <?=set_value('angsuran')== 20? "selected" : null?>>20 Tahun</option>
                    
                  </select>
                </div>




                <div class="form-group">
                  <label>No.KTP</label>
                  <input type="text" class="form-control" id="noktp" name="noktp"   placeholder="No.ktp" readonly>
                </div>

                <div class="form-group ">
                  <label>Nama </label>
                  <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Pemesan" readonly required>
                </div>
                <div class="form-group">
                  <label>Alamat</label>
                  <textarea name="alamat" cols="20" rows="5" id="alamat" class="form-control"  placeholder="Alamat" maxlength="100" readonly ></textarea>
                </div>
                
                <div class="form-group ">
                  <label>Harga Kavling</label>
                  <input type="text" class="form-control" name="harga" id="harga" onkeyup="sum();" placeholder="Rp." readonly>
                </div>
                
                                

              <div class="box-body">
              <div class="row">
                <div class="col-xs-5">
                  <label>Kelebihan Tanah</label>                  
                  <input type="text" onkeypress="return hanyaAngka(event, false)" class="form-control" name="lebihtanah"  id="lebihtanah" onkeyup="sum1();" placeholder="Meter" >
                  <input type="hidden" name="h_lebihtanah" onkeyup="sum1();" id="h_lebihtanah" value="1000000">
                </div>
                <div class="col-xs-4">
                  <label>Harga</label>                  
                  <input type="text" onkeypress="return hanyaAngka(event, false)" class="form-control" name="h_totallebihtanah"  id="h_totallebihtanah" onkeyup="sum();" placeholder="Rp."  >
                </div>
                
              </div>
            </div>

            <div class="box-body">
              <div class="row">
                <div class="col-xs-5">
                  <label>Tambah Bangunan</label>                  
                  <input type="text" onkeypress="return hanyaAngka(event, false)" class="form-control" name="lebihbangunan"  id="lebihbangunan" onkeyup="sum2();" placeholder="Meter" >
                  <input type="hidden" name="h_lebihbangunan" onkeyup="sum2();" id="h_lebihbangunan" value="1750000">
                </div>
                <div class="col-xs-4">
                  <label>Harga</label>                  
                  <input type="text" onkeypress="return hanyaAngka(event, false)" onkeyup="sum();" class="form-control" name="h_totallebihbangunan"  id="h_totallebihbangunan"  placeholder="Rp."  >
                </div>
                
              </div>
            </div>

            <div class="form-group ">
                  <label>Uang Muka</label>
                  <input type="text" onkeypress="return hanyaAngka(event, false)" class="form-control" name="uangmuka"  id="uangmuka" onkeyup="sum();"  onkeyup="sum3();"  readonly >
                </div>

                <div class="form-group ">
                  <label>Sisa Bayar</label>
                  <input type="text" class="form-control " onkeyup="sum3();" id="total" name="total"  placeholder="Rp." readonly>
                </div>
                <input type="hidden" name="pembayaran" value="2">
                <input type="hidden" class="form-control " name="sisa_cash" id="sisa_cash">
                <input type="hidden" class="form-control " name="statusbayar" id="statusbayar" value="1">

                               
                
                
                
                
             
              <!-- /.box-body -->

              <div class="form-group">
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
    
    
      
      
    };  
    </script>

    <script type="text/javascript">    
    <?php echo $jsArray1; ?>  
    function changeValue1(pemesan_id){  
    document.getElementById('nama').value = dtkonsumen[pemesan_id].nama;
    document.getElementById('noktp').value = dtkonsumen[pemesan_id].noktp;
    document.getElementById('alamat').value = dtkonsumen[pemesan_id].alamat;
    document.getElementById('kavling').value = dtkonsumen[pemesan_id].kavling;  
    document.getElementById('uangmuka').value = dtkonsumen[pemesan_id].uangmuka;
    document.getElementById('harga').value = dtkonsumen[pemesan_id].harga; 
    };  
    </script>  

<script>

function sum() {
      var txtFirstNumberValue = document.getElementById('harga').value;
      
       var txtSecondNumberValue = document.getElementById('uangmuka').value;
       var txtThirdNumberValue = document.getElementById('h_totallebihbangunan').value;
       var txtFourthNumberValue = document.getElementById('h_totallebihtanah').value;
      var result = parseInt(txtFirstNumberValue) - parseInt(txtSecondNumberValue)+parseInt(txtThirdNumberValue)+parseInt(txtFourthNumberValue);
      if (!isNaN(result)) {
         document.getElementById('total').value = result;
      }
}
</script>
<script>

function sum1() {
      var txtFirstNumberValue = document.getElementById('lebihtanah').value;
      var txtSecondNumberValue = document.getElementById('h_lebihtanah').value;
      
      var result = parseInt(txtFirstNumberValue) * parseInt(txtSecondNumberValue);
      if (!isNaN(result)) {
         document.getElementById('h_totallebihtanah').value = result;
      }
}
</script>

<script>

function sum2() {
      var txtFirstNumberValue = document.getElementById('lebihbangunan').value;
      var txtSecondNumberValue = document.getElementById('h_lebihbangunan').value;
      
      var result = parseInt(txtFirstNumberValue) * parseInt(txtSecondNumberValue);
      if (!isNaN(result)) {
         document.getElementById('h_totallebihbangunan').value = result;
      }
}
</script>
<script>

function sum3() {
      var txtFirstNumberValue = document.getElementById('total').value;
      var txtSecondNumberValue = document.getElementById('uangmuka').value;
      
      var result = parseInt(txtFirstNumberValue) - parseInt(txtSecondNumberValue);
      if (!isNaN(result)) {
         document.getElementById('sisa_cash').value = result;
      }
}
</script>

</section>

