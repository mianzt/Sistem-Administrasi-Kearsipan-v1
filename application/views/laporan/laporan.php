<title>Laporan Penjualan</title>
<section class="content-header">
      <h1>
        
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i></a></li>
        <li class="active">Laporan</li>

        
      </ol>
</section>

<section class="content">
  <?php $this->view('alert')  ?>  
    <div class="box">
      <div class="box-header">
        <h3 class="box-title"> <b>LAPORAN PENJUALAN</b></h3>
        
        
      </div>
     
        <div class="col-md-12"></div>
        <div class="box box-primary">
            <div class="box-header with-border">
              
            <div class="col-md-offset-2">             
            <form action="<?=site_url('laporan/filterdata')?>" method="get">
              <div class="col-md-4">
              <div class="form-group">
                <label>Dari Tanggal</label>
                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                <input type="text" class="form-control datepicker" name="tgl_awal" id="tgl_awal"   " placeholder="Tanggal awal" >                   

              </div>

        </div>
        </div>
          
          </div> 
          <!-- akhir col offset -->
          <div class="form-group col-md-3">
                <label>Sampai Tanggal</label>
                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                <input type="text" class="form-control datepicker" name="tgl_akhir" id="tgl_akhir"   " placeholder="Tanggal akhir" >                
              <div class="col-md-offset-12">
              <button type="submit" name=""class="btn btn-primary">Cari</button>
            </div>                
              </div>
              
          </form>
          </div>
          </div>



      <div class="box-body table-responsive">
        
        <table class="table table-bordered table striped" id="table2">
          <thead>
            <tr class="text-center">
              <th>No.</th>
              <th>No.Transaksi</th>
              <th>Nama Pemesan</th>
              <th>Unit</th>
              
              <th>Tanggal Pembelian</th>                
              <th>Pembelian</th>
              <th>Lama Angsuran</th>
              <th>Piutang</th>              
              
            </tr>
          </thead>
          <tbody>
            <?php $no=1;
            foreach($row->result() as $key => $data) { ?>
            <tr >
              <td><?=$no++?></td>
              <td><?=$data->no_transaksi?></td>
              <td><?=$data->nama?></td>
              <td><?=$data->nama_unit?></td>
              
              <td><?=date('d F Y', strtotime($data->tanggal_transaksi));?></td>              
              <td><?=$data->pembayaran ==1?"CASH" : "KPR"?></td>
              <td><?=$data->angsuran?> Tahun</td>
              <td><?="Rp." .number_format($data->totalbayar,"0",",",".")?></td>

             
               
            
              
              
            </tr>
            <?php
              }?>
          </tbody>
        </table>
      </div>
    </div>
  </div>

</section>
