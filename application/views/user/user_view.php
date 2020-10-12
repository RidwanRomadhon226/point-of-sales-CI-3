<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    User Data
    <small>Penguna Aplikasi</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">USer Data</li>
  </ol>
</section>


<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Data Table With Full Features</h3>
          <div class="pull-right">
            <a href="<?= base_url('user/add') ?>" class="btn btn-xs btn-info">Tambah Data</a>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>#</th>
                <th>User Id</th>
                <th>username</th>
                <th>name</th>
                <th>alamat</th>
                <th>Level</th>
                <th>action</th>
              </tr>
            </thead>
            <tbody>
              <?php $no = 1;
              foreach ($row->result() as $key => $data) {
              ?>
                <tr>
                  <td><?= $no++ ?></td>
                  <td><?= $data->user_id ?></td>
                  <td><?= $data->username ?></td>
                  <td><?= $data->name ?></td>
                  <td><?= $data->alamat ?></td>
                  <td><?= $data->level == 1 ? "Admin" : "kasir" ?></td>
                  <td>
                    <a href="<?= base_url('user/edit/' . $data->user_id) ?>" class="btn btn-info btn-xs">edit</a>
                    <a href="http://" class="btn btn-danger btn-xs">hapus</a>
                  </td>
                </tr>
              <?php
              } ?>
            </tbody>
            <tfoot>
              <tr>
                <th>#</th>
                <th>User Id</th>
                <th>username</th>
                <th>name</th>
                <th>alamat</th>
                <th>action</th>
              </tr>
            </tfoot>
          </table>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->

    </div>
  </div>
</section>