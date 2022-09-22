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
				<h3 class="box-title">Data Booking</h3>
				<div class="pull-right">
				<a href="<?=site_url('pemesan/add')?>" class="btn btn-primary btn-flat">
					<i class=" fa fa-plus"></i> Tambah Booking
				</a>
			</div>
				
			</div>
			<div class="box-body table-responsive">
				<table class="table table-bordered table striped" id="table1">
					<thead>
            <tr class="text-center">
              <th>No.</th>
              <th>No.Booking</th>
              <th>Tanggal Booking</th>
              <th>Nama Pemesan</th>
              <th>Unit</th>
              <th>Uang Booking</th>              
              <th>Deadline Uang Muka</th>
              
              
              <th class="text-center">Action</th>
            </tr>
          </thead>
          <tbody>
            <?php 
            $no = 1;
            foreach($row->result() as $key => $data) { ?>
            <tr >
              <td><?=$no++?></td>
              <td style="white-space: nowrap"><?=$data->no_booking?></td>
              <td><?=date('d F Y', strtotime($data->tanggal_booking));?></td>
              <td><?=$data->nama_pemesan?></td>
              <td><?=$data->nama_unit?></td>
              <td><?="Rp." .number_format($data->booking,"0",",",".")?></td>
              


              <td><?=date('d F Y', strtotime($data->deadline));?></td>


               <td class="text-center">
                <a href="<?=site_url('pemesan/cetak_kwitansi/' .$data->pemesan_id)?>"  class="btn btn-warning btn-xs"><i class="fa fa-print"></i>cetak
             
              </td>
            
              
              
            </tr>
            <?php
              }?>
          </tbody>
				</table>
			</div>
		</div>
  

</section>