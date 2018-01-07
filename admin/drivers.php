<?php
$title = "Drivers";
include('header.php'); ?>

<?php include('nav.php'); ?>

<!-- DataTables -->
<link rel="stylesheet" href="plugins/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Drivers
      <small></small>
    </h1>
    <br>
    <a href="drivers_form.php?a=Create" class="btn btn-info">Create New Driver</a>
  </section>



  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-xs-12">

        <div class="box">
          <div class="box-header">
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <table id="example1" class="table table-bordered table-hover table-striped">
              <thead>
              <tr>
                <th>ID</th>
                <th>Full Name</th>
                <th>Vehicle No</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Username</th>
                <th>Actions</th>
              </tr>
              </thead>
              <tbody>
                <?php
                  function generateRandomString($length = 5) {
                        $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
                        $charactersLength = strlen($characters);
                        $randomString = '';
                        for ($i = 0; $i < $length; $i++) {
                            $randomString .= $characters[rand(0, $charactersLength - 1)];
                        }
                        return $randomString;
                    }

                    function generateRandomNo($length = 10) {
                          $characters = '0123456789';
                          $charactersLength = strlen($characters);
                          $randomString = '';
                          for ($i = 0; $i < $length; $i++) {
                              $randomString .= $characters[rand(0, $charactersLength - 1)];
                          }
                          return $randomString;
                      }

                  for($i=1; $i<50;$i++){
                ?>
                <tr>
                  <td><?= $i ?></td>
                  <td><?= generateRandomString(); ?> <?= generateRandomString(); ?></td>
                  <td><?= generateRandomString(3).generateRandomNo(4); ?></td>
                  <td><?= generateRandomNo(3); ?>-<?= generateRandomNo(3); ?>-<?= generateRandomNo(3); ?></td>
                  <td><?= generateRandomString(); ?>@<?= generateRandomString().".com"; ?></td>
                  <td><?= generateRandomString(6); ?></td>
                  <td>
                    <a href="drivers_form.php?a=Edit" class="btn btn-warning" title="Edit">
                      <i class="fa fa-edit"></i>
                    </a>

                    <a href="users_activity.php" class="btn btn-primary" title="Activity">
                      <i class="fa fa-list"></i>
                    </a>

                    <button class="btn btn-danger">
                      <i class="fa fa-trash"></i>
                    </button>

                  </td>
                </tr>
              <?php } ?>
              </tbody>

            </table>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php include('footer.php'); ?>
<!--  your js here -->
<!-- DataTables -->
<script src="plugins/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="plugins/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
<!-- end js -->


<?php include('end.php'); ?>
