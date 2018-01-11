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
    <a href="companies_form.php?a=Create" class="btn btn-success">Create New Company</a>
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
                <th>Users</th>
                <th>Packages</th>
                <th>Actions</th>
              </tr>
              </thead>
              <tbody>
                <?php

                function generateRandomNo($length = 10) {
                      $characters = '123456789';
                      $charactersLength = strlen($characters);
                      $randomString = '';
                      for ($i = 0; $i < $length; $i++) {
                          $randomString .= $characters[rand(0, $charactersLength - 1)];
                      }
                      return $randomString;
                  }

                  include("_companies.php");

                  for($i=1; $i<sizeof($companies);$i++){
                ?>
                <tr>
                  <td><?= $i ?></td>
                  <td><?= $companies[$i][0] ?></td>
                  <td><?= $companies[$i][1] ?></td>
                  <td><?= $companies[$i][2] ?></td>
                  <td><?= $companies[$i][3] ?></td>
                  <td>
                    <a href="company_users.php?c=<?= $i-1 ?>&u=<?= $companies[$i][4] ?>" class="btn btn-primary" title="<?= $companies[$i][4] ?> users">
                      <?= $companies[$i][4] ?>
                    </a>
                  </td>
                  <td>
                    <a href="companies_form.php?a=Edit" class="btn btn-info" title="<?= $companies[$i][4] ?> users">
                      <?= generateRandomNo(1) ?>
                    </a>
                  </td>
                  <td>

                    <a href="companies_form.php?a=Edit&c=<?= $i-1 ?>" class="btn btn-warning">
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
