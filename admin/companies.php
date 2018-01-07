<?php
$title = "Companies";
include('header.php'); ?>

<?php include('nav.php'); ?>

<!-- DataTables -->
<link rel="stylesheet" href="plugins/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Companies
      <small></small>
    </h1>
    <br>
    <a href="companies_form.php?a=Create" class="btn btn-info">Create New Company</a>
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
                <th>Company Name</th>
                <th>GST Registration No.</th>
                <th>Telephone</th>
                <th>Contact Person</th>
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
                  <td><?= generateRandomString(); ?> Company</td>
                  <td><?= generateRandomNo(); ?></td>
                  <td><?= generateRandomNo(3); ?>-<?= generateRandomNo(3); ?>-<?= generateRandomNo(3); ?></td>
                  <td><?= generateRandomString(); ?> <?= generateRandomString(); ?></td>
                  <td>
                    <a href="companies_form.php?a=Edit" class="btn btn-warning">
                      <i class="fa fa-edit"></i>
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
