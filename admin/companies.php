<?php
$title = "Customer";
include('header.php'); ?>

<?php include('nav.php'); ?>

<!-- DataTables -->
<link rel="stylesheet" href="plugins/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Customer
      <small></small>
    </h1>
    <br>
    <a href="companies_form.php?a=Create" class="btn btn-success">Create New Customer</a>
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
                <th>Customer Name</th>
                <th></th>
                <th>GST Reg No.</th>
                <th>Telephone</th>
                <th>Contact Person</th>
                <th>Users</th>
                <th>Packages</th>
                <th>Status</th>
                <th>Actions</th>
              </tr>
              </thead>
              <tbody>
                <?php

                  include("_companies.php");

                  for($i=1; $i<sizeof($companies);$i++){
                    $p = rand(1,6)
                ?>
                <tr>
                  <td><?= $i ?></td>
                  <td><?= $companies[$i][0] ?></td>
                  <td>
                    <?php
                      $warn = rand(0,1);
                    ?>
                    <button <?= $warn == 1 ? 'style="display:none;"' : '' ?> class="btn btn-danger warningsent" id="warningsent<?= $i ?>" title="Click to unsend warning">Overdue Reminder</button>
                    <button <?= $warn == 0 ? 'style="display:none;"' : '' ?> class="btn btn-default sendwarning" id="sendwarning<?= $i ?>" title="Click to send warning">Send Reminder</button>
                  </td>
                  <td><?= $companies[$i][1] ?></td>
                  <td><?= $companies[$i][2] ?></td>
                  <td><?= $companies[$i][3] ?></td>

                  <td>
                    <a href="company_users.php?c=<?= $i-1 ?>&u=<?= $companies[$i][4] ?>" class="btn btn-primary" title="<?= $companies[$i][4] ?> users">
                      <?= $companies[$i][4] ?>
                    </a>
                  </td>
                  <td>
                    <a href="packages.php?c=<?= $i-1 ?>&p=<?= $p ?>" class="btn btn-info" title="<?= $companies[$i][4] ?> packages">
                      <?= $p ?>
                    </a>
                  </td>
                  <td>
                    <?php
                      $active = rand(0,1);
                    ?>
                    <button <?= $active == 1 ? 'style="display:none;"' : '' ?> class="btn btn-danger active" id="active<?= $i ?>" title="Click to change to active">Inactive</button>
                    <button <?= $active == 0 ? 'style="display:none;"' : '' ?> class="btn btn-success inactive" id="inactive<?= $i ?>" title="Click to change to inactive">Active</button>
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
    $('#example1').DataTable();

    $(".warningsent").click(function(){
      $(this).hide();
      var id = $(this).attr("id").replace("warningsent", "");
      $("#sendwarning"+id  ).show();
    });

    $(".sendwarning").click(function(){
      var confirm = window.confirm("Confirm send reminder?");
      if( confirm ){
        $(this).hide();
        $("#warningsent"+ $(this).attr("id").replace("sendwarning", "")).show();
      }
    });

    $(".active").click(function(){
      $(this).hide();
      var id = $(this).attr("id").replace("active", "");
      $("#inactive"+id  ).show();
    });

    $(".inactive").click(function(){
      var confirm = window.confirm("Confirm inactive?");
      if( confirm ){
        $(this).hide();
        $("#active"+ $(this).attr("id").replace("inactive", "")).show();
      }
    });

  });
</script>
<!-- end js -->


<?php include('end.php'); ?>
