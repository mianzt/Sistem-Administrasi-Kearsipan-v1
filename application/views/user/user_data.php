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
				<h3 class="box-title">Data User</h3>
				<div class="pull-right">
				<a href="<?=site_url('user/add')?>" class="btn btn-primary btn-flat">
					<i class=" fa fa-plus"></i> Tambah user
				</a>
			</div>
				
			</div>
			<div class="box-body table-responsive">
				<table class="table table-bordered table striped" id="table1">
					<thead>
						<tr>
							<th>No</th>
							<th>Nama</th>
							<th>Username</th>							
							<th>Level</th>
							<th>Action</th>
							
						</tr>
					</thead>
					<tbody>
						<?php $no = 1;
						foreach($row->result() as $key => $data) { ?>
						<tr>
							<td><?=$no++?></td>
							<td><?=$data->name?></td>
							<td><?=$data->username?></td>							
							<td><?=$data->level?></td>

							
							<td class="text-center" width="160px">
								<a href="<?=site_url('user/edit/' .$data->user_id)?>"  class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i>Edit
								<a href="<?=site_url('user/del/' .$data->user_id)?>" onclick="return confirm('Yakin ingin hapus?')" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i>Delete
							</td>
						</tr>
						<?php
							}?>
					</tbody>
					
				</table>
			</div>
		</div>
  

</section>