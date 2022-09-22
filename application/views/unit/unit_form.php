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
            <form action="<?=site_url('unit/process')?>" method="post">
              <div class="box-body">
                <div class="form-group">
                  <label>Nama Kavling</label>
                  <input type="hidden" name="id" value="<?=$row->unit_id?>">
                  <input type="text" class="form-control" name="n_kavling" value="<?=$row->nama_unit?>" placeholder="Nama Kavling" >
                </div>
                <div class="form-group">
                  <label>Type</label>
                  <input type="text" class="form-control" name="type" id="type"   value="<?=$row->tipe?>" placeholder="Tipe rumah" >
                </div>
                <div class="form-group">
                  <label>Luas Tanah</label>
                  <input type="text" onkeypress="return hanyaAngka(event, false)" class="form-control" name="l_tanah" id="l_tanah"  value="<?=$row->luas_tanah?>" placeholder="Luas Tanah" >
                </div>
                <div class="form-group">
                  <label>Harga</label>
                  <input type="text" onkeyup="sum1();" onkeypress="return hanyaAngka(event, false)" class="form-control" name="hrg" id="hrg"  value="<?=$row->harga?>" placeholder="Harga" >
                </div>
                <div class="form-group">
                  <label>Booking</label>
                  <input type="text" class="form-control" name="booking" value="<?=$row->booking?>" onkeypress="return hanyaAngka(event, false)" placeholder="booking" >
                </div>
                <div class="form-group">
                  <label>Uang Muka</label>
                  <input type="text" class="form-control" id="u_muka" name="u_muka" value="<?=$row->uang_muka?>" onkeyup="sum1();" onkeypress="return hanyaAngka(event, false)" placeholder="uang muka" >
                </div>
                
                    <input type="hidden" name="status" value="0">
                    <div class="form-group">
                    <label>Harga Total</label>
                  
                  <input type="text" class="form-control" id="totalunit" name="totalunit"  placeholder="Total">
                </div>
                              
                
                
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
function sum1() {
      var txtFirstNumberValue = document.getElementById('hrg').value;
      var txtSecondNumberValue = document.getElementById('u_muka').value;
      
      var result = parseInt(txtFirstNumberValue) + parseInt(txtSecondNumberValue);
      if (!isNaN(result)) {
         document.getElementById('totalunit').value = result;
      }
}
</script>

  

</section>