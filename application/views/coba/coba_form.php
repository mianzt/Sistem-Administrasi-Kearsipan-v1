
<section class="content-header">
      <h1>Data kavling
        
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i></a></li>
        <li class="active">coba</li>

        
      </ol>
</section>

<section class="content">
		<div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <!-- <h3 class="box-title"><?=ucfirst($page)?> kavling</h3> -->
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form action="<?=site_url('coba/process')?>" method="post">
              <div class="box-body">
                <div class="form-group">
                  <label>Nama Kavling</label>
                  <input type="hidden" name="id" value="<?=$row->coba_id?>">
                  <input type="text" class="form-control" name="n_kavling" value="<?=$row->nama_coba?>" placeholder="Nama Kavling" required>
                </div>
                <div class="form-group">
                  <label>Type</label>
                  <input type="text" class="form-control" name="type" id="type"   value="<?=$row->tipe?>" placeholder="Tipe rumah" required>
                </div>
                <div class="form-group">
                  <label>Luas Tanah</label>
                  <input type="text" class="form-control" name="l_tanah" id="l_tanah"  value="<?=$row->luas_tanah?>" placeholder="Luas Tanah" required>
                </div>
                <div class="form-group">
                  <label>Harga</label>
                  <input type="text" class="form-control" name="hrg" id="hrg"  value="<?=$row->harga?>" placeholder="Harga" required>
                </div>
                <div class="form-group">
                  <label>Booking</label>
                  <input type="text" class="form-control" name="booking" value="<?=$row->booking?>" placeholder="booking" required>
                </div>
                <div class="form-group">
                  <label>Uang Muka</label>
                  <input type="text" class="form-control" name="u_muka" value="<?=$row->uang_muka?>" placeholder="uang muka" required>
                </div>
                <div class="form-group">
                  <label>Bantuan</label>
                  
                  <input type="text" class="form-control" name="bantuan" value="<?=$row->bantuan?>" placeholder="bantuan" required>
                </div>
                <div class="form-group">
                  <label>Plafon</label>
                 
                  <input type="text" class="form-control" name="plafon" value="<?=$row->plafon_k?>" placeholder="plafon" required>
                </div>

<!-- <form class="form-inline">
<div class="form-group">
 <p><b>Kelebihan tanah</b> </p>
 <input type="text" name="angka1" id="" class="a2" onkeyup="hitung2();" required="" size="10"  >
 </div>
 <div class="form-group">
 <p><b>Harga</b></p>
 <input type="text" name="hasil" id="" class="c2"  size="40">
 </div>
</form> -->
 
 
 </div>
                
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" name="<?=$page?>"class="btn btn-primary">Save</button>
              </div>
            </form>
          </div>
</div>


          <!-- form posisi kanan -->

<div id="content">
<script src="http://code.jquery.com/jquery-latest.min.js"></script>
<script>
function hitung2() {
var a = $(".a2").val();
var b = 1000000;
c = a * b; //a kali b
$(".c2").val(c);
}

</script>

 
 
  

</section>

