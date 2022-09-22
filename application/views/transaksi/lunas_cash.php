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
                  
                  <input type="text" class="form-control " readonly name="notransaksi" value="<?=$kodeunik; ?>">

                </div>             
              <div class="form-group">
                  <label>Sisa Pembayaran</label>
                  <input type="text" class="form-control" id="sisa" onkeyup="sum();"name=""   value="<?=$row->totalbayar?>" readonly >
                  <input type="hidden" name="id" value="<?=$row->transaksi_id?>">
                </div>
                <label>Bayar</label>
                  <input type="text" class="form-control" id="bayar" onkeyup="sum();" name="bayar"    placeholder="" >
                  <input type="hidden" class="form-control" id="total"  name="totalbayar"    placeholder="" >

                  <input type="hidden" class="form-control " name="statusbayar" id="statusbayar" value="2">
                  
                </div>

                                
                

            
                
                
             
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" name="<?=$page?>"class="btn btn-primary">Bayar</button>
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
      var txtFirstNumberValue = document.getElementById('sisa').value;
      var txtSecondNumberValue = document.getElementById('bayar').value;
       
      var result = parseInt(txtFirstNumberValue) - parseInt(txtSecondNumberValue);
      if (!isNaN(result)) {
         document.getElementById('total').value = result;
      }
}
</script>

</section>
  

