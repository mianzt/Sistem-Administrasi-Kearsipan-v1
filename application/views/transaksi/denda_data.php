<section class="content-header">
      <h1>
        
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i></a></li>
        <li class="active">pembatalan</li>

        
      </ol>
</section>

<section class="content">
	<?php $this->view('alert')  ?>	
		

  <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title"><b></b></h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
          <!-- isi konten -->
          <div class="col-md-12">
            
            <div class="box">
      <div class="box-header">
        <h3 class="box-title"> <b>LIST PEMBATALAN</b></h3>
        
        
      </div>


      <div class="box-body table-responsive">
        
        <table class="table table-bordered table striped" id="table1">
          <thead>
            <tr align="center">
              <th>No.</th>
              <th>Nama Konsumen</th> 
              <th width="150px">Tanggal Pembatalan</th>              
              <th>Alasan</th>
              <th>Unit</th>              
              <th>Uang booking</th>
              <th>Jumlah denda</th>  
                        
            </tr>
          </thead>
          <tbody>
            <?php $no=1;
            foreach($row->result() as $key => $data) { ?>
            <tr>
              <td><?=$no++?></td>
              <td><?=$data->nama?></td>
              <td class="text-center" width="160px"><?=date('d F Y', strtotime($data->tgl_denda));?></td>
              <td><?=$data->alasan ==1?"Ditolak Bank" : "Mengundurkan diri"?></td>
              <td><?=$data->kavling?></td>             
              
              <td><?=number_format($data->uang_booking,"0",",",".")?></td>
              <td><?=number_format($data->jml_denda,"0",",",".")?></td>          

            </tr>
            <?php
              }?>
          </tbody>
        </table>
      </div>
    </div>
  </div>

        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          
        </div>
        <!-- /.box-footer-->
      </div>


<!-- pembatalan booking -->



</section>
