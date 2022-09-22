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
              <h3 class="box-title"><?=ucfirst($page)?> Akun</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form action="<?=site_url('user/process')?>" method="post">
              <div class="box-body">
                <div class="form-group">
                  <label>Nama</label>
                  <input type="hidden" name="id" value="<?=$row->user_id?>">
                  <input type="text" class="form-control" name="nama" value="<?=$row->name?>" placeholder="nama" required>
                </div>
                <div class="form-group">
                  <label>Username</label>
                  <input type="text" class="form-control" name="user_name" value="<?=$row->username?>" placeholder="Username" required>
                </div>
                <div class="form-group">
                  <label>Password</label>
                  <input type="password" class="form-control" name="pswrd" value="<?=$row->password?>" placeholder="Password" required>
                </div>
                <div class="form-group">
                  <label>Level</label>
                  <select name="lvl" class="form-control">
                    <option value="1" <?=set_value('level')== 1? "selected" : null?>>Admin</option>
                    <option value="2" <?=set_value('level')== 2? "selected" : null?>>Marketing</option>
                    <option value="3" <?=set_value('level')== 3? "selected" : null?>>Administrasi</option>
                    
                  </select>
                  
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




  

</section>