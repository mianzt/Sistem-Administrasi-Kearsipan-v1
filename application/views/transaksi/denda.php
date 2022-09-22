<section class="content-header">
      <h1>
        
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i></a></li>
        <li class="active">user</li>

        
      </ol>
</section>

<section class="content">
    <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">PEMBATALAN</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form action="<?=site_url('denda/process')?>" method="post">
              <div class="box-body">
                
                
                <div class="col-md-4">
                <div class="form-group">
                  <label>Alasan</label>
                  <select name="alasan" class="form-control">

                    <option value="1" <?=set_value('alasan')== 1? "selected" : null?>>Ditolak Bank</option>
                    <option value="2" <?=set_value('alasan')== 2? "selected" : null?>>Mengundurkan diri</option>
                                        
                  </select>
                  
                </div>
                <div class="form-group">
                  <label>Nama</label>
                  <input type="hidden" name="id" >
                  <input type="text"  class="form-control" name="nama" value="<?=$row->nama?>" placeholder="Nama" >
                </div>
                <div class="form-group">
                  <label>Kavling</label>
                  <input type="text"  class="form-control" name="kavling" value="<?=$row->nama_unit?>" placeholder="Kavling" >
                </div>
                <div class="form-group">
                  <label>Uang Booking</label>
                  <input type="text"  class="form-control" name="uangbooking" value="<?=$row->booking?>" placeholder="uangbooking" readonly >
                </div>

                <div class="form-group">
                  <label>Uang Muka</label>
                  <input type="text"  class="form-control" name="uangmuka" value="<?=$row->uang_muka?>" id="uangmuka" onkeyup="sum();"  placeholder="Uang Muka" >
                  
                </div>
                <div class="form-group">
                  <label>Denda Pembatalan(10%)</label>
                  <input type="text"  class="form-control" name="jml_denda" id="jml_denda"  onkeyup="sum()  placeholder="Denda" readonly>
                </div>
                
                
              </div>

            </div>

              <!-- /.box-body -->
              <div class="box-footer ">
                <button type="submit" name="add" class="btn btn-primary col-md2">Save</button>
              </div>
              
            </form>
          </div>
</div>


          <!-- form posisi kanan -->


<script>

function sum() {
      var txtFirstNumberValue = document.getElementById('uangmuka').value;
      var txtSecondNumberValue = 0.1;
       
      var result = parseInt(txtFirstNumberValue) * txtSecondNumberValue;
      if (!isNaN(result)) {
         document.getElementById('jml_denda').value = result;
      }
}
</script>

  

</section>