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
	<?php $this->view('alert')  ?>	
		<div class="box">
			<div class="box-header">
				<h3 class="box-title"> <b>DATA TRANSAKSI</b></h3>
				
				
			</div>
     
        <div class="col-md-12"></div>
        <div class="box box-primary">
            <div class="box-header with-border">
              
            <div class="col-md-offset-2">             
            <form action="<?=site_url('transaksi/filterdata')?>" method="get">
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
        
				<table class="table table-bordered table striped" id="table1">
					<thead>
            <tr align="center" style="white-space: nowrap">
              <th>No.</th>
              <th>No.Transaksi</th> 
              <th style="white-space: nowrap">Tanggal Transaksi</th>              
              <th>Nama Pemesan</th>
              <th>Unit</th>
              <th>Harga Unit(Rp)</th>
              <th>Uang Muka(Rp)</th>    
            
              <th>Pembelian</th>
              <th>Lama Angsuran</th>              
              <th>Kelebihan Tanah</th>
              <th>Penambahan Bangunan</sup></th> 
              <th>Sisa Pembayaran(Rp)</th>
              <th>Tanggal Pelunasan</th>
              <th>Status Pembayaran</th>             
              <th>Action</th>
              <th>Pelunasan</th>
            </tr>
          </thead>
          <tbody>
            <?php $no=1;
            foreach($row->result() as $key => $data) { ?>
            <tr>
              <td><?=$no++?></td>
              <td><?=$data->no_transaksi?></td>
              <td class="text-center" width="160px"><?=date('d F Y', strtotime($data->tanggal_transaksi));?></td>
              <td><?=$data->nama?></td>
              <td><?=$data->nama_unit?></td>
              <td><?=number_format($data->harga,"0",",",".")?></td>
              <td><?=number_format($data->uang_muka,"0",",",".")?></td>
             
                            
              <td><?=$data->pembayaran ==1?"CASH" : "KPR"?></td>
              <td><?=$data->angsuran?> Tahun</td>          
              <td width="180px"><?=$data->lebihtanah?>M<sup>2</sup> = <?=("Rp." .number_format($data->h_lebihtanah,"0",",","."))?></td>
              <td width="180px"><?=$data->lebihbangunan?>M<sup>2</sup> = <?=("Rp." .number_format($data->h_lebihbangunan,"0",",","."))?></td>
              <td width="100px"><?=number_format($data->totalbayar,"0",",",".")?></td>
              <td class="text-center" width="160px"><?=date('d F Y', strtotime($data->tanggal_pelunasan));?></td>
              <td><?=$data->totalbayar ==0?"Lunas" : "Berhutang"?></td>

             
               <td width="200px">
                <a href="<?=site_url('transaksi/cetak_dp/' .$data->transaksi_id)?>"  class="btn btn-warning btn-xs"><i class="fa fa-print"></i>Cetak
                <?php if($data->totalbayar != 0 ) { ?>
                <a href="<?=site_url('transaksi/lunascash/' .$data->transaksi_id)?>"  class="btn btn-primary btn-xs"><i class="fa fa-money"></i>Bayar
                <?php } ?>

                
                 <a href="<?=site_url('transaksi/denda/' .$data->transaksi_id)?>" onclick="return confirm('Yakin ingin Membatalkan?')" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i>Batal
              </td>
              <td><a href="<?=site_url('transaksi/cetak_lunas/' .$data->transaksi_id)?>"  class="btn btn-warning btn-xs"><i class="fa fa-print"></i>Cetak</td>
               
            
                            
            </tr>
            <?php
              }?>
          </tbody>
				</table>
			</div>
		</div>
  </div>

</section>
