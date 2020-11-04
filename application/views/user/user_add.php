<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    User Add
    <small>Tambah Penguna Aplikasi</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="<?= base_url('user') ?>"> User Data</a></li>
    <li class="active">Tambah User</li>
  </ol>
</section>

<section class="content">
  <div class="row">
    <div class="col-md-6">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Tamah Data</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <?php echo validation_errors(); ?>
          <form action="" method="post">
            <div class="form-group">
              <label for="exampleInputEmail1">Username</label>
              <input type="text" class="form-control" id="username" name="username" placeholder="Enter username">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Nama</label>
              <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Password</label>
              <input type="password" class="form-control" id="password" name="password" placeholder="Enter Password">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Password Confirmation </label>
              <input type="password" class="form-control" id="passconf" name="passconf" placeholder="Enter Password Confirmation">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Alamat</label>
              <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Enter Alamat">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Level User</label>
              <select name="level" id="level" class="form-control">
                <option value="">Pilih Level User</option>
                <option value="1">Admin</option>
                <option value="2">User</option>
              </select>
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-success btn-flat">Save</button>
              <button type="Reset" class="btn btn-warning btn-flat">Reset</button>
            </div>
          </form>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->

    </div>
  </div>
</section>