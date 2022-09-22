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
	<?php $this->view('alert')  ?>	
		<div class="box">
			<div class="box-header">
				<h3 class="box-title">Arsip Konsumen</h3>
			<div class="pull-right">
				<a href="<?=site_url('arsip/add')?>" class="btn btn-primary btn-flat">
          		<i class=" fa fa-plus"></i> Input Arsip
        		</a>
				
			</div>
				
			</div>
			<div class="box-body table-responsive">
				<table class="table table-bordered table striped" id="table1">
					<thead>
						<tr style="white-space: nowrap">
							<th>No</th>
							<th>Nama Konsumen</th>
							<th>Pekerjaan</th>
							<th>KTP</th>							
							<th>KK</th>
							<th>Akta Nikah</th>
							<th>Foto</th>
							<th>Slip Gaji</th>
							<th>NPWP</th>
							<th>SK Pertama</th>
							<th>Kartu Pegwawai</th>
							<th>SK Bekerja</th>
							<th>SK Usaha</th>
							<th>SIUP</th>
							<th>Ket.Penghasilan(Desa)</th>							
							<th>Rekening Koran</th>
							<th>Neraca</th>
							
							
						</tr>
					</thead>
					<tbody>
						<?php $no = 1;
						foreach($row->result() as $key => $data) { ?>
						<tr>
							<td><?=$no++?></td>
							<td><?=$data->nama_pemesan?></td>							
							<td><?=$data->kategori_arsip?></td>

								<td><?php if($data->ktp != null ) { ?>
								<a href="<?=base_url('uploads/arsip/ktp/'.$data->ktp)?>" class="btn btn-info btn-xs"><i class=" fa fa-eye">Lihat</a></td>								
								<?php } ?>
							
							
								<?php if($data->kk != null ) { ?>
								<td><a href="<?=base_url('uploads/arsip/kk/'.$data->kk)?>" class="btn btn-info btn-xs"><i class=" fa fa-eye">Lihat</a></td>								
								<?php } ?>

								<td><?php if($data->akta_nikah != null ) { ?>
								<a href="<?=base_url('uploads/arsip/akta_nikah/'.$data->akta_nikah)?>" class="btn btn-info btn-xs"><i class=" fa fa-eye">Lihat</a></td>								
								<?php } ?>

								<td><?php if($data->foto != null ) { ?>
								<a href="<?=base_url('uploads/arsip/foto/'.$data->foto)?>" class="btn btn-info btn-xs"><i class=" fa fa-eye">Lihat</a></td>								
								<?php } ?>

								<td><?php if($data->slipgaji != null ) { ?>
								<a href="<?=base_url('uploads/arsip/slipgaji/'.$data->slipgaji)?>" class="btn btn-info btn-xs"><i class=" fa fa-eye">Lihat</a></td>								
								<?php } ?>

								<td><?php if($data->npwp != null ) { ?>
								<a href="<?=base_url('uploads/arsip/npwp/'.$data->npwp)?>" class="btn btn-info btn-xs"><i class=" fa fa-eye">Lihat</a></td>								
								<?php } ?>
<td>
								<?php if($data->skpertama != null ) { ?>
								<a href="<?=base_url('uploads/arsip/skpertama/'.$data->skpertama)?>" class="btn btn-info btn-xs"><i class=" fa fa-eye">Lihat</a></td>								
								<?php } ?>
						
								<td><?php if($data->k_pegawai != null ) { ?>
								<a href="<?=base_url('uploads/arsip/k_pegawai/'.$data->k_pegawai)?>" class="btn btn-info btn-xs"><i class=" fa fa-eye">Lihat</a></td>								
								<?php } ?>

								<td><?php if($data->skbekerja != null ) { ?>
								<a href="<?=base_url('uploads/arsip/skbekerja/'.$data->skbekerja)?>" class="btn btn-info btn-xs"><i class=" fa fa-eye">Lihat</a></td>								
								<?php } ?>

								<td><?php if($data->sku != null ) { ?>
								<a href="<?=base_url('uploads/arsip/sku/'.$data->sku)?>" class="btn btn-info btn-xs"><i class=" fa fa-eye">Lihat</a></td>								
								<?php } ?>

								<td><?php if($data->siup != null ) { ?>
								<a href="<?=base_url('uploads/arsip/siup/'.$data->siup)?>" class="btn btn-info btn-xs"><i class=" fa fa-eye">Lihat</a></td>								
								<?php } ?>

								<td><?php if($data->ket_desa != null ) { ?>
								<a href="<?=base_url('uploads/arsip/ket_desa/'.$data->ket_desa)?>" class="btn btn-info btn-xs"><i class=" fa fa-eye">Lihat</a></td>								
								<?php } ?>

								<td><?php if($data->rek_koran != null ) { ?>
								<a href="<?=base_url('uploads/arsip/rek_koran/'.$data->rek_koran)?>" class="btn btn-info btn-xs"><i class=" fa fa-eye">Lihat</a></td>								
								<?php } ?>

								<td><?php if($data->neraca != null ) { ?>
								<a href="<?=base_url('uploads/arsip/neraca/'.$data->neraca)?>" class="btn btn-info btn-xs"><i class=" fa fa-eye">Lihat</a></td>								
								<?php } ?>


								
							
							

							
							
						</tr>
						<?php
							}?>
					</tbody>
					
				</table>
			</div>
		</div>
  

</section>