<section class="content-header">
      <h1>
        
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i></a></li>
        <li class="active">Booking</li>

        
      </ol>
</section>

<section class="content">
  <?php $this->view('alert')  ?>  
    <div class="box">
      <div class="box-header">
        <h3 class="box-title">Data Konsumen</h3>
        <div class="pull-right">
        <a href="<?=site_url('konsumen/add')?>" class="btn btn-primary btn-flat">
          <i class=" fa fa-plus"></i> Input Konsumen
        </a>
      </div>
        
      </div>
      <div class="box-body table-responsive">
        <table class="table table-bordered table striped" id="table1">
          <thead>
            <tr style="white-space: nowrap">
              <th>No.</th> 
              <th>No.Transaksi</th>            
              <th>No.KTP</th>
              <th>Nama Pemesan</th>
              <th>No.Telpon</th>
              <th>Alamat</th>              
              <th>Pekerjaan</th>
              <th>Nama Pasangan</th>              
              <th>Pembelian</th>                        
              
              <th>Action</th>
              <th>Surat Serah Terima</th>
            </tr>
          </thead>
          <tbody>
            <?php 
            $no = 1;
            foreach($row->result() as $key => $data) { ?>
            <tr>
              <td><?=$no++?></td>
              <td><?=$data->no_transaksi?></td>              
              <td><?=$data->no_ktp?></td>              
              <td><?=$data->nama_pemesan?></td>
              <td><?=$data->no_telpon?></td>
              <td><?=$data->alamat?></td>
              <td><?=$data->pekerjaan?></td>
              <td><?=$data->nama_p?></td>
             
              <td><?=$data->pembayaran == 1?"Cash" : "Kredit"?></td>       
              
              
              <td class="text-center" width="100px">
                <a href="<?=site_url('konsumen/detail/' .$data->konsumen_id)?>"  class="btn btn-success btn-xs"><i class="fa fa-eye"></i>Detail
                <a href="<?=site_url('konsumen/edit/' .$data->konsumen_id)?>"  class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i>Edit
                
              </td>
              <td class="text-center" >
                <a href="<?=site_url('konsumen/cetaksurat/' .$data->konsumen_id)?>"  class="btn btn-info btn-xs"><i class="fa fa-print"></i>cetak
                
              </td>
              
            </tr>
            <?php
              }?>
          </tbody>
          
        </table>
      </div>
    </div>
  

</section>