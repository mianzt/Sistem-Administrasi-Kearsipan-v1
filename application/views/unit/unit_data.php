<section class="content-header">
      <h1>
        
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i></a></li>
        <li class="active">Unit</li>

        
      </ol>
</section>

<section class="content">
	<?php $this->view('alert')  ?>	
		<div class="box">
			<div class="box-header">
				<h3 class="box-title"><b>Data Unit</b></h3>
				<div class="pull-right">
				<a href="<?=site_url('unit/add')?>" class="btn btn-primary btn-flat">
					<i class=" fa fa-plus"></i> Tambah unit
				</a>
			</div>
				
			</div>
			<div class="box-body table-responsive">
				<table class="table table-bordered table striped " id="table1">
					<thead >
						<tr class="text-center">
							<th>No</th>
							<th>Nama unit</th>
							<th>Type</th>
							<th>Luas Tanah</th>
							<th>Harga Jual</th>
							<th>Booking</th>
							<th>Uang Muka</th>
							
							<th>Harga Total</th>
							<th>Status</th>							
							<th >Action</th>

						</tr>
					</thead>
					<tbody>
						<?php $no = 1;
						foreach($row->result() as $key => $data) { ?>
						<tr class="text-center">
							<td><?=$no++?></td>
							<td><?=$data->nama_unit?></td>
							<td><?=$data->tipe?></td>
							<td><?=$data->luas_tanah ."M<sup>2"?></td>
							<td><?="Rp." .number_format($data->harga,"0",",",".")?></td>
							<td><?="Rp." .number_format($data->booking,"0",",",".")?></td>
							<td><?="Rp." .number_format($data->uangmuka,"0",",",".")?></td>
							
							<td><?="Rp." .number_format($data->totalunit,"0",",",".")?></td>
							<td><?=$data->status == 1?"Sudah Terjual" : "Tersedia"?></td>
							
						
							<td class="text-center" width="60px">
								<a href="<?=site_url('unit/edit/' .$data->unit_id)?>"  class="btn btn-primary btn-xs"><i class="fa fa-pencil">Edit</i>
							</td>
						</tr>
						<?php
							}?>
					</tbody>
					
				</table>
			</div>
		</div>
  

</section>